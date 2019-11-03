<?php
    $id = $_POST['delId'];
    $deleter = unserialize($_SESSION['userUsername']);

    $myDb = new Database('config/dbCredentials.ini');
    if ($_POST['hardDelete']) {
        $sql = "DELETE FROM MESSAGE WHERE ID = $id";
        $stmt = $myDb->getPdo()->prepare($sql);
        $stmt->execute();

        $sql = "DELETE FROM LIKES WHERE ID = $id";
        $stmt = $myDb->getPdo()->prepare($sql);
        $stmt->execute();
    } else {
        $sql = "UPDATE MESSAGE SET CONTENU = 'Message supprimé par $deleter' WHERE ID = $id";
        $stmt = $myDb->getPdo()->prepare($sql);
        $stmt->execute();
    }
    unset($_POST['delete']);
    unset($_POST['hardDelete']);