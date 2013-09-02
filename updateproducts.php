<?php
include("session.php");
error_reporting(0);
include("include/database.php");
$c_up=$_REQUEST['c_id2'];
$c_qry_f="select * from products where id=".$c_up;
$c_res_f=mysql_query($c_qry_f);
$c_row=mysql_fetch_array($c_res_f);
?>
<html>
<body>
 <br />
	 <div class="hr"><center>Update Product Details</center></div>
     <div>
     <form name="form1" action="update_product.php?id=<?php echo $c_up; ?>" method="post">
	 <table class="q_clients">
    <tr><td class="l_form">Product Code:</td><td><input id="pcode" class="q_in" type="text" name="p_code"  value="<?php echo $c_row[1]; ?>" /></td></tr>
    <tr><td class="l_form">Product Name:</td><td><input id="pname" class="q_in" type="text" name="p_name" value="<?php echo $c_row[2]; ?>" /></td></tr>
    <tr><td class="l_form">Size:</td><td><input id="size" class="q_in" name="p_size" value="<?php echo $c_row[3]; ?>" /></td></tr>
     <tr><td class="l_form">Weight:</td><td><input id="wt" class="q_in" name="p_wt" value="<?php echo $c_row[4]; ?>" /></td></tr>             
     </table>
     <table class="q_clients2">               
    <tr><td class="l_form">Color:</td><td><input id="color" class="q_in" type="text" name="p_color" value="<?php echo $c_row[5]; ?>" /></td></tr>
    <tr><td class="l_form">Shape:</td><td><input id="shape" class="q_in" type="text" name="p_shape" value="<?php echo $c_row[6]; ?>" /></td></tr>
    
      

     <tr><td class="l_form">Remark:</td><td><textarea id="remark" class="q_add" name="remark">  <?php echo $c_row[8]; ?></textarea></td></tr>
    </table>
     <div class="addclients_u">
     <input name="c_up" value=" Update " type="submit" />
     <input name="can" value="Cancel" type="submit" />
    </div>
     <br>
     </form>
    </div>
             
     
</body>
</html>
