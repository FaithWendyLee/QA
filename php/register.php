<?php
header("Content-Type:text/html;charset=utf-8");



include("conn.php");
$sql="insert into user(uid,name,email,password) values ('','$_POST[name]','$_POST[email]','$_POST[password]')";
$_result=mysql_query($sql);
$row = mysql_fetch_array($_result);

echo "<script language='javascript'>window.location='http://localhost/wendawq/login.html'</script>"; 

?>
