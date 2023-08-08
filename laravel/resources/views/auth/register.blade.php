@extends('layouts.guest')

@section('content')

<div class="w-1/2 h-fit" id="terminal">
		<div class="coding inverse-toggle px-5 pt-4 shadow-lg text-gray-100 text-sm font-mono subpixel-antialiased 
					bg-gray-800  pb-6 pt-4 rounded-lg leading-normal overflow-hidden">
			<div class="top mb-2 flex">
				<div class="h-3 w-3 bg-red-500 rounded-full"></div>
				<div class="ml-2 h-3 w-3 bg-orange-300 rounded-full"></div>
				<div class="ml-2 h-3 w-3 bg-green-500 rounded-full"></div>
				<div class="mx-auto pr-16">
					<p class="text-center text-sm">Register</p>
				</div>
			</div>
			<div class="mt-4 flex">
				<div class="pl-1 pt-1 h-fit text-green-200 font-mono text-xs">
				<p class="pb-1">Last login: Wed Sep 25 09:11:04 on levil190</p>
				<p class="pb-1">Laraben:Devprojects levin$</p>
				</div>
			</div>

			<div class="mt-4 flex">
				<form action="{{route('register')}}" class="my-20 mx-5 w-full" method="POST">
				@csrf
				<div class="mb-6">
					<label for="username" class="block mb-2 text-green-200 font-mono text-xs">Your username</label>
					<input type="text" name="username" id="username" class="bg-gray-700 border border-gray-600 text-gray-900 placeholder-gray-400 text-sm text-white rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 " placeholder="username"  value="{{ old('username','')}}" >
				</div>

				@error('username')
    			<div class="text-red-700 mb-5">{{ $message }}</div>
				@enderror

				<div class="mb-6">
					<label for="password" class="block mb-2 text-green-200 font-mono text-xs">Your password</label>
					<input type="password" name="password"id="password" class="bg-gray-700 border border-gray-600 text-gray-900 placeholder-gray-400 text-sm text-white rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 " placeholder="password" value="{{ old('password','')}}" >
				</div>

				@if (session('error'))
					<div class="text-red-700 mb-5">{{ session('error') }}</div>
				@endif

				<button type="submit" class="text-white  focus:outline-none  font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center bg-blue-600 hover:bg-blue-700 focus:ring-blue-800">Submit</button>
				</form>
			</div>

			<div class="mt-4 flex">
				<div class="flex w-fit flex-wrap mt-8 text-center text-green-200 font-mono text-xs">
                    <a href="{{route('login')}}" class="flex-2 underline">
                        Already have username Go back ?
                    </a>

                
                </div>
			</div>
		</div>
	</div>





@endsection