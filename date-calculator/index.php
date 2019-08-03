<html>
<head>
	<title>Date Calculator</title>
	<link rel="stylesheet" href="lib/css/jquery.datetimepicker.min.css">
	<link rel="stylesheet" href="lib/css/styles.css">
	<meta charset="UTF-8">
</head>
<body>
	<h1 class="text-center">Date Calculator</h1>
	<div class="dcalc-wrapper">
		<form id="calc-form">
			<label for="operation">Operation to Perform</label>
			<select id="operation" name="operation" class="calc-field" required>
				<option value="">Choose one</option>
				<option value="my_age" data-dtext="Provide your date of birth">Find my age</option>
				<option value="day_of_born" data-dtext="Provide your date of birth">The day when I was born</option>
				<option value="date_diff" data-dtext="Provide the date">Date difference from now</option>
			</select>
	
			<div class="date-container">
				<label for="choose-date"></label>
				<input type="text" id="choose-date" name="the_date" class="calc-field date-picker" required>
			</div>


			<input type="submit" value="Submit">
		</form>
	</div>	
	<script src="lib/js/jquery-3.4.0.min.js"></script>
	<script src="lib/js/jquery.datetimepicker.full.min.js"></script>
	<script src="lib/js/sweetalert.min.js"></script>
	<script src="lib/js/custom.js"></script>
</body>
</html>