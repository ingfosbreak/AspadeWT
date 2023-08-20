@extends('layouts.app')

@section('content')

<!-- component -->

<body class=" bg-white min-h-screen antialiased">

    <h1 class="text-black text-5xl text-center m-10">Notification</h1>

    <div class="m-12 flex flex-col items-center gap-5" >

        <!-- start  loop item for show history-->
        @foreach ($notifies as $notify)
        <div
            class="block border-2 rounded-lg bg-gray-100 shadow-xl w-3/5 rounded-md px-5">
            <div class="border-b-2 border-inherit px-6 py-3 text-xl">
                {{ $notify->name }}
            </div>
            <div class="p-6">
                <blockquote>
                    <p class="text-md">
                    {{ $notify->description }}
                    </p>
                </blockquote>
                <figcaption class="text-sm text-neutral-600 dark:text-neutral-400">
                    - {{ $notify->type }} <cite title="Source Title">Source Title</cite>
                </figcaption>
            </div>
        </div>
        @endforeach
        <!-- end -->

    </div>
</body>

@endsection