@extends('layouts.app')

@section('content')

<div class="h-fit px-5 flex flex-col gap-5 items-center justify-center mt-20">
        <div class="flex justify-between items-center px-20 w-full">
            <h3 class="text-6xl font-bold text-gray-700 ">New Events</h3>
            <h3 class="">View All</h1>
        </div>
        <div class="flex flex-wrap gap-2 px-20 bg-black py-10 bg-gray-200 rounded-lg drop-shadow-xl">
            @foreach ($events as $event)
            <!-- Item 1 -->
            <div class="flex flex-col gap-1 card">

                <!-- Image -->
                <a href="{{ route('event.information',['event'=> $event])}}" class="bg-purple-500">
                    @if ($event->image != null)
                    <img src="{{ asset('storage/'.$event->image->image_path) }}"
                        class="hover:translate-x-1 hover:-translate-y-1 delay-50 duration-100" />
                    @else
                    <img src="https://static-cdn.jtvnw.net/ttv-boxart/516575-285x380.jpg"
                        class="hover:translate-x-1 hover:-translate-y-1 delay-50 duration-100" />
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