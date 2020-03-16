<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AlgorithmsController extends Controller
{
    public function index()
    {
        $nemo = 'nemo';
        $array = [];
        $array[10000] = 'nemo';
        for($i = 0; $i < count($array); $i++)
        {
            $startTime = microtime(true);
            if (isset($array[$i]) && $array[$i] == 'nemo')
            {
                echo "nemo founded";
            }

        }
        $endTime = microtime(true);
    
        dd($endTime );
    }
}
