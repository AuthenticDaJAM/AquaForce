<nav x-data="{ open: false }" class="bg-sky-600 border-b border-sky-950">
    <!-- Primary Navigation Menu -->
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between h-16">
            <div class="flex">
                <!-- Logo -->
                <div class="shrink-0 flex items-center">
                    <a href="{{ route('home') }}">
                    <img src="{{ asset('images/icon.png') }}" alt="" class="block h-9 w-auto">
                    </a>
                </div>
                <!-- Navigation Links -->
                <div class="hidden space-x-8 sm:-my-px sm:ms-10 sm:flex">
                    <x-nav-link href="{{ route('home') }}" :active="request()->routeIs('home')">
                        {{ __('Página principal') }}
                    </x-nav-link>
                </div>
                <!-- About us dropdown -->
                <div class="hidden sm:flex sm:items-center sm:ms-6">
                    <x-dropdown  align="left" width="48">
                    <div class="hidden space-x-8 sm:-my-px sm:ms-10 sm:flex">
                        <x-slot name="trigger">
                            <x-nav-link style="height:66px" :active="request()->routeIs('about-us', 'contact')">
                                AquaForce
                            </x-nav-link>
                        </x-slot>
                    </div>
                    <x-slot name="content">
                        <x-dropdown-link href="{{ route('about-us') }}">
                            Sobre AquaForce
                        </x-dropdown-link>
                        <x-dropdown-link>
                            Contacto
                        </x-dropdown-link>
                    </x-slot>
                    </x-dropdown>

                </div>
                <div class="hidden space-x-8 sm:-my-px sm:ms-10 sm:flex">
                    <x-nav-link href="#content2">
                        {{ __('Content 2') }}
                    </x-nav-link>
                </div>
                
                <div class="hidden space-x-8 sm:-my-px sm:ms-10 sm:flex">
                    <x-nav-link href="{{ route('home') }}">
                        {{ __('Content 3') }}
                    </x-nav-link>
                </div>
            </div>

            <div class="hidden sm:flex sm:items-center sm:ms-6">
            @if (Auth::check())
                <!-- Settings Dropdown -->
                <div class="ms-3 relative">
                    <x-dropdown align="right" width="48">
                        <x-slot name="trigger">
                            <span class="inline-flex rounded-md">
                                    <button type="button" class="inline-flex items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md text-gray-500 bg-white hover:text-gray-700 focus:outline-none focus:bg-gray-50 active:bg-gray-50 transition ease-in-out duration-150">
                                        {{ Auth::user()->name }}

                                        <svg class="ms-2 -me-0.5 h-4 w-4" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
                                        </svg>
                                    </button>
                                </span>
                        </x-slot>

                        <x-slot name="content">
                            <!-- Administración de la cuenta, dispositivos y configuración general -->
                            <div class="block px-4 py-2 text-xs text-gray-400">
                                {{ __('Administración de dispositivos') }}
                            </div>

                            <x-dropdown-link href="{{ route('devices') }}">
                                {{ __('Ver dispositivos') }}
                            </x-dropdown-link>

                            <x-dropdown-link href="{{ route('profile.show') }}">
                                {{ __('Adquirir nuevo dispositivo') }}
                            </x-dropdown-link>

                            <div class="border-t border-gray-200"></div>

                            <div class="block px-4 py-2 text-xs text-gray-400">
                                {{ __('Administración de cuenta') }}
                            </div>

                            <x-dropdown-link href="{{ route('profile.show') }}">
                                {{ __('Perfil') }}
                            </x-dropdown-link>

                            <div class="border-t border-gray-200"></div>

                            <!-- Authentication -->
                            <form method="POST" action="{{ route('logout') }}" x-data>
                                @csrf

                                <x-dropdown-link href="{{ route('logout') }}"
                                         @click.prevent="$root.submit();">
                                    {{ __('Cerrar sesión') }}
                                </x-dropdown-link>
                            </form>
                        </x-slot>
                    </x-dropdown>
                </div>
            @else
                <!-- Display login/register link if the user is not logged in -->
                <span class="inline-flex rounded-md">
                    <a href="{{ route('login') }}" class="inline-flex items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md text-gray-50 hover:text-cyan-500 focus:outline-none">
                        Iniciar Sesión
                    </a>
                </span>
                <span class="inline-flex rounded-md">
                    <a href="{{ route('register') }}" class="inline-flex items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md text-gray-50 hover:text-cyan-500 focus:outline-none">
                        Registrarse
                    </a>
                </span>
            @endif
            </div>
        </div>
    </div>
</nav>
