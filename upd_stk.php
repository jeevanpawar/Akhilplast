<?php
include("include/database.php");

if(isset($_POST['s_up']))
	{
	$c_t1=$_POST['avail_id'];
	$c_t2=$_POST['pname'];
	$c_t4=$_POST['size'];
	$c_t8=$_POST['qunt'];
	$c_t6=$_POST['shifttype'];	
	$id=$_REQUEST['id'];
 $c_t7=date('Y-m-d - h:i:s');	

	$c_qry="update `stock` set `st_id`='".$c_t1."', `product_name`='".$c_t2."',`st_size`='".$c_t4."',`quantity`='".$c_t8."', `shift_type`='".$c_t6."', `st_date`='".$c_t7."' where st_id=".$id;

	$c_res=mysql_query($c_qry);
	if($c_res)
	{
		header("location:view_stock.php");
	}
	else
	{
		header("location:add_stock.php");
	}
	}
	if(isset($_REQUEST['can']))
	{
		header("location:view_stock.php");
	}
?>