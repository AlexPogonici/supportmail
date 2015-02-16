<?php

include '../controller/database.php';

Database::connection();

function NewUser()
{
	$username = $_POST['username'];
	$password =  $_POST['password'];
	$query = "INSERT INTO users (username,password) VALUES ('$username','$password')";
	$data = mysql_query ($query)or die(mysql_error());
	if($data)
	{
	echo "Registration complete...";
	}
}

function SignUp()
{
if(!empty($_POST['username']))  
{
	$query = mysql_query("SELECT * FROM users WHERE username = '$_POST[username]' AND password = '$_POST[password]'") or die(mysql_error());

	if(!$row = mysql_fetch_array($query) or die(mysql_error()))
	{
		NewUser();
	}
	else
	{
		echo "Ai cont...";
	}
}
}
if(isset($_POST['submit']))
{
	SignUp();
}
?>


