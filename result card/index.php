<html>
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
<style>
	body {
		text-align: center;
		background-image: url(bg.jpg);
		background-size: cover;
		color: #fff;
	}
	h3{
		margin-top: 30px;
		margin-bottom: 30px;
		border: 1px solid;
		width: 80%;
		margin-left:100px 
	}
	.card{
		background: transparent;
	}
</style>
</head>
<body>
<h3>Please Insert Marks That Student Obtain In All These Subjects</h3>
	<div class="card">
		<form action="server.php" method="POST">
			<span><h2>English</h2> <input type="text" name="eng"></span>
			<span><h2>Math</h2> <input type="text" name="math"></span>
			<span><h2>Urdu</h2> <input type="text" name="urdu"></span>
			<span><h2>Physics</h2> <input type="text" name="phy"></span>
			<span><h2>Chemistry</h2> <input type="text" name="chem"></span> <br><br>
			<input type="submit" class="btn btn-primary">
		</form>
	</div>
</body>
</html>