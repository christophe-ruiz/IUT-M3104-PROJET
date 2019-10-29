<?php
    require_once 'core/autoloader.php';
    session_start();
    require_once 'layouts/header.php';
    if ($_GET['id'] == 'NULL') unset($_GET['id']);
    if (!isset($_GET['url'])) {
        if (!isset($_SESSION['currentUser'])) $_GET['url'] = 'index';
        else $_GET['url'] = 'board';
    }
    //require 'core/routes.php';
    switch ($_GET['url']) {
        case 'index':
            require_once 'layouts/mainView.php';
            break;
        case 'board':
            require_once 'app/model/board.php';
            require_once 'app/view/board.php';
            require_once 'layouts/mainView.php';
            break;
        case 'discussion':
            require_once 'app/model/discussion.php';
            require_once 'app/view/discussion.php';
        default:
            break;
    }
    require_once 'layouts/footer.php';