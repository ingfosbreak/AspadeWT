<div class="cover" id="profileNav">
    <div
        class="relative flex flex-col items-center rounded-[20px] w-[300px] mx-auto p-4 bg-white bg-clip-border shadow-3xl shadow-shadow-500 dark:!bg-navy-800 dark:text-white dark:!shadow-none">
        <div class="relative flex h-32 w-full justify-center rounded-xl bg-cover">
            <img src='https://horizon-tailwind-react-git-tailwind-components-horizon-ui.vercel.app/static/media/banner.ef572d78f29b0fee0a09.png'
                class="absolute flex h-32 w-full justify-center rounded-xl bg-cover">
            <div
                class="absolute -bottom-12 flex h-[87px] w-[87px] items-center justify-center rounded-full border-[4px] border-white bg-pink-400 dark:!border-navy-700">
                <img class="h-full w-full rounded-full"
                    src='https://horizon-tailwind-react-git-tailwind-components-horizon-ui.vercel.app/static/media/avatar11.1060b63041fdffa5f8ef.png'
                    alt="" />
            </div>
        </div>
        <div class="mt-16 flex flex-col items-center gap-5">
            <h4 class="text-3xl font-bold text-navy-700 text-black">
                {{Auth::user()->username}} <br>
                <span class="text-blue-500">{{Auth::user()->role}}</span>
            </h4>
            <p class="text-2xl font-normal text-green-500">status : {{Auth::user()->status}}</p>
            <a href="{{route('setting')}}">
                <p class="text-2xl font-normal text-gray-600">Setting</p>
            
            <form action="{{route('logout')}}" class="" method="POST">
                @csrf
                <button type="submit" class="mt-2 mb-5 bg-red-700 rounded-lg w-40"><h4 class="text-xl text-white font-bold">Logout</h4></button>
                
            </form>
        </div>
        
    </div>
</div>






<style>

.cover{
    background:rgba(0,0,0,0);
    position:absolute;
    display:flex;
    flex-direction:column;
    z-index: -1;
}
.contents{
    width:300px;
    height:300px;
    background:#f1f1f1;
    border:2px solid #ccc;
    border-radius:30px;
    display:flex;
    flex-direction:column;
    align-items:center;
    justify-content: space-evenly;
   
    
}
.close{
    border:2px solid #ccc;
    border-radius:15px;
    padding:5px 15px;
    position:absolute;
    bottom:15px;
    text-align:center;
    left:30%;
    width:100px;
    box-shadow:inset 0px 0px 10px 5px #ccc;
}
</style>


