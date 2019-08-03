jQuery(document).ready(function($) {
	$('.date-picker').datetimepicker();

	$('.dcalc-wrapper').on('change', '#operation', function(event) {
		event.preventDefault();
		if ($(this).val() != '') {
			var label_text = $(this).find(':selected').data('dtext');
			$('.date-container').find('label').text(label_text);
			$('.date-container').slideDown();
		} else {
			$('.date-container').slideUp();
		}
	});

    $('#calc-form').submit(function(e) {
        e.preventDefault();
        swal('Please Wait', "Calculating...", 'info');

        var data = $(this).serialize();

        $.post('inc/calculations.php', data, function(resp) {
            swal(resp, '', '');
        });
    });
});