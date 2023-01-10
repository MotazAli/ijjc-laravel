
<div class="p-5 sm:p-10 md:p-10  " >

    <div class=" flex flex-row justify-between pb-4 mb-9  border-b-4  colors-theme border-b-red-700 dark:border-b-gray-200 ">
        <div class="capitalize font-bold text-3xl">Academies</div>
        <div>
            <a href="{{route('dashboard.academies.create')}}" class="cursor-pointer p-2 border bg-green-500 hover:bg-green-700 rounded-lg text-white font-semibold "> New Academy </a>
        </div>

    </div>




    <div class="overflow-x-auto  shadow-md sm:rounded-lg">
        <div x-data="{dropdownAction:false}" class="flex justify-between items-center p-4  border-colors-theme colors-theme ">
            <div>
                <button x-on:click="dropdownAction = !dropdownAction" id="dropdownActionButton" data-dropdown-toggle="dropdownAction" class="inline-flex items-center text-gray-500 bg-white border border-gray-300 focus:outline-none hover:bg-gray-100 focus:ring-4 focus:ring-gray-200 font-medium rounded-lg text-sm px-3 py-1.5 dark:bg-gray-600 dark:text-gray-100 dark:border-gray-600 dark:hover:bg-gray-700 dark:hover:border-gray-600 dark:focus:ring-gray-700" type="button">
                    <span class="sr-only">Action button</span>
                    Action
                    <svg class="ml-2 w-3 h-3" aria-hidden="true" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>
                </button>
                <!-- Dropdown menu -->
                <div x-show="dropdownAction" id="dropdownAction" class=" relative z-10 w-44 bg-white rounded divide-y divide-gray-100 shadow dark:bg-gray-700 dark:divide-gray-600" data-popper-reference-hidden="" data-popper-escaped="" data-popper-placement="bottom" style="position: absolute; inset: 0px auto auto 0px; margin: 0px; transform: translate3d(0px, 930.994px, 0px);">
                    <ul class="py-1 text-sm  text-gray-700 dark:text-gray-200" aria-labelledby="dropdownActionButton">
                        <li>
                            <a href="#" class="block py-2 px-4 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Reward</a>
                        </li>
                        <li>
                            <a href="#" class="block py-2 px-4 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Promote</a>
                        </li>
                        <li>
                            <a href="#" class="block py-2 px-4 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Activate account</a>
                        </li>
                    </ul>
                    <div class="py-1">
                        <a href="#" class="block py-2 px-4 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">Delete User</a>
                    </div>
                </div>
            </div>
            <label for="table-search" class="sr-only">Search</label>
            <div class="relative">
                <div class="flex absolute inset-y-0 left-0 items-center pl-3 pointer-events-none">
                    <svg class="w-5 h-5 text-gray-500 dark:text-gray-100" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z" clip-rule="evenodd"></path></svg>
                </div>
                <input type="text" id="table-search-users" class="block p-2 pl-10 w-80 text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-600 dark:border-gray-600 dark:placeholder-gray-100 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Search for academy">
            </div>
        </div>
        <table class="w-full text-sm text-left colors-theme">
            <thead class="text-xs text-gray-700 uppercase colors-theme bg-gray-200  dark:bg-gray-700">
            <tr>
                {{-- <th scope="col" class="p-4">
                    <div class="flex items-center">
                        <input id="checkbox-all-search" type="checkbox" class="w-4 h-4 text-blue-600 bg-gray-100 rounded border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                        <label for="checkbox-all-search" class="sr-only">checkbox</label>
                    </div>
                </th> --}}
                <th scope="col" class="py-3 px-6 capitalize">
                    name
                </th>
                <th scope="col" class="py-3 px-6 capitalize">
                    owner
                </th>
                <th scope="col" class="py-3 px-6 capitalize">
                    address
                </th>
                <th scope="col" class="py-3 px-6 capitalize">
                    phone
                </th>
                {{-- <th scope="col" class="py-3 px-6">
                    Action
                </th> --}}
            </tr>
            </thead>
            <tbody>


            @forelse ( $academies as $academy )
                <tr wire:click="academyClickHandler({{ $academy }})" class=" cursor-pointer border-b border-colors-theme colors-theme hover:bg-gray-100 dark:hover:bg-gray-600">
                    {{-- <td class="p-4 w-4">
                        <div class="flex items-center">
                            <input id="checkbox-table-search-1" type="checkbox" class="w-4 h-4 text-blue-600 bg-gray-100 rounded border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                            <label for="checkbox-table-search-1" class="sr-only">checkbox</label>
                        </div>
                    </td> --}}
                    <th scope="row" class="flex items-center py-4 px-6 text-gray-900 whitespace-nowrap dark:text-white">

                        @if ($academy->image)
                            <img class="w-10 h-10 rounded-full" src="/docs/images/people/profile-picture-1.jpg" alt="Jese image">

                        @else
                            <svg class=" w-10 h-10 menu-item_icon rounded-full" fill="currentColor" height="32" id="svg8" version="1.1" viewBox="0 0 8.4666665 8.4666669" width="32" xmlns="http://www.w3.org/2000/svg" xmlns:cc="http://creativecommons.org/ns#" xmlns:dc="http://purl.org/dc/elements/1.1/" xmlns:inkscape="http://www.inkscape.org/namespaces/inkscape" xmlns:rdf="http://www.w3.org/1999/02/22-rdf-syntax-ns#" xmlns:sodipodi="http://sodipodi.sourceforge.net/DTD/sodipodi-0.dtd" xmlns:svg="http://www.w3.org/2000/svg"><defs id="defs2"/><g id="layer1" transform="translate(0,-288.53332)"><path d="M 10.462891 16.070312 C 4.9244824 18.277775 0.99608795 23.682844 0.99609375 30 A 1.0001 1.0001 0 0 0 2 31.003906 L 30 31.003906 A 1.0001 1.0001 0 0 0 30.996094 30 C 30.996099 23.68349 27.06876 18.278206 21.53125 16.070312 C 19.99994 17.27111 18.07881 17.996094 15.996094 17.996094 C 13.912967 17.996094 11.992832 17.271538 10.462891 16.070312 z " id="path935" style="font-style:normal;font-variant:normal;font-weight:normal;font-stretch:normal;font-size:medium;line-height:normal;font-family:sans-serif;font-variant-ligatures:normal;font-variant-position:normal;font-variant-caps:normal;font-variant-numeric:normal;font-variant-alternates:normal;font-feature-settings:normal;text-indent:0;text-align:start;text-decoration:none;text-decoration-line:none;text-decoration-style:solid;letter-spacing:normal;word-spacing:normal;text-transform:none;writing-mode:lr-tb;direction:ltr;text-orientation:mixed;dominant-baseline:auto;baseline-shift:baseline;text-anchor:start;white-space:normal;shape-padding:0;clip-rule:nonzero;display:inline;overflow:visible;visibility:visible;opacity:1;isolation:auto;mix-blend-mode:normal;color-interpolation:sRGB;color-interpolation-filters:linearRGB;solid-opacity:1;vector-effect:none;fill-opacity:1;fill-rule:nonzero;stroke:none;stroke-width:1.99999988;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:4;stroke-dasharray:none;stroke-dashoffset:0;stroke-opacity:1;paint-order:stroke fill markers;color-rendering:auto;image-rendering:auto;shape-rendering:auto;text-rendering:auto;enable-background:accumulate" transform="matrix(0.26458333,0,0,0.26458333,0,288.53332)"/><path d="M 15.996094 1.0039062 C 11.589664 1.0039062 8.0019573 4.5916469 8.0019531 8.9980469 C 8.0019573 13.404485 11.589664 17 15.996094 17 C 20.402524 17 23.998043 13.404485 23.998047 8.9980469 C 23.998043 4.5916469 20.402524 1.0039062 15.996094 1.0039062 z " id="path940" style="font-style:normal;font-variant:normal;font-weight:normal;font-stretch:normal;font-size:medium;line-height:normal;font-family:sans-serif;font-variant-ligatures:normal;font-variant-position:normal;font-variant-caps:normal;font-variant-numeric:normal;font-variant-alternates:normal;font-feature-settings:normal;text-indent:0;text-align:start;text-decoration:none;text-decoration-line:none;text-decoration-style:solid;letter-spacing:normal;word-spacing:normal;text-transform:none;writing-mode:lr-tb;direction:ltr;text-orientation:mixed;dominant-baseline:auto;baseline-shift:baseline;text-anchor:start;white-space:normal;shape-padding:0;clip-rule:nonzero;display:inline;overflow:visible;visibility:visible;opacity:1;isolation:auto;mix-blend-mode:normal;color-interpolation:sRGB;color-interpolation-filters:linearRGB;solid-opacity:1;vector-effect:none;fill-opacity:1;fill-rule:nonzero;stroke:none;stroke-width:1.99999988;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:4;stroke-dasharray:none;stroke-dashoffset:0;stroke-opacity:1;paint-order:stroke fill markers;color-rendering:auto;image-rendering:auto;shape-rendering:auto;text-rendering:auto;enable-background:accumulate" transform="matrix(0.26458333,0,0,0.26458333,0,288.53332)"/></g>
                            </svg>
                        @endif




                        <div class="pl-3">
                            <div class="text-base font-semibold capitalize">{{$academy->name  }}</div>
                            {{-- <div class="font-normal text-gray-500">neil.sims@flowbite.com</div> --}}
                        </div>
                    </th>
                    <td class="py-4 px-6">
                        @if ( $academy->owner)
                            {{ $academy->owner }}
                        @else
                            empty
                        @endif
                    </td>
{{--                    <td class="py-4 px-6">--}}
{{--                        <div class="flex items-center">--}}
{{--                            <div class="h-2.5 w-2.5 rounded-full bg-green-400 mr-2"></div> Online--}}
{{--                        </div>--}}
{{--                    </td>--}}

                    <td class="py-4 px-6">
                        @if ( $academy->address)
                            {{ $academy->address }}
                        @else
                            empty
                        @endif
                    </td>
                    <td class="py-4 px-6">
                        @if ( $academy->phone)
                            {{ $academy->phone }}
                        @else
                            empty
                        @endif
                    </td>


                    {{-- <td class="py-4 px-6">
                        <a href="#" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Edit user</a>
                    </td> --}}
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

    {{ $academies->links() }}

</div>

