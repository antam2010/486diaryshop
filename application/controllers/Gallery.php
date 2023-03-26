<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Gallery extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->helper('url');
    }

    public function index() {
        redirect('/gallery/list');
    }

    public function list() {
        $this->load->view('/gallery/list');
    }

    public function write() {
        $this->load->view('/gallery/write');
    }

}