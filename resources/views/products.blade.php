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
                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-white uppercase tracking-wider">
                  Image du produit
                </th>
                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-white uppercase tracking-wider">
                  Nom du produit
                </th>
                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-white uppercase tracking-wider">
                  Prix du produit
                </th>
                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-white uppercase tracking-wider">
                  Catégories du produit
                </th>
                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-white uppercase tracking-wider">
                  Nombre de stock
                </th>
                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-white uppercase tracking-wider">
                  ID du produit
                </th>
              </tr>
            </thead>
            <tbody class="bg-white divide-y divide-gray-200">
              <tr>
                <td class="px-6 py-4 whitespace-nowrap">
                  <div class="flex-shrink-0 h-10 w-10">
                    <img class="h-10 w-10 rounded-full" src="image-produit.jpg" alt="">
                  </div>
                </td>
                <td class="px-6 py-4 whitespace-nowrap">
                  <div class="text-sm font-medium text-gray-900">
                    Nom du produit
                  </div>
                </td>
                <td class="px-6 py-4 whitespace-nowrap">
                  <div class="text-sm font-medium text-gray-900">
                    <input type="text" class="w-24 border rounded px-2 py-1" value="49.99">
                  </div>
                </td>
                <td class="px-6 py-4 whitespace-nowrap">
                  <div class="flex flex-col">
                    <div class="flex items-center mb-2">
                      <span class="mr-2">Catégorie 1</span>
                      <button class="bg-blue-500 hover:bg-blue-700 text-black font-bold py-1 px-2 rounded-full">
                        Modifier
                      </button>
                    </div>
                    <div class="flex items-center">
                      <span class="mr-2">Catégorie 2</span>
                      <button class="bg-slate-400 text-black font-bold py-1 px-2 rounded-full">
                        Modifier
                      </button>
                    </div>
                  </div>
                </td>
                <td class="px-6 py-4 whitespace-nowrap">
                  <div class="text-sm font-medium text-gray-900">
                    <input type="text" class="w-24 border rounded px-2 py-1" value="10">
                  </div>
                </td>
                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                  ID-123456
                </td>
              </tr>
              <!-- Ajoutez d'autres lignes de tableau pour plus de produits -->
              <tr>
                <td class="px-6 py-4 whitespace-nowrap">
                  <div class="flex-shrink-0 h-10 w-10">
                    <img class="h-10 w-10 rounded-full" src="image-produit.jpg" alt="">
                  </div>
                </td>
                <td class="px-6 py-4 whitespace-nowrap">
                  <div class="text-sm font-medium text-gray-900">
                    Nom du produit
                  </div>
                </td>
                <td class="px-6 py-4 whitespace-nowrap">
                  <div class="text-sm font-medium text-gray-900">
                    <input type="text" class="w-24 border rounded px-2 py-1" value="49.99">
                  </div>
                </td>
                <td class="px-6 py-4 whitespace-nowrap">
                  <div class="flex flex-col">
                    <div class="flex items-center mb-2">
                      <span class="mr-2">Catégorie 1</span>
                      <button class="bg-blue-500 hover:bg-blue-700 text-black font-bold py-1 px-2 rounded-full">
                        Modifier
                      </button>
                    </div>
                    <div class="flex items-center">
                      <span class="mr-2">Catégorie 2</span>
                      <button class="bg-slate-400 text-black font-bold py-1 px-2 rounded-full">
                        Modifier
                      </button>
                    </div>
                  </div>
                </td>
                <td class="px-6 py-4 whitespace-nowrap">
                  <div class="text-sm font-medium text-gray-900">
                    <input type="text" class="w-24 border rounded px-2 py-1" value="10">
                  </div>
                </td>
                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                  ID-123456
                </td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
</div>

   
 
</x-app-layout>
