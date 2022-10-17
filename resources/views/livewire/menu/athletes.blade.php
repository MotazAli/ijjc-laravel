
<div class=" xs:p-2 p-10" >

    <div class="mb-9 capitalize font-bold text-3xl border-b-4  colors-theme border-b-red-700 dark:border-b-gray-200 ">
        athletes
    </div>


    <div class="py-2 mb-14 flex flex-col gap-y-2 " >
        <select class="p-1 w-40 border-[0.5px] colors-theme bg-gray-100 border-gray-200 dark:border-themes-borderDark">
            <option>All Academies</option>
            <option>IJJC</option>
        </select>

        <select class="p-1 w-40 border-[0.5px] colors-theme bg-gray-100 border-gray-200 dark:border-themes-borderDark">
            <option>All Belts</option>
            <option>white</option>
            <option>blue</option>
            <option>purple</option>
            <option>brown</option>
            <option>black</option>
        </select>
    </div>

    <div class=" grid grid-cols-2 sm:grid-cols-4 md:grid-cols-4 gap-x-3" >
        @foreach (range(0,6) as $athelete )
        <div class="flex flex-col  border-[0.5px]  mb-9 border-colors-theme  colors-theme rounded-sm hover:shadow-lg ">
            <img class=" h-48 sm:h-72   md:h-72 rounded-t-sm   " src='https://res.cloudinary.com/dfw7q7qe2/image/upload/v1665894292/ijjc/05f46fba-3528-40d1-b642-2e04238369ae_amptpm.jpg' alt="name" />
            <div class="flex flex-col items-center">
                <label class="capitalize text-xl font-semibold" >motaz ali</label>
                <label class="capitalize text-lg font-normal "> IJJC </label>
                <label class="capitalize text-lg font-normal "> black belt </label>
            </div>
        </div> 
        @endforeach
               
    </div>

</div>
