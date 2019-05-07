<?php

namespace app\core\sources;


interface iConnection
{
    public function __construct(string $login);

    public function createConnection();

}