<?php
include("session.php");
include("include/database.php");
error_reporting(0);
$per_page = 20; 
if($_GET)
{
 $page=$_GET['page'];
}
	
	$start = ($page-1)*$per_page;
	$c_qry_f="select * from po order by po_id desc limit $start,$per_page";
	$c_res_f1=mysql_query($c_qry_f);
	
	
?>
<link href="id_popup/facebox.css" media="screen" rel="stylesheet" type="text/css" />
<script src="id_popup/jquery.js" type="text/javascript"></script>
<script src="id_popup/facebox.js" type="text/javascript"></script>

<script type="text/javascript">
    jQuery(document).ready(function($) {
		 
      $('a[rel*=facebox]').facebox({
        loadingImage : 'src/loading.gif',
        closeImage   : 'src/closelabel.png'
      })
    })
	
</script>
        <table class="emp_tab">
        <tr class="emp_header">
        <td width="20">D.No</td>
        <td width="250">Client Name</td>
		<td>Address </td>	
        <td>Mobile No</td>  
        <td>Date</td> 
        <td>Total Quantity</td>   
        <td width="120">Action</td>
        </tr>
        <?php
		while($c_row=mysql_fetch_array($c_res_f1))
		{
		$q1="select * from clients where c_id=$c_row[1]";
		$res1=mysql_query($q1);
		$row1=mysql_fetch_array($res1);
        echo "<tr class='pagi'>";
        echo "<td width='20'>";
		echo $c_row[0];
		echo "</td>";
		echo "<td width='250'>";
		echo $row1[2];
		echo "</td>";
		echo "<td>";
		echo $row1[4];
		echo "</td>";
		echo "<td>";
		echo $row1[8];
		echo "</td>";
		echo "<td>";
		echo date('d-m-Y', strtotime($c_row[2]));
		echo "</td>";
		echo "<td>";
		echo $c_row[4];
		echo "</td>";
        echo "<td width='120'>";
		echo "<a href='?po_id1=$c_row[0]' onclick='return confirmSubmit()' class='print'>Delete</a>&nbsp;<a rel='facebox'  href='update_delivery.php?po_id=$c_row[0]' class='print'>Update</a>&nbsp;<a href='recieptpdf.php?id=$c_row[0]' class='print'>Print</a>";
		echo "</td>";
		echo "</tr>";
		}
		?>
        
        </table>
