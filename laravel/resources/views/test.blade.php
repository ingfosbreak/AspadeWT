@extends('layouts.app')

@section('content')
    @vite(['resources/css/main.css'])
    <div class="all">
        <button id ='but2' class="edit">Edit</button>
        <div class="parent" id="parent">
            <div class="thin">1</div>
            <div class="thin">2</div>

            <div class="thin">3</div>
            <div class="thin">4</div>

        
        </div>


        <div class="parent2" id="parent2">
            <div class="thin2">1</div>
            <div class="thin2">2</div>

            <div class="thin2">3</div>
            <div class="thin2">4</div>

        
        </div>
    </div>
    @vite(['resources/js/drag.js','resources/js/click.js'])
    
@endsection