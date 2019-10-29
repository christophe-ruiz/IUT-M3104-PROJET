<?php
    require_once 'class/Database.php';

    function getActiveTopics() {
        $myDb = new Database('config/dbCredentials.ini');
        $sql = "SELECT * FROM MESSAGE WHERE ID_PERE IS NULL ORDER BY DATE_ENVOI DESC";
        $stmt = $myDb->getPDO()->prepare($sql);
        $stmt->execute();
        $result = $stmt->fetchAll();
        return $result;
    }

    function placeMessages() {
        $topics = getActiveTopics();
        foreach ($topics as $topic) { ?>
    <article class="topicRoll">
            <span> <?= $topic['USERNAME'] ?> </span>
            <p> <?= $topic['CONTENU'] ?> </p>
            <a href="index.php?url=board&id=<?= $topic['ID'] ?>"> ➤ </a>
        </article> <?php
        }
    }

    function getMostLiked() {
$myDb = new Database('config/dbCredentials.ini');
$sql = "SELECT * FROM MESSAGE ORDER BY LIKES, DATE_ENVOI DESC LIMIT 5";
$stmt = $myDb->getPDO()->prepare($sql);
$stmt->execute();
$result = $stmt->fetchAll();

?>
<nav class="corps">
    <h2> Les plus aimés</h2>
    <?php
    foreach ($result as $message) {
        $author = $message['USERNAME'];
        $date = $message['DATE_ENVOI'];
        $words = $message['CONTENU'];
        $id = $message['ID'];
        $discussion = new Message($id, $author, $date, $words); ?>
        <article class="topic">
            <span> <?= $discussion->getAuthor() ?> </span>
            <p> <?= $discussion->getWords() ?> </p>
            <p> ➤ </p>
        </article>
        <?
    }
    ?>
</nav>
<?php
    }