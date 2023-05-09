<x-app-layout>
<div class="bg-white dark:bg-gray-800 shadow overflow-hidden sm:rounded-lg">
    <div class="bg-white rounded-md p-6 h-52 w-52 text-center">
        <h3 class="text-lg font-bold mb-4 ">Nombre d'utilisateurs</h3>
        <p class="text-red-600 text-7xl font-bold">{{ \App\Models\User::count() }}</p>
    </div>
</div>





</x-app-layout>
