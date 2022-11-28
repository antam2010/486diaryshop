<?php
include_once $_SERVER["DOCUMENT_ROOT"]."/class/reum_PDO.php";
class Gallery
{
    private $db;

    public function __construct()
    {
        $this->db = new Reum_PDO();
    }

    /**
     * return aray
     */
    public function list(array $indata = []) 
    {   
        $where = "";
        $bind = [];

        if( isset($indata['board_category']) ) {
            $where .= " AND b.board_category =:board_category";
            $bind['board_category'] = $indata['board_category'];
        }

        $sql = "
        SELECT SQL_CALC_FOUND_ROWS
            b.board_idx,
            b.board_category,
            b.board_title,
            b.board_contents,
            b.board_wdate,
            b.board_level,
            b.board_thumbnail,
            m.member_nickname
        FROM
            dh_board AS b
                LEFT JOIN
            dh_member AS m ON b.member_idx = m.member_idx
        WHERE 1 
        ${where}
        ORDER BY b.board_wdate DESC";
        $list = $this->db->queryAll($sql, $bind);

        $sql = "SELECT FOUND_ROWS() as cnt";
        $total = $this->db->queryOne($sql)['cnt'];

        $result = [
            'list' => $list,
            'total' => $total
        ];
        return $result;
    }

}