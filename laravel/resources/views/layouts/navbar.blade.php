<!-- follow me on twitter @asad_codes -->

<div class="flex flex-wrap">
    <section class="relative mx-auto">
        <!-- navbar -->
        <nav class="flex justify-between bg-gray-900 text-white w-screen">
            <div class="px-5 xl:px-12 py-6 flex w-full items-center">
                <a class="text-3xl font-bold font-heading" href="#">
                    <img class="h-16"
                        src="https://media.discordapp.net/attachments/1133336224237629504/1135067839271796806/image.png?width=1368&height=701"
                        alt="logo">
                </a>
                <!-- Nav Links -->
                <ul class="hidden md:flex px-4 mx-auto font-semibold font-heading space-x-12">
                    
                </ul>
                <div class="flex  rounded bg-white" x-data="{ search: '' }">
                    <input type="search"
                        class="w-full border-none bg-transparent px-4 py-1 text-gray-900 focus:outline-none"
                        placeholder="search" x-model="search">
                    <button class="m-2 rounded px-4 py-2 font-semibold text-gray-100 bg-gray-500 cursor-not-allowed"
                        :class="(search) ? 'bg-purple-500' : 'bg-gray-500 cursor-not-allowed'" :disabled="!search"
                        disabled="disabled">search</button>
                </div>
                <!-- Sign In / Register      -->
                <div class="flex items-center hover:text-gray-200" id="profilebut">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 hover:text-gray-200" fill="none"
                        viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M5.121 17.804A13.937 13.937 0 0112 16c2.5 0 4.847.655 6.879 1.804M15 10a3 3 0 11-6 0 3 3 0 016 0zm6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                    </svg>
                </div>


            </div>
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
    mouseenter: function (event) {
        $('#profileNav').show();
        $("#profileNav").css({
            left: event.clientX - 250 + 'px',
            top: event.clientY + 20 + 'px',
        });

        
        $("#profileNav").on({
            mouseenter: function (event) {
                $('#profileNav').stop().fadeIn();
            
            },
            mouseleave: function () {
                setTimeout(function() {
                    $('#profileNav').stop().fadeOut();
                }, 1000);
            }
        });


    },
    mouseleave: function () {
        // setTimeout(function() {
        //     $('#profileNav').hide();
        // }, 5000);
    }
    });
});

</script>