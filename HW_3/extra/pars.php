<?php
$xml = simplexml_load_file("persons.xml");
$first = [];
foreach ($xml as $person) {
$first[] = $person->name;
$first[] = $person->surname;
}
print_r ($first);
