<?php
    session_start();
    $id = $_GET['id'];
    $_SESSION['id'] = $id;
    if (!$id) $id = 'NULL';

    $myDb = new Database('config/dbCredentials.ini');
    $sql = "SELECT * FROM MESSAGE WHERE ID = $id OR ID_PERE = $id ORDER BY DATE_ENVOI";
    $stmt = $myDb->getPDO()->prepare($sql);
    $stmt->execute();
    $result = $stmt->fetchAll();

    if ($stmt->rowCount()) require_once 'app/view/discussion.php';

    function messageSum($result) {
        $messageSum = "";
        foreach ($result as $message) {
            $msg = $message['CONTENU'];
            if (!preg_match('/Message supprimé par .*/', $msg)) {
                $messageSum .= " " . $msg;
            }
        }
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
            $statut = $message['MODIFIE'];
            $discussion = new Message($id, $author, $date, $words, $statut); ?>
<article class="discussion">
        <?php if ((unserialize($_SESSION['userAdminStatus']) || $author == unserialize($_SESSION['userUsername'])) && !preg_match('/Message supprimé par .*/', $discussion->getWords())) { ?>
            <a onclick="deleteMsg(<?=$discussion->getId()?>, 0)" class="delete"> 🗑️ </a>
        <?php } else if ((unserialize($_SESSION['userAdminStatus']) || $author == unserialize($_SESSION['userUsername']))) { ?>
            <a onclick="deleteMsg(<?=$discussion->getId()?>, 1)" class="delete"> 🚮 </a>
        <?php } else { ?>
                <div class="delete">  </div>
        <?php
        } if ((unserialize($_SESSION['userAdminStatus']) || $author == unserialize($_SESSION['userUsername'])) && !preg_match('/Message supprimé par .*/', $discussion->getWords()) && $discussion->getStatut() == 0) { ?>
            <a onclick="modifyMsg(<?=$discussion->getId()?>)" class="delete"> 🖋️ </a>
        <?php } else { ?>
            <div class="delete">  </div>
        <?php }?>
        <div class="topicId">
            <p> <?= $discussion->getId() ?> </p>
        </div>
        <div class="discussionId">
            <p <?php if ($discussion->getStatut()) echo 'class="modifie"' ?>> <?= $discussion->getWords() ?> </p>
        </div>
        <div class="discussionInfo">
            <p> 🤵 <?= $discussion->getAuthor() ?> </p>
            <p> 📅 <?= $discussion->getDate() ?> </p>
        </div>
    </article>
            <?php
        }
    }