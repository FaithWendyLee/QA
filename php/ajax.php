<?php
header ( "Content-Type:text/html;charset=utf-8" );
session_start ();

include("conn.php");

$qid = $_GET['id'];

$success = mysql_query ( "update question set praisecount = praisecount+1 where qid = $qid" );
$result = mysql_query ( "select * from question where qid = $qid" );
$row = mysql_fetch_array($result);

if($success){
	$praisecount = iconv("gbk","utf-8",$row['praisecount']);
	$response = "已赞(".$praisecount.")";
}
else{
	$response = "已赞";
}

echo $response;

?>