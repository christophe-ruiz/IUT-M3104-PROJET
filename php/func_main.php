<?php
    require_once "../layouts/header.php";
    my_header('../web/css/style.css', '../img/freenote-logo.png'); ?>
    <main class="splitter">
        <?php require_once 'layouts/mainView.php'?>
        <div class="separator"></div>
        <?php require_once 'layouts/mostLiked.php'?>
    </main>
    <?php require_once 'layouts/footer.php'?>