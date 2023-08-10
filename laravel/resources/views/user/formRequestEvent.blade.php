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
                        <div class=" columns-3xl p-6 space-y-4  sm:p-8">
                            <h1
                                class="text-center text-xl font-bold leading-tight tracking-tight text-gray-900 md:text-2xl dark:text-white">
                                Request for to Open Event
                            </h1>
                            <form class="space-y-4 md:space-y-6" action="#">
                                <!-- name -->
                                <div class="relative z-0">
                                    <input type="name" id="name"
                                        class="block py-2.5 px-0 w-full text-base  bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                                        placeholder=" " autocomplete="off" data-te-input-showcounter="true" />
                                    <label for="floating_standard"
                                        class="absolute text-sm  dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">
                                        NameEvent</label>
                                </div>
                                <!-- Stuff  -->
                                <div class="relative z-0">
                                    <input type="number" id="stuff"
                                        class="block py-2.5 px-0 w-full text-base  bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                                        placeholder=" " autocomplete="off" />
                                    <label for="stuff"
                                        class="absolute text-sm  dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">
                                        จำนวนStuffที่ต้องการในEvent</label>
                                </div>
                                <!-- Category -->
                                <div>
                                    <label
                                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Role</label>
                                    <select type="text" id="role"
                                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                        placeholder="Choose a role for joining" required="">
                                        <option selected>-</option>
                                        <option value="Joiner">กลางแจ้ง</option>
                                        <option value="stuff">ในร่ม</option>
                                        <option value="E">TOTO</option>
                                    </select>
                                    <label for="category"
                                        class="absolute text-sm  dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">
                                        ประเภทกิจกรรม</label>
                                </div>
                                <!-- budget -->
                                <div class="relative z-0">
                                    <input type="number" id="budget"
                                        class="block py-2.5 px-0 w-full text-base  bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                                        placeholder=" " autocomplete="off" />
                                    <label for="budget"
                                        class="absolute text-sm  dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">
                                        จำนวนbudgetที่กำหนกใช้ในEvent</label>
                                </div>
                                <!-- date Event -->
                                <div class="relative z-0">
                                    <input type="date" id="date"
                                        class="block py-2.5 px-0 w-full text-base bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                                        placeholder="d/m/y" autocomplete="off" />
                                    <label for="date"
                                        class="absolute text-sm dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">
                                        วันเริ่ม Event</label>
                                </div>

                                <!-- location -->
                                <div class="relative z-0">
                                    <input type="text" id="location"
                                        class="block py-2.5 px-0 w-full text-base bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                                        placeholder=" " autocomplete="off" />
                                    <label for="location"
                                        class="absolute text-sm dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">
                                        สถานที่จัดกิจกรรม</label>
                                </div>

                                <label for="description"
                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">description</label>
                                <textarea id="description" rows="4"
                                    class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                    placeholder="Write your Description here..."></textarea>

                                <div>
                                    <!-- password -->
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
                                                    class="relative text-red-500 transition duration-300 group-hover:text-white ease">
                                                    <h4 class="text-xl text-black font-bold">Back</h4>
                                                </span>
                                            </button>
                                        </a>


                                        <!-- submit button -->
                                        <a href="#_"
                                            class=" mt-5 mb-5 rounded-lg w-40 text-center px-3.5 py-2 m-1 overflow-hidden relative group cursor-pointer border-4 font-medium border-black text-indigo-600 text-white">
                                            <button type="submit">
                                                <span
                                                    class="absolute w-64 h-0 transition-all duration-300 origin-center rotate-45 -translate-x-20 bg-orange-500 top-1/2 group-hover:h-64 group-hover:-translate-y-32 ease"></span>
                                                <span
                                                    class="relative text-orange-500 transition duration-300 group-hover:text-white ease">
                                                    <h4 class="text-xl text-black font-bold">Submit</h4>
                                                </span>
                                            </button>
                                        </a>

                                        <!--end submit button -->

                                    </div>


                            </form>

                        </div>
                    </div>
                </form>
            </div>
        </div>
    </section>

</body>