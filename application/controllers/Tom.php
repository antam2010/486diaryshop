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
        redirect('/tom/list');
    }
    public function list() {
        $this->load->view('/tom/list');
    }

   

}