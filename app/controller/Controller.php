<?php


class Controller
{
    public static function CreateView($name) {
        require_once "./app/view/$name.php";
    }
}