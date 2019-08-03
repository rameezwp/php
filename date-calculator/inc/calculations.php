<?php

if (isset($_REQUEST['operation']) && isset($_REQUEST['the_date'])) {
	echo get_the_result($_REQUEST['operation'], $_REQUEST['the_date']);
}

function get_the_result($operation = 'my_age', $date = 'today'){
	switch ($operation) {
		case 'my_age':
			$age = date_diff(date_create($date), date_create('today'));
			if ($age->format('%R%a') < 0) {
				return $date.' doesn\'t seems to be your accurate date of birth.';
			} else {
				return 'You are '.$age->y.' years old';
			}
			break;

		case 'day_of_born':
			$dayOfWeek = date("l", strtotime($date));
			return 'You were born on '.$dayOfWeek;
			break;

		case 'date_diff':
			$date = new DateTime($date);
			$now = new DateTime();
			$diff =  $date->diff($now);
			if ($diff->format('%R%a') > 0) {
				return 'It\'s already passed '.$diff->format("%y Years %m Months %d days, %h hours and %i minutes"). ' ago';
			} else {
				return 'It will become after '.$diff->format("%y Years %m Months %d days, %h hours and %i minutes");
			}
			break;
		
		default:
			
			return 'Please choose a valid option!';
			break;
	}
}

?>