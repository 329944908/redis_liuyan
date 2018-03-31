<?php
	header("Content-type:text/html;charset=utf-8");
    include "red.php";

    $key = "YYX_MESSAGE_LISTS";
    $res = getMessageLists($key,0,10); 
    $data = array();
    foreach ($res as $key => $value) {
    	$infoKey = 'YYX_MESSAGE_INFO_'.$value;
    	$info = getMessageInfo($infoKey);
    	$data[] = $info;
    }
  include "./view/list.html";