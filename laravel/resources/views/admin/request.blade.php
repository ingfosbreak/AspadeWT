@extends('layouts.admin')

@section('content')
<link
    href="https://fonts.googleapis.com/css?family=Material+Icons|Material+Icons+Outlined|Material+Icons+Two+Tone|Material+Icons+Round|Material+Icons+Sharp"
    rel="stylesheet">
<div class="container mx-auto px-4 sm:px-6 lg:px-8 py-8">
    <h2 class="text-2xl font-bold mb-4">Create Event Requests</h2>
    <table id="example" class="table-auto">
        <thead>
            <tr>
                <th class="px-4 py-2">User</th>
                <th class="px-4 py-2">Name</th>
                <th class="px-4 py-2">Status</th>
                <th class="px-4 py-2">Description</th>
                <th class="px-4 py-2">Action</th>
            </tr>
        </thead>
        <tbody>


            @foreach ($requests as $request)
            <tr class="border px-4 py-2">
                <td class="px-4 py-2  whitespace-nowrap">
                    <div class="flex items-center">
                        <div class="flex-shrink-0 h-10 w-10">
                            @if ($request->user->image != null)
                            <img src="{{ asset('storage/'. $request->user->image->image_path) }}"
                                class="h-10 w-10 rounded-full">
                            @else
                            <img class="h-10 w-10 rounded-full"
                                src="https://images-ext-2.discordapp.net/external/g284NahQlbC01_TG1N2RxQ7YOcAzHUizwQjo4yS9tuI/%3Fw%3D1380%26t%3Dst%3D1691673786~exp%3D1691674386~hmac%3D99e1638c243d744e8648c7255cba9bf267a036e13aa5eeb1c3db56382b0e8a44/https/img.freepik.com/free-vector/illustration-businessman_53876-5856.jpg?width=1170&height=1170"
                                alt="">
                            @endif

                        </div>
                        <div class="ml-4">
                            <div class="text-sm font-medium text-gray-900">
                                {{$request->user->username}}
                            </div>
                            <div class="text-sm text-gray-500">
                                {{$request->user->userFull->email}}
                            </div>
                        </div>
                    </div>
                </td>
                <td class="px-4 py-2">{{$request->name}}</td>
                <td class="px-4 py-2 ">
                    @if ($request->status == null)
                    <span
                        class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-yellow-100 text-green-800">
                        waiting
                    </span>
                    @elseif ($request->status == "approved")
                    <span
                        class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800">
                        approved
                    </span>
                    @elseif ($request->status == "denied")
                    <span
                        class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-red-100 text-green-800">
                        denied
                    </span>

                    @endif
                </td>
                <td class="px-4 py-2">{{$request->description}}</td>
                <td class="p-3 ">
                    <a href="{{route('admin.request.detail',['request'=>$request])}}"
                        class="text-gray-800 hover:text-gray-100 mr-2">
                        <i class="material-icons-outlined text-base">visibility</i>
                    </a>

                    <button data-modal-target="popup-modal-{{$request->id}}" data-modal-toggle="popup-modal-{{$request->id}}" >
                    <i class="material-icons-round text-base text-red-400 hover:text-gray-100 cursor-pointer ml-2"
                        >delete_outline</i>
                    </button>


                </td>

                <!-- remove modal -->
                <div id="popup-modal-{{$request->id}}" tabindex="-1"
                    class="fixed top-0 left-0 right-0 z-50 hidden p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] max-h-full">
                    <div class="relative w-full max-w-md max-h-full">
                        <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                            <button type="button"
                                class="absolute top-3 right-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ml-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white"
                                data-modal-hide="popup-modal-{{$request->id}}">
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
                                    want to Delete {{$request->name}} Request? </h3>
                                    <button data-modal-hide="popup-modal-{{$request->id}}" onClick="remove({{$request->id}})"
                                        class="text-white bg-red-600 hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 dark:focus:ring-red-800 font-medium rounded-lg text-sm inline-flex items-center px-5 py-2.5 text-center mr-2">
                                        Yes, I'm sure
                                    </button>
                                    <button data-modal-hide="popup-modal-{{$request->id}}" type="button"
                                        class="text-gray-500 bg-white hover:bg-gray-100 focus:ring-4 focus:outline-none focus:ring-gray-200 rounded-lg border border-gray-200 text-sm font-medium px-5 py-2.5 hover:text-gray-900 focus:z-10 dark:bg-gray-700 dark:text-gray-300 dark:border-gray-500 dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-gray-600">No,
                                        cancel</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>

            </tr>
            @endforeach


            <!-- Add more rows as needed -->
        </tbody>
    </table>
</div>

<script>
function remove(id) {
    removeAjax('POST', '{{route('remove.eventrequest')}}', '{{csrf_token()}}', {'request_id': id});
    window.location.reload(true);
}
</script>

@endsection