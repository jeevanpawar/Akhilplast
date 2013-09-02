<?php
include("include/database.php");
	if(isset($_REQUEST['p_add']))
	{
	$c_t1=$_POST['p_code'];
	$c_t2=$_POST['p_name'];
	$c_t3=$_POST['p_size'];
	$c_t4=$_POST['p_wt'];
	$c_t6=$_POST['p_color'];
	$c_t7=$_POST['p_shape'];
	$c_t8=$_POST['p_quant'];
	
	$c_t9=$_POST['remark'];
		
	  $c_qry="insert into products(p_code,p_name,p_size,p_wt,p_color,p_shape,remark) values('".$c_t1."','".$c_t2."','".$c_t3."','".$c_t4."','".$c_t6."','".$c_t7."','".$c_t9."')";	
	$c_res=mysql_query($c_qry) or die(mysql_error());
	if($c_res)
	{
		header("location:products.php");
	}
	else
	{
		header("location:addproducts.php");
	}
	}
	if(isset($_REQUEST['can']))
	{
		header("location:products.php");
	}
?>

<script type="text/javascript" language="javascript">
function validateMyForm ( ) { 

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
	
		
		 else if ( document.form1.ph.value == "" ) { 
            alert ( "Please enter Phone Number" ); 
            isValid = false;
    } 
	
		 else if ( document.form1.mo.value == "" ) { 
            alert ( "Please enter Mobile Number" ); 
            isValid = false;
    } 
    return isValid;
}
</script>

</head>  
		<div class="quotation"><center>Add New Product</center></div>
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
    </div>