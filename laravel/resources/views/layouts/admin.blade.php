<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>AspadeWT</title>
    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body>
    <div class="flex flex-col h-screen bg-rose-200 w-full">


        <div class=" text-white shadow w-full p-2 flex items-center justify-between">
            <div class="flex items-center">
                <img src="https://media.discordapp.net/attachments/1135564910131151019/1138487250234114109/remove.png?width=872&height=446"
                    alt="Logo" class="w-28 h-18 mr-2">
                <h2 class="font-bold text-xl text-gray-500">Aspade ADMIN</h2>
            </div>
            <div class = "justify-end">
                <div class="flex items-center hover:text-gray-200" id="profilebut">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-12 w-12 hover:text-gray-200" fill="none"
                        viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M5.121 17.804A13.937 13.937 0 0112 16c2.5 0 4.847.655 6.879 1.804M15 10a3 3 0 11-6 0 3 3 0 016 0zm6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                    </svg>
                </div>
                <div class="flex flex-wrap">
                    @include('components.profileClick')
                </div>
            </div>


        </div>

        <!-- Contenido principal -->
        <div class="flex-1 flex flex-wrap ">
            <!-- Barra lateral de navegación (oculta en dispositivos pequeños) -->
            <div class="p-2 bg-red-100 w-full shadow md:w-60 flex flex-col md:flex hidden " id="sideNav">
                <nav>
                    <a class="block text-gray-500 py-2.5 px-4 my-4 rounded transition duration-200 hover:bg-gradient-to-r hover:from-cyan-500 hover:to-cyan-500 hover:text-white"
                        href="{{route('admin-access')}}">
                        <i class="fas fa-home mr-2"></i>Event Requests
                    </a>
                    <a class="block text-gray-500 py-2.5 px-4 my-4 rounded transition duration-200 hover:bg-gradient-to-r hover:from-cyan-500 hover:to-cyan-500 hover:text-white"
                        href="{{route('admin-report')}}">
                        <i class="fas fa-file-alt mr-2"></i>Join Requests
                    </a>
                    <a class="block text-gray-500 py-2.5 px-4 my-4 rounded transition duration-200 hover:bg-gradient-to-r hover:from-cyan-500 hover:to-cyan-500 hover:text-white"
                        href="{{route('admin-ban')}}">
                        <i class="fas fa-users mr-2"></i>Ban Requests
                    </a>
                    <a class="block text-gray-500 py-2.5 px-4 my-4 rounded transition duration-200 hover:bg-gradient-to-r hover:from-cyan-500 hover:to-cyan-500 hover:text-white"
                        href="#">
                        <i class="fas fa-store mr-2"></i>Comercios
                    </a>
                    <a class="block text-gray-500 py-2.5 px-4 my-4 rounded transition duration-200 hover:bg-gradient-to-r hover:from-cyan-500 hover:to-cyan-500 hover:text-white"
                        href="#">
                        <i class="fas fa-exchange-alt mr-2"></i>Transacciones
                    </a>
                </nav>

                <!-- Ítem de Cerrar Sesión -->
                <a class="block text-gray-500 py-2.5 px-4 my-2 rounded transition duration-200 hover:bg-gradient-to-r hover:from-cyan-500 hover:to-cyan-500 hover:text-white mt-auto"
                    href="#">
                </a>


            </div>

            <!-- Area -->
            <div class="flex-1 p-4 w-full md:w-1/2">
                @yield('content')
            </div>
        </div>
    </div>
</body>
<script type="module">
$(document).ready(function() {
    $('#profileNav').hide();

    $("#profilebut").on({
        mouseenter: function(event) {
            $('#profileNav').stop().fadeIn();
            $("#profileNav").css({
                left: event.clientX - 250 + 'px',
                top: event.clientY + 20 + 'px',
            });
            $("#profileNav").css("z-index", "999");


            $("#profileNav").on({
                mouseenter: function(event) {
                    $('#profileNav').stop().fadeIn();

                },
                mouseleave: function() {
                    setTimeout(function() {
                        $('#profileNav').stop().fadeOut();
                    }, 1000);
                }
            });


        },
        mouseleave: function() {
            // setTimeout(function() {
            //     $('#profileNav').hide();
            // }, 5000);
        },
        click: function() {
            if ($('#profileNav').is(':visible')) {
                $('#profileNav').stop().fadeOut();
            }
            if ($('#profileNav').is(':hidden')) {
                $('#profileNav').stop().fadeIn();
                $("#profileNav").css({
                    left: event.clientX - 250 + 'px',
                    top: event.clientY + 20 + 'px',
                });
                $("#profileNav").css("z-index", "999");
            }
        }
    });
});
</script>

</html>