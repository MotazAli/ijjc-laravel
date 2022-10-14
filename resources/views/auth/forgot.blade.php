<x-layouts.app>
    
        
            <div class="flex flex-col items-center justify-center px-6 py-8 mx-auto md:h-screen lg:py-0">
                <a href="#" class="flex items-center mb-6 text-2xl font-semibold colors-theme">
                    <svg class="colors-theme" fill="currentColor"  enable-background="new 0 0 48 48" height="100px" id="Layer_1" version="1.1" viewBox="0 0 48 48" width="100px" xml:space="preserve" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                        <g>
                            <path d="M24,0C10.746,0,0,10.744,0,24c0,13.254,10.746,24,24,24c13.256,0,24-10.746,24-24C48,10.744,37.256,0,24,0z    M24.159,44.104c-11.095,0-20.089-8.994-20.089-20.09c0-11.094,8.994-20.088,20.089-20.088s20.089,8.995,20.089,20.088   C44.248,35.109,35.254,44.104,24.159,44.104z" />
                            <path d="M31.938,16.383h-3.361v-2.618c0-1.311-0.955-2.373-2.133-2.373h-4.885c-1.178,0-2.133,1.063-2.133,2.373   v2.618h-2.087h-1.276c-1.201,0-2.174,0.974-2.174,2.175v15.876c0,1.201,0.973,2.174,2.174,2.174h15.875   c1.203,0,2.176-0.973,2.176-2.174V18.558C34.113,17.356,33.141,16.383,31.938,16.383z M21.357,14.928   c0-0.758,0.552-1.371,1.231-1.371h2.823c0.68,0,1.23,0.613,1.23,1.371v1.455h-5.285V14.928z M30.65,31.889   c0,0.793-0.643,1.434-1.436,1.434H18.744c-0.793,0-1.436-0.641-1.436-1.434V21.416c0-0.793,0.643-1.436,1.436-1.436h10.471   c0.793,0,1.436,0.643,1.436,1.436V31.889z" />
                            <path d="M24,23.375c-1.121,0-2.031,0.908-2.031,2.031c0,0.486,0.188,0.916,0.473,1.264l-0.021,0.004   c0,0,0.529,0.514,0.529,1.248v1.662c0,0.574,0.466,1.041,1.041,1.041s1.041-0.467,1.041-1.041v-1.703   c0.008-0.162,0.066-0.543,0.402-1.043c0.008-0.014,0.006-0.021,0.014-0.035c0.354-0.363,0.584-0.848,0.584-1.396   C26.031,24.283,25.123,23.375,24,23.375z" />
                        </g>
                    </svg>  
                </a>
                <div class="w-full colors-theme bg-gray-200  rounded-lg shadow dark:border md:mt-0 sm:max-w-md xl:p-0  dark:border-themes-borderDark">
                    <div class="p-6 space-y-4 md:space-y-6 sm:p-8">
                        <h1 class=" text-center text-xl font-bold leading-tight tracking-tight text-gray-900 md:text-2xl dark:text-white">
                            Forgotten password
                        </h1>
                        <form class="space-y-4 md:space-y-6" action="#">
                            <div>
                                <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Your email</label>
                                <input type="email" name="email" id="email" class="bg-gray border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-600 dark:placeholder-white dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="name@company.com" required="">
                            </div>
                            
                            <button type="submit" class="w-full text-white bg-primary-600 hover:bg-primary-700 focus:ring-4 focus:outline-none focus:ring-primary-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-primary-600 dark:hover:bg-primary-700 dark:focus:ring-primary-800">Reset Password</button>
                            <p class="text-sm font-light text-gray-900 dark:text-gray-200">
                                Have an account? <a href="{{ route('login') }}" class="font-medium text-primary-600 hover:underline dark:text-primary-500">Log In</a>
                            </p>
                        </form>
                    </div>
                </div>
            </div>
        
    
</x-layouts.app>