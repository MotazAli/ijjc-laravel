
<div class="p-5 sm:p-10 md:p-10  " >

    <div class=" flex flex-row justify-between pb-4 mb-9  border-b-4  colors-theme border-b-red-700 dark:border-b-gray-200 ">
        <div class="capitalize font-bold text-3xl">New Academy</div>
    </div>


    @if ($errors->any())
        <div class="pb-8">
            <div class="bg-red-500 text-white font-bold rounded-t px-4 py-2">
                Something went wrong...
            </div>
            <ul class="border border-t-0 border-red-400 rounded-b bg-red-100 px-4 py2 text-red-700">
                @foreach ($errors->all() as $error )
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form class=" pt-10 pb-6 border border-colors-theme colors-theme bg-gray-50 "
          enctype="multipart/form-data"
{{--          wire:submit="$emit('showLoading')"--}}
          action="{{route('dashboard.academies.store')}}"
          method="POST">
        @csrf
        <div class=" w-full  h-auto  flex flex-col items-center sm:flex-row md:flex-row lg:flex-row   p-3 sm:space-x-20 md:space-x-20 lg:space-x-20">

            <img class=" w-52 h-72 rounded-md shadow-sm " src='https://res.cloudinary.com/dfw7q7qe2/image/upload/v1665894292/ijjc/05f46fba-3528-40d1-b642-2e04238369ae_amptpm.jpg' alt="name" />
            <div class="flex flex-col flex-grow">
                <div class=' px-3 mb-6'>
                    <label for="name" class=' capitalize block tracking-wide text-md font-bold mb-2' >academy name</label>
                    <input id="name" name="name" value="{{old('name','')}}" class=' w-full sm:w-[70%] md:w-[70%] lg:w-[70%] input-theme capitalize' type='text'  required>
                </div>
                <div class=' px-3 mb-6'>
                    <label for="owner" class=' capitalize block tracking-wide  text-md font-bold mb-2'>owner name:</label>
                    <input id="owner" name="owner" value="{{ old('owner', '') }}" class=' w-full sm:w-[70%] md:w-[70%] lg:w-[70%] input-theme' type='text'  required>
                </div>
                <div class=' px-3 mb-6'>
                    <label for="phone" class=' capitalize block tracking-wide  text-md font-bold mb-2'>phone</label>
                    <input id="phone" name="phone" class=' w-full sm:w-[70%] md:w-[70%] lg:w-[70%] input-theme' type='text'  >
                </div>
                <div class=' px-3 mb-6'>
                    <label for="address" class=' capitalize block tracking-wide  text-md font-bold mb-2'>address</label>
                    <input id="address" name="address" value="{{old('address','')}}" class=' w-full sm:w-[70%] md:w-[70%] lg:w-[70%] input-theme' type='text'  >
                </div>

                <div  class=" w-full flex flex-row  justify-start " >
                    <div class=' px-3 mb-6'>
                        <label for="country" class='block capitalize tracking-wide  text-md font-bold mb-2'>Country</label>
                        <div class=" w-full ">
                            <select id="country" required wire:model="selected_country" name="country" class="  w-full  input-theme shadow-inner px-4 py-2 pr-8 rounded ">
                                <option value=''>choose country</option>
                                @foreach ( $countries_json as $country => $cities_of_country )
                                    <option value='{{ $country }}'>{{ $country }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>

                    @if (count($cities) > 0)
                        <div  class=' px-3 mb-6'>
                            <label for="city" class='block capitalize tracking-wide text-md font-bold mb-2'>City</label>
                            <div class=" w-full  ">
                                <select id="city" wire:model="selected_city" name="city" class="  w-full  input-theme shadow-inner px-4 py-2 pr-8 rounded">
                                    <option value=''>choose city</option>
                                    @foreach($cities as $city)
                                        <option value='{{ $city }}' >{{ $city }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                    @endif
                </div>

                <div class=' px-3 mb-6 '>
                    <!-- Toggle is Active Academy -->
                    <div class="w-full ">

                        <label for="is_active" class="flex justify-between cursor-pointer">
                            <!-- label -->
                            <div class="text-md font-bold">
                                Active academy
                            </div>
                            <!-- toggle -->
                            <div class=" ml-6 relative">
                                <!-- input -->
                                <input type="hidden" name="is_active" value="0" />
                                <input  type="checkbox"  id="is_active" name="is_active" value="1" {{old('is_active') == 1 ? 'checked': '' }}  class="sr-only"/>
                                <!-- line -->
                                <div class="check_background block bg-gray-600 w-14 h-8 rounded-full"></div>
                                <!-- dot -->
                                <div class="dot absolute left-1 top-1 bg-white w-6 h-6 rounded-full transition"></div>
                            </div>

                        </label>

                    </div>
                </div>
                <div class=' px-3 mb-6'>
                    <!-- Toggle Show academy -->
                    <div class=" w-full ">

                        <label for="is_shown" class="flex justify-between cursor-pointer">
                            <!-- label -->
                            <div class=" text-md font-bold">
                                Show academy
                            </div>
                            <!-- toggle -->
                            <div class=" ml-6 relative">
                                <!-- input -->
                                <input type="hidden" name="is_shown" value="0" />
                                <input type="checkbox"  id="is_shown" name="is_shown" value="1" {{old('is_shown') == 1 ? 'checked': '' }}  class="sr-only"/>
                                <!-- line -->
                                <div class="check_background block bg-gray-600 w-14 h-8 rounded-full"></div>
                                <!-- dot -->
                                <div class="dot absolute left-1 top-1 bg-white w-6 h-6 rounded-full transition"></div>
                            </div>

                        </label>

                    </div>
                </div>
            </div>
        </div>

        <div class="w-full flex  justify-center">
            <div class="w-96  ">

                <x-ui.button text="Save"/>
{{--                <livewire:ui.button text="Save" />--}}
            </div>
        </div>


    </form>


</div>

