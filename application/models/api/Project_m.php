<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Project_m extends CI_Model {

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
    public function get_list(array $indata = [])
    {
        $where = "";
        $bind = [];

        // if( isset($indata['board_category']) ) {
        //     $where .= " AND b.board_category = ?";
        //     array_push($bind, $indata['board_category']);
        // }

        $sql = "
        SELECT SQL_CALC_FOUND_ROWS
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


}
