<?php

namespace App\Http\Controllers;


use Illuminate\Support\Facades\Log;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Film;

class FilmsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $films = Film::all();
        return view('Films.index', compact('films'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return View('Films.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        try {
            $film = new Film($request->all());
            Log::debug($film);
            $film->save();
                }
                
            catch (\Throwable $e) {
                Log::debug($e);
            }
            return redirect()->route('films.index');
    }

    /**
     * Display the specified resource.
     */
    public function show($filmTitre)
    {
        $film = Film::where('titre', $filmTitre)->firstOrFail();
        return view('films.show', compact('film'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($filmTitre)
    {
        $film = Film::where('titre', $filmTitre)->firstOrFail();
        return View('films.edit', compact('film'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(FilmRequest $request, Film $film)
    {
        try{
                $film->titre = $request->titre;
                $film->resumer = $request->resumer;
                $film->duree = $request->duree;
                $film->annee = $request->annee;
                $film->realisateur = $request->realisateur;
                $film->producteur = $request->producteur;
                $film->lienFilm = $request->lienFilm;
                $film->pochetteURL = $request->pochetteURL;
                $film->rating = $request->rating;


                $film->save();
                return redirect()->route('films.index')->with('message', "Modification de " . $film->nom . " réussi!");
            }
            catch(\Throwable $e){
                //Gérer l'erreur
                Log::debug($e);
                return redirect()->route('films.index')->withErrors(['la modification n\'a pas fonctionné']); 
            }
            return redirect()->route('films.index');
            
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        try{
            $film = Film::findOrFail($id);
            
            $film->acteurs()->detach();
                    
              $film->delete();
                           return redirect()->route('films.index')->with('message', "Suppression de " . $film->nom . " réussi!");
            }
            catch(\Throwable $e){
               //Gérer l'erreur
               Log::debug($e);
               return redirect()->route('films.index')->withErrors(['la suppression n\'a pas fonctionné']); 
             }
                return redirect()->route('films.index');
            
    }
}
