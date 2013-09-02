<?php
	error_reporting(0);
    include("session.php");
	$c_up=$_REQUEST['id'];
	include("include/database.php");
	
	if(isset($_REQUEST['g_add']))
	{	
		$cnm=$_REQUEST['cmp1'];
		$addr=$_REQUEST['addr'];
		$ph=$_REQUEST['phno'];
		$cmp=$_REQUEST['cmp_name'];
		$date=date('Y-m-d', strtotime($_REQUEST['date']));
		$dt=$_REQUEST['dt'];
		$total=$_REQUEST['total'];
		
		$qry="update po SET work_date='".$date."', ds_th='".$dt."', total_quantity='".$total."' where po_id='$c_up'";
		$res=mysql_query($qry);
	
		$qry_del="delete from sub_service where po_id='$c_up'";
		$res_del=mysql_query($qry_del);
		
		$a=$_POST['pr'];
		$b = count($a);
		for($i=0; $i<$b; $i++)
		{
			$q_d=$_POST['pr'][$i];
			$q_q=$_POST['qnt'][$i];
			$q_r=$_POST['r'][$i];
			$q_a=$_POST['value'][$i];
			
			$quo="insert into sub_service(po_id,serv_desc,qnt,box,total) values('".$c_up."','".$q_d."','".$q_q."','".$q_r."','".$q_a."')";
			$quo_res=mysql_query($quo);	
		}
		if($res)
		{
			header("location:viewpo.php");
		}
		else
		{
			echo "error";
		}	
		}
	
		if(isset($_REQUEST['g_cal']))
		{
			header("location:viewpo.php");
		}
?>
