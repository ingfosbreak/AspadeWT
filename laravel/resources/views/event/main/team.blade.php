@extends('layouts.event')
@section('content')

<div class="flex flex-col items-center mt-10">


<h2 class="text-2xl font-bold mb-4">Event Teams Management</h2>
<div class="flex mt-10 items-center gap-5 flex-wrap">
    
    @foreach ($event->event_teams as $team)
    <div class="relative cursor-pointer w-fit mt-5 ">
        
        <div
            class="relative p-6 bg-white w-fit border-2 border-indigo-500 rounded-lg hover:scale-105 transition duration-500">
            <div class="flex items-center">
                <span>😎</span>
                <h3 class="my-2 ml-3 text-lg font-bold text-gray-800">{{$team->name}}</h3>
            </div>
            

            <div class="flex gap-10">
                <div class="flex flex-row items-center text-gray-300 mt-2 px-1" id="done-add-{{$team->id}}"
                    onClick="show({{$team->id}})">
                    <p class="rounded mr-2 text-2xl">+</p>
                    <p class="pt-1 rounded text-sm" id="done-add-text-{{$team->id}}">Edit</p>
                </div>
                <div class="flex flex-row items-center text-gray-300 mt-2 px-1" id="done-remove-{{$team->id}}"
                    onClick="remove({{$team->id}})">
                    <p class="rounded mr-2 text-2xl">-</p>
                    <p class="pt-1 rounded text-sm" id="done-remove-text-{{$team->id}}">Remove</p>
                </div>
            </div>


            <div class="not-show" id="done-text-{{$team->id}}">
                <label for="message-{{$team->id}}" class="block mb-2 text-sm font-medium text-gray-900">Edit team
                    name!!!</label>
                <textarea id="message-{{$team->id}}" rows="4"
                    class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 "
                    placeholder="Write your thoughts here..."></textarea>
                <button class="rounded-2xl bg-blue-600 px-4 mt-2 py-2 font-bold leading-none text-white"
                    id="done-button-{{$team->id}}">Submit</button>
            </div>
            <div class="not-show" id="done-div-rm-{{$team->id}}">
                <label class="block mb-2 text-sm font-medium text-gray-900">Are you sure??</label>
                <button class="rounded-2xl bg-red-600 px-4 py-2 font-bold leading-none text-white"
                    id="done-button-rm-{{$team->id}}">Remove</button>
            </div>
        </div>
    </div>
    @endforeach

    

</div>
<!-- Add -->
<div class="self-start">
    <div class="flex flex-row items-center text-gray-300 mt-10 px-1" id="done-add-99999999" onClick="show(99999999)">
        <p class="rounded mr-2 text-2xl">+</p>
        <p class="pt-1 rounded text-sm" id="done-add-text-99999999">New</p>
    </div>
    <div class="not-show" id="done-text-99999999">
        <label for="message-99999999" class="block mb-2 text-sm font-medium text-black">Add new Team</label>
        <textarea id="message-99999999" rows="4"
            class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 "
            placeholder="Write your thoughts here..."></textarea>
        <button class="rounded-2xl bg-blue-600 px-4 mt-2 py-2 font-bold leading-none text-white"
            id="done-button-99999999">Submit</button>
    </div>
</div>
</div>

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
              createAjax('POST','{{route('event.team.add')}}', '{{csrf_token()}}', {'event_id':{{$event->id}},'text':$("#message"+'-'+id).val()});
              window.location.reload(true);
            }
            else {
              editAjax('POST','{{route('event.team.edit')}}', '{{csrf_token()}}', {'team_id':id,'text':$("#message"+'-'+id).val()});
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
              createAjax('POST','{{route('event.team.add')}}', '{{csrf_token()}}', {'event_id':{{$event->id}},'text':$("#message"+'-'+id).val()});
              window.location.reload(true);
            }
            else {
              editAjax('POST','{{route('event.team.edit')}}', '{{csrf_token()}}', {'team_id':id,'text':$("#message"+'-'+id).val()});
              window.location.reload(true);
            }
            
        }

        else {
            alert("Please fill the name in textarea");
            
        }
    });


}

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
      removeAjax('POST','{{route('event.team.remove')}}', '{{csrf_token()}}', {'team_id':id});
      window.location.reload(true);
    });
    
  }

</script>

@endsection