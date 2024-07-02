<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\View\View;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Redirect;
use App\Http\Requests\ProfileUpdateRequest;

class UserController extends Controller
{
    /**
     * Recuperer la liste des utilisateurs.
     */
    public function index(Request $request): View
    {
        $users = User::role('admin')->get();
        
        return view('users.index', [
            'users' => $users,
        ]);
    }
}
