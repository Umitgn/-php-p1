<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>contact</title>
</head>
<body>
    <h1>contact</h1>
<?php include 'navbar.php';
?>

<form>
<label for="name">Naam</label>
<input type="text" name="name" id="name">
 
    <label for="email">E-mail</label>
<input type="email" name="email" id="email">
 
    <label for="message">Bericht</label>
<textarea name="bericht" id="message"></textarea>
 
    <input type="submit" value="Verstuur">
</form>

<?php
include 'footer.php';
?>
</body>
</html>