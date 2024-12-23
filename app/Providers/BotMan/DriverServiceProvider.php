<?php

namespace App\Providers\BotMan;

use BotMan\BotMan\Drivers\DriverManager;
use Illuminate\Support\ServiceProvider;

class DriverServiceProvider extends ServiceProvider
{
    /**
     * The drivers that should be loaded to
     * use with BotMan
     *
     * @var array
     */
    protected $drivers = [];

    /**
     * @return void
     */
    public function boot()
    {

        foreach ($this->drivers as $driver) {
            DriverManager::loadDriver($driver);
        }
    }
}
