<?php
error_reporting(0);
include("session.php");
include("include/database.php");
$p=$_REQUEST['id'];
$qry="select * from po where po_id='$p'";
$res=mysql_query($qry);
$row=mysql_fetch_array($res);

$qry_c="select * from clients where c_id='$row[1]'";
$res_c=mysql_query($qry_c);
$row_c=mysql_fetch_array($res_c);

$qry_detail="select * from sub_service where po_id='$row[0]'";
$res_detail1=mysql_query($qry_detail);
?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>AKHIL PLAST</title>
<style type="text/css">
.tab2
{
	width:630px;
	margin-left:250px;
	margin-top:-130px;
	line-height:40px;
}
.description{
	margin-top:-2px;
	height:650px;
	border:1px solid #000;
}
.vat{
	position:absolute;
	margin-bottom:-500px;	
	left: 7px;
	top: 850px;
}
.ms{
	position:absolute;
	top: 200px;
	left: 7px;
}
.header{
	border:1px solid #000;
	
}
.tax{
	margin-top:5px;
	border:1px solid #000;
}
.tab1
{
	height:300px;
}
.tax_inv
{
	text-align:center;
	font-size:25px;
	letter-spacing:2px;
	font-weight:bold;
	color:#000;
	background-color:#333;
	width:100%;
}
.in_add
{
	margin-top:5px;
	font-size:16px;
	margin-left:5px;
}
.in_no
{
	position:relative;
	margin-top:-20px;
	margin-left:520px;
	height:20px;
	width:150px;
}
.food
{
	margin-left:460px;
	font-weight:bold;
}
.matter
{
	text-align:justify;
	margin-top:20px;
}
.i_add
{
	margin-left:32px;
	width:200px;
	height:auto;
}
.inv
{
	margin-top:10px;
	text-align:center;
	font-size:26px;
	letter-spacing:2px;
	font-weight:bold;
	color:#000;
	width:100%;
}
.dis
{
	margin-top:10px;
	margin-left:325px;
	width:700px;
	height:20px;
}
.baydetail
{
	height:60px;
	border:1px solid #000;
	margin-top:-2px;
}
.d
{
	position:relative;
}
.details
{
	width:100%;
	text-align:center;
	border-collapse:collapse;
}
.details td
{
	
}
.hr td
{
	background-color:#E6E6E6;
}
.total
{
	margin-left:0px;
	width:725px;
	margin-top:-20px;
	height:100px;
	border:1px solid #000;
}
.akh
{
	margin-left:550px;

	font-weight:bold;
	font-size:18px;
}
.res
{
	margin-left:20px;
	margin-top:5px;
	font-weight:bold;
	font-size:18px;
}
.sig
{
	margin-left:580px;
	font-weight:bold;
	font-size:20px;
	margin-top:-20px;
}
.buy1
{
	margin-left:5px;
	margin-top:5px;
	width:320px;
	height:120px;
}
.buy2
{
	margin-left:240px;
	margin-top:-124px;
	width:640px;
	height:120px;
}
.de
{
	border:1px solid #000;
	width:130px;
	text-align:center;
	font-size:12px;
	margin-left:295px;
}
.d1 img{
	width:100px;
	height:100px;
	position:absolute;
	margin-left:20px;
	margin-top:50px;
}
</style>
</head>
<body>
<br>
<div class="header">
<br>
<div class="d1"><img src="src/logo.jpg"/> </div>
<div class="de">DELIVERY CHALLAN</div>
<div class="inv">AKHIL PLAST</div><br>
<div align="center" style="margin-top:5px">PLOT NO. 8, STICE SINNAR-SHIRDI ROAD, MUSALGAON,<br>TAL. -SINNAR, DIST.-NASHIK, PIN :422112.TEL. NO:(02551)240948</div>
<br><br>
</div>

<div class="baydetail">
<table class="buy1">
<tr valign="top">
<td width="100">Buyer Name :
<?php echo $row_c[3]; ?></td>
</tr>
</table>
<table class="buy2">
<tr valign="top">
<td>Challan No : <?php echo $row[0]; ?></td>
<td>Date : <?php echo date('d-m-Y', strtotime($row[2])); ?></td>
</tr>
<tr colspan="2" valign="top">
<td >Dispatch Through : <?php echo $row[3]; ?></td>
</tr>

</table>
</div>

<div class="description">
<table class="details" border="1"> 
<tr class="hr">
<td width="10">Sr.No.</td>
<td>Description Of Goods</td>
<td width="100" >Quantity</td>
<td width="100">Total Quantity</td>
</tr>
<?php
$count=0;
while($row_d=mysql_fetch_array($res_detail1))
{
	$count+=1;
	echo "<tr>";
	echo "<td align='center'>";
	echo $count.'.';
	echo "</td>";	
	echo "<td>";
	echo $row_d[3];
	echo "</td>";
	echo "<td>";
	echo $row_d[4].' X '.$row_d[5];
	echo "</td>";
	echo "<td>";
	echo $row_d[6];
	echo "</td>";
	echo "</tr>";
}
?>
</table>
</div>
<div class="total">

<div class="akh">For - AKHIL PLAST</div>
<br>
<br>
<br>
<div class="res">Received Signature
<div class="sig">Signature</div></div>
</div>
</font>
</body>
</html>

<?php
$htmlcontent=ob_get_clean();
include("dompdf/dompdf_config.inc.php");
$htmlcontent = stripslashes($htmlcontent);
  $dompdf = new DOMPDF();
  $dompdf->load_html($htmlcontent);
  $dompdf->set_paper("folio", "portrait");
  $dompdf->render();
  $canvas = $dompdf->get_canvas();
  $font = Font_Metrics::get_font("", "bold");
  $canvas->page_text(50,850, "AKHIL PLAST", $font, 6, array(0,0,0));
  $canvas->page_text(500,850, "PAGE: {PAGE_NUM} OF {PAGE_COUNT}", $font, 8, array(0,0,0));
  $dompdf->stream($filename, array("Attachment" => false));	
  exit(0);
?>