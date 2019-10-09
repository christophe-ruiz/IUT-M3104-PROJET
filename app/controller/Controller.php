<?php


class Controller
{
    public static function CreateView($name) {
        require_once "../view/$name.php";
    }
}