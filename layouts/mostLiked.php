<nav class="corps">
    <h2> Les plus aimés</h2>
    <?php
    $myDb = new Database('config/dbCredentials.ini');
    $sql = "SELECT * FROM MESSAGE WHERE ID IN (SELECT ID FROM LIKES GROUP BY ID ORDER BY COUNT(*) DESC ) AND ID_PERE IS NULL LIMIT 5";
    $stmt = $myDb->getPDO()->prepare($sql);
    $stmt->execute();
    $result = $stmt->fetchAll();

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
    <? } ?>
</nav>