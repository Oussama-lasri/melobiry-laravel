<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="tailwind.css" rel="stylesheet" />
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css"
        integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>musicOnline</title>
</head>

<body>
    <div>
        <!-- Off-canvas menu for mobile, show/hide based on off-canvas menu state. -->
        <div class="fixed inset-0 flex z-40 md:hidden" role="dialog" aria-modal="true">

            <div class="fixed inset-0 bg-gray-600 bg-opacity-75" aria-hidden="true"></div>

            <div class="relative flex-1 flex flex-col max-w-xs w-full pt-5 pb-4 bg-indigo-700">

                <div class="absolute top-0 right-0 -mr-12 pt-2">
                    <button type="button"
                        class="ml-1 flex items-center justify-center h-10 w-10 rounded-full focus:outline-none focus:ring-2 focus:ring-inset focus:ring-white">
                        <span class="sr-only">Close sidebar</span>
                        <svg class="h-6 w-6 text-white" xmlns="http://www.w3.org/2000/svg" fill="none"
                            viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M6 18L18 6M6 6l12 12" />
                        </svg>
                    </button>
                </div>
                <div class="flex-shrink-0 flex items-center px-4">
                    <img class="h-8 w-auto"
                        src="https://tailwindui.com/img/logos/workflow-logo-indigo-300-mark-white-text.svg"
                        alt="Workflow">
                </div>
                <div class="mt-5 flex-1 h-0 overflow-y-auto">
                    <nav class="px-2 space-y-1">
                        <!-- Current: "bg-indigo-800 text-white", Default: "text-indigo-100 hover:bg-indigo-600" -->
                        <a href="admin/dashboard"
                            class="bg-indigo-800 text-white group flex items-center px-2 py-2 text-base font-medium rounded-md">
                            <!-- Heroicon name: outline/home -->
                            <svg class="mr-4 flex-shrink-0 h-6 w-6 text-indigo-300" xmlns="http://www.w3.org/2000/svg"
                                fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6" />
                            </svg>
                            Dashboard
                        </a>

                        <a href="#"
                            class="text-indigo-100 hover:bg-indigo-600 group flex items-center px-2 py-2 text-base font-medium rounded-md">
                            <!-- Heroicon name: outline/users -->
                            <svg class="mr-4 flex-shrink-0 h-6 w-6 text-indigo-300" xmlns="http://www.w3.org/2000/svg"
                                fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z" />
                            </svg>
                            Team
                        </a>

                        <a href="/admin/artistes"
                            class="text-indigo-100 hover:bg-indigo-600 group flex items-center px-2 py-2 text-base font-medium rounded-md">
                            <!-- Heroicon name: outline/folder -->
                            <svg class="mr-4 flex-shrink-0 h-6 w-6 text-indigo-300" xmlns="http://www.w3.org/2000/svg"
                                fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M3 7v10a2 2 0 002 2h14a2 2 0 002-2V9a2 2 0 00-2-2h-6l-2-2H5a2 2 0 00-2 2z" />
                            </svg>
                            Artiste
                        </a>

                        <a href="/admin/piecesMusicals"
                            class="text-indigo-100 hover:bg-indigo-600 group flex items-center px-2 py-2 text-base font-medium rounded-md">
                            <!-- Heroicon name: outline/calendar -->
                            <svg class="mr-4 flex-shrink-0 h-6 w-6 text-indigo-300" xmlns="http://www.w3.org/2000/svg"
                                fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                            </svg>
                            piece music
                        </a>

                        <a href="#"
                            class="text-indigo-100 hover:bg-indigo-600 group flex items-center px-2 py-2 text-base font-medium rounded-md">
                            <!-- Heroicon name: outline/inbox -->
                            <svg class="mr-4 flex-shrink-0 h-6 w-6 text-indigo-300" xmlns="http://www.w3.org/2000/svg"
                                fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M20 13V6a2 2 0 00-2-2H6a2 2 0 00-2 2v7m16 0v5a2 2 0 01-2 2H6a2 2 0 01-2-2v-5m16 0h-2.586a1 1 0 00-.707.293l-2.414 2.414a1 1 0 01-.707.293h-3.172a1 1 0 01-.707-.293l-2.414-2.414A1 1 0 006.586 13H4" />
                            </svg>
                            Documents
                        </a>

                        <a href="#"
                            class="text-indigo-100 hover:bg-indigo-600 group flex items-center px-2 py-2 text-base font-medium rounded-md">
                            <!-- Heroicon name: outline/chart-bar -->
                            <svg class="mr-4 flex-shrink-0 h-6 w-6 text-indigo-300" xmlns="http://www.w3.org/2000/svg"
                                fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z" />
                            </svg>
                            logout
                        </a>
                    </nav>
                </div>
            </div>

            <div class="flex-shrink-0 w-14" aria-hidden="true">
                <!-- Dummy element to force sidebar to shrink to fit close icon -->
            </div>
        </div>

        <!-- Static sidebar for desktop -->
        <div class="hidden md:flex md:w-64 md:flex-col md:fixed md:inset-y-0">
            <!-- Sidebar component, swap this element with another sidebar if you like -->
            <div class="flex flex-col flex-grow pt-5 bg-black overflow-y-auto">
                <div class="flex items-center flex-shrink-0 px-4 text-white text-md">
                    Dashboard of musicOnline
                </div>
                <div class="mt-5 flex-1 flex flex-col">
                    <nav class="flex-1 px-2 pb-4 space-y-1">
                        <!-- Current: "bg-indigo-800 text-white", Default: "text-indigo-100 hover:bg-indigo-600" -->
                        <a href="/admin/dashboard"
                            class="bg-indigo-800 text-white group flex items-center px-2 py-2 text-sm font-medium rounded-md">
                            <!-- Heroicon name: outline/home -->
                            <svg class="mr-3 flex-shrink-0 h-6 w-6 text-indigo-300" xmlns="http://www.w3.org/2000/svg"
                                fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6" />
                            </svg>
                            Dashboard
                        </a>

                        <a href="{{ asset('admin/bandes') }}"
                            class="text-indigo-100 hover:bg-indigo-600 group flex items-center px-2 py-2 text-sm font-medium rounded-md">
                            <!-- Heroicon name: outline/users -->
                            <svg class="mr-3 flex-shrink-0 h-6 w-6 text-indigo-300" xmlns="http://www.w3.org/2000/svg"
                                fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z" />
                            </svg>
                            Bande
                        </a>

                        <a href="{{ asset('admin/artistes') }}"
                            class="text-indigo-100 hover:bg-indigo-600 group flex items-center px-2 py-2 text-sm font-medium rounded-md">
                            <!-- Heroicon name: outline/folder -->
                            <svg class="mr-3 flex-shrink-0 h-6 w-6 text-indigo-300" xmlns="http://www.w3.org/2000/svg"
                                fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                                class="w-6 h-6">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M15.75 6a3.75 3.75 0 11-7.5 0 3.75 3.75 0 017.5 0zM4.501 20.118a7.5 7.5 0 0114.998 0A17.933 17.933 0 0112 21.75c-2.676 0-5.216-.584-7.499-1.632z" />
                            </svg>
                            Artiste
                        </a>

                        <a href="{{ asset('admin/piecesMusicals') }}"
                            class="text-indigo-100 capitalize hover:bg-indigo-600 group flex items-center px-2 py-2 text-sm font-medium rounded-md">
                            <!-- Heroicon name: outline/calendar -->
                            <svg class="mr-3 flex-shrink-0 h-6 w-6 text-indigo-300" xmlns="http://www.w3.org/2000/svg"
                                fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                                class="w-6 h-6">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M9 9l10.5-3m0 6.553v3.75a2.25 2.25 0 01-1.632 2.163l-1.32.377a1.803 1.803 0 11-.99-3.467l2.31-.66a2.25 2.25 0 001.632-2.163zm0 0V2.25L9 5.25v10.303m0 0v3.75a2.25 2.25 0 01-1.632 2.163l-1.32.377a1.803 1.803 0 01-.99-3.467l2.31-.66A2.25 2.25 0 009 15.553z" />
                            </svg>
                            piece music
                        </a>

                        <a href="{{ asset('admin/comments/show') }}"
                            class="text-indigo-100 hover:bg-indigo-600 group flex items-center px-2 py-2 text-sm font-medium rounded-md">
                            <!-- Heroicon name: outline/inbox -->
                            <svg class="mr-3 flex-shrink-0 h-6 w-6 text-indigo-300" xmlns="http://www.w3.org/2000/svg"
                                fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                                class="w-6 h-6">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M7.5 8.25h9m-9 3H12m-9.75 1.51c0 1.6 1.123 2.994 2.707 3.227 1.129.166 2.27.293 3.423.379.35.026.67.21.865.501L12 21l2.755-4.133a1.14 1.14 0 01.865-.501 48.172 48.172 0 003.423-.379c1.584-.233 2.707-1.626 2.707-3.228V6.741c0-1.602-1.123-2.995-2.707-3.228A48.394 48.394 0 0012 3c-2.392 0-4.744.175-7.043.513C3.373 3.746 2.25 5.14 2.25 6.741v6.018z" />
                            </svg>

                            Comments
                        </a>

                        <a href="{{ asset('admin/users') }}"
                            class="text-indigo-100 hover:bg-indigo-600 group flex items-center px-2 py-2 text-sm font-medium rounded-md">
                            <!-- Heroicon name: outline/chart-bar -->
                            <svg class="mr-3 flex-shrink-0 h-6 w-6 text-indigo-300" xmlns="http://www.w3.org/2000/svg"
                                fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                                class="w-6 h-6">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M19 7.5v3m0 0v3m0-3h3m-3 0h-3m-2.25-4.125a3.375 3.375 0 11-6.75 0 3.375 3.375 0 016.75 0zM4 19.235v-.11a6.375 6.375 0 0112.75 0v.109A12.318 12.318 0 0110.374 21c-2.331 0-4.512-.645-6.374-1.766z" />
                            </svg>
                            Add admins
                        </a>
                    </nav>
                </div>
            </div>
        </div>
        <div class="md:pl-64 flex flex-col flex-1">
            <div class="sticky top-0 z-10 flex-shrink-0 flex justify-end aligns-center h-16 bg-white shadow">
                <button type="button" style="margin-right: 20px;margin-top: 15PX;"
                    class=" flex  mr-5 text-sm rounded-full md:mr-0 focus:ring-4 focus:ring-gray-300 dark:focus:ring-gray-600"
                    id="user-menu-button" aria-expanded="false" data-dropdown-toggle="dropdown">
                    <span class="sr-only">Open user menu</span>
                    <img class="w-8 h-8 rounded-full" src="https://cdn-icons-png.flaticon.com/512/2206/2206368.png"
                        alt="user photo">
                </button>
                <!-- Dropdown menu -->
                <div class="hidden z-50 my-4 w-56 text-base list-none bg-white rounded divide-y divide-gray-100 shadow dark:bg-gray-700 dark:divide-gray-600"
                    id="dropdown">
                    <div class="py-3 px-4">
                        <span
                            class="block text-sm font-semibold text-gray-900 dark:text-white">{{ $User->name }}</span>
                        <span
                            class="block text-sm font-light text-gray-500 truncate dark:text-gray-400">{{ $User->email }}</span>
                    </div>

                    <ul class="py-1 font-light text-gray-500 dark:text-gray-400" aria-labelledby="dropdown">
                        <li>
                            <a href=""
                                class="block py-2 px-4 text-sm hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Sign
                                out</a>
                        </li>
                    </ul>
                </div>

            </div>

            <main>
                <div class="py-6">
                    <!-- /start replace -->
                    @yield('content')
                    <!-- /End replace -->
                </div>
        </div>
        </main>
    </div>
    </div>


    <x-flash-message />
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.4/flowbite.min.js"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.4/flowbite.min.css" rel="stylesheet" />
    <script src="//unpkg.com/alpinejs" defer></script>


</body>

</html>
