<?php

namespace app\core;

use app\core\sources\ConnectionInstagram;

class App
{
    public function __construct()
    {

    }

    public function run()
    {
        $connectionInstagram = new ConnectionInstagram('@inoptika');
        $connectionInstagram->createConnection();
    }
}