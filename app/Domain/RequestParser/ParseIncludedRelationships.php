<?php

namespace App\Domain\RequestParser;

use Illuminate\Http\Request;

class ParseIncludedRelationships
{
    public static function fromRequest(Request $request, array $default = []): array
    {
        if (empty($request->input('include'))) {
            return $default;
        }

        return explode(',', $request->input('include'));
    }
}
