<?php
include("include/database.php");
	if(isset($_REQUEST['c_id3']))
	{
	$id=$_REQUEST['c_id3'];
	$c_qry="select * from stock where st_id=".$id;
	$c_res=mysql_query($c_qry);
	$result=mysql_fetch_array($c_res);
	//print_r($result);
	}
	if(isset($_REQUEST['can']))
	{
		header("location:view_stock.php");
	}
?>
<html>
<body>
		<br>
		<div class="hr"><center>View Stock Details</center></div>
        <div>
        <br>
        <form name="form1" action="" method="post">
        
        <table class="q_clients">
        <tr><td class="l_form">Product Code:</td><td class="l_form"><input id="nm1" class="q_in" type="text" name="pname" value="<?php echo $result[1] ;?>" /></td></td></tr>
        <tr><td class="l_form">Product Name:</td><td><input id="nm1" class="q_in" type="text" name="pname" value="<?php echo $result[2] ;?>" /></td></tr>
        <tr><td class="l_form">Size:</td><td><input type="text" id="cate" class="q_in" name="size" value="<?php echo $result[3];?>" /></td></tr>
        <tr><td class="l_form">Weight:</td><td><input type="text" id="cate" class="q_in" name="size" value="<?php echo $result[4];?>" /></td></tr>
        <tr><td class="l_form">Colour:</td><td><input type="text" id="cate" class="q_in" name="size" value="<?php echo $result[5];?>" /></td></tr>
        </table>
        <table class="q_clients2">
        <tr><td class="l_form">Shape:</td><td><input type="text" id="cate" class="q_in" name="size" value="<?php echo $result[6];?>" /></td></tr>
        <tr><td class="l_form">Quantity:</td><td><input type="text" id="qunt" class="q_in" name="qunt" value="<?php echo $result[9];?>" /></td></tr>		
        <tr><td class="l_form">Shift Type:</td><td><input type="text" id="qunt" class="q_in" name="shifttype" value="<?php echo $result[8];?>" /></td></tr>		
        <tr><td class="l_form">Date:</td><td><input type="text" id="qunt" class="q_in" name="date" value="<?php echo date('d-m-Y', strtotime($result[7]));?>" /></td></tr>			
        </table>
        </form>
        <br>
        </div>
</body>
</html>