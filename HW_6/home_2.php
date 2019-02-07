<?php
$prom = 50;
$person = [
	'name' => 'Vasil',
	'salary' => 500,
	'currency' => 'USD',
	'salary_uah' => function($subject) {
		global $prom;
		$subject['salary'] += $prom;
		if ($subject['currency'] == 'USD') {
			return $subject['salary'] * 28;
		} else if ($subject['currency'] == 'EUR') {
			return $subject['salary'] * 30;
		}
	}
];

print $person['salary_uah']($person);