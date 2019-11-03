<nav class="corps">
    <h2> Les plus aimés</h2>
    <?php
    $myDb = new Database('config/dbCredentials.ini');
    $sql = 'SELECT MESSAGE.USERNAME, MESSAGE.ID, DATE_ENVOI, CONTENU FROM LIKES JOIN MESSAGE WHERE MESSAGE.ID = LIKES.ID GROUP BY ID ORDER BY COUNT(*) DESC LIMIT 5';
    $stmt = $myDb->getPDO()->prepare($sql);
    $stmt->execute();
    $result = $stmt->fetchAll();

    foreach ($result as $message) {
        $author = $message['USERNAME'];
        $date = $message['DATE_ENVOI'];
        $words = $message['CONTENU'];
        $id = $message['ID'];
        $statut = $message['MODIFIE'];
        $discussion = new Message($id, $author, $date, $words, $statut); ?>
    <article class="topic">
        <span> <?= $discussion->getAuthor() ?> </span>
        <p> <?= $discussion->getWords() ?> </p>
        <a href="index.php?url=board&id=<?= $discussion->getId() ?>"> ➤ </a>
    </article>
    <? } ?>
</nav>