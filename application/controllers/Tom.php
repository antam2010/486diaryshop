<?php
defined('BASEPATH') or exit('No direct script access allowed');

/**
 * 내 개인정보 컨트롤러
 */
class Tom extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->helper('url');
    }

    public function index() {
        redirect('/tom/projectList');
    }
    public function projectList() {
        $this->load->view('/tom/projectList');
    }
    public function personalList() {
        $this->load->view('/tom/personalList');
    }

   

}