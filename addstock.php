<?php
	include("session.php");
	error_reporting(0);
	include("include/database.php");
	
	if(isset($_REQUEST['s_add']))
	{	
		$c_t1=$_POST['p_code'];
		$c_t2=$_POST['p_name'];
		$c_t3=$_POST['p_size'];
		$c_t4=$_POST['p_wt'];
		$c_t5=$_POST['p_color'];
		$c_t6=$_POST['p_shape'];
		$c_t7=date('Y-m-d', strtotime($_POST['s_date']));
		$c_t8=$_POST['shift'];
		$c_t10=$_POST['p_quant'];
		$c_t12=$_POST['mc_no'];
		$c_t13=$_POST['per_code'];
				
		$qry="select * from stock where p_code='$c_t1' and st_name='$c_t2' and st_size='$c_t3' and st_wt='$c_t4' and st_color='$c_t5' and shape='$c_t6'";
		$res=mysql_query($qry);
		$row=mysql_fetch_array($res);
	
		if($row[0]>1)
		{
			$qry_up="update stock SET st_quant='".$c_t10."' + $row[9] where p_code='$c_t1' or st_name='$c_t2' or st_size='$c_t3' or st_wt='$c_t4' or st_color='$c_t5' or shape='$c_t6'";
			$res_up=mysql_query($qry_up);
			
			$c_qry="insert into stock_detail(st_id,st_date,st_shift,st_qty,m_code,p_code) values('".$row[0]."','".$c_t7."','".$c_t8."','".$c_t10."','".$c_t12."','".$c_t13."')";
	    	$c_res=mysql_query($c_qry);
			
			if($res_up)
			{
				header("location:view_stock.php");
			}		
		}
		else
		{
			$c_qry12="insert into stock(p_code,st_name,st_size,st_wt,st_color,shape,date,shift_type,st_quant,mc_no,per_code) values('".$c_t1."','".$c_t2."','".$c_t3."','".$c_t4."','".$c_t5."','".$c_t6."','".$c_t7."','".$c_t8."','".$c_t10."','".$c_t12."','".$c_t13."')";
			$c_res12=mysql_query($c_qry12);
			$cnt=mysql_insert_id();
		
			$c_qry21="insert into stock_detail(st_id,st_date,st_shift,st_qty,m_code,p_code) values('".$cnt."','".$c_t7."','".$c_t8."','".$c_t10."','".$c_t12."','".$c_t13."')";
    		$c_res21=mysql_query($c_qry21);
			if($c_qry12)
			{
				header("location:view_stock.php");
			}
		}
		}
		
		if(isset($_REQUEST['can']))
		{
			header("location:view_stock.php");
		} 
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
</script>
<script type="text/javascript" language="javascript">
</script>
</head>
<body>
    <?php
	$query="select * from products";
	$exe=mysql_query($query);
	$res=mysql_fetch_array($exe);
	?>
    <div class="hr"><center>Add New Stock</center></div>
    <div>
    <form name="form1" action="" method="post">
    <table class="q_clients11">
    <tr>
    <td class="l_form">Product Code:</td>
    <td>
    <select id="p_code" class="q_in2" name="p_code" onChange="getState(this.value)">
    <option value="0">Select</option>
    <?php
        $query1="select * from products group by p_code";
        $exe1=mysql_query($query1);
        while($res1=mysql_fetch_array($exe1))
        {
            echo "<option value='$res1[1]'>$res1[1]</option>";
        }
    ?>  
    </select>
	</td></tr>
</table>
<div id="pname" >
<table class="y_clients">
<tr><td class="l_form">Product Name:</td>
<td class="t">
    <select id="p_name" class="q_in2"  name="p_name"><option value="0">Select</option></select>
</td></tr>
<tr><td class="l_form">Size:</td>
<td class="t"><select  id="p_size" class="q_in2" name="p_size"><option value="0">Select</option></select></td></tr>

<tr><td class="l_form">Weight:</td>
<td class="t"><select id="p_wt" class="q_in2" name="p_wt"><option value="0">Select</option>

</select></td></tr>
                
<tr><td class="l_form">Color:</td>
<td class="t"><select  id="p_color" class="q_in2"  name="p_color"><option value="0">Select</option>

</select></td></tr>
<tr><td class="l_form">Shape:</td>
<td class="t"><select  id="shape" class="q_in2" type="text" name="p_shape"><option value="0">Select</option>
</select></td></tr>
<tr><td class="l_form">Date:</td>
 <td class="t">
 <input id="s_date" class="q_in2" type="text" name="s_date" />

</td></tr>

<tr><td class="l_form">Shift Type:</td>
<td class="t"><select  id="shift" class="q_in2" type="text" name="shift">
<option value="0">Select</option>
<option value="Day Shift">Day Shift</option>
<option value="Night Shift">Night Shift</option>
</select></td></tr>

<tr><td class="l_form">Machine No:</td>
<td class="t"><input id="m_no" class="q_in2" type="text" name="mc_no"  /></td></tr>                                             
<tr><td class="l_form">Person Code:</td>
<td class="t"><input id="per_code" class="q_in2" type="text" name="per_code"  /></td></tr>

<tr><td class="l_form">Quantity:</td>
<td class="t"><input id="quant" class="q_in2" type="text" name="p_quant" onKeyUp="getValue(2)"/></td></tr>
                
                                             
</table>
</div>

<br>
<div class="addclients_st">
<input name="s_add" value=" Add " type="submit" onClick="javascript:return validateMyForm();" />
<input name="can" value="Cancel" type="submit" />
</div>
</form>
</div>
</body>
</html>
