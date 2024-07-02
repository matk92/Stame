<?php

namespace App\Http\Controllers;

use App\Models\Game;
use Illuminate\Http\Request;

class GameController extends Controller
{
    public function index()
    {
        $games = Game::all();
        return view('games.index', compact('games'));
    }

    public function create()
    {
        return view('games.create');
    }

    public function store(Request $request)
    {
        try {
            $validatedData = $request->validate([
                'title' => 'required',
                'release_date' => 'required|date',
                'genre' => 'required',
                'summary' => 'required',
                'producer' => 'required',
                'pegi' => 'required|integer',
                'score' => 'required|numeric',
                'comment' => 'required',
                'cover_image' => 'required|image',
            ]);
        
            $game = new Game($validatedData);
            if ($request->hasFile('cover_image')) {
                $file = $request->file('cover_image');
                $filename = $file->hashName();
                $path = $file->store('public/games');
                $game->cover_image = $filename;
            }
            $game->save();
        
            return redirect()->route('games.index')->with('success', 'Jeu ajouté avec succès.');
        } catch (\Exception $e) {
            return back()->withInput()->with('error', 'Erreur lors de l\'ajout du jeu.');
        }
    }
    
    public function edit($id)
    {
        $game = Game::findOrFail($id);
        return view('games.edit', compact('game'));
    }
    
    public function update(Request $request, $id)
    {
        try {
            $validatedData = $request->validate([
                'title' => 'required',
                'release_date' => 'required|date',
                'genre' => 'required',
                'summary' => 'required',
                'producer' => 'required',
                'pegi' => 'required|integer',
                'score' => 'required|numeric',
                'comment' => 'required',
                'cover_image' => 'sometimes|image',
            ]);
    
            $game = Game::findOrFail($id);
            if ($request->hasFile('cover_image')) {
                $file = $request->file('cover_image');
                $filename = $file->hashName();
                $path = $file->store('public/games');
                $validatedData['cover_image'] = $filename;
            }
            $game->update($validatedData);
    
            return redirect()->route('games.index')->with('success', 'Jeu mis à jour avec succès.');
        } catch (\Exception $e) {
            return back()->withInput()->with('error', 'Erreur lors de la mise à jour du jeu.');
        }
    }

    public function destroy($id)
    {
        try {
            $game = Game::findOrFail($id);
            $game->delete();
            return redirect()->route('games.index')->with('success', 'Jeu supprimé avec succès.');
        } catch (\Exception $e) {
            return back()->with('error', 'Erreur lors de la suppression du jeu.');
        }
    }

    use Illuminate\Http\Request;

class GameApiController extends Controller
{
    public function indexAll()
    {
        $games = Game::all();
        return response()->json($games);
    }

    public function show($id)
    {
        $game = Game::find($id);
        if (!$game) {
            return response()->json(['message' => 'Jeu non trouvé'], 404);
        }
        return response()->json($game);
    }

    public function category($category)
    {
        $games = Game::where('genre', $category)->get();
        if ($games->isEmpty()) {
            return response()->json(['message' => 'Aucun jeu trouvé pour cette catégorie'], 404);
        }
        return response()->json($games);
    }
}
}
