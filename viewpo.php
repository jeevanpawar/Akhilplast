<?php
include("session.php");
error_reporting(0);
include("include/database.php");
$per_page = 20; 
$sql = "select * from clients";
$rsd = mysql_query($sql);
$count = mysql_num_rows($rsd);
$pages = ceil($count/$per_page);
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
	$("#content").load("popagination.php?page=1", Hide_Load());
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
		$("#content").load("popagination.php?page=" + pageNum, Hide_Load());
		
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
			  $query="select  * from po where c_name LIKE '%$srch%' OR ph_no LIKE '%$srch%' OR work_no LIKE '%$srch%' OR cost_center LIKE'%$srch%' OR vendor LIKE'%$srch%'";
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
		echo $c_row[4];
		echo "</td>";
	    echo "<td>";
		echo date('d-m-Y',strtotime($c_row[3]));
		echo "</td>";
		echo "<td width='100' class='print'>";
		echo "<a href='?po_id1=$c_row[0]' onclick='return confirmSubmit()'><img src='imgs1/green_delete.png' width='16' height='16' /></a>&nbsp;<a href='update_delivery.php?po_id=$c_row[0]'><img src='imgs1/view.png' />/<img src='imgs1/updt.png' width='16' height='16' /></a>&nbsp;";
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
        <tr class="search_res" >
         <td class="info" width="1150px">Delivery Challan Details</td>
        <td>
        <span>
        <a href="addpo.php" class="new">Add Sale</a>
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
	</td></tr></table>
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
