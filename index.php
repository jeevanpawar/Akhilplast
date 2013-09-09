<?php
ob_start();
error_reporting(0);
session_start();
	 include("include/database.php");
	
	if(isset($_REQUEST['login']))
	{
		if($_POST['username']=='')
		{
			$msg='unm';
			header("location:index.php?res=$msg");			

		}
		else if($_POST['password']=='')
		{
			$msg='pwd';
			header("location:index.php?res=$msg");			

		}
		else if($_POST['username']!='' && $_POST['password']!='' )
		{ 
		
		 $sql="select * from login where u_name = '". $_POST['username'] ."' and u_pass = '".$_POST['password']."'";		
		$result = mysql_query($sql);
		
		if($row = mysql_fetch_array($result))
		  	{
			  // $a=$row['u_email'];
			  $_SESSION['uname']=$_POST['username'];
		      $_SESSION['password']=$_POST['password'];
			  $tim=date('Y-m-d H:i:s');
			 
			 $query="insert into log_history(`c_name`,`login_time`)values('".$_POST['username']."','".$tim."')";
			 mysql_query($query);
			 header("Location:home.php");
		  	}
		 else
			{
			$msg='unk';
			header("location:index.php?res=$msg");			

		
			}
	 
	 }
	}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Akhil Plast</title>

<link href="login_box.css" rel="stylesheet" type="text/css" />
</head>

<body class="fade-in">

<div style="padding: 130px 0 0 0;" align="center">
<div>
<?php
	 if($_REQUEST['res']=='unm')
		{ ?>
		<font color="#CC0000"><h2>Please Enter User Name</h2> </font>
		<?php
        }
	else if($_REQUEST['res']=='pwd')	
		{ ?>
		<font color="#CC0000"><h2>Please Enter Password</h2> </font>
		<?php
        }
	else if($_REQUEST['res']=='unk')	
		{ ?>
		<font color="#CC0000"><h2>Please Enter Correct username and password</h2> </font>
		<?php
        }

?>

<form action="" method="post">
<div id="login-box">

<H2 align="center"><span class="main">AKHIL PLAST</span></H2>

<div class="all">
<br />
<table class="user">
<tr>
<td>
<label>User Name:</label><br><input name="username" class="form-login" title="Username" placeholder="Enter User Name" size="30" maxlength="2048" /></div>
</td>
</tr>
<tr>
<td>
<label>Password:</label><br><input name="password" type="password" class="form-login" title="Password" placeholder="Enter Password" size="30" maxlength="2048" /></div>
</td>
</tr>
</table>
<br />
<div><input  class="log" type="submit" value="Login" name="login" /></div>
</form>
</div>

</div>

</div>
<div class="reference">Copyright @ 2013 Akhil Plast Powered By:<a href="http://www.wavetechline.com" target="_tab"> Wave TechLine India Pvt. Ltd.</a></div>

</div>
</body>
</html>
