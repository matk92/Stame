<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\View\View;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Redirect;
use App\Http\Requests\ProfileUpdateRequest;
use Spatie\Permission\Models\Role;

class UserController extends Controller
{
    /**
     * Recuperer la liste des utilisateurs.
     */
    public function index(Request $request): View
    {
        $users = User::with('roles')->get();
        $roles = Role::all();

        return view('users.index', [
            'users' => $users,
            'roles' => $roles
        ]);
    }

    /**
     * Mettre à jour le role d'un utilisateur.
     */
    public function update(Request $request, User $user): RedirectResponse
    {
        $user->syncRoles($request->role);

        return Redirect::route('users.index');
    }

    /**
     * Permets de créer des utilisateurs de test pour l'affichage.
     */
    public function createTest(): RedirectResponse
    {
        for ($i = 1; $i <= 5; $i++) {
            $user = User::factory()->create([
                'name' => 'User' . $i,
                'email' => 'user' . $i . '@mail.fr',
                'password' => bcrypt('password')
            ]);
            $user->assignRole('user');
            $user->save();
        }

        return Redirect::route('users.index');
    }
}
