@if (session()->has('message'))
    <div x-data="{show: true}" x-init="setTimeout(() => show = false, 3000)" x-show="show"
        class="bg-white fixed top-0 left-1/3 transform bg-laravel test-black px-48 py-3 z-50">
        <p class="text-black">
            {{ session('message') }}
        </p>

    </div>
@endif
