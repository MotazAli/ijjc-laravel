
<div class=" xs:p-2 p-10" >

    <div class=" capitalize font-bold text-3xl border-b-4  colors-theme border-b-red-700 dark:border-b-gray-200 ">
        Affiliated Schools
    </div>

    <div class=" mt-16 grid grid-cols-1 sm:grid-cols-2 md:grid-cols-2 gap-x-3 gap-y-16 " >
        @foreach (range(0,6) as $academy )
        <div class="flex flex-row">
            <img class="w-36  h-36 sm:w-52  sm:h-52 md:w-52  md:h-52 rounded-sm   " src='https://res.cloudinary.com/dfw7q7qe2/image/upload/v1665894292/ijjc/05f46fba-3528-40d1-b642-2e04238369ae_amptpm.jpg' alt="name" />
            <div class="flex flex-col ml-5  ">
                <label class="capitalize text-xl font-semibold" >Combat academy</label>
                <label class="capitalize text-lg font-normal "> Abden youth club </label>
                <label class="capitalize text-lg"> email: motaz@gmail.com </label>
                <label class="capitalize text-lg"> phone: 23543665457 </label>
                <label class="capitalize text-lg"> website if have </label>
            </div>
        </div>
        @endforeach
               
    </div>

</div>
