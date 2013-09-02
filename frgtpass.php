<?php 
include("include/database.php");

  $in=$_REQUEST['id'];
  $u_query="select * from login where u_id='$in'";
  $res=mysql_query($u_query) or die(mysql_error());
  $u_row=mysql_fetch_array($res);

if(isset($_REQUEST['login']))
{	

	
	    $mail=$_POST['email'];
	   // $date=$_POST['date'];
		$quo="update login SET u_email='".$mail."' where u_id=".$in;
		$quo_res=mysql_query($quo);
		if($quo_res)
		{
			header("location:home.php");
		}
		else
		{
			echo "error";
		}
}
?>		

<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Akhil Plast</title>
<link href="login_box.css" rel="stylesheet" type="text/css" />
</head>
<body>
<form action="" method="post">
<div id="login-box">


<div id="login-box-name" style="margin-top:20px;">User:</div><div id="login-box-field" style="margin-top:20px;"><input name="username" class="form-login" title="Username"  size="30" maxlength="2048" value="<?Php echo $u_row[1]?>"/></div>

<div id="login-box-name">Password:</div><div id="login-box-field"><input name="password" type="password" class="form-login" title="Password" size="30" maxlength="2048" value="<?Php echo $u_row[2]?>"/>
</div>

<div id="login-box-name">Email:</div><div id="login-box-field"><input name="email" type="text" class="form-login" title="Email" placeholder="Enter email" size="30" maxlength="2048"/>
</div>

<div id="login-box-name">Date:</div><div id="login-box-field"><input name="date" type="text" class="form-login" title="date" size="30" maxlength="2048" value="<?php  echo date("d-m-Y"); ?>"/>
</div>




<br />

<br />
<br />
    <div><input  class="log" type="submit" value="Login" name="login" /></div>

</form>

</body>
</html>