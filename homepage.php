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
	 $c_qry_f="select * from gatepass order by pass_id desc limit $start,$per_page"; 	
	$c_res_f=mysql_query($c_qry_f);
		
?>
        <table class="emp_tab">
        <tr class="emp_header">
        <td> Contact Person Name</td>
        <td width="250">Requirement.</td>
        <td width="160">Gate pass date.</td>
        <td>Status</td>
		<td>Approver Name</td>	        
        
        </tr>
		 
        
        </table>
