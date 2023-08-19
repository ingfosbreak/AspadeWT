@extends('layouts.event')
@section('content')

<div class="flex flex-col items-center mt-10">


<h2 class="text-2xl font-bold mb-4">Kanban Teams Management</h2>
<div class="flex mt-10 items-center gap-5 flex-wrap">
    
    @foreach ($event->event_teams as $team)
    <form action="{{route('event.kanban.edit',['process'=>$process,'team'=>$team,'event'=>$event])}}" method="POST">
    @csrf
    <button type="submit">
    <div class="relative cursor-pointer w-fit mt-5 ">
        
        <div
            class="relative p-6 bg-white w-fit border-2 border-indigo-500 rounded-lg hover:scale-105 transition duration-500">
            <div class="flex items-center">
                <span>😎</span>
                <h3 class="my-2 ml-3 text-lg font-bold text-gray-800">{{$team->name}}</h3>
            </div>
            
           
        </div>
    </div>
    </button>
    </form>
    @endforeach

    

</div>

</div>




@endsection