<?php

namespace App\Support\AppVersion\Facade;

use Illuminate\Support\Facades\Facade;

class AppVersion extends Facade
{
    protected static function getFacadeAccessor(): string
    {
        return 'app-version';
    }
}
