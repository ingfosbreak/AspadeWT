@extends('layouts.app')

@section('content')

<div class="h-fit px-5 flex flex-col gap-5 items-center justify-center mt-20">

    <div class="flex justify-between items-center px-20 w-full">
        @if (Request::url() == route('user.viewAll.newEvents'))
        <h3 class="text-6xl font-bold text-gray-700 text-center">New Events</h3>
        <!-- dropdown & serch -->
        <div class="grid justify-items-end">
            <div class="flex flex-row m-8">
                <button id="dropdownDefaultButton" data-dropdown-toggle="dropdown"
                    class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center inline-flex items-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800"
                    type="button">category <svg class="w-2.5 h-2.5 ml-2.5" aria-hidden="true"
                        xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="m1 1 4 4 4-4" />
                    </svg></button>

            
                    
                <!-- Dropdown menu -->
                <div id="dropdown"
                    class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700">
                    <ul class="py-2 text-sm text-gray-700 " aria-labelledby="dropdownDefaultButton">
                        <li>
                            <a href="{{ route('user.viewAll.newEvents',['category' => 'All'])}}"
                                class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">All</a>
                        </li>
                        <li>
                            <a href="{{ route('user.viewAll.newEvents.category',['category' => 'outdoor'])}}"
                                class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">outdoor</a>
                        </li>
                        <li>
                            <a href="{{ route('user.viewAll.newEvents.category',['category' => 'indoor'])}}"
                                class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">indoor</a>
                        </li>
                        <li>
                            <a href="{{ route('user.viewAll.newEvents.category',['category' => 'concert'])}}"
                                class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">concert</a>
                        </li>
                        <li>
                            <a href="{{ route('user.viewAll.newEvents.category',['category' => 'sport'])}}"
                                class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">sport
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('user.viewAll.newEvents.category',['category' => 'academic'])}}"
                                class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">academic
                            </a>
                        </li>
                    </ul>
                </div>
                @else
                <div class="justify-center">
                    <h3 class="text-6xl font-bold text-gray-700 ">Upcoming Events</h3>
                </div>
                <!-- dropdown & serch -->
                <div class="grid justify-items-end">
                    <div class="flex flex-row m-8">
                        <button id="dropdownDefaultButton" data-dropdown-toggle="dropdown"
                            class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center inline-flex items-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800"
                            type="button">category <svg class="w-2.5 h-2.5 ml-2.5" aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2" d="m1 1 4 4 4-4" />
                            </svg></button>
                        <!-- Dropdown menu -->
                        <div id="dropdown"
                            class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700">
                            <ul class="py-2 text-sm text-gray-700 " aria-labelledby="dropdownDefaultButton">
                                <li>
                                    <a href="{{ route('user.viewAll.upcomingEvents',['category' => 'All'])}}"
                                        class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">All</a>
                                </li>
                                <li>
                                    <a href="{{ route('user.viewAll.upcomingEvents.category',['category' => 'outdoor'])}}"
                                        class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">outdoor</a>
                                </li>
                                <li>
                                    <a href="{{ route('user.viewAll.upcomingEvents.category',['category' => 'indoor'])}}"
                                        class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">indoor</a>
                                </li>
                                <li>
                                    <a href="{{ route('user.viewAll.upcomingEvents.category',['category' => 'concert'])}}"
                                        class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">concert</a>
                                </li>
                                <li>
                                    <a href="{{ route('user.viewAll.upcomingEvents.category',['category' => 'sport'])}}"
                                        class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">sport
                                    </a>
                                </li>
                                <li>
                                    <a href="{{ route('user.viewAll.upcomingEvents.category',['category' => 'academic'])}}"
                                        class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">academic
                                    </a>
                                </li>
                            </ul>
                        </div>

                        @endif



                        @if (Request::url() == route('user.main'))
                        <div>


                            <form
                                class="mx-auto max-w-xl py-2 px-6 rounded-full bg-gray-50 border flex focus-within:border-gray-300">
                                <input type="text" placeholder="Search anything"
                                    class="bg-transparent w-full focus:outline-none pr-4 font-semibold border-0 focus:ring-0 px-0 py-0 text-black"
                                    name="topic">
                                <button
                                    class="flex flex-row items-center justify-center min-w-[130px] px-4 rounded-full font-medium tracking-wide border disabled:cursor-not-allowed disabled:opacity-50 transition ease-in-out duration-150 text-base bg-black text-white font-medium tracking-wide border-transparent py-1.5 h-[38px] -mr-3">
                                    Search
                                </button>
                            </form>
                        </div>
                        @endif

                    </div>
                </div>
            </div>

            <div class="grid justify-center">
                <div class="flex flex-row ">
                    <div
                        class="flex flex-wrap gap-2 px-20 bg-black py-10 bg-gray-200 rounded-lg drop-shadow-xl justify-center">
                        @foreach ($events as $event)

                        <!-- Item 1 -->
                        <div class="flex flex-col gap-1 ">

                            <!-- Image -->
                            <a href="{{ route('event.information',['event'=> $event])}}" class="bg-purple-500 ">
                                @if ($event->event_image != null)
                                <img src="{{ asset('storage/'.$event->event_image->image_path) }}"
                                    class=" hover:translate-x-1 hover:-translate-y-1 delay-50 duration-100 card object-contain h-96 w-72 object-fill" />
                                @else
                                <img src="https://picsum.photos/id/{{$event->id}}/200/300"
                                    class="hover:translate-x-1 hover:-translate-y-1 delay-50 duration-100 card" />
                                @endif
                            </a>

                            <!-- Games Title -->
                            <a href="#" class="hover:text-purple-500 text-gray-700 font-semibold"> <p>{{$event->name}}</p></a>

                            <!-- Viewers -->
                            <a href="#" class="hover:text-purple-500 text-sm text-gray-400 -mt-1"> {{$event->date}} </a>

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
            </div>
            <div class = "m-10">
                {{ $events->links() }}
            </div>

        </div>

        <style>
        .card {

            width: 250px;
            height: 350px;
            object-fit: cover;

        }

        a {
            white-space: pre-wrap;
            word-wrap: break-word;
            word-break: break-all;
            white-space: normal;
            display: block;

        }

        p {
            white-space: pre-wrap;
            word-wrap: break-word;
            word-break: break-all;
            white-space: normal;
            display: block;
            inline-size: 250px;
            overflow-wrap: break-word;

        }
        </style>

        @endsection