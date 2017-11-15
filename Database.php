
<?php

class Database {

private static $dsn = 'mysql:host=sql1.njit.edu;dbname=rrr36';
private static $username = 'rrr36';
private static $password = 'RV1oUgoVS';

private static $db;

private function _construct() {}

public static function getDB (){

  if(!isset(self::$db)){
  
  try {
        self::$db = new PDO(self::$dsn,self::$username,self::$password);
	      echo "Connected successfully";  
    }catch(PDOException $e)
      {
    	  echo "Connection failed: " . $e->getMessage();
        exit();
      }
    }
    return self::$db;
    }
}
 
