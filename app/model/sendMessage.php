<?php
    require_once '../../class/Database.php';
    require_once 'message.php';
    session_start();

    $action = $_POST['sendMsg'];
    if (!isset($action) || empty($action)) die("Erreur message");

    $user = unserialize($_SESSION['userUsername']);
    $message = clean($_POST['message']);
    $nb_mots = compteMots($message);
    if ($nb_mots > 2) {
        $_SESSION['too_much_words'] = 1;
        header('Location: ' . $_SERVER['HTTP_REFERER']);
        die();
    }
    $id = $_SESSION['id'];
    if ($id == 0) $id = 'NULL';

    $myDb = new Database('../../config/dbCredentials.ini');

    $sql = "INSERT INTO MESSAGE (CONTENU, USERNAME, NB_MOTS, ID_PERE) VALUES ('$message', '$user', '$nb_mots', $id)";
    $myDb->getPdo()->prepare($sql)->execute();
    header("Location: ../../index.php?url=board&id=$id");