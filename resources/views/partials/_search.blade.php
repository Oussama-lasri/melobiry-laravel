<form action="/">
    <div class="relative  border-gray-100 m-4 rounded-lg">
        <div class="absolute top-4 left-3">
            <i
                class="fa fa-search text-gray-400 z-20 hover:text-gray-500"
            ></i>
        </div>
        <input
            type="text"
            name="search"
            class="h-10 w-full pl-10 pr-20 rounded-full z-0 focus:shadow focus:outline-none"
            placeholder="Search ..."
            wire:modal="searshTerm"
        />
        <div class="absolute top-2 right-2">
            <button
                type="submit"
                hidden
                class="bg-red text-[#2e2e2e] text-xs font-semibold leading-5 tracking-widest uppercase py-[9px] px-[17px] sm:px-[38px] rounded-full hover:scale-105"
            >
                Search
            </button>
        </div>
    </div>
</form>