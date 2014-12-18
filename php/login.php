<?php  
header("Content-Type:text/html;charset=utf-8");
session_start();
include("conn.php");

$name=$_POST['user'];  
$pwd=$_POST['password'];  
$sql="select * from user where name='$name' and password='$pwd'";  
$query=mysql_query($sql);
$result = mysql_fetch_array($query); 
if ($result['name']==$name && $result['password']==$pwd){   
      $_SESSION["user"]=$name;
      $_SESSION["uid"]=$result['uid'];
      $_SESSION["score"]=$result['score'];
      echo "<script language='javascript'>window.location='http://localhost/wendawq/home2.php'</script>"; 
}   
else{
	  echo "<script language='javascript'>alert('登录失败')</script>";   
      echo "<script language='javascript'>window.location='http://localhost/wendawq/login.html'</script>";
}  

?>