<?php

namespace App\Http\Controllers;

use App\Models\Pet;
use Illuminate\Http\Request;

class PetController extends Controller
{
    public function index()
    {
        // Haal alle huisdieren op uit de database
        $pets = Pet::all();
        
        // Retourneer de view 'pets.index' en geef de $pets data mee
        return view('pets.index', compact('pets'));
    }

    // Andere functies voor PetController (zoals create, store, edit, etc.)
}
// namespace App\Http\Controllers;

// use App\Models\Pet;
// use Illuminate\Http\Request;

// class PetController extends Controller
// {
//     public function index()
//     {
//         $pets = Pet::all();
//         return view('pets.index', compact('pets'));
//     }

//     public function create()
//     {
//         return view('pets.create');
//     }

//     public function store(Request $request)
//     {
//         $request->validate([
//             'name' => 'required',
//             'animal_type' => 'required',
//             'profile_picture' => 'nullable|image',
//             'when' => 'nullable|date',
//             'hourly_price' => 'required|numeric',
//             'time' => 'nullable|integer',
//         ]);

//         Pet::create($request->all());
//         return redirect()->route('pets.index');
//     }

//     public function show(Pet $pet)
//     {
//         return view('pets.show', compact('pet'));
//     }

//     public function edit(Pet $pet)
//     {
//         return view('pets.edit', compact('pet'));
//     }

//     public function update(Request $request, Pet $pet)
//     {
//         $request->validate([
//             'name' => 'required',
//             'animal_type' => 'required',
//             'profile_picture' => 'nullable|image',
//             'when' => 'nullable|date',
//             'hourly_price' => 'required|numeric',
//             'time' => 'nullable|integer',
//         ]);

//         $pet->update($request->all());
//         return redirect()->route('pets.index');
//     }

//     public function destroy(Pet $pet)
//     {
//         $pet->delete();
//         return redirect()->route('pets.index');
//     }
// }
