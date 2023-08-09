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
                <div class="bg-white relative top-0 -mt-32 p-5 sm:p-10" id="info-container">
                    <h1 href="#" class="text-gray-900 font-bold text-3xl mb-2">Revenge of the Never Trumpers</h1>
                    <p class="text-gray-700 text-xs mt-2">Written By:
                        <a href="#"
                            class="text-indigo-600 font-medium hover:text-gray-900 transition duration-500 ease-in-out">
                            Ahmad Sultani
                        </a> In
                        <a href="#"
                            class="text-xs text-indigo-600 font-medium hover:text-gray-900 transition duration-500 ease-in-out">
                            Election
                        </a>,
                        <a href="#"
                            class="text-xs text-indigo-600 font-medium hover:text-gray-900 transition duration-500 ease-in-out">
                            Politics
                        </a>

                    </p>

                    <p class="text-base leading-8 my-5">
                        Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been
                        the
                        industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of
                        type
                        and scrambled it to make a type specimen book. It has survived not only five centuries, but also
                        the
                        leap into electronic typesetting, remaining essentially unchanged. It was popularised in the
                        1960s
                        with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with
                        desktop
                        publishing software like Aldus PageMaker including versions of Lorem Ipsum.
                    </p>

                    <h3 class="text-2xl font-bold my-5" contenteditable="true">#1. What is Lorem Ipsum?</h3>
                    <p class="text-gray-400">escape to <span class="text-red-500">cancel</span> press to <span class="text-blue-500">save</span></p>

                    <p class="text-base leading-8 my-5">
                        Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been
                        the
                        industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of
                        type
                        and scrambled it to make a type specimen book. It has survived not only five centuries, but also
                        the
                        leap into electronic typesetting, remaining essentially unchanged. It was popularised in the
                        1960s
                        with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with
                        desktop
                        publishing software like Aldus PageMaker including versions of Lorem Ipsum.
                    </p>

                    <blockquote class="border-l-4 text-base italic leading-8 my-5 p-5 text-indigo-600" contenteditable="true" id="test" onFocus="makefocus(this.id)">Lorem Ipsum is
                        simply
                        dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's
                        standard
                        dummy text ever since the 1500s
                    </blockquote>

                    <p class="text-base leading-8 my-5">
                        Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been
                        the
                        industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of
                        type
                        and scrambled it to make a type specimen book. It has survived not only five centuries, but also
                        the
                        leap into electronic typesetting, remaining essentially unchanged. It was popularised in the
                        1960s
                        with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with
                        desktop
                        publishing software like Aldus PageMaker including versions of Lorem Ipsum.
                    </p>


                    <div class="align-items:flex-end" style="display: flex; justify-content: space-between;">
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
    </div>



    <script type="module" >
        $( document ).ready(function() {

        const drake = dragula([$('#info-container').get(0)], { revertOnSpill: true });

        // editAjax('POST','{{route('edit.process')}}', '{{csrf_token()}}', {'process_id':"3",'text':"gggggg"});

            drake.on('drop', function(el, target, source, sibling) {
                
                // console.log(el.getAttribute("data-id"));
                updateAjax('POST','{{route('update.process')}}', '{{csrf_token()}}', {'process_id':el.getAttribute("data-id"),'status':target.id});
                

            });
            

            
        });


    </script>

    <script>


        function makefocus(id) {


            var before = $('#'+id).html();
            console.log(before);

            $('#'+id).on('blur', function () {
                    console.log("change");

            });


            // $('#'+id).on('focus', '[contenteditable]', function() {
            //     before = $('#'+id).html();
                

            
            // }).on('blur', '[contenteditable]', function() {
            //     if (before != $('#'+id).html()) { 
            //         console.log("change");
            //     }

            // });


        }

    </script>
    @endsection


