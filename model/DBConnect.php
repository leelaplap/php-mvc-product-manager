<?php


namespace model;


class DBConnect
{
    public $dsn;
    public $user;
    public $pass;

    public function __construct($dsn, $user, $pass)
    {
        $this->dsn = $dsn;
        $this->user = $user;
        $this->pass = $pass;
    }

    public function connect()
    {
        $conn = null;
        try {
            $conn = new \PDO($this->dsn, $this->user, $this->pass);
        } catch (\PDOException $e) {
            return $e->getMessage();
        }

        return $conn;
    }
}