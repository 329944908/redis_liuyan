<?php
	include "red.php";
	$id = $_POST['id'];
	$name = $_POST['name'];
	$message = $_POST['message'];
	$key = "YYX_MESSAGE_INFO_".$id;
	$value = array(
		'id'		=>$id,
		'name'		=>$name,
		'message'	=>$message
		);
	addMessage($key,$value);