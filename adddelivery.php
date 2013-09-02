<?php
	error_reporting(0);
    include("session.php");
	include("include/database.php");
	$c_up=$_REQUEST['id'];
	if(isset($_REQUEST['g_add']))
	{
		
		$date=date('Y-m-d', strtotime($_REQUEST['date']));
		$dt=$_REQUEST['dt'];
		$total=$_REQUEST['total'];
		$result="insert into po(c_id,work_date,ds_th,total_quantity) value('".$c_up."','".$date."','".$dt."','".$total."')";
		$ans=mysql_query($result);
	
		$a=$_POST['value'];
		$b = count($a);
		$q1="select * from po where c_id=$c_up";

		$ans1=mysql_query($q1);
		while($r1=mysql_fetch_array($ans1))
		{
			$po=$r1[0];
		}
		for($i=0; $i<$b; $i++)
		{
			//$id=$_REQUEST['i_id'];
		
		$r11=$_POST['pr'][$i];
		$r12=$_POST['qnt'][$i];
		$r13=$_POST['r'][$i];
		$r14=$_POST['value'][$i];
	//	$total=10;
		
		$quo="INSERT INTO sub_service(po_id,serv_desc, qnt,box,total) VALUES('".$po."','".$r11."','".$r12."','".$r13."','".$r14."')";
		$quo_res=mysql_query($quo) or die(mysql_error());	

		}
		if($ans)
		{
		header("location:viewpo.php");
		}
		}
	if(isset($_REQUEST['g_cal']))
	{
		header("location:addpo.php");
	}
	
?>