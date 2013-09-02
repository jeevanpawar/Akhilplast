<?php
error_reporting(0);
include("include/database.php");

	if(isset($_REQUEST['c_add']))
	{
		
	$c_t1=$_POST['c_fname'];
	$c_t2=$_POST['c_lname'];
	$c_t3=$_POST['c_address1'];
    $c_t12=$_POST['c_addr2'];	
	$c_t4=$_POST['c_city'];
	$c_t6=$_POST['c_pin'];
	$c_t7=$_POST['c_ph'];
	$c_t8=$_POST['c_mo'];
	$c_t9=$_POST['c_email'];	
	$c_t11=$_POST['c_date'];
		
		
 	$c_qry="insert into clients(c_date,client_name,comp_name,c_add1,c_add2,c_city,c_pin,c_ph,c_mo,c_email) values('".$c_t11."','".$c_t1."','".$c_t2."','".$c_t3."','".$c_t12."','".$c_t4."','".$c_t6."','".$c_t7."','".$c_t8."','".$c_t9."')";
	 
	$c_res=mysql_query($c_qry) or  die(mysql_error());
	if($c_res)
	{
		header("location:clients.php");
	}
	else
	{
		header("location:addclients.php");
	}
	}
	if(isset($_REQUEST['can']))
	{
		header("location:clients.php");
	}
?>
 		<div class="hr"><center>Add New Client</center></div>
     
        <form name="form1" action="" method="post">
        <table class="q_clients">
        <tr><td class="l_form">Company Name:</td><td><input id="compname" class="q_in" type="text" name="c_lname"/></td></tr>
                <tr><td class="l_form">Person Name:</td><td><input id="cname" class="q_in" type="text" name="c_fname" /></td></tr>
                
                <tr><td class="l_form">Address1:</td><td><textarea id="address1" class="q_add" name="c_address1"></textarea></td></tr>
                 <tr><td class="l_form">Address2:</td><td><textarea id="address2" class="q_add" name="c_addr2"></textarea></td></tr>
                <tr><td class="l_form">City:</td><td><input id="city" class="q_in" type="text" name="c_city"/></td></tr>				
                </table>
                
                <table class="q_clients2">
                <tr><td class="l_form">Pin Code:</td><td><input id="pin" class="q_in" type="text" name="c_pin"/></td></tr>
                <tr><td class="l_form">Email Id:</td><td><input id="email" class="q_in" type="text" name="c_email"/></td></tr>
                <tr><td class="l_form">Phone No:</td><td><input id="ph" class="q_in" type="text" name="c_ph"/></td></tr>
                <tr><td class="l_form">Mobile No:</td><td><input id="mo" class="q_in" type="text" name="c_mo"/></td></tr>
                
                <tr><td class="l_form">Date:</td><td><input class="q_in" type="date" name="c_date" value="<?php  echo date('d-m-Y'); ?>"/></td></tr>
                
                </table>
        <div class="addclients_b">
         <input name="c_add" value=" Add " type="submit"   />
         <input name="can" value="Cancel" type="submit" />
        </div>
        </form>
     
        
 