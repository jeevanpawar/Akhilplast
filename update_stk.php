<?php
	include("include/database.php");
	$id=$_REQUEST['c_id2'];
	
	$query="select * from stock where st_id=".$id;
	$exe=mysql_query($query);
	$req=mysql_fetch_array($exe);
?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" href="styles2.css" type="text/css" />
<link rel="stylesheet" href="styles.css" type="text/css" />

<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript" src="js/slider.js"></script>
<script type="text/javascript" src="js/superfish.js"></script>
<script type="text/javascript" src="js/custom.js"></script>

<script language="javascript" type="text/javascript">
function getXMLHTTP() { //fuction to return the xml http object
		var xmlhttp=false;	
		try{
			xmlhttp=new XMLHttpRequest();
		}
		catch(e)	{		
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
		var strURL="require.php?p_id="+countryId;
		var req = getXMLHTTP();
		if (req) {	
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
	function getval(val)
	{
		 
	var qnt=document.getElementById('aquant').value;	
	document.getElementById('rquant').value=(qnt-val)*1;
	}
</script>

<script type="text/javascript" language="javascript">
function validateMyForm ( ) 
{ 
/*
    var isValid = true;
    if ( document.form1.cname.value == "" ) 
	{ 
	    alert ( "Please enter Client Name" ); 
	    isValid = false; 
    }
	    else if ( document.form1.compname.value == "") { 
            alert ( "please enter Company Name" ); 
            isValid = false;
		}
		 else if ( document.form1.address1.value == "" ) { 
            alert ( "Please enter Address1" ); 
            isValid = false;
    } 
	
		 else if ( document.form1.city.value == "" ) { 
            alert ( "Please enter City" ); 
            isValid = false;
    } 
	
	 else if ( document.form1.pin.value == "" ) { 
            alert ( "Please enter Pincode" ); 
            isValid = false;
    } 
	
		 else if ( document.form1.email.value == "" ) { 
            alert ( "Please enter Email Address" ); 
            isValid = false;
    } 
	
		 else if ( document.form1.ph.value == "" ) { 
            alert ( "Please enter Phone Number" ); 
            isValid = false;
    } 
	
		 else if ( document.form1.mo.value == "" ) { 
            alert ( "Please enter Mobile Number" ); 
            isValid = false;
    } 
    return isValid;*/
}
</script>

</head>

<body>
    <br />
		<div class="quotation"><center>Update Requirement</center></div>
        <div>
        <form name="form1" action="updaterequirement.php?id=<?php echo $id; ?>" method="post">
        <table class="q_clients11">
         <tr><td class="l_form">Product Code:</td>
             <td>
                	<select id="p_code" class="q_in22" name="p_code" onChange="getState(this.value)" >
                    	
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
                </td></tr>
                </table>
              <div id="pname" class="y_clients">
              <table class="req">
                <tr><td class="l_form">Product Name:</td>
                <td>
                	<select id="p_name" class="q_in2"  name="p_name" >
                    <option value="<?php echo $req[4];?>"><?php echo $req[4];?></option></select>
                </td></tr>
                <tr><td class="l_form">Size:</td>
                <td><select  id="p_size" class="q_in2" name="p_size"><option value="<?php echo $req[5];?>"><?php echo $req[5];?></option></select></td></tr>
                
                <tr><td class="l_form">Weight:</td>
                <td><select id="p_wt" class="q_in2" name="p_wt"><option value="<?php echo $req[6];?>"><?php echo $req[6];?></option>
                
                </select></td></tr>
                				
                <tr><td class="l_form">Color:</td>
                <td><select  id="p_color" class="q_in2"  name="p_color"><option value="<?php echo $req[7];?>"><?php echo $req[7];?></option>
                
                </select></td></tr>
                <tr><td class="l_form">Shape:</td>
                <td><select  id="shape" class="q_in2" type="text" name="p_shape"><option value="<?php echo $req[8];?>"><?php echo $req[8];?></option>
                </select></td></tr>
                
                <tr><td class="l_form">Quantity:</td>
                <td><input id="quant" class="q_in2" type="text" name="p_quant" value="<?php echo $req[9];?>"  onKeyUp="return getval(this.value)"/></td></tr>
               
               	<tr><td class="l_form">Available Quantity:</td>
                <td><input id="aquant" class="q_in2" type="text" name="p_aquant" value="<?php echo $req[10];?>" /></td></tr>
                
                <tr><td class="l_form">Remaining Quantity:</td>
                <td><input id="rquant" class="q_in2" type="text" name="p_rquant" value="<?php echo $req[11];?>"/></td></tr>
               
                <tr><td class="l_form">Remark:</td>
                <td><input id="rem" class="q_in2" name="remark" type="text" value="<?php echo $req[12];?>"/> </td></tr>
                 
                </table>
                
                  
                 <div class="san1">
         <input name="p_add" class="formbutton" value=" Update " type="submit" onClick="javascript:return validateMyForm();" />
         <input name="can" class="formbutton" value="Cancel" type="submit" />
        </div>
         </div>
        </form>
    </div>
    </div>
</body>
</html>
