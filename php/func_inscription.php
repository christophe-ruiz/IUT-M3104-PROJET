<?php
    require_once '../class/Database.php';
    require_once '../class/User.php';
    session_start();
    $action = $_POST['action'];
    if (!isset($action) || empty($action)) die("Erreur Inscription");

    $login = $_POST['login'];
    $mail = $_POST['mail'];
    $pwd = $_POST['pwd'];
    $vpwd = $_POST['vpwd'];

    $myDb = new Database();
    $sql = "SELECT USERNAME, MAIL FROM UTILISATEUR WHERE MAIL = '$mail' OR USERNAME = '$login'";
    $checkIfExist = $myDb->getPDO()->query($sql)->rowCount();
    $_SESSION['formError'] = array();

    if ($checkIfExist != 0) {
        $_SESSION['formError']['exists'] = TRUE;
    }
    else if ($pwd != $vpwd) {
        $_SESSION['formError']['pwd'] = TRUE;
    }
    else if (!preg_match('/^[a-z0-9._-]+@[a-z0-9._-]{2,}\.[a-z]{2,4}$/', $mail)){
        $_SESSION['formError']['mail'] = TRUE;
    }
    else {
        $pwd = password_hash($pwd, PASSWORD_DEFAULT);
        $sql = "INSERT INTO UTILISATEUR VALUES ('$login', '$mail', '$pwd', NOW(), FALSE, 0)";
        $myDb->getPDO()->prepare($sql)->execute();
        $_SESSION['signUp'] = TRUE;
    }
    $_GET['url'] = 'index';
    header('Location: ../../index.php');
