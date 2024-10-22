<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\PetRequest;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        $users = User::all();
        $requests = PetRequest::all();
        return view('admin.index', compact('users', 'requests'));
    }

    public function blockUser(User $user)
    {
        $user->update(['is_blocked' => true]);
        return redirect()->route('admin.index');
    }

    public function unblockUser(User $user)
    {
        $user->update(['is_blocked' => false]);
        return redirect()->route('admin.index');
    }

    public function deleteRequest(PetRequest $request)
    {
        $request->delete();
        return redirect()->route('admin.index');
    }
}

