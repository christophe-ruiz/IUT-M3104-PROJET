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
    $sql = "SELECT PASS, IS_ADMIN, DATE_INSCRIPTION FROM UTILISATEUR WHERE USERNAME LIKE '$login'";
    $user = $myDb->getPDO()->query($sql)->fetchAll()[0];


    if (!password_verify($pwd, $user['PASS'])) {
        $_SESSION['invalidPWD'] = true;
        $_GET['url'] = 'index';
        header('Location: ../../index.php');
    } else {/*

        $myDb = new Database();

        $sql = "SELECT USERNAME, IS_ADMIN, DATE_INSCRIPTION FROM UTILISATEUR WHERE USERNAME = '$login'";
        $result = $myDb->getPDO()->query();
        foreach ($result as $row) {
            $_SESSION['currentUser'] = new User ($row['USERNAME'], $row['IS_ADMIN'], $row['DATE_INSCRIPTION']);
        }*/
        $_SESSION['currentUser'] = serialize(new User ($login, $user['IS_ADMIN'], $user['DATE_INSCRIPTION']));
        $_SESSION['userUsername'] = serialize($login);
        $_SESSION['userAdminStatus'] = serialize($user['IS_ADMIN']);
        $_SESSION['userDate'] = serialize($user['DATE_INSCRIPTION']);

        $_GET['url'] = 'index';
        header('Location: ../../index.php');
    }