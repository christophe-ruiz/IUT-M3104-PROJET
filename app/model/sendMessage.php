<?php
    require_once '../../class/Database.php';
    require_once 'message.php';
    session_start();

    $action = $_POST['sendMsg'];
    if (!isset($action) || empty($action)) die("Erreur message");

    $myDb = new Database('../../config/dbCredentials.ini');

    $user = unserialize($_SESSION['userUsername']);
    $message = clean($_POST['message']);
    $nb_mots = compteMots($message);

    $id = $_SESSION['id'];

    $sql = "SELECT COUNT(*) AS NB FROM MESSAGE WHERE ID_PERE='$id'";
    $stmt = $myDb->getPDO()->query($sql);
    $nbFils = $stmt->fetchAll()[0]['NB'];

    if ($nbFils >= unserialize($_SESSION['maxMSG'])) {
        $_SESSION['limitReached'] = 1;
        header('Location: ' . $_SERVER['HTTP_REFERER']);
        die();
    }
    if ($nb_mots > 2) {
        $_SESSION['too_much_words'] = 1;
        header('Location: ' . $_SERVER['HTTP_REFERER']);
        die();
    }
    if ($nb_mots == 0) {
        $_SESSION['too_few_words'] = 1;
        header('Location: ' . $_SERVER['HTTP_REFERER']);
        die();
    }
    if ($id == 0 || isset($_GET['newTopic'])) $id = 'NULL';
    unset($_GET['newTopic']);

    $sql = "INSERT INTO MESSAGE (CONTENU, USERNAME, NB_MOTS, ID_PERE) VALUES ('$message', '$user', '$nb_mots', $id)";
    $myDb->getPdo()->prepare($sql)->execute();
    header("Location: ../../index.php?url=board&id=$id");