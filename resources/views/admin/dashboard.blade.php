@extends('admin.dashboardLayout')
@section('content')
    <!-- Statistics Cards -->
    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 p-4 gap-4">
        <div
            class="bg-indigo-800 dark:bg-gray-800 shadow-lg rounded-md flex items-center justify-between p-3 border-b-4 border-blue-600 dark:border-gray-600 text-white font-medium group">
            <div
                class="flex justify-center items-center w-14 h-14 bg-white rounded-full transition-all duration-300 transform group-hover:rotate-12">
                <svg width="30" height="30" fill="none" viewBox="0 0 24 24" stroke="currentColor"
                    class="stroke-current text-blue-800 dark:text-gray-800 transform transition-transform duration-500 ease-in-out">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z">
                    </path>
                </svg>
            </div>
            <div class="text-right">
                <p class="text-2xl">1,257</p>
                <p>Bandes</p>
            </div>
        </div>
        <div
            class="bg-indigo-800 dark:bg-gray-800 shadow-lg rounded-md flex items-center justify-between p-3 border-b-4 border-blue-600 dark:border-gray-600 text-white font-medium group">
            <div
                class="flex justify-center items-center w-14 h-14 bg-white rounded-full transition-all duration-300 transform group-hover:rotate-12">
                <svg width="30" height="30" fill="none" viewBox="0 0 24 24" stroke="currentColor"
                    class="stroke-current text-blue-800 dark:text-gray-800 transform transition-transform duration-500 ease-in-out">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M16 11V7a4 4 0 00-8 0v4M5 9h14l1 12H4L5 9z"></path>
                </svg>
            </div>
            <div class="text-right">
                <p class="text-2xl">557</p>
                <p>artistes</p>
            </div>
        </div>
        <div
            class="bg-indigo-800 dark:bg-gray-800 shadow-lg rounded-md flex items-center justify-between p-3 border-b-4 border-blue-600 dark:border-gray-600 text-white font-medium group">
            <div
                class="flex justify-center items-center w-14 h-14 bg-white rounded-full transition-all duration-300 transform group-hover:rotate-12">
                <svg width="30" height="30" fill="none" viewBox="0 0 24 24" stroke="currentColor"
                    class="stroke-current text-blue-800 dark:text-gray-800 transform transition-transform duration-500 ease-in-out">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6"></path>
                </svg>
            </div>
            <div class="text-right">
                <p class="text-2xl">11,257</p>
                <p>Musics</p>
            </div>
        </div>
    </div>

    <!-- ./Statistics Cards -->
    <div class="container mx-auto px-10">
        <div class="music my-24">
        <div class="flex my-5 justify-between max-w-7xl mx-auto px-4 sm:px-6 md:px-8">
            <h2 class="text-2xl  font-semibold text-gray-900">Artistes List</h2>
            <a href="#" class="uppercase text-xs font-bold tracking-widest hover:underline text-black leading-6">See
                all</a>
        </div>
        
        
        <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
            <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                <tr>
                    <th scope="col" class="px-6 py-3">
                        Name
                    </th>
                    <th scope="col" class="px-6 py-3">
                        city
                    </th>
                    <th scope="col" class="px-6 py-3">
                        country
                    </th>
                    <th scope="col" class="px-6 py-3">
                        date Of Birth
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Action
                    </th>
                </tr>
            </thead>
            <tbody>
                @foreach ($artistes as $artiste)
                    <tr
                        class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                        <th scope="row"
                            class="flex items-center px-6 py-4 text-gray-900 whitespace-nowrap dark:text-white">
                            <img class="w-10 h-10 rounded-full" src="{{ asset('storage/' . $artiste->image) }}"
                                alt="Jese image">
                            <div class="pl-3">
                                <div class="text-base font-semibold">{{ $artiste->firstName }} {{ $artiste->lastName }}
                                </div>
                            </div>
                        </th>
                        <td class="px-6 py-4">
                            {{ $artiste->city }}
                        </td>
                        <td class="px-6 py-4">
                            <div class="flex items-center">
                                {{ $artiste->country }}
                            </div>
                        </td>
                        <td class="px-6 py-4">
                            <div class="flex items-center">
                                {{ $artiste->dateOfBirth }}
                            </div>
                        </td>
                        <td class="px-6 flex py-4">
                            <a href="{{ asset('admin/artiste/' . $artiste->id) }}/edit"
                                class="font-medium text-blue-500 mr-4"><i class="fa-solid fa-pen"></i></a>
                            {{--  edit --}}
                            <form method="post" action="{{ asset('admin/artiste/' . $artiste->id) }}">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="font-medium text-red-500"><i
                                        class="fa-solid fa-trash"></i></button>
                            </form>
                            {{--  delete --}}
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        <hr>
        </div>
        {{-- end artistes --}}





        {{-- MUSICS --}}
        <div class="music my-24">
            <div class="flex my-5 justify-between max-w-7xl mx-auto px-4 sm:px-6 md:px-8">
                <h2 class="text-2xl  font-semibold text-gray-900">Musics List</h2>
                <a href="#"
                    class="uppercase text-xs font-bold tracking-widest hover:underline text-black leading-6">See
                    all</a>
            </div>
            <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                    <tr>
                        <th scope="col" class=" py-3">
                            Titre Music
                        </th>
                        <th scope="col" class=" py-3">
                            artiste
                        </th>
                        <th scope="col" class=" py-3">
                            image
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
                                {{ $piece->artiste->firstName }}
                            </td>
                            <td class="px-2 py-4">
                                <div class="flex items-center">
                                    <img class="w-10" src="storage/{{ $piece->image }} " alt="">
                                </div>
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
                            <td class="py-4 flex items-center content-center space-between">
                                <a href="/pieceMusical/{{ $piece->id }}/edit"
                                    class="font-medium text-blue-500 mr-4"><i class="fa-solid fa-pen"></i></a>
                                {{--  edit --}}
                                <form method="post" action="/artiste/">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="font-medium text-red-500"><i
                                            class="fa-solid fa-trash"></i></button>
                                </form>
                                {{--  delete --}}
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

        {{-- END MUSICS --}}







        {{-- COMMENTS --}}
        <div class="COMMENTS my-24">
        <div class="flex my-5 justify-between max-w-7xl mx-auto px-4 sm:px-6 md:px-8">
            <h2 class="text-2xl  font-semibold text-gray-900">Comments List</h2>
            <a href="#" class="uppercase text-xs font-bold tracking-widest hover:underline text-black leading-6">See
                all</a>
        </div>
        <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
            <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                <tr>
                    <th scope="col" class="px-6 py-3">
                        Music
                    </th>
                    <th scope="col" class="px-6 py-3">
                        User
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Comment Body
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Delete
                    </th>
                </tr>
            </thead>
            <tbody>
                @foreach ($comments as $comment)
                    <tr
                        class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                        <th scope="row"
                            class="flex items-center px-6 py-4 text-gray-900 whitespace-nowrap dark:text-white">
                            <div class="pl-3">

                                <div class="text-base font-semibold">{{ $comment->pieceMusical->titreMusic }}
                                </div>
                            </div>
                        </th>

                        <td class="px-6 py-4">
                            {{-- <img class="w-10 h-10 rounded-full" src="{{ asset('storage/' . $comment->User->image) }}" alt="Jese image"> --}}
                            <div class="flex items-center">
                                {{ $comment->User->name }}
                            </div>
                        </td>
                        <td class="px-6 py-4">
                            <div class="flex items-center">
                                {{ $comment->comment_body }}
                            </div>
                        </td>
                        <td class="px-6 py-4 mr-16">
                            <form id="delete" method="post" action="{{ asset('comment/' . $comment->id) }}">
                                @csrf
                                @method('DELETE')
                                <button class="font-medium text-red-500"><i class="fa-solid fa-trash"></i></button>
                            </form>
                            {{--  delete --}}
                        </td>

                    </tr>
                @endforeach
            </tbody>
        </table>
        </div>
        {{-- END COMMENTS --}}
    </div>
@endsection
