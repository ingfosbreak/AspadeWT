@extends('layouts.app')
@section('content')

    <!-- Main modal -->
    <div id="profileImage-modal" tabindex="-1" aria-hidden="true"
        class="fixed top-0 left-0 right-0 z-50 hidden w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] max-h-full">
        <div class="relative w-full max-w-md max-h-full">
            <!-- Modal content -->
            <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                <button type="button"
                    class="absolute top-3 right-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ml-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white"
                    data-modal-hide="profileImage-modal">
                    <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                        viewBox="0 0 14 14">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                    </svg>
                    <span class="sr-only">Close modal</span>
                </button>
                <div class="px-6 py-6 lg:px-8">
                    <h3 class="mb-4 text-xl font-medium text-gray-900 dark:text-white">Change Event Image</h3>
                    <form action="{{route('event.image',['event'=>$event])}}" class="space-y-6" method="POST"
                        enctype="multipart/form-data">
                        @csrf

                        <div>
                            <label class="block mb-2 text-sm font-medium text-gray-900" for="image">Upload file</label>
                            <input
                                class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none"
                                id="image" name="image" type="file" required>
                        </div>

                        <button type="submit"
                            class="w-full text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Change
                            Event Image</button>

                    </form>
                </div>
            </div>
        </div>
    </div>
    
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
                    <h3 class="mb-4 text-xl font-medium text-gray-900 dark:text-white">Edit Event Information</h3>
                    <form action="{{route('edit.event.info',['event'=>$event])}}" class="space-y-6" method="POST">
                        @csrf
                        <div>
                            <label for="name"
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Event
                                name</label>
                            <input type="string" name="name" id="name"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
                                placeholder="{{$event->name}}" value="{{$event->name}}">
                        </div>
                        <div>
                            <label for="num_member" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Num Member</label>
                            <input type="number" name="num_member" id="num_member"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
                                placeholder="{{$event->num_member}}" value="{{$event->num_member}}">
                        </div>
                        <div>
                            <label for="num_staff" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Num Staff</label>
                            <input type="number" name="num_staff" id="num_staff"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
                                placeholder="{{$event->num_staff}}" value="{{$event->num_staff}}">
                        </div>
                        <div>
                            <label for="budget" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Budget</label>
                            <input type="number" name="budget" id="budget"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
                                placeholder="{{$event->budget}}" value="{{$event->budget}}">
                        </div>
                        <!-- Category -->
                        <div>
                                    <label
                                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Activity Type</label>
                                    <select type="text" id="category" name="category"  
                                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                        placeholder="Choose a role for joining" required="">
                                        <option value="outdoor">outdoor</option>
                                        <option value="indoor">indoor</option>
                                        <option value="concert">concert</option>
                                        <option value="sport">sport</option>
                                        <option value="academic">Academic</option>
                                    </select>
                                    <label for="category"
                                        class="absolute text-sm  dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">
                                        activity type</label>
                                        @error('category')<div class= "text-xs text-red-600">{{ $message }}</div>@enderror
                        </div>
                        <div class="relative z-0">
                            <input type="date" id="date_register" name="date_register"
                                    class="block py-2.5 px-0 w-full text-base bg-transparent border-0 border-b-2 border-gray-300 appearance-none text-black focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                                    placeholder="d/m/y" autocomplete="off" placeholder="{{$event->date_register}}" value="{{$event->date_register}}"/>
                            <label for="date_register"
                                    class="absolute text-sm dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">
                                    Application Opening Date</label>
                        </div>

                        <div class="relative z-0">
                            <input type="date" id="date_start" name="date_start"
                                    class="block py-2.5 px-0 w-full text-base bg-transparent border-0 border-b-2 border-gray-300 appearance-none text-black focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                                    placeholder="d/m/y" autocomplete="off" placeholder="{{$event->date_start}}" value="{{$event->date_start}}"/>
                            <label for="date_start"
                                    class="absolute text-sm dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">                                    
                                    Event Start Date</label>
                        </div>

                        <div class="relative z-0">
                            <input type="date" id="date_close" name="date_close"
                                    class="block py-2.5 px-0 w-full text-base bg-transparent border-0 border-b-2 border-gray-300 appearance-none text-black focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                                    placeholder="d/m/y" autocomplete="off" placeholder="{{$event->date_close}}" value="{{$event->date_close}}"/>
                            <label for="date_close"
                                    class="absolute text-sm dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">
                                    Closing Date</label>
                        </div>
                        
                        <div class="relative z-0">
                                    <input type="text" id="location" name="location"
                                        class="block py-2.5 px-0 w-full text-base bg-transparent border-0 border-b-2 border-gray-300 appearance-none  focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                                        placeholder="{{$event->location}}" value="{{$event->location}}" autocomplete="off" />
                                    <label for="location"
                                        class="absolute text-sm dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">
                                        Event Location </label>
                        </div>

                        <label for="description"
                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">description</label>
                                <textarea type=text id="description" name="description" rows="4"
                                    class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 "
                                    placeholder="{{$event->description}}" value="{{$event->description}}"></textarea>

                        <button type="submit"
                            class="w-full text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Submit
                            edit</button>

                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Main modal -->
    <div id="popup-modal" tabindex="-1"
        class="fixed top-0 left-0 right-0 z-50 hidden p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] max-h-full">
        <div class="relative w-full max-w-md max-h-full">
            <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                <button type="button"
                    class="absolute top-3 right-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ml-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white"
                    data-modal-hide="popup-modal">
                    <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                        viewBox="0 0 14 14">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                    </svg>
                    <span class="sr-only">Close modal</span>
                </button>
                <div class="p-6 text-center">
                    <svg class="mx-auto mb-4 text-gray-400 w-12 h-12 " aria-hidden="true"
                        xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M10 11V6m0 8h.01M19 10a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                    </svg>
                    <h3 class="mb-5 text-lg font-normal text-gray-500 dark:text-gray-400">Are you sure you want to
                        Report this Event?</h3>
                    <form action="{{route('report.event')}}" class="" method="POST">
                        @csrf

                        <div>
                            <label for="name"
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">What do you report this Event for ?</label>
                            <input type="string" name="name" id="name"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
                                placeholder="What's wrong / suspicious about this Event ?" >
                        </div>
                        <label for="description"
                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white mt-5">description</label>
                                <textarea type=text id="description" name="description" rows="4"
                                    class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 "
                                    placeholder="Detail of Your Objective Report!!"></textarea>
                        
                        <div class="hidden">
                            <label for="event_id" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Event_id</label>
                            <input type="number" name="event_id" id="event_id"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
                                value="{{$event->id}}">
                        </div>

                        <div class="hidden">
                            <label for="user_id" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">User_id</label>
                            <input type="number" name="user_id" id="user_id"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
                                value="{{Auth::getUser()->id}}">
                        </div>
                                    

                        <div class="mt-5">
                        <button data-modal-hide="popup-modal" type="submit"
                            class="text-white bg-red-600 hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 dark:focus:ring-red-800 font-medium rounded-lg text-sm inline-flex items-center px-5 py-2.5 text-center mr-2">
                            Yes, I'm sure
                        </button>
                        <button data-modal-hide="popup-modal" type="button"
                            class="text-gray-500 bg-white hover:bg-gray-100 focus:ring-4 focus:outline-none focus:ring-gray-200 rounded-lg border border-gray-200 text-sm font-medium px-5 py-2.5 hover:text-gray-900 focus:z-10 dark:bg-gray-700 dark:text-gray-300 dark:border-gray-500 dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-gray-600">No,
                            cancel</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    

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
                    
                        <button data-modal-target="profileImage-modal" data-modal-toggle="profileImage-modal"
                        class="text-6xl text-green-400 hover:text-green-300 bg-gray-100 hover:bg-gray-500 w-fit h-fit px-3 mt-2 rounded-full"
                        type="button">+</button>

                    
                    </div>
                    
                    

                    <div class="flex w-full justify-center items-center gap-5">
                    @if ($event->isUserInEvent(Auth::getUser()->id))
                    
                    <a href="{{ route('event.main.main',['event' => $event])}}"
                        class="inline-flex items-center border border-indigo-300 px-3 py-1.5 rounded-md text-indigo-500 hover:bg-indigo-50  my-5">
                        <span class="ml-1 font-bold text-lg">Detail</span>
                    </a>
                    <!--  -->
                    @else 
                    <button id="dropdownDefaultButton" data-dropdown-toggle="dropdown" class="inline-flex w-fit items-center border border-indigo-300 px-3 py-1.5 rounded-md text-indigo-500 hover:bg-indigo-50  my-5 font-bold" type="button">Book Event<svg class="w-2.5 h-2.5 ml-2.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 4 4 4-4"/>
                    </svg></button>
                    <!-- Dropdown menu -->
                    <div id="dropdown" class="z-100 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700">
                        <ul class="py-2 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="dropdownDefaultButton">
                        <li>
                            <a href="{{ route('event.staff.formJoinEvent', ['event' => $event])}}" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Join As Staff</a>
                        </li>
                        <li>
                            <a href="{{route('event.formJoinEvent', ['event' => $event])}}" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Join As Participant</a>
                        </li>
                        </ul>
                    </div>
                    <!--  -->
                    @endif
                    
                    
                        <div class=" flex justify-end px-5  gap-3">
                            <button data-modal-target="information-modal" data-modal-toggle="information-modal" type="button">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-sliders2" viewBox="0 0 16 16">
                                <path fill-rule="evenodd" d="M10.5 1a.5.5 0 0 1 .5.5v4a.5.5 0 0 1-1 0V4H1.5a.5.5 0 0 1 0-1H10V1.5a.5.5 0 0 1 .5-.5ZM12 3.5a.5.5 0 0 1 .5-.5h2a.5.5 0 0 1 0 1h-2a.5.5 0 0 1-.5-.5Zm-6.5 2A.5.5 0 0 1 6 6v1.5h8.5a.5.5 0 0 1 0 1H6V10a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5ZM1 8a.5.5 0 0 1 .5-.5h2a.5.5 0 0 1 0 1h-2A.5.5 0 0 1 1 8Zm9.5 2a.5.5 0 0 1 .5.5v4a.5.5 0 0 1-1 0V13H1.5a.5.5 0 0 1 0-1H10v-1.5a.5.5 0 0 1 .5-.5Zm1.5 2.5a.5.5 0 0 1 .5-.5h2a.5.5 0 0 1 0 1h-2a.5.5 0 0 1-.5-.5Z"/>
                                </svg>
                            </button>
                        </div>

                        <button data-modal-target="popup-modal" data-modal-toggle="popup-modal" class="text-red-700">                                        
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-flag" viewBox="0 0 16 16">
                                <path d="M14.778.085A.5.5 0 0 1 15 .5V8a.5.5 0 0 1-.314.464L14.5 8l.186.464-.003.001-.006.003-.023.009a12.435 12.435 0 0 1-.397.15c-.264.095-.631.223-1.047.35-.816.252-1.879.523-2.71.523-.847 0-1.548-.28-2.158-.525l-.028-.01C7.68 8.71 7.14 8.5 6.5 8.5c-.7 0-1.638.23-2.437.477A19.626 19.626 0 0 0 3 9.342V15.5a.5.5 0 0 1-1 0V.5a.5.5 0 0 1 1 0v.282c.226-.079.496-.17.79-.26C4.606.272 5.67 0 6.5 0c.84 0 1.524.277 2.121.519l.043.018C9.286.788 9.828 1 10.5 1c.7 0 1.638-.23 2.437-.477a19.587 19.587 0 0 0 1.349-.476l.019-.007.004-.002h.001M14 1.221c-.22.078-.48.167-.766.255-.81.252-1.872.523-2.734.523-.886 0-1.592-.286-2.203-.534l-.008-.003C7.662 1.21 7.139 1 6.5 1c-.669 0-1.606.229-2.415.478A21.294 21.294 0 0 0 3 1.845v6.433c.22-.078.48-.167.766-.255C4.576 7.77 5.638 7.5 6.5 7.5c.847 0 1.548.28 2.158.525l.028.01C9.32 8.29 9.86 8.5 10.5 8.5c.668 0 1.606-.229 2.415-.478A21.317 21.317 0 0 0 14 7.655V1.222z"/>
                                </svg>
                        </button>
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
                    <label class="relative inline-flex items-center mb-5 cursor-pointer ml-5">
                        @if ($event->publish == "draft")
                        <input type="checkbox" value=true id="checkbox" class="sr-only peer" >
                        <div class="w-9 h-5 bg-gray-200 peer-focus:outline-none peer-focus:ring-4 peer-focus:ring-blue-300 dark:peer-focus:ring-blue-800 rounded-full peer dark:bg-gray-700 peer-checked:after:translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:left-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-4 after:w-4 after:transition-all dark:border-gray-600 peer-checked:bg-blue-600"></div>
                        <span class="ml-3 text-sm font-medium text-gray-700 ">draft</span>
                        @else
                        <input type="checkbox" value=true id="checkbox" class="sr-only peer" checked>
                        <div class="w-9 h-5 bg-gray-200 peer-focus:outline-none peer-focus:ring-4 peer-focus:ring-blue-300 dark:peer-focus:ring-blue-800 rounded-full peer dark:bg-gray-700 peer-checked:after:translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:left-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-4 after:w-4 after:transition-all dark:border-gray-600 peer-checked:bg-blue-600"></div>
                        <span class="ml-3 text-sm font-medium text-gray-700 ">publish</span>
                        @endif
                        
                    </label>


                    <div id="info-container">
                    @foreach ($event->getInfoSorted as $info)
                    @if ($info->type == "small")
                    <div id="{{$info->id}}">
                        <div class="flex text-gray-100 hover:text-gray-400">
                            <p class="rounded mr-2 text-2xl self-center mt-2">::</p>
                            <p class="text-base text-gray-600 leading-8 my-5 bg-white hover:bg-gray-100 focus:bg-gray-100 rounded-md pt-2 pl-2 flex-1 formysql" contenteditable="true" id="text-{{$info->id}}" onFocus="makefocus({{$info->id}})">
                                {!! nl2br(($info->text), true) !!}
                            </p>
                            <p class="rounded text-2xl self-center ml-2 text-5xl hover:text-gray-800" id="remove-{{$info->id}}" onClick="remove({{$info->id}})">-</p>
                        </div>
                        <div class="flex justify-between flex-wrap">
                        <p class="text-gray-400 not-show ml-5" id="under-{{$info->id}}"><span class="text-black" id="bold-{{$info->id}}">BOLD</span> :: <span class="text-gray-500" id="small-{{$info->id}}">small</span></p>
                        <p class="text-gray-400 not-show ml-5" id="under2-{{$info->id}}">click to <span class="text-red-700" id="cancel-{{$info->id}}">cancel</span>  click to <span class="text-blue-500" id="save-{{$info->id}}">save</span></p>
                        </div>
                        
                    </div>
                    @else
                    
                    <div id="{{$info->id}}">
                        <div class="flex text-gray-100 hover:text-gray-400">
                            <p class="rounded mr-2 text-2xl self-center mt-2">::</p>
                            <p class="text-3xl text-black leading-8 my-5 bg-white hover:bg-gray-100 focus:bg-gray-100 rounded-md pt-2 pl-2 flex-1 formysql" contenteditable="true" id="text-{{$info->id}}" onFocus="makefocus({{$info->id}})">
                            {!! nl2br(($info->text), true) !!}
                            </p>
                            <p class="rounded text-2xl self-center ml-2 text-5xl hover:text-gray-800" id="remove-{{$info->id}}" onClick="remove({{$info->id}})">-</p>
                        </div>
                        <div class="flex justify-between flex-wrap">
                        <p class="text-gray-400 not-show ml-5" id="under-{{$info->id}}"><span class="text-black" id="bold-{{$info->id}}">BOLD</span> :: <span class="text-gray-500" id="small-{{$info->id}}">small</span></p>
                        <p class="text-gray-400 not-show ml-5" id="under2-{{$info->id}}">click to <span class="text-red-700" id="cancel-{{$info->id}}">cancel</span>  click to <span class="text-blue-500" id="save-{{$info->id}}">save</span></p>
                        </div>
                        
                    </div>
                    @endif

                    @endforeach
                    </div>
                </div>

                <div class="flex flex-row items-center text-gray-300 mt-2 hover:text-black px-10 mb-5" id="New-text" onClick="newText()" >
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
        
        .dropdown:hover .dropdown-menu {
            display: block;
        }
        @if ($event->event_image != null)
        #main-image, #back-image {
            background-image: url("{{ asset('storage/'.$event->event_image->image_path) }}") 
        }
        @endif
        
    </style>



    <script type="module" >
        $( document ).ready(function() {

        const drake = dragula([$('#info-container').get(0)], { revertOnSpill: true });

        // editAjax('POST','{{route('edit.process')}}', '{{csrf_token()}}', {'process_id':"3",'text':"gggggg"});

            drake.on('drop', function(el, target, source, sibling) {
                var index = $(el).index();
                var id = el.id;
                console.log(index);
                
                updateAjax('POST', '{{route('updatepos.info')}}', '{{csrf_token()}}', {'info_id':id,'pos':index,'event_id':{{$event->id}}});
                window.location.reload(true);
                
            });


        $('#checkbox').click(function() {
            var check = '{{$event->publish}}' == "draft" ? "publish" : "draft" 
            console.log(check);
            editAjax('POST', '{{route('publish.event')}}', '{{csrf_token()}}', {'event_id':{{$event->id}},'publish':check});
            window.location.reload(true);
      
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
                $('#under2'+'-'+id).stop().fadeIn();
                
            }

            $("#bold"+'-'+id).click(function(){
                updateAjax('POST','{{route('type.info')}}', '{{csrf_token()}}', {'info_id':id,'type':'bold'});
                window.location.reload(true);
            });

            $("#small"+'-'+id).click(function(){
                updateAjax('POST','{{route('type.info')}}', '{{csrf_token()}}', {'info_id':id,'type':'small'});
                window.location.reload(true);
            });

            $("#cancel"+'-'+id).click(function(){
                window.location.reload(true);
            });

            $("#save"+'-'+id).click(function(){
                if (before != $('#text-'+id).html()) { 
                    
                    var mytext = $('#text-'+id).html();
                    var z = mytext.replaceAll("<div>","<br>").replaceAll("</div>","").replaceAll(/\s/g, '');

                    if (z == '<br>') {
                        editAjax('POST', '{{route('edit.info')}}', '{{csrf_token()}}', {'info_id':id,'text':""});
                        window.location.reload(true);
                    }
                    else {
                        editAjax('POST', '{{route('edit.info')}}', '{{csrf_token()}}', {'info_id':id,'text':z});
                        window.location.reload(true);
                        
                    }
                }
                $('#text-'+id).blur();
                window.getSelection().removeAllRanges();
                $('#under'+'-'+id).stop().fadeOut();
                $('#under2'+'-'+id).stop().fadeOut();
            });
            


            $('#text-'+id).on('blur', function () {
                
                if (before != $('#text-'+id).html()) { 
                    
                    var mytext = $('#text-'+id).html();
                    var z = mytext.replaceAll("<div>","<br>").replaceAll("</div>","").replaceAll(/\s/g, '');

                    if (z == '<br>') {
                        editAjax('POST', '{{route('edit.info')}}', '{{csrf_token()}}', {'info_id':id,'text':""});
                        window.location.reload(true);
                    }
                    else {
                        editAjax('POST', '{{route('edit.info')}}', '{{csrf_token()}}', {'info_id':id,'text':z});
                        window.location.reload(true);
                        
                    }
                }
                
                $('#under'+'-'+id).stop().fadeOut();
                $('#under2'+'-'+id).stop().fadeOut();

            });
        }

    function remove(id) {
        removeAjax('POST','{{route('remove.info')}}', '{{csrf_token()}}', {'info_id':id});
        window.location.reload(true);
    }

    </script>
    @endsection


