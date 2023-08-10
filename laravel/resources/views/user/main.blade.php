@extends('layouts.app')

@section('content')
<!-- from https://tailwindcomponents.com/component/grid-blog-page -->

<!-- bg-slate-900 -->

<section id="testimonies" class="py-20 bg-[url(https://cdn.discordapp.com/attachments/1135564910131151019/1138908881062473759/pexels-cameron-casey-1152853_1.jpg)] bg-cover bg-center bg-fixed w-full">
    
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
                                <p class="leading-normal text-gray-300 text-md">{{$event->description}}</p>
                                <a href="{{ route('event.information',['event'=> $event])}}">
                                    <button
                                        class="rounded-lg bg-white border border-black py-3 px-6 font-sans text-xs font-bold uppercase text-black shadow-md">
                                    Info
                                    </button>
                                </a>
                                @if ($EventService->isUserInEvent(Auth::getUser()->id,$event))              
                                <a href="{{ route('event.formJoinEvent', ['event' => $event])}}">
                                    <button
                                        class="rounded-lg bg-orange-500 mt-5 ml-2 py-3 px-6 font-sans text-xs font-bold uppercase text-white shadow-md shadow-orange-500/20 transition-all hover:shadow-lg hover:shadow-orange-500/40 focus:opacity-[0.85] focus:shadow-none active:opacity-[0.85] active:shadow-none disabled:pointer-events-none disabled:opacity-50 disabled:shadow-none">
                                        Join
                                    </button>
                                </a>
                                @endif
                                
                            </div>
                    </div>
                    
                </li>
                @endif
                @endforeach
            </ul>


            <ul class=" space-y-8 sm:block">
            @foreach ($events as $event)
                @if ($event->id % 3 == 1)
                <li class="text-sm leading-6">
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
                                <p class="leading-normal text-gray-300 text-md">{{$event->description}}</p>
                                <a href="{{ route('event.information',['event'=> $event])}}">
                                    <button
                                        class="rounded-lg bg-white border border-black py-3 px-6 font-sans text-xs font-bold uppercase text-black shadow-md">
                                    Info
                                    </button>
                                </a>
                                @if ($EventService->isUserInEvent(Auth::getUser()->id,$event))              
                                <a href="{{ route('event.formJoinEvent', ['event' => $event])}}">
                                    <button
                                        class="rounded-lg bg-orange-500 mt-5 ml-2 py-3 px-6 font-sans text-xs font-bold uppercase text-white shadow-md shadow-orange-500/20 transition-all hover:shadow-lg hover:shadow-orange-500/40 focus:opacity-[0.85] focus:shadow-none active:opacity-[0.85] active:shadow-none disabled:pointer-events-none disabled:opacity-50 disabled:shadow-none">
                                        Join
                                    </button>
                                </a>
                                @endif
                                
                            </div>
                    </div>
                    
                </li>
                @endif
                @endforeach
            </ul>


            <ul class=" space-y-8 lg:block">
            @foreach ($events as $event)
                @if ($event->id % 3 == 2)
                <li class="text-sm leading-6">
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
                                <p class="leading-normal text-gray-300 text-md">{{$event->description}}</p>
                                <a href="{{ route('event.information',['event'=> $event])}}">
                                    <button
                                        class="rounded-lg bg-white border border-black py-3 px-6 font-sans text-xs font-bold uppercase text-black shadow-md">
                                    Info
                                    </button>
                                </a>
                                @if ($EventService->isUserInEvent(Auth::getUser()->id,$event))              
                                <a href="{{ route('event.formJoinEvent', ['event' => $event])}}">
                                    <button
                                        class="rounded-lg bg-orange-500 mt-5 ml-2 py-3 px-6 font-sans text-xs font-bold uppercase text-white shadow-md shadow-orange-500/20 transition-all hover:shadow-lg hover:shadow-orange-500/40 focus:opacity-[0.85] focus:shadow-none active:opacity-[0.85] active:shadow-none disabled:pointer-events-none disabled:opacity-50 disabled:shadow-none">
                                        Join
                                    </button>
                                </a>
                                @endif
                                
                            </div>
                    </div>
                    
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