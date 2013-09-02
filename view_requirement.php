<?php
	include("session.php");
	include("include/database.php");
	$id=$_REQUEST['id']; 
	$c_qry_f="select * from requirement where c_id='$id' order by c_id desc limit 20";
	$c_res_f=mysql_query($c_qry_f);
	if(isset($_REQUEST['c_id1']))
	{
		$c_d=$_REQUEST['c_id1'];
		$c_del="delete from requirement where c_id=".$c_d;
		$c_dres=mysql_query($c_del);
		if($c_dres)
		{
			header("location:view_requirement.php?res=suc");
		}
		else
		{
			header("location:view_requirement.php?res=er1");
		}
	}
?>

<html>
<head>
<title>Akhil Plast</title>
<link rel="stylesheet" href="styles2.css" type="text/css" />
<link rel="stylesheet" href="styles.css" type="text/css" />

<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript" src="js/slider.js"></script>
<script type="text/javascript" src="js/superfish.js"></script>
<script type="text/javascript" src="js/custom.js"></script>
<script type="text/javascript" src="js/jquery.min.js"></script>
<script type="text/javascript">
function confirmSubmit()
{
	var agree=confirm("Are you sure to Delete this Entry?");
	if (agree)
		return true ;
	else
		return false ;
}
</script>
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

</head>
<body>
<div id="container">
    <div id="sub-header">

	    <?php
        include('header.php');
		if(isset($_GET['res']) && $_GET['res']=='er1')
		{			
		?>
        <div align="center"><h4 style="font-size:20px;color:#F03;">Technical Error while Deleting data</h4></div>
		<?php 
		}
		elseif(isset($_GET['res']) && $_GET['res']=='suc')
		{
		?>
        <div align="center"><h4 style="font-size:20px;color:#F03;">Delete record succesfully</h4></div>
		<?php 
		} ?>
        <?php
		
		if(isset($_REQUEST['search']))
		  {
		 	 $srch=$_REQUEST['search'];			
			 $query="select * from requirement where r_name LIKE '%$srch%' ";
	 		 $ans=mysql_query($query);
	 
	?>
        <table class="emp_tab">
        
        <?php
		while($c_row=mysql_fetch_array($ans))
		{
        echo "<tr class='pagi'>";
        echo "<td width='250'>";
		echo $c_row[1];
		echo "</td>";
        echo "<td width='160'>";
		echo $c_row[2];
		echo "</td>";
		echo "<td >";
		echo $c_row[3];
		echo "</td>";
		echo "<td >";
		echo $c_row[4];		
        echo "<td >";
		echo "<a href='?c_id1=$c_row[0]' onclick='return confirmSubmit()'><img src='imgs1/green_delete.png' height='20px;'/></a>&nbsp;<a href='update_requirement.php?c_id2=$c_row[0]'> <img src='imgs1/updt.png' height='20px;'/></a>&nbsp;<a  href='viewwork.php?c_id3=$c_row[0]'><img src='imgs1/view.png'  /></a>&nbsp;";
		echo "</td>";
		echo "</tr>";
		}
		?>        
        </table>
        <?php
		  }
		?>
    <table class="emp_tab" cellpadding="0" cellspacing="0"> 
    <tr class="search_res">
    <td class="info" width="1070"> Requirement Details</td>
    <td>
    <span>
    <a href="#" rel="popuprel2" class="popup new">View All</a>
    </span>
    </td>
    <td>
    <span>
    <a href="#" rel="popuprel" class="popup new">New</a>
    </span>
    </td>
    </tr>
    </table>
        <table class="emp_tab">
        <tr class="emp_header">
        <td width="200">Client Name</td>
        <td width="100">Date</td>
        <td width="100">Product Code</td>
        <td width="100">Product Name</td>	
        <td width="100">Size</td>      
        <td width="100">Color</td>    
        <td width="100">Quantity</td>
        <td width="100">delivered</td>
        <td width="80">Action</td>
        </tr>
		<?php
		while($c_row=mysql_fetch_array($c_res_f))
		{
		$q1="select * from clients where c_id='$c_row[2]'";
		$c_res=mysql_query($q1);
		$row1=mysql_fetch_array($c_res);
        echo "<tr class='pagi'>";
		echo "<td width='200'>";
		echo $row1[2];
		echo "</td>";
		echo "<td width='100'>";
		echo date('d-m-Y', strtotime($c_row['r_date']));
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
		echo $c_row[7];
		echo "</td>";
		echo "<td width='100'>";
		echo $c_row[9];
		echo "</td>";
		echo "<td width='100'>";
		echo $c_row[9];
		echo "</td>";		
        echo "<td width='80'>";
		echo "<a href='?c_id1=$c_row[0]' onclick='return confirmSubmit()' class='print'>Delete</a>&nbsp;<a rel='facebox' href='dc.php?id=$c_row[0]' class='print'>DC</a>&nbsp;";
		echo "</td>";
		echo "</tr>";
		}
		?>
        </table>
    </div>
    </div>
    <div class="popupbox_stock" id="popuprel">
<div id="intabdiv">
<br><br>
<?php
include('add_requirement.php');
?>	
</div>
</div>

<div class="popupbox_view" id="popuprel2">
<div id="intabdiv2" align="center">
<br>
		<?php
		$c_qry="select * from requirement where c_id='$id' order by c_id desc";
		$c_res=mysql_query($c_qry);
		?>
		<table class="view_emp">
        <tr class="emp_header">
        <td width="100">Date</td>
        <td width="100">Product Code</td>
        <td width="200">Product Name</td>	
        <td width="100">Size</td>
        <td width="100">Weight</td>	        
        <td width="100">Color</td>
        <td width="100">Shape</td>
        <td width="100">Quantity</td>
        </tr>
		<?php
		while($c_rows=mysql_fetch_array($c_res))
		{
		echo "<tr class='pagi'>";
		echo "<td width='100'>";
		echo date('d-m-Y', strtotime($c_rows['r_date']));
		echo "</td>";
		echo "<td width='100'>";
		echo $c_rows[3];
		echo "</td>";
		echo "<td width='200'>";
		echo $c_rows[4];
		echo "</td>";
		echo "<td width='100'>";
		echo $c_rows[5];
		echo "</td>";
		echo "<td width='100'>";
		echo $c_rows[6];
		echo "</td>";
		echo "<td width='100'>";
		echo $c_rows[7];
		echo "<td width='100'>";
		echo $c_rows[8];
		echo "</td>";
		echo "<td width='100'>";
		echo $c_rows[9];
		echo "</td>";		
        echo "</tr>";
		}
		?>
        </table>
</div>
</div>          

<div id="fade"></div>
    
    	<div class="clear"></div>
    </div>
</div>
 <div id="footer">
     <div class="clear"></div> 
    </div>
    </div>
</body>
</html>
