<?php

class connectPdo 
{
	private static $db; 
	
	private function __construct(){} 
	
	static function getObjPdo() {
		 
		if(!isset(self::$db))
		{
			self::$db = new PDO('mysql:dbname=db_billetterie;host=localhost', 'root', '');
			self::$db->query('SET NAMES utf8');
			self::$db->query('SET CHARACTER SET utf8');
		} 
		return self::$db;
    }
}

?>