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
	$c_qry_f="select * from clients order by c_id desc limit $start,$per_page";
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

        <table class="emp_tab">
        <tr class="emp_header">
        <td width="250">Person Name</td>
        <td width="200">Company Name</td>
        <td width="160">Contact No</td>
     	<td  width="10">Email_id </td>
        <td width="100">Action</td>
        </tr>

        <?php
		while($c_row=mysql_fetch_array($c_res_f))
		{                                                                                                                        
			
        echo "<tr class='pagi'>";
        echo "<td width='250'>";
		echo $c_row[2]; 
		echo "</td>";
		echo "<td width='160'>";
		echo $c_row[3];
		echo "</td>";
		echo "<td width='160'>";
		echo $c_row[9];
		echo "</td>";
     	echo "<td width='160'>";
		echo $c_row[10];
		echo "</td>"; 
        echo "<td width='100'>";
		echo "<a rel='facebox' href='add_delivery.php?c_id2=$c_row[0]' class='print'>Create</a>";
		echo "</td>";
		echo "</tr>";
		}
		?>
        
        </table>
