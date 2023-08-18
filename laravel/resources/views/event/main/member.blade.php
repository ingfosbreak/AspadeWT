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

            </tr>
        </thead>
        <tbody>


            @foreach ($event->users as $user)
            <tr class="border px-4 py-2">
                <td class="px-4 py-2  whitespace-nowrap">
                    <div class="flex items-center">
                        <div class="flex-shrink-0 h-10 w-10">
                            @if ($user->image != null)
                            <img src="{{ asset('storage/'. $user->image->image_path) }}"
                                class="w-40 h-40 object-cover border-4 border-white rounded-full">
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
                        </ul>
                    </div>
                </td>
                

              
                



            </tr>
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

</script>


@endsection