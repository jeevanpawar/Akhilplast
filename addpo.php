<?php
include("session.php");
error_reporting(0);
include("include/database.php");

$c_qry_f="select * from clients order by c_id desc";
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

	
</head>
<body>
<div id="container">
<div id="sub-header">	
    <?php
	include("header.php");
	?>
    
    <table class="emp_tab">
                <tr class="search_res">
                <td class="info">Pay Order Details</td>
                </tr>
                </table>
                <br>
                <div id="demo">
                <div class="tab">
                <table cellpadding="0" cellspacing="0" border="0" class="display" id="example">
                <thead>
                <tr>
                <th width="250">Person Name</th>
                <th width="200">Company Name</th>
                <th width="160">Contact No</th>
                <th  width="10">Email_id </th>
                <th width="100">Action</th>
                </tr>
        		<tbody>
                <?php
                while($c_row=mysql_fetch_array($c_res_f))
                {                                                                                                                        
                    
                echo "<tr class='pagi'>";
                echo "<td width='250'>";
                echo $c_row[2]; 
                echo "</td>";
                echo "<td width='160'>";
                echo $c_row[3];
                echo "</td>";
                echo "<td width='160'>";
                echo $c_row[9];
                echo "</td>";
                echo "<td width='160'>";
                echo $c_row[10];
                echo "</td>"; 
                echo "<td width='100'>";
                echo "<a rel='facebox' href='add_delivery.php?c_id2=$c_row[0]' class='print'>Create</a>";
                echo "</td>";
                echo "</tr>";
                }
                ?>
                </tbody>
                </table>
                                
                </div>                             
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
