@extends('layouts.guest')

@section('content')

<!-- component -->
<div class="w-screen h-screen bg-[url('https://media.discordapp.net/attachments/1076489187638915133/1136266054486724630/desktop.jpg?width=1708&height=1068')] bg-no-repeat bg-cover bg-bottom flex flex-wrap items-center justify-center filter saturate-1 overflow-hidden">
	<div class="w-screen mx-auto px-80" id='terminal'>
		<div class="w-full shadow-2xl subpixel-antialiased rounded h-64 bg-black border-black mx-auto h-fit ">
			<div class="flex items-center h-6 rounded-t bg-gray-100 border-b border-gray-500 text-center text-black" id="headerTerminal">
			<div class="flex ml-2 items-center text-center border-red-900 bg-red-500 shadow-inner rounded-full w-3 h-3" id="closebtn">
			</div>
			<div class="ml-2 border-yellow-900 bg-yellow-500 shadow-inner rounded-full w-3 h-3" id="minbtn">
			</div>
			<div class="ml-2 border-green-900 bg-green-500 shadow-inner rounded-full w-3 h-3" id="maxbtn">
			</div>
			<div class="mx-auto pr-16" id="terminaltitle">
				<p class="text-center text-sm">Register Information {{$user_id}}</p>
			</div>

			</div>
			<div class="pl-1 pt-1 h-auto  text-green-200 font-mono text-xs bg-black mx-5" id="console">
			<p class="pb-1">Last login: Wed Sep 25 09:11:04 on ttys002</p>
			<p class="pb-1">Laravel:Devprojects laravel</p>
			<p class="pb-1">Put Your Personal Information Here!!!</p>
			</div>

			<!-- form register -->
			<form action="{{route('register.info',['user_id'=> $user_id])}}" class="my-10 mx-5 " method="POST">
			@csrf
			
            <div class="mb-6">
				<label for="email" class="block mb-2 text-green-200 font-mono text-xs bg-black">Your Email</label>
				<input type="email" name="email" id="email" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="email (Optional)">
			</div>
			<div class="mb-6">
				<label for="faculty" class="block mb-2 text-green-200 font-mono text-xs bg-black">Your Faculty</label>
				<input type="faculty" name="faculty" id="faculty" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="faculty (Optional)">
			</div>



            <div class="flex flex-col">
                <div class="md:flex">
                    <div class="md:w-1/2 mb-6 md:mb-0">
                    <label class="block mb-2 text-green-200 font-mono text-xs bg-black" for="grid-first-name">
                        First Name
                    </label>
                    <input class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" id="grid-first-name" name="firstname" type="text" placeholder="firstname (Optional)">
                
                    </div>
                    <div class="md:w-1/2 ml-3">
                    <label class="block mb-2 text-green-200 font-mono text-xs bg-black" for="grid-last-name">
                        Last Name
                    </label>
                    <input class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" id="grid-last-name" name="lastname" type="text" placeholder="lastname (Optional)">
                    </div>
                </div>
                <div class=" md:flex mb-6 mt-6">
                    <div class="md:w-full ">
        
                    
                    <label class="block mb-2 text-green-200 font-mono text-xs bg-black" for="grid-image">Upload Image</label>
                    <input class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" id="grid-image" name="image" type="file" placeholder="image (Optional)">
             
                    </div>
                </div>
                <div class=" md:flex mb-4">
                    <div class="md:w-1/2">
                    <label class="block mb-2 text-green-200 font-mono text-xs bg-black" for="grid-year">
                        Year
                    </label>
                    <input class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" id="grid-year" name="year" type="number" placeholder="year (Optional)">
                    </div>
                </div>
            </div>

			@if (session('error'))
                <div class="text-red-700 mb-5">{{ session('error') }}</div>
            @endif
			<button type="submit" class="text-white bg-green-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Submit</button>
			</form>
		</div> 
	</div>
</div>

<script type="module" >
	function handle_mousedown(e){

		window.my_dragging = {};
		my_dragging.pageX0 = e.pageX;
		my_dragging.pageY0 = e.pageY;
		my_dragging.elem = this;
		my_dragging.offset0 = $(this).offset();

		function handle_dragging(e){
			var left = my_dragging.offset0.left + (e.pageX - my_dragging.pageX0);
			var top = my_dragging.offset0.top + (e.pageY - my_dragging.pageY0);
			$(my_dragging.elem).offset({top: top, left: left});
		}

		function handle_mouseup(e){
			$('body').off('mousemove', handle_dragging).off('mouseup', handle_mouseup);
		}

		$('body').on('mouseup', handle_mouseup).on('mousemove', handle_dragging);
		}

		$('#terminal').mousedown(handle_mousedown);

</script>



@endsection