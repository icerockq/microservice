<?php

namespace app\core\sources;


interface iClient
{
    public function __construct(iConnection $connection);

    public function request();
}