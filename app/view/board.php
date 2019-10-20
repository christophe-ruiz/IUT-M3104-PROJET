<main class="topicBoard">
    <div class="topicBox">
        <?php placeMessages() ?>
        <article class="topicRoll">
            <span> Nouveau topic</span>
            <a href="#"> ➤ </a>
        </article>
    </div>
    <div class="topicView">
        <?php
            require_once 'app/model/discussion.php';
            require_once 'app/view/discussion.php';
        ?>
    </div>
</main>