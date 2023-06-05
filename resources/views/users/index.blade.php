<x-app-layout>

  <div class="flex flex-col ">
    <div class="-my-2 overflow-x-auto">
      <div class="py-2 align-middle inline-block w-full sm:px-6 lg:px-8">
        <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
          <table class="min-w-full divide-y divide-gray-200">
            <thead class="bg-blue-800">
                <tr>
                    <th scope="col" class="px-11 py-3 text-left text-xs font-medium text-black uppercase tracking-wider">Nom</th>
                    <th scope="col" class="px-11 py-3 text-left text-xs font-medium text-black uppercase tracking-wider">Adresse mail</th>
                    <th scope="col" class="px-11 py-3 text-left text-xs font-medium text-black uppercase tracking-wider">Rôle</th>
                </tr>
            </thead>
            <tbody class="bg-white divide-y divide-gray-200">
              <!-- Liste des utilisateurs -->
              @foreach($users as $user)
              <tr class="even:bg-neutral-200">
                <td class="px-6 py-4 whitespace-nowrap ">
                  <div class="flex items-center">
                    <div class="ml-4">
                      <div class="text-lg font-semibold text-red-500">
                        {{ $user->name }}
                      </div>
                    </div>
                  </div>
                </td>
                <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                  <form method="GET" action="{{ route('users.edit', $user) }}" class="inline">
                    @csrf
                    <button type="submit" class="bg-blue-500  hover:bg-blue-700 text-white font-bold py-2 px-4 rounded transition-colors duration-300"><i class="fas fa-pencil-alt mr-2"></i>Modifier</button>
                  </form>
                  <form method="POST" action="{{ route('users.destroy', $user) }}" class="inline">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="text-white bg-red-600 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-red-300 dark:focus:ring-red-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2 ml-5 transition-all duration-300"><i class="fas fa-trash-alt mr-2"></i>Supprimer</button>
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

</x-app-layout>
