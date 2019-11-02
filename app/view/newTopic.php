<div id="newTopic" style="visibility: hidden;">
    <a onclick="showNewTopicForm()" class="close">❌</a>
    <h1> Nouveau Topic </h1>
    <form method="post" action="app/model/sendMessage.php?newTopic=True">
        <div class="topicDescription">
            <label for="topicName"> Nom:  </label>
            <input type="text" id="topicName" name="message">
            <input class="newText" name="sendMsg" type="submit" value="📩">
        </div>
    </form>
</div>