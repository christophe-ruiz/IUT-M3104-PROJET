<?php
    require_once 'core/autoloader.php';
    require_once 'php_func/utils.pages.php';
    session_start();
    if (!isset($_GET['url'])) $_GET['url'] = 'index';
    require 'core/routes.php';