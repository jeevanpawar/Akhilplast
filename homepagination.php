<?php
include("include/database.php");
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
		<td width="250">Product Name</td>
        <td width="160">Size</td>
        <td width="160">Weight</td>
        <td width="160">Color</td>
        <td width="160">Shape</td>
        <td width="150">Quantity</td>	        
        </tr>
        <?php
		while($c_row=mysql_fetch_array($c_res_f))
		{
        echo "<tr class='pagi'>";
        echo "<td width='160'>";
		echo $c_row[1];
		echo "</td>";
        echo "<td>";
		echo $c_row[2];
		echo "</td>";
		echo "<td>";
		echo $c_row[3];
		echo "</td>";
		echo "<td>";
		echo $c_row[4];
		echo "</td>";
		echo "<td>";
		echo $c_row[5];
		echo "</td>";
		echo "<td>";
		echo $c_row[6];
		echo "</td>";
		echo "<td width='240'>";
		echo $c_row[9];
		echo "</td>";
		echo "</tr>";
		}
		?>
        
        </table>
