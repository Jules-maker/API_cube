<x-app-layout>

<div class="bg-white shadow-lg rounded-lg p-6 ml-10 mr-10">
  <div class="flex justify-between items-center mb-4">
    <p class="text-gray-700 font-bold">Chiffre d'affaires mensuel</p>
  </div>
  <div class="flex items-start justify-between">
    <div class="mr-4">
      <p class="text-5xl font-bold text-blue-800">9 847 €</p>
      <p class="text-sm text-gray-500">Ce mois-ci</p>
    </div>
    <div class="flex-1">
      <canvas id="myChart" width="400" height="400"></canvas>
    </div>
  </div>
</div>


<div class="container mx-auto mt-8 flex justify-center items-center pl-10 pr-10">
  <div class="bg-white shadow-md rounded my-6 w-2/5 mr-8 text-center">
    <h3 class="text-xl font-bold mb-4 mt-8">Nombre d'utilisateurs</h3>
    <p class="text-blue-800 text-7xl font-bold">{{ \App\Models\User::count() }}</p>
    <div class="bg-white shadow-md rounded w-full">
      <div class="bg-white rounded-md p-6 text-center">
        <h3 class="text-xl font-bold mb-4">Nombre de commandes passées</h3>
        <p class="text-blue-800 text-7xl font-bold">{{ \App\Models\Order::count() }}</p>
      </div>
    </div>
  </div>
  <div class="shadow-md rounded my-6 w-3/5">
    <h1 class="text-3xl font-bold mb-2 mt-2 ml-4 text-white text-center">Liste des produits</h1>
    <table class="table-auto w-full">
      <thead>
        <tr class="bg-blue-800 text-white uppercase text-sm leading-normal">
          <th class="py-3 px-6 text-left">Nom du produit</th>
          <th class="py-3 px-6 text-left">Stock disponible</th>
        </tr>
      </thead>
      <tbody class="text-lg font-semibold text-gray-900 bg-white">
        @foreach($products as $product)
        <tr class="border-b border-gray-200 hover:bg-gray-100">
          <td class="py-3 px-6 text-left whitespace-nowrap">{{ $product->label }}</td>
          <td class="py-3 px-6 text-left">{{ $product->stock_available }}</td>
        </tr>
        @endforeach
      </tbody>
    </table>
  </div>


</div>
<div class="bg-white shadow-lg rounded-lg p-6 ml-10 mr-10">

<canvas id="myChartt"></canvas>
</div>



</x-app-layout>
