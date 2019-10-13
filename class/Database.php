<?php


class Database
{
    function __construct()
    {
        $this->pdo = $this->connect();
    }

    private $pdo;

    public function getPDO() {
        return $this->pdo;
    }

    private function connect() {
        $dbCredentials = parse_ini_file('../config/dbCredentials.ini',TRUE)['database'];

        $host = $dbCredentials['host'];
        $username = $dbCredentials['login'];
        $password = $dbCredentials['password'];
        $dbName = $dbCredentials['login'];
        $charset = 'utf8mb4';

        echo $host . PHP_EOL;
        echo $username .PHP_EOL;
        echo $password .PHP_EOL;

        $dsn = 'mysql:host='.$host.';dbname='.$dbName.';charset='.$charset;
        $options = [
            PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
            PDO::ATTR_EMULATE_PREPARES   => false,
        ];
        try {
            $pdo = new PDO($dsn, $username, $password, $options);
        } catch (PDOException $e) {
            echo $e->getMessage();
            echo (int)$e->getCode();
        }
        return $pdo;
    }
}