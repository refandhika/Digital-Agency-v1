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

        <div class="container min-h-screen mt-24 max-w-full">
            <section class="max-w-full bg-white">
                <div class="mx-auto w-4/5 flex flex-row flex-wrap">
                    <h2 class="text-2xl font-bold w-full my-4">Dashboard Main Navigation</h2>
                    <a class="border border-xl rounded-2xl px-4 py-2 bg-blue-600 text-white" href="/dashboard/create">Add New Service</a>
                    @if ($message = Session::get('success'))
                      <div class="border border-green-600 rounded-xl px-4 py-2">
                          <p>{{ $message }}</p>
                      </div>
                    @endif
                    <table class="w-full my-6">
                        <thead class="bg-gray-600 text-white">
                          <tr>
                            <th class="border-r py-1">No</th>
                            <th class="border-r py-1">Title</th>
                            <th class="border-r py-1">Description</th>
                            <th class="border-r py-1">Icon</th>
                            <th class="border-r py-1">Image</th>
                            <th class="border-r py-1">Action</th>
                          </tr>
                        </thead>
                        <tbody>
                          @foreach ($param as $item)
                            <tr>
                              <td class="border-l border-r border-b py-4 px-2">{{ $loop->index + 1 }}</td>
                              <td class="border-r border-b py-4 px-2">{{ $item->name }}</td>
                              <td class="border-r border-b py-4 px-2">{{ $item->description }}</td>
                              <td class="border-r border-b py-4 px-2"><i class="{{ $item->icon }}"></i></td>
                              <td class="border-r border-b py-4 px-2"><img src="{{ asset($item->image) }}"></td>
                              <td class="border-r border-b py-4 px-2 min-w-[110px] text-center">
                                <a class="inline-block border border-xl rounded-2xl px-3 py-2 bg-blue-600 text-white" href="{{ route('dashboard.edit', $item->id) }}"><i class="fa fa-pencil"></i></a>
                                <form class="inline-block " action="{{ route('dashboard.destroy', ['dashboard' => $item->id]) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="border border-xl rounded-2xl px-3 py-2 bg-red-600 text-white"><i class="fa fa-trash"></i></button>
                                </form>
                              </td>
                            </tr>
                          @endforeach
                        </tbody>
                    </table>
                </div>
            </section>
        </div>
    </body>
</html>