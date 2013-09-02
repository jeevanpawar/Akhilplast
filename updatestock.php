<?php
include("include/database.php");
 
	if(isset($_REQUEST['c_id2']))
	{
	$id=$_REQUEST['c_id2'];
	$c_qry="select * from stock where st_id=".$id;
	$c_res=mysql_query($c_qry);
	$result=mysql_fetch_array($c_res);
	//print_r($result);
	}
	?>
<html>
<body>
		<div class="quotation"><center>Update Stock Details</center></div>
         
        <div>
        <form name="form1" action="upd_stk.php?id=<?php echo $id; ?>" method="post">
        
        <table class="y_clients">
                <tr><td class="l_form"> Stock ID:</td><td><input id="id" class="q_in" type="text" name="avail_id" value="<?php echo $result[0];?>" /></td></tr>
                <tr><td class="l_form">Product Name:</td><td><input id="nm1" class="q_in" type="text" name="pname" value="<?php echo $result[3] ;?>" /></td></tr>
                <tr><td class="l_form">Size:</td><td><input type="text" id="cate" class="q_in" name="size" value="<?php echo $result[4];?>" /></td></tr>
                 <tr><td class="l_form">Quantity:</td><td><input type="text" id="qunt" class="q_in" name="qunt" value="<?php echo $result[7];?>" /></td></tr>		
                 <tr><td class="l_form">Shift Type:</td><td><input type="text" id="qunt" class="q_in" name="shifttype" value="<?php echo $result[9];?>" /></td></tr>		
                 <tr><td class="l_form">Date:</td><td><input type="text" id="qunt" class="q_in" name="date" value="<?php echo $result[10];?>" /></td></tr>		
                
                 			
                </table>
                
                
        <div class="addclients_b">
         <input name="s_up" class="formbutton" value=" Update " type="submit" />
         <input name="can" class="formbutton" value="Cancel" type="submit" />
        </div>
        
        </form>
    </div>
    
</body>
</html>