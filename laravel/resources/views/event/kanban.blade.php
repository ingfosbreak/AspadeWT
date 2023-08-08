<!-- component -->
<!DOCTYPE html>
<html lang="en">

  <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <meta http-equiv="X-UA-Compatible" content="ie=edge">
      @vite(['resources/css/app.css','resources/css/main.css','resources/js/app.js'])
      <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.8.0/flowbite.min.css" rel="stylesheet" />


  </head>

<body class=" bg-slate-900 w-full">

  <div class="flex justify-center h-content w-screen p-2">
    
    <div class="flex flex-wrap gap-20">
        <!-- To-do -->
        <div class="bg-slate-900 rounded px-2 py-2 w-60" >
          <!-- board category header -->
          <div class="flex flex-row justify-between items-center mb-2 mx-1">
            <div class="flex items-center">
              <h2 class="bg-red-100 text-sm w-max px-1 rounded mr-2 text-gray-700">To-do</h2>
              <p class="text-gray-400 text-sm">3</p>
            </div>
            <div class="flex items-center text-gray-300">
              <p class="mr-2 text-2xl">---</p>
              <p class="text-2xl">+</p>
            </div>
          </div>
          <!-- board card -->
          <div class="grid grid-rows-2 gap-2 border border-dashed rounded-lg" id = "todo">
          @foreach ($event->processes as $process)
            @if ($process->status == "todo")
            <div class="p-2 rounded bg-gray-100 shadow-sm border-gray-100 border-2" data-id="{{$process->id}}">
              <h3 class="text-sm mb-3 text-gray-700">{{$process->name}}</h3>
              <p class="bg-red-100 text-xs w-max p-1 rounded mr-2 text-gray-700">To-do</p>
              <div class="flex flex-row items-center mt-2">
                <div class="bg-gray-300 rounded-full w-4 h-4 mr-3"></div>
                <a href="#" class="text-xs text-gray-500">Sophie Worso</a>
              </div>
              <div class="flex flex-row items-center text-gray-300 mt-2 px-1" id="done-add-{{$process->id}}" onClick="show({{$process->id}})">
                <p class="rounded mr-2 text-2xl">+</p>
                <p class="pt-1 rounded text-sm" id="done-add-text-{{$process->id}}">Edit</p>
              </div>
              <div class="not-show" id="done-text-{{$process->id}}">
                <label for="message-{{$process->id}}" class="block mb-2 text-sm font-medium text-gray-900">Add new task</label>
                <textarea id="message-{{$process->id}}" rows="4" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 " placeholder="Write your thoughts here..."></textarea>
              </div>
            </div>
            
            @endif
          @endforeach

            
          </div>
          <div class="flex flex-row items-center text-gray-300 mt-2 px-1" id="done-add-999" onClick="show(999)">
            <p class="rounded mr-2 text-2xl">+</p>
            <p class="pt-1 rounded text-sm" id="done-add-text-999">New</p>
          </div>
          <div class="not-show" id="done-text-999">
                <label for="message-999" class="block mb-2 text-sm font-medium text-gray-900">Add new task</label>
                <textarea id="message-999" rows="4" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 " placeholder="Write your thoughts here..."></textarea>
            </div>
        </div>

        <!-- WIP Kanban -->
        <div class="bg-slate-900 rounded px-2 py-2 w-60">
          <!-- board category header -->
          <div class="flex flex-row justify-between items-center mb-2 mx-1">
            <div class="flex items-center">
              <h2 class="bg-yellow-100 text-sm w-max px-1 rounded mr-2 text-gray-700">WIP</h2>
              <p class="text-gray-400 text-sm">2</p>
            </div>
            <div class="flex items-center text-gray-300">
              <p class="mr-2 text-2xl">---</p>
              <p class="text-2xl">+</p>
            </div>
          </div>
          <!-- board card -->
          <div class="grid grid-rows-2 gap-2 border border-dashed rounded-lg" id ="doing" >
          @foreach ($event->processes as $process)
            @if ($process->status == "doing")
            <div class="p-2 rounded bg-gray-100 shadow-sm border-gray-100 border-2"  data-id="{{$process->id}}">
              <h3 class="text-sm mb-3 text-gray-700">{{$process->name}}</h3>
              <p class="bg-yellow-100 text-xs w-max p-1 rounded mr-2 text-gray-700">WIP</p>
              <div class="flex flex-row items-center mt-2">
                <div class="bg-gray-300 rounded-full w-4 h-4 mr-3"></div>
                <a href="#" class="text-xs text-gray-500">Sophie Worso</a>
              </div>
              <div class="flex flex-row items-center text-gray-300 mt-2 px-1" id="done-add-{{$process->id}}" onClick="show({{$process->id}})">
                <p class="rounded mr-2 text-2xl">+</p>
                <p class="pt-1 rounded text-sm" id="done-add-text-{{$process->id}}">Edit</p>
              </div>
              <div class="not-show" id="done-text-{{$process->id}}">
                <label for="message-{{$process->id}}" class="block mb-2 text-sm font-medium text-gray-900">Add new task</label>
                <textarea id="message-{{$process->id}}" rows="4" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 " placeholder="Write your thoughts here..."></textarea>
              </div>
            
            </div>
            @endif
          @endforeach
          </div>
        </div>

        <!-- Complete Kanban -->
        <div class="bg-slate-900 rounded px-2 py-2 w-60">
          <!-- board category header -->
          <div class="flex flex-row justify-between items-center mb-2 mx-1">
            <div class="flex items-center">
              <h2 class="bg-green-100 text-sm w-max px-1 rounded mr-2 text-gray-700">Complete</h2>
              <p class="text-gray-400 text-sm">4</p>
            </div>
            <div class="flex items-center">
              <p class="text-gray-300 mr-2 text-2xl">---</p>
              <p class="text-gray-300 text-2xl">+</p>
            </div>
          </div>
          <!-- board card -->
          <div class="grid grid-rows-2 gap-2 border border-dashed rounded-lg" id="done" onClick="reply_click(this.id)">
          @foreach ($event->processes as $process)
            @if ($process->status == "done")
            <div class="p-2 rounded bg-gray-100 shadow-sm border-gray-100 border-2"  data-id="{{$process->id}}">
              <h3 class="text-sm mb-3 text-gray-700">{{$process->name}}</h3>
              <p class="bg-green-100 text-xs w-max p-1 rounded mr-2 text-gray-700">Done</p>
              <div class="flex flex-row items-center mt-2">
                <div class="bg-gray-300 rounded-full w-4 h-4 mr-3"></div>
                <a href="#" class="text-xs text-gray-500">Sophie Worso</a>
              </div>
              
            </div>
            @endif
          @endforeach
          </div>
        </div>

    </div>
    
  </div>
</body>
</html>
<style>
  #todo,#doing,#done{
    min-height: 150px;
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




            // $('#done-add').bind('click', function(event) {
            //     if ($('#done-text').is(':hidden')) {
            //         $('#done-text').stop().fadeIn();
            //         $('#done-add-text').html("Cancel");
            //     }
            //     else  {
            //         $('#done-text').stop().fadeOut();
            //         $('#done-add-text').html("New");
            //     }
                

            // });

            // $("#message").on("keydown", function(e){

              
            //   if(e.which == 13){
                
                
            //     if ($("#message").val() !== "") {
            //       createAjax('POST','{{route('create.process')}}', '{{csrf_token()}}', {'event_id':{{$event->id}},'text':$("#message").val()});
            //       window.location.reload(true);
            //     }

            //     else {
            //       alert("Please fill the name in textarea");
            //       window.location.reload(true);
            //     }
                
               
              
            //   }

              
            // });

  });

</script>

<script>
   
  
  function show(id,type) {

    
    
    if ($('#done-text'+'-'+id).is(':hidden')) {
      $('#done-text'+'-'+id).stop().fadeIn();
      $('#done-add-text'+'-'+id).html("Cancel");
      
    }
    else  {
      $('#done-text'+'-'+id).stop().fadeOut();
      if (id == "999"){
        $('#done-add-text'+'-'+id).html("New");
      }
      else {
        $('#done-add-text'+'-'+id).html("Edit");
      }
    }
                

    

    $("#message"+'-'+id).on("keydown", function(e){

      if(e.which == 13){
                
        if ($("#message"+'-'+id).val() !== "") {
            if (id == "999"){
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
            window.location.reload(true);
        }
                
               
              
        }

              
    });
    
  }

</script>
    

