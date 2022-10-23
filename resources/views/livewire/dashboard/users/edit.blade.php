
<div class="p-5 sm:p-10 md:p-10  " >

    <div class="mb-9 pb-4 capitalize font-bold text-3xl border-b-4  colors-theme border-b-red-700 dark:border-b-gray-200 ">
        {{ $user->name }}
    </div>


    <div class=" w-full h-screen flex flex-row ">
        <img class=" w-32 h-32 " src='https://res.cloudinary.com/dfw7q7qe2/image/upload/v1665894292/ijjc/05f46fba-3528-40d1-b642-2e04238369ae_amptpm.jpg' alt="name" />
        <div class="flex flex-col flex-grow">
            <div class=' px-3 mb-6'>
                <label class=' uppercase block tracking-wide text-gray-700 text-xs font-bold mb-2' >name</label>
                <input class='appearance-none  w-[50%] bg-white text-gray-700 border border-gray-400 shadow-inner rounded-md py-3 px-4 leading-tight focus:outline-none  focus:border-gray-500' type='text'  required>
            </div>
            <div class=' px-3 mb-6'>
                <label class=' uppercase block tracking-wide text-gray-700 text-xs font-bold mb-2'>email</label>
                <input class='appearance-none w-[50%] bg-white text-gray-700 border border-gray-400 shadow-inner rounded-md py-3 px-4 leading-tight focus:outline-none  focus:border-gray-500' type='email'  required>
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
