<?php
defined('BASEPATH') or exit('No direct script access allowed');
/**
 * 내 경력기술서나 이력서 등
 */
class Tom extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();

        $this->load->model('api/Tom_m', 'tom_m');
        $this->load->library('linput');
        $this->load->helper('url');
    }
    /**
     * 게시판 리스트
     */
    public function projectList()
    {
        $res = [];

        $page = round($this->input->get('page', true));
        $page == 0 ? 1: $page;

        $pageSize = round($this->input->get('page_size', true));
        $pageSize == 0 ? 5: $pageSize;

        $indata = [
            'page' => $page,
            'pageSize' => $pageSize
        ];

        $list = $this->tom_m->getProjectList($indata);


        foreach ($list['list'] as $i=> &$row) {
            $row['num'] = $list['total'] - ((($page - 1) * $pageSize) + $i);
            $row['project_url'] = auto_link($row['project_url'], 'url', true);
            
            $row['files'] = $this->tom_m->getFileList($row["project_idx"]);
        }
        
        $res['list'] = $list['list'];
        $res['total'] = $list['total'];
        $res['err'] = 0;
        echo json_encode($res);
    }

   

}