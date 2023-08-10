@extends('layouts.app')
@section('content')
@include('components.event.imageMainEvent')
<div class="max-w-screen-xl mx-auto m-10 flex flex-row place-content-center ">
    <div class=" bg-white flex flex-col rounded-lg">
        <div class="bg-white flex rounded-lg">

            @include('components.event.sidebarEvent')
            <!-- from :https://tailwindcomponents.com/component/blog-post -->
            <div class="m-8 bg-white rounded-lg">
                <p class="pb-6">{{ $event->description}}</p>


                <p class="pb-6">Difficulty on insensible reasonable in. From as went he they. Preference themselves me
                    as
                    thoroughly
                    partiality considered on in estimating. Middletons acceptance discovered projecting so is so or. In
                    or
                    attachment inquietude remarkably comparison at an. Is surrounded prosperous stimulated am me
                    discretion
                    expression. But truth being state can she china widow. Occasional preference fat remarkably now
                    projecting
                    uncommonly dissimilar. Sentiments projection particular companions interested do at my delightful.
                    Listening
                    newspaper in advantage frankness to concluded unwilling.</p>

                <p class="pb-6">Adieus except say barton put feebly favour him. Entreaties unpleasant sufficient few
                    pianoforte
                    discovered
                    uncommonly ask. Morning cousins amongst in mr weather do neither. Warmth object matter course active
                    law
                    spring six. Pursuit showing tedious unknown winding see had man add. And park eyes too more him.
                    Simple
                    excuse
                    active had son wholly coming number add. Though all excuse ladies rather regard assure yet. If
                    feelings
                    so
                    prospect no as raptures quitting.</p>

                <div class="border-l-4 border-gray-500 pl-4 mb-6 italic rounded">
                    Sportsman do offending supported extremity breakfast by listening. Decisively advantages nor
                    expression
                    unpleasing she led met. Estate was tended ten boy nearer seemed. As so seeing latter he should
                    thirty
                    whence.
                    Steepest speaking up attended it as. Made neat an on be gave show snug tore.
                </div>

                </main>

                <!-- main ends here -->
                <div>




                </div>

            </div>
        </div>
    </div>
</div>
@endsection