<?php
    session_start();
    require_once 'core/autoloader.php';
    require_once 'php_func/utils.pages.php';
    require 'core/routes.php';
    while (!isset($_GET['url'])) {
        if ($_GET['url'] == 'index')
            Index::CreateView('index');
        if ($_GET['url'] == 'board')
            Board::CreateView('board');
        else {
            $_GET['url'] = 'index';
            echo $_GET['url'];
            require 'core/routes.php';
    }
    }