@extends('admin.dashboardLayout')
@section('content')
    <div class="max-w-7xl mx-auto px-4 sm:px-6 md:px-8">
        <h1 class="text-2xl font-semibold text-gray-900">Add bande</h1>
    </div>
    <div class="flex justify-center mt-9">
        <form method="post" action="/admin/bande/store" enctype="multipart/form-data" class="w-full max-w-lg">
            @csrf
            <div class="flex flex-wrap -mx-3 mb-6">
                <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
                    <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-first-name">
                        Name
                    </label>
                    <input
                        class="appearance-none block w-full bg-gray-200 text-gray-700 border  rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white"
                        id="grid-first-name" type="text" placeholder="bande : shayfeen" name="name"
                        value="{{ old('name') }}">
                    @error('name')
                        <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                    @enderror

                </div>
            </div>
            <div class="flex flex-wrap -mx-3 mb-6">
                <div class="w-full px-3">
                    <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-password">
                        image
                    </label>
                    <input
                        class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                        id="grid-password" type="file" placeholder="" name="image" value="{{ old('image') }}">
                    @error('image')
                        <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                    @enderror

                </div>
            </div>
            <div class="flex flex-wrap -mx-3 mb-6">
                <div class="w-full px-3">
                    <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-password">
                        members
                    </label>
                    <div id="content" class="">
                        <div id="inputs" class="">
                            <input
                                class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                                id="grid-password" type="text" placeholder="member name" name="members[]" value="">
                            <input
                                class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                                id="grid-password" type="text" placeholder="member name" name="members[]" value="">
                        </div>
                        <svg xmlns="http://www.w3.org/2000/svg" id="plus" fill="none" viewBox="0 0 24 24"
                            stroke-width="1.5" stroke="currentColor" class="w-14 h-14 cursor-pointer align-center mb-2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M12 4.5v15m7.5-7.5h-15" />
                        </svg>
                        @error('members')
                            <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                        @enderror
                    </div>
                </div>
            </div>
                <div class="flex flex-wrap mt-5 -mx-3 mb-2">
                    <div class="md:w-1/2 px-3 mb-6 md:mb-0">
                        <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-state">
                            pays
                        </label>
                            <input
                                class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                                id="" type="text" placeholder="Ex : Morocco" name="pays"
                                value="{{ old('pays') }}">
                            @error('pays')
                                <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                            @enderror
                       
                    </div>
                    <div class="md:w-1/2 px-3 mb-6 md:mb-0">
                        <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-zip">
                            creation date
                        </label>
                        <input
                            class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                            id="" type="date" placeholder="90210" name="creation_date"
                            value="{{ old('creation_date') }}">
                        @error('creation_date')
                            <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                        @enderror
                    </div>
                </div>
            
            <input type="submit" value="submit"
                class="mt-6 bg-blue-500 w-24 text-center hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-full" />
        </form>
    </div>
    <script>
        let plusButton = document.getElementById('plus');
        plusButton.addEventListener('click', () => {
            const contentPlus = document.getElementById('inputs');
            const div = document.createElement('div');
            div.innerHTML = `
                            <input
                            class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                            type="text" placeholder="member name" name="members[]" value="">
        `;
            contentPlus.prepend(div);
        })
    </script>
@endsection
