<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Project;

class PageController extends Controller
{//*il compact è inutile perchè aggiunge un livello superfluo (se abbiamo una sola chiave)
 //*invece in caso di più chiavi è necessario -> return response()->json($key1,$key2)
    public function index() {
       $projects = Project::all();

       return response()->json($projects);
    }
}
