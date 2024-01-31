<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\recettes;

class homePageController extends Controller
{
    //
    public function index()
    {
        //
        $recettes = recettes::all(); 
        return view('welcome', compact('recettes'));
    }
    // public function recipes_for_search(Request $request) {
    //     $search = $request->search;
    //     $recettes = recettes::where('name', 'like', '%' . $search . '%')->get();
    //     return view('welcome', compact('recettes'));
    //  }

}
