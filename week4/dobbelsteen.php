<?php
echo $score = rand(1, 6);
if ($score < 4){
    echo "<br> Je hebt verloren";
}
else {
    echo "<br> Je hebt gewonnen!";
}
?>