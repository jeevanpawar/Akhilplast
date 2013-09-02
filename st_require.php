<?php
	include("include/database.php");
 	$product= $_GET['p_id'];
 	$query="SELECT * FROM products WHERE p_code='$product'";
	$result=mysql_query($query) or die(mysql_error());
	
?>
<link rel="stylesheet" href="styles2.css" type="text/css" />
<link rel="stylesheet" href="styles.css" type="text/css" />

<script type="text/javascript" src="jquery.1.4.2.js"></script>
<script type="text/javascript" src="jsDatePick.jquery.min.1.3.js"></script>
<link rel="stylesheet" type="text/css" media="all" href="jsDatePick_ltr.min.css" />
<script type="text/javascript">
	window.onload = function(){
		new JsDatePick({
			useMode:2,
			target:"inputField",
			dateFormat:"%d-%M-%Y"
			/*selectedDate:{				This is an example of what the full configuration offers.
				day:5,						For full documentation about these settings please see the full version of the code.
				month:9,
				year:2006
			},
			yearsRange:[1978,2020],
			limitToToday:false,
			cellColorScheme:"beige",
			dateFormat:"%m-%d-%Y",
			imgPath:"img/",
			weekStartDay:1*/
		});
	};
</script>
<table class="y_clients2">
 <tr>
 	<td class="l_form">Product Name:</td>
    <td align="right"><select id="p_name" class="q_in2" name="p_name">            	
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
 $query="SELECT * FROM products WHERE p_code='$product' ";
	$result=mysql_query($query) or die(mysql_error());
?>
	<tr><td class="l_form">Size:</td>
                <td align="right"> <select  id="p_size" class="q_in2" name="p_size">
                <option value="0">Select</option>
                 <?php 	while($row=mysql_fetch_array($result)) 
				 { ?>
					<option value="<?php echo $row[3];?>">
					<?php echo $row[3];?>	  
        			</option>
				 <?php } ?>
                </select></td></tr>
                
  <?php
    $query="SELECT * FROM products WHERE p_code='$product' ";
	$result=mysql_query($query) or die(mysql_error());
  ?>
                
                <tr><td class="l_form">Weight:</td>
                <td align="right"><select id="p_wt" class="q_in2" name="p_wt">
                <option value="0">Select</option>
                 <?php 	while($row=mysql_fetch_array($result)) 
				 { ?>
					<option value="<?php echo $row[4];?>">
					<?php echo $row[4];?>	  
        			</option>
				 <?php } ?>
                </select></td></tr>
  <?php
   $query="SELECT * FROM products WHERE p_code='$product' ";
	$result=mysql_query($query) or die(mysql_error());
  ?>
                				
                <tr><td class="l_form">Color:</td>
                <td align="right"><select  id="p_color" class="q_in2" type="text" name="p_color"><option value="0">Select</option>
                <?php 	while($row=mysql_fetch_array($result)) 
			{ ?>
			<option value="<?php echo $row[5];?>">
			<?php echo $row[5];?>	  
        </option>
			<?php } ?>
                </select></td></tr>
                <?php
    			$query="SELECT * FROM products WHERE p_code='$product' ";
				$result=mysql_query($query) or die(mysql_error());
  				?>
                <tr><td class="l_form">Shape:</td>
                <td align="right"><select  id="shape" class="q_in2" type="text" name="p_shape" onchange="quantity(this.value)" ><option value="0">Select</option>
                 <?php 	while($row=mysql_fetch_array($result)) 
			{ ?>
			<option value="<?php echo $row[6];?>">
			<?php echo $row[6];?>	  
        	</option>
			<?php } ?>
                </select></td></tr>
                 <tr>
                 <td class="l_form">Date:</td>
                 <td align="right"><input id="inputField" class="q_in2" type="date" name="s_date" size="12" value="<?php  echo date('d-m-Y'); ?>"/></td>
                 </tr>
                 
                 <?php
    			$query="SELECT * FROM products WHERE p_code='$product' ";
				$result=mysql_query($query) or die(mysql_error());
  				?>	
                 <tr><td class="l_form">Shift Type:</td>
                <td align="right"><select  id="shift" class="q_in2" type="text" name="shift">
                <option value="0">Select</option>
                <option value="Day Shift">Day Shift</option>
                <option value="Night Shift">Night Shift</option>
                </select></td></tr>
               
                <tr><td class="l_form">Machine No:</td>
				<td align="right"><input id="m_no" class="q_in2" type="text" name="mc_no"  /></td></tr>                                             
				<tr><td class="l_form">Person Code:</td>
				<td align="right"><input id="per_code" class="q_in2" type="text" name="per_code"  /></td></tr>

                  
                 
               <tr><td class="l_form">Quantity:</td>
                <td align="right"><input id="quant"  onKeyUp="getValues(2)" class="q_in2" type="text" name="p_quant"  /></td></tr>            
                
                 </table>
        
                