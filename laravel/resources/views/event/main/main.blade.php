@extends('layouts.app')
@section('content')
@include('components.event.imageMainEvent', ['some' => 'data'])
<div class="max-w-screen-xl mx-auto flex flex-col md:flex-row">

    @include('components.event.sidebarEvent', ['some' => 'data'])

    <!-- from :https://tailwindcomponents.com/component/blog-post -->
    <div class="max-w-screen-xl mx-auto">
        <main class="mt-10">

            <div class="px-4 lg:px-0 mt-12 text-gray-700 max-w-screen-md mx-auto text-lg leading-relaxed">

                <ol class="relative border-l border-gray-200 dark:border-gray-700">
                    <li class="mb-10 ml-4">
                        <div
                            class="absolute w-3 h-3 bg-gray-200 rounded-full mt-1.5 -left-1.5 border border-white dark:border-gray-900 dark:bg-gray-700">
                        </div>
                        <time class="mb-1 text-sm font-normal leading-none text-gray-400 dark:text-gray-500">February
                            2022</time>
                        <h3 class="text-lg font-semibold text-gray-900 dark:text-white">Application UI code in Tailwind
                            CSS
                        </h3>
                        <p class="mb-4 text-base font-normal text-gray-500 dark:text-gray-400">Get access to over 20+
                            pages
                            including a dashboard layout, charts, kanban board, calendar, and pre-order E-commerce &
                            Marketing pages.</p>
                        <a href="#"
                            class="inline-flex items-center px-4 py-2 text-sm font-medium text-gray-900 bg-white border border-gray-200 rounded-lg hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:outline-none focus:ring-gray-200 focus:text-blue-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700 dark:focus:ring-gray-700">Learn
                            more <svg class="w-3 h-3 ml-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                fill="none" viewBox="0 0 14 10">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9" />
                            </svg></a>
                    </li>
                    <li class="mb-10 ml-4">
                        <div
                            class="absolute w-3 h-3 bg-gray-200 rounded-full mt-1.5 -left-1.5 border border-white dark:border-gray-900 dark:bg-gray-700">
                        </div>
                        <time class="mb-1 text-sm font-normal leading-none text-gray-400 dark:text-gray-500">March
                            2022</time>
                        <h3 class="text-lg font-semibold text-gray-900 dark:text-white">Marketing UI design in Figma
                        </h3>
                        <p class="text-base font-normal text-gray-500 dark:text-gray-400">All of the pages and
                            components
                            are first designed in Figma and we keep a parity between the two versions even as we update
                            the
                            project.</p>
                    </li>
                    <li class="ml-4">
                        <div
                            class="absolute w-3 h-3 bg-gray-200 rounded-full mt-1.5 -left-1.5 border border-white dark:border-gray-900 dark:bg-gray-700">
                        </div>
                        <time class="mb-1 text-sm font-normal leading-none text-gray-400 dark:text-gray-500">April
                            2022</time>
                        <h3 class="text-lg font-semibold text-gray-900 dark:text-white">E-Commerce UI code in Tailwind
                            CSS
                        </h3>
                        <p class="text-base font-normal text-gray-500 dark:text-gray-400">Get started with dozens of web
                            components and interactive elements built on top of Tailwind CSS.</p>
                    </li>
                </ol>


            </div>
            <div class="align-items:flex-end" style="display: flex; justify-content: space-between;">
            <a href="{{ route('user.main')}}">
                <button
                    class="rounded-lg bg-wirte-500 py-5 px-10 font-sans text-xs font-bold uppercase text-black shadow-md shadow-black-500/20 transition-all hover:shadow-lg hover:shadow-black-500/40 focus:opacity-[0.85] focus:shadow-none active:opacity-[0.85] active:shadow-none disabled:pointer-events-none disabled:opacity-50 disabled:shadow-none"
                    data-ripple-light="true">
                    Back
                </button>
            </a>
            </div>
    </div>
    
    </main>
    
    <!-- main ends here -->
    <div>






    </div>
</div>

@endsection