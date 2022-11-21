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

        return view('listar-series', compact('series'));
    }
}
