@extends('layouts.app')

@section('content')
<div class="max-w-screen-xl mx-auto mt-20">
    @include('components.event.imageMainEvent', ['some' => 'data'])
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
            <a href="{{ route('event.main.main',['event'=> $event])}}">
                <button
                    class="rounded-lg bg-orange-500 py-5 px-10 font-sans text-xs font-bold uppercase text-white shadow-md shadow-orange-500/20 transition-all hover:shadow-lg hover:shadow-orange-500/40 focus:opacity-[0.85] focus:shadow-none active:opacity-[0.85] active:shadow-none disabled:pointer-events-none disabled:opacity-50 disabled:shadow-none"
                    data-ripple-light="true">
                    Join
                </button>
            </a>
        </div>

    </div>

    </main>

@endsection