<?php  
	require_once	"Autoload.php";
	function View(){
		Connection();
		$db=$_SESSION['db'];
		$select=$db->query("SELECT * FROM save");
		$_SESSION['select']=$select;
	}


?>