<?php
    require_once 'class/Database.php';

    function messages() {
        $myDb = new Database('config/dbCredentials.ini');
        $sql = "SELECT * FROM MESSAGE";
        $stmt = $myDb->getPDO()->prepare($sql);
        $stmt->execute();
        $result = $stmt->fetchAll();
        return $result;
    }
    $_SESSION['discussionId'] = serialize(1);

    function placeMessages() {
        $messages = messages();
        foreach ($messages as $message) {
            echo <<<EOT
    <article class="topic">
            <span> {$message['USERNAME']} </span>
            <p> {$message['CONTENU']} </p>
            <p> Voir plus > </p>
        </article>
EOT;
        }
    }