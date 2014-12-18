<?php
session_start();
header("Content-Type:text/html;charset=utf-8");



include("conn.php");
$uid = $_SESSION["uid"];
$qid = $_SESSION["qid"];
$usersql="update user set score = score+3 where uid = $uid" ;
mysql_query($usersql);
$answersql="insert into answer(aid,qid,uid,acontent) values ('','$qid','$uid','$_POST[answercontent]')";
mysql_query($answersql);

echo "<script language='javascript'>window.location='http://localhost/wendawq/question2.php?question=$qid'</script>"; 


?>
