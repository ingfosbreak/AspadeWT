@extends('layouts.event')
@section('content')

<!-- Main modal -->
<div id="information-modal" tabindex="-1" aria-hidden="true"
        class="fixed top-0 left-0 right-0 z-50 hidden w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] max-h-full">
        <div class="relative w-full max-w-md max-h-full">
            <!-- Modal content -->
            <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                <button type="button"
                    class="absolute top-3 right-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ml-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white"
                    data-modal-hide="information-modal">
                    <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                        viewBox="0 0 14 14">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                    </svg>
                    <span class="sr-only">Close modal</span>
                </button>
                <div class="px-6 py-6 lg:px-8">
                    <h3 class="mb-4 text-xl font-medium text-gray-900 dark:text-white">Add Event Announcement</h3>
                    <form action="{{route('event.create.an',['event'=>$event])}}" class="space-y-6" method="POST">
                        @csrf
                        <div>
                            <label for="title"
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Title</label>
                            <input type="string" name="title" id="title"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
                                placeholder="title">
                        </div>
                        

                        <label for="detail"
                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">detail</label>
                                <textarea type=text id="detail" name="detail" rows="4"
                                    class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 "
                                    placeholder="Put your announcement here!!!"></textarea>

                        <div class="hidden">
                            <label for="type"
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Type</label>
                            <input type="string" name="type" id="type"  
                                class="bg-white border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 "
                                placeholder="" value="announce">
                        </div>

                        <button type="submit"
                            class="w-full text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Submit
                            edit</button>

                    </form>
                </div>
            </div>
        </div>
    </div>

<div class="flex w-full justify-center">
    <!-- from :https://tailwindcomponents.com/component/blog-post -->
    <!-- component -->
    
    <div class="flex flex-col mx-auto pt-5 bg-white w-full items-center">
        <div class=" w-full flex justify-end px-20 gap-5 items-center font-bold">
            <button data-modal-target="information-modal" data-modal-toggle="information-modal" type="button" class="flex items-center gap-5">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-megaphone" viewBox="0 0 16 16">
        <path d="M13 2.5a1.5 1.5 0 0 1 3 0v11a1.5 1.5 0 0 1-3 0v-.214c-2.162-1.241-4.49-1.843-6.912-2.083l.405 2.712A1 1 0 0 1 5.51 15.1h-.548a1 1 0 0 1-.916-.599l-1.85-3.49a68.14 68.14 0 0 0-.202-.003A2.014 2.014 0 0 1 0 9V7a2.02 2.02 0 0 1 1.992-2.013 74.663 74.663 0 0 0 2.483-.075c3.043-.154 6.148-.849 8.525-2.199V2.5zm1 0v11a.5.5 0 0 0 1 0v-11a.5.5 0 0 0-1 0zm-1 1.35c-2.344 1.205-5.209 1.842-8 2.033v4.233c.18.01.359.022.537.036 2.568.189 5.093.744 7.463 1.993V3.85zm-9 6.215v-4.13a95.09 95.09 0 0 1-1.992.052A1.02 1.02 0 0 0 1 7v2c0 .55.448 1.002 1.006 1.009A60.49 60.49 0 0 1 4 10.065zm-.657.975 1.609 3.037.01.024h.548l-.002-.014-.443-2.966a68.019 68.019 0 0 0-1.722-.082z"/>
        </svg>
        <p>Add Announcement</p>
        </button>
        
        </div>
        <h3 class="text-4xl text-gray-700 font-bold mb-6 ml-3 mt-16">Latest News</h3>
        

        <ol>
            @foreach ($event->event_announcement as $announce)
            @if ($announce->type == "announce")
            <li class="border-l-2 border-purple-600">
                <div class="md:flex flex-start">
                    <div class="bg-purple-600 w-6 h-6 flex items-center justify-center rounded-full -ml-3.5">
                        <svg aria-hidden="true" focusable="false" data-prefix="fas" class="text-white w-3 h-3"
                            role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                            <path fill="currentColor"
                                d="M0 464c0 26.5 21.5 48 48 48h352c26.5 0 48-21.5 48-48V192H0v272zm64-192c0-8.8 7.2-16 16-16h288c8.8 0 16 7.2 16 16v64c0 8.8-7.2 16-16 16H80c-8.8 0-16-7.2-16-16v-64zM400 64h-48V16c0-8.8-7.2-16-16-16h-32c-8.8 0-16 7.2-16 16v48H160V16c0-8.8-7.2-16-16-16h-32c-8.8 0-16 7.2-16 16v48H48C21.5 64 0 85.5 0 112v48h448v-48c0-26.5-21.5-48-48-48z">
                            </path>
                        </svg>
                    </div>
                    <div class="block p-6 rounded-lg shadow-lg bg-gray-100 max-w-fit ml-6 mb-10">
                        <div class="flex justify-between mb-4">
                            <p 
                                class="w-fit font-medium text-purple-600 hover:text-purple-700 focus:text-purple-800 duration-300 transition ease-in-out text-sm">
                                {{$announce->title}}</p>
                            <p
                                class="ml-6 font-medium text-purple-600 hover:text-purple-700 focus:text-purple-800 duration-300 transition ease-in-out text-sm">
                                {{$announce->created_at}}
                            </p>
                        </div>
                        <p class="text-gray-700 mb-6">{{$announce->detail}}</p>
                        <button type="button" data-modal-target="information-modal-{{$announce->id}}" data-modal-toggle="information-modal-{{$announce->id}}" 
                            class="inline-block px-4 py-1.5 bg-purple-600 text-white font-medium text-xs leading-tight uppercase rounded shadow-md hover:bg-purple-700 hover:shadow-lg focus:bg-purple-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-purple-800 active:shadow-lg transition duration-150 ease-in-out"
                            data-mdb-ripple="true">Edit</button>
                        
                        <button type="button" onClick="remove({{$announce->id}})"
                            class="inline-block px-3.5 py-1 border-2 border-purple-600 text-purple-600 font-medium text-xs leading-tight uppercase rounded hover:bg-black hover:bg-opacity-5 focus:outline-none focus:ring-0 transition duration-150 ease-in-out"
                            data-mdb-ripple="true">Remove</button>
                    </div>
                </div>
                <!--  -->
                <!-- Main modal -->

                <div id="information-modal-{{$announce->id}}" tabindex="-1" aria-hidden="true"
                        class="fixed top-0 left-0 right-0 z-50 hidden w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] max-h-full">
                        <div class="relative w-full max-w-md max-h-full">
                            <!-- Modal content -->
                            <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                                <button type="button"
                                    class="absolute top-3 right-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ml-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white"
                                    data-modal-hide="information-modal-{{$announce->id}}">
                                    <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                                        viewBox="0 0 14 14">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                                    </svg>
                                    <span class="sr-only">Close modal</span>
                                </button>
                                <div class="px-6 py-6 lg:px-8">
                                    <h3 class="mb-4 text-xl font-medium text-gray-900 dark:text-white">Edit Event Announcement </h3>
                                    <form action="{{route('event.edit.an',['announce'=>$announce,'event'=>$event])}}" class="space-y-6" method="POST">
                                        @csrf
                                        <div>
                                            <label for="title"
                                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Title</label>
                                            <input type="string" name="title" id="title"
                                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
                                                placeholder="title">
                                        </div>
                                        

                                        <label for="detail"
                                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">detail</label>
                                                <textarea type=text id="detail" name="detail" rows="4"
                                                    class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 "
                                                    placeholder="Put your announcement here!!!"></textarea>

                                        <div class="hidden">
                                            <label for="type"
                                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Type</label>
                                            <input type="string" name="type" id="type"  
                                                class="bg-white border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 "
                                                placeholder="" value="announce">
                                        </div>

                                        <button type="submit"
                                            class="w-full text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Submit
                                            edit</button>

                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>

                <!--  -->
            </li>
            @else
            <li class="border-l-2 border-green-600">
                <div class="md:flex flex-start">
                    <div class="bg-green-600 w-6 h-6 flex items-center justify-center rounded-full -ml-3.5">
                        <svg aria-hidden="true" focusable="false" data-prefix="fas" class="text-white w-3 h-3"
                            role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                            <path fill="currentColor"
                                d="M0 464c0 26.5 21.5 48 48 48h352c26.5 0 48-21.5 48-48V192H0v272zm64-192c0-8.8 7.2-16 16-16h288c8.8 0 16 7.2 16 16v64c0 8.8-7.2 16-16 16H80c-8.8 0-16-7.2-16-16v-64zM400 64h-48V16c0-8.8-7.2-16-16-16h-32c-8.8 0-16 7.2-16 16v48H160V16c0-8.8-7.2-16-16-16h-32c-8.8 0-16 7.2-16 16v48H48C21.5 64 0 85.5 0 112v48h448v-48c0-26.5-21.5-48-48-48z">
                            </path>
                        </svg>
                    </div>
                    <div class="block p-6 rounded-lg shadow-lg bg-gray-100 max-w-fit ml-6 mb-10">
                        <div class="flex justify-between mb-4">
                            <p 
                                class="font-medium text-green-600 hover:text-green-700 focus:text-green-800 duration-300 transition ease-in-out text-sm">
                                {{$announce->title}}</p>
                            <p 
                                class="ml-6 font-medium text-green-600 hover:text-green-700 focus:text-green-800 duration-300 transition ease-in-out text-sm">
                                {{$announce->created_at}}</p>
                        </div>
                        <p class="text-gray-700 mb-6">{{$announce->detail}}</p>
                       
                        <button type="button" onClick="remove({{$announce->id}})"
                            class="inline-block px-3.5 py-1 border-2 border-green-600 text-green-600 font-medium text-xs leading-tight uppercase rounded hover:bg-black hover:bg-opacity-5 focus:outline-none focus:ring-0 transition duration-150 ease-in-out"
                            data-mdb-ripple="true">Remove</button>
                    </div>
                </div>
            </li>
            
            @endif
            @endforeach
            
            
        </ol>
    </div>
</div>

<style>
    p{
            white-space: pre-wrap;
            word-wrap: break-word;
            word-break: break-all;
            white-space: normal;
            display:block;

 }
</style>



<script>
    function remove(id) {
        removeAjax('POST','{{route('event.remove.an')}}', '{{csrf_token()}}', {'announce_id':id});
        window.location.reload(true);
    }
</script>


@endsection



