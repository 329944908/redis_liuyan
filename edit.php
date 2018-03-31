<?php
	include "red.php";
	$id = $_GET['id'];
	$infoKey = "YYX_MESSAGE_INFO_".$id;
	$info = getMessageInfo($infoKey);
	include "./view/edit.html";
