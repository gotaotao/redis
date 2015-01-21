<?php
	require './predis/autoload.php';
	$redis = new Predis\Client(array(
		'scheme' => 'tcp',
		'host' => '127.0.0.1',
		'port' => 6379,
	));
    echo "<meta charset='utf-8'>";
    /*
	$link = mysql_connect('127.0.0.1','root','880829l') or die('there is no links on deamon!');
	mysql_select_db('baike',$link);
	$sql = "select * from jk_words";
	$res = mysql_query($sql);
	while($rows = mysql_fetch_assoc($res)){
		
		
	}
	*/
	$mulu = $redis->hgetall('doc:570');
	echo "<pre>";
	var_dump($mulu);

    

