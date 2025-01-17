<?php
$time = date("Hour");

if($time > 18 && $time < 24){
    echo "Het is avond";
}
else if($time > 12 && $time < 18){
    echo "Het is middag";
}
else if($time > 24 && $time < 6){
    echo "Het is nacht";
}
else if($time > 6 && $time < 12){
    echo "Het is ochtend";
}
?>

<br>

<?php
$hour = date("G");

switch (true){
    case ($hour >= 6 && $hour <12):
    echo "Het is ochtend";
    break;
    case ($hour >= 12 && $hour <18):
    echo "Het is middag";
    break;
    case ($hour >= 18 && $hour <24):
    echo "Het is avond";
    break;
    default:
    echo "Het is nacht";
    break;
}
?>