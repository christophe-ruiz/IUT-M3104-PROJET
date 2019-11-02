<?php
    $name = $_POST['delUser'];
    $myDb = new Database('config/dbCredentials.ini');
    $sql = "DELETE FROM UTILISATEUR WHERE USERNAME = '$name'";
    $myDb->getPdo()->prepare($sql)->execute();
    unset($_POST['userDeletion']);