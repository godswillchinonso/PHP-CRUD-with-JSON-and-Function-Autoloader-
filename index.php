<?php  
	require_once	"functions/Insert.php";
?>
<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="asset/css/bootstrap_four.min.css">
	<link rel="stylesheet" type="text/css" href="asset/css/bootstrap-five.min.css">
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>JSON Tutorial</title>
</head>
<body class="bg-light">
	<div class="container" style="margin-top: 50px;">
		<div class="row">
			<div class="col-md-6 offset-md-3">
				<div class="card card-body">
					<h3 class="fw-bold">PayStack Payment & JSON Fetching</h3>
					<?php $connection= Insert(); ?>
					<form method="post">
						<div class="form-group">
							<label class="text-muted">Firstname</label>
							<input type="text" name="firstname" class="form-control" placeholder="Enter Firstname">
						</div>
						<div class="form-group">
							<label class="text-muted">Lastname</label>
							<input type="text" name="lastname" class="form-control" placeholder="Enter Lastname">
						</div>
						<div class="form-group">
							<label class="text-muted">Email Address</label>
							<input type="email" name="email" class="form-control" placeholder="Enter Email Address" required>
						</div>
						<div class="form-group">
							<label class="text-muted">Amount</label>
							<input type="number" name="amount" class="form-control" placeholder="Enter Amount" required>
						</div>
						<div class="form-group">
							<label class="text-muted">Payment Currency</label>
							<select class="form-control" name="currency">
								<option value="NGN">Paying in Naira</option>	
								<option value="USSD">Paying in Dollar</option>	
							</select>
						</div>
						<div class="form-group">
							<input type="submit" name="payNow" class="btn btn-primary fw-bold float-end" value="Pay">
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>


	<script src="asset/js/jquery-3.3.1.min.js"></script>
	<script src="asset/js/bootstrap-five.bundle.min.js"></script>
	<script src="asset/js/bootstrap-four.min.js"></script>
	<script src="asset/js/popper.min.js"></script>
</body>
</html>