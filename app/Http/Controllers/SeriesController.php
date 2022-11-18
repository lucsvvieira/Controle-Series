<?php

namespace App\Http\Controllers;

class SeriesController
{
    public function listarSeries() {
        
        $series = [
            'The Walking Dead',
            'Breaking Bad',
            'The Sinner'
        ];

        $html = '<ul>';
        foreach ($series as $serie) {
            $html .= "<li>$serie</li>";
        }
        $html .= '</ul>';

        echo $html;

    }
}