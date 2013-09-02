<?php
 ob_start(); 
 session_start();
 include('include/database.php');
 $cname=$_SESSION['uname'];
 $tim=date('Y-m-d H:i:s'); 
 echo $query="update log_history set logout_time='".$tim."' where c_name='$cname' order by l_id Desc LIMIT 1";
 if(mysql_query($query))
 {
  session_destroy();
 header('Location: index.php');
	exit;
 }
?>