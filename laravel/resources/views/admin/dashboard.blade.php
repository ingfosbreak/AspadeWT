@extends('layouts.admin')

@section('content')

<div class="w-10/12 px-10 mt-10">
    <div class="flex flex-row">
        <div class="bg-no-repeat bg-red-200 border border-red-300 rounded-xl w-7/12 mr-2 p-6"
            style="background-image: url(https://previews.dropbox.com/p/thumb/AAvyFru8elv-S19NMGkQcztLLpDd6Y6VVVMqKhwISfNEpqV59iR5sJaPD4VTrz8ExV7WU9ryYPIUW8Gk2JmEm03OLBE2zAeQ3i7sjFx80O-7skVlsmlm0qRT0n7z9t07jU_E9KafA9l4rz68MsaZPazbDKBdcvEEEQPPc3TmZDsIhes1U-Z0YsH0uc2RSqEb0b83A1GNRo86e-8TbEoNqyX0gxBG-14Tawn0sZWLo5Iv96X-x10kVauME-Mc9HGS5G4h_26P2oHhiZ3SEgj6jW0KlEnsh2H_yTego0grbhdcN1Yjd_rLpyHUt5XhXHJwoqyJ_ylwvZD9-dRLgi_fM_7j/p.png?fv_content=true&size_mode=5); background-position: 90% center;">
            <p class="text-5xl text-indigo-900">Welcome <br><strong>Admin Dashboard</strong></p>
            <span
                class="bg-red-300 text-xl text-white inline-block rounded-full mt-12 px-8 py-2"><strong>{{$time}}</strong></span>
        </div>

        <div class="bg-no-repeat bg-orange-200 border border-orange-300 rounded-xl w-5/12 ml-2 p-6"
            style="background-image: url(https://previews.dropbox.com/p/thumb/AAuwpqWfUgs9aC5lRoM_f-yi7OPV4txbpW1makBEj5l21sDbEGYsrC9sb6bwUFXTSsekeka5xb7_IHCdyM4p9XCUaoUjpaTSlKK99S_k4L5PIspjqKkiWoaUYiAeQIdnaUvZJlgAGVUEJoy-1PA9i6Jj0GHQTrF_h9MVEnCyPQ-kg4_p7kZ8Yk0TMTL7XDx4jGJFkz75geOdOklKT3GqY9U9JtxxvRRyo1Un8hOObbWQBS1eYE-MowAI5rNqHCE_e-44yXKY6AKJocLPXz_U4xp87K4mVGehFKC6dgk_i5Ur7gspuD7gRBDvd0sanJ9Ybr_6s2hZhrpad-2WFwWqSNkh/p.png?fv_content=true&size_mode=5); background-position: 100% 40%;">
            <p class="text-5xl text-indigo-900">Event Reqeusts <br><strong>{{$AllEvents}}</strong></p>
            <a href="{{route('admin.request')}}"
                class="bg-orange-300 text-xl text-white underline hover:no-underline inline-block rounded-full mt-12 px-8 py-2"><strong>See
                    requests</strong></a>
        </div>
    </div>
    <div class="flex flex-row h-64 mt-6">
        <div class="bg-blue-300 rounded-xl shadow-lg px-6 py-4 w-4/12">
            <div class="w-full rounded-[25px] bg-white p-8 aspect">
                <div class="h-12">
                    <svg class="h-full fill-white stroke-blue-500" xmlns="http://www.w3.org/2000/svg" fill="none"
                        viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="h-6 w-6">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M15 19.128a9.38 9.38 0 002.625.372 9.337 9.337 0 004.121-.952 4.125 4.125 0 00-7.533-2.493M15 19.128v-.003c0-1.113-.285-2.16-.786-3.07M15 19.128v.106A12.318 12.318 0 018.624 21c-2.331 0-4.512-.645-6.374-1.766l-.001-.109a6.375 6.375 0 0111.964-3.07M12 6.375a3.375 3.375 0 11-6.75 0 3.375 3.375 0 016.75 0zm8.25 2.25a2.625 2.625 0 11-5.25 0 2.625 2.625 0 015.25 0z" />
                    </svg>
                </div>
                <div class="my-2">
                    <h2 class="text-4xl font-bold"><span>{{$AllUsers}}</span></h2>
                </div>

                <div>
                    <p class="mt-2 font-sans text-base font-medium text-gray-500">All Users</p>
                </div>
            </div>
        </div>

        <div class="bg-green-300 rounded-xl shadow-lg mx-6 px-6 py-4 w-4/12">
            <div class="w-full rounded-[25px] bg-white p-8 aspect">
                <div class="h-12">
                <svg class="h-full fill-white stroke-blue-500" xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="bi bi-list-task" viewBox="0 0 16 16">
                    <path fill-rule="evenodd" d="M2 2.5a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5V3a.5.5 0 0 0-.5-.5H2zM3 3H2v1h1V3z"/>
                    <path d="M5 3.5a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9a.5.5 0 0 1-.5-.5zM5.5 7a.5.5 0 0 0 0 1h9a.5.5 0 0 0 0-1h-9zm0 4a.5.5 0 0 0 0 1h9a.5.5 0 0 0 0-1h-9z"/>
                    <path fill-rule="evenodd" d="M1.5 7a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5H2a.5.5 0 0 1-.5-.5V7zM2 7h1v1H2V7zm0 3.5a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5H2zm1 .5H2v1h1v-1z"/>
                    </svg>
                </div>
                <div class="my-2">
                    <h2 class="text-4xl font-bold"><span>{{$AllProcesses}}</span></h2>
                </div>

                <div>
                    <p class="mt-2 font-sans text-base font-medium text-gray-500">All Tasks</p>
                </div>
            </div>
        </div>

        <div class="bg-amber-200 rounded-xl shadow-lg px-6 py-4 w-4/12">
            <div class="w-full rounded-[25px] bg-white p-8 aspect">
                <div class="h-12">
                <svg class="h-full fill-white stroke-blue-500" xmlns="http://www.w3.org/2000/svg"  fill="currentColor" class="bi bi-key-fill" viewBox="0 0 16 16">
                <path d="M3.5 11.5a3.5 3.5 0 1 1 3.163-5H14L15.5 8 14 9.5l-1-1-1 1-1-1-1 1-1-1-1 1H6.663a3.5 3.5 0 0 1-3.163 2zM2.5 9a1 1 0 1 0 0-2 1 1 0 0 0 0 2z"/>
                </svg>
                </div>
                <div class="my-2">
                    <h2 class="text-4xl font-bold"><span>{{$AllTokens}}</span></h2>
                </div>

                <div>
                    <p class="mt-2 font-sans text-base font-medium text-gray-500">All Users</p>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection