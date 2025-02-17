<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Allergeen;
use Illuminate\Support\Facades\DB;

class AllergeenController extends Controller
{
    public function index(Request $request)
    {
        $query = Allergeen::query();
        
        // Apply filter if selected
        if ($request->has('filter') && $request->filter != '') {
            $query->where('naam', $request->filter);
        }

        // Get all allergenen for the filtered or unfiltered query
        $allergenen = $query->get();
        
        // Get unique allergeen names for the dropdown
        $uniqueAllergenen = Allergeen::distinct('naam')->pluck('naam');

        return view('allergeen.index', compact('allergenen', 'uniqueAllergenen'));
    }
}
