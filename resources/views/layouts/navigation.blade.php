<nav x-data="{ open: false }" class="bg-white dark:bg-gradient-to-b from-indigo-600 to-blue-800 border-b border-gray-100 dark:border-gray-700 w-1/6 h-screen fixed top-0 left-0 flex flex-col">
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
                                Catégories
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('products.index') }}" class="flex items-center px-4 py-2 text-gray-800 hover:bg-gray-100 dark:text-gray-200 dark:hover:bg-indigo-400">
                                <i class="fas fa-shopping-cart mr-2"></i>
                                Produits
                            </a>
                        </li>
                        <li>
                            <a href="#" class="flex items-center px-4 py-2 text-gray-800 hover:bg-gray-100 dark:text-gray-200 dark:hover:bg-indigo-400">
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
            <!-- Hamburger -->
            <div class="flex items-center -mr-2">
                <button @click="open = !open" class="inline-flex items-center justify-center p-2 text-gray-400 dark:text-gray-200 hover:text-gray-500 dark:hover:text-gray-300 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-indigo-500">
                    <span class="sr-only">Toggle navigation</span>
                    <svg x-show="!open" class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
                    </svg>
                    <svg x-show="open" class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                    </svg>
                </button>
            </div>
        </div>
    </div>

    <!-- Responsive Navigation Menu -->
    <div :class="{'block': open, 'hidden': !open}" class="pb-4">
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
                    Catégories
                </a>
            </li>
            <li>
                <a href="{{ route('products.index') }}" class="flex items-center px-4 py-2 text-gray-800 hover:bg-gray-100 dark:text-gray-200 dark:hover:bg-indigo-400">
                    <i class="fas fa-shopping-cart mr-2"></i>
                    Produits
                </a>
            </li>
            <li>
                <a href="#" class="flex items-center px-4 py-2 text-gray-800 hover:bg-gray-100 dark:text-gray-200 dark:hover:bg-indigo-400">
                    <i class="fas fa-users mr-2"></i>
                    Utilisateurs
                </a>
            </li>
            <li>
                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <a href="{{ route('logout') }}" class="flex items-center px-4 py-2 text-gray-800 hover:bg-gray-100 dark:text-gray-200 dark:hover:bg-indigo-400" onclick="event.preventDefault(); this.closest('form').submit();">
                        <i class="fas fa-sign-out-alt mr-2"></i>
                        Déconnexion
                    </a>
                </form>
            </li>
        </ul>
    </div>
</nav>
