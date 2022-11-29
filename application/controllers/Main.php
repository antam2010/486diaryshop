<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Main extends CI_Controller {

    public function __construct()
    {
        parent::__construct();

        $this->load->model('Main_m','main_m');
        $this->load->library('linput');
    }

    /**
     * 로그인
     * @return array
     */
    public function login()
    {
        $res = [];

        $uid = $this->input->get('uid', true);
        $pwd = $this->input->get('pwd', true);
        if($pwd)  {
            $pwd = $this->linput->encrypt($pwd);
        }

        $chk = $this->main_m->loginCheck($uid, $pwd);
        if($chk > 0) {
            $row = $this->main_m->doLogin($uid, $pwd);
            $res["info"] = $row;
            $res["err"] = 0;
        } else {
            $res["err"] = 204;
            $res["err_msg"] = "아이디나 비밀번호를 확인해 주세요.";
        }
        echo json_encode($res);
    }
}
