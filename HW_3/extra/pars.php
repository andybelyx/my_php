<?php
$xml = simplexml_load_file("persons.xml");
$first = [];
foreach ($xml as $person) {
$first[] = $person;
}
print_r ($first);
