<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Digital Agency</title>

        <!-- Fonts -->
        <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        @vite('resources/css/app.css')
    </head>
    <body>
        
        @include('parts/header')

        <div class="container min-h-screen max-w-full mt-24 ">
            <section class="max-w-full bg-white">
                <div class="mx-auto w-4/5 flex flex-row flex-wrap">
                    <div class="w-full md:w-1/2">
                        <h1 class="text-5xl font-extrabold my-6 leading-tight">Our Digital Agency With Excellence Services</h1>
                        <p class="w-9/12">We Help Growing eCommerce Clothing Brands Root Their Social Presence And Increase Sales Through Paid Advertising</p>
                        <div class="my-8">
                            <a href="#" class="rounded-3xl border border-transparent bg-blue-600 px-4 py-2 text-base font-medium text-white shadow-sm hover:bg-blue-700">Get Started</a>
                            <button class="mx-2 rounded-full group"><span class="border border-4 border-orange-600 bg-white rounded-full px-3 py-2 mx-2 text-orange-600 ease-linear duration-100 group-hover:bg-orange-600 group-hover:text-white"><i class="fa fa-play"></i></span>Watch Video</button>
                        </div>
                    </div>
                    <div class="w-full md:w-1/2">
                        <img class="mx-auto my-5 h-[350px]" src="{{asset('assets/images/73-400x500.jpg')}}" />
                    </div>
                </div>
            </section>
            <section class="max-w-full flex flex-row flex-wrap bg-indigo-100">
                <div class="mx-auto w-4/5 mb-12">
                    <h2 class="text-center font-bold my-10 text-3xl">Our Service</h2>
                    <div class="flex flex-row flex-wrap justify-center gap-2">
                        @foreach ($param as $item)                            
                        <div class="relative w-full rounded-2xl bg-white overflow-hidden ease-linear duration-200 hover:shadow-md md:w-[calc(50%-12px)] lg:w-[calc(25%-12px)]">
                            <img class="w-full" src="{{asset($item->image)}}" />
                            <span class="absolute left-2 top-[9.5rem] bg-orange-600 px-4 py-5 rounded-3xl border border-white text-white z-[1]"><i class="{{$item->icon}}"></i></span>
                            <div class="mx-4 mt-8 text-2xl font-bold">{{$item->name}}</div>
                            <p class="mx-4 mb-4">{{$item->description}}</p>
                        </div>
                        @endforeach
                    </div>
                </div>
            </section>
            <section class="max-w-full bg-white">
                <div class="mx-auto w-4/5 flex flex-row flex-wrap">
                    <div class="w-full md:w-1/2">
                        <img class="mx-auto my-10 h-[350px]" src="{{asset('assets/images/445-400x500.jpg')}}" />
                    </div>
                    <div class="w-full md:w-1/2 my-16">
                        <h2 class="text-3xl font-extrabold my-8 leading-tight w-8/12">We Made A Promise Increasing Your Brand</h2>
                        <div class="flex flex-row flex-wrap w-fit px-6 py-4 ease-linear duration-100 hover:border hover:shadow-lg">
                            <span class="rounded-full bg-green-600 text-white text-xs px-1.5 py-1 mr-2"><i class="fa-solid fa-arrow-right"></i></span>
                            <div>World Best Designer</div>
                        </div>
                        <div class="flex flex-row flex-wrap w-fit px-6 py-4 ease-linear duration-100 hover:border hover:shadow-lg">
                            <span class="rounded-full bg-orange-600 text-white text-xs px-1.5 py-1 mr-2"><i class="fa-solid fa-arrow-right"></i></span>
                            <div>Professional Content Writer</div>
                        </div>
                        <div class="flex flex-row flex-wrap w-fit px-6 py-4 ease-linear duration-100 hover:border hover:shadow-lg">
                            <span class="rounded-full bg-blue-600 text-white text-xs px-1.5 py-1 mr-2"><i class="fa-solid fa-arrow-right"></i></span>
                            <div>World Best Developer</div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </body>
</html>