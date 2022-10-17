<div class=" xs:p-2 p-10" >

    <div class="mb-9 capitalize font-bold text-3xl border-b-4  colors-theme border-b-red-700 dark:border-b-gray-200 ">
        instructors
    </div>

    @foreach ($instructors as $instractor )
    <div class=" flex flex-col sm:flex-row md:flex-row  sm:items-start md:items-start     border-[0.5px]  p-2 mb-9 border-colors-theme  colors-theme bg-gray-50 " >
        
        <div class="flex flex-row">
            <img class="w-36  h-48 sm:w-52  sm:h-72 md:w-52  md:h-72 rounded-sm   " src='https://res.cloudinary.com/dfw7q7qe2/image/upload/v1665894292/ijjc/05f46fba-3528-40d1-b642-2e04238369ae_amptpm.jpg' alt="name" />
            <div class="flex flex-col ml-5  ">
                <label class="capitalize text-xl font-semibold" >motaz ali</label>
                <label class="capitalize text-lg font-normal "> belt: black </label>
                <label class="capitalize text-lg"> email: motaz@gmail.com </label>
                <label class="capitalize text-lg"> phone: 23543665457 </label>
                <p>this is just descritpion</p>
            </div>
        </div>
        
        <div class="flex flex-col sm:ml-14 md:ml-14  ">
            
            <label class="capitalize text-xl font-semibold" >championships</label>
            <div>this is just descritpion</div>
        </div>
        
    </div>
    @endforeach




    
</div>
