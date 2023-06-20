<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Models\Response;
use App\Models\Keyword;


class MessagesController extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;

    public function handleMessage(Request $request)
    {
    $userMessage = $request->input('message');
    
    if ($userMessage) {

        $categories = Category::all();
        if (strpos($userMessage, 'catalogue') !==false) {
            $response = "Voici les catégories disponibles : ";
            foreach ($categories as $category) {
                $response .= $category->name . '; ';
                
            }} else {
            $response = false;
        } if ($response) {
            return response()->json($response);
        }
    }

    $keywords = explode(' ', $userMessage);
    $response = $this->findResponseId($keywords);
	return response()->json($response->text_response);

    }

    private function findResponseId(array $keywords)
    {
        // Parcourez les mots-clés et recherchez l'ID de réponse correspondant
        foreach ($keywords as $keyword) {
            // Recherchez dans la base de données ou toute autre source de données pour trouver l'ID de réponse correspondant au mot-clé
            $responseId = Keyword::where(function($query) use ($keyword) {
                $query->orWhere('keywords', 'like', "%$keyword%");
            })->first()->responses_id;

            if ($responseId) {
                // Si un ID de réponse correspondant est trouvé, retournez-le
                return Response::find($responseId);
            }
        }
        return null;
    }
}
