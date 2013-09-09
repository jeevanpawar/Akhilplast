<?php
include("session.php");
error_reporting(0);
include("include/database.php");
?>
<?php

	$c_qry_f="select * from stock order by st_id desc";
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
<body class="fade-in">
<div id="container">
	    <div id="sub-header">
	    <?php
        include('header.php');
		?>
        <form action="" method="post" name="search">
		<table class="emp_tab" cellpadding="0" cellspacing="0">
        <tr class="search_res">
        <td class="info">Product Stock Details</td>
        <td width="100">
		<span>
		<a href="productpdf.php" class="new">Print</a>
		</span>
		</td>
        </tr>
        </table>
       </form>
       <br>
        <div id="demo">
        <div class="tab">
        <table cellpadding="0" cellspacing="0" border="0" class="display" id="example">
		<thead>
        <tr>
		<th width="100">Product Code</th>
		<th width="250">Product Name</th>
        <th width="160">Size</th>
        <th width="160">Weight</th>
        <th width="160">Color</th>
        <th width="160">Shape</th>
        <th width="150">Quantity</th>
        </tr>	
		</thead>
		
        <tbody>
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
        </tbody>
        </table>
        </div>
        </div>
          
		
    </div>
    </div>
        
    
    	<div class="clear"></div>
    </div>
</div>
 <div id="footer">
     <div class="clear"></div> 
    </div>
    </div>
</body>
</html>
