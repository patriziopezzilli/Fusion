<?php

include("skins/theme/dtml/it/prenotazione.html"); 
session_start();


include_once 'dbconnect.php';


if(!isset($_SESSION['username']))
{
	header("Location: prenotazione.php");
}
$res=mysql_query("SELECT * FROM sys_user WHERE username=".$_SESSION['username']);
$userRow=mysql_fetch_array($res);


if(isset($_POST['prenotazioni']))
{
	$uname = mysql_real_escape_string($_POST['uname']);
	$email = mysql_real_escape_string($_POST['email']);
	$upass = md5(mysql_real_escape_string($_POST['pass']));
	$timestamp = mysql_real_escape_string($_POST['timestamp']);
	
	$uname = trim($uname);
	$email = trim($email);
	$upass = trim($upass);
	$timestamp= trim($timestamp);
	
	// email exist or not
	$query = "SELECT email FROM sys_user WHERE email='$email', timestamp='$timestamp'";
	$result = mysql_query($query);
	
	$count = mysql_num_rows($result); // if email not found then register
	
	if($count == 0){
		
		if(mysql_query("INSERT INTO prenotazioni(surname,pasto,numero_posti,data) VALUES('$uname','$email','$upass', '$timestamp')"))
		{
			?>
			<script>alert('Prenotazione Effettuata ');</script>
			<?php
		}
		else
		{
			?>
			<script>alert('Problemi nella registrazione...');</script>
			<?php
		}		
	}
	else{
			?>
			<script>alert('Mi dispiace hai gia effettuato una prenotazione oggi ...');</script>
			<?php
	}
	
} ?>

