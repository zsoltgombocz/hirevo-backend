<?php

namespace App\Http\Actions;

use App\Support\AppVersion\Facade\AppVersion;
use Symfony\Component\HttpFoundation\Response;

class DisplayAppVersion
{
    public function __invoke(): Response
    {
        return response()->json([
            'version' => AppVersion::get(),
        ]);
    }
}
