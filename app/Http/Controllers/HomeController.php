<?php

namespace App\Http\Controllers;

use App\Models\Pet;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $pets = Pet::all();
        return view('home.index', compact('pets'));
    }

    public function filter(Request $request)
    {
        $query = Pet::query();

        if ($request->filled('animal_type')) {
            $query->where('animal_type', $request->animal_type);
        }

        $pets = $query->get();
        return view('home.index', compact('pets'));
    }
}

