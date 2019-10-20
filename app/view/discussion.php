<div class="messageSum">
    <p> <?= messageSum($result) ?> </p>
</div>
<nav class="timeline">
    <?php showTimeline($result) ?>
</nav>
<form method="post" action="app/model/sendMessage.php" class="messageBox">
    <textarea name="message" rows="1" autofocus maxlength="255" wrap="" placeholder="Écrivez un message..."></textarea>
    <input name="sendMsg" type="submit" value="📩">
</form>