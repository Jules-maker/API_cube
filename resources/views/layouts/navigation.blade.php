<nav x-data="{ open: false }" class="bg-white dark:bg-gradient-to-b from-indigo-600 to-blue-800 border-b border-gray-100 dark:border-gray-700 w-1/6 h-screen fixed top-0 left-0 flex flex-col fi">
    <!-- Primary Navigation Menu -->
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 h-full flex items-center justify-center">
    <div class="flex justify-between w-full">
            <div class="flex">
              

                <!-- Navigation Links -->
                <div class="flex-1">
    <ul class="space-y-4">
      <li>
        <a href="{{ route('dashboard') }}" class="flex items-center px-4 py-2 text-gray-800 hover:bg-gray-100 dark:text-gray-200 dark:hover:bg-indigo-400">
        <i class="fas fa-home mr-2"></i>
          Dashboard
        </a>
      </li>
      <li>
        <a href="{{ route('keywords.index') }}" class="flex items-center px-4 py-2 text-gray-800 hover:bg-gray-100 dark:text-gray-200 dark:hover:bg-indigo-400">
        <i class="fas fa-key mr-2"></i>
          Mots clés et réponses
        </a>
      </li>
      <li>
      <a href="{{ route('categories.index') }}" class="flex items-center px-4 py-2 text-gray-800 hover:bg-gray-100 dark:text-gray-200 dark:hover:bg-indigo-400">
      <i class="fas fa-list-alt mr-2"></i>
          Categories
        </a>
      </li>
      <li>
        <a href="{{ route('products.index') }}" class="flex items-center px-4 py-2 text-gray-800 hover:bg-gray-100 dark:text-gray-200 dark:hover:bg-indigo-400">
        <i class="fas fa-shopping-cart mr-2"></i>
          Produits
        </a>
      </li>
      <li>
      
        <i class="fas fa-users mr-2"></i>
          Données utilisateurs
        </a>
      </li>
      <li>
        <a href="{{ route('order_status') }}" class="flex items-center px-4 py-2 text-gray-800 hover:bg-gray-100 dark:text-gray-200 dark:hover:bg-indigo-400">
        <i class="fas fa-truck mr-2"></i>
          Commandes
        </a>
      </li>
      <li>
        <a href="{{ route('profile.edit') }}" class="flex items-center px-4 py-2 text-gray-800 hover:bg-gray-100 dark:text-gray-200 dark:hover:bg-indigo-400">
        <i class="fas fa-cog mr-2"></i>
          Paramètres
        </a>
      </li>
      <div class="flex-shrink-0">
    <form method="POST" action="{{ route('logout') }}">
      @csrf

      <a href="{{ route('logout') }}"
                  onclick="event.preventDefault();
                  this.closest('form').submit();"
                  class="flex items-center px-4 py-2 text-gray-800 hover:bg-gray-100 dark:text-gray-200 dark:hover:bg-indigo-400">
              
        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7" />
        </svg>
        Déconnexion
      </a>
    </form>
  </div>


  <!-- Logout Button -->
  

            <!-- Settings Dropdown -->
           

            <!-- Hamburger -->
            <div class="-mr-2 flex items-center sm:hidden">
                <button @click="open = ! open" class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 dark:text-gray-500 hover:text-gray-500 dark:hover:text-gray-400 hover:bg-gray-100 dark:hover:bg-gray-900 focus:outline-none focus:bg-gray-100 dark:focus:bg-gray-900 focus:text-gray-500 dark:focus:text-gray-400 transition duration-150 ease-in-out">
                    <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                        <path :class="{'hidden': open, 'inline-flex': ! open }" class="inline-flex" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                        <path :class="{'hidden': ! open, 'inline-flex': open }" class="hidden" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
        </div>
    </div>

    <!-- Responsive Navigation Menu -->
    <div :class="{'block': open, 'hidden': ! open}" class="hidden sm:hidden">
        <div class="pt-2 pb-3 space-y-1">
            <x-responsive-nav-link :href="route('dashboard')" :active="request()->routeIs('dashboard')">
                {{ __('Dashboard') }}
            </x-responsive-nav-link>
        </div>

        <!-- Responsive Settings Options -->
        <div class="pt-4 pb-1 border-t border-gray-200 dark:border-gray-600">
            <div class="px-4">
                <div class="font-medium text-base text-gray-800 dark:text-gray-200">{{ Auth::user()->name }}</div>
                <div class="font-medium text-sm text-gray-500">{{ Auth::user()->email }}</div>
            </div>

            <div class="mt-3 space-y-1">
                <x-responsive-nav-link :href="route('profile.edit')">
                    {{ __('Profile') }}
                </x-responsive-nav-link><nav x-data="{ open: false }" class="bg-white dark:bg-gradient-to-b from-indigo-600 to-blue-800 border-b border-gray-100 dark:border-gray-700 w-1/6 h-screen fixed top-0 left-0 flex flex-col fi">
  <!-- Primary Navigation Menu -->
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 h-full flex items-center justify-center">
    <div class="flex justify-between w-full">
      <div class="flex">
        <!-- Hamburger -->
        <div class="-mr-2 flex items-center sm:hidden">
          <button @click="open = !open" class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 dark:text-gray-500 hover:text-gray-500 dark:hover:text-gray-400 hover:bg-gray-100 dark:hover:bg-gray-900 focus:outline-none focus:bg-gray-100 dark:focus:bg-gray-900 focus:text-gray-500 dark:focus:text-gray-400 transition duration-150 ease-in-out">
            <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
              <path :class="{'hidden': open, 'inline-flex': !open }" class="inline-flex" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
              <path :class="{'hidden': !open, 'inline-flex': open }" class="hidden" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
            </svg>
          </button>
        </div>
      </div>
    </div>
  </div>

  <!-- Responsive Navigation Menu -->
  <div :class="{'block': open, 'hidden': !open}" class="hidden sm:hidden">
    <div class="pt-2 pb-3 space-y-1">
      <ul class="space-y-4">
        <li>
          <a href="{{ route('dashboard') }}" class="flex items-center px-4 py-2 text-gray-800 hover:bg-gray-100 dark:text-gray-200 dark:hover:bg-indigo-400">
            <i class="fas fa-home mr-2"></i>
            Dashboard
          </a>
        </li>
        <li>
          <a href="{{ route('keywords.index') }}" class="flex items-center px-4 py-2 text-gray-800 hover:bg-gray-100 dark:text-gray-200 dark:hover:bg-indigo-400">
            <i class="fas fa-key mr-2"></i>
            Mots clés et réponses
          </a>
        </li>
        <li>
          <a href="{{ route('categories.index') }}" class="flex items-center px-4 py-2 text-gray-800 hover:bg-gray-100 dark:text-gray-200 dark:hover:bg-indigo-400">
            <i class="fas fa-list-alt mr-2"></i>
            Categories
          </a>
        </li>
        <li>
          <a href="{{ route('products.index') }}" class="flex items-center px-4 py-2 text-gray-800 hover:bg-gray-100 dark:text-gray-200 dark:hover:bg-indigo-400">
            <i class="fas fa-shopping-cart mr-2"></i>
            Produits
          </a>
        </li>
        <li>
         
            <i class="fas fa-users mr-2"></i>
            Données utilisateurs
          </a>
        </li>
        <li>
          <a href="{{ route('order_status') }}" class="flex items-center px-4 py-2 text-gray-800 hover:bg-gray-100 dark:text-gray-200 dark:hover:bg-indigo-400">
            <i class="fas fa-truck mr-2"></i>
            Commandes
          </a>
        </li>
        <li>
          <a href="{{ route('profile.edit') }}" class="flex items-center px-4 py-2 text-gray-800 hover:bg-gray-100 dark:text-gray-200 dark:hover:bg-indigo-400">
            <i class="fas fa-cog mr-2"></i>
            Paramètres
          </a>
        </li>
        <li>
          <form method="POST" action="{{ route('logout') }}">
            @csrf
            <a href="{{ route('logout') }}" onclick="event.preventDefault(); this.closest('form').submit();" class="flex items-center px-4 py-2 text-gray-800 hover:bg-gray-100 dark:text-gray-200 dark:hover:bg-indigo-400">
              <i class="fas fa-sign-out-alt mr-2"></i>
              Déconnexion
            </a>
          </form>
        </li>
      </ul>
    </div>
  </div>
</nav>


                <!-- Authentication -->
                <form method="POST" action="{{ route('logout') }}">
                    @csrf

                    <x-responsive-nav-link :href="route('logout')"
                            onclick="event.preventDefault();
                                        this.closest('form').submit();">
                        {{ __('Log Out') }}
                    </x-responsive-nav-link>
                </form>
            </div>
        </div>
    </div>
</nav>