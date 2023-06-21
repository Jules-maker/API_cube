<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Modifier un utilisateur') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <div class="p-6 sm:px-20 bg-white border-b border-gray-200">
                    <form method="POST" action="{{ route('users.update', $user) }}">
                        @csrf
                        @method('PUT')

                        <div class="mt-4 text-sm font-medium text-gray-900">
                            <label for="name" class="block font-medium text-sm mb-1 text-gray-700">Nom de l'utilisateur</label>
                            <input id="name" class="border-2 border-gray-300 px-2 py-1 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-600 focus:border-transparent block w-full" type="text" name="name" value="{{ old('name', $user->name) }}" required autofocus />
                        </div>
                        <div class="mt-4 text-sm font-medium text-gray-900">
                            <label for="email" class="block font-medium text-sm mb-1 text-gray-700">Email</label>
                            <input id="email" class="border-2 border-gray-300 px-2 py-1 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-600 focus:border-transparent block w-full" type="text" name="email" value="{{ old('email', $user->email) }}" required autofocus />
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
