<?php
    require_once '../class/Database.php';
    require_once '../class/User.php';
    $action = $_POST['action'];
    if (!isset($action) || empty($action)) die("Erreur Inscription");
    $validPWD = true;

    $login = $_POST['login'];
    $mail = $_POST['mail'];
    $pwd = $_POST['pwd'];
    $vpwd = $_POST['vpwd'];

    $myDb = new Database();
    $sql = "SELECT USERNAME, MAIL FROM UTILISATEUR WHERE MAIL = '$mail' OR USERNAME = '$login'";
    $checkIfExist = $myDb->getPDO()->query($sql)->rowCount();

    if ($checkIfExist != 0) {
        $_SESSION['signUpError'] = TRUE;
    }
    if ($pwd != $vpwd) {
        $_SESSION['pwdError'] = TRUE;
    }
    if (!preg_match('/^[a-z0-9._-]+@[a-z0-9._-]{2,}\.[a-z]{2,4}$/', $mail)){
        $_SESSION['mailError'] = TRUE;
    }
    else {
        $pwd = password_hash($pwd, PASSWORD_DEFAULT);
        $_SESSION['validPWD'] = $validPWD;

        $sql = "INSERT INTO UTILISATEUR VALUES ('$login', '$mail', '$pwd', NOW(), FALSE, 0)";
        $myDb->getPDO()->prepare($sql)->execute();
    }
    $_GET['url'] = 'index';
    header('Location: ../../index.php');
