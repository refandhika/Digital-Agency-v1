<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Dashboard</title>

        <!-- Fonts -->
        <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        @vite('resources/css/app.css')
    </head>
    <body>

        @include('dashboard/header')

        <div class="container min-h-screen mt-24">
            <section class="max-w-full bg-white">
                <div class="mx-auto w-4/5 flex flex-row flex-wrap">
                    <a href="{{ route('dashboard.index') }}"><<  Back</a>

                    <h2 class="text-2xl font-bold w-full my-4">Edit Service</h2>
                    <form action="{{ route('dashboard.update', ['dashboard' => $param->id]) }}" method="POST" enctype="multipart/form-data" class="w-full">
                      @csrf
                      @method('PUT')
                      <div class="border border-gray-100 rounded-2xl p-4 inline-block w-full">
                        <div class="block">
                          <label class="w-full text-gray-600">Service Name</label>
                          <input class="border border-gray-400 w-full p-2" type="text" name="name" placeholder="" value="{{ $param->name }}"/>
                        </div>
                        <div class="block">
                          <label class="w-full text-gray-600">Description</label>
                          <textarea class="border border-gray-400 w-full p-2" row="4" name="description" placeholder="">{{ $param->description }}</textarea>
                        </div>
                        <div class="block">
                          <label class="w-full text-gray-600">Icon</label>
                          <input class="border border-gray-400 w-full p-2" type="text" name="icon" placeholder="" value="{{ $param->icon }}"/>
                        </div>
                        <div class="block">
                          <label class="w-full text-gray-600">Image URL</label>
                          <input class="border border-gray-400 w-full p-2" type="text" name="image" placeholder="" value="{{ $param->image }}"/>
                        </div>
                      </div>
                      <button class="bg-blue-600 text-white rounded-xl py-2 px-4 mt-5 hover:bg-blue-700" type="submit">Save</button>
                    </form>
                </div>
            </section>
        </div>
    </body>
</html>