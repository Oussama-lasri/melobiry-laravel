@extends('admin.dashboardLayout')
@section('content')
    <div class="max-w-7xl mx-auto px-4 sm:px-6 md:px-8">
        <h1 class="text-2xl font-semibold text-gray-900">artistes list</h1>
    </div>
    <div class="relative overflow-x-auto shadow-md sm:rounded-lg w-100 container mx-auto px-4 mt-3 py-6">
        <form action="/artiste" class="flex items-center justify-between pb-4 bg-white dark:bg-gray-900">
            <label for="table-search" class="sr-only">Search</label>
            <div class="relative">
                <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                    <svg class="w-5 h-5 text-blue-700 dark:text-gray-400" aria-hidden="true" fill="currentColor"
                        viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd"
                            d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z"
                            clip-rule="evenodd"></path>
                    </svg>
                </div>
                <input type="text" id="table-search-artistes" name="search"
                    class="block p-2 pl-10 text-sm text-blue-700 border border-blue-700 rounded-full w-80 bg-gray-50 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                    placeholder="Search for artistes">
            </div>
            <div class="absolute top-0 left-96">
                <input type="submit"
                    class="mt-6 bg-blue-500 w-24 text-center hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-full"
                    value="Search" />
            </div>
        </form>


        <a href="{{ asset('admin/piecesMusicals/create') }}"
            class="absolute top-0 right-5 mt-6 bg-blue-500 w-24 text-center hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-full">ajouter</a>
        <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
            <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                <tr>
                    <th scope="col" class=" py-3">
                        Titre Music
                    </th>
                    <th scope="col" class=" py-3">
                        artiste/band
                    </th>
                    <th scope="col" class=" py-3">
                        langue
                    </th>
                    <th scope="col" class=" py-3">
                        duration
                    </th>
                    <th scope="col" class=" py-3">
                        writers
                    </th>
                    <th scope="col" class=" py-3">
                        release date
                    </th>
                    <th scope="col" class=" py-3">
                        words
                    </th>
                    <th scope="col" class=" py-3">
                        status
                    </th>
                    <th scope="col" class=" py-3">
                        Action
                    </th>
                </tr>
            </thead>
            <tbody>
                @foreach ($piecesMusicals as $piece)
                    <tr
                        class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">

                        <th class="flex items-center py-4 text-black">
                            <a href="/">
                                <div class="">
                                    <div class="text-base font-semibold"> {{ $piece->titreMusic }}
                                    </div>
                                </div>
                            </a>
                        </th>

                        <td class=" py-4">
                            @if ($piece->artiste)
                                {{ $piece->artiste->firstName }}
                            @elseif ($piece->band)
                                {{ $piece->band->name }}
                            @endif

                        </td>
                        <td class=" py-4">
                            <div class="flex items-center">
                                {{ $piece->langue }}
                            </div>
                        </td>
                        <td class=" py-4">
                            <div class="flex items-center">
                                {{ $piece->duration }}
                            </div>
                        </td>

                        <td class=" py-4">
                            <div class="flex items-center">
                                {{ $piece->writers }}
                            </div>
                        </td>
                        <td class=" py-4">
                            <div class="flex items-center">
                                {{ $piece->release_date }}
                            </div>
                        </td>
                        <td class=" py-4">
                            <div class="flex items-center">
                                {{ $piece->words }}
                            </div>
                        </td>
                        <td class="px-2 py-4">
                            @if ($piece->status == true)
                                not archived
                            @else
                                archived
                            @endif
                        </td>
                        <td class="py-4 flex items-center content-center space-between">
                            <a href="{{ asset('admin/pieceMusical/' . $piece->id . '/edit') }}"
                                class="font-medium text-blue-500 mr-4"><i class="fa-solid fa-pen"></i></a>
                            {{--  edit --}}
                            <form method="post" action="{{ asset('admin/pieceMusical/'.$piece->id)}}">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="font-medium text-red-500"><i
                                        class="fa-solid fa-trash"></i></button>
                            </form>
                            {{--  delete --}}
                            <a href="{{ asset('/admin/' . $piece->id . '/archive') }}"
                                class="font-medium text-gray ml-4"><i class="fa-solid fa-box-archive"></i></a>
                        </td>
                    </tr>
                @endforeach


            </tbody>
        </table>
    </div>
@endsection
