<?php


class Database
{
    public static $pdo;

    public static function connect() {
        $dbCredentials = parse_ini_file('../config/dbCredentials.ini',TRUE)['database'];

        $host = $dbCredentials['host'];
        $username = $dbCredentials['username'];
        $password = $dbCredentials['password'];
        $dbName = $dbCredentials['username'];
        $charset = 'utf8mb4';

        echo $host;

        $dsn = 'mysql:host='.$host.';dbname='.$dbName.';charset='.$charset;
        $options = [
            PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
            PDO::ATTR_EMULATE_PREPARES   => false,
        ];
        try {
            $pdo = new PDO($dsn, $username, $password, $options);
        } catch (PDOException $e) {
            $e->getMessage();
            echo (int)$e->getCode();
        }

        self::$pdo = $pdo;
    }
}