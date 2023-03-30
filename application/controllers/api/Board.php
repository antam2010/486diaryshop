<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Board extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();

        $this->load->model('api/Board_m', 'board_m');
        $this->load->library('linput');
        $this->load->helper('text');
        
        $this->pageSize = 10;
    }
    /**
     * 게시판 리스트
     */
    public function list()
    {
        $res = [];

        $page = round($this->input->get('page', true));
        $page = $page == 0 ? 1 : $page;

        $pageSize = round($this->input->get('pageSize', true));
        $pageSize = $pageSize == 0 ? $this->pageSize : $pageSize;

        $indata = [
            'board_category' => $this->input->get('board_category', true)
        ];

        $list = $this->board_m->get_list($page, $pageSize, $indata);

        foreach ($list['list'] as $i => &$row) {
            $row['num'] = $list['total'] - ((($page - 1) * $pageSize) + $i);
            $row['board_contents'] = character_limiter($row['board_contents'], 2);
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

            $rst = $this->board_m->add($indata);
            if ($rst > 0)
                $res["err"] = 0;

        } else {
            $res["err"] = 301;
            $res["err_msg"] = "잘못된 접근입니다.";
        }

        echo json_encode($res);
    }

}