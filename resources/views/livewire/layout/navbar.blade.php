<div>
    <nav class="bg-white border-gray-200">
        <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
            <a href="https://waqtuns.com/" class="flex items-center space-x-3 rtl:space-x-reverse">
                <img src="https://www.waqtuns.com/waqtuns.png" class="h-8" alt="Flowbite Logo" />
                {{-- <span class="self-center text-2xl font-semibold whitespace-nowrap">Flowbite</span> --}}
            </a>
            <button data-collapse-toggle="navbar-default" type="button"
                class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200"
                aria-controls="navbar-default" aria-expanded="false">
                <span class="sr-only">Open main menu</span>
                <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                    viewBox="0 0 17 14">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M1 1h15M1 7h15M1 13h15" />
                </svg>
            </button>
            <div class="hidden w-full md:block md:w-auto" id="navbar-default">
                <ul
                    class="font-medium flex flex-col p-4 md:p-0 mt-4 border border-gray-100 rounded-lg bg-gray-50 md:flex-row md:space-x-8 rtl:space-x-reverse md:mt-0 md:border-0 md:bg-white ">
                    <li>
                        <x-nav-link href="{{ route('dashboard') }}" :active="request()->routeIs('dashboard')" wire:navigate>
                            Dashboard
                        </x-nav-link>
                    </li>
                    <li>
                        <x-nav-link href="{{ route('produk.data') }}" :active="request()->routeIs('produk.data')" wire:navigate>
                            Produk
                        </x-nav-link>
                    </li>
                    <li>
                        <x-nav-link href="{{ route('user.keranjang') }}" :active="request()->routeIs('user.keranjang')" wire:navigate>
                            Keranjang
                        </x-nav-link>
                    </li>
                    @if (!Auth::check())
                        <!-- Tampilkan jika pengguna belum login -->
                        <li>
                            <a href="{{ route('login') }}" class="block py-2 px-3 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0">Login</a>
                        </li>
                        <li>
                            <a href="{{ route('register') }}" class="block py-2 px-3 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0">Register</a>
                        </li>
                    @else
                        <!-- Tampilkan jika pengguna sudah login -->
                        <li>
                            <a href="{{ route('profile') }}" class="block py-2 px-3 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0">profile</a>
                        </li>
                        <li>
                            <x-nav-link wire:click="logout" class="cursor-pointer">
                                logout
                            </x-nav-link>
                        </li>
                    @endif
                </ul>
            </div>
        </div>
    </nav>

</div>
