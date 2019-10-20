<?php
    session_start();
    $_SESSION['id'] = $id = $_GET['id'];

    $myDb = new Database('config/dbCredentials.ini');
    $sql = "SELECT * FROM MESSAGE WHERE ID = '$id' OR ID_PERE = '$id' ORDER BY DATE_ENVOI";
    $stmt = $myDb->getPDO()->prepare($sql);
    $stmt->execute();
    $result = $stmt->fetchAll();

    function messageSum($result) {
        $messageSum = "";
        foreach ($result as $message)
            $messageSum .= " " . $message['CONTENU'];
        return $messageSum;
    }

    function showTimeline($result) {
        foreach ($result as $message) {
            $author = $message['USERNAME'];
            $date = $message['DATE_ENVOI'];
            $words = $message['CONTENU'];
            $id = $message['ID'];
            $discussion = new Message($id, $author, $date, $words); ?>
<article class="discussion">
    <div class="goBack">
        <a href="index.php?url=board"> ↩️ </a>
    </div>
    <div class="discussionId">
        <p> <?= $discussion->getId() ?> </p>
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