@extends('layouts.app')

@section('content')
<!-- from https://tailwindcomponents.com/component/grid-blog-page -->

<!-- bg-slate-900 -->

<section id="testimonies" class="py-20 bg-slate-900">
    
<div class="transition duration-500 ease-in-out transform scale-100 translate-x-0 translate-y-0 opacity-100">
<div class="mb-12 space-y-5 md:text-center">
    <aside class="w-full rounded-lg border-2 border-purple-600 p-4 max-w-lg mx-auto">
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
    </aside>
</div>
</div>    


<div class="max-w-6xl mx-8 md:mx-10 lg:mx-20 xl:mx-auto">



        <div class="grid grid-cols-1 gap-6 sm:grid-cols-2 lg:grid-cols-3 lg:gap-8">
    

            <ul class="space-y-8">
            @foreach ($events as $event)
                @if ($event->id % 3 == 0)
                <li class="text-sm leading-6">
                    <a href="{{ route('event.information',['event'=> $event])}}">
                        <div class="relative group">
                            <div class="absolute transition rounded-lg opacity-25 -inset-1 bg-gradient-to-r from-purple-600 to-pink-600 blur duration-400 group-hover:opacity-100 group-hover:duration-200"></div>
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
                                        <p class="text-green-300"> {{$event->getMembersCount()}} / {{$event->num_member}}</p>
                                        @endif
                                        @if ($EventService->isUserInEvent(Auth::getUser()->id,$event))              
                                        <a href="{{ route('event.formJoinEvent', ['event' => $event])}}">
                                            <button
                                                class="rounded-lg bg-green-600 flex items-center justify-center ml-2 py-3 px-6 font-sans text-xs font-bold uppercase text-white shadow-md shadow-black transition-all hover:shadow-lg hover:shadow-green-500/40 focus:opacity-[0.85] focus:shadow-none active:opacity-[0.85] active:shadow-none disabled:pointer-events-none disabled:opacity-50 disabled:shadow-none">
                                                Join
                                                <span class="ml-4 ">
                                                    <svg xmlns="http://www.w3.org/2000/svg" data-name="Layer 1" viewBox="0 0 24 24" class="w-5 h-5 fill-current"><path fill="currentColor" d="M17.92,11.62a1,1,0,0,0-.21-.33l-5-5a1,1,0,0,0-1.42,1.42L14.59,11H7a1,1,0,0,0,0,2h7.59l-3.3,3.29a1,1,0,0,0,0,1.42,1,1,0,0,0,1.42,0l5-5a1,1,0,0,0,.21-.33A1,1,0,0,0,17.92,11.62Z"></path>
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
                            <div class="absolute transition rounded-lg opacity-25 -inset-1 bg-gradient-to-r from-purple-600 to-pink-600 blur duration-400 group-hover:opacity-100 group-hover:duration-200"></div>
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
                                        <p class="text-green-300"> {{$event->getMembersCount()}} / {{$event->num_member}}</p>
                                        @endif
                                        @if ($EventService->isUserInEvent(Auth::getUser()->id,$event))              
                                        <a href="{{ route('event.formJoinEvent', ['event' => $event])}}">
                                            <button
                                                class="rounded-lg bg-green-600 flex items-center justify-center ml-2 py-3 px-6 font-sans text-xs font-bold uppercase text-white shadow-md shadow-black transition-all hover:shadow-lg hover:shadow-green-500/40 focus:opacity-[0.85] focus:shadow-none active:opacity-[0.85] active:shadow-none disabled:pointer-events-none disabled:opacity-50 disabled:shadow-none">
                                                Join
                                                <span class="ml-4 ">
                                                    <svg xmlns="http://www.w3.org/2000/svg" data-name="Layer 1" viewBox="0 0 24 24" class="w-5 h-5 fill-current"><path fill="currentColor" d="M17.92,11.62a1,1,0,0,0-.21-.33l-5-5a1,1,0,0,0-1.42,1.42L14.59,11H7a1,1,0,0,0,0,2h7.59l-3.3,3.29a1,1,0,0,0,0,1.42,1,1,0,0,0,1.42,0l5-5a1,1,0,0,0,.21-.33A1,1,0,0,0,17.92,11.62Z"></path>
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
                @if ($event->id % 3 == 2)
                <li class="text-sm leading-6">
                    <a href="{{ route('event.information',['event'=> $event])}}">
                        <div class="relative group">
                            <div class="absolute transition rounded-lg opacity-25 -inset-1 bg-gradient-to-r from-purple-600 to-pink-600 blur duration-400 group-hover:opacity-100 group-hover:duration-200"></div>
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
                                        <p class="text-green-300"> {{$event->getMembersCount()}} / {{$event->num_member}}</p>
                                        @endif
                                        @if ($EventService->isUserInEvent(Auth::getUser()->id,$event))              
                                        <a href="{{ route('event.formJoinEvent', ['event' => $event])}}">
                                            <button
                                                class="rounded-lg bg-green-600 flex items-center justify-center ml-2 py-3 px-6 font-sans text-xs font-bold uppercase text-white shadow-md shadow-black transition-all hover:shadow-lg hover:shadow-green-500/40 focus:opacity-[0.85] focus:shadow-none active:opacity-[0.85] active:shadow-none disabled:pointer-events-none disabled:opacity-50 disabled:shadow-none">
                                                Join
                                                <span class="ml-4 ">
                                                    <svg xmlns="http://www.w3.org/2000/svg" data-name="Layer 1" viewBox="0 0 24 24" class="w-5 h-5 fill-current"><path fill="currentColor" d="M17.92,11.62a1,1,0,0,0-.21-.33l-5-5a1,1,0,0,0-1.42,1.42L14.59,11H7a1,1,0,0,0,0,2h7.59l-3.3,3.29a1,1,0,0,0,0,1.42,1,1,0,0,0,1.42,0l5-5a1,1,0,0,0,.21-.33A1,1,0,0,0,17.92,11.62Z"></path>
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