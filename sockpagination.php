<?php
include("session.php");
include("include/database.php");
?>
<?php
	if(isset($_REQUEST['del']))
	{
		$del=$_REQUEST['del'];
		
		$qry_se="select * from stock_detail where s_id='$del'";
		$res_se=mysql_query($qry_se);
		$row_se=mysql_fetch_array($res_se);
		
		$qry_s="select * from stock where st_id='$row_se[1]'";
		$res_s=mysql_query($qry_s);
		$row_s=mysql_fetch_array($res_s);
		
		
		$up=$row_s[9]-$row_se[4];
		
		$qry_update="update stock SET st_quant='".$up."' where st_id='$row_s[0]'";
		$res_update=mysql_query($qry_update);
		
		$qry_del="delete from stock_detail where s_id=".$del;
		$res_del=mysql_query($qry_del);
					
		if($res_del)
		{
			header("location:view_stock.php");
		}
		else
		{
			echo "error";
		}
		
	}
?>
<?php
$per_page = 20; 
if($_GET)
{
  $page=$_GET['page'];
}
	$start = ($page-1)*$per_page;
	$c_qry_f="select * from stock order by st_id desc limit $start,$per_page";
	$c_res_f=mysql_query($c_qry_f);
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
        <table class="emp_tab" cellpadding="1" cellspacing="1">
        <tr class="emp_header">
        <td>Product Code</td>
		<td width="200">Product Name</td>
        <td width="160">Date</td>
        <td width="180">Employee Code</td>
        <td width="180">Shift Type</td> 
        <td width="180">Machine Code</td>
        <td width="180">Quantity </td>           
        <td width="100">Action</td>
        </tr>
        <?php
		while($c_row=mysql_fetch_array($c_res_f))
		{
		$qry="select * from stock_detail where st_id='$c_row[0]' order by s_id desc";
		$res=mysql_query($qry);
		
		while($row=mysql_fetch_array($res))
		{
			echo "<tr class='pagi'>";
			echo "<td width='160'>";
			echo $c_row[1];
			echo "</td>";
			echo "<td width='200'>";
			echo $c_row[2];
			echo "</td>";
			echo "<td>";
			echo date('d-m-Y', strtotime($row[2]));
			echo "</td>";
			echo "<td>";
			echo $row[6];
			echo "</td>";
			echo "<td>";
			echo $row[3];
			echo "</td>";
			echo "<td>";
			echo $row[5];
			echo "</td>";
			echo "<td>";
			echo $row[4];
			echo "</td>";
			echo "<td width='100'>";
			echo "<a href='sockpagination.php?del=$row[0]' onclick='return confirmSubmit()' class='print'>Delete</a>&nbsp;<a rel='facebox' href='update_stock.php?c_id2=$c_row[0]' class='print'>Update</a>&nbsp;";
			echo "</td>";
			echo "</tr>";
		}
		}
		?>
        </table>