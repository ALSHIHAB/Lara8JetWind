<nav>
    <!-- header/navigation -->
    <div x-data="{mobileMenu: false}"
        class="flex justify-between w-full h-16 px-4 text-gray-200 bg-gray-600 shadow-md md:h-auto">
        <div class="left-0 flex py-2 text-2xl"><img class="w-auto h-auto md:h-24" src="https://picsum.photos/140/100" />
        </div>
        <div class="flex my-4 mr-1 space-x-4 md:hidden">
            <div class="flex space-x-2">
                <button
                    class="p-1 text-gray-500 rounded-full hover:text-gray-700 bg-gray-50 hover:bg-gray-100 active:bg-gray-200 focus:bg-gray-100">AR</button>
                <button
                    class="p-1 text-gray-500 rounded-full hover:text-gray-700 bg-gray-50 hover:bg-gray-100 active:bg-gray-200 focus:bg-gray-100">EN</button>
            </div>
            <button @click="mobileMenu = ! mobileMenu" type="button"
                class="inline-flex items-center justify-center p-2 text-gray-400 bg-white rounded-md hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-indigo-500"
                aria-expanded="false">
                <span class="sr-only">Open menu</span>
                <!-- Heroicon name: outline/menu -->
                <svg class="w-6 h-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                    stroke="currentColor" aria-hidden="true">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                </svg>
            </button>

        </div>
        <div class="flex-col items-end hidden space-y-1 md:flex">
            <div class="flex pt-2 space-x-1">
                <button class="p-1 border hover:text-white active:text-white focus:text-white">AR</button>
                <button class="p-1 border hover:text-white active:text-white focus:text-white">EN</button>
            </div>
            <div class="flex items-center justify-end space-x-1">
                <button
                    class="px-4 py-1 border rounded shadow-sm bg-sky-500 border-sky-500 hover:text-white active:text-white focus:text-white hover:bg-sky-600">Search</button>
                @if (Route::has('login'))
                    <div class="flex px-2 py-1 space-x-1 border">
                        @auth
                            <a href="{{ url('/dashboard') }}"
                                class="hover:text-white active:text-white focus:text-white">Dashboard</a>
                        @else
                            <a href="{{ url('login') }}" class="hover:text-white active:text-white focus:text-white">Login
                                |</a>
                            @if (Route::has('register'))
                                <a href="{{ url('register') }}"
                                    class="hover:text-white active:text-white focus:text-white">Sign up</a>
                            @endif
                        @endauth
                    </div>
                @endif
            </div>
            <ul class="flex flex-col items-center sm:flex-row space-x sm:space-x-1 md:space-x-2 lg:space-x-3">
                <li class="hover:text-white active:text-white focus:text-white"><a href="#">Home</a></li>
                <div class="hidden h-3 bg-gray-400 md:block w-0.5 mt-1"></div>
                <li class="hover:text-white active:text-white focus:text-white"><a href="#">Products</a></li>
                <div class="hidden h-3 bg-gray-400 md:block w-0.5 mt-1"></div>
                <li x-data="{dropdownMenu: false}" class="relative hover:text-white active:text-white focus:text-white">
                    <button @click="dropdownMenu = ! dropdownMenu" class="flex" href="#">
                        Categories
                        <svg class="w-5 h-5 mt-1 ml-2 text-gray-400 group-hover:text-gray-500"
                            xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"
                            aria-hidden="true">
                            <path fill-rule="evenodd"
                                d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                clip-rule="evenodd" />
                        </svg>
                    </button>
                    <!-- Dropdown list -->
                    <div x-show="dropdownMenu" x-on:click.away="dropdownMenu = false" style="display:none"
                        class="absolute right-0 py-2 mt-2 bg-gray-100 rounded-md shadow-xl w-36">
                        <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-400 hover:text-white">
                            Category 1 </a>
                        <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-400 hover:text-white">
                            category 2 </a>
                        <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-400 hover:text-white">
                            Category 3 </a>
                    </div>
                </li>
                <div class="hidden h-3 bg-gray-400 md:block w-0.5 mt-1"></div>
                <li x-data="{dropdownMenu2: false}"
                    class="relative hover:text-white active:text-white focus:text-white">
                    <button @click="dropdownMenu2 = ! dropdownMenu2" class="flex">
                        Activities
                        <svg class="w-5 h-5 mt-1 ml-2 text-gray-400 group-hover:text-gray-500"
                            xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"
                            aria-hidden="true">
                            <path fill-rule="evenodd"
                                d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                clip-rule="evenodd" />
                        </svg>
                    </button>
                    <!-- Dropdown list -->
                    <div x-show="dropdownMenu2" x-on:click.away="dropdownMenu2 = false" style="display:none"
                        class="absolute right-0 py-2 mt-2 bg-gray-100 rounded-md shadow-xl w-36">
                        <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-400 hover:text-white">
                            Events </a>
                        <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-400 hover:text-white">
                            Meeting </a>
                        <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-400 hover:text-white">
                            Project </a>
                    </div>
                </li>
                <div class="hidden h-3 bg-gray-400 md:block w-0.5 mt-1"></div>
                <li class="hover:text-white active:text-white focus:text-white"><a href="#">News</a></li>
                <div class="hidden h-3 bg-gray-400 md:block w-0.5 mt-1"></div>
                <li class="hover:text-white active:text-white focus:text-white"><a href="#">Forum</a></li>
                <div class="hidden h-3 bg-gray-400 md:block w-0.5 mt-1"></div>
                <li class="hover:text-white active:text-white focus:text-white"><a href="#">Service</a></li>
            </ul>
        </div>

        <!-- Mobile Menu -->
        <div x-show="mobileMenu" x-on:click.away="mobileMenu = false"
            class="absolute inset-x-0 top-0 p-2 transition origin-top-right transform md:hidden">
            <div class="bg-white rounded-lg shadow-lg ring-1 ring-black ring-opacity-5 divide-y-1 divide-gray-50">
                <div class="px-4 pt-2 pb-4 bg-gray-50">
                    <div class="flex items-center justify-between">
                        <div>
                            <img class="w-auto h-8" src="https://picsum.photos/140/100" alt="Workflow" />
                        </div>
                        <div class="-mr-2">
                            <button @click="mobileMenu = ! mobileMenu" type="button"
                                class="inline-flex items-center justify-center p-2 text-gray-400 rounded-md bg-gry-200 hover:text-gray-500 hover:bg-gray-300 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-indigo-500">
                                <span class="sr-only">Close menu</span>
                                <!-- Heroicon name: outline/x -->
                                <svg class="w-6 h-6" xmlns="http://www.w3.org/2000/svg" fill="none"
                                    viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M6 18L18 6M6 6l12 12" />
                                </svg>
                            </button>
                        </div>
                    </div>
                    <div class="mt-4">
                        <div class="grid pl-2 gap-y-4">
                            <a href="#"
                                class="flex items-center justify-center w-full px-4 py-2 text-base font-medium text-white bg-indigo-600 border border-transparent rounded-md shadow-sm hover:bg-indigo-700">
                                Search </a>

                            <a href="/" class="flex items-center p-2 -m-3 rounded-md hover:bg-gray-100">
                                <!-- Heroicon name: outline/chart-bar -->
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 text-indigo-600" fill="none"
                                    viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6" />
                                </svg>
                                <span class="ml-3 text-base font-medium text-gray-900"> Home </span>
                            </a>

                            <a href="#" class="flex items-center p-2 -m-3 rounded-md hover:bg-gray-100">
                                <!-- Heroicon name: outline/cursor-click -->
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 text-indigo-600" fill="none"
                                    viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z" />
                                </svg>
                                <span class="ml-3 text-base font-medium text-gray-900"> Products </span>
                            </a>
                            <div>
                                <a href="#" class="flex items-center p-2 -m-3 rounded-md hover:bg-gray-100">
                                    <!-- Heroicon name: outline/shield-check -->
                                    <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 text-indigo-600" fill="none"
                                        viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M8 7v8a2 2 0 002 2h6M8 7V5a2 2 0 012-2h4.586a1 1 0 01.707.293l4.414 4.414a1 1 0 01.293.707V15a2 2 0 01-2 2h-2M8 7H6a2 2 0 00-2 2v10a2 2 0 002 2h8a2 2 0 002-2v-2" />
                                    </svg>
                                    <span class="ml-3 text-base font-medium text-gray-900"> Categories </span>
                                </a>
                            </div>
                            <div class="grid grid-cols-2 py-1 pl-10 -mt-1 text-sm bg-white gap-y-3 gap-x-0">
                                <a href="#" class="text-gray-900 hover:text-gray-700"> Category 1 </a>
                                <a href="#" class="text-gray-900 hover:text-gray-700"> Category 2 </a>
                                <a href="#" class="text-gray-900 hover:text-gray-700"> Category 3 </a>

                            </div>
                            <div>
                                <a href="#" class="flex items-center p-2 -m-3 rounded-md hover:bg-gray-100">
                                    <!-- Heroicon name: outline/view-grid -->
                                    <svg class="flex-shrink-0 w-6 h-6 text-indigo-600"
                                        xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                        stroke="currentColor" aria-hidden="true">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M4 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2V6zM14 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2V6zM4 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2v-2zM14 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2v-2z" />
                                    </svg>
                                    <span class="ml-3 text-base font-medium text-gray-900"> Activities </span>
                                </a>
                            </div>
                            <div class="grid grid-cols-2 py-1 pl-10 -mt-1 text-sm bg-white gap-y-3 gap-x-0">
                                <a href="#" class="text-gray-900 hover:text-gray-700"> Project </a>
                                <a href="#" class="text-gray-900 hover:text-gray-700"> Events </a>
                                <a href="#" class="text-gray-900 hover:text-gray-700"> Workshop </a>
                                <a href="#" class="text-gray-900 hover:text-gray-700"> Training </a>
                                <a href="#" class="text-gray-900 hover:text-gray-700"> Meeting </a>
                            </div>
                            <a href="#" class="flex items-center p-2 -m-3 rounded-md hover:bg-gray-100">
                                <!-- Heroicon name: outline/refresh -->
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 text-indigo-600" fill="none"
                                    viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M21 12a9 9 0 01-9 9m9-9a9 9 0 00-9-9m9 9H3m9 9a9 9 0 01-9-9m9 9c1.657 0 3-4.03 3-9s-1.343-9-3-9m0 18c-1.657 0-3-4.03-3-9s1.343-9 3-9m-9 9a9 9 0 019-9" />
                                </svg>
                                <span class="ml-3 text-base font-medium text-gray-900"> News </span>
                            </a>
                            <a href="#" class="flex items-center p-2 -m-3 rounded-md hover:bg-gray-100">
                                <!-- Heroicon name: outline/refresh -->
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 text-indigo-600" fill="none"
                                    viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z" />
                                </svg>
                                <span class="ml-3 text-base font-medium text-gray-900"> Forum </span>
                            </a>
                            <a href="#" class="flex items-center p-2 -m-3 rounded-md hover:bg-gray-100">
                                <!-- Heroicon name: outline/refresh -->
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 text-indigo-600" fill="none"
                                    viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M17 8h2a2 2 0 012 2v6a2 2 0 01-2 2h-2v4l-4-4H9a1.994 1.994 0 01-1.414-.586m0 0L11 14h4a2 2 0 002-2V6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2v4l.586-.586z" />
                                </svg>
                                <span class="ml-3 text-base font-medium text-gray-900"> Services </span>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="px-5 py-4 space-y-6">
                    <div>
                        @if (Route::has('login'))
                            @auth
                                <a href="{{ url('/dashboard') }}"
                                    class="flex items-center justify-center w-full px-4 py-2 text-base font-medium text-white bg-indigo-600 border border-transparent rounded-md shadow-sm hover:bg-indigo-700">
                                    Dashboard </a>
                            @else
                                @if (Route::has('register'))
                                    <a href="{{ route('register') }}"
                                        class="flex items-center justify-center w-full px-4 py-2 text-base font-medium text-white bg-indigo-600 border border-transparent rounded-md shadow-sm hover:bg-indigo-700">
                                        Sign up </a>
                                @endif
                                <p class="mt-6 text-base font-medium text-center text-gray-500">
                                    Existing user?
                                    <a href="{{ route('login') }}" class="text-indigo-600 hover:text-indigo-500">
                                        Sign in </a>
                                </p>

                            @endauth
                    </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
</nav>
