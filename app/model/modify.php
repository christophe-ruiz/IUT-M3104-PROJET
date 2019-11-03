<?php
    if (isset($_POST['sendModifiedMSG'])) {
        $id = $_SESSION['modId'];
        $contenu = $_POST['message'];

        $myDb = new Database('config/dbCredentials.ini');
        $sql = "UPDATE MESSAGE SET CONTENU = '$contenu', DATE_ENVOI = NOW(), MODIFIE = 1 WHERE ID = $id";
        $stmt = $myDb->getPdo()->prepare($sql);
        $stmt->execute();
        unset($_POST);
        unset($_SESSION['modify']);
        unset($_SESSION['modId']);
    }