<?php
print "How is the winner?\n";
$users = [
	[
		"name" => "John",
		"surname" => "Smith",
		"age" => 20,
		"email" => "john@examle.com"
	],

	[
		"name" => "Jane",
		"surname" => "Clark",
		"age" => 19,
		"email" => "jane@examle.com"
	],

		[
		"name" => "Marry",
		"surname" => "Nurse",
		"age" => 22,
		"email" => "marry@examle.com"
	],

		[
		"name" => "Nicole",
		"surname" => "Word",
		"age" => 43,
		"email" => "nicole@examle.com"
	],
];

$rand = array_rand($users);

 if ($rand == 0) {
 	print "Congratulations John!\n";
 	}elseif ($rand == 1) {
 		print "Congratulations Jane!\n";
 	}elseif ($rand == 2) {
 		print "Congratulations Marry!\n";
}elseif ($rand == 3) {
 		print "Congratulations Nicole!\n";
 	}else;