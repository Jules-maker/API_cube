<x-app-layout>
   <x-slot name="header">
      <h2 class="font-semibold text-xl text-gray-800 leading-tight">
         {{ __('Modifier un produit') }}
      </h2>
   </x-slot>
   <div class="py-12">
      <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
         <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
            <div class="p-6 sm:px-20 bg-white border-b border-gray-200">
               <form method="POST" action="{{ route('products.update', $product) }}">
                  @csrf
                  @method('PUT')
                  <div class="mt-4 text-sm font-medium text-gray-900">
                     <label for="name" class="block font-medium text-sm mb-1 text-gray-700">Nom du produit</label>
                     <input id="name" class="border-2 border-gray-300 px-2 py-1 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-600 focus:border-transparent block w-full" type="text" name="label" value="{{ old('label', $product->label) }}" required autofocus />
                     <label for="price" class="block font-medium text-sm mb-1 text-gray-700">Prix du produit</label>
                     <input id="price" class="border-2 border-gray-300 px-2 py-1 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-600 focus:border-transparent block w-full" type="text" name="price_unit" value="{{ old('price', $product->price_unit) }}" required autofocus />
                     <label for="category" class="block font-medium text-sm mb-1 text-gray-700">Catégorie du produit</label>
                     <select id="choices-multiple-remove-button" class="border-2 border-gray-300 focus:border-transparent focus:outline-none focus:ring-2 focus:ring-blue-600 mx-3 py-1  rounded-md" name="category_ids[]" multiple required>
                        <option value="" disabled>{{ $product->categories->pluck('name')->join(', ') }}</option>
                        @foreach($categories as $category)
                        <option value="{{ $category->id }}" @if(in_array($category->id, old('category_ids', $product->categories->pluck('id')->toArray()))) selected @endif>{{ $category->name }}</option>
                        @endforeach
                     </select>
                     @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif


                     <!-- <label for="category" class="block font-medium text-sm mb-1 text-gray-700">Catégorie du produit</label>
                     <input id="category" class="border-2 border-gray-300 px-2 py-1 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-600 focus:border-transparent block w-full" type="text" name="category" value="{{ old('category', $product->categories_id) }}" required autofocus /> -->
                     <label for="stock_available" class="block font-medium text-sm mb-1 text-gray-700">Stock du produit</label>
                     <input id="stock" class="border-2 border-gray-300 px-2 py-1 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-600 focus:border-transparent block w-full" type="text" name="stock_available" value="{{ old('stock', $product->stock_available) }}" required autofocus />
                     <label for="id" class="block font-medium text-sm mb-1 text-gray-700">ID du produit</label>
                     <input id="id" class="border-2 border-gray-300 px-2 py-1 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-600 focus:border-transparent block w-full" type="text" name="id" value="{{ old('id', $product->id) }}"  autofocus disabled />
                     <label for="gender" class="block font-medium text-sm mb-1 text-gray-700">Civilité du produit
                     </label>
                     <input id="gender" class="border-2 border-gray-300 px-2 py-1 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-600 focus:border-transparent block w-full" type="text" name="gender" value="{{ old('gender', $product->gender) }}" required autofocus />
                  </div>
                  <div class="flex items-center justify-end mt-4">
                     <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded"><i class="fas fa-pencil-alt mr-2"></i>Modifier</button>
                  </div>
               </form>
            </div>
         </div>
      </div>
   </div>
</x-app-layout>