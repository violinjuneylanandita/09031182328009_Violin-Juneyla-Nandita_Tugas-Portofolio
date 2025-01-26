<?php
session_start();

if ($_POST['username'] == 'viow' && $_POST['password'] == '12345') {
    $_SESSION['logged_in'] = true;
    header('Location: profile.php'); // Arahkan ke profile.php setelah login
    exit();
} else {
    echo "Username atau Password salah.";
}
?>
