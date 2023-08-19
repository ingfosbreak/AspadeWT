@extends('layouts.app')

@section('content')
<!-- from https://tailwindcomponents.com/component/grid-blog-page -->

<!-- bg-slate-900 -->

<section id="testimonies" class=" bg-gray-100">

    <div class="transition duration-500 ease-in-out transform scale-100 translate-x-0 translate-y-0 opacity-100">
        <div class="p-5 space-y-5 md:text-center">
            <!-- success call -->
            @if (session('success'))
            <div class="text-green-700 mb-5">{{ session('success') }}</div>
            @endif
        </div>
    </div>


    <div id="default-carousel" class="relative w-full px-20" data-carousel="slide">
        <!-- Carousel wrapper -->
        <div class="relative h-56 overflow-hidden rounded-lg md:h-96">
            <!-- Item 1 -->
            <div class="hidden duration-700 ease-in-out" data-carousel-item>
                <img src="https://play-lh.googleusercontent.com/8ddL1kuoNUB5vUvgDVjYY3_6HwQcrg1K2fd_R8soD-e2QYj8fT9cfhfh3G0hnSruLKec"
                    class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
            </div>
            <!-- Item 2 -->
            <div class="hidden duration-700 ease-in-out" data-carousel-item>
                <img src="https://cdn1.epicgames.com/salesEvent/salesEvent/amoguslandscape_2560x1440-3fac17e8bb45d81ec9b2c24655758075"
                    class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
            </div>
            <!-- Item 3 -->
            <div class="hidden duration-700 ease-in-out" data-carousel-item>
                <img src="https://inwfile.com/s-cq/ts25u7.png"
                    class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
            </div>
            <!-- Item 4 -->
            <div class="hidden duration-700 ease-in-out" data-carousel-item>
                <img src="https://www.digitaltrends.com/wp-content/uploads/2022/11/among-us-vr-imposter-next-to-body.png?resize=800%2C418&p=1"
                    class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
            </div>
            <!-- Item 5 -->
            <div class="hidden duration-700 ease-in-out" data-carousel-item>
                <img src="https://whatifgaming.com/wp-content/uploads/2022/08/Among-Us-Characters.webp"
                    class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
            </div>
        </div>
        <!-- Slider indicators -->
        <div class="absolute z-30 flex space-x-3 -translate-x-1/2 bottom-5 left-1/2">
            <button type="button" class="w-3 h-3 rounded-full" aria-current="true" aria-label="Slide 1"
                data-carousel-slide-to="0"></button>
            <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 2"
                data-carousel-slide-to="1"></button>
            <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 3"
                data-carousel-slide-to="2"></button>
            <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 4"
                data-carousel-slide-to="3"></button>
            <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 5"
                data-carousel-slide-to="4"></button>
        </div>
        <!-- Slider controls -->
        <button type="button"
            class="absolute top-0 left-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none"
            data-carousel-prev>
            <span
                class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-black group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                <svg class="w-4 h-4 text-white dark:text-gray-800" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                    fill="none" viewBox="0 0 6 10">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M5 1 1 5l4 4" />
                </svg>
                <span class="sr-only">Previous</span>
            </span>
        </button>
        <button type="button"
            class="absolute top-0 right-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none"
            data-carousel-next>
            <span
                class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-black group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                <svg class="w-4 h-4 text-white dark:text-gray-800" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                    fill="none" viewBox="0 0 6 10">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="m1 9 4-4-4-4" />
                </svg>
                <span class="sr-only">Next</span>
            </span>
        </button>
    </div>

    <!-- zone category search -->
    <!-- <div class="flex felx-col items-center justify-center">
                <aside class=" rounded-lg border-2 border-green-600 p-4 max-w-lg mr-5">
                    <h2 class="font-os text-black text-lg font-bold">Member or Staff</h2>
                    <ul class="flex items-start justify-center flex-wrap mt-4">
                        <li class="flex mx-1">
                            <a class="p-2 px-3 border-green-800 mb-4 rounded font-medium hover:bg-transparent hover:border-green-800 border bg-green-400/25  text-white"
                                href="{{ route('user.main')}}">
                                <h2>Member</h2>
                            </a>
                        </li>
                        <li class="flex mx-1">
                            <a class="p-2 px-3 border-green-800 mb-4 rounded font-medium hover:bg-transparent hover:border-green-800 border bg-green-400/25  text-white"
                                href="{{ route('user.main_staff')}}">
                                <h2>Staff</h2>
                            </a>
                        </li>
                    </ul>
                </aside> -->



    <!-- <aside class=" rounded-lg border-2 border-purple-600 p-4 max-w-lg ">
                    <h2 class="font-os text-white text-lg font-bold">Categories</h2>
                    <ul class="flex items-start flex-wrap mt-4">
                        <li class="flex mx-1">
                            <a class="p-2 px-3 border-purple-800 mb-4 rounded font-medium hover:bg-transparent hover:border-purple-800 border bg-purple-400/25  text-white"
                                href="category/all">
                                <h2>all</h2>
                            </a>
                        </li>
                        <li class="flex mx-1">
                            <a class="p-2 px-3 border-purple-800 mb-4 rounded font-medium hover:bg-transparent hover:border-purple-800 border bg-purple-400/25  text-white"
                                href="category/react-js">
                                <h2>react js</h2>
                            </a>
                        </li>
                        <li class="flex mx-1">
                            <a class="p-2 px-3 border-purple-800 mb-4 rounded font-medium hover:bg-transparent hover:border-purple-800 border bg-purple-400/25  text-white"
                                href="category/redux">
                                <h2>redux</h2>
                            </a>
                        </li>
                        <li class="flex mx-1">
                            <a class="p-2 px-3 border-purple-800 mb-4 rounded font-medium hover:bg-transparent hover:border-purple-800 border bg-purple-400/25  text-white"
                                href="category/ui-design">
                                <h2>ui design</h2>
                            </a>
                        </li>


                    </ul>
                </aside> -->


    <!-- Event zone -->
    <div class="h-fit py-5 px-5 flex flex-col gap-5 items-center justify-center ">
        <h3 class="w-full px-20 justify-self-start text-6xl font-bold text-gray-700">Popular Events</h3>
        <div class="flex flex-wrap gap-2 px-20 bg-black py-10 bg-gray-200 rounded-lg drop-shadow-xl">
            @foreach ($events as $event)
            <!-- Item 1 -->
            <div class="flex flex-col gap-1 ">

                <!-- Image -->
                <a href="{{ route('event.information',['event'=> $event])}}" class="bg-purple-500">
                    @if ($event->event_image != null)
                    <img src="{{ asset('storage/'.$event->event_image->image_path) }}"
                        class="hover:translate-x-1 hover:-translate-y-1 delay-50 duration-100 card" />
                    @else
                    <img src="https://static-cdn.jtvnw.net/ttv-boxart/516575-285x380.jpg"
                        class="hover:translate-x-1 hover:-translate-y-1 delay-50 duration-100 card" />
                    @endif
                </a>

                <!-- Games Title -->
                <a href="#" class="hover:text-purple-500 text-gray-700 font-semibold"> {{$event->name}} </a>

                <!-- Viewers -->
                <a href="#" class="hover:text-purple-500 text-sm text-gray-400 -mt-1"> {{$event->date}} </a>

                <!-- Category Tags -->
                <div class="flex flex-row flex-wrap gap-2">
                    <a href="#"
                        class="hover:bg-gray-600 text-gray-300 text-xs font-semibold bg-gray-700 px-2 py-1 rounded-full">
                        Shooter </a>
                    <a href="#"
                        class="hover:bg-gray-600 text-gray-300 text-xs font-semibold bg-gray-700 px-2 py-1 rounded-full">
                        FPS </a>
                </div>

            </div>
            @endforeach


        </div>

    </div>

    <div class="h-fit px-5 flex flex-col gap-5 items-center justify-center mt-20">
        <div class="flex justify-between items-center px-20 w-full">
            <h3 class="text-6xl font-bold text-gray-700 ">Upcoming Events</h3>
            <h3 class="">View All</h1>
        </div>
        <div class="flex flex-wrap gap-2 px-20 bg-black py-10 bg-gray-200 rounded-lg drop-shadow-xl">
            @foreach ($events as $event)
            <!-- Item 1 -->
            <div class="flex flex-col gap-1">

                <!-- Image -->
                <a href="{{ route('event.information',['event'=> $event])}}" class="bg-purple-500">
                    @if ($event->event_image != null)
                    <img src="{{ asset('storage/'.$event->event_image->image_path) }}"
                        class="hover:translate-x-1 hover:-translate-y-1 delay-50 duration-100 card" />
                    @else
                    <img src="https://static-cdn.jtvnw.net/ttv-boxart/516575-285x380.jpg"
                        class="hover:translate-x-1 hover:-translate-y-1 delay-50 duration-100 card" />
                    @endif
                </a>

                <!-- Games Title -->
                <a href="#" class="hover:text-purple-500 text-gray-700 font-semibold"> {{$event->name}} </a>

                <!-- Viewers -->
                <a href="#" class="hover:text-purple-500 text-sm text-gray-400 -mt-1"> {{$event->date}} </a>

                <!-- Category Tags -->
                <div class="flex flex-row flex-wrap gap-2">
                    <a href="#"
                        class="hover:bg-gray-600 text-gray-300 text-xs font-semibold bg-gray-700 px-2 py-1 rounded-full">
                        Shooter </a>
                    <a href="#"
                        class="hover:bg-gray-600 text-gray-300 text-xs font-semibold bg-gray-700 px-2 py-1 rounded-full">
                        FPS </a>
                </div>

            </div>
            @endforeach


        </div>

    </div>

    <div class="h-fit px-5 flex flex-col gap-5 items-center justify-center mt-20">
        <div class="flex justify-between items-center px-20 w-full">
            <h3 class="text-6xl font-bold text-gray-700 ">New Events</h3>
            <h3 class="">View All</h1>
        </div>
        <div class="flex flex-wrap gap-2 px-20 bg-black py-10 bg-gray-200 rounded-lg drop-shadow-xl">
            @foreach ($events as $event)
            <!-- Item 1 -->
            <div class="flex flex-col gap-1 ">

                <!-- Image -->
                <a href="{{ route('event.information',['event'=> $event])}}" class="bg-purple-500">
                    @if ($event->event_image != null)
                    <img src="{{ asset('storage/'.$event->event_image->image_path) }}"
                        class="hover:translate-x-1 hover:-translate-y-1 delay-50 duration-100 card" />
                    @else
                    <img src="https://static-cdn.jtvnw.net/ttv-boxart/516575-285x380.jpg"
                        class="hover:translate-x-1 hover:-translate-y-1 delay-50 duration-100 card" />
                    @endif
                </a>

                <!-- Games Title -->
                <a href="#" class="hover:text-purple-500 text-gray-700 font-semibold"> {{$event->name}} </a>

                <!-- Viewers -->
                <a href="#" class="hover:text-purple-500 text-sm text-gray-400 -mt-1"> {{$event->date}} </a>

                <!-- Category Tags -->
                <div class="flex flex-row flex-wrap gap-2">
                    <a href="#"
                        class="hover:bg-gray-600 text-gray-300 text-xs font-semibold bg-gray-700 px-2 py-1 rounded-full">
                        Shooter </a>
                    <a href="#"
                        class="hover:bg-gray-600 text-gray-300 text-xs font-semibold bg-gray-700 px-2 py-1 rounded-full">
                        FPS </a>
                </div>

            </div>
            @endforeach


        </div>

    </div>

</section>

<style>
.card {

    width: 200px;
    height: 320px;
    object-fit: cover;

}
</style>


@endsection