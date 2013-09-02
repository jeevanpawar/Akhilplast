<?php
include("include/database.php");
	error_reporting(0);
include("session.php");
?>


<?php
$per_page = 20; 

if($_GET)
{
 $page=$_GET['page'];

}
	
	$start = ($page-1)*$per_page;
	 $c_qry_f="select * from log_history order by l_id desc limit $start,$per_page"; 	
	$c_res_f=mysql_query($c_qry_f);
		
?>
        <table class="emp_tab">
        <tr class="emp_header">
        <td>Login Person Name</td>
        <td width="250">Login Date and Time</td>
        <td width="160">Logout Date and Time</td>       
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
			
        echo "<tr class='pagi'>";		
        echo "<td width='250'>";
		echo $c_row[1];
		echo "</td>";
       	echo "<td>";
		echo $c_row[2];
		echo "</td>";
		echo "<td>";
		echo $c_row[3];		
        
		echo "</td>";
		echo "</tr>";
		}
		?>
        
        </table>
