<?php
    require_once "../php_func/utils.pages.php";
    my_header('../css/style.css', '../img/freenote-logo.png'); ?>
    <main class="splitter">
        <?php
        mainView();
        mostLiked();
        ?>
    </main>
    <?php my_footer(); ?>