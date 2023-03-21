<div>
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
                class="h-10 w-full text-black pl-10 pr-20 rounded-full z-0 focus:shadow focus:outline-none"
                placeholder="Search ..."
                wire:modal="searshTerm"
            />
        </div>
    </form>
</div>
