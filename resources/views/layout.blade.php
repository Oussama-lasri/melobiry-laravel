{{-- {{dd($playlists)}} --}}
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="tailwind.css" rel="stylesheet" />
    @livewireStyles
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://cdn.tailwindcss.com"></script>
    <title>musicOnline</title>
</head>

<body class="flex flex-col bg-[#121212] h-screen">
    <div class="flex flex-grow overflow-auto">
        <aside
            class="bg-black w-[256px] text-[#b2b2b2] overflow-hidden flex flex-col fixed lg:sticky top-0 z-30 h-screen lg:h-auto peer">
            <a href="#" class="text-white inline-block my-6 px-6 w-full font-extrabold text-2xl">
                MusicOnline
            </a>
            <nav>
                <a href="/" class="flex items-center text-white bg-[#282828] mx-2 px-4 py-2 rounded">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6" />
                    </svg>
                    <span class="ml-4 text-sm font-semibold">Home</span>
                </a>
                <a href="#" class="flex items-center hover:text-white mx-2 px-4 py-2 rounded duration-300">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                    </svg>
                    <span class="ml-4 text-sm font-semibold">Search</span>
                </a>
                {{-- add playlist --}}
                <a href="" class="flex items-center hover:text-white mx-2 px-4 py-2 rounded duration-300 mb-6">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M9 17V7m0 10a2 2 0 01-2 2H5a2 2 0 01-2-2V7a2 2 0 012-2h2a2 2 0 012 2m0 10a2 2 0 002 2h2a2 2 0 002-2M9 7a2 2 0 012-2h2a2 2 0 012 2m0 10V7m0 10a2 2 0 002 2h2a2 2 0 002-2V7a2 2 0 00-2-2h-2a2 2 0 00-2 2" />
                    </svg>
                    <span class="ml-4 text-sm font-semibold">Your Library</span>
                </a>
                {{-- CREATE PLAYLIST --}}
                <a data-modal-target="create-playlist-modal" data-modal-toggle="create-playlist-modal"
                    class="flex cursor-pointer items-center hover:text-white mx-2 px-4 py-2 rounded duration-300">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M12 9v3m0 0v3m0-3h3m-3 0H9m12 0a9 9 0 11-18 0 9 9 0 0118 0z" />
                    </svg>
                    <span class="ml-4 text-sm font-semibold">Create Playlist</span>
                </a>
                {{-- playlists --}}
                <a id="dropdownDefaultButton" data-dropdown-toggle="dropdown"
                    class="flex cursor-pointer items-center hover:text-white mx-2 px-4 py-2 rounded duration-300">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="h-6 w-6">

                        <path stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                            d="M16 17a3 3 0 0 1-3 3h-2a3 3 0 0 1 0-6h2a3 3 0 0 1 1 .17V1l6-1v4l-4 .67V17zM0 3h12v2H0V3zm0 4h12v2H0V7zm0 4h12v2H0v-2zm0 4h6v2H0v-2z"
                            fill="gray"></path>
                    </svg>
                    <span class="ml-4 text-sm font-semibold">Playlist</span>
                </a>
                <!-- Dropdown playlists -->
                <div id="dropdown"
                    class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700">
                    <ul class="py-2 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="dropdownDefaultButton">
                        @if (count($playlists) > 0)
                            @foreach ($playlists as $playlist)
                                <li>
                                    <a href="{{ asset('playlist/' . $playlist->id . '/show') }}"
                                        class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">{{ $playlist->name }}</a>
                                </li>
                            @endforeach
                        @else
                            <li><a
                                    class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">
                                    not existe </a></li>
                        @endif

                    </ul>
                </div>
                {{-- @foreach ($playlists as $playlist)
                    <a href="">{{ $playlist->name }}</a><br>
                @endforeach --}}

                {{-- **************** --}}
                <a href="#" class="flex items-center hover:text-white mx-2 px-4 py-2 rounded duration-300">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z" />
                    </svg>
                    <span class="ml-4 text-sm font-semibold">Liked Songs</span>
                </a>
            </nav>
            <footer class="mt-auto mb-8 ml-6">
                <ul>
                    <li>
                        <a href="#" class="text-[11px] hover:underline py-2">Cookies</a>
                    </li>
                    <li>
                        <a href="#" class="text-[11px] hover:underline py-2">Privacy</a>
                    </li>
                </ul>
            </footer>
        </aside>
        <a href=""
            class="fixed  inset-0 bg-black opacity-0 peer-target:opacity-50 pointer-events-none peer-target:pointer-events-auto z-20 lg:hidden cursor-default transition-opacity"></a>
        <div class="flex-1 overflow-auto">
            <header
                class="bg-[#070707] flex-1 h-20 flex justify-end items-center py-[10px]  sm:px-[32px] sticky top-0 z-10">
                {{-- @include('partials._search') --}}
                {{-- @livewire('search') --}}
                @auth
                    <a href="/Users.register"
                        class="text-white text-xs font-semibold leading-5 tracking-widest uppercase py-[9px] px-[17px] sm:px-[38px] rounded-full hover:scale-105">welcome
                        {{ auth()->user()->name }}
                    </a>
                    <form action="/Users.logout" method="post">
                        @csrf
                        <button type="submit"
                            class="text-white text-xs font-semibold leading-5 tracking-widest uppercase py-[9px] px-[17px] sm:px-[38px] rounded-full hover:scale-105">logout</button>
                    </form>
                    @if (auth()->user()->role == '1')
                    <a class="text-white text-xs font-semibold leading-5 tracking-widest uppercase py-[9px] px-[17px] sm:px-[38px] rounded-full hover:scale-105"
                        href="{{ asset('/admin/dashboard') }}"><i class="fa-solid fa-gear "
                            style="color: #ffffff;"></i>dashboard</a>
                @endif
                @else
                    <div>
                        <a href="/Users.register"><button
                                class="text-white text-xs font-semibold leading-5 tracking-widest uppercase py-[9px] px-[17px] sm:px-[38px] rounded-full hover:scale-105">Register</button></a>
                        <a href="/Users.login"><button
                                class="bg-white text-[#2e2e2e] text-xs font-semibold leading-5 tracking-widest uppercase py-[9px] px-[17px] sm:px-[38px] rounded-full hover:scale-105">LogIn</button></a>
                    </div>
                @endauth
                
            </header>
            <main class="text-white relative">
                <div class="h-[275px] bg-gradient-to-b from-[#1f1f1f] to-[#121212] absolute w-full"></div>
                <div class="relative pt-[24px] pb-[48px] px-[32px] space-y-9 max-w-screen-5xl">
                    <div>
                        <div class="flex flex-wrap justify-between items-end gap-x-6 mb-[18px]">
                            <div>
                                <h2 class="text-2xl font-semibold hover:underline capitalize">
                                    <a href="#">Liste of musics</a>
                                </h2>
                            </div>
                            <a href="#"
                                class="uppercase text-xs font-semibold tracking-widest hover:underline text-[#b3b3b3] leading-6">See
                                all</a>
                        </div>
                        @yield('content')
                    </div>

                </div>
                <x-flash-message />
            </main>
        </div>
    </div>





    {{-- modal create playlist --}}
    <!-- Main modal -->
    <div id="create-playlist-modal" tabindex="-1" aria-hidden="true"
        class="fixed top-0 left-0 right-0 z-50 hidden w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] md:h-full">
        <div class="relative w-full h-full max-w-md md:h-auto">
            <!-- Modal content -->
            <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                <button type="button"
                    class="absolute top-3 right-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-800 dark:hover:text-white"
                    data-modal-hide="create-playlist-modal">
                    <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"
                        xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd"
                            d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                            clip-rule="evenodd"></path>
                    </svg>
                    <span class="sr-only">Close modal</span>
                </button>
                <div class="px-6 py-6 lg:px-8">
                    <h3 class="mb-4 text-xl font-medium text-gray-900 dark:text-white">Create Your Playlist</h3>
                    <form class="space-y-6" method="post" action="/playlist/store">
                        @csrf
                        <div>
                            <label for="email"
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Playlist
                                Name</label>
                            <input type="text" name="name" id="email"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
                                placeholder="Playlist Name " required>
                        </div>
                        <div>
                            <button type="submit"
                                class="w-full text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Create</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.4/flowbite.min.js"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.4/flowbite.min.css" rel="stylesheet" />
    <script src="//unpkg.com/alpinejs" defer></script>
    @livewireScripts
</body>

</html>
