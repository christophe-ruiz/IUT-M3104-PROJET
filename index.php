<?php
spl_autoload_register(function ($class) {
    if (file_exists('./class/' . $class . '.php'))
        require_once 'class/' . $class . '.php';
    else if (file_exists('./app/controller/' . $class . '.php'))
        require_once 'app/controller/' . $class . '.php';
});
require_once 'php_func/utils.pages.php';
require_once 'core/routes.php';
echo 'uh oh';