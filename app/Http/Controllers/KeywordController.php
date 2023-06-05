<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Keyword;
use App\Models\Response;


class KeywordController extends Controller
{
    // Affiche la liste des mots-clés
    public function index()
    {
        $keywords = Keyword::all();
        return view('keywords/index', compact('keywords'));
    }

    // Enregistre le nouveau mot-clé dans la base de données
    public function store(Request $request)
{
    $keyword = new Keyword;
    $keyword->keywords = $request->keyword;

    $keyword->save();

    $response = new Response;
    $response->text_response = $request->response;
    $response->save();
    $keyword->responses_id = $response->id; // Met à jour la colonne `responses_id` avec l'identifiant de la réponse correspondante

    $keyword->update(['responses_id' => $response->getKey()]);


    return redirect()->route('keywords.index')->with('success', 'Le mot clé a été ajouté avec succès.');
}

    



    // Affiche le formulaire d'édition d'un mot-clé existant
    public function edit(Keyword $keyword)
    {
        $responses = Response::all();
        return view('keywords.edit', compact('keyword', 'responses'));
    }
    
    public function update(Request $request, Keyword $keyword)
{
    $validatedData = $request->validate([
        'keyword' => 'required|string|max:255',
        'text_response' => 'required|string',
    ]);

    $keyword->keywords = $validatedData['keyword'];
    $keyword->response->text_response = $validatedData['text_response'];
    $keyword->push();

    return redirect()->route('keywords.index')->with('success', 'Le mot clé a été modifié avec succès.');
}



    

    // Supprime le mot-clé de la base de données
    public function destroy($id)
    {
        $keyword = Keyword::find($id);
        $response = $keyword->response;
        $keyword->delete();
 if ($response) {
        $response->delete();
    }
        return redirect()->route('keywords.index');
    }
}
