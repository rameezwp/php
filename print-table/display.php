<?php
	$number = $_REQUEST['table_no'];
?>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
<div class="container">
	<table class="table table-hover">
		<?php
			for ($i=1; $i < 11; $i++) {
			$cal = $i * $number;
		?>
			<tr>
				<td><?php echo $number; ?></td>
				<td>x</td>
				<td><?php echo $i; ?></td>
				<td>=</td>
				<td><?php echo $cal; ?></td>
			</tr>
		<?php } ?>
	</table>	
</div>