<div class="cover" id="profileNav">
    
<div class="w-64 max-w-sm p-4 bg-white border border-gray-200 rounded-lg shadow sm:p-6 dark:bg-gray-800 dark:border-gray-700">
        <h5 class="mb-3 text-base font-semibold text-gray-900 md:text-xl dark:text-white">
            Profile
        </h5>
        <div class="relative flex h-32 w-full justify-center rounded-xl bg-cover">
            <img src='https://horizon-tailwind-react-git-tailwind-components-horizon-ui.vercel.app/static/media/banner.ef572d78f29b0fee0a09.png'
                class="absolute flex h-32 w-full justify-center rounded-xl bg-cover">
            <div
                class="absolute bottom-5 flex h-[87px] w-[87px] items-center justify-center rounded-full border-[4px] border-white bg-pink-400 dark:!border-navy-700">
                @if (Auth::getUser()->image != null)
                <img class="h-full w-full rounded-full object-cover"
                src="{{ Vite::asset('storage/app/public/'. Auth::getUser()->image->image_path) }}"
                    alt="" />
                @endif
            </div>
        </div>
        
        <ul class="my-4 space-y-3">
            <li>
                <div class="flex flex-wrap items-center p-3 text-base font-bold text-gray-900 rounded-lg bg-gray-50 hover:bg-gray-100 group hover:shadow dark:bg-gray-600 dark:hover:bg-gray-500 dark:text-white">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person" viewBox="0 0 16 16">
                        <path d="M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6Zm2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0Zm4 8c0 1-1 1-1 1H3s-1 0-1-1 1-4 6-4 6 3 6 4Zm-1-.004c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664h10Z"/>
                    </svg>
                    <span class="flex-1 ml-3 w-full">{{Auth::user()->username}}</span>
                    
                </div>
            </li>
           
            
            <li>
                <a href="{{route('setting')}}" class="flex items-center p-3 text-base font-bold text-gray-900 rounded-lg bg-gray-50 hover:bg-gray-100 group hover:shadow dark:bg-gray-600 dark:hover:bg-gray-500 dark:text-white">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-gear-fill" viewBox="0 0 16 16">
                        <path d="M9.405 1.05c-.413-1.4-2.397-1.4-2.81 0l-.1.34a1.464 1.464 0 0 1-2.105.872l-.31-.17c-1.283-.698-2.686.705-1.987 1.987l.169.311c.446.82.023 1.841-.872 2.105l-.34.1c-1.4.413-1.4 2.397 0 2.81l.34.1a1.464 1.464 0 0 1 .872 2.105l-.17.31c-.698 1.283.705 2.686 1.987 1.987l.311-.169a1.464 1.464 0 0 1 2.105.872l.1.34c.413 1.4 2.397 1.4 2.81 0l.1-.34a1.464 1.464 0 0 1 2.105-.872l.31.17c1.283.698 2.686-.705 1.987-1.987l-.169-.311a1.464 1.464 0 0 1 .872-2.105l.34-.1c1.4-.413 1.4-2.397 0-2.81l-.34-.1a1.464 1.464 0 0 1-.872-2.105l.17-.31c.698-1.283-.705-2.686-1.987-1.987l-.311.169a1.464 1.464 0 0 1-2.105-.872l-.1-.34zM8 10.93a2.929 2.929 0 1 1 0-5.86 2.929 2.929 0 0 1 0 5.858z"/>
                    </svg>
                    <span class="flex-1 ml-3 whitespace-nowrap">Setting</span>
                </a>
            </li>
            <li>
                <form action="{{route('logout')}}" class="flex items-center p-3 text-base font-bold text-gray-900 rounded-lg bg-gray-50 hover:bg-gray-100 group hover:shadow dark:bg-gray-600 dark:hover:bg-gray-500 dark:text-white" method="POST">
                @csrf
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-door-closed" viewBox="0 0 16 16">
                        <path d="M3 2a1 1 0 0 1 1-1h8a1 1 0 0 1 1 1v13h1.5a.5.5 0 0 1 0 1h-13a.5.5 0 0 1 0-1H3V2zm1 13h8V2H4v13z"/>
                        <path d="M9 9a1 1 0 1 0 2 0 1 1 0 0 0-2 0z"/>
                    </svg>
                    
                    <button type="submit" class="w-content"><span class="flex-1 ml-3 whitespace-nowrap">Logout</span></button>
                    
                </form>
            </li>
        </ul>
        
    </div>

</div>






<style>

.cover{
    background:rgba(0,0,0,0);
    position:absolute;
    display:none;
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


