<?php


class Database {
    
    public static $host = 'localhost' ;
	public static $db = 'supp' ; 
	public static $user = 'root';
	public static $pass = '';


public static function connection()
{

	try 
        {
          mysql_connect(self::$host,self::$user,self::$pass);
		  mysql_select_db(self::$db);
        }
        catch(Exception $e) 
        {
          die($e->getMessage());  
        }
}
}
?>