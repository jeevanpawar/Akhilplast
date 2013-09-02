<?php
include("session.php");
error_reporting(0);
include("include/database1.php");
$per_page = 20; 
$sql = "select * from products";
$rsd = mysql_query($sql);
$count = mysql_num_rows($rsd);
$pages = ceil($count/$per_page);
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
	<script type="text/javascript">
	
	function confirmSubmit()
{
var agree=confirm("Are you sure to Delete this Entry?");
if (agree)
	return true ;
else
	return false ;
}
	
	$(document).ready(function(){
	//Display Loading Image
	function Display_Load()
	{
	    $("#loading").fadeIn(900,0);
	
	}
	//Hide Loading Image
	function Hide_Load()
	{
		$("#loading").fadeOut('slow');
	};
	

    //Default Starting Page Results
   
	$("#pagination li:first").css({'color' : '#FF0084'}).css({'border' : 'none'});
	
	Display_Load();
	
	$("#content").load("productspagination.php?page=1", Hide_Load());



	//Pagination Click
	$("#pagination li").click(function(){
			
		Display_Load();
		
		//CSS Styles
		$("#pagination li")
		.css({'color' : '#0063DC'});
		
		$(this)
		.css({'color' : '#FF0084'})
		.css({'border' : 'none'});

		//Loading Data
		var pageNum = this.id;
		$("#content").load("clientspagination.php?page=" + pageNum, Hide_Load());
		
	});
	
	
});
	</script>
	


</head>

<body>
<div id="container">
<div id="sub-header">	
    <?php
	include("header.php");
	?>
    	<?php
		
		if(isset($_REQUEST['search']))
		  {
		 	 $srch=$_REQUEST['search'];			
			 $query="select  * from products where p_name LIKE '%$srch%' OR p_code LIKE '%$srch%' OR p_qual LIKE '%$srch%' OR c_quant LIKE'%srch%'";
	 		 $ans=mysql_query($query);
	 
	?>
        <table class="emp_tab">
        <?php
        if(mysql_num_rows($ans)==0)
		{
		?>
        <tr class='pagi'>
         <td colspan='6' align="center"><h3>No Data available</h3></td>
        </tr>
		
		<?php
        }
		?>
           <?php
		while($c_row=mysql_fetch_array($ans))
		{
        echo "<tr class='pagi'>";
         
       echo "<td width='250'>";
		echo $c_row[2];
		echo "</td>";
        echo "<td width='160'>";
		echo $c_row[3];
		echo "</td>";		
		echo "<td>";
		echo $c_row[8];	
		echo "</td>";
		echo "<td >";
		echo "<a href='?c_id1=$c_row[0]' onclick='return confirmSubmit()'><img src='imgs1/green_delete.png' height='20px;'/></a>&nbsp;<a href='updateclients.php?c_id2=$c_row[0]'><img src='imgs1/updt.png' height='20px;'/></a>&nbsp;<a href='clientsview.php?c_id3=$c_row[0]'><img src='imgs1/view.png'  /></a>&nbsp;<a href='gatepass.php?c_id3=$c_row[0]' class='print'>GatePass</a>&nbsp;<a href='view_gatepass.php?c_id3=$c_row[0]' class='print'>g_v</a>";
		echo "</td>";
		echo "</tr>";
		}
		?>      
        
        </table>
        <?php
		  }
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
        </form>
                
        <div id="loading" ></div>
	    <div id="content" ></div>
        <table width="800px">
		<tr><Td>
        <ul id="pagination">
            <?php
                    
            //Show page links
            for($i=1; $i<=$pages; $i++)
            {								
                echo '<li id="'.$i.'">'.$i.'</li>';
            }
            ?>
		</ul>	
		</Td></tr></table>

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
