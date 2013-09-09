<?php
include("session.php");
include("include/database.php");
$per_page = 20; 
$sql = "select * from clients";
$rsd = mysql_query($sql);
$count = mysql_num_rows($rsd);
$pages = ceil($count/$per_page);
?>
<?php
if(isset($_REQUEST['c_id1']))
{

$c_del="delete from clients where c_id='$c_d'";
$c_dres=mysql_query($c_del);
if($c_dres)
{
	header("location:clients.php?res=suc");
}
else
{
	header("location:clients.php?res=er1");
}

}
$c_qry_f="select * from clients order by c_id desc";
$c_res_f=mysql_query($c_qry_f);
?>
<html>
<head>
<title>AkhilPlast</title>
<link rel="stylesheet" href="styles2.css" type="text/css" />
<link rel="stylesheet" href="styles.css" type="text/css" />
<link href="id_popup/facebox.css" media="screen" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript" src="js/slider.js"></script>
<script type="text/javascript" src="js/superfish.js"></script>
<script type="text/javascript" src="js/custom.js"></script>
<script type="text/javascript" src="js/jquery.min.js"></script>
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
	function confirmSubmit()
	{
		var agree=confirm("Are you sure to Delete this Entry?");
		if (agree)
			return true ;
		else
			return false ;
}
</script>
<style type="text/css" title="currentStyle">
	@import "css/demo_page.css";
	@import "css/demo_table.css";
</style>
<script type="text/javascript" language="javascript" src="js/jquery.js"></script>
<script type="text/javascript" language="javascript" src="js/jquery.dataTables.js"></script>
<script type="text/javascript" language="javascript" src="table.js"></script>

</head>
<body>
<div id="container">
<div id="sub-header">	
<?php
include("header.php");
?>
<form action="" method="post" name="search">
<table class="emp_tab" cellpadding="0" cellspacing="0">
<tr class="search_res" >
<td class="info" width="1150">Clients Details</td>
<td>
<span>
<a href="#" rel="popuprel" class="popup new">Add Clients</a>
</span>
</td>
</tr>
</table>
<br>
		<div id="demo">
        <div class="tab">
		<table cellpadding="0" cellspacing="0" border="0" class="display" id="example">
        <thead>
        <tr>
        <th width="200">Name</th>
        <th width="300">Company Name</th> 
        <th width="120">Mobile No</th>       
		<th width="120">Phone No</th>	        
        <th width="200">Action</th>
        </tr>
		</thead>
        <tbody>
        <?php
		while($c_row=mysql_fetch_array($c_res_f))
		{
        echo "<tr class='pagi'>";
        echo "<td>";
		echo $c_row[2];
		echo "</td>";
        echo "<td width='160'>";
		echo $c_row[3];
		echo "</td>";
		echo "<td width='160'>";
		echo $c_row[9];
		echo "</td>";		
		echo "<td>";
		echo $c_row[8];	
		echo "</td>";
		echo "<td width='300'>";		
        echo "<a rel='facebox' href='updateclients.php?c_id2=$c_row[0]' class='print'>
		Update</a>&nbsp;<a rel='facebox' href='clientsview.php?c_id3=$c_row[0]' class='print'>View</a>&nbsp;<a href='view_Requirement.php?id=$c_row[0]' class='print'>PO</a>";
		echo "</td>";
		echo "</tr>";
		}
		?> 
        </tbody>     
        </table>
        </div>
        </div> 
</form>

</div>                
</div>
</div>
<div class="popupbox_client" id="popuprel">
<div id="intabdiv">
<br><br>
<?php
include('addclients.php');
?>	
</div>
</div>          

<div id="fade"></div>

<div class="clear"></div>

</div>
<div id="footer">
<div class="clear"></div> 
</div>
</div>
</body>
</html>
