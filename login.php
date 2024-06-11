<?php

session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email = $_POST['email'];
    $password = $_POST['password'];

    $connect = mysqli_connect("localhost", "root", "", "advertising_system");

    // Zapytanie do bazy danych w celu sprawdzenia użytkownika
    $result = mysqli_query($connect, "SELECT * FROM advertising_users WHERE users_mail = '$email'");
    $user = $result->fetch_array();

    if ($user && password_verify($password, $user['users_password'])) {
        // Uwierzytelnienie udane, zapisanie użytkownika w sesji
        $_SESSION['user_id'] = $user['users_id'];
        $_SESSION['user_mail'] = $user['users_mail'];
        $_SESSION['user_name'] = $user['users_name'];

        // Przekierowanie do strony głównej lub panelu użytkownika
        header('Location: MainPage.php');
        exit;
    } else {
        // Błędne dane logowania
        echo 'Nieprawidłowy email lub hasło.';
    }
}
