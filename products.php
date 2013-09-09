<?php
include("session.php");
error_reporting(0);
include("include/database1.php");
?>

<?php
	if(isset($_REQUEST['c_id1']))
	{
		$c_d=$_REQUEST['c_id1'];		
		
		$c_del="delete from products where id='$c_d'";
		$c_dres=mysql_query($c_del);
		if($c_dres)
		{
			header("location:products.php?res=suc");
		}
		else
		{
			header("location:products.php?res=er1");
		}
		
	}
	$c_qry_f="select * from products order by id desc";
	$c_res_f=mysql_query($c_qry_f);
?>
<html>
<head>
<title>Akhil Plast</title>
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
        <tr class="search_res">
        <td class="info" width="1150">Product Details</td>
        <td>
        <span>
        <a href="#" rel="popuprel" class="popup new">Add Product</a>
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
        <th width="100">Product Code</th>
        <th width="200">Product Name</th>        
		<th width='100'>Size</th>	        
        <th width="100">Weight</th>
         <th width="100">Color</th>
        <th width="100">Shape</th>
        <th width="170">Action</th>
        </tr>
        </thead>
        <tbody>
        <?php
		while($c_row=mysql_fetch_array($c_res_f))
		{
			echo "<tr class='pagi'>";
			echo "<td  >";
			echo $c_row[1];
			echo "</td>";
			echo "<td >";
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
			echo "<td >";		
			echo "<a href='?c_id1=$c_row[0]' onclick='return confirmSubmit()' class='print'>Delete</a>&nbsp;<a rel='facebox' href='updateproducts.php?c_id2=$c_row[0]' class='print'>Update</a>&nbsp;<a rel='facebox' href='productsview.php?c_id3=$c_row[0]' class='print'>View</a> ";
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
        <div class="popupbox_pro" id="popuprel">
		<div id="intabdiv">
        <br><br>
         <?php
         include('addproducts.php');
		 ?>	
        </div>
        </div>          
        
    <div id="fade"></div>
    	<div class="clear"></div>                            
    	<div class="clear"></div>
    
</div>
 <div id="footer">
     <div class="clear"></div> 
    </div>
    </div>
</body>
</html>
