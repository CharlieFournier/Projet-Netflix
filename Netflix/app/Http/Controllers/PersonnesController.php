<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Log;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Personne;

class PersonnesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $personnes = Personne::all();
        return view('Personnes.index', compact('personnes'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return View('Personnes.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        try {
            $personnes = new Personne($request->all());
            Log::debug($personnes);
            $personnes->save();
                }
                
            catch (\Throwable $e) {
                Log::debug($e);
            }
            return redirect()->route('personnes.index');
    }

    /**
     * Display the specified resource.
     */
    public function show($personneNom)
    {
        $personne = Personne::where('nom', $personneNom)->firstOrFail();
        return view('Personnes.show', compact('personne'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($personneNom)
    {
        $personne = Personne::where('nom', $personneNom)->firstOrFail();
        return View('Personnes.edit', compact('personne'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $personneNom)
    {
        $personne = Personne::where('nom', $personneNom)->firstOrFail();
        try{
                $personne->nom = $request->nom;
                $personne->date = $request->date;
                $personne->photo = $request->photo;


                $personne->save();
                return redirect()->route('personnes.index')->with('message', "Modification de " . $personne->nom . " réussi!");
            }
            catch(\Throwable $e){
                //Gérer l'erreur
                Log::debug($e);
                return redirect()->route('personnes.index')->withErrors(['la modification n\'a pas fonctionné']); 
            }
            return redirect()->route('personnes.index');
            
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        try{
            $personne = Personne::findOrFail($id);
            
            $personne->films()->detach();
                    
              $personne->delete();
                           return redirect()->route('personnes.index')->with('message', "Suppression de " . $personne->nom . " réussi!");
            }
            catch(\Throwable $e){
               //Gérer l'erreur
               Log::debug($e);
               return redirect()->route('personnes.index')->withErrors(['la suppression n\'a pas fonctionné']); 
             }
                return redirect()->route('personnes.index');
            
    }
    
}
