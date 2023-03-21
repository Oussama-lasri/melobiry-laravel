    @props(['piece'])




    <a href="/pieceMusical/{{ $piece->id }}/details"
        class="relative p-4 rounded-md bg-[#181818] hover:bg-[#272727] duration-200 group w-52">
        <div class="relative">
            <img src="storage/{{ $piece->image }}" class="rounded shadow-lg">
            <button data-modal-target="playlist-modal" data-modal-toggle="playlist-modal"
                class="cursor-pointer z-40 h-10 w-10 bg-[#1cb955] rounded-full shadow-xl absolute right-2 bottom-2 flex justify-center items-center cursor-auto duration-200 opacity-0 translate-y-3 group-hover:opacity-100 group-hover:translate-y-0 hover:scale-105">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                    stroke="currentColor" class="w-6 h-6">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M12 4.5v15m7.5-7.5h-15" />
                </svg>
            </button>
           
        </div>
        <h2 class="mt-4 mb-1 font-semibold tracking-wide capitalize">{{ $piece->titreMusic }}</h2>
        <h3 class="mt-4 mb-1 font-semibold tracking-wide capitalize">duration : <span
                class="bold">{{ $piece->duration }}</span> min</h3>
        <h4 class="mt-4 mb-1 font-semibold tracking-wide capitalize">release at : <span
                class="bold">{{ $piece->release_date }}</span></h4>

    </a>
