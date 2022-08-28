<?php 
	session_start(); 
	function Connection(){
		define('DBHOST', 'localhost');
		define('DBUSER', 'root');
		define('DBPASSWORD', '');
		define('DBNAME', 'json');
		$db=new mysqli(DBHOST, DBUSER, DBPASSWORD, DBNAME);
		if ($db->connect_error) {
			die("Opps!!! Database name".DBNAME. "not found");
		}
		$_SESSION['db']=$db;
		return $db;
	}



?>