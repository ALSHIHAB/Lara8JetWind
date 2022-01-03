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
                @foreach (config('app.languages') as $locale)
                    <a href="{{ route('setlanguage', $locale) }}"
                        class=" {{ app()->getLocale() == $locale ? ' border' : '' }} p-1 m-1 rounded-md hover:text-white active:text-white focus:text-white">
                        @if ($locale == 'ar')
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" viewBox="0 0 512 512">
                                <mask id="a">
                                    <circle cx="256" cy="256" r="256" fill="#fff" />
                                </mask>
                                <g mask="url(#a)">
                                    <path fill="#eee" d="m0 167 253.8-19.3L512 167v178l-254.9 32.3L0 345z" />
                                    <path fill="#d80027" d="M0 0h512v167H0z" />
                                    <path fill="#333" d="M0 345h512v167H0z" />
                                </g>
                            </svg>
                        @elseif ($locale == 'zh')
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" viewBox="0 0 512 512">
                                <mask id="a">
                                    <circle cx="256" cy="256" r="256" fill="#fff" />
                                </mask>
                                <g mask="url(#a)">
                                    <path fill="#d80027" d="M0 0h512v512H0z" />
                                    <path fill="#ffda44"
                                        d="m140.1 155.8 22.1 68h71.5l-57.8 42.1 22.1 68-57.9-42-57.9 42 22.2-68-57.9-42.1H118zm163.4 240.7-16.9-20.8-25 9.7 14.5-22.5-16.9-20.9 25.9 6.9 14.6-22.5 1.4 26.8 26 6.9-25.1 9.6zm33.6-61 8-25.6-21.9-15.5 26.8-.4 7.9-25.6 8.7 25.4 26.8-.3-21.5 16 8.6 25.4-21.9-15.5zm45.3-147.6L370.6 212l19.2 18.7-26.5-3.8-11.8 24-4.6-26.4-26.6-3.8 23.8-12.5-4.6-26.5 19.2 18.7zm-78.2-73-2 26.7 24.9 10.1-26.1 6.4-1.9 26.8-14.1-22.8-26.1 6.4 17.3-20.5-14.2-22.7 24.9 10.1z" />
                                </g>
                            </svg>
                        @elseif($locale=='en')
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" viewBox="0 0 512 512">
                                <mask id="a">
                                    <circle cx="256" cy="256" r="256" fill="#fff" />
                                </mask>
                                <g mask="url(#a)">
                                    <path fill="#eee"
                                        d="M0 256 256 0h256v55.7l-20.7 34.5 20.7 32.2v66.8l-21.2 32.7L512 256v66.8l-24 31.7 24 35.1v66.7l-259.1 28.3L0 456.3v-66.7l27.1-33.3L0 322.8z" />
                                    <path fill="#d80027"
                                        d="M256 256h256v-66.8H236.9zm-19.1-133.6H512V55.7H236.9zM512 512v-55.7H0V512zM0 389.6h512v-66.8H0z" />
                                    <path fill="#0052b4" d="M0 0h256v256H0z" />
                                    <path fill="#eee"
                                        d="M15 14.5 6.9 40H-20L1.7 55.8l-8.3 25.5L15 65.5l21.6 15.8-8.2-25.4L50.2 40H23.4zm91.8 0L98.5 40H71.7l21.7 15.8-8.3 25.5 21.7-15.8 21.7 15.8-8.3-25.4L142 40h-26.8zm91.9 0-8.3 25.6h-26.8l21.7 15.8-8.3 25.5 21.7-15.8 21.6 15.7-8.2-25.3 21.7-16H207zM15 89.2l-8.3 25.5H-20l21.7 15.8-8.3 25.5L15 140l21.6 15.7-8.2-25.3 21.7-16H23.4zm91.8 0-8.3 25.5H71.8l21.7 15.8-8.3 25.5 21.7-15.8 21.6 15.7-8.2-25.3 21.7-16h-26.8zm91.8 0-8.3 25.5h-26.8l21.7 15.8-8.3 25.5 21.7-15.8 21.6 15.7-8.2-25.3 21.7-16H207zM15 163.6l-8.3 25.5H-20L1.6 205l-8.3 25.5L15 214.6l21.7 15.8-8.3-25.4 21.7-15.9H23.3zm91.8 0-8.3 25.5H71.7L93.4 205l-8.3 25.5 21.7-15.8 21.7 15.8-8.3-25.4 21.7-15.9h-26.8zm91.8 0-8.3 25.5h-26.8l21.7 15.8-8.3 25.5 21.7-15.8 21.7 15.8L212 205l21.7-15.9H207z" />
                                </g>
                            </svg>
                        @endif
                        {{-- {{ strtoupper($locale) }} --}}
                    </a>
                @endforeach
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
            class="absolute inset-x-0 top-0 p-2 transition origin-top-right transform md:hidden" style="display:none">
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
