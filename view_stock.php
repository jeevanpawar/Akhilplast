<?php
    include("session.php");
	error_reporting(0);
	include("include/database.php");
	
	if(isset($_REQUEST['print']))
	{
		$t1=$_REQUEST['t1'];
		$t2=$_REQUEST['t2'];
		$q="select * from stock";
		$r=mysql_query($q);
		if($r)
		{
			header("location:stockpdf.php?id=$t1&&id2=$t2");
		}
	}
	$c_qry_f="select * from stock order by date desc";
	$c_res_f=mysql_query($c_qry_f);
?>
<html>
<head>
<title>Akhil Plast</title>


<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript" src="js/slider.js"></script>
<script type="text/javascript" src="js/jquery.min.js"></script>
<link rel="stylesheet" href="styles2.css" type="text/css" />
<link rel="stylesheet" href="styles.css" type="text/css" />

<link href="id_popup/facebox.css" media="screen" rel="stylesheet" type="text/css" />

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

<script type="text/javascript" src="js/superfish.js"></script>
<script type="text/javascript" src="js/custom.js"></script>
<script type="text/javascript" src="js/superfish.js"></script>
<script type="text/javascript" src="js/custom.js"></script>
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
        include('header.php');
		?>  
        <form action="" method="post" name="search">
        <table class="emp_tab" cellpadding="0" cellspacing="0">
        <tr class="search_res">
        <td class="info" width="1150">View Stock Details</td>
        <td width="490">
        <input type="date" name="t1">
        <input type="date" name="t2" >
        <input type="submit" value="Print" name="print">
        </td>
        <td width="150">
        <span>
        <a href="#" rel="popuprel" class="popup new">Add Stock</a>
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
        <th>Product Code</th>
		<th width="200">Product Name</th>
        <th width="160">Date</th>
        <th width="180">Employee Code</th>
        <th width="180">Shift Type</th> 
        <th width="180">Machine Code</th>
        <th width="180">Quantity </th>           
        <th width="100">Action</th>
        </tr>
        </thead>
        <tbody>
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
			echo round($row[4]);
			echo "</td>";
			echo "<td width='100'>";
			echo "<a href='sockpagination.php?del=$row[0]' onclick='return confirmSubmit()' class='print'>Delete</a>&nbsp;";
			echo "</td>";
			echo "</tr>";
		}
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
        <div class="popupbox_stock" id="popuprel">
        <div id="intabdiv">
        <br><br>
        <?php
        include("addstock.php");
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