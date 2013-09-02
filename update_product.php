<?php
	include("include/database.php");
	if(isset($_REQUEST['c_up']))
	{	
	$c=$_REQUEST['id'];
	$t1=$_POST['p_code'];
	$t2=$_POST['p_name'];
	$t3=$_POST['p_size'];
    $t5=$_POST['p_wt'];	
	$t6=$_POST['p_color'];
	$t7=$_POST['p_shape'];
	$t8=$_POST['p_quant'];	
	$t9=$_POST['remark'];	
		$qry_up="update products SET p_code='".$t1."', p_name='".$t2."', p_size='".$t3."', p_wt='".$t5."', p_color='".$t6."', p_shape='".$t7."', p_quant='".$t8."', remark='".$t9."' where id=".$c;
		$res_up=mysql_query($qry_up) or die(mysql_error());
		if($res_up)
		{
			header("location:products.php");
		}
		else
		{
			echo "error";
		}
	}


?>
<?php
	if(isset($_REQUEST['can']))
	{
		header("location:products.php");
	}
?>