<?php
error_reporting(0);
include("session.php");
include("include/database.php");
$id=$_REQUEST['id'];
$id2=$_REQUEST['id2'];

$date1=date('Y-m-d', strtotime($id));
$date2=date('Y-m-d', strtotime($id2));

$qry="select * from stock_detail where st_date >='".$date1."' and st_date <='".$date2."'";
$res=mysql_query($qry);


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
.description
{
	margin-top:-2px;
	height:650px;
	border:1px solid #000;
}
.vat
{
	position:absolute;
	margin-bottom:-500px;	
	left: 7px;
	top: 850px;
}
.ms
{
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
	margin-top:5px;
	text-align:center;
	font-size:20px;
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
	font-size:14px;
	width:100%;
	text-align:center;
}
.details tr
{
	border:1px solid #000;
}
.hr td
{
	background-color:#CCC;
	border:1px solid #333;
}
.total
{
	margin-left:0px;
	width:725px;
	margin-top:-20px;
	height:150px;
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
	margin-top:10px;
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
	width:230px;
	text-align:center;
	font-size:12px;
	margin-left:245px;
	
}
.date
{
	margin-left:590px;
	position:relative;
}
.hr th
{
	background-color:#C0C0C0;
	border:1px solid #000;
}
.bo td
{
	border:1px solid #000;
}
</style>
</head>
<body>
<br>
<div class="header">
<div class="inv">AKHIL PLAST</div>
<div class="de">STOCK DETAILS</div>
<div class="date">Date : <?php echo date('d/m/Y'); ?></div>
<table class="details" cellpadding="1" cellspacing="1" style="table-layout:fixed"> 
<thead>
<tr class="hr">
<th width="5%">S</th>
<th width="12%">Date</th>
<th width="15%">P. Code</th>
<th width="25%">P. Name</th>
<th width="13%">Shift</th>
<th width="10%">Machine</th>
<th width="10%">Person</th>
<th width="10%">Quantity</th>
</tr>
</thead>
<tbody>
<?php
$count=0;
while($row=mysql_fetch_array($res))
{
	$qry_s="select * from stock";
	$res_s=mysql_query($qry_s);
	$row_s=mysql_fetch_array($res_s);
	
	$count+=1;
	echo "<tr class='bo'>";
	echo "<td align='center'>";
	echo $count.'';
	echo "</td>";	
	echo "<td>";
	echo date('d-m-Y', strtotime($row[2]));
	echo "</td>";
	echo "<td>";
	echo $row[6];
	echo "</td>";
	echo "<td>";
	echo $row[4];
	echo "</td>";
	echo "<td>";
	echo $row[3];
	echo "</td>";
	echo "<td>";
	echo $row[5];
	echo "</td>";
	echo "<td>";
	echo $row[6];
	echo "</td>";
	echo "<td>";
	echo round($row[4]);
	echo "</td>";
	echo "</tr>";
}
?>
</tbody>
</table>
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
  $font = Font_Metrics::get_font("", "bold");
  $dompdf->stream($filename, array("Attachment" => false));	
  exit(0);
?>