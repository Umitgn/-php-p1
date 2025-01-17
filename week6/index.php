<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chantal</title>
</head>
<body>
    <h2>Contactformulier</h2>
    <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post">
        <label for="naam">Naam:</label>
        <input type="text" id="naam" name="naam" required>
        <br><br>

        <label for="email">E-mailadres:</label>
        <input type="email" id="email" name="email" required>
        <br><br>

        <label for="bericht">Bericht:</label>
        <textarea id="bericht" name="bericht" required></textarea>
        <br><br>

        <button type="submit">Verzenden</button>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {

        if (empty($_POST['naam'])){
            echo "Het naamveld is verplicht!<br>";
        } elseif (strlen($_POST['naam']) < 3) {
            echo "De naam moet minimaal 3 tekens lang zijn.<br>";
        } elseif (strlen($_POST['naam']) > 20) {
            echo "De naam mag maximaal 20 tekens lang zijn.<br>";
        }

        if (empty($_POST['email'])){
            echo "Het e-mailadres is verplicht!<br>";
        } else {
            $name = htmlspecialchars($_POST['naam']);
            $email = htmlspecialchars($_POST['email']);
            echo "Je naam is: " . $name . "<br>";
            echo "Je e-mailadres is: " . $email . "<br>";
        }
    }
    ?>
</body>
</html>