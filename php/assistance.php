<?php
    require_once 'php_func/utils.pages.php';
    my_header();
    ?>
<!DOCTYPE html>
    <html lang="fr">
    <head>

        <meta charset="utf-8">
        <title>FreeNote</title>
        <link rel="stylesheet" href="{$stylesheet}">
        <script type="text/javascript" src="../js/showmenu.js"></script>

    </head>
    <body>
    <header class="topHeader">
        <div id="deco">
            <a class="deconnexion" onclick="showmenu()"> Deconnexion </a>
        </div>
    </header>

<?php
    my_footer();