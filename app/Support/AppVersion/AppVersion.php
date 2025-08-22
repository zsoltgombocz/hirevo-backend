<?php

namespace App\Support\AppVersion;

class AppVersion
{
    public static function get(): string
    {
        $versionFile = public_path('version.json');

        if (! file_exists($versionFile)) {
            return 'unknown';
        }

        $fileContent = file_get_contents($versionFile);

        if (empty($fileContent)) {
            return 'unknown';
        }

        return trim($fileContent);
    }
}
