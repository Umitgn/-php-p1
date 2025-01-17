<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>vliegtuigen</title>
</head>
<body>

<form action="" method="POST">
<label for="name">naamvliegtuig</label>
<input type="text" id="name" name="name">

<label for="available">ja</label>
<input type="radio" id="available" name="available" value="ja">
<label for="available">nee</label>
<input type="radio" id="available" name="available" value=" nee">

<label for="stock">voorraad</label>
<input type="number" id="stock" name="stock">

<input type="submit" name="submit form" value="toevoegen">
</form>    

<?php
if(isset($_POST["submit_form"])){
    $name = $_POST["name"];
    $stock = $_POST["stock"];

}

?>

</body>
</html>