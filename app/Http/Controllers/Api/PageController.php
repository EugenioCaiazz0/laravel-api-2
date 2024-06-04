<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index() {
        return response()->json([ //*il compact è inutile perchè aggiunge un livello superfluo (se abbiamo una sola chiave)
            //*invece in caso di più chiavi è necessario -> return response()->json($key1,$key2)
            'name' => 'Er Pupone'
        ]);
    }
}
