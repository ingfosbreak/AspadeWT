@extends('layouts.app')
@section('content')

    <div class="mx-auto p-5 sm:p-10  relative">
        <div class="bg-cover bg-center text-center overflow-hidden"
            style="min-height: 500px; background-image: url('https://api.time.com/wp-content/uploads/2020/07/never-trumpers-2020-election-01.jpg?quality=85&amp;w=1201&amp;h=676&amp;crop=1')"
            title="Woman holding a mug">
        </div>
        <div class="max-w-3xl mx-auto">
            <div
                class="mt-3 bg-white rounded-b lg:rounded-b-none lg:rounded-r flex flex-col justify-between leading-normal">
                <div class="bg-white relative top-0 -mt-32 p-3 sm:p-10" id="info-container">
                    
                    @foreach ($event->getInfoSorted as $info)
                    <div id="{{$info->id}}">
                        <div class="flex text-gray-100 hover:text-gray-400">
                            <p class="rounded mr-2  text-2xl self-center mt-2">::</p>
                            <p class="text-base text-black leading-8 my-5 bg-white hover:bg-gray-100 focus:bg-gray-100 rounded-md pt-2 pl-2 flex-1 formysql" contenteditable="true" id="text-{{$info->id}}" onFocus="makefocus({{$info->id}})">
                            {!! nl2br(($info->text), true) !!}
                            </p>
                        </div>
                        <p class="text-gray-400 not-show ml-5" id="under-{{$info->id}}">escape to <span class="text-red-500">cancel</span> press to <span class="text-blue-500">save</span></p>
                    </div>
                    @endforeach
                    
                </div>

                <div class="flex flex-row items-center text-gray-300 mt-2 px-1 hover:text-black px-10 mb-5" id="New-text" onClick="newText()" >
                        <p class="rounded mr-2 text-5xl">+</p>
                        <p class="pt-1 rounded text-md" >New text</p>
                </div>
                <div class="flex justify-between px-5 py-5" >
                <a href="{{ route('user.main')}}">
                    <button
                        class="rounded-lg bg-wirte-500 py-5 px-10 font-sans text-xs font-bold uppercase text-black shadow-md shadow-black-500/20 transition-all hover:shadow-lg hover:shadow-black-500/40 focus:opacity-[0.85] focus:shadow-none active:opacity-[0.85] active:shadow-none disabled:pointer-events-none disabled:opacity-50 disabled:shadow-none"
                        data-ripple-light="true">
                        Back
                    </button>
                </a>
                <a href="{{ route('event.main.main',['event'=> $event])}}">
                    <button
                        class="rounded-lg bg-orange-500 py-5 px-10 font-sans text-xs font-bold uppercase text-white shadow-md shadow-orange-500/20 transition-all hover:shadow-lg hover:shadow-orange-500/40 focus:opacity-[0.85] focus:shadow-none active:opacity-[0.85] active:shadow-none disabled:pointer-events-none disabled:opacity-50 disabled:shadow-none"
                        data-ripple-light="true">
                        Join
                    </button>
                </a>
                <a href="{{ route('event.kanban',['event'=> $event])}}">
                    <button
                        class="rounded-lg bg-orange-500 py-5 px-10 font-sans text-xs font-bold uppercase text-white shadow-md shadow-orange-500/20 transition-all hover:shadow-lg hover:shadow-orange-500/40 focus:opacity-[0.85] focus:shadow-none active:opacity-[0.85] active:shadow-none disabled:pointer-events-none disabled:opacity-50 disabled:shadow-none"
                        data-ripple-light="true">
                        Kanban
                    </button>
                </a>
            
            </div>

            </div>
        </div>
    </div>
    <p class="text-base leading-8 my-5">
                        
    </p>

    <style>
        .formysql{
            min-height: 50px;
            /* display:inline-block; */
            /* white-space: pre-wrap; */
            
        }

        #info-container {
            min-height: 200px;
        }
    </style>



    <script type="module" >
        $( document ).ready(function() {

        const drake = dragula([$('#info-container').get(0)], { revertOnSpill: true });

        // editAjax('POST','{{route('edit.process')}}', '{{csrf_token()}}', {'process_id':"3",'text':"gggggg"});

            drake.on('drop', function(el, target, source, sibling) {
                var index = $(el).index();
                var id = el.id;
                
                updateAjax('POST', '{{route('updatepos.info')}}', '{{csrf_token()}}', {'info_id':id,'pos':index,'event_id':{{$event->id}}});
                
            });
            

        });


    </script>

    <script>

        function newText() {
            createAjax('POST','{{route('create.info')}}', '{{csrf_token()}}', {'event_id':{{$event->id}}});
            window.location.reload(true);
        }


        function makefocus(id) {

            
            var before = $('#text-'+id).html();

            if ($('#under'+'-'+id).is(':hidden')) {
                $('#under'+'-'+id).stop().fadeIn();
                
            }


            $('#text-'+id).on('blur', function () {
                console.log($('#text-'+id).html());
                
                if (before != $('#text-'+id).html()) { 
                    
                    var mytext = $('#text-'+id).html();
                    var z = mytext.replaceAll("<div>","<br>").replaceAll("</div>","").replaceAll(/\s/g, '');

                    if (z == '<br>') {
                        editAjax('POST', '{{route('edit.info')}}', '{{csrf_token()}}', {'info_id':id,'text':""});
                        window.location.reload(true);
                    }
                    else {
                        editAjax('POST', '{{route('edit.info')}}', '{{csrf_token()}}', {'info_id':id,'text':z});
                        // window.location.reload(true);
                        
                    }
                }
                    
                $('#under'+'-'+id).stop().fadeOut();

            });
        }

    </script>
    @endsection


