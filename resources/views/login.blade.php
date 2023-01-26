<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Login</title>

        <!-- Fonts -->
        <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        @vite('resources/css/app.css')
    </head>
    <body>
        
        @include('parts/header')

        <div class="container h-screen mt-24 relative max-w-full">
            <div class="m-auto flex flex-wrap flex-shrink-0 justify-center align-center p-4 w-fit mx-auto border border-gray-600 rounded-2xl md:w-6/12">
                <h1 class="w-full text-center my-4 text-lg font-bold">Login</h1>
                @if ($message = Session::get('alert'))
                    <div class="border border-red-600 rounded-xl px-4 py-2 mb-4 w-full text-center">
                        <p>{{ $message }}</p>
                    </div>
                @endif
                @if ($message = Session::get('success'))
                    <div class="border border-green-600 rounded-xl px-4 py-2 mb-4 w-full text-center">
                        <p>{{ $message }}</p>
                    </div>
                @endif
                <form action={{ route('login.store') }} method="POST">
                    @csrf
                    <input class="w-full p-2 border rounded-sm mb-4" type="text" name="name" placeholder="Username" />
                    <input class="w-full p-2 border rounded-sm" type="password" name="password" placeholder="Password" />
                    <button class="border border-blue-600 bg-blue-600 text-white px-4 py-2 rounded-xl my-4 hover:bg-blue-700" type="submit">Log in</button>
                </form>
            </div>
        </div>
    </body>
</html>