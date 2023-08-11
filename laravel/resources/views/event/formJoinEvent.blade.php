@vite(['resources/css/app.css', 'resources/js/app.js'])

<body
    class=" bg-[url(https://cdn.discordapp.com/attachments/1135564910131151019/1138851003416981675/glowing-stage-light-illuminates-cheering-rock-fans-generated-by-ai.jpg)] bg-cover bg-center bg-fixed ">
    <section id="testimonies">
        <div class="flex flex-col">
            <div class="flex justify-center">
                <img class=" h-25"
                    src="https://cdn.discordapp.com/attachments/1135564910131151019/1138487250234114109/remove.png"
                    alt="logo">

            </div>
            <div class="flex flex-col items-center justify-center px-6 py-8 md:h-screen lg:py-0 mb-10 -mt-5">
                <form action="{{ route('user.requestjoinEventMember.create',['event'=>$event])}}" method="POST"
                    enctype="multipart/form-data">
                    @csrf
                    <div
                        class="bg-opacity-75 w-full bg-white rounded-lg shadow dark:border md:mt-0 sm:max-w-md xl:p-0 dark:bg-gray-800 dark:border-gray-700 mt-8">
                        <div class=" p-6 space-y-4 md:space-y-6 sm:p-8">
                            <h1
                                class="text-xl text-center font-bold leading-tight tracking-tight text-gray-900 md:text-2xl dark:text-white">
                                Request for Joining Event
                            </h1>
                            <div class="relative z-0">
                                <input type="text" id="disabled-input" name="name"
                                    value="{{Auth::getUser()->userFull->firstname}}" aria-label="disabled input"
                                    class="block py-2.5 px-0 w-full text-base  bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                                    placeholder=" " autocomplete="off" data-te-input-showcounter="true" disabled />
                                <label for="firstname"
                                    class="absolute text-sm  dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">
                                    FirstName</label>
                            </div>
                            <div class="relative z-0">
                                <input type="text" id="disabled-input" name="name"
                                    value="{{Auth::getUser()->userFull->lastname}}" aria-label="disabled input"
                                    class="block py-2.5 px-0 w-full text-base  bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                                    placeholder=" " autocomplete="off" data-te-input-showcounter="true" disabled />
                                <label for="lastname"
                                    class="absolute text-sm  dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">
                                    LastName</label>
                            </div>
                            <div class="relative z-0">
                                <input type="text" id="disabled-input" name="faculty"
                                    value="{{Auth::getUser()->userFull->faculty}}" aria-label="disabled input"
                                    class="block py-2.5 px-0 w-full text-base  bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                                    placeholder=" " autocomplete="off" data-te-input-showcounter="true" disabled />
                                <label for="faculty"
                                    class="absolute text-sm  dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">
                                    Faculty</label>
                            </div>
                            <div class="relative z-0">
                                <input type="text" id="disabled-input" name="year"
                                    value="{{Auth::getUser()->userFull->year}}" aria-label="disabled input"
                                    class="block py-2.5 px-0 w-full text-base  bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                                    placeholder=" " autocomplete="off" data-te-input-showcounter="true" disabled />
                                <label for="faculty"
                                    class="absolute text-sm  dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">
                                    Year</label>
                            </div>
                            <div class="relative z-0">
                                <input type="text" id="disabled-input" name="email"
                                    value="{{Auth::getUser()->userFull->email}}" aria-label="disabled input"
                                    class="block py-2.5 px-0 w-full text-base  bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                                    placeholder=" " autocomplete="off" data-te-input-showcounter="true" disabled />
                                <label for="email"
                                    class="absolute text-sm  dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">
                                    Email</label>
                            </div>




                            <label class="flex block mb-2 text-sm font-medium text-gray-900 dark:text-white"
                                for="multiple_files">Upload multiple files</label>
                            <input
                                class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400"
                                id="multiple_files" name='user_file[]' type="file" multiple>



                            <div>
                                <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Reasons for
                                    wanting to attend this event</label>
                                <textarea id="description" rows="4" name='reason'
                                    class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                    placeholder="Write your Reasons here..."></textarea>
                            </div>


                            <div class="flex">
                                <a href="{{ route('user.main')}}">
                                    <div
                                        class=" mt-5 mb-5 rounded-lg w-40 text-center px-3.5 py-2 m-1 overflow-hidden relative group cursor-pointer border-4 font-medium border-black text-indigo-600 text-white">
                                        <span
                                            class="absolute w-64 h-0 transition-all duration-300 origin-center rotate-45 -translate-x-20 bg-red-500 top-1/2 group-hover:h-64 group-hover:-translate-y-32 ease"></span>
                                        <span
                                            class="relative text-red-500 transition duration-300 group-hover:text-white ease">
                                            <h4 class="text-xl text-black font-bold">Back</h4>
                                        </span>
                                    </div>
                                </a>



                                <!-- submit button -->
                                <button type="submit"
                                    class=" mt-5 mb-5 rounded-lg w-40 text-center px-3.5 py-2 m-1 overflow-hidden relative group cursor-pointer border-4 font-medium border-black text-indigo-600 text-white">
                                    <span
                                        class="absolute w-64 h-0 transition-all duration-300 origin-center rotate-45 -translate-x-20 bg-orange-500 top-1/2 group-hover:h-64 group-hover:-translate-y-32 ease"></span>
                                    <span
                                        class="relative text-orange-500 transition duration-300 group-hover:text-white ease">
                                        <h4 class="text-xl text-black font-bold">Submit</h4>
                                    </span>
                                </button>
                            </div>
                            <!--end submit button -->

                        </div>



                    </div>
            </div>
            </form>

        </div>
        </div>
    </section>

</body>