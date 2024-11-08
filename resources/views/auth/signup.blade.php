<x-layouts.app>
    
    <div class=" mb-20 flex flex-col items-center justify-center px-6 py-8 mx-auto md:h-screen lg:py-0">
        {{-- <a href="#" class="flex items-center mb-6 text-2xl font-semibold text-gray-900 dark:text-white">
            <img class="w-8 h-8 mr-2" src="https://flowbite.s3.amazonaws.com/blocks/marketing-ui/logo.svg" alt="logo">
            Flowbite    
        </a> --}}
        <div class="w-full colors-theme bg-gray-200  rounded-lg shadow dark:border md:mt-0 sm:max-w-md xl:p-0  dark:border-themes-borderDark">
            <div class="p-6 space-y-4 md:space-y-6 sm:p-8">
                {{-- <h1 class="text-xl font-bold leading-tight tracking-tight text-gray-900 md:text-2xl dark:text-white">
                    Login in to your account
                </h1> --}}
                {{-- @if ($errors->any())
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
                @endif --}}

                <x-errors.auth />
                
                <form class="space-y-4 md:space-y-6"  
                      action="{{ route('auth.store') }}"
                      method="POST">
                    @csrf

                    <div>
                        <label for="name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Name</label>
                        <input type="text"  required="" name="name" id="name" class="bg-gray border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-600 dark:placeholder-white dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="your name" >
                    </div>
                    <div>
                        <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Email</label>
                        <input type="email"  required="" name="email" id="email" class="bg-gray border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-600 dark:placeholder-white dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="name@company.com" >
                    </div>
                    <div>
                        <label for="password" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Password</label>
                        <input type="password"  required="" name="password" id="password" placeholder="••••••••" class="bg-gray border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-600 dark:placeholder-white dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                    </div>
                    
                    
                    <button type="submit" class="w-full text-white bg-primary-600 hover:bg-primary-700 focus:ring-4 focus:outline-none focus:ring-primary-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-primary-600 dark:hover:bg-primary-700 dark:focus:ring-primary-800">Sign in</button>
                    <p class="text-sm font-light text-gray-900 dark:text-gray-200">
                        Already have an account? <a href="{{ route('auth.index') }}" class="font-medium text-primary-600 hover:underline dark:text-primary-500">Login</a>
                    </p>
                </form>
            </div>
        </div>
    </div>

</x-layouts.app>