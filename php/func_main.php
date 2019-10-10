<?php
    require_once "../php_func/utils.pages.php";
    my_header('../web/css/style.css', '../img/freenote-logo.png'); ?>
    <main class="splitter">
        <?php mainView(); ?>
        <div class="separator"></div>
        <?php mostLiked(); ?>
    </main>
    <?php my_footer(); ?>