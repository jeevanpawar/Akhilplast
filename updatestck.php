<?php
	include("include/database.php");
	if(isset($_REQUEST['s_add']))
	{	
		$c=$_REQUEST['id'];
		$c_t1=$_POST['p_code'];
		$c_t2=$_POST['p_name'];
		$c_t3=$_POST['p_size'];
		$c_t4=$_POST['p_wt'];
		$c_t5=$_POST['p_color'];
	 	$c_t6=$_POST['p_shape'];
		$c_t7=$_POST['s_date'];
		$c_t8=$_POST['shift'];
		$c_t9=$_POST['p_aquant'];
		$c_t10=$_POST['p_quant'];
		$c_t11=$_POST['p_rquant'];
		$c_t12=$_POST['mc_no'];
		$c_t13=$_POST['per_code'];
		
	 	$c_qry="UPDATE `stock` SET `p_code`='".$c_t1."',`st_name`='".$c_t2."',`st_size`='".$c_t3."',`st_wt`='".$c_t4."',`st_color`='".$c_t5."',`shape`='".$c_t6."',`date`='".$c_t7."',`shift_type`='".$c_t8."',`st_quant`='".$c_t11."',`mc_no`='".$c_t12."',`per_code`='".$c_t13."' WHERE st_id=".$c;
		
	$c_res=mysql_query($c_qry);
	
	if($c_res)
	{
		header("location:view_stock.php?id=$r_id");
	}
	else
	{
		header("location:addstock.php");
	}
	}
	if(isset($_REQUEST['can']))
	{
		header("location:view_stock.php");
	} 

?>