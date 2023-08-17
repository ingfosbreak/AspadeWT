@extends('layouts.admin')

@section('content')
<div class="container mx-auto px-4 sm:px-6 lg:px-8 py-8">
    <h2 class="text-2xl font-bold mb-4">Create Event Requests</h2>
    <table id="example" class="table-auto">
        <thead>
            <tr>
                <th class="px-4 py-2">User</th>
                <th class="px-4 py-2">Name</th>
                <th class="px-4 py-2">Status</th>
                <th class="px-4 py-2">Detail</th>
                <th class="px-4 py-2">Description</th>
            </tr>
        </thead>
        <tbody>

        @foreach ($requests as $request)
            <tr class="border px-4 py-2">
                <td class="px-4 py-2  whitespace-nowrap">
                    <div class="flex items-center">
                        <div class="flex-shrink-0 h-10 w-10">
                        @if ($request->user->image != null)
                        <img src="{{ asset('storage/'. $request->user->image->image_path) }}" class="w-40 h-40 object-cover border-4 border-white rounded-full">
                        @else
                        <img class="h-10 w-10 rounded-full" src="https://images-ext-2.discordapp.net/external/g284NahQlbC01_TG1N2RxQ7YOcAzHUizwQjo4yS9tuI/%3Fw%3D1380%26t%3Dst%3D1691673786~exp%3D1691674386~hmac%3D99e1638c243d744e8648c7255cba9bf267a036e13aa5eeb1c3db56382b0e8a44/https/img.freepik.com/free-vector/illustration-businessman_53876-5856.jpg?width=1170&height=1170" alt="">
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
                <td>
                    <a href="{{route('admin.request.detail',['request'=>$request])}}">
                        <button class="bg-gray-600 rounded-full text-white font-semibold px-4 py-2">                                
                            <span class="text-xs">Detail</span>
                        </button>
                    </a>
                </td>
                <td class="px-4 py-2">{{$request->description}}</td>
                
            </tr>
        @endforeach


            <!-- Add more rows as needed -->
        </tbody>
    </table>
</div>

@endsection