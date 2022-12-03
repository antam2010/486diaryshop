<?php
defined('BASEPATH') or exit('No direct script access allowed');

class News extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->helper('url');
    }

    public function list() {
        $this->load->view('/news/list');
    }

    public function write() {
        $this->load->view('/news/write');
    }

}