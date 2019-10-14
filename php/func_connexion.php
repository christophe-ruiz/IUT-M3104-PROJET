<?php
    require_once '../class/Database.php';
    require_once '../class/User.php';
    session_start();
    $action = $_POST['action'];
    if (!isset($action) || empty($action)) die("Erreur Inscription");
    $validPWD = true;

    $login = $_POST['login'];
    $pwd = $_POST['pwd'];

    $myDb = new Database();
    $sql = "SELECT PASS FROM UTILISATEUR WHERE USERNAME = '$login'";
    $dbPwd = $myDb->getPDO()->query($sql)->fetch(PDO::FETCH_ASSOC)['PASS'];


    if (!password_verify($pwd, $dbPwd)) {
        echo 'MAUVAIS MDP';
        $invalidPWD = true;
        $_GET['url'] = 'index';
        header('Location: ../../index.php');
    } else {/*

        $myDb = new Database();

        $sql = "SELECT USERNAME, IS_ADMIN, DATE_INSCRIPTION FROM UTILISATEUR WHERE USERNAME = '$login'";
        $result = $myDb->getPDO()->query();
        foreach ($result as $row) {
            $_SESSION['currentUser'] = new User ($row['USERNAME'], $row['IS_ADMIN'], $row['DATE_INSCRIPTION']);
        }*/
        $_SESSION['currentUser'] = serialize(new User ($login, TRUE, 2020));
        echo 'PAS MAUVAIS MDP';

        $_GET['url'] = 'index';
        header('Location: ../../index.php');
    }