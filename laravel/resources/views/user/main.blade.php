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
            @foreach ($eventsPopular as $event)
            <a href="{{ route('event.information',['event'=> $event])}}">
                <div class="hidden duration-700 ease-in-out" data-carousel-item>
                    @if ($event->event_image != null)

                    <img src="{{ asset('storage/'.$event->event_image->image_path) }}"
                        class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2 blur-[2px]"
                        alt="...">
                    <div class="relative top-500 top-1/2 px-4 py-2 opacity-100 ">
                        <h2 class="text-6xl text-white font-bold text-center drop-shadow-xl">{{$event->name}}</h3>
                    </div>
                    @else
                    <img src="https://picsum.photos/id/{{$event->id}}/200/300"
                        class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2 blur-[2px]"
                        alt="...">
                    <div class="relative top-500 top-1/2 px-4 py-2 opacity-100 ">
                        <h2 class="text-6xl text-white font-bold text-center drop-shadow-xl">{{$event->name}}</h3>
                    </div>
                    @endif
                </div>
            </a>
            @endforeach

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
            <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 6"
                data-carousel-slide-to="5"></button>
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

    <!-- Event zone -->
    <div class="h-fit py-20 px-5 flex flex-col gap-5 items-center justify-center ">
        <h3 class="w-full px-20 justify-self-start text-6xl font-bold text-gray-700">Popular Events</h3>
        <div class="flex flex-wrap gap-2 px-20 bg-black py-20 bg-gray-200 rounded-lg drop-shadow-xl">
            @foreach ($eventsPopular as $event)
            <!-- Item 1 -->
            <div class="flex flex-col gap-1 card mb-20">

                <!-- Image -->
                <a href="{{ route('event.information',['event'=> $event])}}" class="bg-purple-500">
                    @if ($event->event_image != null)
                    <img src="{{ asset('storage/'.$event->event_image->image_path) }}"
                        class="hover:translate-x-1 hover:-translate-y-1 delay-50 duration-100 card" />
                    @else
                    <img src="https://picsum.photos/id/{{$event->id}}/200/300"
                        class="hover:translate-x-1 hover:-translate-y-1 delay-50 duration-100 card" />
                    @endif
                </a>

                <!-- Games Title -->
                <a href="{{ route('event.information',['event'=> $event])}}" class="hover:text-purple-500 text-sm break-words text-gray-700 font-semibold"> {{$event->name}} </a>

                <!-- Viewers -->
                <a href="{{ route('event.information',['event'=> $event])}}" class="hover:text-purple-500 text-sm text-gray-400 -mt-1"> Start: {{$event->date_start}} </a>

                <!-- Category Tags -->
                <div class="flex flex-row flex-wrap gap-2">
                    <a href="#"
                        class="hover:bg-gray-600 text-gray-300 text-xs font-semibold bg-gray-700 px-2 py-1 rounded-full">
                        {{$event->category}} </a>
                </div>

            </div>
            @endforeach


        </div>

    </div>

    <div class="h-fit px-5 flex flex-col gap-5 items-center justify-center">
        <div class="flex justify-between items-center px-20 w-full">
            <h3 class="text-6xl font-bold text-gray-700 ">Upcoming Events</h3>
            <a href="{{ route('user.viewAll.upcomingEvents')}}">
                <h3 class="">View All</h1>
            </a>
        </div>
        <div class="flex flex-wrap gap-2 px-20 bg-black py-20 bg-gray-200 rounded-lg drop-shadow-xl">
            @foreach ($eventUpComing as $event)
            <!-- Item 1 -->
            <div class="flex flex-col gap-1 card mb-20">

                <!-- Image -->
                <a href="{{ route('event.information',['event'=> $event])}}" class="bg-purple-500">
                    @if ($event->event_image != null)
                    <img src="{{ asset('storage/'.$event->event_image->image_path) }}"
                        class="hover:translate-x-1 hover:-translate-y-1 delay-50 duration-100 card" />
                    @else
                    <img src="https://picsum.photos/id/{{$event->id}}/200/300"
                        class="hover:translate-x-1 hover:-translate-y-1 delay-50 duration-100 card" />
                    @endif
                </a>

                <!-- Games Title -->
                <a href="{{ route('event.information',['event'=> $event])}}" class="hover:text-purple-500 text-sm break-words text-gray-700 font-semibold"> {{$event->name}} </a>

                <!-- Viewers -->
                <a href="{{ route('event.information',['event'=> $event])}}" class="hover:text-purple-500 text-sm text-gray-400 -mt-1"> Start: {{$event->date_start}} </a>

                <!-- Category Tags -->
                <div class="flex flex-row flex-wrap gap-2">
                    <a href="#"
                        class="hover:bg-gray-600 text-gray-300 text-xs font-semibold bg-gray-700 px-2 py-1 rounded-full">
                        {{$event->category}} </a>
                </div>

            </div>
            @endforeach


        </div>

    </div>

    <div class="h-fit py-20 px-5 flex flex-col gap-5 items-center justify-center ">
        <div class="flex justify-between items-center px-20 w-full">
            <h3 class="text-6xl font-bold text-gray-700 ">New Events</h3>
            <a href="{{ route('user.viewAll.newEvents')}}"><h3 class="">View All</h1></a>
        </div>
        <div class="flex flex-wrap gap-2 px-20 bg-black py-20 bg-gray-200 rounded-lg drop-shadow-xl">
            @foreach ($eventsNew as $event)
            <!-- Item 1 -->
            <div class="flex flex-col gap-1 card mb-20">

                <!-- Image -->
                <a href="{{ route('event.information',['event'=> $event])}}" class="bg-purple-500">
                    @if ($event->event_image != null)
                    <img src="{{ asset('storage/'.$event->event_image->image_path) }}"
                        class="hover:translate-x-1 hover:-translate-y-1 delay-50 duration-100 card" />
                    @else
                    <img src="https://picsum.photos/id/{{$event->id}}/200/300"
                        class="hover:translate-x-1 hover:-translate-y-1 delay-50 duration-100 card" />
                    @endif

                <!-- Games Title -->
                <a href="{{ route('event.information',['event'=> $event])}}" class="hover:text-purple-500 text-sm break-words text-lg text-gray-700 font-semibold"> {{$event->name}} </a>

                <!-- Viewers -->
                <a href="{{ route('event.information',['event'=> $event])}}" class="hover:text-purple-500 text-sm text-gray-400 -mt-1"> Start: {{$event->date_start}} </a>
                </a>
                <!-- Category Tags -->
                <div class="flex flex-row flex-wrap gap-2">
                    <a href="#"
                        class="hover:bg-gray-600 text-gray-300 text-xs font-semibold bg-gray-700 px-2 py-1 rounded-full">
                        {{$event->category}} </a>
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
a{
            white-space: pre-wrap;
            word-wrap: break-word;
            word-break: break-all;
            white-space: normal;
            display:block;

 }
</style>


@endsection