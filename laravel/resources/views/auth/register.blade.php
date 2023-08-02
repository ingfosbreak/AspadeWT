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
				<p class="text-center text-sm">Register</p>
			</div>

			</div>
			<div class="pl-1 pt-1 h-auto  text-green-200 font-mono text-xs bg-black mx-5" id="console">
			<p class="pb-1">Last login: Wed Sep 25 09:11:04 on ttys002</p>
			<p class="pb-1">Laravel:Devprojects laravel</p>
			<p class="pb-1">You can make account and join us here!!!</p>
			</div>

			<!-- form register -->
			<form class="my-20 mx-5 ">
			<div class="mb-6">
				<label for="username" class="block mb-2 text-green-200 font-mono text-xs bg-black">Your username</label>
				<input type="username" id="username" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="username" required>
			</div>
			<div class="mb-6">
				<label for="password" class="block mb-2 text-green-200 font-mono text-xs bg-black">Your password</label>
				<input type="password" id="password" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="password" required>
			</div>
			
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