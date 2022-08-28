<?php  
	require_once	"functions/View.php";
	View();
	$select=$_SESSION['select'];
	if (mysqli_num_rows($select)) {
		while ($row=$select->fetch_object()) {
			$array=[
				[
					"message"=>"$row->message",
					"data"=>[
						"id"=>$row->id,
						"status"=>$row->status,
						"reference"=>$row->reference
					]
				],
			];

			$arrayConversion=json_encode($array);
			$jsonConversion= json_decode($arrayConversion);
			echo "<pre>";
			print_r($json);
			echo "</pre>";
		}
	}else{
		echo "Not Found";
	}
?>