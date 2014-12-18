<?php
//连接数据库
mysql_connect("localhost","root","")or die ("mysql连接失败");
mysql_select_db("wendadata")or die("db连接失败");
mysql_query("set names 'utf8'");

?>
