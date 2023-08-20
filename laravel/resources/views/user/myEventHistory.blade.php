@extends('layouts.app')

@section('content')

<!-- component -->

<body class=" bg-white min-h-screen antialiased">

    <h1 class="text-black text-5xl text-center m-10">My Event History</h1>

    <div class=m-12>
    
        <div>
            <div class="flex flex-wrap">
                <!-- navbar -->
                <nav class="flex justify-between bg-white text-black w-screen px-5 xl:px-12 items-center">
                    <!-- navigation -->
                    <nav class="nav navbar-nav font-semibold text-lg">
                        <ul class="flex items-start">

                            <a href="{{ route('user.myEventHistory.participant')}}">
                                <li
                                    class="p-2 border-b-2 border-slate-500 border-opacity-0 hover:border-opacity-100 hover:text-slate-800 duration-200 cursor-pointer active">
                                    participant
                                </li>
                            </a>

                            <a href="{{ route('user.myEventHistory.staff')}}">
                                <li
                                    class="p-2 border-b-2 border-slate-500 border-opacity-0 hover:border-opacity-100 hover:text-slate-800 duration-200 cursor-pointer active">
                                    Staff
                                </li>
                            </a>
                        </ul>
                    </nav>
                </nav>
            </div>
        </div>
        @if (Request::url() == route('user.myEventHistory.participant'))
        <!-- start  loop item for show history-->
        <div class="bg-gray-100 mx-auto border-gray-500 border text-gray-700 m-5 h-30 rounded-md">
            <div class="flex p-3 border-l-8 rounded-lg border-yellow-600">
                <div class="space-y-1 border-r-2 pr-3">
                    <div class="text-sm leading-5 font-semibold"><span
                            class="text-xs leading-4 font-normal text-gray-500"> Event_Id #</span> LTC08762304</div>
                    <div class="text-sm leading-5 font-semibold">Time: JUN 14. 9:30 PM</div>
                </div>
                <div class="flex-1">
                    <div class="ml-3 space-y-1 border-r-2 pr-3">
                        <div class="text-base leading-6 font-normal">NameEvent : ไปร้องเพลงมา </div>
                        <div class="text-sm leading-4 font-normal"><span
                                class="text-xs leading-4 font-normal text-gray-500"> Location สวนหลังบ้าน</span> </div>
                        <div class="text-sm leading-4 font-normal"><span
                                class="text-xs leading-4 font-normal text-gray-500"> Destination</span> WestRock
                            Jacksonville - 9469 Eastport Rd, Jacksonville, FL 32218</div>
                    </div>
                </div>
                <div class="border-r-2 pr-3">
                    <div>
                        <div class="ml-3 my-3 border-gray-200 border-2 bg-gray-300 p-1">
                            <div class="uppercase text-xs leading-4 font-medium">Trailer</div>
                            <div class="text-center text-sm leading-4 font-semibold text-gray-800">89732</div>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="ml-3 my-5 bg-yellow-600 p-1 w-20">
                        <div class="uppercase text-xs leading-4 font-semibold text-center text-yellow-100">work in
                            progress
                        </div>
                    </div>
                </div>
                <div>
                    <button class="text-gray-100 rounded-sm my-5 ml-2 focus:outline-none bg-gray-500">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                        </svg>
                    </button>
                </div>
            </div>
        </div>
        <!-- end -->
    @endif
    @if (Request::url() == route('user.myEventHistory.staff'))
        <!-- start  -->
        <div class="bg-gray-100 mx-auto border-gray-500 border rounded-sm  text-gray-700 m-5">
            <div class="flex p-3  border-l-8 border-green-600">
                <div class="space-y-1 border-r-2 pr-3">
                    <div class="text-sm leading-5 font-semibold"><span
                            class="text-xs leading-4 font-normal text-gray-500"> Release #</span> LTC08762304</div>
                    <div class="text-sm leading-5 font-semibold"><span
                            class="text-xs leading-4 font-normal text-gray-500 pr"> BOL #</span> 10937</div>
                    <div class="text-sm leading-5 font-semibold">JUN 14. 9:30 PM</div>
                </div>
                <div class="flex-1">
                    <div class="ml-3 space-y-1 border-r-2 pr-3">
                        <div class="text-base leading-6 font-normal">KROGER MEMPHIS</div>
                        <div class="text-sm leading-4 font-normal"><span
                                class="text-xs leading-4 font-normal text-gray-500"> Carrier</span> PAPER TRANSPORT
                            INC.</div>
                        <div class="text-sm leading-4 font-normal"><span
                                class="text-xs leading-4 font-normal text-gray-500"> Destination</span> WestRock
                            Jacksonville - 9469 Eastport Rd, Jacksonville, FL 32218</div>
                    </div>
                </div>
                <div class="border-r-2 pr-3">
                    <div>
                        <div class="ml-3 my-3 border-gray-200 border-2 bg-gray-300 p-1">
                            <div class="uppercase text-xs leading-4 font-medium">Trailer</div>
                            <div class="text-center text-sm leading-4 font-semibold text-gray-800">89732</div>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="ml-3 my-5 bg-green-600 p-1 w-20">
                        <div class="uppercase text-xs leading-4 font-semibold text-center text-green-100">Picked UP
                        </div>
                    </div>
                </div>
                <div>
                    <button class="text-gray-100 rounded-sm my-5 ml-2 focus:outline-none bg-gray-500">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                        </svg>
                    </button>
                </div>
            </div>
        </div>
        <!-- end -->
    @endif
        <!-- start  -->
        <div class="bg-gray-100 mx-auto border-gray-500 border rounded-sm  text-gray-700 m-5">
            <div class="flex p-3  border-l-8 border-red-600">
                <div class="space-y-1 border-r-2 pr-3">
                    <div class="text-sm leading-5 font-semibold"><span
                            class="text-xs leading-4 font-normal text-gray-500"> Release #</span> LTC08762304</div>
                    <div class="text-sm leading-5 font-semibold"><span
                            class="text-xs leading-4 font-normal text-gray-500 pr"> BOL #</span> 10937</div>
                    <div class="text-sm leading-5 font-semibold">JUN 14. 9:30 PM</div>
                </div>
                <div class="flex-1">
                    <div class="ml-3 space-y-1 border-r-2 pr-3">
                        <div class="text-base leading-6 font-normal">KROGER MEMPHIS</div>
                        <div class="text-sm leading-4 font-normal"><span
                                class="text-xs leading-4 font-normal text-gray-500"> Carrier</span> PAPER TRANSPORT
                            INC.</div>
                        <div class="text-sm leading-4 font-normal"><span
                                class="text-xs leading-4 font-normal text-gray-500"> Destination</span> WestRock
                            Jacksonville - 9469 Eastport Rd, Jacksonville, FL 32218</div>
                    </div>
                </div>
                <div class="border-r-2 pr-3">
                    <div>
                        <div class="ml-3 my-3 border-gray-200 border-2 bg-gray-300 p-1">
                            <div class="uppercase text-xs leading-4 font-medium">Trailer</div>
                            <div class="text-center text-sm leading-4 font-semibold text-gray-800">89732</div>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="ml-3 my-5 bg-red-600 p-1 w-20">
                        <div class="uppercase text-xs leading-4 font-semibold text-center text-red-100">Canceled
                        </div>
                    </div>
                </div>
                <div>
                    <button class="text-gray-100 rounded-sm my-5 ml-2 focus:outline-none bg-gray-500" ">
                  <svg xmlns=" http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                        </svg>
                    </button>
                </div>
            </div>
        </div>
        <!-- end -->

    </div>
</body>

@endsection