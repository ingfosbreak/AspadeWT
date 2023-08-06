
@vite(['resources/css/app.css','resources/css/main.css','resources/js/app.js'])
<!-- Inspiration https://s3-ap-southeast-2.amazonaws.com/focusbooster.cdn/Landing+pages/kanban-and-focusbooster/kanban-board-notion.png -->

<div class="h-screen p-2">
  <div class="grid lg:grid-cols-7 md:grid-cols-4 sm:grid-cols-2 gap-5">
    <!-- To-do -->
    <div class="bg-white rounded px-2 py-2" >
      <!-- board category header -->
      <div class="flex flex-row justify-between items-center mb-2 mx-1">
        <div class="flex items-center">
          <h2 class="bg-red-100 text-sm w-max px-1 rounded mr-2 text-gray-700">To-do</h2>
          <p class="text-gray-400 text-sm">3</p>
        </div>
        <div class="flex items-center text-gray-300">
          <p class="mr-2 text-2xl">---</p>
          <p class="text-2xl">+</p>
        </div>
      </div>
      <!-- board card -->
      <div class="grid grid-rows-2 gap-2" id = "first" onClick="reply_click(this.id)">
        <div class="p-2 rounded shadow-sm border-gray-100 border-2">
          <h3 class="text-sm mb-3 text-gray-700">Social media</h3>
          <p class="bg-red-100 text-xs w-max p-1 rounded mr-2 text-gray-700">To-do</p>
          <div class="flex flex-row items-center mt-2">
            <div class="bg-gray-300 rounded-full w-4 h-4 mr-3"></div>
            <a href="#" class="text-xs text-gray-500">Sophie Worso</a>
          </div>
          <p class="text-xs text-gray-500 mt-2">2</p>
        </div>

        <div class="p-2 rounded shadow-sm border-gray-100 border-2">
          <h3 class="text-sm mb-3 text-gray-700">Review survey results</h3>
          <p class="bg-red-100 text-xs w-max p-1 rounded mr-2 text-gray-700">To-do</p>
          <div class="flex flex-row items-center mt-2">
            <div class="bg-gray-300 rounded-full w-4 h-4 mr-3"></div>
            <a href="#" class="text-xs text-gray-500">Sophie Worso</a>
          </div>
          <p class="text-xs text-gray-500 mt-2">1</p>
        </div>

        <div class="p-2 rounded shadow-sm border-gray-100 border-2">
          <h3 class="text-sm mb-3 text-gray-700">Research video marketing</h3>
          <p class="bg-red-100 text-xs w-max p-1 rounded mr-2 text-gray-700">To-do</p>
          <div class="flex flex-row items-center mt-2">
            <div class="bg-gray-300 rounded-full w-4 h-4 mr-3"></div>
            <a href="#" class="text-xs text-gray-500">Sophie Worso</a>
          </div>
          <p class="text-xs text-gray-500 mt-2">3</p>
        </div>
      </div>
      <div class="flex flex-row items-center text-gray-300 mt-2 px-1" id="done-add">
        <p class="rounded mr-2 text-2xl">+</p>
        <p class="pt-1 rounded text-sm">New</p>
      </div>
      <div class="not-show" id="done-text">
            <label for="message" class="block mb-2 text-sm font-medium text-gray-900">Add new task</label>
            <textarea id="message" rows="4" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 " placeholder="Write your thoughts here..."></textarea>
        </div>
    </div>

    <!-- WIP Kanban -->
    <div class="bg-white rounded px-2 py-2">
      <!-- board category header -->
      <div class="flex flex-row justify-between items-center mb-2 mx-1">
        <div class="flex items-center">
          <h2 class="bg-yellow-100 text-sm w-max px-1 rounded mr-2 text-gray-700">WIP</h2>
          <p class="text-gray-400 text-sm">2</p>
        </div>
        <div class="flex items-center text-gray-300">
          <p class="mr-2 text-2xl">---</p>
          <p class="text-2xl">+</p>
        </div>
      </div>
      <!-- board card -->
      <div class="grid grid-rows-2 gap-2" id ="second" >
        <div class="p-2 rounded shadow-sm border-gray-100 border-2" >
          <h3 class="text-sm mb-3 text-gray-700">Blog post live</h3>
          <p class="bg-yellow-100 text-xs w-max p-1 rounded mr-2 text-gray-700" id="s1" onClick="reply_click(this.id)">WIP</p>
          <div class="flex flex-row items-center mt-2">
            <div class="bg-gray-300 rounded-full w-4 h-4 mr-3"></div>
            <a href="#" class="text-xs text-gray-500">Sophie Worso</a>
          </div>
          <p class="text-xs text-gray-500 mt-2">Jun 21, 2019</p>
          <p class="text-xs text-gray-500 mt-2">2</p>
        </div>

        <div class="p-2 rounded shadow-sm border-gray-100 border-2" id="s2" onClick="reply_click(this.id)">
          <h3 class="text-sm mb-3 text-gray-700">Email campaign</h3>
          <p class="bg-yellow-100 text-xs w-max p-1 rounded mr-2 text-gray-700">WIP</p>
          <div class="flex flex-row items-center mt-2">
            <div class="bg-gray-300 rounded-full w-4 h-4 mr-3"></div>
            <a href="#" class="text-xs text-gray-500">Sophie Worso</a>
          </div>
          <p class="text-xs text-gray-500 mt-2">Jun 21, 2019 &#10141; Jun 21, 2019</p>
          <p class="text-xs text-gray-500 mt-2">1</p>
        </div>
      </div>
    </div>

    <!-- Complete Kanban -->
    <div class="bg-white rounded px-2 py-2">
      <!-- board category header -->
      <div class="flex flex-row justify-between items-center mb-2 mx-1">
        <div class="flex items-center">
          <h2 class="bg-green-100 text-sm w-max px-1 rounded mr-2 text-gray-700">Complete</h2>
          <p class="text-gray-400 text-sm">4</p>
        </div>
        <div class="flex items-center">
          <p class="text-gray-300 mr-2 text-2xl">---</p>
          <p class="text-gray-300 text-2xl">+</p>
        </div>
      </div>
      <!-- board card -->
      <div class="grid grid-rows-2 gap-2" id="third" onClick="reply_click(this.id)">
        <div class="p-2 rounded shadow-sm border-gray-100 border-2">
          <h3 class="text-sm mb-3 text-gray-700">Morning emails and to-do list</h3>
          <p class="bg-green-100 text-xs w-max p-1 rounded mr-2 text-gray-700">Complete</p>
          <div class="flex flex-row items-center mt-2">
            <div class="bg-gray-300 rounded-full w-4 h-4 mr-3"></div>
            <a href="#" class="text-xs text-gray-500">Sophie Worso</a>
          </div>
          <p class="text-xs text-gray-500 mt-2">Jun 21, 2019</p>
          <p class="text-xs text-gray-500 mt-2">1</p>
        </div>

        <div class="p-2 rounded shadow-sm border-gray-100 border-2">
          <h3 class="text-sm mb-3 text-gray-700">Blog post</h3>
          <p class="bg-green-100 text-xs w-max p-1 rounded mr-2 text-gray-700">Complete</p>
          <div class="flex flex-row items-center mt-2">
            <div class="bg-gray-300 rounded-full w-4 h-4 mr-3"></div>
            <a href="#" class="text-xs text-gray-500">Sophie Worso</a>
          </div>
          <p class="text-xs text-gray-500 mt-2">Jun 20, 2019</p>
          <p class="text-xs text-gray-500 mt-2">5</p>
        </div>

        <div class="p-2 rounded shadow-sm border-gray-100 border-2">
          <h3 class="text-sm mb-3 text-gray-700">Reconcile accounts</h3>
          <p class="bg-green-100 text-xs w-max p-1 rounded mr-2 text-gray-700">Complete</p>
          <div class="flex flex-row items-center mt-2">
            <div class="bg-gray-300 rounded-full w-4 h-4 mr-3"></div>
            <a href="#" class="text-xs text-gray-500">Sophie Worso</a>
          </div>
          <p class="text-xs text-gray-500 mt-2">Jun 19, 2019</p>
          <p class="text-xs text-gray-600 mt-2">4</p>
        </div>

        <div class="p-2 rounded shadow-sm border-gray-100 border-2">
          <h3 class="text-sm mb-3 text-gray-700">Website AB test</h3>
          <p class="bg-green-100 text-xs w-max p-1 rounded mr-2 text-gray-700">Complete</p>
          <div class="flex flex-row items-center mt-2">
            <div class="bg-gray-300 rounded-full w-4 h-4 mr-3"></div>
            <a href="#" class="text-xs text-gray-500">Sophie Worso</a>
          </div>
          <p class="text-xs text-gray-500 mt-2">Jun 18, 2019</p>
          <p class="text-xs text-gray-600 mt-2">3</p>
        </div>
      </div>
    </div>


  </div>
</div>


    <script type="module">

        $( document ).ready(function() {

            
            
            const drake = dragula([$('#first').get(0), $('#second').get(0),$('#third').get(0)], { revertOnSpill: true });
            

            $.ajax({
               type:'POST',
               url:'/getmsg',
               data:{ _token: '{{csrf_token()}}'},
               success:function(data) {
                  console.log(data.msg);
               }
            });

            drake.on('drop', function(el, target, source, sibling) {
                if (target.children.length > 6) {
                    drake.cancel()
                }
            });




            $('#done-add').bind('click', function(event) {
                if ($('#done-text').is(':hidden')) {
                    $('#done-text').stop().fadeIn();
                }
                else  {
                    $('#done-text').stop().fadeOut();
                }
                

            });

            
        });

        
    
    </script>
    



    
