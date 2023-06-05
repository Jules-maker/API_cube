<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
class ProductController extends Controller
{

    /**
     * Display a listing of the resource.
     */
    public function index()
{
    $products = Product::all();
    $categories = Category::all();
    // return view('products/index', ['products' => $products]);
    return view('products.index',[
        'products' => $products,
        'categories' => $categories
    ]
    );
}


    // return view('dashboard', compact('products'));


    

    public function create()
    {
        return view('products.create');
    }
    
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Product $product)
    {
        // return view('products.edit', compact('product'));
        $categories = \App\Models\Category::all();
    return view('products.edit', compact('product', 'categories'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Product $product)
    {
        $validatedData = $request->validate([
            'label' => 'required|max:255',
            'price_unit' => 'required|decimal:0,2',
            'category_ids' => 'required',
            'stock_available' => 'required|integer',
            'gender' => 'required',
        ]);


        
        $product->update($validatedData);
        $product->categories()->sync($validatedData['category_ids']); // Associate the selected categories with the product
        return redirect()->route('products.index')->with('success', 'Le produit a été modifiée avec succès.');
        

        

    }

    /**
     * Remove the specified resource from storage.
     */
        // Validation des données de la requête
       
    
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
    
     public function destroy(Product $product)
    {
        $product->delete();
        return redirect()->route('products.index')->with('success', 'Le produit a été supprimé avec succès.');

    }
}
