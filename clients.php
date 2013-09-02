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
<script type="text/javascript">
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
function confirmSubmit()
{
var agree=confirm("Are you sure to Delete this Entry?");
if (agree)
	return true ;
else
	return false ;
}

//Default Starting Page Results

$("#pagination li:first").css({'color' : '#FF0084'}).css({'border' : 'none'});

Display_Load();

$("#content").load("clientspagination.php?page=1", Hide_Load());
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
</form>
<div id="loading" ></div>
<div id="content" ></div>
<table width="800px">
<tr><td>
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
