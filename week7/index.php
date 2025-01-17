<?php
session_start();
// Start de sessie
$_SESSION['visits']++;
$visits = $_SESSION["visits"];
$allvisits = $_COOKIE["all_visits"] + 1;

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>week 7</title>
</head>
<body>

<?php 
echo "Deze pagina heb je al : $visits keer bekeken voordat je de internet browser hebt afgesloten";

?>

</body>
</html>

