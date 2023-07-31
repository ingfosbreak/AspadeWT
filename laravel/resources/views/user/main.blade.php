@extends('layouts.app')

@section('content')
<!-- from https://tailwindcomponents.com/component/grid-blog-page -->
<div class="container mx-auto bg-gray-400 h-96 rounded-md flex items-center">
    <div class="sm:ml-20 text-gray-50 text-center sm:text-left">
        <h1 class="text-5xl font-bold mb-4">
            Amongus
        </h1>
        <p class="text-lg inline-block sm:block">The largest SUS community to rent saunas in Finland.</p>
        <button class="mt-8 px-4 py-2 bg-gray-600 rounded">Join</button>
    </div>
</div>
<section class="bg-white dark:bg-gray-900">

    <div class="container px-6 py-10 mx-auto">
        <h1 class="text-3xl font-semibold text-gray-800 capitalize lg:text-4xl dark:text-white">From the blog</h1>

        <div class="grid grid-cols-1 gap-8 mt-8 md:mt-16 md:grid-cols-2">
            <div class="lg:flex" style="position: relative;">
                <img class="object-cover w-full h-56 rounded-lg lg:w-64"
                    src="https://images.unsplash.com/photo-1515378960530-7c0da6231fb1?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1470&q=80"
                    alt="">

                <div class="flex flex-col py-6 lg:mx-6">
                    <a href="#" class="text-xl font-semibold text-gray-800 hover:underline dark:text-white">
                        titleEvent
                    </a>
                    <span class="text-sm text-gray-500 dark:text-gray-300">On: 20 October 2019</span>

                    <button
                        class="rounded-lg bg-white border border-black py-3 px-6 font-sans text-xs font-bold uppercase text-black shadow-md"
                        data-ripple-light="true" style="position: absolute; bottom: 0; right: 5; top: 10;">
                        White Button
                    </button>

                    <button
                        class="rounded-lg bg-orange-500 py-3 px-6 font-sans text-xs font-bold uppercase text-white shadow-md shadow-orange-500/20 transition-all hover:shadow-lg hover:shadow-orange-500/40 focus:opacity-[0.85] focus:shadow-none active:opacity-[0.85] active:shadow-none disabled:pointer-events-none disabled:opacity-50 disabled:shadow-none"
                        data-ripple-light="true" style="position: absolute; bottom: 0; right: 0; top: 10;">
                        Orange Button
                    </button>
                </div>
            </div>




            <div class="lg:flex">
                <img class="object-cover w-full h-56 rounded-lg lg:w-64"
                    src="https://images.unsplash.com/photo-1497032628192-86f99bcd76bc?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1470&q=80"
                    alt="">

                <div class="flex flex-col justify-between py-6 lg:mx-6">
                    <a href="#" class="text-xl font-semibold text-gray-800 hover:underline dark:text-white ">
                        How to use sticky note for problem solving
                    </a>

                    <span class="text-sm text-gray-500 dark:text-gray-300">On: 20 October 2019</span>
                </div>
            </div>

            <div class="lg:flex">
                <img class="object-cover w-full h-56 rounded-lg lg:w-64"
                    src="https://images.unsplash.com/photo-1544654803-b69140b285a1?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1470&q=80"
                    alt="">

                <div class="flex flex-col justify-between py-6 lg:mx-6">
                    <a href="#" class="text-xl font-semibold text-gray-800 hover:underline dark:text-white ">
                        Morning routine to boost your mood
                    </a>

                    <span class="text-sm text-gray-500 dark:text-gray-300">On: 25 November 2020</span>
                </div>
            </div>

            <div class="lg:flex">
                <img class="object-cover w-full h-56 rounded-lg lg:w-64"
                    src="https://images.unsplash.com/photo-1530099486328-e021101a494a?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1547&q=80"
                    alt="">

                <div class="flex flex-col justify-between py-6 lg:mx-6">
                    <a href="#" class="text-xl font-semibold text-gray-800 hover:underline dark:text-white ">
                        All the features you want to know
                    </a>

                    <span class="text-sm text-gray-500 dark:text-gray-300">On: 30 September 2020</span>
                </div>
            </div>

            <div class="lg:flex">
                <img class="object-cover w-full h-56 rounded-lg lg:w-64"
                    src="https://images.unsplash.com/photo-1521737604893-d14cc237f11d?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1484&q=80"
                    alt="">

                <div class="flex flex-col justify-between py-6 lg:mx-6">
                    <a href="#" class="text-xl font-semibold text-gray-800 hover:underline dark:text-white ">
                        Minimal workspace for your inspirations
                    </a>

                    <span class="text-sm text-gray-500 dark:text-gray-300">On: 13 October 2019</span>
                </div>
            </div>


        </div>
    </div>

</section>

@endsection