<?php
    include("session.php");
	error_reporting(0);
	include("include/database.php");
	$per_page = 20; 
	$sql = "select * from stock";
	$rsd = mysql_query($sql) or die(mysql_error());
 	$count = mysql_num_rows($rsd);
  	$pages = ceil($count/$per_page);

	
?>
<html>
<head>
<title>akhil Plast</title>
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
	
	$("#content").load("sockpagination.php?page=1", Hide_Load());



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
		$("#content").load("sockpagination.php?page=" + pageNum, Hide_Load());
		
	});	
});

setTimeout(function()
{
   $('#lead_form').show();
}, 5000);
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
        <td>
        <span>
        <a href="#" rel="popuprel" class="popup new">Add Stock</a>
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