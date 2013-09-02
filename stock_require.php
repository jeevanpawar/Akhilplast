<?php
	include("include/database.php");
	
 	$product= $_GET['p_id'];
	$query="SELECT * FROM products WHERE p_code='$product' ";
	$result=mysql_query($query) or die(mysql_error());
?>
<link rel="stylesheet" href="styles2.css" type="text/css" />
<link rel="stylesheet" href="styles.css" type="text/css" />

<table>
 <tr>
 	<td class="l_form">Product Name:</td>
    <td><select id="p_name" class="q_in2" name="p_name">            	
		<option>Select</option>
			<?php 	while($row=mysql_fetch_array($result)) 
			{ ?>
			<option value="<?php echo $row[2];?>">
			<?php echo $row[2];?>	  
        </option>
			<?php } ?>
	</select>
</td></tr>
<?php
  $query="SELECT * FROM products WHERE p_code='$product'";
	$result=mysql_query($query) or die(mysql_error());
?>
	<tr><td class="l_form">Size:</td>
                <td><select  id="p_size" class="q_in2" name="p_size">
                <option value="0">Select</option>
                 <?php 	while($row=mysql_fetch_array($result)) 
				 { ?>
					<option value="<?php echo $row[3];?>">
					<?php echo $row[3];?>	  
        			</option>
				 <?php } ?>
                </select></td></tr>
                
  <?php
    $query="SELECT * FROM products WHERE p_code='$product'";
	$result=mysql_query($query) or die(mysql_error());
  ?>
                
                <tr><td class="l_form">Weight:</td>
                <td><select id="p_wt" class="q_in2" name="p_wt">
                <option value="0">Select</option>
                 <?php 	while($row=mysql_fetch_array($result)) 
				 { ?>
					<option value="<?php echo $row[4];?>">
					<?php echo $row[4];?>	  
        			</option>
				 <?php } ?>
                </select></td></tr>
  <?php
    $query="SELECT * FROM products WHERE p_code='$product'";
	$result=mysql_query($query) or die(mysql_error());
  ?>
                				
                <tr><td class="l_form">Color:</td>
                <td><select  id="p_color" class="q_in2" type="text" name="p_color"><option value="0">Select</option>
                <?php 	while($row=mysql_fetch_array($result)) 
			{ ?>
			<option value="<?php echo $row[5];?>">
			<?php echo $row[5];?>	  
        </option>
			<?php } ?>
                </select></td></tr>
                <?php
    			$query="SELECT * FROM products WHERE p_code='$product'";
				$result=mysql_query($query) or die(mysql_error());
  				?>
                <tr><td class="l_form">Shape:</td>
                <td><select  id="p_shape" class="q_in2" type="text" name="p_shape" onchange="quantity(this.value)" ><option value="0">Select</option>
                 <?php 	while($row=mysql_fetch_array($result)) 
			{ ?>
			<option value="<?php echo $row[6];?>">
			<?php echo $row[6];?>	  
        </option>
			<?php } ?>
                </select></td></tr>
                <?php
    			$query="SELECT * FROM products WHERE p_code='$product'";
				$result=mysql_query($query) or die(mysql_error());
  				?>
               <tr><td class="l_form">Quantity:</td>
                <td><input id="quant" class="q_in2" type="text" name="p_quant" onKeyUp="return getval(this.value)" /></td></tr>
               
               	<tr><td class="l_form">Available Quantity:</td>
                <td><input id="aquant" class="q_in2" type="text" name="p_aquant" value="" /></td></tr>
                
                <tr><td class="l_form">Remaining Quantity:</td>
                <td><input id="rquant" class="q_in2" type="text" name="p_rquant" /></td></tr>
               
                <tr><td class="l_form">Remark:</td>
                <td><input id="rem" class="q_in2" name="remark" type="text"/> </td></tr>
                
                </table>
                
                 
                
                
                 <div class="san1">
         <input name="p_add" class="formbutton" value=" Add " type="submit" onClick="javascript:return validateMyForm();" />
         <input name="can" class="formbutton" value="Cancel" type="submit" />
        </div>
        
                