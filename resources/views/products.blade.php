<x-app-layout>

<div class="container mx-auto py-6 ">
  <h2 class="text-lg font-semibold text-white text-center">Gestion de produits</h2>
  <div class="flex flex-col mt-6">
    <div class=" mx-auto overflow-x-auto">
      <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
        <div class="shadow overflow-hidden  sm:rounded-lg">
          <table class="min-w-full divide-y divide-gray-200">
            <thead class="bg-gray-50">
              <tr>
                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-black uppercase tracking-wider">
                  Image du produit
                </th>
                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-black uppercase tracking-wider">
                  Nom du produit
                </th>
                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-black uppercase tracking-wider">
                  Prix du produit
                </th>
                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-black uppercase tracking-wider">
                  Catégories du produit
                </th>
                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-black uppercase tracking-wider">
                  Nombre de stock
                </th>
                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-black uppercase tracking-wider">
                  ID du produit
                </th>
                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-black uppercase tracking-wider">
                  Modifier/Supprimer
                </th> 
              </tr>
            </thead>
            <tbody class="bg-white divide-y divide-gray-200">
                @foreach ($products as $product)
                <tr>
                    <td class="px-6 py-4 whitespace-nowrap">
                        <div class="flex-shrink-0 h-10 w-10">{{ $product->name }}</div>
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
