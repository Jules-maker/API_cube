<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Http\Request;

class MessagesController extends BaseController
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
            $response = "Désolé, je n'ai pas compris. Pouvez-vous reformuler ?";
        }

        return response()->json($response);
    }

    // Si le message n'a pas été envoyé, renvoyer un message d'erreur
    $response = "Désolé, nous n'avons pas reçu votre message.";
    return response()->json($response);
}
}
