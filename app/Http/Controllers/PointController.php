<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Point;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class PointController extends Controller
{
	public function index()
	{
		$points = Point::all();
		dd($points);
	}

    public function store(Request $request)
    {
    	$point = new Point();
        $point->user_id = 0; // TODO: replace with actual user id
        $point->stat = $request->input('stat');
        $point->source = $request->input('source');
        $point->source_url = $request->input('source_url');
        $point->valid_until = $request->input('valid_until');
        $point->weight = 0;
        $point->save();
    }
}
