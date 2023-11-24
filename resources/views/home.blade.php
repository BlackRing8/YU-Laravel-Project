@extends('side.main')


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

        <div class="flex h-44 w-auto bg-white dark:bg-black mx-4 mt-8 rounded-xl "data-aos="fade-up">        
          <div id="controls-carousel" class="relative w-full" data-carousel="static">
          <!-- Carousel wrapper -->
          <div class="relative h-56 overflow-hidden rounded-lg  md:h-96">
              <!-- Cover 1 -->
            <button class="hidden h-44 duration-700 ease-in-out"data-modal-target="span-detail-1" data-modal-toggle="span-detail-1" data-carousel-item
              type="button">
                  <div class="flex flex-wrap bg-white dark:bg-black h-44 w-full rounded-xl">
                      <img src="image/cover/alice.png" class="w-28 h-40 rounded-xl mx-auto my-auto">
                      <div class=" w-52">
                        <h1 class="font-bold text-xl ml-3 mt-2 flex dark:text-yellow-200">Judul Buku</h1>
                        <h1 class="ml-3 dark:text-yellow-200 flex">Penulis</h1> 
                        <h1 class="ml-3 dark:text-yellow-200 flex">Tipe</h1> 
                        <h1 class="ml-3 dark:text-yellow-200 flex">Genre</h1> 
                        <h1 class="ml-3 dark:text-yellow-200 flex">Status</h1> 
                      </div>
                  </div>
            </button>
              {{-- cover 2 --}}
            <button class="hidden h-44 duration-700 ease-in-out"data-modal-target="span-detail-2" data-modal-toggle="span-detail-2" data-carousel-item
              type="button">
                  <div class="flex flex-wrap bg-white dark:bg-black h-44 w-full rounded-xl">
                      <img src="image/cover/Cover.png" class="w-28 h-40 rounded-xl mx-auto my-auto">
                      <div class=" w-52">
                        <h1 class="font-bold text-xl ml-3 mt-2 flex dark:text-yellow-200">Judul Buku</h1>
                        <h1 class="ml-3 dark:text-yellow-200 flex">Penulis</h1> 
                        <h1 class="ml-3 dark:text-yellow-200 flex">Tipe</h1> 
                        <h1 class="ml-3 dark:text-yellow-200 flex">Genre</h1> 
                        <h1 class="ml-3 dark:text-yellow-200 flex">Status</h1> 
                      </div>
                  </div>
            </button>
             {{-- Cover 3 --}}
             <button class="hidden h-44 duration-700 ease-in-out"data-modal-target="span-detail-3" data-modal-toggle="span-detail-3" data-carousel-item
              type="button">
                  <div class="flex flex-wrap bg-white dark:bg-black h-44 w-full rounded-xl">
                      <img src="image/cover/cover2.jpeg" class="w-28 h-40 rounded-xl mx-auto my-auto">
                      <div class=" w-52">
                        <h1 class="font-bold text-xl ml-3 mt-2 flex dark:text-yellow-200">Judul Buku</h1>
                        <h1 class="ml-3 dark:text-yellow-200 flex">Penulis</h1> 
                        <h1 class="ml-3 dark:text-yellow-200 flex">Tipe</h1> 
                        <h1 class="ml-3 dark:text-yellow-200 flex">Genre</h1> 
                        <h1 class="ml-3 dark:text-yellow-200 flex">Status</h1> 
                      </div>
                  </div>
            </button>
              {{-- Cover 4 --}}
              <button class="hidden h-44 duration-700 ease-in-out"data-modal-target="span-detail-4" data-modal-toggle="span-detail-4" data-carousel-item
              type="button">
                  <div class="flex flex-wrap bg-white dark:bg-black h-44 w-full rounded-xl">
                      <img src="image/cover/poster1.jpg" class="w-28 h-40 rounded-xl mx-auto my-auto">
                      <div class=" w-52">
                        <h1 class="font-bold text-xl ml-3 mt-2 flex dark:text-yellow-200">Judul Buku</h1>
                        <h1 class="ml-3 dark:text-yellow-200 flex">Penulis</h1> 
                        <h1 class="ml-3 dark:text-yellow-200 flex">Tipe</h1> 
                        <h1 class="ml-3 dark:text-yellow-200 flex">Genre</h1> 
                        <h1 class="ml-3 dark:text-yellow-200 flex">Status</h1> 
                      </div>
                  </div>
            </button>
          </div>
          <!-- Slider controls -->
          
          <button type="button" class="absolute top-0 end-0 z-30 flex items-end pb-2 justify-center h-full px-4 cursor-pointer group focus:outline-none" data-carousel-next>
              <span class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-gray-800 dark:bg-gray-300/30 group-hover:bg-gray-600 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
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
         
        {{-- Modal Box di section carousel --}}
        <div id="span-detail-1" tabindex="-1" class="fixed top-0 left-0 right-0 z-50 hidden w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] max-h-full transition-transform">
          <div class="relative w-full max-w-md max-h-full">
              <!-- Modal content -->
              <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                  <!-- Modal header -->
                  <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t dark:border-gray-600">
                      <h3 class="text-xl font-medium text-gray-900 dark:text-white">
                          Small modal
                      </h3>
                      <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-hide="span-detail-1">
                          <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                              <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                          </svg>
                          <span class="sr-only">Close modal</span>
                      </button>
                  </div>
                  <!-- Modal body -->
                  <div class="p-4 md:p-5 space-y-4">
                      <p class="text-base leading-relaxed text-gray-500 dark:text-gray-400">
                          With less than a month to go before the European Union enacts new consumer privacy laws for its citizens, companies around the world are updating their terms of service agreements to comply.
                      </p>
                      <p class="text-base leading-relaxed text-gray-500 dark:text-gray-400">
                          The European Union’s General Data Protection Regulation (G.D.P.R.) goes into effect on May 25 and is meant to ensure a common set of data rights in the European Union. It requires organizations to notify users as soon as possible of high-risk data breaches that could personally affect them.
                      </p>
                  </div>
                  <!-- Modal footer -->
                  <div class="flex items-center p-4 md:p-5 border-t border-gray-200 rounded-b dark:border-gray-600">
                      <button data-modal-hide="small-modal" type="button" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">I accept</button>
                      <button data-modal-hide="small-modal" type="button" class="ms-3 text-gray-500 bg-white hover:bg-gray-100 focus:ring-4 focus:outline-none focus:ring-gray-200 rounded-lg border border-gray-200 text-sm font-medium px-5 py-2.5 hover:text-gray-900 focus:z-10 dark:bg-gray-700 dark:text-gray-300 dark:border-gray-500 dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-gray-600">Decline</button>
                  </div>
              </div>
          </div>
        </div>
        <div id="span-detail-2" tabindex="-1" class="fixed top-0 left-0 right-0 z-50 hidden w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] max-h-full transition-transform">
          <div class="relative w-full max-w-md max-h-full">
              <!-- Modal content -->
              <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                  <!-- Modal header -->
                  <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t dark:border-gray-600">
                      <h3 class="text-xl font-medium text-gray-900 dark:text-white">
                          Small modal
                      </h3>
                      <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-hide="span-detail-2">
                          <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                              <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                          </svg>
                          <span class="sr-only">Close modal</span>
                      </button>
                  </div>
                  <!-- Modal body -->
                  <div class="p-4 md:p-5 space-y-4">
                      <p class="text-base leading-relaxed text-gray-500 dark:text-gray-400">
                          With less than a month to go before the European Union enacts new consumer privacy laws for its citizens, companies around the world are updating their terms of service agreements to comply.
                      </p>
                      <p class="text-base leading-relaxed text-gray-500 dark:text-gray-400">
                          The European Union’s General Data Protection Regulation (G.D.P.R.) goes into effect on May 25 and is meant to ensure a common set of data rights in the European Union. It requires organizations to notify users as soon as possible of high-risk data breaches that could personally affect them.
                      </p>
                  </div>
                  <!-- Modal footer -->
                  <div class="flex items-center p-4 md:p-5 border-t border-gray-200 rounded-b dark:border-gray-600">
                      <button data-modal-hide="small-modal" type="button" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">I accept</button>
                      <button data-modal-hide="small-modal" type="button" class="ms-3 text-gray-500 bg-white hover:bg-gray-100 focus:ring-4 focus:outline-none focus:ring-gray-200 rounded-lg border border-gray-200 text-sm font-medium px-5 py-2.5 hover:text-gray-900 focus:z-10 dark:bg-gray-700 dark:text-gray-300 dark:border-gray-500 dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-gray-600">Decline</button>
                  </div>
              </div>
          </div>
        </div>
        <div id="span-detail-3" tabindex="-1" class="fixed top-0 left-0 right-0 z-50 hidden w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] max-h-full transition-transform">
          <div class="relative w-full max-w-md max-h-full">
              <!-- Modal content -->
              <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                  <!-- Modal header -->
                  <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t dark:border-gray-600">
                      <h3 class="text-xl font-medium text-gray-900 dark:text-white">
                          Small modal
                      </h3>
                      <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-hide="span-detail-3">
                          <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                              <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                          </svg>
                          <span class="sr-only">Close modal</span>
                      </button>
                  </div>
                  <!-- Modal body -->
                  <div class="p-4 md:p-5 space-y-4">
                      <p class="text-base leading-relaxed text-gray-500 dark:text-gray-400">
                          With less than a month to go before the European Union enacts new consumer privacy laws for its citizens, companies around the world are updating their terms of service agreements to comply.
                      </p>
                      <p class="text-base leading-relaxed text-gray-500 dark:text-gray-400">
                          The European Union’s General Data Protection Regulation (G.D.P.R.) goes into effect on May 25 and is meant to ensure a common set of data rights in the European Union. It requires organizations to notify users as soon as possible of high-risk data breaches that could personally affect them.
                      </p>
                  </div>
                  <!-- Modal footer -->
                  <div class="flex items-center p-4 md:p-5 border-t border-gray-200 rounded-b dark:border-gray-600">
                      <button data-modal-hide="small-modal" type="button" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">I accept</button>
                      <button data-modal-hide="small-modal" type="button" class="ms-3 text-gray-500 bg-white hover:bg-gray-100 focus:ring-4 focus:outline-none focus:ring-gray-200 rounded-lg border border-gray-200 text-sm font-medium px-5 py-2.5 hover:text-gray-900 focus:z-10 dark:bg-gray-700 dark:text-gray-300 dark:border-gray-500 dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-gray-600">Decline</button>
                  </div>
              </div>
          </div>
        </div>
        <div id="span-detail-4" tabindex="-1" class="fixed top-0 left-0 right-0 z-50 hidden w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] max-h-full transition-transform">
          <div class="relative w-full max-w-md max-h-full">
              <!-- Modal content -->
              <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                  <!-- Modal header -->
                  <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t dark:border-gray-600">
                      <h3 class="text-xl font-medium text-gray-900 dark:text-white">
                          Small modal
                      </h3>
                      <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-hide="span-detail-4">
                          <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                              <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                          </svg>
                          <span class="sr-only">Close modal</span>
                      </button>
                  </div>
                  <!-- Modal body -->
                  <div class="p-4 md:p-5 space-y-4">
                      <p class="text-base leading-relaxed text-gray-500 dark:text-gray-400">
                          With less than a month to go before the European Union enacts new consumer privacy laws for its citizens, companies around the world are updating their terms of service agreements to comply.
                      </p>
                      <p class="text-base leading-relaxed text-gray-500 dark:text-gray-400">
                          The European Union’s General Data Protection Regulation (G.D.P.R.) goes into effect on May 25 and is meant to ensure a common set of data rights in the European Union. It requires organizations to notify users as soon as possible of high-risk data breaches that could personally affect them.
                      </p>
                  </div>
                  <!-- Modal footer -->
                  <div class="flex items-center p-4 md:p-5 border-t border-gray-200 rounded-b dark:border-gray-600">
                      <button data-modal-hide="small-modal" type="button" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">I accept</button>
                      <button data-modal-hide="small-modal" type="button" class="ms-3 text-gray-500 bg-white hover:bg-gray-100 focus:ring-4 focus:outline-none focus:ring-gray-200 rounded-lg border border-gray-200 text-sm font-medium px-5 py-2.5 hover:text-gray-900 focus:z-10 dark:bg-gray-700 dark:text-gray-300 dark:border-gray-500 dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-gray-600">Decline</button>
                  </div>
              </div>
          </div>
        </div>
        {{-- Akhir modal boc --}}
         
      </div>
    </div>
  @endsection