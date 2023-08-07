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
				<form action="{{route('register.info')}}" class="my-10 mx-5 " method="POST" enctype="multipart/form-data">
				@csrf
				
				<div class="mb-6">
					<label for="email" class="block mb-2 text-green-200 font-mono text-xs">Your Email</label>
					<input type="email" name="email" id="email" class="bg-gray-700 border border-gray-600 text-gray-900 placeholder-gray-400 text-sm text-white rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 " placeholder="email (Optional)">
				</div>
				<div class="mb-6">
					<label for="faculty" class="block mb-2 text-green-200 font-mono text-xs">Your Faculty</label>
					<input type="faculty" name="faculty" id="faculty" class="bg-gray-700 border border-gray-600 text-gray-900 placeholder-gray-400 text-sm text-white rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 " placeholder="faculty (Optional)">
				</div>



				<div class="flex flex-col">
					<div class="md:flex">
						<div class="md:w-1/2 mb-6 md:mb-0">
						<label class="block mb-2 text-green-200 font-mono text-xs" for="grid-first-name">
							First Name
						</label>
						<input class="bg-gray-700 border border-gray-600 text-gray-900 placeholder-gray-400 text-sm text-white rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 " id="grid-first-name" name="firstname" type="text" placeholder="firstname (Optional)">
					
						</div>
						<div class="md:w-1/2 ml-3">
						<label class="block mb-2 text-green-200 font-mono text-xs" for="grid-last-name">
							Last Name
						</label>
						<input class="bg-gray-700 border border-gray-600 text-gray-900 placeholder-gray-400 text-sm text-white rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 " id="grid-last-name" name="lastname" type="text" placeholder="lastname (Optional)">
						</div>
					</div>
					<div class=" md:flex mb-6 mt-6">
						<div class="md:w-full ">
			
						
						<label class="block mb-2 text-green-200 font-mono text-xs" for="grid-image">Upload Image</label>
						<input class="bg-gray-700 border border-gray-600 text-gray-900 placeholder-gray-400 text-sm text-white rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 " id="grid-image" name="image" type="file" placeholder="image (Optional)">
				
						</div>
					</div>
					<div class=" md:flex mb-4">
						<div class="md:w-1/2">
						<label class="block mb-2 text-green-200 font-mono text-xs" for="grid-year">
							Year
						</label>
						<input class="bg-gray-700 border border-gray-600 text-gray-900 placeholder-gray-400 text-sm text-white rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 " id="grid-year" name="year" type="number" placeholder="year (Optional)">
						</div>
					</div>
				</div>

				@if (session('error'))
					<div class="text-red-700 mb-5">{{ session('error') }}</div>
				@endif
				<button type="submit" class="text-white  focus:outline-none  font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center bg-blue-600 hover:bg-blue-700 focus:ring-blue-800">Submit</button>
				</form>
			</div>
			
		</div>
	</div>




@endsection