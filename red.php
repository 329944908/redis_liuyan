<?php
	function connectRedis(){
		$redis = new \Redis();
		$redis ->connect("47.93.220.17",6379);
		return $redis;
	}
	function getId($type = 'message'){
		$redis = connectRedis();
		$key = "YYX_GET_ID_".$type;
		$id = $redis->incr($key);
		return $id;
	}
	function addMessage($key,$value){
		$redis = connectRedis();
		return $redis->hMset($key,$value);
	}
	function addMessageLists($key,$score,$value){
		$redis = connectRedis();
		return $redis->zadd($key,$score, $value);
	}
	function getMessageLists($key,$offect,$limit){
		$redis = connectRedis();
		return $redis->zRange($key,$offect,$limit);
	}
	function getMessageInfo($key){
        $redis = connectRedis();
        return $redis->hGetAll($key);
    }
   	function delMessage($key){
        $redis = connectRedis();
        return $redis->del($key);
    }

    function delMessageListItem($key,$value) {
         $redis = connectRedis();
        return $redis->zRem($key, $value);
    }