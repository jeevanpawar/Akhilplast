<?php
    include("session.php");
	error_reporting(0);
    include('converter.php');
	$c_up=$_REQUEST['c_id2'];
	include("include/database.php");
	$q1="select * from stock group by p_code";
	$res=mysql_query($q1);
	
	$query="select * from clients where c_id='$c_up'";
	$nm=mysql_query($query);	
	$cmpnm=mysql_fetch_array($nm);
	
	
?>

<html>
<head>
<link rel="stylesheet" href="styles2.css" type="text/css" />
<link rel="stylesheet" href="styles.css" type="text/css" />
<link rel="stylesheet" type="text/css" media="all" href="calender/jsDatePick_ltr.min.css" />
<script type="text/javascript" src="calender/jsDatePick.min.1.3.js"></script>
<script type="text/javascript">
	window.onload = function(){
		new JsDatePick({
			useMode:2,
			target:"inputField",
			dateFormat:"%Y-%m-%d"
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

<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript" src="js/slider.js"></script>
<script type="text/javascript" src="js/superfish.js"></script>
<script type="text/javascript" src="js/custom.js"></script>
<script type="text/javascript" src="toword.js"></script>
<script>
var total = 0;
function getValues() {
var qty = 0;
var rate = 0;
var obj = document.getElementsByTagName("input");
      for(var i=0; i<obj.length; i++){
         if(obj[i].name == "qnt[]")
		 {
			 var qty = obj[i].value;
			
		}
         if(obj[i].name == "r[]")
		 {
			 var rate = obj[i].value;
		 }
         if(obj[i].name == "value[]")
		 {
          		if(qty > 0 && rate > 0)
				{
					obj[i].value = qty*rate;
					total+=(obj[i].value*1);
				}
				else
				{
					obj[i].value = 0;
				    total+=(obj[i].value*1);
				}
          }
       
		 }
		
		 var add=total*1;
		 	 
        document.getElementById("total").value = add;
	
        total=0;
}

</script>
<script>
var cnt=1;
function add()
{
	var tot=cnt++;
	var table = document.getElementById(tableID);
	var rowCount = table.rows.length;
	var row = table.insertRow(rowCount);
	var colCount = table.rows[0].cells.length;
	for(var i=0; i<colCount; i++) 
			{
		document.getElementById("cnt[]").value=tot;	
			}
}
function addRow(tableID) {
	
            var table = document.getElementById(tableID);
            var rowCount = table.rows.length;
            var row = table.insertRow(rowCount);
            var colCount = table.rows[0].cells.length;
            for(var i=0; i<colCount; i++) 
			{
                var newcell = row.insertCell(i);
                newcell.innerHTML = table.rows[0].cells[i].innerHTML;
                //alert(newcell.childNodes);
                
				switch(newcell.childNodes[0].type)
				 {
                    case "text":
                            newcell.childNodes[0].value = "";
                            break;
                    case "checkbox":
                            newcell.childNodes[0].checked = false;
                            break;                    
                }
				
            }
		
        }
		
function deleteRow(tableID)
{
            try
            {
                var table = document.getElementById(tableID);
                var rowCount = table.rows.length;
                    for(var i=0; i<rowCount; i++)
                        {
                        var row = table.rows[i];
                        var chkbox = row.cells[0].childNodes[0];
                        if (null != chkbox && true == chkbox.checked)
                            {
                            if (rowCount <= 1)
                                {
                                alert("Cannot delete all the rows.");
                                break;
                                }
                            table.deleteRow(i);
                            rowCount--;
                            i--;
                            }
                        }
                    } catch(e)
                        {
                        alert(e);
                        }
   getValues();
}
   
 </script>
</head>
<body>
<div class="hr"><center>Delivery Challan Details</center></div>
<div>
<form action="adddelivery.php?id=<?php echo $c_up; ?>" method="post" name="po" >
<table class='qc'>       
<tr>
<td class="l_form">Buyer Name:-</td>
<td><input id="cmp1" class="q_in" type="text" name="cmp1" value="<?php echo $cmpnm[2]; ?>" tabindex=""/></td>
</tr>
<tr>
<td class="l_form">Address:-</td>
<td>
<textarea id="addr" class="q_add"  name="addr" tabindex=""> <?php echo $cmpnm[4]; ?></textarea></td>
</tr>
<tr>
<td class="l_form">Ph No:-</td>
<td>
<input type='text' id="phno" class="q_in"  name="phno"  value="<?php echo $cmpnm[9]; ?>" tabindex=""/></td>
</tr>                       
</table>
<br>

<table class="qc4">      
<tr>
<td class="l_form">Company Name:</td>
<td><input id="cmp_name" class="q_in" type="text" name="cmp_name" value="<?php echo $cmpnm[3]; ?>" tabindex=""/></td>
<tr>
<td class="l_form">Date:</td>
<td><input id="inputField" name="date" class="q_in" size='12' value="<?php echo date('d-m-Y') ?>"  /> </td> 

<tr>
<td class="l_form">Despatch Through:</td>

<td><input id="dt" class="q_in" type="text" name="dt" value="" /></td>

</table>
<br>

<table class="des" >
<tr class="emp_header">
<td width="2%">S.</td>
<td width="53%">Description of Goods</td>
<td width="15%">Qty</td>
<td width="15%">Box</td>
<td width="15%">Total Qty</td>
</tr>

</table>
<table class="des" id="dataTable">
<tr>
<td width="2%"><input class="ch" type="checkbox" name="chk[]"/></td>

<td width="53%">
<input class="des_q" type="text" name="pr[]" id="" value="" ><br>
</td>
</td>
<td width="15%">
<input class="des_q" type="text" name="qnt[]" id="" value="" ><br>
</td>
<td width="15%">
<input class="des_q" type="text" name="r[]" id="r" value=""  onkeyup="getValues()"><br>
</td>
<td width="15%">
<input class="des_q" type="text" name="value[]" id="value" value=""  readonly><br>
</td>
</tr>
</table>

<div class="adddel">
<input type="button" value="Add" onClick="addRow('dataTable');add();" >&nbsp;
<input type="button" value="Del&nbsp;" onClick="deleteRow('dataTable')" >
</div>
<table class="des" >
<tr>
<td>&nbsp;&nbsp;</td>
<td colspan="5" align="right">Total:-</td>
<td width="100"> 
<input type='text' class="q_in" name='total' id="total" value=""/>
</td>               
</tr>
</table>               

<div class="add_d">
<input name="g_add" value=" Submit " type="submit" />
<input name="g_cal" value=" Cancel " type="submit" />

</div>
</form>



</div>
</div>

</div>
</body>
</html>
