<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Point;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class PointController extends Controller
{
    public function store(Request $request)
    {
    	$point = new Point();
        $point->stat = $request->input('stat');
        dd($point->stat);
    }
}
