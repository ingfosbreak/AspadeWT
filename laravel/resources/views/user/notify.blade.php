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

                            <a href="{{ route('user.myEventHistory.inProgress')}}">
                                <li
                                    class="p-2 border-b-2 border-slate-500 border-opacity-0 hover:border-opacity-100 hover:text-slate-800 duration-200 cursor-pointer active">
                                    In Progess
                                </li>
                            </a>

                            <a href="{{ route('user.myEventHistory.success')}}">
                                <li
                                    class="p-2 border-b-2 border-slate-500 border-opacity-0 hover:border-opacity-100 hover:text-slate-800 duration-200 cursor-pointer active">
                                    Success
                                </li>
                            </a>
                        </ul>
                    </nav>
                </nav>
            </div>
        </div>
        @if (Request::url() == route('user.myEventHistory.inProgress'))
        <!-- start  loop item for show history-->
        <div
            class="block rounded-lg bg-white shadow-[0_2px_15px_-3px_rgba(0,0,0,0.07),0_10px_20px_-2px_rgba(0,0,0,0.04)] dark:bg-neutral-700">
            <div class="border-b-2 border-neutral-100 px-6 py-3 dark:border-neutral-600 dark:text-neutral-50">
                Quote
            </div>
            <div class="p-6">
                <blockquote>
                    <p class="text-xl">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer
                        posuere erat a ante.
                    </p>
                </blockquote>
                <figcaption class="text-md text-neutral-600 dark:text-neutral-400">
                    - Someone famous in <cite title="Source Title">Source Title</cite>
                </figcaption>
            </div>
        </div>
        <!-- end -->
        @endif
        @if (Request::url() == route('user.myEventHistory.success'))
        <!-- start  -->
        <div
            class="block rounded-lg bg-white shadow-[0_2px_15px_-3px_rgba(0,0,0,0.07),0_10px_20px_-2px_rgba(0,0,0,0.04)] dark:bg-neutral-700">
            <div class="border-b-2 border-neutral-100 px-6 py-3 dark:border-neutral-600 dark:text-neutral-50">
                Quote
            </div>
            <div class="p-6">
                <blockquote>
                    <p class="text-xl">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer
                        posuere erat a ante.
                    </p>
                </blockquote>
                <figcaption class="text-md text-neutral-600 dark:text-neutral-400">
                    - Someone famous in <cite title="Source Title">Source Title</cite>
                </figcaption>
            </div>
        </div>
        <!-- end -->
        @endif

    </div>
</body>

@endsection