@extends('layouts.guest')

@section('content')



<div class='bg-black w-screen'>
  <div class="parallax">
    <img src="https://media.discordapp.net/attachments/1076489187638915133/1135798681338126356/7.png?width=1770&height=1136" id="one">
    <img src="https://media.discordapp.net/attachments/1076489187638915133/1135798680482500628/6.png?width=1770&height=1136" id="two">
    <img src="https://media.discordapp.net/attachments/1076489187638915133/1135798679714922526/5.png?width=1770&height=1136" id="three">
    <img src="https://media.discordapp.net/attachments/1076489187638915133/1135798678918012978/4.png?width=1770&height=1136" id="four">
    <img src="https://media.discordapp.net/attachments/1076489187638915133/1135798678146273280/3.png?width=1770&height=1136" id="five">
    <div><img src="https://media.discordapp.net/attachments/1076489187638915133/1135808896389349456/remove.png?width=1396&height=714" id="remove"></div>
    <img src="https://media.discordapp.net/attachments/1076489187638915133/1135798677257060462/2.png?width=1770&height=1136" id="six">
    <img src="https://media.discordapp.net/attachments/1076489187638915133/1135798676304961616/1.png?width=1770&height=1136" id="seven">

    <a class="inline-flex text-white items-center px-6 py-3 font-medium bg-rose-500 rounded-lg hover:opacity-75" href="{{ route('login')}}">
      <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
        <path d="M9.70711 5.29289C9.31658 4.90237 8.68342 4.90237 8.29289 5.29289C7.90237 5.68342 7.90237 6.31658 8.29289 6.70711L13.5858 12L8.29289 17.2929C7.90237 17.6834 7.90237 18.3166 8.29289 18.7071C8.68342 19.0976 9.31658 19.0976 9.70711 18.7071L15.7071 12.7071C16.0976 12.3166 16.0976 11.6834 15.7071 11.2929L9.70711 5.29289Z" fill="#2D3648"/>
      </svg> 
        &nbsp;  Login now
    </a>

    
  </div>
  


  <aside class="relative overflow-hidden text-white rounded-lg sm:mx-16 mx-2 sm:py-16 ">
    <div class="relative z-10 max-w-screen-xl px-4  pb-20 pt-10 sm:py-24 mx-auto sm:px-6 lg:px-8">
      <div class="max-w-xl sm:mt-1 mt-80 space-y-8 text-center sm:text-right sm:ml-auto">
        <h2 class="text-4xl text-white  font-bold sm:text-5xl">
          Get started
          <div >
          <h1 id="typewriter" class="text-4xl font-bold">sadas</h1>
          </div>
          
        </h2>

        <a class="inline-flex text-white items-center px-6 py-3 font-medium bg-rose-500 rounded-lg hover:opacity-75" href="{{ route('register')}}">
          <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
          <path d="M9.70711 5.29289C9.31658 4.90237 8.68342 4.90237 8.29289 5.29289C7.90237 5.68342 7.90237 6.31658 8.29289 6.70711L13.5858 12L8.29289 17.2929C7.90237 17.6834 7.90237 18.3166 8.29289 18.7071C8.68342 19.0976 9.31658 19.0976 9.70711 18.7071L15.7071 12.7071C16.0976 12.3166 16.0976 11.6834 15.7071 11.2929L9.70711 5.29289Z" fill="#2D3648"/>
          </svg> 
            &nbsp;  Register Now
        </a>
      </div>
    </div>

    <div class="absolute inset-0 w-full sm:my-20 sm:pt-1 pt-12 h-full ">
      <img class="w-96" src="https://i.ibb.co/5BCcDYB/Remote2.png"  />
    </div>
  </aside>

  <div class="container relative flex flex-col justify-between h-full max-w-6xl px-10 mx-auto xl:px-0 mt-5">
    <h2 class="mb-1 text-3xl font-extrabold leading-tight text-white">Services</h2>
    <p class="mb-12 text-lg text-gray-500">Here is a few of the awesome Services we provide.</p>
    <div class="w-full">
        <div class="flex flex-col w-full mb-10 sm:flex-row">
            <div class="w-full mb-10 sm:mb-0 sm:w-1/2">
                <div class="relative h-full ml-0 mr-0 sm:mr-10">
                    <span class="absolute top-0 left-0 w-full h-full mt-1 ml-1 bg-indigo-500 rounded-lg"></span>
                    <div class="relative h-full p-5 bg-white border-2 border-indigo-500 rounded-lg">
                        <div class="flex items-center -mt-1">
                            <h3 class="my-2 ml-3 text-lg font-bold text-gray-800">About Website</h3>
                        </div>
                        <p class="mt-3 mb-1 text-xs font-medium text-indigo-500 uppercase">------------</p>
                        <p class="mb-2 text-gray-600">
Navigate the convergence of digital artistry and event organization with our website event expertise. Immerse yourself in flawlessly executed online experiences that redefine virtual engagement.</p>
                    </div>
                </div>
            </div>
            <div class="w-full sm:w-1/2">
                <div class="relative h-full ml-0 md:mr-10">
                    <span class="absolute top-0 left-0 w-full h-full mt-1 ml-1 bg-purple-500 rounded-lg"></span>
                    <div class="relative h-full p-5 bg-white border-2 border-purple-500 rounded-lg">
                        <div class="flex items-center -mt-1">
                            <h3 class="my-2 ml-3 text-lg font-bold text-gray-800">Web Aspadewt Development</h3>
                        </div>
                        <p class="mt-3 mb-1 text-xs font-medium text-purple-500 uppercase">------------</p>
                        <p class="mb-2 text-gray-600">Web Aspadewt Development empowers your online presence through expertly crafted websites that combine aesthetic finesse with cutting-edge functionality. Our services transform your digital aspirations into captivating web realities.</p>
                        <div class= "flex flex-row items-center">
                          <a href="https://github.com/ingfosbreak/AspadeWT.git" class="flex" target="_blank"><img src="https://media.discordapp.net/attachments/1133337576204406855/1143099947810562138/25231.png?width=640&height=640" class = "h-10 mt-5">
                          <p class="mb-2 text-gray-600 mt-7 ml-5 font-bold">GitHub Here</p>
                          </a>
                        </div>
                      </div>
                </div>
            </div>
        </div>
        <div class="flex flex-col w-full mb-5 sm:flex-row">
            <div class="w-full mb-10 sm:mb-0 sm:w-1/2">
                <div class="relative h-full ml-0 mr-0 sm:mr-10">
                    <span class="absolute top-0 left-0 w-full h-full mt-1 ml-1 bg-blue-400 rounded-lg"></span>
                    <div class="relative h-full p-5 bg-white border-2 border-blue-400 rounded-lg">
                        <div class="flex items-center -mt-1">
                        <div class="">
                      <img
                          src="https://media.discordapp.net/attachments/876789007856574565/1143108114565046322/20230821_155121.jpg?width=550&height=701"
                          class="h-16 w-16 object-cover rounded-full hover:object-scale-down"
                          alt="" />
                    </div>
                            <h3 class="my-2 ml-3 text-lg font-bold text-gray-800">Saran Wongkum</h3>
                        </div>
                        <p class="mb-1 text-xs font-medium text-blue-400 uppercase">------------</p>
                        <p class="mb-2 text-gray-600">- Let's Enjoy</p>
                    </div>
                </div>
            </div>
            <div class="w-full sm:w-1/2">
                <div class="relative h-full ml-0 mr-0 sm:mr-10">
                    <span class="absolute top-0 left-0 w-full h-full mt-1 ml-1 bg-yellow-400 rounded-lg"></span>
                    <div class="relative h-full p-5 bg-white border-2 border-blue-400 rounded-lg">
                        <div class="flex items-center -mt-1">
                        <div class="">
                      <img
                          src="https://cdn.discordapp.com/attachments/876789007856574565/1143108114296623115/IMG_4654.jpg"
                          class="h-16 w-16 object-cover rounded-full"
                          alt="" />
                    </div>
                            <h3 class="my-2 ml-3 text-lg font-bold text-gray-800">Panachai Kotchagason</h3>
                        </div>
                        <p class="mb-1 text-xs font-medium text-blue-400 uppercase">------------</p>
                        <p class="mb-2 text-gray-600">- I hope you guys enjoy this website. </p>
                    </div>
                </div>
            </div>
            <div class="w-full sm:w-1/2">
            <div class="relative h-full ml-0 mr-0 sm:mr-10">
                    <span class="absolute top-0 left-0 w-full h-full mt-1 ml-1 bg-green-500 rounded-lg"></span>
                    <div class="relative h-full p-5 bg-white border-2 border-blue-400 rounded-lg">
                        <div class="flex items-center -mt-1">
                        <div class="">
                      <img
                          src="https://media.discordapp.net/attachments/1060935609822236774/1143109698720116806/IMG_3865.jpg?width=526&height=701"
                          class="h-16 w-16 object-cover rounded-full"
                          alt="" />
                    </div>
                            <h3 class="my-2 ml-3 text-lg font-bold text-gray-800">Mana Porana</h3>
                        </div>
                        <p class="mb-1 text-xs font-medium text-blue-400 uppercase">------------</p>
                        <p class="mb-2 text-gray-600">A Project Audit is a formal review of a project, which is intended
                            to assess the extent up to which project management standards are being upheld.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- source:https://tailwind.besoeasy.com -->

  <footer class="text-center text-white mt-20">
          <hr />
          <p class="text-center py-5">Crafted with ❤️ by AspadeWT</span></p>
  </footer>


  </div>
</div>

<style>

.parallax{
    position: relative;
    width: 100%;
    height: 100vh;
    
    display: flex;
    justify-content: center;
    align-items: center;
    overflow: hidden;
    
}
.parallax img
{
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    object-fit: cover;
    pointer-events: none;
    /* filter: drop-shadow(0 0 0.5rem black); */

    will-change: transform;
   

}

.parallax a
{
    position: absolute;
    bottom: 20%;
    margin: 0 auto;
    width: fit-content;
    height: 70px;
    
    
    /* filter: drop-shadow(0 0 0.5rem black); */
    z-index: 999;
    will-change: transform;
   

}

.parallax div
{
  position: absolute;
  text-align: center;
  width: 100%;
  height: 100%;
  top: 0;
  left: 0;
  /* transform: translateY(20%); */
  /* transform: rotate(-2.5deg); */
  
  filter: drop-shadow(0 0 0.5rem black);
  display:flex;
  justify-content:center;
  align-items:center;

  will-change: transform;
}

#remove {
  
  position: relative;
  object-fit:contain;
  
  width: 70%;
  margin-bottom: 15%;

  /* margin-left: 30%;
  margin-top: 10%; */
  

}

#typewriter {
  min-height: 50px;
}

</style>

<script type="module" >
  $( document ).ready(function() {
    
    $(window).scroll(function(){
      var scrollPos = $(document).scrollTop();
      console.log(scrollPos);
    
      $('#one').css({"transform": "translate3d(0px, " + 1 * scrollPos + "px, 0px)"});
      $('#two').css({"transform": "translate3d(0px, " + 0.8 * scrollPos + "px, 0px)"});
      $('#three').css({"transform": "translate3d(0px, " + 0.6 * scrollPos + "px, 0px)"});
      $('#four').css({"transform": "translate3d(0px, " + 0.4 * scrollPos + "px, 0px)"});
      $('#five').css({"transform": "translate3d(0px, " + 0.2 * scrollPos + "px, 0px)"});
      $('#six').css({"transform": "translate3d(0px, " + 0.1 * scrollPos + "px, 0px)"});
      
      




    });
  });


</script>


<script>
const words = ["Event & Organize website.", "Create Your Wonderful Event!!", "Manage Your Own teams."];
let i = 0;
let j = 0;
let currentWord = "";
let isDeleting = false;

function type() {
  currentWord = words[i];
  if (isDeleting) {
    document.getElementById("typewriter").textContent = currentWord.substring(0, j-1);
    j--;
    if (j == 0) {
      isDeleting = false;
      i++;
      if (i == words.length) {
        i = 0;
      }
    }
  } else {
    document.getElementById("typewriter").textContent = currentWord.substring(0, j+1);
    j++;
    if (j == currentWord.length) {
      isDeleting = true;
    }
  }
  setTimeout(type, 150);
}

type();
</script>


@endsection