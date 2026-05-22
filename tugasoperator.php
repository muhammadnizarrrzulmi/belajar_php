<?php

$bilangan = 100;
$pembagi = 3;

$hasilbagi = intdiv($bilangan, $pembagi);
$sisabagi = $bilangan % $pembagi;

echo $bilangan . " dibagi dengan " . $pembagi . "<br>";
echo "adalah " . $hasilbagi . "<br>";
echo "sisa " . $sisabagi;

?>