<?php
    require_once 'class/Database.php';

    function messages() {
        $myDb = new Database('config/dbCredentials.ini');
        $sql = "SELECT * FROM MESSAGE WHERE ID_PERE IS NULL";
        $stmt = $myDb->getPDO()->prepare($sql);
        $stmt->execute();
        $result = $stmt->fetchAll();
        return $result;
    }

    function placeMessages() {
        $messages = messages();
        foreach ($messages as $message) { ?>
    <article class="topicRoll">
            <span> <?= $message['USERNAME'] ?> </span>
            <p> <?= $message['CONTENU'] ?> </p>
            <a href="index.php?url=board&id=<?= $message['ID'] ?>"> ➤ </a>
        </article> <?php
        }
    }

    function getMostLiked() {

    }