<?php
	require './predis/autoload.php';
	$redis = new Predis\Client(array(
		'scheme' => 'tcp',
		'host' => '127.0.0.1',
		'port' => 6379,
	));

	$link = mysql_connect('127.0.0.1','root','880829l');
	mysql_select_db('baike',$link);
	$sql = "select id,summary from jk_words";
	$res = mysql_query($sql);
	while($rows = mysql_fetch_row($res)){
		echo "<pre>";
		var_dump($rows);
		exit;
		$ress = $redis->set('doc:'.$rows['id'],'summary',$rows['summary']);
		echo "yes <br/>";
	}

    

