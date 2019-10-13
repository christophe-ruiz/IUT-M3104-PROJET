<?php
if (isset($_SESSION['currentUser'])) {
    echo 'User :' . PHP_EOL;
    var_dump($_SESSION['currentUser']);
} else echo 'pas connecté';
