<?php
    session_start();
    $_SESSION['id'] = $id = $_GET['id'];
    if (!$id) $id = 'NULL';

    $myDb = new Database('config/dbCredentials.ini');
    $sql = "SELECT * FROM MESSAGE WHERE ID = $id OR ID_PERE = $id ORDER BY DATE_ENVOI";
    $stmt = $myDb->getPDO()->prepare($sql);
    $stmt->execute();
    $result = $stmt->fetchAll();

    if ($stmt->rowCount()) require_once 'app/view/discussion.php';

    function messageSum($result) {
        $messageSum = "";
        foreach ($result as $message)
            $messageSum .= " " . $message['CONTENU'];
        return $messageSum;
    }

    function likeCount($id) {
        $myDb = new Database('config/dbCredentials.ini');
        $sql = "SELECT * FROM LIKES WHERE ID = $id";
        $stmt = $myDb->getPDO()->prepare($sql);
        $stmt->execute();
        return $stmt->rowCount();
    }

    function showTimeline($result) {
        foreach ($result as $message) {
            $author = $message['USERNAME'];
            $date = $message['DATE_ENVOI'];
            $words = $message['CONTENU'];
            $id = $message['ID'];
            $discussion = new Message($id, $author, $date, $words); ?>
<article class="discussion">
        <?php if (unserialize($_SESSION['userAdminStatus'])) { ?>
        <a href="" class="delete"> 🗑️ </a>
        <?php } ?>
        <div class="topicId">
            <p> <?= $discussion->getId() ?> </p>
        </div>
        <div class="discussionId">
            <p> <?= $discussion->getWords() ?> </p>
        </div>
        <div class="discussionInfo">
            <p> 🤵 <?= $discussion->getAuthor() ?> </p>
            <p> 📅 <?= $discussion->getDate() ?> </p>
        </div>
    </article>
            <?php
        }
    }