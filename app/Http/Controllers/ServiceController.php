<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Location;
use App\Services\ModelLogger;

class ServiceController extends Controller
{
    public function show($locationId, Request $request, ModelLogger $logger) {

        $location = Location::findOrFail($locationId);

        $logger->logModel($request->user(), $location);

        return view('tourism.service', [
            'location' => $location,
        ]);
    }
}
