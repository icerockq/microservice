<?php

namespace app\core\sources;


use PDO;

class ConnectionInstagram implements iConnection
{
    private $login;
    private $db;

    public function __construct(string $login)
    {
        $this->login = $login;
    }

    public function createConnection()
    {
        // TODO: Implement createConnection() method.
        $this->db = new PDO('mysql:host=localhost;port=3306;dbname=microservice;charset=utf8', 'root', '');
        foreach($this->db->query('SELECT * from users') as $row) {
            echo $row['login'];
        }
    }
}