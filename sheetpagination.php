<?php
include("session.php");	
include("include/database.php");
$per_page = 20; 
if($_GET)
{
  $page=$_GET['page'];
}
	$id2=$_GET['id2'];
	$start = ($page-1)*$per_page;
	$c_qry_f="select * from requirement order by c_id desc limit $start,$per_page";
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
        <td>Client Name</td>
        <td width="100">Product Code</td>
        <td width="100">Product Name</td>	
        <td width="100">Size</td>
        <td width="100">Weight</td>	        
        <td width="100">Color</td>
        <td width="100">Shape</td>
        <td width="100">Quantity</td>
        <td width="80">Action</td>
        </tr>
		<?php
        if(mysql_num_rows($c_res_f)==0)
		{
		?>
        <tr class='emp_header'>
         <td colspan='6' align="center"><h3> No Data available</h3></td>
        </tr>
		
		<?php
        }
		?>
        <?php
		while($c_row=mysql_fetch_array($c_res_f))
		{
		 	$q1="select * from clients where c_id='$c_row[2]'";
			$c_res=mysql_query($q1);
			$row1=mysql_fetch_array($c_res);
			
				
        echo "<tr class='pagi'>";
		echo "<td>";
		echo $row1[2];
		echo "</td>";
        echo "<td width='100'>";
		echo $c_row[3];
		echo "</td>";
		echo "<td width='100'>";
		echo $c_row[4];
		echo "</td>";
		echo "<td width='100'>";
		echo $c_row[5];
		echo "</td>";
		echo "<td width='100'>";
		echo $c_row[6];
		echo "</td>";
		echo "<td width='100'>";
		echo $c_row[7];
		echo "<td width='100'>";
		echo $c_row[8];
		echo "</td>";
		echo "<td width='100'>";
		echo $c_row[9];
		echo "</td>";		
        echo "<td width='80'>";
		echo "<a href='?c_id1=$c_row[0]' onclick='return confirmSubmit()' class='print'>Delete</a>&nbsp;<a rel='facebox' href='update_requirement.php?c_id2=$c_row[0]' class='print'>Update</a>&nbsp;";
		echo "</td>";
		echo "</tr>";
		}
		
		?>
        
        </table>
