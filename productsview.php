<?php
	include("include/database1.php");
	
	$c_up=$_REQUEST['c_id3'];
	$c_qry_f="select * from products where id=".$c_up;
	$c_res_f=mysql_query($c_qry_f);
	$c_row=mysql_fetch_array($c_res_f);
?>
<?php
	if(isset($_REQUEST['can']))
	{
		header("location:products.php");
	}
?>
<html>
<body>
<br>
<div class="hr"><center>Product Details</center></div>
<div>
<br>
<form action="" method="post">
<table class="q_clients">
<tr><td class="l_form">Product Code:</td><td class="l_form"><input class="q_in" type="text" value="<?php echo $c_row[1]; ?>"></td></tr>
<tr><td class="l_form">Product Name:</td><td class="l_form"><input class="q_in" type="text" value="<?php echo $c_row[2]; ?>"></td></tr>
<tr><td class="l_form">Size:</td><td class="l_form"><input class="q_in" type="text" value="<?php echo $c_row[3]; ?>"></td></tr>
<tr><td class="l_form" >Weight:</td><td class="l_form"><input class="q_in" type="text" value="<?php echo $c_row[4]; ?>"></td></tr>    
</table>
<table class="q_clients2">
<tr><td class="l_form">Color:</td><td class="l_form"><input class="q_in" type="text" value="<?php echo $c_row[5]; ?>"></td></tr>
<tr><td class="l_form">Shape:</td><td class="l_form"><input class="q_in" type="text" value="<?php echo $c_row[6]; ?>"></td></tr>
<tr><td class="l_form">Remark:</td><td class="l_form"><textarea><?php  echo $c_row[8]; ?></textarea></td></tr>
</table>
</form>
<br>
</body>
</html>
