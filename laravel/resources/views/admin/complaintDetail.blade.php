<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite(['resources/css/app.css', 'resources/js/app.js','resources/css/main.css'])
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.8.0/flowbite.min.css"  rel="stylesheet" />
</head>
<body>


<div class="mx-auto p-5 sm:p-10 relative flex flex-col gap-5 drop-shadow-2xl">
        
    
        @if ($event->event_image == null)
        <div class="bg-cover bg-center text-center overflow-hidden py-5"
            style="min-height: 500px; background-image: url('https://images.unsplash.com/photo-1492684223066-81342ee5ff30?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=2070&q=80')"
            title="Woman holding a mug">    
        @else
        <div class="bg-cover bg-center text-center overflow-hidden py-5"
            style="min-height: 500px;" id="back-image"
            title="Woman holding a mug">

        @endif

        
            <div class="mx-auto h-full flex items-center justify-center px-8 drop-shadow-md">
                <div class="flex flex-col w-fit bg-white rounded shadow-lg sm:w-3/4 md:w-1/2 lg:w-3/5">
                
                    <!-- image -->
                    @if ($event->event_image == null)
                    <div class="w-full h-64 bg-top bg-cover rounded-t flex justify-center"  style="background-image: url('https://images.unsplash.com/photo-1492684223066-81342ee5ff30?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=2070&q=80')">
                    @else
                    <div class="w-full h-64 bg-top bg-cover rounded-t flex justify-center"  id="main-image">
                    @endif
                    </div>
                    
                    

                    <div class="flex w-full justify-center items-center gap-5">
                    
                    
                    <a href="{{ route('admin.complaintDetail.behide',['event' => $event])}}"
                        class="inline-flex items-center border border-indigo-300 px-3 py-1.5 rounded-md text-indigo-500 hover:bg-indigo-50  my-5">
                        <span class="ml-1 font-bold text-lg">Detail</span>
                    </a>
                    
                    
                    
                        
                    </div>



                    <div class="flex flex-col w-full  items-center">
                        <div class="p-4 font-normal text-gray-800 md:w-3/4 text-xl">
                            
                            <h1 class="mb-4 text-4xl font-bold leading-none tracking-tight text-gray-800">{{$event->name}}</h1>
                            
                            <div class="flex items-center gap-3">                        
                                <p class="leading-normal">{{$event->description}}</p>
                            </div>
                            <div class="flex items-center gap-3">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-calendar-event" viewBox="0 0 16 16">
                                <path d="M11 6.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1z"/>
                                <path d="M3.5 0a.5.5 0 0 1 .5.5V1h8V.5a.5.5 0 0 1 1 0V1h1a2 2 0 0 1 2 2v11a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V3a2 2 0 0 1 2-2h1V.5a.5.5 0 0 1 .5-.5zM1 4v10a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V4H1z"/>
                                </svg>
                            <p class="font-bold">{{$event->date}}</p>
                            </div>
                            <div>
                                @if ($event->getMembersCount() == $event->num_member)
                                <div class="flex items-center gap-3">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-people" viewBox="0 0 16 16">
                                    <path d="M15 14s1 0 1-1-1-4-5-4-5 3-5 4 1 1 1 1h8Zm-7.978-1A.261.261 0 0 1 7 12.996c.001-.264.167-1.03.76-1.72C8.312 10.629 9.282 10 11 10c1.717 0 2.687.63 3.24 1.276.593.69.758 1.457.76 1.72l-.008.002a.274.274 0 0 1-.014.002H7.022ZM11 7a2 2 0 1 0 0-4 2 2 0 0 0 0 4Zm3-2a3 3 0 1 1-6 0 3 3 0 0 1 6 0ZM6.936 9.28a5.88 5.88 0 0 0-1.23-.247A7.35 7.35 0 0 0 5 9c-4 0-5 3-5 4 0 .667.333 1 1 1h4.216A2.238 2.238 0 0 1 5 13c0-1.01.377-2.042 1.09-2.904.243-.294.526-.569.846-.816ZM4.92 10A5.493 5.493 0 0 0 4 13H1c0-.26.164-1.03.76-1.724.545-.636 1.492-1.256 3.16-1.275ZM1.5 5.5a3 3 0 1 1 6 0 3 3 0 0 1-6 0Zm3-2a2 2 0 1 0 0 4 2 2 0 0 0 0-4Z"/>
                                    </svg>
                                <p class="text-red-500 font-bold"> {{$event->getMembersCount()}} / {{$event->num_member}}</p>
                                </div>                        
                                @endif
                                @if ($event->getMembersCount() < $event->num_member)
                                <div class="flex items-center gap-3">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-people" viewBox="0 0 16 16">
                                    <path d="M15 14s1 0 1-1-1-4-5-4-5 3-5 4 1 1 1 1h8Zm-7.978-1A.261.261 0 0 1 7 12.996c.001-.264.167-1.03.76-1.72C8.312 10.629 9.282 10 11 10c1.717 0 2.687.63 3.24 1.276.593.69.758 1.457.76 1.72l-.008.002a.274.274 0 0 1-.014.002H7.022ZM11 7a2 2 0 1 0 0-4 2 2 0 0 0 0 4Zm3-2a3 3 0 1 1-6 0 3 3 0 0 1 6 0ZM6.936 9.28a5.88 5.88 0 0 0-1.23-.247A7.35 7.35 0 0 0 5 9c-4 0-5 3-5 4 0 .667.333 1 1 1h4.216A2.238 2.238 0 0 1 5 13c0-1.01.377-2.042 1.09-2.904.243-.294.526-.569.846-.816ZM4.92 10A5.493 5.493 0 0 0 4 13H1c0-.26.164-1.03.76-1.724.545-.636 1.492-1.256 3.16-1.275ZM1.5 5.5a3 3 0 1 1 6 0 3 3 0 0 1-6 0Zm3-2a2 2 0 1 0 0 4 2 2 0 0 0 0-4Z"/>
                                    </svg>
                                <p class="text-green-700 font-bold"> {{$event->getMembersCount()}} / {{$event->num_member}}</p>
                                </div>
                                @endif
                            </div>
                            <div>
                                @if ($event->getStaffsCount() == $event->num_staff)
                                <div class="flex items-center gap-3">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-check" viewBox="0 0 16 16">
                                    <path d="M12.5 16a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7Zm1.679-4.493-1.335 2.226a.75.75 0 0 1-1.174.144l-.774-.773a.5.5 0 0 1 .708-.708l.547.548 1.17-1.951a.5.5 0 1 1 .858.514ZM11 5a3 3 0 1 1-6 0 3 3 0 0 1 6 0ZM8 7a2 2 0 1 0 0-4 2 2 0 0 0 0 4Z"/>
                                    <path d="M8.256 14a4.474 4.474 0 0 1-.229-1.004H3c.001-.246.154-.986.832-1.664C4.484 10.68 5.711 10 8 10c.26 0 .507.009.74.025.226-.341.496-.65.804-.918C9.077 9.038 8.564 9 8 9c-5 0-6 3-6 4s1 1 1 1h5.256Z"/>
                                    </svg>
                                <p class="text-red-500 font-bold"> {{$event->getStaffsCount()}} / {{$event->num_staff}}</p>
                                </div>                        
                                @endif
                                @if ($event->getStaffsCount() < $event->num_staff)
                                <div class="flex items-center gap-3">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-check" viewBox="0 0 16 16">
                                    <path d="M12.5 16a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7Zm1.679-4.493-1.335 2.226a.75.75 0 0 1-1.174.144l-.774-.773a.5.5 0 0 1 .708-.708l.547.548 1.17-1.951a.5.5 0 1 1 .858.514ZM11 5a3 3 0 1 1-6 0 3 3 0 0 1 6 0ZM8 7a2 2 0 1 0 0-4 2 2 0 0 0 0 4Z"/>
                                    <path d="M8.256 14a4.474 4.474 0 0 1-.229-1.004H3c.001-.246.154-.986.832-1.664C4.484 10.68 5.711 10 8 10c.26 0 .507.009.74.025.226-.341.496-.65.804-.918C9.077 9.038 8.564 9 8 9c-5 0-6 3-6 4s1 1 1 1h5.256Z"/>
                                    </svg>
                                <p class="text-blue-700 font-bold"> {{$event->getStaffsCount()}} / {{$event->num_staff}}</p>
                                </div>
                                @endif
                            </div>
                        </div>
                    </div>
                    
                </div>

            </div>

            

        </div>


        <div class="max-w-3xl mx-auto mt-20 w-full drop-shadow-2xl">
            <div
                class="mt-3 bg-white rounded-b lg:rounded-b-none lg:rounded-r flex flex-col justify-between leading-normal">
                <div class="bg-white relative top-0 -mt-32 p-3 sm:p-10" >
                    


                    <div id="info-container">
                    @foreach ($event->getInfoSorted as $info)
                    @if ($info->type == "small")
                    <div id="{{$info->id}}">
                        <div class="flex text-gray-100 hover:text-gray-400">
                            
                            <p class="text-base text-gray-600 leading-8 my-5 bg-white hover:bg-gray-100 focus:bg-gray-100 rounded-md pt-2 pl-2 flex-1 formysql"  id="text-{{$info->id}}" onFocus="makefocus({{$info->id}})">
                                {!! nl2br(($info->text), true) !!}
                            </p>
                            
                        </div>
                        
                        
                    </div>
                    @else
                    
                    <div id="{{$info->id}}">
                        <div class="flex text-gray-100 hover:text-gray-400">
                            
                            <p class="text-3xl text-black leading-8 my-5 bg-white hover:bg-gray-100 focus:bg-gray-100 rounded-md pt-2 pl-2 flex-1 formysql" id="text-{{$info->id}}" onFocus="makefocus({{$info->id}})">
                            {!! nl2br(($info->text), true) !!}
                            </p>
                            
                        </div>
                        
                        
                    </div>
                    @endif

                    @endforeach
                    </div>
                </div>

               
                
                <div class="flex justify-between px-5 py-5" >
                    
                <a href="{{route('admin.complaint')}}">
                    <button
                        class="rounded-lg bg-wirte-500 py-5 px-10 font-sans text-xs font-bold uppercase text-black shadow-md shadow-black-500/20 transition-all hover:shadow-lg hover:shadow-black-500/40 focus:opacity-[0.85] focus:shadow-none active:opacity-[0.85] active:shadow-none disabled:pointer-events-none disabled:opacity-50 disabled:shadow-none"
                        data-ripple-light="true">
                        Back
                    </button>
                </a>


                
                
            
            </div>

            </div>
        </div>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.8.0/flowbite.min.js"></script>
    
    
</body>

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
</html>