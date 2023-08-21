@extends('layouts.app')

@section('content')

<!-- component -->

<body class=" bg-white min-h-screen antialiased">

    <h1 class="text-black text-5xl text-center m-10">Notification</h1>

    <div class="m-12 flex flex-col items-center gap-5" >

        <!-- start  loop item for show history-->
        @foreach ($notifies as $notify)
        <div
            class="block border-2 rounded-lg bg-gray-100 shadow-xl w-3/5 rounded-md px-5 py-2">
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
                    {{ $notify->type }} 
                </figcaption>
            </div>

            <button type="button" onClick="remove({{$notify->id}})"
                            class="inline-block px-3.5 py-1 border-2 border-green-600 text-green-600 font-medium text-xs leading-tight uppercase rounded hover:bg-black hover:bg-opacity-5 focus:outline-none focus:ring-0 transition duration-150 ease-in-out"
                            data-mdb-ripple="true">Remove</button>
        </div>
        @endforeach
        <!-- end -->

    </div>
</body>

<script>
    function remove(id) {
        removeAjax('POST','{{route('user.notify.remove')}}', '{{csrf_token()}}', {'notify_id':id});
        window.location.reload(true);
    }
</script>
@endsection

