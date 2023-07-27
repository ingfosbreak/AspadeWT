@extends('layouts.app')

@section('content')
    @vite(['resources/css/main.css','resources/js/app.js'])
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
    
    <script type="module">

        $( document ).ready(function() {
            
            dragula([$('#parent').get(0), $('#parent2').get(0)], { revertOnSpill: true });


            $('#but2').bind('click', function(event) {
                
                
                var classname = $('#parent').attr('class');

                if (classname == "parent"){
                    $('#parent').removeClass('parent').addClass('canclick');
                    $('#parent2').removeClass('parent2').addClass('canclick2');
                    $('#but2').removeClass('edit').addClass('apply');
                    $("#but2").html("Apply");
                }

                else if (classname == "canclick") {
                    $('#parent').removeClass('canclick').addClass('parent');
                    $('#parent2').removeClass('canclick2').addClass('parent2');
                    $('#but2').removeClass('apply').addClass('edit');
                    $("#but2").html("Edit");
                    
                }

            });
        });
    
    </script>
    
@endsection


    
