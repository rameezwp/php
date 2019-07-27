<html>
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
	<style>
		.card {
			padding: 10px;
		}
	</style>
</head>
<body>
	<div class="container">
		<h2 class="text-center">Login Here</h2>
		<div class="card">
			<form action="server.php" method="POST">
				<div class="form-group">
					<label for="emailaddress">Email address</label>
					<input name="email_address" type="email" class="form-control" id="emailaddress" placeholder="Enter email">
					<small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
				</div>
				<div class="form-group">
					<label for="passfield">Password</label>
					<input name="user_password" type="password" class="form-control" id="passfield" placeholder="Password">
				</div>
				<button type="submit" class="btn btn-primary">Submit</button>
			</form>
		</div>
	</div>	
</body>
</html>