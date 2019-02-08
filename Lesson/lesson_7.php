<?php
$a = '2115;2 1';
$b = '345;4 1';
$c = '340;2 1';

function wtf($a) {
$str = stristr($a, ";", true); //отделение цифр до точки с запятой
$len = strlen($str); //подсчет кол-во цифр до точки с запятой
$sum = array_sum(str_split($str,1)); //сумма цифр до точки с запятой
$res1 = intval($sum / $len); //результат целочисленного деления 
$res2 = $sum % $len; //результат остатка от деления
$sub1 = substr($a, -3, 1); //находим первое число
$sub2 = substr($a, -1); //находим второе число
//проверка и сравнение результата ; вывод
$res1 == $sub1 && $res2 == $sub2 ? print 'TRUE'.PHP_EOL : print 'FALSE'.PHP_EOL;
}

wtf($a).wtf($b).wtf($c);