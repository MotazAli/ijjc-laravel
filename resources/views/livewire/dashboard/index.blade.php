
<div class="p-5 sm:p-10 md:p-10  " >

    <div class="mb-9 capitalize font-bold text-3xl border-b-4  colors-theme border-b-red-700 dark:border-b-gray-200 ">
        Dashboard
    </div>

    <div class=" mt-20 grid  grid-cols-2 sm:grid-cols-3 md:grid-cols-5 lg:grid-cols-5 justify-between justify-items-center  " >

        {{-- @foreach ( range(0,9) as $ele )
        <a class="flex flex-col h-40 w-40  border-2 items-center  mb-9 border-colors-theme  colors-theme rounded-sm hover:shadow-lg cursor-pointer">
            <img class=" h-[80%] w-full rounded-t-sm   " src='https://res.cloudinary.com/dfw7q7qe2/image/upload/v1665894292/ijjc/05f46fba-3528-40d1-b642-2e04238369ae_amptpm.jpg' alt="name" />
            <label class="capitalize text-xl font-semibold" >Profile</label>
        </a>
        @endforeach --}}


        <a href="{{ route('dashboard.users.index') }}" class=" p-3 flex flex-col h-32 w-32  border-2 items-center  mb-9 border-colors-theme  colors-theme hover:shadow-lg cursor-pointer rounded-lg">
            <svg class="h-[80%] w-full menu-item_icon" fill="currentColor"  enable-background="new 0 0 24 24" id="Layer_1" version="1.0" viewBox="0 0 24 24" xml:space="preserve" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                <g><path d="M9,9c0-1.7,1.3-3,3-3s3,1.3,3,3c0,1.7-1.3,3-3,3S9,10.7,9,9z M12,14c-4.6,0-6,3.3-6,3.3V19h12v-1.7C18,17.3,16.6,14,12,14z   "/></g><g><g><circle cx="18.5" cy="8.5" r="2.5"/></g><g><path d="M18.5,13c-1.2,0-2.1,0.3-2.8,0.8c2.3,1.1,3.2,3,3.2,3.2l0,0.1H23v-1.3C23,15.7,21.9,13,18.5,13z"/></g></g><g><g><circle cx="18.5" cy="8.5" r="2.5"/></g><g><path d="M18.5,13c-1.2,0-2.1,0.3-2.8,0.8c2.3,1.1,3.2,3,3.2,3.2l0,0.1H23v-1.3C23,15.7,21.9,13,18.5,13z"/></g></g><g><g><circle cx="5.5" cy="8.5" r="2.5"/></g><g><path d="M5.5,13c1.2,0,2.1,0.3,2.8,0.8c-2.3,1.1-3.2,3-3.2,3.2l0,0.1H1v-1.3C1,15.7,2.1,13,5.5,13z"/></g></g>
            </svg>
            {{-- <img class=" h-[80%] w-full rounded-t-sm   " src='https://res.cloudinary.com/dfw7q7qe2/image/upload/v1665894292/ijjc/05f46fba-3528-40d1-b642-2e04238369ae_amptpm.jpg' alt="name" /> --}}
            <span class="capitalize text-xl font-semibold" >Users</span>
        </a>


        <a href="{{ route('dashboard.academies.index') }}" class="p-3 flex flex-col h-32 w-32  border-2 items-center  mb-9 border-colors-theme  colors-theme hover:shadow-lg cursor-pointer rounded-lg">
            <svg id="Layer_1" class="h-[80%] w-full menu-item_icon" fill="currentColor" style="enable-background:new 0 0 512 512;" version="1.1" viewBox="0 0 512 512" xml:space="preserve" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><g id="XMLID_896_"><rect height="444.8" id="XMLID_929_" width="49" x="16.5" y="46.3"/><rect height="445.3" id="XMLID_928_" width="49" x="446.5" y="45.7"/><path d="M68.3,349v142h373V349H68.3z M125.8,486.8h-47v-105h47V486.8z M186.8,486.8h-47v-105h47V486.8z    M247.8,486.8h-47v-105h47V486.8z M308.8,486.8h-47v-105h47V486.8z M369.8,486.8h-47v-105h47V486.8z M430.8,486.8h-47v-105h47   V486.8z" id="XMLID_920_"/><path d="M68,74.1v270h373v-270H68z M430.5,336.5h-352V81.7h352V336.5z" id="XMLID_917_"/><g id="XMLID_906_"><rect height="260.1" id="XMLID_916_" width="4.1" x="250.7" y="78.1"/><rect height="260.1" id="XMLID_915_" width="4.1" x="188.7" y="78.1"/><rect height="260.1" id="XMLID_914_" width="4.1" x="126.7" y="78.1"/><rect height="260.1" id="XMLID_913_" width="4.1" x="374.7" y="78.1"/><rect height="260.1" id="XMLID_912_" width="4.1" x="312.7" y="78.1"/><rect height="4.1" id="XMLID_911_" width="365" x="72.3" y="210.2"/><rect height="4.1" id="XMLID_910_" width="365" x="72.3" y="298.2"/><rect height="4.1" id="XMLID_909_" width="365" x="72.3" y="254.2"/><rect height="4.1" id="XMLID_908_" width="365" x="72.3" y="122.2"/><rect height="4.1" id="XMLID_907_" width="365" x="72.3" y="166.2"/></g><g id="XMLID_903_"><rect height="10" id="XMLID_905_" width="49" x="16.5" y="33"/><rect height="10" id="XMLID_904_" width="43" x="19.5" y="21"/></g><g id="XMLID_900_"><rect height="10" id="XMLID_902_" width="49" x="446.5" y="33"/><rect height="10" id="XMLID_901_" width="43" x="449.5" y="21"/></g><path d="M68,23.1V73h373V23.1H68z M430.8,68.7H78.5V31h352.3V68.7z" id="XMLID_897_"/></g>
            </svg>
            <span class="capitalize text-xl font-semibold" >Academies</span>
        </a>


        <a class="p-3 flex flex-col h-32 w-32  border-2 items-center  mb-9 border-colors-theme  colors-theme hover:shadow-lg cursor-pointer rounded-lg">
            <svg class="h-[80%] w-full menu-item_icon" fill="currentColor"
             width="980pt" height="801pt" viewBox="-70 0 1380 528"
             preserveAspectRatio="xMidYMid meet">
                <g transform="translate(0.000000,801.000000) scale(0.100000,-0.100000)"
                 stroke="none">
                    <path d="M9365 7982 c-144 -52 -384 -164 -725 -335 l-335 -169 -55 13 -55 14
                    -7 73 c-10 95 -29 133 -81 163 -41 23 -47 24 -247 22 -113 -1 -369 -6 -570
                    -11 -401 -11 -440 -16 -505 -73 -35 -32 -50 -64 -60 -139 l-7 -46 -106 13
                    c-229 27 -410 57 -491 80 -48 13 -105 28 -129 33 -139 30 -1325 47 -3973 56
                    l-1989 7 0 -727 0 -728 2448 6 c1346 3 2532 9 2636 12 103 3 187 2 185 -3 -2
                    -4 -50 -84 -105 -178 -352 -590 -613 -1138 -694 -1456 -20 -76 -21 -118 -25
                    -952 -4 -848 -9 -1221 -40 -2836 -9 -426 -14 -775 -12 -777 1 -2 343 -6 759
                    -10 l756 -7 7 1289 c7 1215 -7 4044 -21 4289 l-6 100 188 160 c242 206 370
                    310 519 423 l119 91 28 -52 c47 -87 97 -124 269 -199 85 -37 237 -104 339
                    -149 415 -183 706 -285 878 -309 138 -19 204 13 217 105 8 48 2 136 -10 167
                    -6 15 2 14 57 -8 94 -37 235 -79 401 -119 l148 -36 45 21 c56 28 141 127 214
                    250 l53 90 250 0 250 0 -7 -402 c-3 -222 -11 -594 -16 -828 -5 -234 -14 -634
                    -20 -890 -6 -256 -17 -733 -25 -1060 -8 -327 -20 -779 -25 -1005 -6 -225 -15
                    -592 -21 -814 -8 -330 -8 -406 3 -412 7 -5 333 -9 724 -9 l712 0 7 1118 c5
                    637 3 1801 -3 2707 -5 875 -8 1592 -5 1595 2 2 348 6 768 8 l763 4 6 132 c7
                    177 28 1397 24 1401 -2 2 -553 7 -1223 11 l-1220 6 -180 88 c-293 143 -476
                    207 -620 216 -71 4 -89 2 -160 -24z"/>
                </g>
            </svg>

            <span class="capitalize text-xl font-semibold" >Belts</span>
        </a>


        <a class="p-3 flex flex-col h-32 w-32  border-2 items-center  mb-9 border-colors-theme  colors-theme hover:shadow-lg cursor-pointer rounded-lg">
            <svg id="Layer_1" class="h-[80%] w-full menu-item_icon" fill="currentColor" style="enable-background:new 0 0 1024 1024;" version="1.1" viewBox="0 0 1024 1024" xml:space="preserve" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><path d="M870.1,492h67.5c-10.2-219-187-395.4-406.5-405.5V154h-40V86.5c-50.4,2.3-99.3,13.4-145.7,33  c-50.6,21.5-96.1,52.2-135.1,91.3c-39,39.1-69.6,84.7-91,135.4C99.7,392.6,88.7,441.5,86.4,492h67.7v40H86.4  c2.3,50.4,13.4,99.4,33,145.8c21.5,50.7,52.2,96.3,91.3,135.4c39.1,39.1,84.7,69.9,135.4,91.3c46.5,19.7,95.5,30.8,146,33V870h40  v67.5c50.3-2.3,99.2-13.4,145.6-33c50.8-21.5,96.3-52.2,135.5-91.3c39.2-39.1,69.9-84.7,91.4-135.4c19.7-46.4,30.8-95.4,33.1-145.8  h-67.5V492z M694.4,722.9L491.1,520.2V287h40v216.6l191.6,190.9L694.4,722.9z" id="XMLID_468_"/><g id="XMLID_1_"/><g id="XMLID_2_"/><g id="XMLID_3_"/><g id="XMLID_4_"/><g id="XMLID_5_"/>
            </svg>
            <span class="capitalize text-xl font-semibold" >Classes</span>
        </a>



        <a class="p-3 flex flex-col h-32 w-32  border-2 items-center  mb-9 border-colors-theme  colors-theme hover:shadow-lg cursor-pointer rounded-lg">
            <svg class="h-[80%] w-full menu-item_icon" fill="currentColor" enable-background="new 0 0 48 48" height="48px" id="Layer_3" version="1.1" viewBox="0 0 48 48" width="48px" xml:space="preserve" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><g><rect  height="4" width="35" x="13" y="12.448"/><polygon  points="3.961,13.321 2.121,11.481 0,13.603 1.84,15.443 1.836,15.447 3.958,17.568 11.097,10.429    8.976,8.307  "/><rect  height="4" width="35" x="13" y="23.511"/><polygon  points="3.962,24.384 2.121,22.544 0,24.666 1.84,26.506 1.836,26.51 3.958,28.631 11.097,21.491    8.976,19.37  "/><rect  height="4" width="35" x="13" y="34.574"/><polygon  points="3.961,35.445 2.121,33.607 0,35.729 1.84,37.568 1.836,37.572 3.958,39.693 11.097,32.555    8.976,30.432  "/></g>
            </svg>
            <span class="capitalize text-xl font-semibold" >Attendance</span>
        </a>


        <a class="p-3 flex flex-col h-32 w-32  border-2 items-center  mb-9 border-colors-theme  colors-theme hover:shadow-lg cursor-pointer rounded-lg">
            <svg class="h-[80%] w-full menu-item_icon" fill="currentColor" viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg"><title/><g data-name="Layer 7" id="Layer_7"><path d="M14,1h-.5363c0-.0159.0065-.03.0051-.0464a.4906.4906,0,0,0-.545-.4516A1.5078,1.5078,0,0,0,11.945,1H8.9364a.4476.4476,0,0,0,.005-.0464A.4931.4931,0,0,0,8.3965.502,1.506,1.506,0,0,0,7.4178,1H4.493A.4476.4476,0,0,0,4.498.9536.4893.4893,0,0,0,3.9531.502,1.5071,1.5071,0,0,0,2.9744,1H2A2.0023,2.0023,0,0,0,0,3V14a2.0023,2.0023,0,0,0,2,2H14a2.0023,2.0023,0,0,0,2-2V3A2.0023,2.0023,0,0,0,14,1Zm1,13a1,1,0,0,1-1,1H2a1,1,0,0,1-1-1V5.5H11a.5.5,0,0,0,0-1H1V3A1,1,0,0,1,2,2h.5851v.001A1.51,1.51,0,0,0,3.9971,3.499l.0322.001a.5.5,0,0,0,.0322-.999A.513.513,0,0,1,3.5851,2H7.0275l0,.001A1.51,1.51,0,0,0,8.44,3.499l.0323.001a.5.5,0,0,0,.0322-.999A.5136.5136,0,0,1,8.0273,2h3.5284a1.5077,1.5077,0,0,0,1.4121,1.499L13,3.5a.5.5,0,0,0,.0322-.999A.5127.5127,0,0,1,12.5558,2H14a1,1,0,0,1,1,1V4.5H13a.5.5,0,0,0,0,1h2Z"/><path d="M10,6.5049H6a1.5016,1.5016,0,0,0-1.5,1.5v4a1.5017,1.5017,0,0,0,1.5,1.5h4a1.5017,1.5017,0,0,0,1.5-1.5v-4A1.5016,1.5016,0,0,0,10,6.5049Zm.5,5.5a.5006.5006,0,0,1-.5.5H6a.5006.5006,0,0,1-.5-.5v-4a.5006.5006,0,0,1,.5-.5h4a.5006.5006,0,0,1,.5.5Z"/><path d="M9,9.5049H8.5v-.5a.5.5,0,0,0-1,0v1a.5.5,0,0,0,.5.5H9a.5.5,0,0,0,0-1Z"/></g>
            </svg>
            <span class="capitalize text-xl font-semibold" >Events</span>
        </a>





    </div>



</div>
