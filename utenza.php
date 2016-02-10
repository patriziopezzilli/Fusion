<?php


session_start();
include_once 'dbconnect.php';


if(isset($_SESSION['username'])!="")
{
	header("Location: prenotazione.php");
}

if(isset($_POST['btn-login']))
{
	$email = mysql_real_escape_string($_POST['email']);
	$upass = mysql_real_escape_string($_POST['pass']);
	
	$email = trim($email);
	$upass = trim($upass);
	
	$res=mysql_query("SELECT username, password FROM sys_user WHERE email='$email'");
	$row=mysql_fetch_array($res);
	
	$count = mysql_num_rows($res); // if uname/pass correct it returns must be 1 row
	
	if($count == 1 && $row['password']==md5($upass))
	{
		$_SESSION['username'] = $row['username'];
		header("Location: prenotazione.php");
	}
	else
	{
		?>
        <script>alert('Username / Password errati !');</script>
        <?php
	}
	
}



?>

<?php include("skins/theme/dtml/it/utenza.html"); ?>


