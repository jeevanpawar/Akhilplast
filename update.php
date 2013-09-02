<?php
	include("include/database.php");
	if(isset($_REQUEST['c_up']))
	{	
		$c=$_REQUEST['client_id'];
		$t1=$_POST['c_first'];
		$t2=$_POST['c_last'];
		$t3=$_POST['c_add'];
		$t10=$_POST['c_add2'];
		$t4=$_POST['c_city'];
		$t5=$_POST['c_pin'];
		$t6=$_POST['c_email'];
		$t7=$_POST['c_ph'];
		$t8=$_POST['c_mo'];
		$t9=date('Y-m-d', strtotime($_POST['c_date']));	
		
		 $qry_up="update clients SET c_date='".$t9."', client_name='".$t1."', comp_name='".$t2."', c_add1='".$t3."',c_add2='".$t10."', c_city='".$t4."', c_pin='".$t5."', c_ph='".$t7."', c_mo='".$t8."', c_email='".$t6."' where c_id=$c";
		
		
		 $res_up=mysql_query($qry_up) or die(mysql_error());
		 header("Location:clients.php");
		 
	}

?>