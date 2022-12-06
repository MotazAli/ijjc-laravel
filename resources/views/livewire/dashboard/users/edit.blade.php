

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
    
                <div  class=" w-full flex flex-row  justify-start " >
                    <div class=' px-3 mb-6'>
                        <label class='block uppercase tracking-wide  text-xs font-bold mb-2'>Country</label>
                        <div class=" w-full ">
                            <select required wire:model="selected_country" name="country" class="  w-full  input-theme shadow-inner px-4 py-2 pr-8 rounded ">
                                <option value=''>choose country</option>
                                @foreach ( $countries_json as $country => $cities_of_country )
                                    <option value='{{ $country }}'>{{ $country }}</option> 
                                @endforeach
                            </select>
                        </div>
                    </div>
                    
                    @if (count($cities) > 0)
                    <div  class=' px-3 mb-6'>
                        <label class='block uppercase tracking-wide text-xs font-bold mb-2'>City</label>
                        <div class=" w-full  ">
                            <select wire:model="selected_city" name="selected_city" class="  w-full  input-theme shadow-inner px-4 py-2 pr-8 rounded">
                                <option value=''>choose city</option>
                                @foreach($cities as $city)
                                    <option value='{{ $city }}' >{{ $city }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    @endif
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
                        <div class=" w-full ">
                            <input class="w-full input-theme shadow-inner px-4 py-2 pr-8 rounded" id="time" name="time" type="date" wire:model="user.birth_date"   form-control>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div x-show="currentTab === 'academies'" class=" p-4 bg-gray-50 rounded-lg dark:bg-gray-800" id="academies" role="tabpanel" aria-labelledby="academies-tab">
        <div class=" w-full h-screen sm:h-screen md:h-screen lg:h-screen  sm:flex-row md:flex-row lg:flex-row   p-3 sm:space-x-20 md:space-x-20 lg:space-x-20">
            <div class="flex flex-col flex-grow">
                <div  class=" w-full flex flex-row  justify-start md:space-x-20  lg:space-x-20 " >
                    <div class=' px-3 mb-6'>
                        <label class='block uppercase tracking-wide  text-xs font-bold mb-2'>Academy</label>
                        <div class=" w-full ">
                            <select required wire:model="selected_country" name="country" class="  w-full  input-theme shadow-inner px-4 py-2 pr-8 rounded ">
                                <option value=''>choose academy</option>
                                @foreach ( $countries_json as $country => $cities_of_country )
                                    <option value='{{ $country }}'>{{ $country }}</option> 
                                @endforeach
                            </select>
                        </div>
                    </div>
                    
                    <div  class=' px-3 mb-6'>
                        <label class='block uppercase tracking-wide text-xs font-bold mb-2'>Join date</label>
                        <div class=" w-full  ">
                            <input class="w-full input-theme shadow-inner px-4 py-2 pr-8 rounded" id="time" name="time" type="date" wire:model="user.birth_date"   form-control>
                        </div>
                    </div>
                    
                    <div class=" px-3 flex content-center items-center tracking-wide text-xs font-bold ">
                        <div class=" h-5">
                          <input id="is_current" name="is_current" aria-describedby="is_current" type="checkbox" class="w-4 h-4 border border-gray-300 rounded bg-gray-50 focus:ring-3 focus:ring-primary-300 dark:bg-gray-700 dark:border-gray-600 dark:focus:ring-primary-600 dark:ring-offset-gray-800" >
                        </div>
                        <div class="ml-3 ">
                          <label for="remember" >Current</label>
                        </div>
                    </div> 
                </div>
                <div class='px-3 mb-6  self-center '>
                    <button class=" w-32 p-2 border bg-green-500 hover:bg-green-700 rounded-lg text-white font-semibold " id="add_joind_academy" name="add_joind_academy" type="button"  >Add</button>
                </div>
                <div class=' px-3 mb-6'>
                    <table class="w-full text-sm text-left colors-theme">
                        <thead class="text-xs text-gray-700 uppercase colors-theme bg-gray-200  dark:bg-gray-700">
                            <tr> 
                                <th scope="col" class="py-3 px-6 uppercase">
                                    Academy
                                </th>
                                <th scope="col" class="py-3 px-6 uppercase">
                                    Join
                                </th>
                                <th scope="col" class="py-3 px-6 uppercase">
                                    Current
                                </th>
                                <th scope="col" class="py-3 px-6 uppercase"></th>
                            </tr>
                        </thead>
                        <tbody>
                
                
                        @forelse ( $joined_academies as $old_academy )
                            <tr wire:click="editJoinedAcademyClickHandler({{ $old_academy }})" class=" cursor-pointer border-b border-colors-theme colors-theme hover:bg-gray-100 dark:hover:bg-gray-600">
                                
                                <td class="py-4 px-6">
                                    @if ( $old_academy->academy)
                                        {{ $old_academy->academy }}
                                    @else  
                                        empty  
                                    @endif
                                </td>
                                <td class="py-4 px-6">
                                    @if ( $old_academy->join_data)
                                        {{ $old_academy->join_date }}
                                    @else  
                                        empty  
                                    @endif
                                </td>
                
                                <td class="py-4 px-6">
                                    @if ( $old_academy->is_current)
                                        {{ $old_academy->is_current }}
                                    @else  
                                        empty  
                                    @endif
                                </td>
                                <td class="py-4 px-6">
                                    delete
                                </td>
                            </tr>
                        @empty
                        <tr class="border-b border-colors-theme colors-theme">
                            <td class="py-4 px-6" colspan="4">
                                empty
                            </td>
                        </tr>
                        @endforelse
                    
                        </tbody>
                    </table>
                </div>
                {{-- <div class=' px-3 mb-6'>
                    <label class=' uppercase block tracking-wide  text-xs font-bold mb-2'>phone</label>
                    <input wire:model="user.phone" class=' w-full sm:w-[70%] md:w-[70%] lg:w-[70%] input-theme' type='text'  required>
                </div> --}}
    
                {{-- <div class=" w-full flex flex-row  justify-start " >
                    <div class=' px-3 mb-6'>
                        
                    </div>
                </div> --}}
            </div>
        </div>
    </div>

    <div x-show="currentTab === 'belts'" class=" p-4 bg-gray-50 rounded-lg dark:bg-gray-800" id="belts" role="tabpanel" aria-labelledby="belts-tab">
        <div class=" w-full h-screen sm:h-screen md:h-screen lg:h-screen  sm:flex-row md:flex-row lg:flex-row   p-3 sm:space-x-20 md:space-x-20 lg:space-x-20">
            <div class="flex flex-col flex-grow">
                <div  class=" w-full flex flex-row  justify-start md:space-x-20  lg:space-x-20 " >
                    <div class=' px-3 mb-6'>
                        <label class='block uppercase tracking-wide  text-xs font-bold mb-2'>Academy</label>
                        <div class=" w-full ">
                            <select required wire:model="selected_country" name="country" class="  w-full  input-theme shadow-inner px-4 py-2 pr-8 rounded ">
                                <option value=''>choose academy</option>
                                @foreach ( $countries_json as $country => $cities_of_country )
                                    <option value='{{ $country }}'>{{ $country }}</option> 
                                @endforeach
                            </select>
                        </div>
                    </div>
                    
                    <div class=' px-3 mb-6'>
                        <label class='block uppercase tracking-wide  text-xs font-bold mb-2'>Belt</label>
                        <div class=" w-full ">
                            <select required wire:model="selected_country" name="country" class="  w-full  input-theme shadow-inner px-4 py-2 pr-8 rounded ">
                                <option value=''>choose belt</option>
                                @foreach ( $countries_json as $country => $cities_of_country )
                                    <option value='{{ $country }}'>{{ $country }}</option> 
                                @endforeach
                            </select>
                        </div>
                    </div>

                    <div class=' px-3 mb-6'>
                        <label class='block uppercase tracking-wide  text-xs font-bold mb-2'>Dan</label>
                        <div class=" w-full ">
                            <select required wire:model="selected_country" name="country" class="  w-full  input-theme shadow-inner px-4 py-2 pr-8 rounded ">
                                <option value=''>choose Dan</option>
                                <option value='1'>1 Dan</option>
                                <option value='2'>2 Dan</option>
                                <option value='3'>3 Dan</option>
                                <option value='4'>4 Dan</option>
                                <option value='5'>5 Dan</option>
                                <option value='6'>6 Dan</option>
                                <option value='7'>7 Dan</option>
                                <option value='8'>8 Dan</option>
                                <option value='9'>9 Dan</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div  class=" w-full flex flex-row  justify-start md:space-x-20  lg:space-x-20 " >
                    
                    <div class=' px-3 mb-6'>
                        <label class='block uppercase tracking-wide  text-xs font-bold mb-2'>Stripe</label>
                        <div class=" w-full ">
                            <select required wire:model="selected_country" name="country" class="  w-full  input-theme shadow-inner px-4 py-2 pr-8 rounded ">
                                <option value=''>choose Stripe</option>
                                <option value='1'>1 Stripe</option>
                                <option value='2'>2 Stripe</option>
                                <option value='3'>3 Stripe</option>
                                <option value='4'>4 Stripe</option>
                            </select>
                        </div>
                    </div>
                    
                    <div  class=' px-3 mb-6'>
                        <label class='block uppercase tracking-wide text-xs font-bold mb-2'>Earn date</label>
                        <div class=" w-full  ">
                            <input class="w-full input-theme shadow-inner px-4 py-2 pr-8 rounded" id="time" name="time" type="date" wire:model="user.birth_date"   form-control>
                        </div>
                    </div>
                    
                    <div class=" px-3 flex content-center items-center tracking-wide text-xs font-bold ">
                        <div class=" h-5">
                          <input id="is_current" name="is_current" aria-describedby="is_current" type="checkbox" class="w-4 h-4 border border-gray-300 rounded bg-gray-50 focus:ring-3 focus:ring-primary-300 dark:bg-gray-700 dark:border-gray-600 dark:focus:ring-primary-600 dark:ring-offset-gray-800" >
                        </div>
                        <div class="ml-3 ">
                          <label for="remember" >Current</label>
                        </div>
                    </div> 
                </div>
                <div class='px-3 mb-6  self-center '>
                    <button class=" w-32 p-2 border bg-green-500 hover:bg-green-700 rounded-lg text-white font-semibold " id="add_joind_academy" name="add_joind_academy" type="button"  >Add</button>
                </div>
                <div class=' px-3 mb-6'>
                    <table class="w-full text-sm text-left colors-theme">
                        <thead class="text-xs text-gray-700 uppercase colors-theme bg-gray-200  dark:bg-gray-700">
                            <tr> 
                                <th scope="col" class="py-3 px-6 uppercase">
                                    Academy
                                </th>
                                <th scope="col" class="py-3 px-6 uppercase">
                                    Belt
                                </th>
                                <th scope="col" class="py-3 px-6 uppercase">
                                    Dan
                                </th>
                                <th scope="col" class="py-3 px-6 uppercase">
                                    Stripe
                                </th>
                                <th scope="col" class="py-3 px-6 uppercase">
                                    Earned
                                </th>
                                <th scope="col" class="py-3 px-6 uppercase">
                                    Current
                                </th>
                                <th scope="col" class="py-3 px-6 uppercase"></th>
                            </tr>
                        </thead>
                        <tbody>
                
                
                        @forelse ( $joined_academies as $old_academy )
                            <tr wire:click="editJoinedAcademyClickHandler({{ $old_academy }})" class=" cursor-pointer border-b border-colors-theme colors-theme hover:bg-gray-100 dark:hover:bg-gray-600">
                                
                                <td class="py-4 px-6">
                                    @if ( $old_academy->academy)
                                        {{ $old_academy->academy }}
                                    @else  
                                        empty  
                                    @endif
                                </td>
                                <td class="py-4 px-6">
                                    @if ( $old_academy->join_data)
                                        {{ $old_academy->join_date }}
                                    @else  
                                        empty  
                                    @endif
                                </td>
                
                                <td class="py-4 px-6">
                                    @if ( $old_academy->is_current)
                                        {{ $old_academy->is_current }}
                                    @else  
                                        empty  
                                    @endif
                                </td>
                                <td class="py-4 px-6">
                                    delete
                                </td>
                            </tr>
                        @empty
                            <tr class="border-b border-colors-theme colors-theme">
                                <td class="py-4 px-6" colspan="7">
                                    empty
                                </td>
                            </tr>
                        @endforelse
                    
                        </tbody>
                    </table>
                </div>
                {{-- <div class=' px-3 mb-6'>
                    <label class=' uppercase block tracking-wide  text-xs font-bold mb-2'>phone</label>
                    <input wire:model="user.phone" class=' w-full sm:w-[70%] md:w-[70%] lg:w-[70%] input-theme' type='text'  required>
                </div> --}}
    
                {{-- <div class=" w-full flex flex-row  justify-start " >
                    <div class=' px-3 mb-6'>
                        
                    </div>
                </div> --}}
            </div>
        </div>
    </div>

    <div x-show="currentTab === 'championships'" class=" p-4 bg-gray-50 rounded-lg dark:bg-gray-800" id="championships" role="tabpanel" aria-labelledby="championships-tab">
        <div class=" w-full h-screen sm:h-screen md:h-screen lg:h-screen  sm:flex-row md:flex-row lg:flex-row   p-3 sm:space-x-20 md:space-x-20 lg:space-x-20">
            <div class="flex flex-col flex-grow">
                <div  class=" w-full flex flex-row  justify-start md:space-x-20  lg:space-x-20 " >
                    <div class=' px-3 mb-6'>
                        <label class='block uppercase tracking-wide  text-xs font-bold mb-2'>Academy</label>
                        <div class=" w-full ">
                            <select required wire:model="selected_country" name="country" class="  w-full  input-theme shadow-inner px-4 py-2 pr-8 rounded ">
                                <option value=''>choose academy</option>
                                @foreach ( $countries_json as $country => $cities_of_country )
                                    <option value='{{ $country }}'>{{ $country }}</option> 
                                @endforeach
                            </select>
                        </div>
                    </div>
                    
                    <div  class=' px-3 mb-6'>
                        <label class='block uppercase tracking-wide text-xs font-bold mb-2'>Compatation date</label>
                        <div class=" w-full  ">
                            <input class="w-full input-theme shadow-inner px-4 py-2 pr-8 rounded" id="time" name="time" type="date" wire:model="user.birth_date"   form-control>
                        </div>
                    </div>
                </div>

                
                <div  class=" w-full  " >
                    <div class=' px-3 mb-6'>
                        <label class=' uppercase block tracking-wide text-xs font-bold mb-2' >Compatation Name</label>
                        <input  class=' w-full sm:w-[70%] md:w-[70%] lg:w-[70%] input-theme capitalize' type='text'  required>
                    </div>
                    
                    <div class=' px-3 mb-6'>
                        <label class=' uppercase block tracking-wide text-xs font-bold mb-2' >Description</label>
                        <textarea class=' w-full sm:w-[70%] md:w-[70%] lg:w-[70%] input-theme capitalize' type='text'  required></textarea>
                    </div>
                </div>
                <div class='px-3 mb-6  self-center '>
                    <button class=" w-32 p-2 border bg-green-500 hover:bg-green-700 rounded-lg text-white font-semibold " id="add_joind_academy" name="add_joind_academy" type="button"  >Add</button>
                </div>
                <div class=' px-3 mb-6'>
                    <table class="w-full text-sm text-left colors-theme">
                        <thead class="text-xs text-gray-700 uppercase colors-theme bg-gray-200  dark:bg-gray-700">
                            <tr> 
                                <th scope="col" class="py-3 px-6 uppercase">
                                    Compatation
                                </th>
                                <th scope="col" class="py-3 px-6 uppercase">
                                    Academy
                                </th>
                                <th scope="col" class="py-3 px-6 uppercase">
                                    Date
                                </th>
                                <th scope="col" class="py-3 px-6 uppercase">
                                    Description
                                </th>
                                <th scope="col" class="py-3 px-6 uppercase"></th>
                            </tr>
                        </thead>
                        <tbody>
                
                
                        @forelse ( $joined_academies as $old_academy )
                            <tr wire:click="editJoinedAcademyClickHandler({{ $old_academy }})" class=" cursor-pointer border-b border-colors-theme colors-theme hover:bg-gray-100 dark:hover:bg-gray-600">
                                
                                <td class="py-4 px-6">
                                    @if ( $old_academy->academy)
                                        {{ $old_academy->academy }}
                                    @else  
                                        empty  
                                    @endif
                                </td>
                                <td class="py-4 px-6">
                                    @if ( $old_academy->join_data)
                                        {{ $old_academy->join_date }}
                                    @else  
                                        empty  
                                    @endif
                                </td>
                
                                <td class="py-4 px-6">
                                    @if ( $old_academy->is_current)
                                        {{ $old_academy->is_current }}
                                    @else  
                                        empty  
                                    @endif
                                </td>
                                <td class="py-4 px-6">
                                    delete
                                </td>
                            </tr>
                        @empty
                        <tr class="border-b border-colors-theme colors-theme">
                            <td class="py-4 px-6" colspan="5">
                                empty
                            </td>
                        </tr>
                        @endforelse
                    
                        </tbody>
                    </table>
                </div>
                {{-- <div class=' px-3 mb-6'>
                    <label class=' uppercase block tracking-wide  text-xs font-bold mb-2'>phone</label>
                    <input wire:model="user.phone" class=' w-full sm:w-[70%] md:w-[70%] lg:w-[70%] input-theme' type='text'  required>
                </div> --}}
    
                {{-- <div class=" w-full flex flex-row  justify-start " >
                    <div class=' px-3 mb-6'>
                        
                    </div>
                </div> --}}
            </div>
        </div>
    </div>
    
    <div x-show="currentTab === 'memberships'" class=" p-4 bg-gray-50 rounded-lg dark:bg-gray-800" id="memberships" role="tabpanel" aria-labelledby="memberships-tab">
        <div class=" w-full h-screen sm:h-screen md:h-screen lg:h-screen  sm:flex-row md:flex-row lg:flex-row   p-3 sm:space-x-20 md:space-x-20 lg:space-x-20">
            <div class="flex flex-col flex-grow">
                <div  class=" w-full flex flex-row  justify-start md:space-x-20  lg:space-x-20 " >
                    <div class=' px-3 mb-6'>
                        <label class='block uppercase tracking-wide  text-xs font-bold mb-2'>Membership</label>
                        <div class=" w-full ">
                            <select required wire:model="selected_country" name="country" class="  w-full  input-theme shadow-inner px-4 py-2 pr-8 rounded ">
                                <option value=''>choose membership</option>
                                @foreach ( $countries_json as $country => $cities_of_country )
                                    <option value='{{ $country }}'>{{ $country }}</option> 
                                @endforeach
                            </select>
                        </div>
                    </div>
                    
                    <div  class=' px-3 mb-6'>
                        <label class='block uppercase tracking-wide text-xs font-bold mb-2'>Start date</label>
                        <div class=" w-full  ">
                            <input class="w-full input-theme shadow-inner px-4 py-2 pr-8 rounded" id="time" name="time" type="date" wire:model="user.birth_date"   form-control>
                        </div>
                    </div>
                    
                    <div class=" px-3 flex content-center items-center tracking-wide text-xs font-bold ">
                        <div class=" h-5">
                          <input id="is_current" name="is_current" aria-describedby="is_current" type="checkbox" class="w-4 h-4 border border-gray-300 rounded bg-gray-50 focus:ring-3 focus:ring-primary-300 dark:bg-gray-700 dark:border-gray-600 dark:focus:ring-primary-600 dark:ring-offset-gray-800" >
                        </div>
                        <div class="ml-3 ">
                          <label for="remember" >Current</label>
                        </div>
                    </div> 
                </div>
                <div class='px-3 mb-6  self-center '>
                    <button class=" w-32 p-2 border bg-green-500 hover:bg-green-700 rounded-lg text-white font-semibold " id="add_joind_academy" name="add_joind_academy" type="button"  >Add</button>
                </div>
                <div class=' px-3 mb-6'>
                    <table class="w-full text-sm text-left colors-theme">
                        <thead class="text-xs text-gray-700 uppercase colors-theme bg-gray-200  dark:bg-gray-700">
                            <tr> 
                                <th scope="col" class="py-3 px-6 uppercase">
                                    Membership
                                </th>
                                <th scope="col" class="py-3 px-6 uppercase">
                                    Start
                                </th>
                                <th scope="col" class="py-3 px-6 uppercase">
                                    Current
                                </th>
                                <th scope="col" class="py-3 px-6 uppercase"></th>
                            </tr>
                        </thead>
                        <tbody>
                
                
                        @forelse ( $joined_academies as $old_academy )
                            <tr wire:click="editJoinedAcademyClickHandler({{ $old_academy }})" class=" cursor-pointer border-b border-colors-theme colors-theme hover:bg-gray-100 dark:hover:bg-gray-600">
                                
                                <td class="py-4 px-6">
                                    @if ( $old_academy->academy)
                                        {{ $old_academy->academy }}
                                    @else  
                                        empty  
                                    @endif
                                </td>
                                <td class="py-4 px-6">
                                    @if ( $old_academy->join_data)
                                        {{ $old_academy->join_date }}
                                    @else  
                                        empty  
                                    @endif
                                </td>
                
                                <td class="py-4 px-6">
                                    @if ( $old_academy->is_current)
                                        {{ $old_academy->is_current }}
                                    @else  
                                        empty  
                                    @endif
                                </td>
                                <td class="py-4 px-6">
                                    delete
                                </td>
                            </tr>
                        @empty
                        <tr class="border-b border-colors-theme colors-theme">
                            <td class="py-4 px-6" colspan="4">
                                empty
                            </td>
                        </tr>
                        @endforelse
                    
                        </tbody>
                    </table>
                </div>
                {{-- <div class=' px-3 mb-6'>
                    <label class=' uppercase block tracking-wide  text-xs font-bold mb-2'>phone</label>
                    <input wire:model="user.phone" class=' w-full sm:w-[70%] md:w-[70%] lg:w-[70%] input-theme' type='text'  required>
                </div> --}}
    
                {{-- <div class=" w-full flex flex-row  justify-start " >
                    <div class=' px-3 mb-6'>
                        
                    </div>
                </div> --}}
            </div>
        </div>
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
