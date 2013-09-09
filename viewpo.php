<?php
include("session.php");
error_reporting(0);
include("include/database.php");
$per_page = 20; 
$sql = "select * from clients";
$rsd = mysql_query($sql);
$count = mysql_num_rows($rsd);
$pages = ceil($count/$per_page);

	if(isset($_REQUEST['print']))
	{
		$t1=$_REQUEST['t1'];
		$t2=$_REQUEST['t2'];
		$q="select * from stock";
		$r=mysql_query($q);
		if($r)
		{
			header("location:salepdf.php?id=$t1&&id2=$t2");
		}
	}
?>


<?php
	if(isset($_REQUEST['po_id1']))
	{
		$c_d=$_REQUEST['po_id1'];		
		$g_gatepas="delete from po where po_id='$c_d'";
		$query1=mysql_query($g_gatepas);
		$g_des="delete from sub_service where po_id='$c_d'";
		$query2=mysql_query($g_des);

		if($query2)
		{
			header("location:viewpo.php?res=suc");
		}
		else
		{
			header("location:viewpo.php?res=er1");
		}
	}
	$c_qry_f="select * from po order by po_id desc";
	$c_res_f1=mysql_query($c_qry_f);
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
<style type="text/css" title="currentStyle">
	@import "css/demo_page.css";
	@import "css/demo_table.css";
</style>
<script type="text/javascript" language="javascript" src="js/jquery.js"></script>
<script type="text/javascript" language="javascript" src="js/jquery.dataTables.js"></script>
<script type="text/javascript" language="javascript" src="table.js"></script>


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
        <td class="info" width="1150px">Delivery Challan Details</td>
        <td width="490">
        <input type="date" name="t1">
        <input type="date" name="t2">
        <input type="submit" value="Print" name="print">
        </td>
        <td width="150">
        <span>
        <a href="addpo.php" class="new">Add Sale</a>
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
        <th width="20">D.No</th>
        <th width="250">Client Name</th>
		<th>Address </th>	
        <th>Mobile No</th>  
        <th>Date</th> 
        <th>Total Quantity</th>   
        <th width="120">Action</th>
        </tr>
        </thead>
        <tbody>
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
        </tbody>
        </table>
        </div>
        </div>
        </form>
                
        </div>                           
  		</div>     
        </div>
          
        
    
    	<div class="clear"></div>
    
</div>
 <div id="footer">
     <div class="clear"></div> 
    </div>
    </div>
</body>
</html>
