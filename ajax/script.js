jQuery(document).ready(function($) {

	// Calculating the age using AJAX
	$('form').submit(function(e) {
		e.preventDefault();

		var data = {
			num_value: $('[name=num_value]').val() 
		}

		$.post('server.php', data, function(resp) {
			$('.result').text(resp);
		});

	});

	// Getting News
	$.get('https://newsapi.org/v2/top-headlines?sources=bbc-news&apiKey=3d35296c537543be917d8bf3c63583b2', function(data) {
		$('.total-news').text('Total '+data.totalResults+' News Found!')
		$('.display-news').append('<img src="'+data.articles[0].urlToImage+'">');
		console.log(data);
	});
});