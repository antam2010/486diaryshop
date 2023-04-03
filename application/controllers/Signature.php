<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Signature extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->helper('url');
    }

    public function index() {
        redirect('/signature/list');
    }
    public function list() {
        $this->load->view('/signature/list');
    }

}