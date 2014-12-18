<?php
session_start();
header("Content-Type:text/html;charset=utf-8");



include("conn.php");
$uid = $_SESSION["uid"];
$usersql="select score from user where uid=$uid";
$userquery=mysql_query($usersql);
$rs=mysql_fetch_array($userquery);
$score=$rs["score"];

if($score<10){
	echo "<script language='javascript'>alert('积分不足~每回答一次加3分~')</script>"; 
	echo "<script language='javascript'>window.location='http://localhost/wendawq/home2.php'</script>"; 
}else{
    $sql="insert into question(qid,uid,title,content) values ('','$uid','$_POST[questiontitle]','$_POST[questioncont]')";
    mysql_query($sql);
    $usersql="update user set score = score-3 where uid = $uid" ;
    mysql_query($usersql);	
    $_SESSION["question"]=$_POST["questiontitle"];
    echo "<script language='javascript'>window.location='http://localhost/wendawq/home2.php'</script>"; 

}

?>
