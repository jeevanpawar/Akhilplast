<?php
  
	include("include/database.php");
	$c_up=$_REQUEST['c_id2'];
	$c_qry_f="select * from clients where c_id=".$c_up;
	$c_res_f=mysql_query($c_qry_f);
	$c_row=mysql_fetch_array($c_res_f);
?>
<br />
		<div class="hr"><center>Update Client Details</center></div>
        <br />
        <div>
        <form action="update.php?client_id=<?php echo $c_up; ?>" method="post" >
        <table class="q_clients">
                <tr><td class="l_form">Client Name:</td><td><input class="q_in" type="text" name="c_first" value="<?php echo $c_row[2]; ?>" /></td></tr>
                <tr><td class="l_form">Company Name:</td><td><input class="q_in" type="text" name="c_last" value="<?php echo $c_row[3]; ?>"/></td></tr>
                <tr><td class="l_form">Address1:</td><td><textarea class="q_add" name="c_add"><?php echo $c_row[4]; ?></textarea></td></tr>
                <tr><td class="l_form">Address2:</td><td><textarea class="q_add" name="c_add2" ><?php echo $c_row[5]; ?> </textarea></td></tr>
                <tr><td class="l_form">City:</td><td><input class="q_in" type="text" name="c_city" value="<?php echo $c_row[6]; ?>"/></td></tr>
               
                </table>
                <table class="q_clients2">
                 <tr><td class="l_form">Pin Code:</td><td><input class="q_in" type="text" name="c_pin" value="<?php echo $c_row[7]; ?>" /></td></tr>
                <tr><td class="l_form">Email Id:</td><td><input class="q_in" type="text" name="c_email" value="<?php echo $c_row[10]; ?>"/></td></tr>
                <tr><td class="l_form">Phone No:</td><td><input class="q_in" type="text" name="c_ph" value="<?php echo $c_row[8]; ?>"/></td></tr>
                <tr><td class="l_form">Mobile No:</td><td><input class="q_in" type="text" name="c_mo" value="<?php echo $c_row[9]; ?>" /></td></tr>
                <tr><td class="l_form">Date:</td><td><input class="q_in" type="text" name="c_date" value="<?php  echo date('d-m-Y', strtotime($c_row[1])); ?>"/></td></tr>
                </table>
        <div class="addclients_u">
         <input name="c_up" value=" Update " type="submit" />
         <input name="c_up" value=" Cancel " type="submit" />
        </div>
        <br /><br />
        </form>
    </div>
    