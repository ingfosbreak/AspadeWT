@extends('layouts.app')

@section('content')
<div class="max-w-screen-xl mx-auto">
    <main class="mt-10">
        <h1>in main event</h1>
        <div class="mb-4 md:mb-0 w-full max-w-screen-md mx-auto relative" style="height: 24em;">
            <div class="absolute left-0 bottom-0 w-full h-full z-10"
                style="background-image: linear-gradient(180deg,transparent,rgba(0,0,0,.7));"></div>
            <img src="https://cdn1.epicgames.com/salesEvent/salesEvent/amoguslandscape_2560x1440-3fac17e8bb45d81ec9b2c24655758075"
                class="absolute left-0 top-0 w-full h-full z-0 object-cover" />
            <div class="p-4 absolute bottom-0 left-0 z-20">
                <a href="#"
                    class="px-4 py-1 bg-black text-gray-200 inline-flex items-center justify-center mb-2">Nutrition</a>
                <h2 class="text-4xl font-semibold text-gray-100 leading-tight">
                    {{ $event-> name }}
                </h2>
                <div class="flex mt-3">
                    <img src="https://carrotsandcake.com/wp-content/uploads/2022/07/Among-Us-Symbol.png"
                        class="h-10 w-10 rounded-full mr-2 object-cover" />
                    <div>
                        <p class="font-semibold text-gray-200 text-sm"> saran wongkum </p>
                        <p class="font-semibold text-gray-400 text-xs"> 29 feb </p>
                    </div>
                </div>
            </div>

        </div>
        <div class="px-4 lg:px-0 mt-12 text-gray-700 max-w-screen-md mx-auto text-lg leading-relaxed">
            <p class="pb-6">{{ $event->description}}</p>

            <p class="pb-6">Difficulty on insensible reasonable in. From as went he they. Preference themselves me as
                thoroughly
                partiality considered on in estimating. Middletons acceptance discovered projecting so is so or. In or
                attachment inquietude remarkably comparison at an. Is surrounded prosperous stimulated am me discretion
                expression. But truth being state can she china widow. Occasional preference fat remarkably now
                projecting
                uncommonly dissimilar. Sentiments projection particular companions interested do at my delightful.
                Listening
                newspaper in advantage frankness to concluded unwilling.</p>

            <p class="pb-6">Adieus except say barton put feebly favour him. Entreaties unpleasant sufficient few
                pianoforte
                discovered
                uncommonly ask. Morning cousins amongst in mr weather do neither. Warmth object matter course active law
                spring six. Pursuit showing tedious unknown winding see had man add. And park eyes too more him. Simple
                excuse
                active had son wholly coming number add. Though all excuse ladies rather regard assure yet. If feelings
                so
                prospect no as raptures quitting.</p>

            <div class="border-l-4 border-gray-500 pl-4 mb-6 italic rounded">
                Sportsman do offending supported extremity breakfast by listening. Decisively advantages nor
                expression
                unpleasing she led met. Estate was tended ten boy nearer seemed. As so seeing latter he should thirty
                whence.
                Steepest speaking up attended it as. Made neat an on be gave show snug tore.
            </div>
            <div class="align-items:flex-end" style="display: flex; justify-content: space-between;">
                <a href="{{ route('user.main')}}">
                    <button
                        class="rounded-lg bg-wirte-500 py-5 px-10 font-sans text-xs font-bold uppercase text-black shadow-md shadow-black-500/20 transition-all hover:shadow-lg hover:shadow-black-500/40 focus:opacity-[0.85] focus:shadow-none active:opacity-[0.85] active:shadow-none disabled:pointer-events-none disabled:opacity-50 disabled:shadow-none"
                        data-ripple-light="true">
                        Back
                    </button>
                </a>
                <a href="{{ route('event.form',['event'=> $event])}}">
                <button
                    class="rounded-lg bg-orange-500 py-5 px-10 font-sans text-xs font-bold uppercase text-white shadow-md shadow-orange-500/20 transition-all hover:shadow-lg hover:shadow-orange-500/40 focus:opacity-[0.85] focus:shadow-none active:opacity-[0.85] active:shadow-none disabled:pointer-events-none disabled:opacity-50 disabled:shadow-none"
                    data-ripple-light="true">
                    Join
                </button>
                </a>
            </div>

        </div>

    </main>

    <!-- main ends here -->

    <!-- footer -->
    <footer class="border-t mt-32 pt-12 pb-32 px-4 lg:px-0">
        <div class="flex">

            <div class="w-full md:w-1/3 lg:w-1/4">
                <h6 class="font-semibold text-gray-700 mb-4">Company</h6>
                <ul>
                    <li> <a href="" class="block text-gray-600 py-2">Team</a> </li>
                    <li> <a href="" class="block text-gray-600 py-2">About us</a> </li>
                    <li> <a href="" class="block text-gray-600 py-2">Press</a> </li>
                </ul>
            </div>

            <div class="w-full md:w-1/3 lg:w-1/4">
                <h6 class="font-semibold text-gray-700 mb-4">Content</h6>
                <ul>
                    <li> <a href="" class="block text-gray-600 py-2">Blog</a> </li>
                    <li> <a href="" class="block text-gray-600 py-2">Privacy Policy</a> </li>
                    <li> <a href="" class="block text-gray-600 py-2">Terms & Conditions</a> </li>
                    <li> <a href="" class="block text-gray-600 py-2">Documentation</a> </li>
                </ul>
            </div>

        </div>
    </footer>
</div>
@endsection