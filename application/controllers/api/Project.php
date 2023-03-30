<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Project extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();

        $this->load->model('api/Project_m', 'project_m');
        $this->load->library('linput');
        $this->load->helper('url');
    }
    /**
     * 게시판 리스트
     */
    public function list()
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

        $list = $this->project_m->get_list($indata);

        foreach ($list['list'] as $i=> &$row) {
            $row['num'] = $list['total'] - ((($page - 1) * $pageSize) + $i);
            $row['project_url'] = auto_link($row['project_url'], 'url', true);
        }

        $res['list'] = $list['list'];
        $res['total'] = $list['total'];
        $res['err'] = 0;
        echo json_encode($res);
    }

    /**
     * 카테고리 리스트
     */
    public function ctgList()
    {
        $list = $this->config->item('board_category');
        $res['list'] = $list;
        $res['err'] = 0;
        echo json_encode($res);
    }

    public function add()
    {

        $res = [];
        $param = $this->input->post();

        if ($this->linput->find(['board_category', 'board_title', 'member_idx'], $param)) {

            $indata = [
                'member_idx' => $this->input->post('member_idx', true),
                'board_category' => $this->input->post('board_category', true),
                'board_level' => $this->input->post('board_level', true),
                'board_title' => $this->input->post('board_title', true),
                'board_contents' => $this->input->post('board_contents', true),

            ];

            $rst = $this->project_m->add($indata);
            if ($rst > 0)
                $res["err"] = 0;

        } else {
            $res["err"] = 301;
            $res["err_msg"] = "잘못된 접근입니다.";
        }

        echo json_encode($res);
    }

}