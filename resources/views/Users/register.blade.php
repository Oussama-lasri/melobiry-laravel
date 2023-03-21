<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="tailwind.css" rel="stylesheet" />
    <script src="https://cdn.tailwindcss.com"></script>
    <title>musicOnline</title>
</head>


<body class="flex min-h-screen bg-[#181818] items-center justify-center px-4 sm:px-6 lg:px-8">
    <a href="/" class="text-black absolute top-10 left-10 bg-white text-[#2e2e2e] text-xs font-semibold leading-5 tracking-widest uppercase py-[9px] px-[17px] sm:px-[38px] rounded-full hover:scale-105">go back</a>
    <div class="w-full max-w-md space-y-8">
        <div>
            <h2 class="mt-6 text-center text-3xl font-bold tracking-tight text-white">Register</h2>
        </div>
        <form method="POST" action="/store">
            @csrf

            <div class="row mb-3">
                <div class="col-md-6">
                    <span class="text-bold text-white capitalize">name</span>
                    <input type="text"
                        class="relative block w-full appearance-none my-2   border px-3 py-2 text-[#5f6164] placeholder-[#c7cad0]  focus:z-10  focus:outline-none sm:text-sm "
                        name="name"  placeholder="Name .. " autofocus value="{{old('name')}}">
                </div>
                @error('name')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>
            <div class="row mb-3">
                <div class="col-md-6">
                    <span class="text-sm text-white capitalize">email</span>
                    <input type="email"
                        class="relative block w-full appearance-none my-2   border px-3 py-2 text-[#5f6164] placeholder-[#c7cad0]  focus:z-10  focus:outline-none sm:text-sm"
                        name="email"  placeholder="email ..." autofocus value="{{old('email')}}">
                </div>
                @error('email')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>
            <div class="row mb-3">
                <div class="col-md-6">
                    <span class="text-sm text-white capitalize">password</span>
                    <input type="password"
                        class="relative block w-full appearance-none my-2  border px-3 py-2 text-[#5f6164] placeholder-[#c7cad0]  focus:z-10  focus:outline-none sm:text-sm"
                        name="password"  placeholder="password ..." autofocus value="{{old('password')}}">
                </div>
                @error('password')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>
            <div class="row mb-3">
                <div class="col-md-6">
                    <span class="text-sm text-white capitalize">confirme password</span>
                    <input type="password"
                        class="relative block w-full appearance-none my-2   border px-3 py-2 text-[#5f6164] placeholder-[#c7cad0]  focus:z-10  focus:outline-none sm:text-sm"
                        name="password_confirmation"  placeholder="confirme password ..." autofocus value="{{old('password_confirmation')}}">
                </div>
                @error('password_confirmation')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>


            <div class="row mb-0">
                <div class="col-md-8 offset-md-4 space-x-5">
                    <button type="submit"
                        class="bg-white text-[#2e2e2e] text-xs font-semibold leading-5 tracking-widest uppercase py-[9px] px-[17px] sm:px-[38px] rounded-full hover:scale-105">
                        register
                    </button>
                </div>
            </div>
        </form>
    </div>
</body>
