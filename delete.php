<?php
	include "red.php";
	$id = $_GET['id'];
	$key = "YYX_MESSAGE_INFO_".$id;
	delMessage($key);
	$listKey = "YYX_MESSAGE_LISTS";
    delMessageListItem($listKey,$id);
