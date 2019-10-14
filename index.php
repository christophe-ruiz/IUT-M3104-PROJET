<?php
    require_once 'core/autoloader.php';
    session_start();
    require_once 'layouts/header.php';
    if (!isset($_GET['url'])) $_GET['url'] = 'index';
    require 'core/routes.php';
    require_once 'layouts/mainView.php';
    require_once 'layouts/footer.php';