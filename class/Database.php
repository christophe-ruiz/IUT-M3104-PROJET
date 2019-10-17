<?php


class Database
{
    private $pdo;
    private $iniPath;

    function __construct($path = '../config/dbCredentials.ini')
    {
        $this->iniPath = $path;
        $this->pdo = $this->connect();
    }

    /**
     * @return PDO
     */
    public function getPdo()
    {
        return $this->pdo;
    }

    /**
     * @return string
     */
    public function getIniPath()
    {
        return $this->iniPath;
    }

    private function connect() {
        $path = $this->getIniPath();
        $dbCredentials = parse_ini_file($path,TRUE)['database'];

        $host = $dbCredentials['host'];
        $username = $dbCredentials['login'];
        $password = $dbCredentials['password'];
        $dbName = $dbCredentials['login'];
        $charset = 'utf8mb4';

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