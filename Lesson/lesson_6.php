<?php
print "Найти в каком подъезде и на каком этаже живет Маша!".PHP_EOL;
$handle = fopen('php://stdin','r');
print "Введите количество этажей в доме:";
$hous = intval(fgets($handle));
print "Введите количество квартир на этаже:";
$floor = intval(fgets($handle));
print "Введите номер квартиры:";
$room = intval(fgets($handle));

$sum_room = $hous * $floor;

function porch($n,$k) {
$res = $n / $k;
if ($n % $k == 0){return $res;
}elseif ($n % $k != 0) {return (int)$res + 1;}
}

$x = $room - 1;
$c = $x % $sum_room;
$b = $c / $floor;
$fl = (int)$b + 1;
print "Подъезд ".porch($room,$sum_room).", Этаж $fl, Квартира $room";
