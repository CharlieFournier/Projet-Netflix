<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Log;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Usager;
use Illuminate\Support\Facades\Auth;

class UsagersController extends Controller
{
    /**
     * Display a listing of the resource.
     */

    public function pagelogin()
    {
         return View('Users.login');
    }

    public function index()
    {
        $usagers = usager::all();
        return view('users.liste', compact('usagers'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return View('Users.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        try {
            $usagers = new Usager($request->all());
            Log::debug($usagers);
            $usagers->save();
                }
            catch (\Throwable $e) {
                Log::debug($e);
            }
            return redirect()->route('usagers.index');
    }

    /**
     * Display the specified resource.
     */
    public function show($usagerUsername)
    {
        $usager = Usager::where('username', $usagerUsername)->firstOrFail();
        return view('Users.show', compact('usager'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $usagerUsername)
    {
        $usager = Usager::where('username', $usagerUsername)->firstOrFail();
        return view('Users.edit', compact('usager'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $usagerUsername)
    {
        $usager = Usager::where('username', $usagerUsername)->firstOrFail();
        try {
            $usager->update($request->all());
            return redirect()->route('usagers.index')->with('message', "Mise à jour de l'utilisateur réussie!");
        } catch (\Throwable $e) {
            Log::error($e);
            return redirect()->route('usagers.index')->withErrors(['La mise à jour de l\'utilisateur n\'a pas fonctionné']);
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        try {
            $usager = Usager::findOrFail($id);
            $usager->delete();
            return redirect()->route('usagers.index')->with('message', "Suppression de l'utilisateur réussie!");
        } catch (\Throwable $e) {
            Log::error($e);
            return redirect()->route('usagers.index')->withErrors(['La suppression de l\'utilisateur n\'a pas fonctionné']);
        }
    }

    public function login(Request $request)
    {
        $reussi = Auth::attempt(['email' => $request->email, 'password' => $request->password]);
        if($reussi){
            return redirect()->route('films.index') ->with('message', "Connexion réussie");
        }
        else{
            return redirect()->route('usagers.pagelogin')->withErrors(['Informations invalides']);
        }
        
    }

}
