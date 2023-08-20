<div class="flex flex-col items-center justify-between bg-black rounded-lg shadow-lg">
    <ul class=" menu-hover-fill flex flex-col leading-none text-2xl uppercase space-y-4 p-8 rounded-lg">
        <a href="{{ route('event.main.information',['event'=> $event]) }}" class="text-2xl text-white bg-black hover:bg-gray-900 rounded-xl p-5">
            Info
        </a>
        <a href="{{ route('event.main.main',['event'=> $event]) }}" class="text-2xl text-white bg-black hover:bg-gray-900 rounded-xl p-5">
        Announcement
        </a>
        <a href="{{ route('event.kanban',['event'=> $event])}}" class="text-2xl text-white bg-black hover:bg-gray-900 rounded-xl p-5">
        Kanban
        </a>
    </ul>

    <a href="{{ route('user.main')}}"
        class="flex flex-col mt-5 mb-5 rounded-lg w-40 text-center item-center self-end px-3.5 py-2 m-5 overflow-hidden relative group cursor-pointer border-4 font-medium border-black text-indigo-600 text-white">
        <button formaction="{{ route('user.main')}}" formnovalidate>
            <span
                class="absolute w-64 h-0 transition-all duration-300 origin-center rotate-45 -translate-x-20 bg-red-500 top-1/2 group-hover:h-64 group-hover:-translate-y-32 ease"></span>
            <span class="relative text-red-500 transition duration-300 group-hover:text-white ease">
                <h4 class="text-xl text-black font-bold">Back</h4>
            </span>
        </button>
    </a>
</div>