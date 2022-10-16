



<div class=" xs:p-2 p-10" >
    <div class="py-2" >
        <select class="p-1 w-40 border-[0.5px] colors-theme bg-gray-100 border-gray-200 dark:border-themes-borderDark">
            <option>All Programs</option>
            <option>BJJ Adults</option>
            <option>BJJ Kids</option>
            <option>BJJ Lades</option>
        </select>

        
    </div>

    <div class="flex  justify-between items-center h-20 px-1  border-[0.5px] border-colors-theme colors-theme bg-gray-100 " >
        <button class=" hover:bg-gray-200 dark:hover:bg-gray-600 px-2 font-bold uppercase xs:px-0 xs:text-xs " >&#60; previous</button>
        <label> {{ $this->getFirstDate() }} - {{ $this->getlastDate() }}</label>
        <button class=" hover:bg-gray-200 dark:hover:bg-gray-600 px-2  font-bold uppercase xs:px-0 xs:text-xs">next &#62; </button>
    </div>



    @foreach ( $numberOfDays as $day )
    <div class=" mt-3  border-[0.5px] border-colors-theme colors-theme">
        <div class=" font-medium flex flex-col items-center justify-center w-full h-16  border-b-[0.5px] border-colors-theme  colors-theme bg-gray-50">
            <label>{{ $this->getDayNumberOfDate((string)$day) }}</label>
            <label class="capitalize" >{{ $this->getDayNameOfDate((string)$day) }}</label>
        </div>
        <div class=" p-1 grid grid-cols-2 gap-2 xs:grid-cols-1  divide-x divide-y ">
            <div class="flex flex-col items-start xs:items-center justify-center">
                <label>5:00 pm - 6:00 pm </label>
                <label class="capitalize" >Kides Class</label>
            </div>
            <div class="flex flex-col items-start justify-center">
                <label>5:00 pm - 6:00 pm </label>
                <label class="capitalize" >Kides Class</label>
            </div>
            <div class="flex flex-col items-start justify-center">
                <label>5:00 pm - 6:00 pm </label>
                <label class="capitalize" >Kides Class</label>
            </div>
            <div class="flex flex-col items-start justify-center">
                <label>5:00 pm - 6:00 pm </label>
                <label class="capitalize" >Kides Class</label>
            </div>
            <div class="flex flex-col items-start justify-center">
                <label>5:00 pm - 6:00 pm </label>
                <label class="capitalize" >Kides Class</label>
            </div>
        </div>
    </div>

        
    @endforeach



    
</div>
