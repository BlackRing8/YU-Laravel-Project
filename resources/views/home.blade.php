@extends('layout.main')


  @section('coba')
    <div class=" max-w-sm w-full bg-gray-300 dark:bg-gray-900 border border-black ">
      <div class="rounded-lg dark:border-gray-700 mt-14 mb-24" data-aos="fade-up">

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

        <div class="flex h-44 w-auto bg-white mx-4 mt-8 rounded-xl "data-aos="fade-up">
          
        <div id="controls-carousel" class="relative w-full" data-carousel="static">
          <!-- Carousel wrapper -->
          <div class="relative h-56 overflow-hidden rounded-lg md:h-96">
              <!-- Cover 1 -->
              <a href="" class="hidden duration-700 ease-in-out" data-carousel-item>
                  <div class="flex flex-wrap bg-yellow-300 h-44 w-full rounded-xl">
                      <img src="image/cover/alice.png" class="w-32 h-44 rounded-xl">
                      <div class="flex bg-green-400 w-52">
                        <h1>testing</h1>
                      </div>
                  </div>
              </a>
              {{-- cover 2 --}}
              <a class="hidden duration-700 ease-in-out" data-carousel-item>
                  <img src="image/cover/cover.png" class="w-32 h-44 rounded-xl">
              </a>
              {{-- Cover 3 --}}
              <a class="hidden duration-700 ease-in-out" data-carousel-item>
                  <img src="image/cover/poster1.jpg" class="w-32 h-44 rounded-xl">
              </a>
              {{-- Cover 4 --}}
              <a class="hidden duration-700 ease-in-out" data-carousel-item>
                  <img src="image/cover/System.jpg" class="w-32 h-44 rounded-xl">
              </a>
          </div>
          <!-- Slider controls -->
          
          <button type="button" class="absolute top-0 end-0 z-30 flex items-end pb-2 justify-center h-full px-4 cursor-pointer group focus:outline-none" data-carousel-next>
              <span class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-gray-800 dark:bg-gray-800/30 group-hover:bg-gray-600 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                  <svg class="w-4 h-4 text-white dark:text-gray-800 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                      <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4"/>
                  </svg>
                  <span class="sr-only">Next</span>
              </span>
          </button>
        </div>

        </div>

        <div class="flex h-44 w-full "data-aos="fade-up">
        </div>
         
         
      </div>
    </div>
  @endsection