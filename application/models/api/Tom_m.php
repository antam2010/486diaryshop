<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Tom_m extends CI_Model {

    public function __construct()
    {
        parent::__construct();
        $this->load->helper('url');
    }
    /**
     * 경력증명서 리스트
     *
     * @param integer $page
     * @param integer $pageSize
     * @param array $indata
     * @return array
     */
    public function getProjectList(int $page, int $pageSize, array $indata = []) : array 
    {
        $where = "";
        $bind = [];

        // if( isset($indata['board_category']) ) {
        //     $where .= " AND b.board_category = ?";
        //     array_push($bind, $indata['board_category']);
        // }

        $sql = "
        SELECT SQL_CALC_FOUND_ROWS
            p.project_idx,
            p.project_company,
            p.project_name,
            CONCAT(LEFT(p.project_sdate, 7), ' ~ ', LEFT(p.project_edate, 7)) AS project_date,
            p.project_part,
            p.project_person,
            p.project_function,
            p.project_setting,
            p.project_backend,
            p.project_frontend,
            p.project_url,
            p.project_notice
        FROM
            dh_project AS p
                JOIN
            dh_member AS m ON p.member_idx = m.member_idx
        WHERE 1 
        ".$where."
        ORDER BY p.project_notice DESC, p.project_sdate DESC, p.project_idx DESC";

        $list = $this->db->query($sql, $bind)->result_array();

        $sql = "SELECT FOUND_ROWS() as cnt";
        $total = $this->db->query($sql)->row()->cnt;

        foreach ($list as $i => &$row) {
            
            $row['num'] = $total - ((($page - 1) * $pageSize) + $i);
            $row['project_url'] = auto_link($row['project_url'], 'url', true);
            $row['files'] = $this->getFileList($row["project_idx"]);
        }

        $result = [ 'list' => $list, 'total' => $total, 'err' => 0 ];
        return $result;
    }
    /**
     * 프로젝트 파일 리스트
     *
     * @param integer $project_idx
     * @return array
     */
    private function getFileList(int $project_idx) : array 
    {

        $where = [ 'project_idx' => $project_idx ];
        $result = $this->db
                ->select('file_name, file_path')
                ->get_where('dh_project_file', $where)
                ->result_array();
        return $result;
    }
    /**
     * 자기소개서 프로젝트 통계리스트
     *
     * @return array
     */
    public function getPersonalList() :array 
    {

        $projectSettings = ['php', 'java', 'vue', 'javascript', 'jquery'];
        $progresslist = array_fill_keys($projectSettings, 0);

        $query = $this->db->select('project_setting')->get('dh_project');

        $total = $query->num_rows();

        foreach ($query->result() as $row) {
            $projectSetting = strtolower($row->project_setting);
            $progresslist = $this->countProjectSettings($projectSetting, $projectSettings, $progresslist);
            $progressCntList = $this->countProjectSettings($projectSetting, $projectSettings, $progresslist);
        }

        $progresslist = $this->calculatePercentages($progresslist, $total);

        $result = [
            'progressList' => $progresslist,
            'progressCntList' => $progressCntList,
            'total' => $total,
            'err' => 0
        ];
        
        return $result;
    }

    /**
     * 각각 프로젝트마다 어떤 언어를 썻는지 구함
     *
     * @param string $projectSetting : 프로젝트 셋팅 내용
     * @param string $projectSettings : 프로젝트 셋팅 분류
     * @param array $result : 담길 값
     * @return array
     */
    private function countProjectSettings(string $projectSetting, array $projectSettings, array $result): array {
        foreach ($projectSettings as $part) {
            if ($part === 'java') {
                // 'java'를 찾되, 'javascript'가 아닌 경우만 찾기 위해 정규표현식 사용
                if (strpos($projectSetting, $part) !== false && strpos($projectSetting, 'javascript') === false) {
                    $result[$part]++;
                }
            } else {
                if (strpos($projectSetting, $part) !== false) {
                    $result[$part]++;
                }
            }
        }

        return $result;
    }

    /**
     * 백분율
     *
     * @param array $result
     * @param integer $total
     * @return array
     */
    private function calculatePercentages(array $result, int $total) : array 
    {
        foreach ($result as $key => $value) {
            $result[$key] = round(($value / $total) * 100);
        }
        return $result;
    }



}
