<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Board_m extends CI_Model {

    public function __construct()
    {
        parent::__construct();
    }
    /**
     * 게시판리스트
     *
     * @param integer $page
     * @param integer $pageSize
     * @param array $indata
     * @return array
     */
    public function get_list(int $page, int $pageSize, array $indata = [] )
    {
        $bind = [];
        $where = "";
        $limit = " LIMIT " . ($page-1) * $pageSize . ", " . $pageSize;
    

        if( isset($indata['board_category']) ) {
            $where .= " AND b.board_category = ?";
            array_push($bind, $indata['board_category']);
        }

        $sql = "
        SELECT SQL_CALC_FOUND_ROWS
            b.board_idx,
            b.board_title,
            b.board_contents,
            b.board_wdate,
            b.board_thumbnail,
            m.member_nickname
        FROM
            dh_board AS b
                LEFT JOIN
            dh_member AS m ON b.member_idx = m.member_idx
        WHERE 1 
        ${where}
        ORDER BY b.board_wdate DESC
        ${limit}
        ";
        $list = $this->db->query($sql, $bind)->result_array();

        $sql = "SELECT FOUND_ROWS() as cnt";
        $total = $this->db->query($sql)->row()->cnt;

        $result = [
            'list' => $list,
            'total' => $total
        ];
        return $result;
    }
    public function add($indata) {
        $this->db->insert('dh_board', $indata);
        return $this->db->insert_id();
    }


}
