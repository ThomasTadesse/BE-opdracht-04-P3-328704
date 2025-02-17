<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Allergeen;
use Illuminate\Support\Facades\DB;

class AllergeenController extends Controller
{
    public function index()
    {
        $allergenen = DB::select('CALL GetAllergenen()');
        return view('allergeen.index', ['allergenen' => $allergenen]);
    }
}
