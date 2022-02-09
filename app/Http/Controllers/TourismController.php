<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Location;

class TourismController extends Controller
{
    public function index( ) {
        
        $locations = Location::all();

        return view('tourism.tourism', [
            'locations' => $locations,
        ]);
    }

    
    
    
}
