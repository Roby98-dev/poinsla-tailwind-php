<nav id="navbar" class="bg-gray-500 h-auto z-10">
    <div class="md:mx-24 mx-4">
        <div class="flex justify-between">
            <div class="flex items-center space-x-1">
                <div class="py-1">
                    <a class="navbar-brand logo" href="<?= SITEURL; ?>" title="Logo">
                        <img src="<?= SITEURL; ?>images/logo-poinsla.png" alt="Poinsla Logo" class="  w-20 md:w-28">
                    </a>
                </div>
            </div>
            <div x-data="{navData: navsData}" class="hidden md:flex items-center space-x-1">
                <template x-for="nav in navData" :key="nav">
                    <a :href="`${nav.link}`" x-text='nav.title' class="py-5 px-3 text-gray-100 hover:text-blue-400 rounded"></a>
                </template>
            </div>
            <div class="hidden md:flex items-center space-x-1">
                <a href="<?= SITEURL; ?>admin/" class="py-1 px-3 text-gray-100 bg-blue-500 rounded-lg hover:bg-blue-600 shadow-lg hover:text-gray-800">Login</a>
            </div>
            <div class="md:hidden flex items-center">
                <button id="mobile-nav-btn" class="p-1 px-2 rounded text-white hover:bg-gray-300 hover:text-black">
                    <i class="bx bx-grid-alt"></i>
                </button>
            </div>
        </div>
    </div>

    <!-- Mobile menu -->
    <div id="mobile-menu" class="hidden md:hidden shadow-md text-center border-t px-3 py-5 bg-gray-500">
        <div x-data="{navData: navsData}" class="overflow-auto whitespace-nowrap py-2">
            <template x-for="nav in navData" :key="nav">
                <a :href="`${nav.link}`" x-text='nav.title' class="py-5 px-3 text-gray-100 hover:text-black rounded"></a>
            </template>
        </div>
        <div class="items-center mt-2 space-x-1">
            <a href="<?= SITEURL; ?>admin/" class="py-1 px-3 text-gray-100 bg-blue-500 rounded-lg hover:bg-blue-600 shadow-lg hover:text-gray-800">Login</a>
        </div>
    </div>
</nav>

<!-- Bottom nav -->
<div class="fixed flex bottom-0 inset-x-0 bg-gray-500 justify-between text-sm md:hidden uppercase font-mono border-t z-10">
    <a href="<?= SITEURL; ?>" class="block text-center p-2 w-full text-gray-100 hover:bg-gray-200 hover:text-gray-900">
        <i class="bx bx-home text-xl"></i> <br>Home
    </a>
    <a href="<?= SITEURL; ?>categories.php" class="block text-center p-2 w-full text-gray-100 hover:bg-gray-200 hover:text-gray-900">
        <i class="bx bx-search text-xl"></i> <br>Discover
    </a>
    <a href="<?= SITEURL; ?>portfolios.php" class="block text-center p-2 w-full text-gray-100 hover:bg-gray-200 hover:text-gray-900">
        <i class="bx bx-movie text-xl"></i> <br>Spoils
    </a>
    <a href="<?= SITEURL; ?>admin/" class="block text-center p-2 w-full text-gray-100 hover:bg-gray-200 hover:text-gray-900">
        <i class="bx bx-user text-xl"></i> <br>Me
    </a>
</div>