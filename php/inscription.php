<?php

    $action = $_POST['action'];
    $validPWD = true;

    if (isset($action) && !empty($action)) {
        $login = $_POST['login'];
        $pwd = $_POST['pwd'];
        $vpwd = $_POST['vpwd'];
    }

    if ($pwd != $vpwd) $validPWD = false;


