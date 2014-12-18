<?php
 include("conn.php");

 $sql="select * from question order by id desc ";
 $query=mysql_query($sql);
 while($rs=mysql_fetch_array($query)){

 ?>
 <h2>title:<?php echo $rs['title'] ?></h2>
 asked by <a href="#"><?php echo $_SESSION["uid"];?></a>
 <p><?php echo $rs['content'] ?></p>
 <hr>

 <?php
}
 ?>