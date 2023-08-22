@extends('layouts.event')
@section('content')

@can('view', $event)
    @can('viewWithRole', Auth::getUser()->user_pivots->where('event_id',$event->id)->firstOrFail())   
    <div class="flex h-full w-full justify-center" >
    @else
    <div class="flex h-full w-full justify-center pointer-events-none" >
    @endcan
@endcan
    <!-- from :https://tailwindcomponents.com/component/blog-post -->
    <!-- component -->
    <div class="flex flex-col mx-auto bg-white w-full items-center">
        <div class="relative border-t border-gray-200 bg-gray-50 w-full">
            <div class="absolute inset-0 h-36 opacity-90 lg:h-48"
                style="background-image:url(&quot;data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='100' height='100' viewBox='0 0 100 100'%3E%3Cg fill-rule='evenodd'%3E%3Cg fill='%23e0e7ff' fill-opacity='1'%3E%3Cpath opacity='.5' d='M96 95h4v1h-4v4h-1v-4h-9v4h-1v-4h-9v4h-1v-4h-9v4h-1v-4h-9v4h-1v-4h-9v4h-1v-4h-9v4h-1v-4h-9v4h-1v-4h-9v4h-1v-4H0v-1h15v-9H0v-1h15v-9H0v-1h15v-9H0v-1h15v-9H0v-1h15v-9H0v-1h15v-9H0v-1h15v-9H0v-1h15v-9H0v-1h15V0h1v15h9V0h1v15h9V0h1v15h9V0h1v15h9V0h1v15h9V0h1v15h9V0h1v15h9V0h1v15h9V0h1v15h4v1h-4v9h4v1h-4v9h4v1h-4v9h4v1h-4v9h4v1h-4v9h4v1h-4v9h4v1h-4v9h4v1h-4v9zm-1 0v-9h-9v9h9zm-10 0v-9h-9v9h9zm-10 0v-9h-9v9h9zm-10 0v-9h-9v9h9zm-10 0v-9h-9v9h9zm-10 0v-9h-9v9h9zm-10 0v-9h-9v9h9zm-10 0v-9h-9v9h9zm-9-10h9v-9h-9v9zm10 0h9v-9h-9v9zm10 0h9v-9h-9v9zm10 0h9v-9h-9v9zm10 0h9v-9h-9v9zm10 0h9v-9h-9v9zm10 0h9v-9h-9v9zm10 0h9v-9h-9v9zm9-10v-9h-9v9h9zm-10 0v-9h-9v9h9zm-10 0v-9h-9v9h9zm-10 0v-9h-9v9h9zm-10 0v-9h-9v9h9zm-10 0v-9h-9v9h9zm-10 0v-9h-9v9h9zm-10 0v-9h-9v9h9zm-9-10h9v-9h-9v9zm10 0h9v-9h-9v9zm10 0h9v-9h-9v9zm10 0h9v-9h-9v9zm10 0h9v-9h-9v9zm10 0h9v-9h-9v9zm10 0h9v-9h-9v9zm10 0h9v-9h-9v9zm9-10v-9h-9v9h9zm-10 0v-9h-9v9h9zm-10 0v-9h-9v9h9zm-10 0v-9h-9v9h9zm-10 0v-9h-9v9h9zm-10 0v-9h-9v9h9zm-10 0v-9h-9v9h9zm-10 0v-9h-9v9h9zm-9-10h9v-9h-9v9zm10 0h9v-9h-9v9zm10 0h9v-9h-9v9zm10 0h9v-9h-9v9zm10 0h9v-9h-9v9zm10 0h9v-9h-9v9zm10 0h9v-9h-9v9zm10 0h9v-9h-9v9zm9-10v-9h-9v9h9zm-10 0v-9h-9v9h9zm-10 0v-9h-9v9h9zm-10 0v-9h-9v9h9zm-10 0v-9h-9v9h9zm-10 0v-9h-9v9h9zm-10 0v-9h-9v9h9zm-10 0v-9h-9v9h9zm-9-10h9v-9h-9v9zm10 0h9v-9h-9v9zm10 0h9v-9h-9v9zm10 0h9v-9h-9v9zm10 0h9v-9h-9v9zm10 0h9v-9h-9v9zm10 0h9v-9h-9v9zm10 0h9v-9h-9v9z'/%3E%3Cpath d='M6 5V0H5v5H0v1h5v94h1V6h94V5H6z'/%3E%3C/g%3E%3C/g%3E%3C/svg%3E&quot;)">
            </div>
            <div class="relative mx-auto max-w-7xl px-6 pt-16 pb-12 sm:px-12 lg:pt-24">
                <header class="mx-auto max-w-2xl text-center">
                    <h1 class="text-3xl font-extrabold tracking-tight text-slate-900 sm:text-4xl">Welcome to
                        {{$event->name}} Kanban Board!!!</h1>
                    <p class="mt-2 text-sm font-semibold text-gray-400">
                        {{$event->description}}
                    </p>
                </header>
            </div>
        </div>



        <div class="flex flex-wrap gap-10 mb-40 mt-10">
            <!-- To-do -->
            <div class="border border-gray-300 rounded px-2 py-2 w-60 ">
                <!-- board category header -->
                <div class="flex flex-row justify-between items-center mb-2 mx-1">
                    <div class="flex items-center">
                        <h2 class="bg-red-100 text-sm w-max px-1 rounded mr-2 text-gray-700">To-do</h2>
                        <p class="text-gray-400 text-sm">3</p>
                    </div>
                </div>
                <!-- board card -->
                <div class="flex flex-col gap-2 border border-dashed border-black rounded-lg" id="todo">
                    @foreach ($event->processes as $process)
                    @if ($process->status == "todo")
                    <div class="p-2 rounded bg-gray-100 shadow-sm border-gray-100 border-2" data-id="{{$process->id}}">
                        <h3 class="text-sm mb-3 text-gray-700">{{$process->name}}</h3>
                        <p class="bg-red-100 text-xs w-max p-1 rounded mr-2 text-gray-700"
                            onClick="change({{$process->id}})">To-do</p>

                        <!-- change status button -->
                        <div class="not-show" id="change-{{$process->id}}">

                            <div class="mt-2 flex flex-col gap-2">
                                <button id="doing-{{$process->id}}">
                                    <p class="bg-yellow-100 text-xs w-max p-1 rounded mr-2 text-gray-700">WIP</p>
                                </button>
                                <button id="done-{{$process->id}}">
                                    <p class="bg-green-100 text-xs w-max p-1 rounded mr-2 text-gray-700">Done</p>
                                </button>
                            </div>

                        </div>


                        <div class="flex flex-row items-center mt-5">
                            @if ($process->event_team != null)
                            <a href="{{ route('event.kanban.team',['event'=>$event, 'process'=>$process])}}" class="text-xs text-gray-500 flex"><div class="bg-gray-300 rounded-full w-4 h-4 mr-3"></div>
                                Team : {{$process->event_team->name}}</a>
                            @else 
                            <a href="{{ route('event.kanban.team',['event'=>$event, 'process'=>$process])}}" class="text-xs text-gray-500 flex"><div class="bg-gray-300 rounded-full w-4 h-4 mr-3"></div>
                                Team : -</a>
                            @endif
                        </div>
                        <div class="flex gap-10">
                            <div class="flex flex-row items-center text-gray-300 mt-2 px-1"
                                id="done-add-{{$process->id}}" onClick="show({{$process->id}})">
                                <p class="rounded mr-2 text-2xl">+</p>
                                <p class="pt-1 rounded text-sm" id="done-add-text-{{$process->id}}">Edit</p>
                            </div>
                            <div class="flex flex-row items-center text-gray-300 mt-2 px-1"
                                id="done-remove-{{$process->id}}" onClick="remove({{$process->id}})">
                                <p class="rounded mr-2 text-2xl">-</p>
                                <p class="pt-1 rounded text-sm" id="done-remove-text-{{$process->id}}">Remove</p>
                            </div>
                        </div>
                        <!-- edit / remove -->
                        <div class="not-show" id="done-text-{{$process->id}}">
                            <label for="message-{{$process->id}}"
                                class="block mb-2 text-sm font-medium text-gray-900">Write the task!!!</label>
                            <textarea id="message-{{$process->id}}" rows="4"
                                class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 "
                                placeholder="Write your thoughts here..."></textarea>
                            <button class="rounded-2xl bg-blue-600 px-4 mt-2 py-2 font-bold leading-none text-white"
                                id="done-button-{{$process->id}}">Submit</button>
                        </div>
                        <div class="not-show" id="done-div-rm-{{$process->id}}">
                            <label class="block mb-2 text-sm font-medium text-gray-900">Are you sure??</label>
                            <button class="rounded-2xl bg-red-600 px-4 py-2 font-bold leading-none text-white"
                                id="done-button-rm-{{$process->id}}">Remove</button>
                        </div>
                    </div>

                    @endif
                    @endforeach

                </div>

                <!-- Add -->
                <div class="flex flex-row items-center text-gray-300 mt-2 px-1" id="done-add-99999999"
                    onClick="show(99999999)">
                    <p class="rounded mr-2 text-2xl">+</p>
                    <p class="pt-1 rounded text-sm" id="done-add-text-99999999">New</p>
                </div>
                <div class="not-show" id="done-text-99999999">
                    <label for="message-99999999" class="block mb-2 text-sm font-medium text-black">Add new task</label>
                    <textarea id="message-99999999" rows="4"
                        class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 "
                        placeholder="Write your thoughts here..."></textarea>
                    <button class="rounded-2xl bg-blue-600 px-4 mt-2 py-2 font-bold leading-none text-white"
                        id="done-button-99999999">Submit</button>
                </div>
            </div>

            <!-- WIP Kanban -->
            <div class="border border-gray-300 rounded px-2 py-2 w-60">
                <!-- board category header -->
                <div class="flex flex-row justify-between items-center mb-2 mx-1">
                    <div class="flex items-center">
                        <h2 class="bg-yellow-100 text-sm w-max px-1 rounded mr-2 text-gray-700">WIP</h2>
                        <p class="text-gray-400 text-sm">2</p>
                    </div>
                </div>
                <!-- board card -->
                <div class="flex flex-col gap-2 border border-black border-dashed rounded-lg" id="doing">
                    @foreach ($event->processes as $process)
                    @if ($process->status == "doing")
                    <div class="p-2 rounded bg-gray-100 shadow-sm border-gray-100 border-2" data-id="{{$process->id}}">
                        <h3 class="text-sm mb-3 text-gray-700">{{$process->name}}</h3>
                        <p class="bg-yellow-100 text-xs w-max p-1 rounded mr-2 text-gray-700"
                            onClick="change({{$process->id}})">WIP</p>

                        <!-- change status button -->
                        <div class="not-show" id="change-{{$process->id}}">

                            <div class="mt-2 flex flex-col gap-2">
                                <button id="todo-{{$process->id}}">
                                    <p class="bg-red-100 text-xs w-max p-1 rounded mr-2 text-gray-700">To-do</p>
                                </button>
                                <button id="done-{{$process->id}}">
                                    <p class="bg-green-100 text-xs w-max p-1 rounded mr-2 text-gray-700">Done</p>
                                </button>
                            </div>

                        </div>

                        <div class="flex flex-row items-center mt-5">
                            @if ($process->event_team != null)
                            <div class="flex">
                                <div class="bg-gray-300 rounded-full w-4 h-4 mr-3 "></div>
                                <p class="text-xs text-gray-500">Team : {{$process->event_team->name}}</p>
                            </div>
                            @else 
                            <div class="flex">
                                <div class="bg-gray-300 rounded-full w-4 h-4 mr-3 "></div>
                                <p class="text-xs text-gray-500">Team : -</p>
                            </div>
                            @endif
                        </div>

                    </div>
                    @endif
                    @endforeach
                </div>
            </div>

            <!-- Complete Kanban -->
            <div class="border border-gray-300 rounded px-2 py-2 w-60">
                <!-- board category header -->
                <div class="flex flex-row justify-between items-center mb-2 mx-1">
                    <div class="flex items-center">
                        <h2 class="bg-green-100 text-sm w-max px-1 rounded mr-2 text-gray-700">Complete</h2>
                        <p class="text-gray-400 text-sm">4</p>
                    </div>
                </div>
                <!-- board card -->
                <div class="flex flex-col gap-2 border border-black border-dashed rounded-lg" id="done"
                    onClick="reply_click(this.id)">
                    @foreach ($event->processes as $process)
                    @if ($process->status == "done")
                    <div class="p-2 rounded bg-gray-100 shadow-sm border-gray-100 border-2" data-id="{{$process->id}}">
                        <h3 class="text-sm mb-3 text-gray-700">{{$process->name}}</h3>
                        <p class="bg-green-100 text-xs w-max p-1 rounded mr-2 text-gray-700"
                            onClick="change({{$process->id}})">Done</p>

                        <!-- change status button -->
                        <div class="not-show" id="change-{{$process->id}}">

                            <div class="mt-2 flex flex-col gap-2">
                                <button id="doing-{{$process->id}}">
                                    <p class="bg-yellow-100 text-xs w-max p-1 rounded mr-2 text-gray-700">WIP</p>
                                </button>
                                <button id="todo-{{$process->id}}">
                                    <p class="bg-red-100 text-xs w-max p-1 rounded mr-2 text-gray-700">To-do</p>
                                </button>
                            </div>

                        </div>

                        <div class="flex flex-row items-center mt-5">
                            @if ($process->event_team != null)
                            <div class="flex">
                                <div class="bg-gray-300 rounded-full w-4 h-4 mr-3 "></div>
                                <p class="text-xs text-gray-500">Team : {{$process->event_team->name}}</p>
                            </div>
                            @else 
                            <div class="flex">
                                <div class="bg-gray-300 rounded-full w-4 h-4 mr-3 "></div>
                                <p class="text-xs text-gray-500">Team : -</p>
                            </div>
                            @endif
                        </div>

                    </div>
                    @endif
                    @endforeach
                </div>
            </div>

        </div>

    </div>
</div>


<style>
  #todo,#doing,#done{
    min-height: 100px;
  }


</style>

<script type="module">

  $( document ).ready(function() {

      const drake = dragula([$('#todo').get(0), $('#doing').get(0),$('#done').get(0)], { revertOnSpill: true });
    
      // editAjax('POST','{{route('edit.process')}}', '{{csrf_token()}}', {'process_id':"3",'text':"gggggg"});

            drake.on('drop', function(el, target, source, sibling) {
                
              // console.log(el.getAttribute("data-id"));
              updateAjax('POST','{{route('update.process')}}', '{{csrf_token()}}', {'process_id':el.getAttribute("data-id"),'status':target.id});
              window.location.reload(true);

            });

  });

</script>

<script>
   
  
  function show(id) {
    
    if ($('#done-text'+'-'+id).is(':hidden')) {
      $('#done-text'+'-'+id).stop().fadeIn();
      $('#done-add-text'+'-'+id).html("Cancel");
      
    }
    else  {
      $('#done-text'+'-'+id).stop().fadeOut();
      if (id == "99999999"){
        $('#done-add-text'+'-'+id).html("New");
      }
      else {
        $('#done-add-text'+'-'+id).html("Edit");
      }
    }
              
    $("#message"+'-'+id).on("keydown", function(e){

      if(e.which == 13){
                
        if ($("#message"+'-'+id).val() !== "") {
            if (id == "99999999"){
              createAjax('POST','{{route('create.process')}}', '{{csrf_token()}}', {'event_id':{{$event->id}},'text':$("#message"+'-'+id).val()});
              window.location.reload(true);
            }
            else {
              editAjax('POST','{{route('edit.process')}}', '{{csrf_token()}}', {'process_id':id,'text':$("#message"+'-'+id).val()});
              window.location.reload(true);
            }
            
        }

        else {
            alert("Please fill the name in textarea");
            
        }
                
      }

              
    });
    
    $("#done-button"+'-'+id).click(function(){
      if ($("#message"+'-'+id).val() !== "") {
            if (id == "99999999"){
              createAjax('POST','{{route('create.process')}}', '{{csrf_token()}}', {'event_id':{{$event->id}},'text':$("#message"+'-'+id).val()});
              window.location.reload(true);
            }
            else {
              editAjax('POST','{{route('edit.process')}}', '{{csrf_token()}}', {'process_id':id,'text':$("#message"+'-'+id).val()});
              window.location.reload(true);
            }
            
        }

        else {
            alert("Please fill the name in textarea");
            
        }
    });
    
  }
  
  // remove
  function remove(id) {
    
    if ($('#done-div-rm'+'-'+id).is(':hidden')) {
      $('#done-div-rm'+'-'+id).stop().fadeIn();
      $('#done-remove-text'+'-'+id).html("Cancel");
      
    }
    else  {
      $('#done-div-rm'+'-'+id).stop().fadeOut();
      $('#done-remove-text'+'-'+id).html("Remove");
      
    }
              
    $("#done-button-rm"+'-'+id).click(function(){
      removeAjax('POST','{{route('remove.process')}}', '{{csrf_token()}}', {'process_id':id});
      window.location.reload(true);
    });
    
  }


  // change

  function change(id) {
    
    if ($('#change'+'-'+id).is(':hidden')) {
      $('#change'+'-'+id).stop().fadeIn();
      
      
    }
    else  {
      $('#change'+'-'+id).stop().fadeOut();
      
    }
              
    $("#todo"+'-'+id).click(function(){
      updateAjax('POST','{{route('update.process')}}', '{{csrf_token()}}', {'process_id':id,'status':'todo'});
      window.location.reload(true);
    });

    $("#doing"+'-'+id).click(function(){
      updateAjax('POST','{{route('update.process')}}', '{{csrf_token()}}', {'process_id':id,'status':'doing'});
      window.location.reload(true);
    });

    $("#done"+'-'+id).click(function(){
      updateAjax('POST','{{route('update.process')}}', '{{csrf_token()}}', {'process_id':id,'status':'done'});
      window.location.reload(true);
    });
    
  }
</script>
    
  



@endsection