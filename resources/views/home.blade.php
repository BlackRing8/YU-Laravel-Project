@extends('layout.main')


  @section('coba')
    <div class=" max-w-sm w-full bg-gray-300 dark:bg-gray-800">
      <div class="rounded-lg dark:border-gray-700 mt-16 mb-24" data-aos="fade-up">

        <div class="grid h-40 w-full bg-white dark:bg-black rounded-b-3xl"data-aos="fade-up">
          <div class="flex w-full justify-center items-center">
              <span id="typewriter" class="dark:text-yellow-300 text-2xl font-bold font-mono"></span><span id="cursor" class="text-2xl">|</span>
          </div>
          <div class="flex h-12 w-full">
            <a class="wrapper bg-black hover:bg-yellow-300 dark:hover:text-yellow-300 mx-auto dark:text-black dark:bg-yellow-300 dark:hover:bg-black">
              <span></span>
              <span></span>
              <span></span>
              <span></span>
              What News?
            </a>
            <a class="wrapper bg-black hover:bg-yellow-300 dark:hover:text-yellow-300 mx-auto dark:text-black dark:bg-yellow-300 dark:hover:bg-black">
              <span></span>
              <span></span>
              <span></span>
              <span></span>
               Recommended
            </a>
          </div>
          
        </div>

        <div class="flex h-44 w-auto bg-white dark:bg-yellow-300 mx-4 mt-4 rounded-xl "data-aos="fade-up">
        </div>
        <div class="flex h-44 w-full "data-aos="fade-up">
        </div>
         
         
      </div>
    </div>
  @endsection