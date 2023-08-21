@extends('layouts.app')

@section('content')

<!-- component -->

<body class=" bg-white min-h-screen antialiased">

    <h1 class="text-black text-5xl text-center m-10">My Event History</h1>

    <div class=m-12>

        <div class="grid justify-items-center ">
            <div class="flex flex-row">
                <!-- navbar -->
                <nav class="flex justify-between bg-white text-black px-5 xl:px-12 items-center">
                    <!-- navigation -->
                    <nav class="nav navbar-nav font-semibold text-lg">
                        <ul class="flex items-start ">
                            <a href="{{ route('user.myEventHistory.all')}}" class="m-5">
                                @if (Request::url() == route('user.myEventHistory.all'))
                                <li
                                    class=" text-violet-700 border-b-2 border-slate-500 border-opacity-0 hover:border-opacity-100 hover:text-violet-700 duration-200 cursor-pointer active">
                                    All Event Joining
                                </li>
                                @else
                                <li
                                    class=" border-b-2 border-slate-500 border-opacity-0 hover:border-opacity-100 hover:text-violet-700 duration-200 cursor-pointer active">
                                    All Event Joining
                                </li>
                                @endif
                            </a>

                            <a href="{{ route('user.myEventHistory.inProgress')}}" class="m-5">
                                @if (Request::url() == route('user.myEventHistory.inProgress'))
                                <li
                                    class="text-violet-700 border-b-2 border-slate-500 border-opacity-0 hover:border-opacity-100 hover:text-violet-700 duration-200 cursor-pointer active">
                                    In Progess
                                </li>
                                @else

                                <li
                                    class=" border-b-2 border-slate-500 border-opacity-0 hover:border-opacity-100 hover:text-violet-700 duration-200 cursor-pointer active">
                                    In Progess
                                </li>
                                @endif
                            </a>
                            <a href="{{ route('user.myEventHistory.success')}}" class="m-5">
                                @if (Request::url() == route('user.myEventHistory.success'))
                                <li
                                    class="text-violet-700 border-b-2 border-slate-500 border-opacity-0 hover:border-opacity-100 hover:text-violet-700 duration-200 cursor-pointer active">
                                    Success
                                </li>
                                @else
                                <li
                                    class="border-b-2 border-slate-500 border-opacity-0 hover:border-opacity-100 hover:text-violet-700 duration-200 cursor-pointer active">
                                    Success
                                </li>
                                @endif
                            </a>
                        </ul>
                    </nav>
                </nav>
            </div>
        </div>
        @if (Request::url() == route('user.myEventHistory.inProgress'))
        <!-- start  loop item for show history-->
        @foreach ($events as $event)
        <div class="bg-gray-100 mx-auto border-gray-500 border text-gray-700 m-5 h-30 w-3/5 rounded-md">
            <div class="flex p-3 border-l-8 rounded-lg border-yellow-600">
                <div class="flex-1">
                    <div class="ml-3 space-y-1 border-r-2 pr-3">
                        <a href="#">
                            <div class="text-base leading-6 font-normal">NameEvent :{{$event->name}} </div>
                        </a>
                        <div class="text-sm leading-4 font-normal"><span
                                class="text-xs leading-4 font-normal text-gray-500"> Event start
                                :{{$event->date_start}}</span> </div>
                        <div class="text-sm leading-4 font-normal"><span
                                class="text-xs leading-4 font-normal text-gray-500">Event end
                                :{{$event->date_close}}</span>

                        </div>
                    </div>
                </div>
                <div>
                    <div class="ml-3 my-5 bg-yellow-600 p-1 w-20">
                        <div class="uppercase text-xs leading-4 font-semibold text-center text-yellow-100">In Progess
                        </div>
                    </div>
                </div>

            </div>
        </div>
        @endforeach
        <!-- end -->
        @endif
        @if (Request::url() == route('user.myEventHistory.success'))

        @foreach ($events as $event)
        <!-- start  -->
        <div class="bg-gray-100 mx-auto border-gray-500 border text-gray-700 m-5 h-30 w-3/5 rounded-md">
            <div class="flex p-3 border-l-8 rounded-lg border-green-600">
                <div class="flex-1">
                    <div class="ml-3 space-y-1 border-r-2 pr-3">
                        <a href="#">
                            <div class="text-base leading-6 font-normal">NameEvent :{{$event->name}} </div>
                        </a>
                        <div class="text-sm leading-4 font-normal"><span
                                class="text-xs leading-4 font-normal text-gray-500"> Event start
                                :{{$event->date_start}}</span> </div>
                        <div class="text-sm leading-4 font-normal"><span
                                class="text-xs leading-4 font-normal text-gray-500">Event end
                                :{{$event->date_close}}</span>

                        </div>
                    </div>
                </div>
                <div >
                    <a href="{{route('user.certificate',['event' =>$event])}} " target="_blank"><img src="https://cdn.discordapp.com/attachments/1135564910131151019/1142727772347826226/pngwing.com.png"
                        class="object-scale-down h-10 m-5">
                        </a>
                </div>
                <div class="border-l-2 ">
                    <div class="ml-3 my-5 bg-green-600 p-1 w-20 h-50">
                        <div class="uppercase text-xs leading-4 font-semibold text-center text-yellow-100">Success
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- end -->
        @endforeach
        @endif


        @if (Request::url() == route('user.myEventHistory.all'))
        @foreach ($events as $event)
        @if ($event->status == "in-progress")
        <!-- start  -->
        <div class="bg-gray-100 mx-auto border-gray-500 border text-gray-700 m-5 h-30 w-3/5 rounded-md">
            <div class="flex p-3 border-l-8 rounded-lg border-yellow-600">
                <div class="flex-1">
                    <div class="ml-3 space-y-1 border-r-2 pr-3">
                        <a href="#">
                            <div class="text-base leading-6 font-normal">NameEvent :{{$event->name}} </div>
                        </a>
                        <div class="text-sm leading-4 font-normal"><span
                                class="text-xs leading-4 font-normal text-gray-500"> Event start
                                :{{$event->date_start}}</span> </div>
                        <div class="text-sm leading-4 font-normal"><span
                                class="text-xs leading-4 font-normal text-gray-500">Event end
                                :{{$event->date_close}}</span>

                        </div>
                    </div>
                </div>
                <div>
                    <div class="ml-3 my-5 bg-yellow-600 p-1 w-20">
                        <div class="uppercase text-xs leading-4 font-semibold text-center text-yellow-100">In Progess
                        </div>
                    </div>
                </div>

            </div>
        </div>
        @else
        <div class="bg-gray-100 mx-auto border-gray-500 border text-gray-700 m-5 h-30 w-3/5 rounded-md">
            <div class="flex p-3 border-l-8 rounded-lg border-green-600">
                <div class="flex-1">
                    <div class="ml-3 space-y-1 border-r-2 pr-3">
                        <a href="#">
                            <div class="text-base leading-6 font-normal">NameEvent :{{$event->name}} </div>
                        </a>
                        <div class="text-sm leading-4 font-normal"><span
                                class="text-xs leading-4 font-normal text-gray-500"> Event start
                                :{{$event->date_start}}</span> </div>
                        <div class="text-sm leading-4 font-normal"><span
                                class="text-xs leading-4 font-normal text-gray-500">Event end
                                :{{$event->date_close}}</span>

                        </div>
                    </div>
                </div>
                <div >
                    <a href="{{route('user.certificate',['event' =>$event])}} " target="_blank"><img src="https://cdn.discordapp.com/attachments/1135564910131151019/1142727772347826226/pngwing.com.png"
                        class="object-scale-down h-10 m-5">
                        </a>
                </div>
                <div class="border-l-2 ">
                    <div class="ml-3 my-5 bg-green-600 p-1 w-20 h-50">
                        <div class="uppercase text-xs leading-4 font-semibold text-center text-yellow-100">Success
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- end -->
        @endif
        @endforeach
        @endif

    </div>
</body>

@endsection