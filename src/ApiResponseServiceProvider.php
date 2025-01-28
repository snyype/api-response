<?php

namespace snype\ApiResponse;

use Illuminate\Support\ServiceProvider;

class ApiResponseServiceProvider extends ServiceProvider
{
    public function register()
    {
        $this->app->singleton('api.response', function () {
            return new ApiResponse();
        });
    }

    public function boot()
    {
        // You can publish configs or other resources here if needed
    }
}
