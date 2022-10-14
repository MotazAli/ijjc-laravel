
<div  class=" w-full h-[100px] top-0 sticky colors-theme border-b-themes-borderLight dark:border-b-themes-borderDark  border-solid border-b-[1px] pl-5 flex justify-between z-10  " >
    
    <div class=" w-auto flex justify-center self-center ">
        <img class=" w-24 h-24 self-center mr-2 " 
         src="{{ asset('assets/images/ijjc_red_logo.png') }}" 
         alt="ijjc" />

      <h1  class="  text-xl font-bold self-center" >International Jiu-Jitsu Center</h1>
     
    </div>
    
    
    
    <div 
    x-data="{showMenu : false}" 
    class="flex " >
        <a x-on:click="showMenu = !showMenu" type="button" class=" p-2 self-center cursor-pointer " >
            <svg 
              height="40px" version="1.1" viewBox="0 0 20 20" width="80px" xmlns="http://www.w3.org/2000/svg" xmlns:sketch="http://www.bohemiancoding.com/sketch/ns" xmlns:xlink="http://www.w3.org/1999/xlink">
                
                <g x-show="!showMenu"  
                x-transition
                 fill="none" fill-rule="evenodd" id="Page-1" stroke="none" stroke-width="1">
                    <g  fill="currentColor" id="Core" transform="translate(-87.000000, -342.000000)">
                        <g id="menu" transform="translate(87.000000, 342.000000)">
                            <path d="M0,12 L18,12 L18,10 L0,10 L0,12 L0,12 Z M0,7 L18,7 L18,5 L0,5 L0,7 L0,7 Z M0,0 L0,2 L18,2 L18,0 L0,0 L0,0 Z" id="Shape"/>
                        </g>
                    </g>
                </g>


                <path 
                x-show="showMenu"  
            x-transition
             fill="currentColor"  clip-rule="evenodd" d="M4.29289 4.29289C4.68342 3.90237 5.31658 3.90237 5.70711 4.29289L10 8.58579L14.2929 4.29289C14.6834 3.90237 15.3166 3.90237 15.7071 4.29289C16.0976 4.68342 16.0976 5.31658 15.7071 5.70711L11.4142 10L15.7071 14.2929C16.0976 14.6834 16.0976 15.3166 15.7071 15.7071C15.3166 16.0976 14.6834 16.0976 14.2929 15.7071L10 11.4142L5.70711 15.7071C5.31658 16.0976 4.68342 16.0976 4.29289 15.7071C3.90237 15.3166 3.90237 14.6834 4.29289 14.2929L8.58579 10L4.29289 5.70711C3.90237 5.31658 3.90237 4.68342 4.29289 4.29289Z"  fill-rule="evenodd"/>

            </svg>

            
            {{-- <svg x-show="showMenu"  
            x-transition:enter="transition ease-out duration-100" 
            x-transition:enter-start="opacity-0 transform scale-90" 
            x-transition:enter-end="opacity-100 transform scale-100" 
            x-transition:leave="transition ease-in duration-100" 
            x-transition:leave-start="opacity-100 transform scale-100" 
            x-transition:leave-end="opacity-0 transform scale-90"
              class=" text-black dark:text-gray-400 " fill="currentColor" height="35" viewBox="0 0 20 20" width="80px" xmlns="http://www.w3.org/2000/svg">
                <path clip-rule="evenodd" d="M4.29289 4.29289C4.68342 3.90237 5.31658 3.90237 5.70711 4.29289L10 8.58579L14.2929 4.29289C14.6834 3.90237 15.3166 3.90237 15.7071 4.29289C16.0976 4.68342 16.0976 5.31658 15.7071 5.70711L11.4142 10L15.7071 14.2929C16.0976 14.6834 16.0976 15.3166 15.7071 15.7071C15.3166 16.0976 14.6834 16.0976 14.2929 15.7071L10 11.4142L5.70711 15.7071C5.31658 16.0976 4.68342 16.0976 4.29289 15.7071C3.90237 15.3166 3.90237 14.6834 4.29289 14.2929L8.58579 10L4.29289 5.70711C3.90237 5.31658 3.90237 4.68342 4.29289 4.29289Z"  fill-rule="evenodd"/>
            </svg> --}}
        </a>

        <x-bars.menu/>
        {{-- <x-bars.menuz/> --}}
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