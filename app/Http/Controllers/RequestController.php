<?php

namespace App\Http\Controllers;

use App\Models\Request as PetRequest;
use Illuminate\Http\Request;

class RequestController extends Controller
{
    public function index()
    {
        $requests = PetRequest::all();
        return view('requests.index', compact('requests'));
    }

    public function create()
    {
        return view('requests.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'pet_id' => 'required|exists:pets,id',
            'user_id' => 'required|exists:users,id',
            'status' => 'required|in:pending,accepted,rejected',
        ]);

        PetRequest::create($request->all());
        return redirect()->route('requests.index');
    }

    public function show(PetRequest $request)
    {
        return view('requests.show', compact('request'));
    }

    public function edit(PetRequest $request)
    {
        return view('requests.edit', compact('request'));
    }

    public function update(Request $request, PetRequest $petRequest)
    {
        $request->validate([
            'status' => 'required|in:pending,accepted,rejected',
        ]);

        $petRequest->update($request->all());
        return redirect()->route('requests.index');
    }

    public function destroy(PetRequest $request)
    {
        $request->delete();
        return redirect()->route('requests.index');
    }
}
