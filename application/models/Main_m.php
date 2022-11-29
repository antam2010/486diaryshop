<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Main_m extends CI_Model {

    public function __construct()
    {
        parent::__construct();
    }
    /**
     * 로그인 체크
     *
     * @param string $uid
     * @param string $pwd
     * @return void
     */
    public function loginCheck(string $uid, string $pwd)
    {
        $where = [];
        $where['member_id'] = $uid;
        $where['member_pw'] = $pwd;
        $result = $this->db
            ->select('COUNT(*) as cnt')
            ->get_where('dh_member',$where)->row()->cnt;
        return $result;
    }
    /**
     * 로그인
     *
     * @param string $uid 아이디
     * @param string $pwd 비밀번호
     * @return void
     */
    public function doLogin(string $uid, string $pwd)
    {
        $where = [];
        $where['member_id'] = $uid;
        $where['member_pw'] = $pwd;
        $result = $this->db
            ->select('member_idx, member_id, member_nickname, member_level')
            ->get_where('dh_member',$where)->row_array();
        return $result;
    }

}
