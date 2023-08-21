@extends('layouts.app')

@section('content')

<div class="h-fit px-5 flex flex-col gap-5 items-center justify-center mt-20">
    <div class="flex justify-between items-center px-20 w-full">
    <h3 class="text-6xl font-bold text-gray-700 ">My Own Events</h3>
    
    
    



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
            <div class="flex flex-wrap gap-2 px-20 bg-black py-10 bg-gray-200 rounded-lg drop-shadow-xl justify-center">
                @foreach ($events as $event)
                @if ($event->event_role == "header")
                <!-- Item 1 -->
                <div class="flex flex-col gap-1 ">

                    <!-- Image -->
                    <a href="{{ route('event.information',['event'=> $event->event])}}" class="bg-purple-500 ">
                        @if ($event->event->event_image != null)
                        <img src="{{ asset('storage/'.$event->event->event_image->image_path) }}"
                            class=" hover:translate-x-1 hover:-translate-y-1 delay-50 duration-100 card object-contain h-96 w-72 object-fill" />
                        @else
                        <img src="https://picsum.photos/id/{{$event->id}}/200/300"
                            class="hover:translate-x-1 hover:-translate-y-1 delay-50 duration-100 card" />
                        @endif
                    </a>
                    

                    <!-- Games Title -->
                    <a href="#" class="hover:text-purple-500 text-gray-700 font-semibold"> <p>{{$event->event->name}}</p> </a>

                    <!-- Viewers -->
                    <a href="#" class="hover:text-purple-500 text-sm text-gray-400 -mt-1"> {{$event->event->date_start}} </a>

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
                @endif
                @endforeach


            </div>
        </div>
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