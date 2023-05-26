<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{

    /**
     * Display a listing of the resource.
     */
    public function index()
{
    $products = Product::all();

    return view('products', ['products' => $products]);
    
}

public function dashboard()
{
    $products = Product::select('label', 'stock_available')->get();

    return view('dashboard', ['products' => $products]);
}


    // return view('dashboard', compact('products'));


    

    public function create()
    {
        return view('products.create');
    }
    
    public function store(Request $request)
    {
        // Validation des données de la requête
        $validatedData = $request->validate([
            'label' => 'required',
            'price' => 'required|numeric',
            'stock_available' => 'required|integer',
            'picture' => 'required|image|max:2048',
        ]);
    
        // // Enregistrement de l'image
        // $path = $request->file('picture')->store('public/images');
        // $imagePath = Storage::url($path);
            
        // // Création d'un nouveau produit avec les données de la requête et le chemin de l'image
        // $product = new Product([
        //     'label' => $validatedData['label'],
        //     'price' => $validatedData['price'],
        //     'stock_available' => $validatedData['stock_available'],
        //     'picture_path' => $path,
        // ]);
        // $product->save();
    
        // Redirection vers la page de liste des produits
        return redirect()->route('products.index');
    }}