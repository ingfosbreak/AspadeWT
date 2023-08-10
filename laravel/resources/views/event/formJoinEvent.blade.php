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
                <form action="">
                    @csrf
                    <div
                        class="bg-opacity-75 w-full bg-white rounded-lg shadow dark:border md:mt-0 sm:max-w-md xl:p-0 dark:bg-gray-800 dark:border-gray-700 mt-8">
                        <div class=" p-6 space-y-4 md:space-y-6 sm:p-8">
                            <h1
                                class="text-xl text-center font-bold leading-tight tracking-tight text-gray-900 md:text-2xl dark:text-white">
                                Request for Joining Event
                            </h1>
                            <div>
                                <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Role</label>
                                <select id="role"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                    placeholder="Choose a role for joining" required="">
                                    <option selected>-</option>
                                    <option value="Joiner">Joiner</option>
                                    <option value="stuff">Stuff</option>
                                </select>
                            </div>
                            <div>
                                <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                                    Videos and pictures for consideration.</label>
                                <div class="flex items-center justify-center w-full">
                                    <label for="dropzone-file"
                                        class="flex flex-col items-center justify-center w-full h-64 border-2 border-gray-300 border-dashed rounded-lg cursor-pointer bg-gray-50 dark:hover:bg-bray-800 dark:bg-gray-700 hover:bg-gray-100 dark:border-gray-600 dark:hover:border-gray-500 dark:hover:bg-gray-600">
                                        <div class="flex flex-col items-center justify-center pt-5 pb-6">
                                            <svg class="w-8 h-8 mb-4 text-gray-500 dark:text-gray-400"
                                                aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                                                viewBox="0 0 20 16">
                                                <path stroke="currentColor" stroke-linecap="round"
                                                    stroke-linejoin="round" stroke-width="2"
                                                    d="M13 13h3a3 3 0 0 0 0-6h-.025A5.56 5.56 0 0 0 16 6.5 5.5 5.5 0 0 0 5.207 5.021C5.137 5.017 5.071 5 5 5a4 4 0 0 0 0 8h2.167M10 15V6m0 0L8 8m2-2 2 2" />
                                            </svg>
                                            <p class="mb-2 text-sm text-gray-500 dark:text-gray-400"><span
                                                    class="font-semibold">Click to upload</span> or drag and drop</p>
                                            <p class="text-xs text-gray-500 dark:text-gray-400">SVG, PNG, JPG or GIF
                                                (MAX.
                                                800x400px)</p>
                                        </div>
                                        <input id="dropzone-file" type="file" class="hidden" />
                                    </label>
                                </div>
                            </div>


                            <div>
                                <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Reasons for
                                    wanting to attend this event</label>
                                <textarea id="description" rows="4"
                                    class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                    placeholder="Write your Reasons here..."></textarea>
                            </div>
                            <div class="relative z-0">
                                <input type="password" id="password"
                                    class="block py-2.5 px-0 w-full text-base bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                                    placeholder=" " autocomplete="off" />
                                <label for="password"
                                    class="absolute text-sm dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">
                                    ยืนยันpassword</label>
                            </div>

                            <div class="flex gap-10">
                                <a href="#_"
                                    class=" mt-5 mb-5 rounded-lg w-40 text-center px-3.5 py-2 m-1 overflow-hidden relative group cursor-pointer border-4 font-medium border-black text-indigo-600 text-white">
                                    <button formaction="{{ route('user.main')}}" formnovalidate>
                                        <span
                                            class="absolute w-64 h-0 transition-all duration-300 origin-center rotate-45 -translate-x-20 bg-red-500 top-1/2 group-hover:h-64 group-hover:-translate-y-32 ease"></span>
                                        <span
                                            class="relative text-red-500 transition duration-300 group-hover:text-white ease"><h4 class="text-xl text-black font-bold">Back</h4></span>
                                    </button>
                                </a>


                                <!-- submit button -->
                                <a href="#_"
                                    class=" mt-5 mb-5 rounded-lg w-40 text-center px-3.5 py-2 m-1 overflow-hidden relative group cursor-pointer border-4 font-medium border-black text-indigo-600 text-white">
                                    <button type="submit">
                                        <span
                                            class="absolute w-64 h-0 transition-all duration-300 origin-center rotate-45 -translate-x-20 bg-orange-500 top-1/2 group-hover:h-64 group-hover:-translate-y-32 ease"></span>
                                        <span
                                            class="relative text-orange-500 transition duration-300 group-hover:text-white ease"><h4 class="text-xl text-black font-bold">Submit</h4></span>
                                    </button>
                                </a>

                                <!--end submit button -->

                            </div>



                        </div>
                    </div>
                </form>

            </div>
        </div>
    </section>

</body>