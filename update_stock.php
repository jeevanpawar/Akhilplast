<?php
	include("session.php");
	error_reporting(0);
	include("include/database.php");
	$id=$_REQUEST['c_id2'];
	$query1="select * from stock where st_id=".$id;
	$exe1=mysql_query($query1);
	$req=mysql_fetch_array($exe1);
?>
<html>
<head>
<script language="javascript" type="text/javascript">
function getXMLHTTP() { //fuction to return the xml http object
		var xmlhttp=false;	
		try{
			xmlhttp=new XMLHttpRequest();
		}
		catch(e){		
			try{			
				xmlhttp= new ActiveXObject("Microsoft.XMLHTTP");
			}
			catch(e){
				try{
				xmlhttp = new ActiveXObject("Msxml2.XMLHTTP");
				}
				catch(e1){
					xmlhttp=false;
				}
			}
		} 	
		return xmlhttp;
    }
	function getState(countryId) {		
		var strURL="st_require.php?p_id="+countryId;
		var req = getXMLHTTP();
		
		if (req){
			req.onreadystatechange = function() {
				if (req.readyState == 4) {
					// only if "OK"
					if (req.status == 200) {						
						document.getElementById('pname').innerHTML=req.responseText;						
					} else {
						alert("There was a problem while using XMLHTTP:\n" + req.statusText);
					}
				}				
			}			
			req.open("GET", strURL, true);
			req.send(null);
		}		
	}
	function quantity(shape)
	{
		var qunt=new Array();
		qunt[0]=shape;		
		e=document.getElementById('p_code');	
		qunt[1] = e.options[e.selectedIndex].value;
		
		a=document.getElementById('p_name');		
		qunt[2] = a.options[a.selectedIndex].value;
		
		b=document.getElementById('p_color');
		qunt[3] = b.options[b.selectedIndex].value;
		
		c=document.getElementById('p_wt');
		qunt[4] = c.options[c.selectedIndex].value;
		
		d=document.getElementById('p_size');
		qunt[5] = d.options[d.selectedIndex].value;
		
	 
	var strURL="qunt.php?q_id="+qunt;
		var req = getXMLHTTP();
		
		if (req) {
			
			req.onreadystatechange = function() {
				if (req.readyState == 4) {
					// only if "OK"
					if (req.status == 200) {						
						document.getElementById('aquant').value=req.responseText;						
					} else {
						alert("There was a problem while using XMLHTTP:\n" + req.statusText);
					}
				}				
			}			
			req.open("GET", strURL, true);
			req.send(null);
		}		
	}
	function getValues(val){
	var numVal1=parseInt(document.getElementById("aquant").value);
	var numVal2=parseInt(document.getElementById("quant").value);
	var totalValue = numVal1 + numVal2;
	document.getElementById("rquant").value = totalValue;
}			
</script>
<script type="text/javascript" language="javascript">
</script>

</head>

<body>
<br>
		<div class="hr"><center>Update Stock</center></div>
        <div>
        <form name="form2" action="updatestck.php?id=<?php echo $id; ?>" method="post">
        <table class="q_clients11">
<tr><td class="l_form">Product Code:</td>
<td>
<select id="p_code" class="q_in22" name="p_code" onChange="getState(this.value)">

    <?php
        $query="select * from products group by p_code";
        $exe=mysql_query($query);
        while($res=mysql_fetch_array($exe))
        {
            
            if($res[1]==$req[1])
            echo "<option value='$res[1]' selected>$res[1]</option>";
            else
            echo "<option value='$res[1]'>$res[1]</option>";
        }
        
    ?> 
    
</select>

</table>
<div id="pname" >
<table class="y_clients">
<tr><td class="l_form">Product Name:</td>
<td>
<select id="p_name" class="q_in2"  name="p_name">
<option value="<?php echo $req[2];?>"><?php echo $req[2];?> </option></select>
</td></tr>
<tr><td class="l_form">Size:</td>
<td><select  id="p_size" class="q_in2" name="p_size"><option  value="<?php echo $req[3];?>"><?php echo $req[3];?></option></select></td></tr>

<tr><td class="l_form">Weight:</td>
<td><select id="p_wt" class="q_in2" name="p_wt"><option  value="<?php echo $req[4];?>"><?php echo $req[4];?></option>

</select></td></tr>
            
<tr><td class="l_form">Color:</td>
<td><select  id="p_color" class="q_in2"  name="p_color"><option  value="<?php echo $req[5];?>"><?php echo $req[5];?></option>

</select></td></tr>
<tr><td class="l_form">Shape:</td>
<td><select  id="shape" class="q_in2" type="text" name="p_shape"><option  value="<?php echo $req[6];?>"><?php echo $req[6];?></option>
</select></td></tr>
<tr><td class="l_form">Date:</td>
<td>
<input id="s_date" class="q_in2" type="text" name="s_date"  value="<?php echo $req[7];?>"/>

</td></tr>

<tr><td class="l_form">Shift Type:</td>
<td><select  id="shift" class="q_in2" type="text" name="shift">
<option  value="<?php echo $req[8];?>"><?php echo $req[8];?></option>
<option value="Morning">Morning Shift</option>
<option value="Evening">Evening Shift</option>
</select></td></tr>

<tr><td class="l_form">Machine No:</td>
<td ><input id="m_no" class="q_in2" type="text" name="mc_no"   value="<?php echo $req[10];?>"/></td></tr>                                             
<tr><td class="l_form">Person Code:</td>
<td ><input id="per_code" class="q_in2" type="text" name="per_code"  value="<?php echo $req[11];?>" /></td></tr>

<tr><td class="l_form">Available Quantity:</td>
<td><input id="aquant" class="q_in2" type="text" name="p_aquant" onKeyUp="getValue(1)"  value="<?php echo $req[9];?>"/></td></tr>

<tr><td class="l_form">Quantity:</td>
<td><input id="quant" class="q_in2" type="text" name="p_quant" onKeyUp="getValue(2)" /></td></tr>
            
<tr><td class="l_form">Total Stock:</td>
<td><input id="rquant" class="q_in2" type="text" name="p_rquant" /></td></tr>                                             
</table>
</div>
<br>
<div class="addclients_st">
<input name="s_add" value=" Update " type="submit" onClick="javascript:return validateMyForm();" />
<input name="can" value="Cancel" type="submit" />
</div>

       	 </form>
</div>
</body>
</html>
