<?php
    $name = $_POST['user'];
    $myDb = new Database('config/dbCredentials.ini');
    $sql =  "SELECT IS_ADMIN FROM UTILISATEUR WHERE USERNAME = '$name'";

    $stmt = $myDb->getPdo()->prepare($sql);
    $stmt->execute();
    $result = $stmt->fetchAll()[0]['IS_ADMIN'];
    $_SESSION['check'] = $result;

    if ($result) $sql = "UPDATE UTILISATEUR SET IS_ADMIN = 0";
    else $sql = "UPDATE UTILISATEUR SET IS_ADMIN = 1";

    $stmt = $myDb->getPdo()->prepare($sql);
    $stmt->execute();
    unset($_POST['changeStatus']);
    unset($_POST['user']);
