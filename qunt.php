<?php
	include("include/database.php");
	
 	$array= $_GET['q_id'];
	 
	 $product = explode(',', $array);
	  $query="SELECT st_quant,st_id FROM stock WHERE p_code='$product[1]' AND `st_name`='$product[2]' AND `st_size`='$product[5]' AND `st_wt`='$product[4]' AND `st_color`='$product[3]' AND `shape`='$product[0]'";
	$result=mysql_query($query) or die(mysql_error());
	if($result)
	{
	if($res=mysql_fetch_array($result))
		echo $res[0];
	else
		echo 0;
	}
	else
		echo 0;
	
?>