<?php


class User
{
    private $login;
    private $isAdmin;
    private $date;

    function __construct($login, $isAdmin, $date)
    {
        $this->login = $login;
        $this->isAdmin = $isAdmin;
        $this->date = $date;
    }

    function getAdminStatus () {
        return $this->isAdmin;
    }
}