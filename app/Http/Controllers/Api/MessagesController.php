<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Http\Request;
use App\Models\Keyword;
use App\Models\Response;

class MessagesController extends Controller
{
    use AuthorizesRequests, ValidatesRequests;

    public function handleMessage(Request $request)
{
    // Récupération du message de l'utilisateur
    $message = $request->input('message');

    // Vérification que le message a bien été envoyé
    if ($message) {

        // Liste des mots clés pour "Bonjour"
        $mots_cles_bonjour = array('Bonjour', 'bonjour', 'Coucou', 'coucou', 'Salut', 'salut', 'Hey', 'hey', 'Hello', 'hello', 'Hi', 'hi');

        // Vérification de la présence d'un mot clé dans le message
        if (str_replace($mots_cles_bonjour, '', $message) !== $message) {
            $response = "Bonjour ! Comment puis-je vous aider ?";
        } else if (strpos($message, 'au revoir') !== false) {
            $response = "Au revoir ! A bientôt.";
        } else {
            $response = [ 'message' => "Désolé, je n'ai pas compris votre question, pouvez-vous reformuler ?" ] ;
        }

        return response()->json($response);
    }

    // Si le message n'a pas été envoyé, renvoyer un message d'erreur
    $response = [ 'message' => "Désolé, nous n'avons pas reçu votre message." ] ;
    return response()->json($response);

    // $q = $request->q;
    // $keywords = explode(' ', $q);
    // $keywordsResults = [];
    // foreach($keywords as $keyword) {
    //     $response = Keyword::where(function($query) use ($keyword) {
    //         $query->orWhere('keywords', 'like', "%$keyword%");
    //     })->first();
    //     array_push($keywordsResults, $response);
    // }
    // if ($keywordsResults) {
    //     // Only run this if there are more than two keywords in the message, then filter which one has the most weight, then run normal response protocol
    //     if (count($keywordsResults) > 1) {
    //         $bestResult = array_reduce($keywordsResults, function ($carry, $item) {
    //             if (is_null($item)) return $carry; // skip null items
    //             if (is_null($carry)) return $item; // return the first non-null item
    //             return $item['weight'] > $carry['weight'] ? $item : $carry; // compare weights and return the higher one
    //           });                  
    //     } else {
    //         $bestResult = $keywordsResults[0];
    //     }
    //     // Get the response associated and do things depending on the type
    //     $response = Response::findOrFail($bestResult['response_id']);
    // } else {
    //      $response = [ 'message' => "Désolé, je n'ai pas compris votre question, pouvez-vous reformuler ?" ] ;
    //     return response()->json($response);
    // }
}
}
