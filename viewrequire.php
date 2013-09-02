<?php
	include("include/database.php");
	
	$c_id=$_REQUEST['c_id3'];
 	
  $query="select * from requirement where r_id=".$c_id;
	
	$c_res=mysql_query($query);
	$req=mysql_fetch_array($c_res);
	

?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Akhil Plast</title>
<link rel="stylesheet" href="styles2.css" type="text/css" />
<link rel="stylesheet" href="styles.css" type="text/css" />
<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript" src="js/slider.js"></script>
<script type="text/javascript" src="js/superfish.js"></script>
<script type="text/javascript" src="js/custom.js"></script>


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

		<div class="quotation"><center>Client Requirement</center></div>
        <div>
        <form name="form1" action="" method="post">
        <table class="q_clients11">
         <tr><td class="l_form">Product Code:</td>
         <td><input id="rem" class="q_in2" name="p_code" type="text" value="<?php echo $req[3];?>"/> </td>
         </tr>
               
         <tr><td class="l_form">Product Name:</td>
         <td><input id="pname1" class="q_in2" name="p_name" type="text" value="<?php echo $req[4];?>"/> </td>
         </tr>
         <tr><td class="l_form">Size:</td>
         <td><input  id="size" class="q_in2" name="p_size" value="<?php echo $req[5];?>"</td></tr>
                
                <tr><td class="l_form">Weight:</td>
                <td><input id="quality" class="q_in2" name="p_wt" value="<?php echo $req[6];?>"/></td>
                </tr>
                				
                <tr><td class="l_form">Color:</td>
                <td><input  id="color" class="q_in2"  name="p_color" value="<?php echo $req[7];?>"
                
                /></td></tr>
                <tr><td class="l_form">Shape:</td>
                <td><input id="shape" class="q_in2" type="text" name="p_shape" value="<?php echo $req[8];?>"/>
                </td></tr>
                
                <tr><td class="l_form">Quantity:</td>
                <td><input id="quant" class="q_in2" type="text" name="p_quant" value="<?php echo $req[9];?>" /></td></tr>
               
               	<tr><td class="l_form">Available Quantity:</td>
                <td><input id="aquant" class="q_in2" type="text" name="p_aquant" value="<?php echo $req[10];?>" /></td></tr>
                
                <tr><td class="l_form">Remaining Quantity:</td>
                <td><input id="rquant" class="q_in2" type="text" name="p_rquant" value="<?php echo $req[11];?>"/></td></tr>
               
                <tr><td class="l_form">Remark:</td>
                <td><input id="rem" class="q_in2" name="remark" type="text" value="<?php echo $req[12];?>"/> </td></tr>
                 
                </table>
                 </div>
                
        
        </form>
    </div>

 
   
</body>
</html>
