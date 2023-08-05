<ul class="menu-hover-fill flex flex-col items-start leading-none text-2xl uppercase space-y-4 bottom-0 left-0 right-0  p-8" style = "position: center">
        
        <li><a href="{{ route('event.main.information',['event'=> $event]) }}" >Info</a></li>
        <li><a href="{{ route('event.main.main',['event'=> $event]) }} data-text="archives">Advertise</a></li>
    </ul>