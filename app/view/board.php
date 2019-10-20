<main class="topicBoard">
    <div class="topicBox">
        <?php placeMessages() ?>
        <article class="topicRoll">
            <span> Nouveau topic</span>
            <a href="#"> ➤ </a>
        </article>
    </div>
    <div class="topicMain">
        <div class="topicView">
            <?php
            require_once 'app/model/discussion.php';
            require_once 'app/view/discussion.php';
            ?>
        </div>
        <div class="composer">
            <form method="post" action="app/model/sendMessage.php" class="messageBox">
                <textarea class="write" name="message" rows="1" autofocus maxlength="255" wrap="" placeholder="Écrivez un message..."></textarea>
                <input class="newText" name="sendMsg" type="submit" value="📩">
            </form>
        </div>
    </div>
</main>