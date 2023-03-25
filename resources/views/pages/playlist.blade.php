@extends('layout')
@section('content')
    <div class="bg-black text-gray-300 min-h-screen p-10">

        <!-- header -->
        <div class="flex">
            <img class="mr-6" src="https://placekitten.com/g/200/200">
            <div class="flex flex-col justify-center">
                <!-- content -->
                <h4 class="mt-0 mb-2 uppercase text-gray-500 tracking-widest text-xs">Playlist</h4>
                <h1 class="mt-0 mb-2 text-white text-4xl">{{ $playlist->name }}</h1>
                <p class="text-gray-600 mb-2 text-sm"></p>
                <p class="text-gray-600 text-sm">Created by <a>{{ $playlist->User->name }}</a> -
                    {{ count($playlist->piecesMusicals) }} songs</p>
            </div>
        </div>

        <!-- action buttons -->
        <div class="mt-6 flex justify-between">
            <div class="flex">
                <button class="mr-2 bg-green-500 text-green-100 block py-2 px-8 rounded-full">Play</button>
                <button class="mr-2 border border-white block p-2 rounded-full"><img
                        src="https://image.flaticon.com/icons/svg/2485/2485986.svg" height="25" width="25"></button>
                <button class="mr-2 border border-white block p-2 rounded-full">...</button>
            </div>
            <div class="text-gray-600 text-sm tracking-widest text-right">
                <h5 class="mb-1">Followers</h5>
                <p>5,055</p>
            </div>
        </div>

        <!-- song list   -->
        <div class="mt-10">
            <!-- song list header -->
            <div class="flex text-gray-600">
                <div class="p-2 w-8 flex-shrink-0"></div>
                <div class="p-2 w-8 flex-shrink-0"></div>
                <div class="p-2 w-full">Title</div>
                <div class="p-2 w-full">Artist</div>
                <div class="p-2 w-full">Music</div>
                <div class="p-2 w-12 flex-shrink-0 text-right">⏱</div>
            </div>
            @foreach ($playlist->piecesMusicals as $piece)
                <div class="flex border-b border-gray-800 hover:bg-gray-800">
                    <div class="p-3 w-8 flex-shrink-0">▶️</div>
                    <div class="p-3 w-8 flex-shrink-0">❤️</div>
                    <div class="p-3 w-full">{{ $piece->titreMusic }}</div>
                    <div class="p-3 w-full">{{ $piece->artiste->firstName }} {{ $piece->artiste->lastName }}</div>
                    <div class="p-3 w-full"><audio controls src="{{ asset('storage/' . $piece->music) }}">
                        </audio></div>
                    <div class="p-3 w-15 flex-shrink-0 text-right">{{ $piece->duration }}min</div>
                </div>
            @endforeach
        </div>
    @endsection
