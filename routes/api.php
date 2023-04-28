<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
// ce sont des exemples
// Route::group([
//     'middleware' => 'auth.optional:api'
// ], function () {
    /* Route::get('/products/search',[ProductController::class,'search']);
    Route::apiRessource('/products',ProductController::class);
     ou Route::apiRessource('products',ProductController::class);*/
// });
/*pour les controller
public function index(Request $request)
{
    if(Auth::check()){
        dd(Auth::user());
       
    }else{
        je ne suis pas connecté return response()->json(['error'=>'i faut se connecter'],401);
    }

}
*/