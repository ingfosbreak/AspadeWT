<!-- follow me on twitter @asad_codes -->

<div class="flex flex-wrap">
    <section class="relative mx-auto">
        <!-- navbar -->
        <nav class="flex justify-between bg-gray-200 text-black w-screen px-5 xl:px-12 items-center">

            <a class="text-3xl font-bold font-heading" href="{{route('user.main')}}">
                <img class="h-16"
                    src="https://media.discordapp.net/attachments/1135564910131151019/1138487250234114109/remove.png?width=1396&height=714"
                    alt="logo">
            </a>
            <!-- navigation -->
            <nav class="nav font-semibold text-lg">
                <ul class="flex items-start">
                    <li
                        class="p-4 border-b-2 border-slate-500 border-opacity-0 hover:border-opacity-100 hover:text-slate-800 duration-200 cursor-pointer active">
                        <a href="{{ route('user.formRequestEvent')}}">Request</a>
                    </li>
                    <li
                        class="p-4 border-b-2 border-slate-500 border-opacity-0 hover:border-opacity-100 hover:text-slate-800 duration-200 cursor-pointer">
                        <a href="{{ route('user.myEventHistory')}}">My history</a>
                    </li>
                </ul>
            </nav>
    
            <!-- Sign In / Register      -->
            <div class="flex items-center hover:text-gray-200" id="profilebut">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-12 w-12 hover:text-gray-200" fill="none"
                    viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M5.121 17.804A13.937 13.937 0 0112 16c2.5 0 4.847.655 6.879 1.804M15 10a3 3 0 11-6 0 3 3 0 016 0zm6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                </svg>
            </div>


        </nav>
    </section>
</div>

<div class="flex flex-wrap">
    @include('components.profileClick')
</div>

<script type="module">
$(document).ready(function() {
    $('#profileNav').hide();

    $("#profilebut").on({
        mouseenter: function(event) {
            $('#profileNav').stop().fadeIn();
            $("#profileNav").css({
                left: event.clientX - 220 + 'px',
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
                    left: event.clientX - 220 + 'px',
                    top: event.clientY + 20 + 'px',
                });
                $("#profileNav").css("z-index", "999");
            }
        }
    });
});
</script>