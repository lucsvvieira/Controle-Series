<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SeriesController extends Controller
{
    public function index(Request $request) {
        $series = [
            'The Walking Dead',
            'Breaking Bad',
            'The Sinner'
        ];

        return view('series.index')->with('series', $series);
    }
}
