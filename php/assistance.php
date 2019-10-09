<?php
    require_once '../php_func/utils.pages2.php';
    my_header();
    ?>

        <div id="deco">
            <a class="deconnexion" onclick="showmenu()"> Deconnexion </a>
        </div>
        <div class="messages">
            <p>1er message</p>
        </div>
<?php
mainView();
    my_footer();