<?php

namespace App\Services;

use Illuminate\Http\Request;

class ProductionRequestActivityLogger extends AbstractRequestActivityLogger
{
    protected function collectRequestData(Request $request): array
    {
        return [
            "ip" => $request->ip(),
            "full_url" => $request->fullUrl(), 
        ];   
    }
}