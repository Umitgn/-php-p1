<?php
$today = date (" l j F Y");
echo "het is vandaag: $today.";

echo"<br>";

$year = date("z");
echo "vandaag is het de $year dag van het jaar.";

echo"<br>";

$day = date ("l");
$week = date("W");
echo"$day is de $week dag van de week.";

echo"<br>";

$month = date( "F");
$daysInMonth = date("t");
echo "deze maand $month heeft in totaal $daysInMonth dagen.";
?>