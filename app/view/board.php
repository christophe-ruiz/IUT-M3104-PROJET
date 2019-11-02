<main class="topicBoard">
    <? require_once 'app/view/newTopic.php'; ?>
    <div class="topicBox">
        <?php placeMessages() ?>
    </div>
    <div class="topicMain">
            <?php
            require_once 'app/model/discussion.php';
            ?>
    </div>
</main>
<div class="createTopic">
    <a onclick="showNewTopicForm()"> Nouveau topic </a>
</div>