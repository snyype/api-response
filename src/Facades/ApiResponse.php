<?php

namespace snype\ApiResponse\Facades;

use Illuminate\Support\Facades\Facade;

class ApiResponse extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'api.response';
    }
}
