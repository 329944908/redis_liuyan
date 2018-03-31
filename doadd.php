<?php
	include "red.php";
	$name = $_POST['name'];
	$message = $_POST['message'];
	$time = time();
	$id = getId();
	$key = "YYX_MESSAGE_INFO_".$id;
	$value = array(
		'id'		=>$id,
		'name'		=>$name,
		'message'	=>$message,
		);
	addMessage($key,$value);
	$listKey = "YYX_MESSAGE_LISTS";
	addMessageLists($listKey,$time,$id);