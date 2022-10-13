
<div  class=" w-full h-[100px] top-0 sticky bg-white dark:bg-gray-800  text-gray-900 dark:text-white border-b-gray-200 dark:border-b-gray-400  border-solid border-b-[1px] pl-5 flex justify-between  " >
    <img class=" w-24 h-24 self-center " 
         src="{{ asset('assets/images/ijjc_red_logo.png') }}" 
         alt="ijjc" />
     
    <div x-data="{showMenu : false}" class="flex " >
        <a x-on:click="showMenu = !showMenu" type="button" class=" p-2 self-center cursor-pointer " >
            <svg height="22px" version="1.1" viewBox="0 0 18 12" width="50px" xmlns="http://www.w3.org/2000/svg" xmlns:sketch="http://www.bohemiancoding.com/sketch/ns" xmlns:xlink="http://www.w3.org/1999/xlink">
                <title/><desc/><defs/>
                <g fill="none" fill-rule="evenodd" id="Page-1" stroke="none" stroke-width="1">
                    <g class=" text-black dark:text-gray-400 " fill="currentColor" id="Core" transform="translate(-87.000000, -342.000000)">
                        <g id="menu" transform="translate(87.000000, 342.000000)">
                            <path d="M0,12 L18,12 L18,10 L0,10 L0,12 L0,12 Z M0,7 L18,7 L18,5 L0,5 L0,7 L0,7 Z M0,0 L0,2 L18,2 L18,0 L0,0 L0,0 Z" id="Shape"/>
                        </g>
                    </g>
                </g>
            </svg>
        </a>

        <x-bars.menu/>

    </div>
    

</div>











 {{-- <nav class=" w-full h-[70px] fixed bg-white border-b-gray-200  border-solid border-b-[1px] px-5 pr-14 flex justify-between items-center " >
    <img class=" w-16 h-16 " 
         src="{{ asset('assets/images/ijjc_red_logo.png') }}" 
         alt="ijjc" />
         
    <ul class=" list-none m-0 p-0 flex gap-5 text-lg text-black font-semibold items-center ">
        <li> <a class="nav-menu_items" href="" >Home</a></li>
        <li> <a class="nav-menu_items" href="" >Academies</a></li>
        <li> <a class="nav-menu_items" href="" >Schedule</a></li>
        <li> <a class="nav-menu_items" href="" >About</a></li>
        <li> <a class="nav-menu_items" href="" >Login</a></li>
    </ul>
</nav> --}}