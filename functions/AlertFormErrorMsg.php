<?php  
	function AlertFormErrorMsg($msg,$color){
		echo 
		"
			<div class='alert alert-$color alert-dismissible fade show' role='alert'>
			  <strong><i class='fas fa-bell'></i> Alert!</strong> $msg.
			  <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
			    <span aria-hidden='true'>&times;</span>
			  </button>
			</div>
		";
	}


?>