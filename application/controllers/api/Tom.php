<?php
defined('BASEPATH') or exit('No direct script access allowed');
/**
 * 내 경력기술서나 자기소개서 등
 */
class Tom extends CI_Controller
{
    public $pageSize = 10;
    public $err_msg = "";

    public function __construct()
    {
        parent::__construct();

        $this->load->model('api/Tom_m', 'tom_m');
        $this->load->library('linput');
        $this->load->helper('url');
        $this->load->library('pdf');
    }
    /**
     * 게시판 리스트
     */
    public function projectList()
    {
        $indata = [];
        $page = round($this->input->get('page', true)) ?? 0;
        $pageSize = round($this->input->get('page_size', true)) ?? $this->pageSize;

        $res = $this->tom_m->getProjectList($page, $pageSize, $indata);     
        
        echo json_encode($res);
    }

    public function personalList() 
    {

        $res = $this->tom_m->getPersonalList();

        echo json_encode($res);
    }

    /**
     * PDF 기능만들거면 쓰면 될듯
     */
    public function pdf_whoami() {

        $indata = [];
        $page = 0;
        $pageSize = 999;

        $res = $this->tom_m->getProjectList($page, $pageSize, $indata);  
           
        $title = "이대호 경력기술서";
        $subject = "제목";
        $contents = json_encode($res["list"], JSON_UNESCAPED_UNICODE);

        $pdf = $this->pdf->down($title, $subject, $contents);
        echo json_encode($pdf);
    }

   

}