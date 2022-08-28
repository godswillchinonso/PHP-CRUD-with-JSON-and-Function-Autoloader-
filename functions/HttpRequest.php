<?php 
	//Post HttpRequest Api Validation
	function PostHttpRequest($input,$db){
		$input= strip_tags(trim($_POST[$input]));
		$input=mysqli_real_escape_string($db, $input);
		return $input;
	}

	//Get HttpRequest Api Validation
	function GetHttpRequest($input,$db){
		$input= strip_tags(trim($_GET[$input]));
		$input=mysqli_real_escape_string($db, $input);
		return $input;
	}

?>