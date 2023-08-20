<!-- follow me on twitter @asad_codes -->

<div class="flex flex-wrap">
    <section class="relative mx-auto">
        <!-- navbar -->
        <nav class="flex justify-between bg-gray-200 text-black w-screen px-5 xl:px-12 items-center">
            @if (Auth::getUser()->role == "user")
            <a class="text-3xl font-bold font-heading" href="{{route('user.main')}}">
                <img class="h-16"
                    src="https://media.discordapp.net/attachments/1135564910131151019/1138487250234114109/remove.png?width=1396&height=714"
                    alt="logo">
            </a>
            @else
            <a class="text-3xl font-bold font-heading" href="{{route('admin.main')}}">
                <img class="h-16"
                    src="https://media.discordapp.net/attachments/1135564910131151019/1138487250234114109/remove.png?width=1396&height=714"
                    alt="logo">
            </a>
            @endif
            <!-- navigation -->
            @if (Auth::getUser()->role == "user")
            <nav class="nav navbar-nav font-semibold text-lg">
                <ul class="flex items-start">

                    <a href="{{ route('user.myOwnEvent')}}">
                        <li
                            class="p-4 border-b-2 border-slate-500 border-opacity-0 hover:border-opacity-100 hover:text-slate-800 duration-200 cursor-pointer active">
                            My Own event
                        </li>
                    </a>

                    <a href="{{ route('user.formRequestEvent')}}">
                        <li
                            class="p-4 border-b-2 border-slate-500 border-opacity-0 hover:border-opacity-100 hover:text-slate-800 duration-200 cursor-pointer active">
                            Request
                        </li>
                    </a>

                    <a href="{{ route('user.myEventHistory.inProgress')}}">
                        <li
                            class="p-4 border-b-2 border-slate-500 border-opacity-0 hover:border-opacity-100 hover:text-slate-800 duration-200 cursor-pointer">
                            My history
                        </li>
                    </a>
                    <a href="{{ route('user.notify')}}">
                        <li
                            class="p-4 border-b-2 border-slate-500 border-opacity-0 hover:border-opacity-100 hover:text-slate-800 duration-200 cursor-pointer">
                            Notification
                        </li>
                    </a>
                </ul>
            </nav>
            @endif

            <!-- Sign In / Register      -->
            <div class="flex gap-3 items-center">
                <span class="text-green-500 text-xl">{{Auth::user()->username}}</span>
                <button type="button"
                    class="flex mr-3 text-sm bg-gray-800 rounded-full md:mr-0 focus:ring-4 focus:ring-gray-300 dark:focus:ring-gray-600"
                    id="user-menu-button" aria-expanded="false" data-dropdown-toggle="user-dropdown"
                    data-dropdown-placement="bottom">


                    @if (Auth::getUser()->image != null)
                    <img class="w-8 h-8 rounded-full" src="{{ asset('storage/'. Auth::getUser()->image->image_path) }}"
                        alt="" />
                    @else
                    <img class="w-8 h-8 rounded-full"
                        src="https://images-ext-2.discordapp.net/external/g284NahQlbC01_TG1N2RxQ7YOcAzHUizwQjo4yS9tuI/%3Fw%3D1380%26t%3Dst%3D1691673786~exp%3D1691674386~hmac%3D99e1638c243d744e8648c7255cba9bf267a036e13aa5eeb1c3db56382b0e8a44/https/img.freepik.com/free-vector/illustration-businessman_53876-5856.jpg?width=1170&height=1170"
                        class="w-40 h-40 object-cover border-4 border-white rounded-full">
                    @endif
            </div>
            </button>
            <!-- Dropdown menu -->
            <div class="z-50 hidden my-4 text-base list-none bg-white divide-y divide-gray-100 rounded-lg shadow dark:bg-gray-700 dark:divide-gray-600"
                id="user-dropdown">
                <div class="px-4 py-3">
                    <span class="block text-sm text-gray-900 dark:text-white">{{Auth::user()->username}}</span>
                    <span
                        class="block text-sm  text-gray-500 truncate dark:text-gray-400">{{Auth::user()->email}}</span>
                </div>
                <ul class="py-2" aria-labelledby="user-menu-button">
                    <li>
                        <a href="{{route('setting')}}"
                            class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">Settings</a>
                    </li>
                    <li>
                        <form action="{{route('logout')}}" method="POST">
                            @csrf
                            <button type="submit"
                                class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">Sign
                                out</button>

                        </form>
                    </li>
                </ul>
            </div>


        </nav>
    </section>
</div>