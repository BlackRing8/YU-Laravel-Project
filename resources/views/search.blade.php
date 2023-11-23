@extends('layout.src')


  @section('coba-src')
  
      
    <div class="max-w-sm w-full h-full mt-16 ">
     <!-- untuk form pencarian -->
      <div class="fixed w-full max-w-sm h-auto bg-gray-200 dark:bg-black ">
         <form class="mb-3 mt-4 mx-3">   
             <label for="default-search" class="mb-2 text-sm font-medium text-gray-900 sr-only dark:text-white">Search</label>
             <div class="relative">
                 <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                     <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                         <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z"/>
                     </svg>
                 </div>
                 <input type="search" id="default-search" class="block w-full p-4 pl-10 text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Search Mockups, Logos..." required>
                 <button type="submit" class="text-white absolute right-2.5 bottom-2.5 bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2 dark:bg-black dark:hover:bg-gray-500 dark:focus:ring-blue-800">Search</button>
             </div>
         </form>
      </div>
     <!-- akhir form pencarian -->
      <div class="w-full h-full dark:bg-black mt-20">
       <div class="grid h-auto w-full bg-gray-100 dark:bg-gray-900 mb-2 pb-5 " data-aos="fade-up">
         <h1 class="text-lg font-semibold text-black dark:text-white m-2">Popular:</h1>
         <div class="grid grid-cols-2 w-full gap-4">
           <a class="flex rounded bg-white h-28 dark:bg-gray-800" href="">
             <div class="flex w-full">
               <div class="flex w-20 h-28 items-center justify-center">
                 <img class="h-24 w-18rounded-md" src="image/cover/cover.png"/>
               </div>
               <div class="ml-1 h-full">
                 <h1 class="mt-2 mb-0 font-semibold text-sm text-black dark:text-white">Dibalik layar sekolah</h1>
                 <p class="text-xs mt-3 text-black dark:text-gray-200">Kelompok Polisi <br>Perang melawan <br>Mafia narkoba.</p>
               </div>
             </div>
           </a>
           <a class="flex rounded bg-white h-28 dark:bg-gray-800" href="">
             <div class="flex w-full">
               <div class="flex w-20 h-28 items-center justify-center">
                 <img class="h-24 w-18rounded-md" src="image/cover/cover2.jpeg"/>
               </div>
               <div class="ml-1 h-full">
                 <h1 class="mt-2 mb-0 font-semibold text-sm text-black dark:text-white">little peace of<br>world</h1>
                 <p class="text-xs mt-3 text-black dark:text-gray-200">Kelompok Polisi <br>Perang melawan <br>Mafia narkoba.</p>
               </div>
             </div>
           </a>
           <a class="flex rounded bg-white h-28 dark:bg-gray-800" href="">
             <div class="flex w-full">
               <div class="flex w-20 h-28 items-center justify-center">
                 <img class="h-24 w-18rounded-md" src="image/cover/enhel.jpeg"/>
               </div>
               <div class="ml-1 h-full">
                 <h1 class="mt-2 mb-0 font-semibold text-sm text-black dark:text-white">Attack Of System</h1>
                 <p class="text-xs mt-3 text-black dark:text-gray-200">Kelompok Polisi <br>Perang melawan <br>Mafia narkoba.</p>
               </div>
             </div>
           </a>
           <a class="flex rounded bg-white h-28 dark:bg-gray-800" href="">
             <div class="flex w-full">
               <div class="flex w-20 h-28 items-center justify-center">
                 <img class="h-24 w-18rounded-md" src="image/cover/poster1.jpg"/>
               </div>
               <div class="ml-1 h-full">
                 <h1 class="mt-2 mb-0 font-semibold text-sm text-black dark:text-white">ElNarko</h1>
                 <p class="text-xs mt-3 text-black dark:text-gray-200">Kelompok Polisi <br>Perang melawan <br>Mafia narkoba.</p>
               </div>
             </div>
           </a>
           
         </div>
       </div>
       <div class="grid h-auto w-full bg-gray-100 dark:bg-gray-900 mb-2 pb-5 "data-aos="fade-up">
         <h1 class="text-lg font-semibold text-black dark:text-white m-2">Action Genre:</h1>
         <div class="grid grid-cols-2 w-full gap-4">
           <a class="flex rounded bg-white h-28 dark:bg-gray-800" href="">
             <div class="flex w-full">
               <div class="flex w-20 h-28 items-center justify-center">
                 <img class="h-24 w-18rounded-md" src="image/cover/cover.png"/>
               </div>
               <div class="ml-1 h-full">
                 <h1 class="mt-2 mb-0 font-semibold text-sm text-black dark:text-white">Dibalik layar sekolah</h1>
                 <p class="text-xs mt-3 text-black dark:text-gray-200">Kelompok Polisi <br>Perang melawan <br>Mafia narkoba.</p>
               </div>
             </div>
           </a>
           <a class="flex rounded bg-white h-28 dark:bg-gray-800" href="">
             <div class="flex w-full">
               <div class="flex w-20 h-28 items-center justify-center">
                 <img class="h-24 w-18rounded-md" src="image/cover/cover2.jpeg"/>
               </div>
               <div class="ml-1 h-full">
                 <h1 class="mt-2 mb-0 font-semibold text-sm text-black dark:text-white">little peace of<br>world</h1>
                 <p class="text-xs mt-3 text-black dark:text-gray-200">Kelompok Polisi <br>Perang melawan <br>Mafia narkoba.</p>
               </div>
             </div>
           </a>
           <a class="flex rounded bg-white h-28 dark:bg-gray-800" href="">
             <div class="flex w-full">
               <div class="flex w-20 h-28 items-center justify-center">
                 <img class="h-24 w-18rounded-md" src="image/cover/enhel.jpeg"/>
               </div>
               <div class="ml-1 h-full">
                 <h1 class="mt-2 mb-0 font-semibold text-sm text-black dark:text-white">Attack Of System</h1>
                 <p class="text-xs mt-3 text-black dark:text-gray-200">Kelompok Polisi <br>Perang melawan <br>Mafia narkoba.</p>
               </div>
             </div>
           </a>
           <a class="flex rounded bg-white h-28 dark:bg-gray-800" href="">
             <div class="flex w-full">
               <div class="flex w-20 h-28 items-center justify-center">
                 <img class="h-24 w-18rounded-md" src="image/cover/poster1.jpg"/>
               </div>
               <div class="ml-1 h-full">
                 <h1 class="mt-2 mb-0 font-semibold text-sm text-black dark:text-white">ElNarko</h1>
                 <p class="text-xs mt-3 text-black dark:text-gray-200">Kelompok Polisi <br>Perang melawan <br>Mafia narkoba.</p>
               </div>
             </div>
           </a>
           
         </div>
       </div>
       <div class="grid h-auto w-full bg-gray-100 dark:bg-gray-900 mb-2 pb-5 "data-aos="fade-up">
         <h1 class="text-lg font-semibold text-black dark:text-white m-2">Comedy Genre:</h1>
         <div class="grid grid-cols-2 w-full gap-4">
           <a class="flex rounded bg-white h-28 dark:bg-gray-800" href="">
             <div class="flex w-full">
               <div class="flex w-20 h-28 items-center justify-center">
                 <img class="h-24 w-18rounded-md" src="image/cover/cover.png"/>
               </div>
               <div class="ml-1 h-full">
                 <h1 class="mt-2 mb-0 font-semibold text-sm text-black dark:text-white">Dibalik layar sekolah</h1>
                 <p class="text-xs mt-3 text-black dark:text-gray-200">Kelompok Polisi <br>Perang melawan <br>Mafia narkoba.</p>
               </div>
             </div>
           </a>
           <a class="flex rounded bg-white h-28 dark:bg-gray-800" href="">
             <div class="flex w-full">
               <div class="flex w-20 h-28 items-center justify-center">
                 <img class="h-24 w-18rounded-md" src="image/cover/cover2.jpeg"/>
               </div>
               <div class="ml-1 h-full">
                 <h1 class="mt-2 mb-0 font-semibold text-sm text-black dark:text-white">little peace of<br>world</h1>
                 <p class="text-xs mt-3 text-black dark:text-gray-200">Kelompok Polisi <br>Perang melawan <br>Mafia narkoba.</p>
               </div>
             </div>
           </a>
           <a class="flex rounded bg-white h-28 dark:bg-gray-800" href="">
             <div class="flex w-full">
               <div class="flex w-20 h-28 items-center justify-center">
                 <img class="h-24 w-18rounded-md" src="image/cover/enhel.jpeg"/>
               </div>
               <div class="ml-1 h-full">
                 <h1 class="mt-2 mb-0 font-semibold text-sm text-black dark:text-white">Attack Of System</h1>
                 <p class="text-xs mt-3 text-black dark:text-gray-200">Kelompok Polisi <br>Perang melawan <br>Mafia narkoba.</p>
               </div>
             </div>
           </a>
           <a class="flex rounded bg-white h-28 dark:bg-gray-800" href="">
             <div class="flex w-full">
               <div class="flex w-20 h-28 items-center justify-center">
                 <img class="h-24 w-18rounded-md" src="image/cover/poster1.jpg"/>
               </div>
               <div class="ml-1 h-full">
                 <h1 class="mt-2 mb-0 font-semibold text-sm text-black dark:text-white">ElNarko</h1>
                 <p class="text-xs mt-3 text-black dark:text-gray-200">Kelompok Polisi <br>Perang melawan <br>Mafia narkoba.</p>
               </div>
             </div>
           </a>
           
         </div>
       </div>

      </div>
    </div>
  @endsection