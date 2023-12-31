<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    @vite(['resources/css/app.css', 'resources/js/app.js','resources/css/main.css'])

</head>

<body>
    <a href="{{ route('event.team.join',['event' => $event])}}"
        class="inline-flex items-center border border-indigo-300 px-3 py-1.5 rounded-md text-indigo-500 hover:bg-indigo-50 mx-5 my-5">
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="h-6 w-6">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 16l-4-4m0 0l4-4m-4 4h18">
            </path>
        </svg>
        <span class="ml-1 font-bold text-lg">Back</span>
    </a>
    <div class="flex flex-col w-full justify-center items-center mt-5">
        <h2 class="text-2xl font-bold mb-4">Images proof</h2>
        <div class="grid grid-cols-2 md:grid-cols-3 gap-3 p-4 max-w-[400px] md:max-w-[600px] place-items-center">
         
        @foreach ($request->requestFiles as $file)
        <div class="flex flex-row gap-1 m-5">
            <img class="hover:opacity-75 " src="{{ asset('storage/' . $file->file_path)}}">

        </div>
        @endforeach
    </div>

    <h2 class="text-2xl font-bold mt-8">Request Details</h2>
    <div class="border border-gray-300 shadow-sm rounded-lg overflow-hidden max-w-sm mx-auto mt-8 mb-10">
        <table class="w-full text-sm leading-5">
            <thead class="bg-gray-100">
                <tr>
                    <th class="py-3 px-4 text-left font-medium text-gray-600">Details</th>
                    <th class="py-3 px-4 text-left font-medium text-gray-600">values</th>
                </tr>
            </thead>
            <tbody>

                <tr class="bg-gray-50">
                    <td class="py-3 px-4 text-left font-medium text-gray-600 pl-8">User</td>
                    <td class="py-3 px-4 text-left">{{$request->user->username}}</td>
                </tr>
                <tr>
                    <td class="py-3 px-4 text-left font-medium text-gray-600 pl-8">Email</td>
                    <td class="py-3 px-4 text-left">{{$request->user->userFull->email}}</td>
                </tr>
                <tr class="bg-gray-50">
                    <td class="py-3 px-4 text-left font-medium text-gray-600 pl-8">Firstname</td>
                    <td class="py-3 px-4 text-left">{{$request->user->userFull->firstname}}</td>
                </tr>
                <tr>
                    <td class="py-3 px-4 text-left font-medium text-gray-600 pl-8">LastName</td>
                    <td class="py-3 px-4 text-left">{{$request->user->userFull->lastname}}</td>
                </tr>
                <tr class="bg-gray-50">
                    <td class="py-3 px-4 text-left font-medium text-gray-600 pl-8">Faculty</td>
                    <td class="py-3 px-4 text-left">{{$request->user->userFull->faculty}}</td>
                </tr>
                <tr>
                    <td class="py-3 px-4 text-left font-medium text-gray-600 pl-8">Year</td>
                    <td class="py-3 px-4 text-left">{{$request->user->userFull->year}}</td>
                </tr>
                <tr class="bg-gray-50">
                    <td class="py-3 px-4 text-left font-medium text-gray-600 pl-8">Reason</td>
                    <td class="py-3 px-4 text-left">{{$request->reason}}</td>
                </tr>
                <tr>
                    <td class="py-3 px-4 text-left font-medium text-gray-600 pl-8">Role</td>
                    <td class="py-3 px-4 text-left">{{$request->role}}</td>
                </tr>

            </tbody>
        </table>

        @if ($request->status == null)
        <div class="flex mt-5 gap-5 px-4 py-2">
            <button
                class="px-4 py-2 font-medium text-white bg-green-600 rounded-md hover:bg-blue-500 focus:outline-none focus:shadow-outline-blue active:bg-blue-600 transition duration-150 ease-in-out"
                onClick="approve({{$request->id}})">Approve</button>
            <button
                class="ml-2 px-4 py-2 font-medium text-white bg-red-600 rounded-md hover:bg-red-500 focus:outline-none focus:shadow-outline-red active:bg-red-600 transition duration-150 ease-in-out"
                onClick="deny({{$request->id}})">Denied</button>
        </div>
        @endif
    </div>


</body>

<script>
function approve(id) {
    updateAjax('POST', '{{route('event.request.approve')}}', '{{csrf_token()}}', {
            'request_id': id,
            'role': "{{$request->role}}"
        });
    window.location.reload(true);
}

function deny(id) {
    updateAjax('POST', '{{route('event.request.deny')}}', '{{csrf_token()}}', {
            'request_id': id
        });
    window.location.reload(true);
}
</script>


</html>


<style>
.card {

    width: 200px;
    height: 320px;
    object-fit: cover;

}

a {
    white-space: pre-wrap;
    word-wrap: break-word;
    word-break: break-all;
    white-space: normal;
    display: block;

}
</style>