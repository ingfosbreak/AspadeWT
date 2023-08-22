@extends('layouts.event')
@section('content')


<link
    href="https://fonts.googleapis.com/css?family=Material+Icons|Material+Icons+Outlined|Material+Icons+Two+Tone|Material+Icons+Round|Material+Icons+Sharp"
    rel="stylesheet">
<div class="container mx-auto px-4 sm:px-6 lg:px-8 py-8">
    <h2 class="text-2xl font-bold mb-4">Team Members Management</h2>
    <table id="example" class="table-auto">
        <thead>
            <tr>
                <th class="px-4 py-2">User</th>
                <th class="px-4 py-2">Role</th>
                <th class="px-4 py-2">Team</th>
                @can('view', $event)
                                    @can('viewWithRole', Auth::getUser()->user_pivots->where('event_id',$event->id)->firstOrFail())   
                <th class="px-4 py-2">Action </th>
                @endcan
                @endcan

            </tr>
        </thead>
        <tbody>


            @foreach ($event->users as $user)
                @if ($user->getEventRole($event->id) == null)
                @else

                @if ($user->getEventRole($event->id) == "participant")
                @else
                <tr class="border px-4 py-2">
                    <td class="px-4 py-2  whitespace-nowrap">
                        <div class="flex items-center">
                            <div class="flex-shrink-0 h-10 w-10">
                                @if ($user->image != null)
                                <img src="{{ asset('storage/'. $user->image->image_path) }}"
                                    class="h-10 w-10 rounded-full">
                                @else
                                <img class="h-10 w-10 rounded-full"
                                    src="https://images-ext-2.discordapp.net/external/g284NahQlbC01_TG1N2RxQ7YOcAzHUizwQjo4yS9tuI/%3Fw%3D1380%26t%3Dst%3D1691673786~exp%3D1691674386~hmac%3D99e1638c243d744e8648c7255cba9bf267a036e13aa5eeb1c3db56382b0e8a44/https/img.freepik.com/free-vector/illustration-businessman_53876-5856.jpg?width=1170&height=1170"
                                    alt="">
                                @endif

                            </div>
                            <div class="ml-4">
                                <div class="text-sm font-medium text-gray-900">
                                    {{$user->username}}
                                </div>
                                <div class="text-sm text-gray-500">
                                    {{$user->userFull->email}}
                                </div>
                            </div>
                        </div>
                    </td>
                    @if ($user->getEventRole($event->id) == null)
                    <td class="px-4 py-2 text-4xl">-</td>
                    @else
                    <td class="px-4 py-2">{{$user->getEventRole($event->id)}}</td>
                    @endif

                    
                    <td class="px-4 py-2">
                    
                        @if ($user->getEventTeamId($event->id) == null)
                        <button id="dropdownDefaultButton-{{$user->id}}" data-dropdown-toggle="dropdown-{{$user->id}}"
                            class="text-white w-full bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center inline-flex items-center "
                            type="button">Add Team<svg class="w-2.5 h-2.5 ml-2.5 " aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="m1 1 4 4 4-4" />
                            </svg></button>
                            
                        @else
                        <button id="dropdownDefaultButton-{{$user->id}}" data-dropdown-toggle="dropdown-{{$user->id}}"
                            class="text-white w-full bg-green-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center inline-flex items-center "
                            type="button">{{$user->getEventTeamName($event->id)}}<svg class="w-2.5 h-2.5 ml-2.5 " aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="m1 1 4 4 4-4" />
                            </svg></button>
                            
                        @endif

                        
                        
                        <!-- Dropdown menu -->
                        <div id="dropdown-{{$user->id}}"
                            class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700">
                            <ul class="py-2 text-sm text-gray-700 dark:text-gray-200"
                                aria-labelledby="dropdownDefaultButton-{{$user->id}}">
                                @can('view', $event)
                                    @can('viewWithRole', Auth::getUser()->user_pivots->where('event_id',$event->id)->firstOrFail())   
                                @foreach ($event->event_teams as $team)
                                <li>
                                    <button href="{{route('event.team.edit')}}"
                                        class="block px-4 py-2 hover:bg-gray-100 w-full"
                                        onClick="changeTeam({{$event->id}},{{$user->id}},{{$team->id}})"
                                        >{{$team->name}}</button>
                                </li>
                                @endforeach

                                <li class="mt-5">
                                    <button href="{{route('event.team.edit')}}"
                                        class="block px-4 py-2 bg-red-300 hover:text-white hover:bg-red-500 w-full"
                                        onClick="changeTeam({{$event->id}},{{$user->id}})"
                                        >Release</button>
                                </li>
                                    @else
                                    <li>
                                    <p>You are not Header</p>
                                </li>
                                    @endcan
                                @endcan
                                
                            </ul>
                        </div>
                    </td>
                    @can('view', $event)
                                    @can('viewWithRole', Auth::getUser()->user_pivots->where('event_id',$event->id)->firstOrFail())   
                    <td>
                        
                                    <button data-modal-target="popup-modal-{{$user->id}}" data-modal-toggle="popup-modal-{{$user->id}}" >
                                <i class="material-icons-round text-base text-red-400 hover:text-gray-100 cursor-pointer ml-2">delete_outline</i>
                                </button>
                               

                        <!-- remove modal -->
                <div id="popup-modal-{{$user->id}}" tabindex="-1"
                    class="fixed top-0 left-0 right-0 z-50 hidden p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] max-h-full">
                    <div class="relative w-full max-w-md max-h-full">
                        <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                            <button type="button"
                                class="absolute top-3 right-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ml-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white"
                                data-modal-hide="popup-modal-{{$user->id}}">
                                <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                                    viewBox="0 0 14 14">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                                </svg>
                                <span class="sr-only">Close modal</span>
                            </button>
                            <div class="p-6 text-center">
                                <svg class="mx-auto mb-4 text-gray-400 w-12 h-12 dark:text-gray-200" aria-hidden="true"
                                    xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="2" d="M10 11V6m0 8h.01M19 10a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                                </svg>
                                <h3 class="mb-5 text-lg font-normal text-gray-500 dark:text-gray-400">Are you sure you
                                    want to Kick {{$user->username}} Out of Event ? </h3>
                                    <button data-modal-hide="popup-modal-{{$user->id}}" onClick="remove({{$event->id}},{{$user->id}})"
                                        class="text-white bg-red-600 hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 dark:focus:ring-red-800 font-medium rounded-lg text-sm inline-flex items-center px-5 py-2.5 text-center mr-2">
                                        Yes, I'm sure
                                    </button>
                                    <button data-modal-hide="popup-modal-{{$user->id}}" type="button"
                                        class="text-gray-500 bg-white hover:bg-gray-100 focus:ring-4 focus:outline-none focus:ring-gray-200 rounded-lg border border-gray-200 text-sm font-medium px-5 py-2.5 hover:text-gray-900 focus:z-10 dark:bg-gray-700 dark:text-gray-300 dark:border-gray-500 dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-gray-600">No,
                                        cancel</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                    </td>
                    @endcan
                        @endcan
                    
                    

                
                    



                </tr>
                @endif
                @endif
            @endforeach


            <!-- Add more rows as needed -->
        </tbody>
    </table>
</div>

<script>

function changeTeam(eventId,userId,teamId = null) {
    
    editAjax('POST','{{route('event.team.member.edit')}}', '{{csrf_token()}}', {'event_id':eventId,'team_id':teamId,'user_id':userId});
    window.location.reload(true);
    
}


function remove(eventId,userId) {
    removeAjax('POST', '{{route('event.team.member.kick')}}', '{{csrf_token()}}', {'event_id': eventId,'user_id':userId});
    window.location.reload(true);
}


</script>


@endsection