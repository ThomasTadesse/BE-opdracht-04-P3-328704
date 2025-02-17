<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AllergeenController extends Controller
{
    public function index(Request $request)
    {
        // Get all allergenen using stored procedure
        $allergenen = collect(DB::select('CALL GetAllergenen()'));
        
        // Apply filter if selected
        if ($request->has('filter') && $request->filter != '') {
            $allergenen = $allergenen->where('AllergeenNaam', $request->filter);
        }

        // Convert to array and maintain sorting
        $allergenen = $allergenen->values()->all();
        
        // Get unique allergeen names for the dropdown
        $uniqueAllergenen = collect($allergenen)->pluck('AllergeenNaam')->unique()->values();

        return view('allergeen.index', compact('allergenen', 'uniqueAllergenen'));
    }

    public function show($id)
    {
        $allergeen = DB::table('allergeen')
            ->where('Id', $id)
            ->first();
        
        return view('allergeen.show', ['allergeen' => $allergeen]);
    }
}
