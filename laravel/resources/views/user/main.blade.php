@extends('layouts.app')

@section('content')
<!-- from https://tailwindcomponents.com/component/grid-blog-page -->

<!-- bg-slate-900 -->

<section id="testimonies" class="py-20 bg-slate-800">

    <div class="transition duration-500 ease-in-out transform scale-100 translate-x-0 translate-y-0 opacity-100">
        <div class="mb-12 space-y-5 md:text-center">
            @if (session('success'))
            <div class="text-green-700 mb-5">{{ session('success') }}</div>
            @endif


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
                        class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                        <svg class="w-4 h-4 text-black dark:text-gray-800" aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
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
                        class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                        <svg class="w-4 h-4 text-black dark:text-gray-800" aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="m1 9 4-4-4-4" />
                        </svg>
                        <span class="sr-only">Next</span>
                    </span>
                </button>
            </div>

            <!-- zone category search -->
            <div class="flex felx-col items-center justify-center">
            <aside class=" rounded-lg border-2 border-green-600 p-4 max-w-lg mr-5">
                    <h2 class="font-os text-black text-lg font-bold">Member or Staff</h2>
                    <ul class="flex items-start justify-center flex-wrap mt-4">
                        <li class="flex mx-1">
                            <a class="p-2 px-3 border-green-800 mb-4 rounded font-medium hover:bg-transparent hover:border-green-800 border bg-green-400/25  text-black"
                                href="{{ route('user.main')}}">
                                <h2>Member</h2>
                            </a>
                        </li>
                        <li class="flex mx-1">
                            <a class="p-2 px-3 border-green-800 mb-4 rounded font-medium hover:bg-transparent hover:border-green-800 border bg-green-400/25  text-black"
                                href="{{ route('user.main_staff')}}">
                                <h2>Staff</h2>
                            </a>
                        </li>
                    </ul>
                </aside>



                <aside class=" rounded-lg border-2 border-purple-600 p-4 max-w-lg ">
                    <h2 class="font-os text-black text-lg font-bold">Categories</h2>
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
                </aside>

            </div>



            @if (Request::url() == route('user.main'))
            <div class=flex flex>


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


    <div class="max-w-6xl mx-8 md:mx-10 lg:mx-20 xl:mx-auto">



        <div class="grid grid-cols-1 gap-6 sm:grid-cols-2 lg:grid-cols-3 lg:gap-8">


            <ul class="space-y-8">
                @foreach ($events as $event)
                @if ($event->id % 3 == 2)
                <li class="text-sm leading-6">
                    <a href="{{ route('event.information',['event'=> $event])}}">
                        <div class="relative group">
                            <div
                                class="absolute transition rounded-lg opacity-25 -inset-1 bg-gradient-to-r from-purple-600 to-pink-600 blur duration-400 group-hover:opacity-100 group-hover:duration-200">
                            </div>
                            <div
                                class="relative p-6 space-y-6 leading-none rounded-lg bg-slate-800 ring-1 ring-gray-900/5">
                                <div class="flex items-center space-x-4"><img
                                        src="https://pbs.twimg.com/profile_images/1276461929934942210/cqNhNk6v_400x400.jpg"
                                        class="w-12 h-12 bg-center bg-cover border rounded-full" alt="Kanye West">
                                    <div>
                                        <h3 class="text-lg font-semibold text-white">{{$event->name}}</h3>
                                        <p class="text-gray-500 text-md">Rapper &amp; Entrepreneur</p>

                                    </div>
                                </div>
                                <p class="leading-normal text-gray-300 text-md mt-5 text-xl">{{$event->description}}</p>

                                <div class="flex justify-between items-center text-3xl">
                                    @if ($event->getMembersCount() == $event->num_member)
                                    <p class="text-red-500 "> {{$event->getMembersCount()}} / {{$event->num_member}}</p>
                                    @endif
                                    @if ($event->getMembersCount() < $event->num_member)
                                        <p class="text-green-300"> {{$event->getMembersCount()}} /
                                            {{$event->num_member}}</p>
                                        @endif
                                        @if ($EventService->isUserInEvent(Auth::getUser()->id,$event))
                                        <a href="{{ route('event.formJoinEvent', ['event' => $event])}}">
                                            <button
                                                class="rounded-lg bg-green-600 flex items-center justify-center ml-2 py-3 px-6 font-sans text-xs font-bold uppercase text-white shadow-md shadow-black transition-all hover:shadow-lg hover:shadow-green-500/40 focus:opacity-[0.85] focus:shadow-none active:opacity-[0.85] active:shadow-none disabled:pointer-events-none disabled:opacity-50 disabled:shadow-none">
                                                Join
                                                <span class="ml-4 ">
                                                    <svg xmlns="http://www.w3.org/2000/svg" data-name="Layer 1"
                                                        viewBox="0 0 24 24" class="w-5 h-5 fill-current">
                                                        <path fill="currentColor"
                                                            d="M17.92,11.62a1,1,0,0,0-.21-.33l-5-5a1,1,0,0,0-1.42,1.42L14.59,11H7a1,1,0,0,0,0,2h7.59l-3.3,3.29a1,1,0,0,0,0,1.42,1,1,0,0,0,1.42,0l5-5a1,1,0,0,0,.21-.33A1,1,0,0,0,17.92,11.62Z">
                                                        </path>
                                                    </svg>
                                                </span>
                                            </button>

                                        </a>
                                        @endif
                                </div>

                            </div>
                        </div>
                    </a>
                </li>
                @endif
                @endforeach
            </ul>


            <ul class=" space-y-8 sm:block">
                @foreach ($events as $event)
                @if ($event->id % 3 == 1)

                <li class="text-sm leading-6">
                    <a href="{{ route('event.information',['event'=> $event])}}">
                        <div class="relative group">
                            <div
                                class="absolute transition rounded-lg opacity-25 -inset-1 bg-gradient-to-r from-purple-600 to-pink-600 blur duration-400 group-hover:opacity-100 group-hover:duration-200">
                            </div>
                            <div
                                class="relative p-6 space-y-6 leading-none rounded-lg bg-slate-800 ring-1 ring-gray-900/5">
                                <div class="flex items-center space-x-4"><img
                                        src="https://pbs.twimg.com/profile_images/1276461929934942210/cqNhNk6v_400x400.jpg"
                                        class="w-12 h-12 bg-center bg-cover border rounded-full" alt="Kanye West">
                                    <div>
                                        <h3 class="text-lg font-semibold text-white">{{$event->name}}</h3>
                                        <p class="text-gray-500 text-md">Rapper &amp; Entrepreneur</p>

                                    </div>
                                </div>
                                <p class="leading-normal text-gray-300 text-md mt-5 text-xl">{{$event->description}}</p>

                                <div class="flex justify-between items-center text-3xl">
                                    @if ($event->getMembersCount() == $event->num_member)
                                    <p class="text-red-500 "> {{$event->getMembersCount()}} / {{$event->num_member}}</p>
                                    @endif
                                    @if ($event->getMembersCount() < $event->num_member)
                                        <p class="text-green-300"> {{$event->getMembersCount()}} /
                                            {{$event->num_member}}</p>
                                        @endif
                                        @if ($EventService->isUserInEvent(Auth::getUser()->id,$event))
                                        <a href="{{ route('event.formJoinEvent', ['event' => $event])}}">
                                            <button
                                                class="rounded-lg bg-green-600 flex items-center justify-center ml-2 py-3 px-6 font-sans text-xs font-bold uppercase text-white shadow-md shadow-black transition-all hover:shadow-lg hover:shadow-green-500/40 focus:opacity-[0.85] focus:shadow-none active:opacity-[0.85] active:shadow-none disabled:pointer-events-none disabled:opacity-50 disabled:shadow-none">
                                                Join
                                                <span class="ml-4 ">
                                                    <svg xmlns="http://www.w3.org/2000/svg" data-name="Layer 1"
                                                        viewBox="0 0 24 24" class="w-5 h-5 fill-current">
                                                        <path fill="currentColor"
                                                            d="M17.92,11.62a1,1,0,0,0-.21-.33l-5-5a1,1,0,0,0-1.42,1.42L14.59,11H7a1,1,0,0,0,0,2h7.59l-3.3,3.29a1,1,0,0,0,0,1.42,1,1,0,0,0,1.42,0l5-5a1,1,0,0,0,.21-.33A1,1,0,0,0,17.92,11.62Z">
                                                        </path>
                                                    </svg>
                                                </span>
                                            </button>

                                        </a>
                                        @endif
                                </div>

                            </div>
                        </div>
                    </a>
                </li>

                @endif
                @endforeach
            </ul>


            <ul class=" space-y-8 lg:block">
                @foreach ($events as $event)
                @if ($event->id % 3 == 0)
                <li class="text-sm leading-6">
                    <a href="{{ route('event.information',['event'=> $event])}}">
                        <div class="relative group">
                            <div
                                class="absolute transition rounded-lg opacity-25 -inset-1 bg-gradient-to-r from-purple-600 to-pink-600 blur duration-400 group-hover:opacity-100 group-hover:duration-200">
                            </div>
                            <div
                                class="relative p-6 space-y-6 leading-none rounded-lg bg-slate-800 ring-1 ring-gray-900/5">
                                <div class="flex items-center space-x-4"><img
                                        src="https://pbs.twimg.com/profile_images/1276461929934942210/cqNhNk6v_400x400.jpg"
                                        class="w-12 h-12 bg-center bg-cover border rounded-full" alt="Kanye West">
                                    <div>
                                        <h3 class="text-lg font-semibold text-white">{{$event->name}}</h3>
                                        <p class="text-gray-500 text-md">Rapper &amp; Entrepreneur</p>

                                    </div>
                                </div>
                                <p class="leading-normal text-gray-300 text-md mt-5 text-xl">{{$event->description}}</p>

                                <div class="flex justify-between items-center text-3xl">
                                    @if ($event->getMembersCount() == $event->num_member)
                                    <p class="text-red-500 "> {{$event->getMembersCount()}} / {{$event->num_member}}</p>
                                    @endif
                                    @if ($event->getMembersCount() < $event->num_member)
                                        <p class="text-green-300"> {{$event->getMembersCount()}} /
                                            {{$event->num_member}}</p>
                                        @endif
                                        @if ($EventService->isUserInEvent(Auth::getUser()->id,$event))
                                        <a href="{{ route('event.formJoinEvent', ['event' => $event])}}">
                                            <button
                                                class="rounded-lg bg-green-600 flex items-center justify-center ml-2 py-3 px-6 font-sans text-xs font-bold uppercase text-white shadow-md shadow-black transition-all hover:shadow-lg hover:shadow-green-500/40 focus:opacity-[0.85] focus:shadow-none active:opacity-[0.85] active:shadow-none disabled:pointer-events-none disabled:opacity-50 disabled:shadow-none">
                                                Join
                                                <span class="ml-4 ">
                                                    <svg xmlns="http://www.w3.org/2000/svg" data-name="Layer 1"
                                                        viewBox="0 0 24 24" class="w-5 h-5 fill-current">
                                                        <path fill="currentColor"
                                                            d="M17.92,11.62a1,1,0,0,0-.21-.33l-5-5a1,1,0,0,0-1.42,1.42L14.59,11H7a1,1,0,0,0,0,2h7.59l-3.3,3.29a1,1,0,0,0,0,1.42,1,1,0,0,0,1.42,0l5-5a1,1,0,0,0,.21-.33A1,1,0,0,0,17.92,11.62Z">
                                                        </path>
                                                    </svg>
                                                </span>
                                            </button>

                                        </a>
                                        @endif
                                </div>

                            </div>
                        </div>
                    </a>
                </li>
                @endif
                @endforeach
            </ul>
        </div>

        {{$events->links()}}
    </div>
    </div>
</section>


@endsection