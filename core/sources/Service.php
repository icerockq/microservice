<?php

namespace app\core\sources;


class Service
{
    private $connection;

    public function __construct(iConnection $connection)
    {
        $this->connection = $connection;
    }


}