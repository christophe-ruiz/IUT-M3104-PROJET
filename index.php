<?php
    require_once 'core/autoloader.php';
    session_start();
    $settings = parse_ini_file('config/rules.ini',TRUE);
    $maxMSG = $settings['Topic']['max_messages'];
    $_SESSION['maxMSG'] = serialize($maxMSG);
    require_once 'layouts/header.php';
    if ($_GET['id'] == 'NULL') unset($_GET['id']);
    if (!isset($_GET['url'])) {
        if (!isset($_SESSION['currentUser'])) $_GET['url'] = 'index';
        else $_GET['url'] = 'board';
    }
    if ($_POST['like']) {
        require_once 'app/model/like.php';
    }
    if ($_POST['delete']) {
        require_once 'app/model/delete.php';
    }
    if (isset($_POST['userDeletion'])) {
        require_once 'app/model/userDeletion.php';
    }
    if (isset($_POST['changeStatus'])) {
        require_once 'app/model/changeStatus.php';
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