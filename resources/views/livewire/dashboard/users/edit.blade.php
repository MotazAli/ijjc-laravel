
<div x-data="{currentTab: 'profile'}" class="p-5 sm:p-10 md:p-10   " >

    <div class="mb-9 pb-4 capitalize font-bold text-3xl border-b-4  colors-theme border-b-red-700 dark:border-b-gray-200 ">
        {{ $user->name }}
    </div>



    
<div  class="mb-4 border-b border-gray-200 dark:border-gray-700">
    <ul class="flex flex-wrap -mb-px text-sm font-medium text-center" id="myTab" data-tabs-toggle="#myTabContent" role="tablist">
        <li class="mr-2" role="presentation">
            <button x-on:click="currentTab= 'profile'" class="inline-block p-4 rounded-t-lg border-b-2" :class="{ 'active-tab': currentTab === 'profile' , 'inactive-tab': currentTab !== 'profile' }" id="profile-tab" data-tabs-target="#profile" type="button" role="tab" aria-controls="profile" aria-selected="true">Profile</button>
        </li>
        <li class="mr-2" role="presentation">
            <button x-on:click="currentTab= 'academies'" class="inline-block p-4 rounded-t-lg border-b-2 " :class="{ 'active-tab': currentTab === 'academies' , 'inactive-tab': currentTab !== 'academies' }" id="academies-tab" data-tabs-target="#academies" type="button" role="tab" aria-controls="academies" aria-selected="false">Academies</button>
        </li>
        <li class="mr-2" role="presentation">
            <button x-on:click="currentTab= 'belts'" class="inline-block p-4 rounded-t-lg border-b-2 " :class="{ 'active-tab': currentTab === 'belts' , 'inactive-tab': currentTab !== 'belts' }" id="betls-tab" data-tabs-target="#belts" type="button" role="tab" aria-controls="betls" aria-selected="false">Belts</button>
        </li>
        <li class="mr-2" role="presentation">
            <button x-on:click="currentTab= 'championships'" class="inline-block p-4 rounded-t-lg border-b-2 " :class="{ 'active-tab': currentTab === 'championships' , 'inactive-tab': currentTab !== 'championships' }" id="championships-tab" data-tabs-target="#championships" type="button" role="tab" aria-controls="championships" aria-selected="false">Championships</button>
        </li>
        <li class="mr-2" role="presentation">
            <button x-on:click="currentTab= 'memberships'" class="inline-block p-4 rounded-t-lg border-b-2 " :class="{ 'active-tab': currentTab === 'memberships' , 'inactive-tab': currentTab !== 'memberships' }" id="memberships-tab" data-tabs-target="#memberships" type="button" role="tab" aria-controls="memberships" aria-selected="false">Memberships</button>
        </li>
        <li role="presentation">
            <button x-on:click="currentTab= 'settings'" class="inline-block p-4 rounded-t-lg border-b-2 " :class="{ 'active-tab': currentTab === 'settings' , 'inactive-tab': currentTab !== 'settings' }" id="settings-tab" data-tabs-target="#settings" type="button" role="tab" aria-controls="settings" aria-selected="false">Settings</button>
        </li>
    </ul>
</div>
<div id="myTabContent">
    <div x-show="currentTab === 'profile'" class=" border border-colors-theme colors-theme bg-gray-50 " id="profile" role="tabpanel" aria-labelledby="profile-tab">
        <div class=" w-full h-[800px] sm:h-screen md:h-screen lg:h-screen flex flex-col items-center sm:flex-row md:flex-row lg:flex-row   p-3 sm:space-x-20 md:space-x-20 lg:space-x-20">
            
            <img class=" w-52 h-72 rounded-md shadow-sm " src='https://res.cloudinary.com/dfw7q7qe2/image/upload/v1665894292/ijjc/05f46fba-3528-40d1-b642-2e04238369ae_amptpm.jpg' alt="name" />
            <div class="flex flex-col flex-grow">
                <div class=' px-3 mb-6'>
                    <label class=' uppercase block tracking-wide text-xs font-bold mb-2' >name</label>
                    <input wire:model="user.name" class=' w-full sm:w-[70%] md:w-[70%] lg:w-[70%] input-theme capitalize' type='text'  required>
                </div>
                <div class=' px-3 mb-6'>
                    <label class=' uppercase block tracking-wide  text-xs font-bold mb-2'>email</label>
                    <input wire:model="user.email" class=' w-full sm:w-[70%] md:w-[70%] lg:w-[70%] input-theme' type='email'  required>
                </div>
    
                <div class=" w-full flex flex-row  justify-start " >
                    <div class=' px-3 mb-6'>
                        <label class='block uppercase tracking-wide  text-xs font-bold mb-2'>Country</label>
                        <div class=" w-full ">
                            <select class="  w-full  input-theme shadow-inner px-4 py-2 pr-8 rounded ">
                                <option>choose ...</option>
                                <option>male</option>
                                <option>female</option>
                            </select>
                        </div>
                    </div>
                    <div class=' px-3 mb-6'>
                        <label class='block uppercase tracking-wide text-xs font-bold mb-2'>City</label>
                        <div class=" w-full  ">
                            <select class="  w-full  input-theme shadow-inner px-4 py-2 pr-8 rounded">
                                <option>choose ...</option>
                                <option>white</option>
                                <option>blue</option>
                                <option>purple</option>
                                <option>brown</option>
                                <option>black</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class=' px-3 mb-6'>
                    <label class=' uppercase block tracking-wide  text-xs font-bold mb-2'>phone</label>
                    <input wire:model="user.phone" class=' w-full sm:w-[70%] md:w-[70%] lg:w-[70%] input-theme' type='text'  required>
                </div>
    
                <div class=" w-full flex flex-row  justify-start " >
                    <div class=' px-3 mb-6'>
                        <label class='block uppercase tracking-wide  text-xs font-bold mb-2'>gender</label>
                        <div class=" w-full ">
                            <select class="  w-full  input-theme shadow-inner px-4 py-2 pr-8 rounded ">
                                <option>choose ...</option>
                                <option>male</option>
                                <option>female</option>
                            </select>
                        </div>
                    </div>
                    <div class=' px-3 mb-6'>
                        <label class='block uppercase tracking-wide text-xs font-bold mb-2'>bith date</label>
                        <div class=" w-full  ">
                            <select class="  w-full  input-theme shadow-inner px-4 py-2 pr-8 rounded">
                                <option>choose ...</option>
                                <option>white</option>
                                <option>blue</option>
                                <option>purple</option>
                                <option>brown</option>
                                <option>black</option>
                            </select>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div x-show="currentTab === 'academies'" class=" p-4 bg-gray-50 rounded-lg dark:bg-gray-800" id="dashboard" role="tabpanel" aria-labelledby="dashboard-tab">
        <p class="text-sm text-gray-500 dark:text-gray-400">This is some placeholder content the <strong class="font-medium text-gray-800 dark:text-white">Dashboard tab's associated content</strong>. Clicking another tab will toggle the visibility of this one for the next. The tab JavaScript swaps classes to control the content visibility and styling.</p>
    </div>
    <div x-show="currentTab === 'belts'" class=" p-4 bg-gray-50 rounded-lg dark:bg-gray-800" id="settings" role="tabpanel" aria-labelledby="settings-tab">
        <p class="text-sm text-gray-500 dark:text-gray-400">This is some placeholder content the <strong class="font-medium text-gray-800 dark:text-white">Settings tab's associated content</strong>. Clicking another tab will toggle the visibility of this one for the next. The tab JavaScript swaps classes to control the content visibility and styling.</p>
    </div>
    <div x-show="currentTab === 'championships'" class=" p-4 bg-gray-50 rounded-lg dark:bg-gray-800" id="contacts" role="tabpanel" aria-labelledby="contacts-tab">
        <p class="text-sm text-gray-500 dark:text-gray-400">This is some placeholder content the <strong class="font-medium text-gray-800 dark:text-white">Contacts tab's associated content</strong>. Clicking another tab will toggle the visibility of this one for the next. The tab JavaScript swaps classes to control the content visibility and styling.</p>
    </div>
</div>



    

    {{-- <form class=" flex flex-col  bg-gray-50 p-5 " >
        
        <div class="flex  ">
            
            <img class=" w-14 h-48 sm:h-72   md:h-72 m-10  " src='https://res.cloudinary.com/dfw7q7qe2/image/upload/v1665894292/ijjc/05f46fba-3528-40d1-b642-2e04238369ae_amptpm.jpg' alt="name" />
            
            <div class=" ">
                
                <div class=' px-3 mb-6'>
                    <label class=' uppercase block tracking-wide text-gray-700 text-xs font-bold mb-2' >name</label>
                    <input class='appearance-none  w-[50%] bg-white text-gray-700 border border-gray-400 shadow-inner rounded-md py-3 px-4 leading-tight focus:outline-none  focus:border-gray-500' type='text'  required>
                </div>
                <div class=' px-3 mb-6'>
                    <label class=' uppercase block tracking-wide text-gray-700 text-xs font-bold mb-2'>email</label>
                    <input class='appearance-none w-[50%] bg-white text-gray-700 border border-gray-400 shadow-inner rounded-md py-3 px-4 leading-tight focus:outline-none  focus:border-gray-500' type='email'  required>
                </div>
                

                <div class='flex flex-wrap -mx-3 mb-6'>
                    <div class='w-full md:w-full px-3 mb-6'>
                        <label class='block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2'>pick your country</label>
                        <div class="flex-shrink w-full inline-block relative">
                            <select class="block appearance-none text-gray-600 w-full bg-white border border-gray-400 shadow-inner px-4 py-2 pr-8 rounded">
                                <option>choose ...</option>
                                <option>USA</option>
                                <option>France</option>
                                <option>Spain</option>
                                <option>UK</option>
                            </select>
                            <div class="pointer-events-none absolute top-0 mt-3  right-0 flex items-center px-2 text-gray-600">
                                <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"/></svg>
                            </div>
                        </div>
                    </div>        
                    
                    <div class='w-full md:w-full px-3 mb-6 '>
                        <label class='block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2'>password</label>
                        <button class="appearance-none bg-gray-200 text-gray-900 px-2 py-1 shadow-sm border border-gray-400 rounded-md ">change your password</button>
                    </div>
                    <div class='w-full md:w-full px-3 mb-6'>
                        <label class='block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2'>pick your country</label>
                        <div class="flex-shrink w-full inline-block relative">
                            <select class="block appearance-none text-gray-600 w-full bg-white border border-gray-400 shadow-inner px-4 py-2 pr-8 rounded">
                                <option>choose ...</option>
                                <option>USA</option>
                                <option>France</option>
                                <option>Spain</option>
                                <option>UK</option>
                            </select>
                            <div class="pointer-events-none absolute top-0 mt-3  right-0 flex items-center px-2 text-gray-600">
                                <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"/></svg>
                            </div>
                        </div>
                    </div>
                    <div class='w-full md:w-full px-3 mb-6'>
                        <label class='block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2'>fav language</label>
                        <div class="flex-shrink w-full inline-block relative">
                            <select class="block appearance-none text-gray-600 w-full bg-white border border-gray-400 shadow-inner px-4 py-2 pr-8 rounded">
                                <option>choose ...</option>
                                <option>English</option>
                                <option>France</option>
                                <option>Spanish</option>
                            </select>
                            <div class="pointer-events-none absolute top-0 mt-3  right-0 flex items-center px-2 text-gray-600">
                                <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"/></svg>
                            </div>
                        </div>
                    </div>
                    
                </div>
                
            </div>
        </div>
        
       

        <div class="  p-2 font-mono ">
            <div class="flex justify-end">
                <button class="appearance-none bg-gray-200 text-gray-900 px-2 py-1 shadow-sm border border-gray-400 rounded-md mr-3" type="submit">save changes</button>
            </div>
        </div>

    </form> --}}

</div>
