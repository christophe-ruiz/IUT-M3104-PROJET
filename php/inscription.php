<?php
    require_once '../core/autoloader.php';

    $action = $_POST['action'];
    $validPWD = true;

    if (isset($action) && !empty($action)) {
        $login = $_POST['login'];
        $mail = $_POST['mail'];
        $pwd = $_POST['pwd'];
        $vpwd = $_POST['vpwd'];
    }

    if ($pwd != $vpwd) {
        $validPWD = false;
        $_SESSION['validPWD'] = $validPWD;
    } else {

        $_SESSION['validPWD'] = $validPWD;
        Database::connect();
        $sql = "INSERT INTO USER VALUES ('$login', '$pwd', '$mail', NOW(), FALSE, 0)";
        Database::$pdo->prepare($sql)->execute();
    }
