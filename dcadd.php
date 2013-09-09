<?php
include("session.php");
$id=$_REQUEST['id'];
include("include/database.php");

$qry1="select * from requirement where r_id='$id'";
$res1=mysql_query($qry1);
$row1=mysql_fetch_array($res1);
	
$qry_t="select * from stock where p_code='$row1[3]' and st_name='$row1[4]' and st_size='$row1[5]' and st_wt='$row1[6]' and st_color='$row1[7]' and shape='$row1[8]'";
$res_t=mysql_query($qry_t);
$row_t=mysql_fetch_array($res_t);	

if(isset($_REQUEST['p_add']))
{
	$t1=$_POST['t1'];
	$t2=$_POST['t2'];
	$t3=$_POST['t3'];
	
	$up=$row_t[9]-$t2;
	
	$qry_u="update stock SET st_quant='".$up."' where st_id='$row_t[0]'";
	$res_u=mysql_query($qry_u);
	
	$qry_i="insert into sub_stock(r_id,c_id,qty,qty_after_assign,qty_to_deliver) values('".$id."','".$row1[2]."','".$t1."','".$t2."','".$t3."')";
	$res_i=mysql_query($qry_i);
	
	if($res_i)
	{
		header("location:view_requirement.php?id=$row1[2]");
	}
	else
	{
		echo "error";
	}

}

if(isset($_REQUEST['can']))
{
	header("location:view_requirement.php?id=$row1[2]");
}

?>