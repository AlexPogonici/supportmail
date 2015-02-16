<?php

include '../controller/database.php';

Database::connection();

class Email{

	public static function Send($email,$subiect,$desc,$prioritate)
	{
      $sql = "INSERT INTO email VALUES ('$email','$subiect','$desc','$prioritate')";
		$result = mysql_query($sql);

	}

    
}
?>