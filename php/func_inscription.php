<?php
    require_once '../core/autoloader.php';
    $action = $_POST['action'];
    if (!isset($action) || empty($action)) die("Erreur Inscription");
    $validPWD = true;

    $login = $_POST['login'];
    $mail = $_POST['mail'];
    $pwd = $_POST['pwd'];
    $vpwd = $_POST['vpwd'];

    echo $login;

    if ($pwd != $vpwd) {
        $validPWD = false;
        $_SESSION['validPWD'] = $validPWD;
    } else {
        $pwd = password_hash($pwd, PASSWORD_DEFAULT);
        $_SESSION['validPWD'] = $validPWD;

        Database::connect();
        $sql = "INSERT INTO USER VALUES ('$login', '$pwd', '$mail', NOW(), FALSE, 0)";
        Database::$pdo->prepare($sql)->execute();

        $_SESSION['currentUser'] = new User($login);
    }
