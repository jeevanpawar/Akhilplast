<?php
error_reporting(0);
    include("session.php");
    include('converter.php');
	include("include/database.php");
	if(isset($_REQUEST['po_id']))
	{
	$c_up=$_REQUEST['po_id'];
	}
	
?>
<?php
	if(isset($_REQUEST['g_add']))
	{	
	$cnm=$_REQUEST['cmp1'];
	$addr=$_REQUEST['addr'];
	$ph=$_REQUEST['phno'];
	$ch_no=$_REQUEST['ch_no'];
	$date=$_REQUEST['date'];
	$dt=$_REQUEST['dt'];
	$tax=$_REQUEST['stax'];
	$vat=$_REQUEST['vat'];
	$total=$_REQUEST['total'];

 $result="update `po` set `c_name`='".$cnm."', `address`='".$addr."', `ph_no`='".$ph."',`ch_no`='".$ch_no."',`work_date`='".$date."',`ds_th`='".$dt."', `tax`='".$tax."', `vat`='".$vat."', `total_purches`='".$total."' where po_id='$c_up'";
	$ans=mysql_query($result);
	
	$a=$_POST['sr'];
	$b = count($a);
	$delete="delete from sub_service where po_id='$c_up'";
	mysql_query($delete);
	
	for($i=0; $i<$b; $i++)
	{
		//$id=$_REQUEST['i_id'];
		
		$q_d=$_POST['sr_d'][$i];
		$q_q=$_POST['qnt'][$i];
		$q_r=$_POST['r'][$i];
		$q_a=$_POST['value'][$i];
	//	$total=10;
			
	 $quo="INSERT INTO `sub_service`(`po_id`,`serv_desc`, `qnt`, `rate`, `val`) VALUES('".$id."','".$q_d."','".$q_q."','".$q_r."','".$q_a."')";
	 $quo_res=mysql_query($quo);	
	
	}
	
	//exit();
	if($ans)
	{
	header("location:viewpo.php");
	}
	else
	{
		header("location:updatepo.php?po_id=".$c_up);
	}	
	}
	
	
	if(isset($_REQUEST['can']))
	{
		header("location:viewpo.php");
	}
?>

<html>
<head>
<title>Akhil Plast</title>
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
		 var tax =document.getElementById("stax").value;
		 var vat =document.getElementById("vat").value;
		 var add=total*1;
		 add+=(tax*1);
		  add+=(vat*1);		 
        document.getElementById("total").value = add;
		var words = toWords(add);
		document.getElementById("word").innerHTML=words;
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
<div id="container">
<div id="sub-header">	
    <?php
	include("header.php");
	$query="select * from po where po_id='$c_up'";
	$nm=mysql_query($query);
	$cmpnm=mysql_fetch_array($nm);
	
	?><br />
        <div class="quotation"><center>Purches Order Details</center></div>
        <div><br>
        <form action="" method="post" name="po" >
        <INPUT class="formbutton" Type="button" VALUE="Back" onClick="history.go(-1);return true;">
        <table class='q_clients_2'>       
            <tr>
           <td class="l_form">Buyer Name:-</td>
         <td><input id="cmp1" class="q_in" type="text" name="cmp1" value="<?php echo $cmpnm[2]; ?>" tabindex=""/></td>
            </tr>
            <tr>
              <td class="l_form">Address:-</td>
         <td>
         <textarea id="addr" class="q_add"  name="addr" tabindex=""> <?php echo $cmpnm[3]; ?></textarea></td>
            </tr>
            <tr>
              <td class="l_form">Ph No:-</td>
         <td>
         <input type='text' id="phno" class="q_in"  name="phno"  value="<?php echo $cmpnm[4]; ?>" tabindex=""/></td>
            </tr>                       
            </table>
        <br><br>
            
            <table   class=" q_clients4">      
            
            
             <tr>
          <td class="l_form">Challan No:</td>
          <td><input id="ch_no" class="q_in" type="text" name="ch_no" value="<?php echo $cmpnm[1]; ?>" tabindex=""/></td>
            <tr>
          <td class="l_form">Date:</td>
           <td><input id="inputField" name="date" size='12'  title='D-MM-YYYY' value="<?php echo date('Y-m-d') ?>"  /> </td> 
          
           <tr>
          <td class="l_form">Despatch Through:</td>
         
            <td><input id="dt" class="q_in" type="text" name="dt" value="<?php echo $cmpnm[6]; ?>" tabindex=""/></td>
         
            </table>
           <br><br>
            
            
             <table class="midtext1">
             
            <tr><td colspan="3">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <input type="button" value="Add Row" onClick="addRow('dataTable');add();" >&nbsp;
			<input type="button" value="Delete Row" onClick="deleteRow('dataTable')" >
				</td>
            </tr>
            </table>
            
				 <table class="des" >
                <tr>
               <td width="20"></td>
                      
                <td class="heading" width="200">Description</td>
                <td class="heading" width="100">Ouantity</td>
                <td class="heading" width="100">Total Quantity</td>
                </tr>
                </table>
               <!-- <span style="color:#00f;font-size:20px;font-weight:bold;cursor:pointer;" onClick="add_phone_field()">[+]</span>-->
                      <table class="des" id="dataTable">
               <tr style="display:none;">
                <td style="white-space:nowrap;" width="20"><input type="checkbox" name="chk[]"/></td>
                 <td width="50">
              		<input class="des_in" type='text' name="cnt[]" id="cnt[]" readonly />
                </td>
               
                <td width="200">
                <input class="des_in" type="text" name="sr_d[]" id="0" value=""> <br>
                </td>
               
                <td width="100">
                 <input class="des_q" type="text" name="qnt[]" id="" value="" ><br>
                </td>
                
                              
                </tr> 
                
				<?php
            $query="select * from sub_service where po_id='$c_up'";
			$exe=mysql_query($query);
			while($po=mysql_fetch_array($exe))
			 {
			?>
                <tr>
                <td style="white-space:nowrap;" width="20"><input type="checkbox" name="chk[]"/></td>
                 
                <td width="200">
                <input class="des_in" type="text" name="sr_d[]" id="0" value="<?php echo $po[1]; ?>"> <br>
                </td>
               
                <td width="100">
                 <input class="des_q" type="text" name="qnt[]" id="" value="<?php echo $po[2]; ?>" ><br>
                </td>
                
                <td width="100">
                 <input class="des_ser" type="text" name="value[]" id="value" value="<?php echo $po[4]; ?>"  readonly><br>
                </td>                
                </tr>                 
                <?php 
			 }
				?>
                </table>               
                
                
                 <table class="des" border="1" style="border:none;">
                <tr>
                <td style="border:hidden;" width="20">&nbsp;&nbsp;</td>
                                
                <td colspan="6">
                 Enter Service Tax (Including Ecess): RS.
                </td>
                <td width="100"><input type='text' name='stax' value="<?php echo"$cmpnm[7]";?>"  id="stax" onKeyUp="getValues()" /></td>
                </tr>
                <tr>
                <td style="border:hidden;" width="20">&nbsp;&nbsp;</td>
                              
                <td colspan="6">
                 Enter VAT: RS.
                </td>
                <td width="100"><input type='text' name='vat' value="<?php echo"$cmpnm[8]";?>"  id="vat"  onkeyup="getValues()" /></td>
                </tr>
                <tr>
                <td style="border:hidden;" width="20">&nbsp;&nbsp;</td>
                <td colspan="6">
                 Total Purchase Order Value:-
                 <div align="right"> Rs:-</div>
                </td>
                <td width="100"> 
                <input type='text' name='total' id="total" value="<?php echo"$cmpnm[9]";?>"  />
                </td>               
                </tr>
                <tr>
                <td style="border:hidden;" width="15">&nbsp;&nbsp;</td>
                <td colspan="7">
				Order Value (in words):-
				<h4><?php echo convert_number_to_words($cmpnm[9]); ?></h4>
                <h4><div id='word'></div></h4>
                </td>                              
                </tr>
                </table>
              
            

                                  
             

                         
                
        <div class="addclients_b">
         <input name="g_add" class="formbutton" value=" Submit " type="submit" />
         <input name="can" class="formbutton" value="Cancel" type="submit" />
        </div>
        
        </form>
    </div>
    </div>
        
    
    	<div class="clear"></div>
    </div>
</div>
 <div id="footer">
     <div class="clear"></div> 
    </div>
    </div>
</body>
</html>
