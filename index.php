<?php
    require_once 'core/autoloader.php';
    session_start();
    require_once 'layouts/header.php';
    if ($_GET['id'] == 'NULL') unset($_GET['id']);
    if (!isset($_GET['url'])) {
        if (!isset($_SESSION['currentUser'])) $_GET['url'] = 'index';
        else $_GET['url'] = 'board';
    }
    if($_POST['like']) {
        require_once 'app/model/like.php';
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
            require_once 'app/model/like.php';
            require_once 'app/view/discussion.php';
            if ($_POST['like']) require_once 'app/model/like.php';
            break;
        case 'admin':
            require_once 'app/model/adminPanel.php';
            require_once 'app/view/adminPanel.php';
            break;
        case 'profile':
            require_once 'app/model/profile.php';
            require_once 'app/view/profile.php';
        default:
            break;
    }
    require_once 'layouts/footer.php';