<div class="topicView">
    <div class="messageSum">
        <p> <?= messageSum($result) ?> </p>
    </div>
    <div class="likeBtn">
        <p> <?= likeCount($_GET['id']) ?> </p>
        <a href="" onclick="like()"> 🤍 </a>
    </div>
    <nav class="timeline">
        <?php showTimeline($result) ?>
    </nav>
</div>
<div class="composer">
    <form method="post" action="app/model/sendMessage.php" class="messageBox">
        <textarea class="write" name="message" rows="1" autofocus maxlength="255" wrap="" placeholder="Écrivez un message..."></textarea>
        <input class="newText" name="sendMsg" type="submit" value="📩">
    </form>
</div>