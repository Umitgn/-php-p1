<?php
session_start();

$username = $_POST['username'];
$email = $_POST['email'];
$password = $_POST['password'];
$gender = $_POST['gender'];
$country = $_POST['country'];

$errors = [];

if (empty($username) || strlen($username) < 3 || strlen($username) > 15) {
    $errors[] = "Gebruikersnaam moet tussen 3 en 15 tekens lang zijn.";
}

if (empty($email) || !filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $errors[] = "Voer een geldig e-mailadres in.";
}

if (empty($password) || strlen($password) < 6) {
    $errors[] = "Wachtwoord moet minimaal 6 tekens lang zijn.";
}

if (empty($gender)) {
    $errors[] = "Selecteer een geslacht.";
}

if (empty($country)) {
    $errors[] = "Kies een land.";
}

if (count($errors) > 0) {
    foreach ($errors as $error) {
        echo $error . "<br>";
    }
} else {
    $_SESSION['username'] = $username;
    header('Location: register.php');
    exit;
}
?>