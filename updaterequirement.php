<?php
	include("include/database.php");
	
	if(isset($_REQUEST['p_add']))
	{
		$c=$_REQUEST['id'];
	$c_t1=$_POST['p_code'];
	echo $c_t2=$_POST['p_name'];
	echo $c_t3=$_POST['p_size'];
	echo $c_t4=$_POST['p_wt'];
	echo $c_t5=$_POST['p_color'];
	echo $c_t6=$_POST['p_shape'];
	echo $c_t7=$_POST['p_quant'];
	echo $c_t8=$_POST['p_aquant'];
	echo $c_t9=$_POST['p_rquant'];
	echo $c_t10=$_POST['remark'];
		
 	echo $c_qry="update requirement set r_code='".$c_t1."',r_name='".$c_t2."',r_size='".$c_t3."',r_weight='".$c_t4."',r_color='".$c_t5."',r_shape='".$c_t6."',r_quantity='".$c_t7."',r_aquant='".$c_t8."',r_rquant='".$c_t9."',r_remark='".$c_t10."' where r_id=".$c;
	 
	$c_res=mysql_query($c_qry) or die(mysql_error());
	if($c_res)
	{
		header("location:view_requirement.php");
	}
	else
	{
		header("location:view_requirement.php");
	}
	}
	if(isset($_REQUEST['can']))
	{
		header("location:view_requirement.php");
	} 
?>