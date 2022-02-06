<?php

namespace App\Services;

use Illuminate\Http\Request;

class DebugRequestActivityLogger extends AbstractRequestActivityLogger
{
    protected function collectRequestData(Request $request): array
    {
        return [
            "url" => $request->url(),
            "path" => $request->path(),
            "method" => $request->method(),
            "ip" => $request->ip(),
            "form-data" => $request->all(),
        ];   
    }
}