<html>
<head>
	<meta charset="UTF-8">
	<title>AJAX</title>
</head>
<body>
	<h1>AJAX</h1>
	<p>Asynchronous JavaScript And XML</p>
	
	<form action="server.php" method="POST">
		<input type="number" name="num_value" placeholder="Type Year of Birth">
		<input type="submit">
	</form>

	<h1 class="result"></h1>

	<h1 class="total-news"></h1>

	<div class="display-news"></div>
	
	<script
	  src="https://code.jquery.com/jquery-3.4.1.min.js"
	  integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
	  crossorigin="anonymous"></script>
	<script src="script.js"></script>
</body>
</html>