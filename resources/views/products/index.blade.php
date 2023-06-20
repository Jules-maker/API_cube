<x-app-layout>
@if ($errors->any())
    <div class="alert alert-danger text-red-500">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
<div class="container mx-auto py-6 ">
  <h2 class="text-lg font-semibold text-white text-center">Gestion de produits</h2>
  <div class="flex flex-col mt-6">
    <div class=" mx-auto overflow-x-auto">
      <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
        <div class="shadow overflow-hidden  sm:rounded-lg">
          <table class="min-w-full divide-y divide-gray-200">
          <thead class="bg-blue-800">
    <tr>
        <th scope="col" class="px-11 py-3 text-center text-xs font-medium text-white uppercase tracking-wider self-center">Image</th>
        <th scope="col" class="px-11 py-3 text-center text-xs font-medium text-white uppercase tracking-wider">Nom</th>
     
        <th scope="col" class="px-11 py-3 text-center text-xs font-medium text-white uppercase tracking-wider">Prix</th>
        <th scope="col" class="px-11 py-3 text-center text-xs font-medium text-white uppercase tracking-wider">Catégorie</th>
        <th scope="col" class="px-11 py-3 text-center text-xs font-medium text-white uppercase tracking-wider">Stock</th>
        <th scope="col" class="px-11 py-3 text-center text-xs font-medium text-white uppercase tracking-wider">ID</th>
        <th scope="col" class="px-11 py-3 text-rcenter text-xs font-medium text-white uppercase tracking-wider">Actions</th>
    </tr>
</thead>
            <!-- <tbody class="bg-white divide-y divide-gray-200">
                @foreach ($products as $product)
                <tr>
                    <td class="px-6 py-4 whitespace-nowrap">
                        <div class="flex-shrink-0 h-10 w-10">{{ $product->name }}</div>
                    </td>
                </tr>
                @endforeach
            </tbody> -->
            <tbody class="bg-white divide-gray-200 divide-y">
    <tr>
        <form enctype='multipart/form-data' action="{{ route('products.store') }}" method="POST">
            @csrf
            
            <td>
                <div class="font-medium text-sm text-gray-900">
                    <input class="border-2 border-gray-300 focus:border-transparent focus:outline-none focus:ring-2 focus:ring-blue-600 px-2 py-1 mx-2 rounded-md"  id="image_input" type="file" name="imageFile" required>
                </div>
            </td>
            <td>
                <div class="font-medium text-sm text-gray-900">
                    <input class="border-2 border-gray-300 focus:border-transparent focus:outline-none focus:ring-2 focus:ring-blue-600 px-2 py-1 mx-2 rounded-md" name="label" placeholder="Description du produit">
                </div>
            </td>
            <td>
                <div class="font-medium text-sm text-gray-900">
                    <input class="border-2 border-gray-300 focus:border-transparent focus:outline-none focus:ring-2 focus:ring-blue-600 px-2 py-1 rounded-md" name="price_unit" placeholder="Prix du produit">
                </div>
            </td>
            <td>
                <div class="font-medium text-sm text-gray-900">
                    <select id="choices-multiple-remove-button" class="border-2 border-gray-300 focus:border-transparent focus:outline-none focus:ring-2 focus:ring-blue-600 mx-3 py-1 rounded-md" name="category_id" multiple required>
                        <option value="">Catégorie(s)</option>
                        @foreach($categories as $category)
                        <option value="{{ $category->id }}">{{ $category->name }}</option>
                        @endforeach
                    </select>
                </div>

            </td>
            <td>
                <div class="font-medium text-sm text-gray-900">
                    <input class="border-2 border-gray-300 focus:border-transparent focus:outline-none focus:ring-2 focus:ring-blue-600 px-2 py-1 rounded-md" name="stock_available" placeholder="Stock du produit">
                </div>
            </td>
           
       
          
            
            
            
            
            <td>
                <div class="font-medium text-sm text-gray-900">
                    <!-- <input class="border-2 border-gray-300 focus:border-transparent focus:outline-none focus:ring-2 focus:ring-blue-600 px-2 py-1 rounded-md" name="id" placeholder="ID du produit"> -->
                </div>
            </td>
            <td class="flex justify-center">
                <button class="px-5 py-2.5 mt-1 text-white bg-blue-500 font-bold hover:bg-blue-700 rounded" type="submit"><i class="mr-2 fas fa-plus-circle"></i>Ajouter</button>
            </td>
            
        </form>
    </tr>
    @foreach($products as $product)
    <tr class="even:bg-neutral-200">
        <td class="px-6 py-4 whitespace-nowrap">
            <div class="flex items-center">
                <div class="ml-4 ">
                <img src="{{ asset(Storage::url($product->picture_path)) }}" alt="image produit" class="w-10">                </div>
            </div>
        </td>
        <td class="px-6 py-4 whitespace-nowrap">
            <div class="flex items-center">
                <div class="ml-4">
                    <div class="text-black font-semibold text-lg">{{ $product->label }}</div>
                </div>
            </div>
        </td>
        <td class="px-6 py-4 whitespace-nowrap">
            <div class="flex items-center">
                <div class="ml-4">
                    <div class="text-black font-semibold text-lg">{{ $product->price_unit }} €</div>
                </div>
            </div>
        </td>
        <td class="px-6 py-4 whitespace-nowrap">
            <div class="flex items-center">
                <div class="ml-4">
                    <div class="text-black font-semibold text-lg">
                        @foreach ($product->categories as $category)
                        '{{ $category->name }}'
                        @endforeach
                    </div>
                </div>
            </div>
        </td>
        <td class="px-6 py-4 whitespace-nowrap">
            <div class="flex items-center">
                <div class="ml-4">
                    <div class="text-black font-semibold text-lg">{{ $product->stock_available }}</div>
                </div>
            </div>
        </td>
        <td class="px-6 py-4 whitespace-nowrap">
            <div class="flex items-center">
                <div class="ml-4">
                    <div class="text-black font-semibold text-lg">{{ $product->id }}</div>
                </div>
            </div>
        </td>
        <td class="font-medium text-sm px-6 py-4 text-right whitespace-nowrap">
        <form method="GET" action="{{ route('products.edit', $product) }}" class="inline">
                    @csrf
                    <button type="submit" class="bg-blue-500  hover:bg-blue-700 text-white font-bold py-2 px-4 rounded transition-colors duration-300"><i class="fas fa-pencil-alt mr-2"></i>Modifier</button>
                  </form>
            <form action="{{ route('products.destroy', $product) }}" class="inline" method="POST">
                @csrf
                @method('DELETE')
                <button class="mr-2 px-5 py-2.5 text-white bg-red-600 dark:focus:ring-red-800 duration-300 focus:outline-none focus:ring-4 focus:ring-red-300 font-medium hover:bg-gradient-to-br mb-2 ml-5 rounded-lg text-center text-sm transition-all" type="submit"><i class="mr-2 fas fa-trash-alt"></i>Supprimer</button>
            </form>
        </td>
    </tr>
    @endforeach
</tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
</div>

   
 
</x-app-layout>
