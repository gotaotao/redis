<?php
	require './predis/autoload.php';
	$redis = new Predis\Client(array(
		'scheme' => 'tcp',
		'host' => '127.0.0.1',
		'port' => 6379,
	));

	$link = mysql_connect('127.0.0.1','root','880829l');
	mysql_select_db('baike',$link);
	$sql = "select * from jk_words";
	$res = mysql_query($sql);
	while($rows = mysql_fetch_assoc($res)){
		
		$ress = $redis->hset('doc:'.$rows['id'],'summary',$rows['summary'],'cid',$rows['cid'],'scontent',$rows['scontent'],'mulu',$rows['mulu']);
		if($ress){
			echo "yes <br/>";
		}else{
			echo "no <br/>";
		}
		
	}

    

