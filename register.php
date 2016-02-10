<?php include("skins/theme/dtml/it/register.html");  ?>

<?php



session_start();


if(isset($_SESSION['user'])!="")
{
	header("Location: home.php");
}
include_once 'dbconnect.php';

if(isset($_POST['btn-signup']))
{
	$name = mysql_real_escape_string($_POST['name']);
	$surname = mysql_real_escape_string($_POST['surname']);
	$uname = mysql_real_escape_string($_POST['uname']);
	$email = mysql_real_escape_string($_POST['email']);
	$upass = md5(mysql_real_escape_string($_POST['pass']));
	
	
	$name = trim($name);
	$surname = trim($surname);
	$uname = trim($uname);
	$email = trim($email);
	$upass = trim($upass);
	
	// email exist or not
	$query = "SELECT email FROM sys_user WHERE email='$email'";
	$result = mysql_query($query);
	
	$count = mysql_num_rows($result); // if email not found then register
	
	if($count == 0){
		
		if(mysql_query("INSERT INTO sys_user(username,email,password,name,surname) VALUES('$uname','$email','$upass','$name','$surname')") && mysql_query("INSERT INTO users_groups(username,id_groups) VALUES('$uname','2')"))
		{
			?>
			<script>alert('Registrato Correttamente ');</script>
			<?php
		}
		else
		{
			?>
			<script>alert('Errore nella registrazione...');</script>
			<?php
		}		
	}
	else{
			?>
			<script>alert('Email già registrata ...');</script>
			<?php
	}
	
}
?>
