<?php
	include("include/database.php");
	$c_up=$_REQUEST['c_id3'];
	$c_qry_f="select * from clients where c_id=".$c_up;
	$c_res_f=mysql_query($c_qry_f);
	$c_row=mysql_fetch_array($c_res_f);
?>
<?php
	if(isset($_REQUEST['can']))
	{
		header("location:clients.php");
	}
?>
 <br />
		<div class="hr"><center>Client Details</center></div>
        <br />
        <div>
        <form action="" method="post">
        <table class="q_clients">
                <tr><td class="l_form">Client Name:</td><td class="l_form"><input type="text" class="q_in" value="<?php echo $c_row[2]; ?>" /></td></tr>
                <tr><td class="l_form">Company Name:</td><td class="l_form"><input type="text" class="q_in" value="<?php echo $c_row[3]; ?>" /></td></tr>
                <tr><td class="l_form">Address1:</td><td class="l_form"><textarea><?php echo $c_row[4]; ?></textarea></td></tr>
                 <tr><td class="l_form">Address2:</td><td class="l_form"><textarea><?php echo $c_row[5]; ?></textarea></td></tr>
                <tr><td class="l_form">City:</td><td class="l_form"><input type="text" class="q_in" value="<?php echo $c_row[6]; ?>" /></td></tr>
                
                </table>
                <table class="q_clients2">
                <tr><td class="l_form">Pin Code:</td><td class="l_form"><input type="text" class="q_in" value="<?php echo $c_row[7]; ?>" /></td></tr>
                <tr><td class="l_form">Email Id:</td><td class="l_form"><input type="text" class="q_in" value="<?php echo $c_row[10]; ?>" /></td></tr>
                <tr><td class="l_form">Phone No:</td><td class="l_form"><input type="text" class="q_in" value="<?php echo $c_row[8]; ?>" /></td></tr>
                <tr><td class="l_form">Mobile No:</td><td class="l_form"><input type="text" class="q_in" value="<?php echo $c_row[9]; ?>" /></td></tr>
                <tr><td class="l_form">Date:</td><td class="l_form"><input type="text" class="q_in" value="<?php echo date('d-m-Y', strtotime($c_row[1])); ?>" /></td></tr>
               
                
                </table>
         
        </form>
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
