<?php
include_once $_SERVER["DOCUMENT_ROOT"]."/class/gallery.php";

$gallery = new Gallery();

$res = [];

$page = round($_GET['page']) ?? 1;
$pageSize = round($_GET['pageSize']) ?? 5;

$indata = [];
$indata['board_category'] = $_GET['board_category'];

$list = $list = $gallery->list($indata);

foreach ($list['list'] as $i => $row) {
    $me = $list['list'][$i];

    $me['num'] = $list['total'] - ((($page - 1) * $pageSize) + $i);
    $list['list'][$i] = $me;
}

$res['list'] = $list['list'];
$res['total'] = $list['total'];
$res['err'] = 0;
echo json_encode($res);