<?php
//$name[индекс]

$Array[0] = '0';
$Array[1] = '1';
$Array[2] = '2';
// $Array = array('0','1','2'); - еще один вариант записи.

echo $Array[0];

$Fruit = array('fruit1' => 'apple'); // ассоциативный массив.

echo "<br>";
echo $Fruit['fruit1'];

$Again['people'] = array('name' => 'Vasya');

echo "<br>";
echo $Again['people']['name']; // двойной массив
// unset используется для удаления строчки из массива.
?>