<?php
echo $id=$_REQUEST['id'];
?>
        <div class="hr"><center>Add New Product</center></div>
        <div>
        <form name="form1" action="" method="post">
        <div class="pro">
        <table class="q_clients">
        <tr><td class="l_form">Product Code:</td><td><input id="pcode" class="q_in" type="text" name="p_code" /></td></tr>
        <tr><td class="l_form">Product Name:</td><td><input id="pname" class="q_in" type="text" name="p_name"/></td></tr>
        <tr><td class="l_form">Size:</td><td><input id="size" class="q_in" name="p_size"/></td></tr>
        <tr><td class="l_form">Weight:</td><td><input id="wt" class="q_in" name="p_wt"/></td></tr>               
        <tr><td class="l_form">Color:</td><td><input id="color" class="q_in" type="text" name="p_color"/></td></tr>
        <tr><td class="l_form">Shape:</td><td><input id="shape" class="q_in" type="text" name="p_shape"/></td></tr>
        <tr><td class="l_form">Remark:</td><td><textarea id="remark" class="q_add" name="remark"></textarea></td></tr>
        </table>
        </div>
        <div class="pro_b">
         <input name="p_add" value=" Add " type="submit" onClick="javascript:return validateMyForm();" />
         <input name="can" value="Cancel" type="submit" />
        </div>
        
        </form>