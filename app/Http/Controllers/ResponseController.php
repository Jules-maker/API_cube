<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Response;

class ResponseController extends Controller
{
    public function edit(Response $response)
    {
        return view('keywords/index', ['responses' => Response::all(), 'editResponse' => $response]);
    }

    public function update(Request $request, Response $response)
    {
        $response->update($request->validate([
            'response' => 'required',
        ]));

        return redirect()->route('keywords.index')->with('success', 'Réponse modifiée avec succès.');
    }
}
