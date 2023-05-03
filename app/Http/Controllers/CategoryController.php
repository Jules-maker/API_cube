<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use App\Models\Product;


class CategoryController extends Controller
{
    public function index()
    {
        $categories = Category::all();
    
        return view('categories/index', ['categories' => $categories]);
    }
    

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|unique:categories',
        ]);

        Category::create($validatedData);

        return redirect()->route('categories.index')->with('success', 'La catégorie a été ajoutée avec succès.');
    }

    public function edit(Category $category)
{
    return view('categories.edit', compact('category'));
}


    public function update(Request $request, Category $category)
    {
        $validatedData = $request->validate([
            'name' => 'required|unique:categories,name,' . $category->id,
        ]);

        $category->update($validatedData);

        return redirect()->route('categories.index')->with('success', 'La catégorie a été modifiée avec succès.');
    }

    public function destroy(Category $category)
    {
        Product::where('categories_id', $category->id)->update(['categories_id' => null]);
        $category->delete();

        return redirect()->route('categories.index')->with('success', 'La catégorie a été supprimée avec succès.');
    }
}