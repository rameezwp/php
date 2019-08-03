<html>
<head>
	<meta charset="UTF-8">
	<title>Table Calc</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
	<style>
		h2 {
			background-color: #000000BF;
			color: #FFF;
		}
	</style>
</head>
<body>
	<div class="container">
		<h2 class="text-center">Provide Number</h2>
		<div class="card">
			<div class="card-body">
				<form action="display.php" method="GET">
					<input type="number" name="table_no" class="form-control">
					<br>
					<input type="submit" class="btn btn-primary">
				</form>
			</div>
		</div>
	</div>

</body>
</html>