<?php
    session_start();
    require_once 'core/autoloader.php';
    require_once 'php_func/utils.pages.php';
    if (!isset($_GET['url'])) require_once 'core/routes.php';
    else Controller::CreateView($_GET['url']);