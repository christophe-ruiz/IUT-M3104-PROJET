<main class="main">
    <nav class="corps">
        <h2> Les plus récents </h2>
    <?php
        $myDb = new Database('config/dbCredentials.ini');
        $sql = "SELECT * FROM MESSAGE WHERE ID_PERE IS NULL ORDER BY DATE_ENVOI DESC LIMIT 5";
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
            <a href="index.php?url=board&id=<?= $discussion->getId() ?>"> ➤ </a>
        </article>
        <? } ?>
    </nav>
    <?php
        if (!isset($_SESSION['currentUser'])) require_once 'presentation.php';
        else require_once 'mostLiked.php';
        require_once 'app/view/index.php';
    ?>
</main>