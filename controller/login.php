<?php

include '../controller/database.php';

Database::connection();

class Login{

	public static function Check($user,$pass)
	{
      $sql = "select * from users where username='".$user."'AND password = '".$pass."' LIMIT 1";
		$result = mysql_query($sql);

		if (mysql_num_rows($result)==1) {
		    
		     
		      

		    session_start();

		    $_SESSION['login_user']= $user; 
               
		   header('Location: ../index.php');

		  } else{
             
		  header('../view/login.php');
		   

		}

	}
}




?>


