<?php
include("session.php");
include("include/database.php");
error_reporting(0);

$id=$_REQUEST['id'];
$qry="select * from requirement where r_id='$id'";
$res=mysql_query($qry);
$row=mysql_fetch_array($res);

$qry_st="select * from stock where p_code='$row[3]' and st_name='$row[4]' and st_size='$row[5]' and st_wt='$row[6]' and st_color='$row[7]' and shape ='$row[8]'";
$res_st=mysql_query($qry_st);
$row_st=mysql_fetch_array($res_st);
$count=mysql_num_rows($res_st);

$qry_s="select SUM(qty_after_assign) from sub_stock where r_id='$id'";
$res_s=mysql_query($qry_s);
$row_s=mysql_fetch_array($res_s);


$total=$row[9]-$row_s[0];



?>
<style type="text/css">
.qty
{
	margin-left:100px;
}
.qty_tab
{
	margin-top:-20px;
	height:150px;
	width:550px;
}
.qty_b
{
	margin-top:-30px;
	margin-left:520px;
}
</style>
<script language="javascript">
function getValues(val){
var numVal1=parseInt(document.getElementById("one").value);
var numVal2=parseInt(document.getElementById("two").value);
var totalValue = numVal1 - numVal2;
document.getElementById("main").value = totalValue;
}
</script>
<br /><br />
<form name="form1" action="dcadd.php?id=<?php echo $id; ?>" method="post">
<?php 
if($row_st[0]<1)
{
	echo "<div class='hr'><center>Create Stock First</center></div><br><br>";
}
else
{
echo "<div class='hr'><center>Quantity Delivered</center></div>";
echo "<div>";
echo "<div class='qty'>";
echo "<table class='qty_tab'>";
echo "<tr><td class='l_form'>Quantity<br /><input  class='q_in' type='text' name='t1' id='one' onKeyUp='getValues(1)' value='$total'/></td>";
echo "<td class='l_form'>Delivered<br /><input id='two' value='0'  onKeyUp='getValues(2)' class='q_in' type='text' name='t2'/></td>";
echo "<td class='l_form'>Total Quantity<br /><input id='main' value='' class='q_in' type='text' name='t3'/></td>";
echo "</tr>";
echo "</table>";
echo "</div>";
echo "<div class='qty_b'>";
echo "<input name='p_add' value=' Add ' type='submit' onClick='javascript:return validateMyForm();' />";
echo "<input name='can' value='Cancel' type='submit' />";
echo "</div>";
}
?>
</form>