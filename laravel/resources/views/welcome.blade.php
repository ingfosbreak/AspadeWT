@vite(['resources/css/app.css', 'resources/js/app.js'])
<div class='bg-black'>
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
        <span class="hidden sm:block text-4xl">
         Event & Organize website
        </span>
      </h2>

      <a class="inline-flex text-white items-center px-6 py-3 font-medium bg-rose-500 rounded-lg hover:opacity-75" href="{{ route('login')}}">
      <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M9.70711 5.29289C9.31658 4.90237 8.68342 4.90237 8.29289 5.29289C7.90237 5.68342 7.90237 6.31658 8.29289 6.70711L13.5858 12L8.29289 17.2929C7.90237 17.6834 7.90237 18.3166 8.29289 18.7071C8.68342 19.0976 9.31658 19.0976 9.70711 18.7071L15.7071 12.7071C16.0976 12.3166 16.0976 11.6834 15.7071 11.2929L9.70711 5.29289Z" fill="#2D3648"/>
</svg> 
       &nbsp;  Login now
      </a>
    </div>
  </div>

  <div class="absolute inset-0 w-full sm:my-20 sm:pt-1 pt-12 h-full ">
    <img class="w-96" src="https://i.ibb.co/5BCcDYB/Remote2.png"  />
  </div>
</aside>











<footer class="text-center text-white ">
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