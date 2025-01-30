<?php
session_start();

if (isset($_SESSION['username'])) {
    echo "Welkom, " . htmlspecialchars($_SESSION['username']) . "!";
} else {
    echo "U moet zich registreren.";
}
?>