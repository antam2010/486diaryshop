<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Tom_m extends CI_Model {

    public function __construct()
    {
        parent::__construct();
    }
    /**
     * 경력증명서 리스트
     *
     * @param array $indata
     * @return array
     */    
    public function getProjectList(array $indata = [])
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

        $result = [
            'list' => $list,
            'total' => $total
        ];
        return $result;
    }
    /**
     * 프로젝트 파일 리스트
     *
     * @param integer $project_idx
     * @return array
     */
    public function getFileList(int $project_idx) {

        $where = [ 'project_idx' => $project_idx ];
        $result = $this->db
                ->select('file_name, file_path')
                ->get_where('dh_project_file', $where)
                ->result_array();
        return $result;
    }
    /**
 * 자기소개서 프로젝트 기술서 그룹 리스트
 */
    public function getPersonalList() {

        $projectSettings = ['php', 'java', 'vue', 'javascript', 'jquery'];
        $progresslist = array_fill_keys($projectSettings, 0);

        $query = $this->db->select('project_setting')->get('dh_project');

        $total = $query->num_rows();

        foreach ($query->result() as $row) {
            $projectSetting = strtolower($row->project_setting);
            $progresslist = $this->countProjectSettings($projectSetting, $projectSettings, $progresslist);
        }

        $progresslist = $this->calculatePercentages($progresslist, $total);

        $result = [
            'progresslist' => $progresslist
        ];
        
        return $result;
    }

    /**
     * 프로젝트 설정 개수 세기
     */
    private function countProjectSettings($projectSetting, $projectSettings, $result) {
        foreach ($projectSettings as $part) {
            if ($part === 'java') {
                // Count only if 'java' is found and 'javascript' is not found
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
     */
    private function calculatePercentages($result, $total) {
        foreach ($result as $key => $value) {
            $result[$key] = round(($value / $total) * 100);
        }

        return $result;
    }



}
