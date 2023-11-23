@extends('layout.main')


  @section('coba')
    <div class=" max-w-sm w-full">
      <div class="rounded-lg dark:border-gray-700 mt-20 mb-24" data-aos="fade-up">
        <div class="flex flex-col h-auto mb-2 rounded bg-red-500 dark:bg-gray-800">
          <div class="w-full h-full flex justify-center items-center bg-black">
            <img class="w-full h-auto " src="image/profilpic.jpeg"/>
          </div>
          <div class="flex w-full h-32 bg-white dark:bg-black">
            <div class="w-auto h-auto mt-3 ml-2">
              <div class="flex -flex-wrap mb-1 mt-1">
                <svg class="w-6 h-6 mr-4 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                  <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m7 10 2 2 4-4m6 2a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z"/>
                </svg>
                <svg class="w-6 h-6 mr-4 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 18">
                    <path d="M18 0H2a2 2 0 0 0-2 2v10a2 2 0 0 0 2 2h3.546l3.2 3.659a1 1 0 0 0 1.506 0L13.454 14H18a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2Zm-8 10H5a1 1 0 0 1 0-2h5a1 1 0 1 1 0 2Zm5-4H5a1 1 0 0 1 0-2h10a1 1 0 1 1 0 2Z"/>
                </svg>
                <svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 18 16">
                  <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1.248 15C.22 11.77 2.275 4.232 9.466 4.232V2.079a1.025 1.025 0 0 1 1.644-.862l5.479 4.307a1.108 1.108 0 0 1 0 1.723l-5.48 4.307a1.026 1.026 0 0 1-1.643-.861V8.539C2.275 9.616 1.248 15 1.248 15Z"/>
                </svg>
              </div>
              <h1 class="font-semibold  text-black dark:text-white">@BlackRing.Side</h1>
              <p class=" text-black dark:text-white">Lorem ipsum dolor sit amet consectetur adipisicing elit. Illum, deleniti.</p>
            </div>
          </div>
        </div>

        <div class="grid h-auto w-full bg-gray-100 dark:bg-gray-900 mb-2 pb-5 "data-aos="fade-up">
          <h1 class="text-lg font-semibold text-black dark:text-white m-2">Universe for you</h1>
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

        <div class="flex flex-col h-auto mb-2 rounded dark:bg-gray-800"data-aos="fade-up">
          <div class="w-full h-full flex justify-center items-center bg-black">
            <img class="w-full h-auto " src="image/logo 4.jpg"/>
          </div>
          <div class="flex w-full h-32 bg-white dark:bg-black">
            <div class="w-auto h-auto mt-3 ml-2">
              <div class="flex -flex-wrap mb-1 mt-1">
                <svg class="w-6 h-6 mr-4 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                  <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m7 10 2 2 4-4m6 2a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z"/>
                </svg>
                <svg class="w-6 h-6 mr-4 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 18">
                    <path d="M18 0H2a2 2 0 0 0-2 2v10a2 2 0 0 0 2 2h3.546l3.2 3.659a1 1 0 0 0 1.506 0L13.454 14H18a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2Zm-8 10H5a1 1 0 0 1 0-2h5a1 1 0 1 1 0 2Zm5-4H5a1 1 0 0 1 0-2h10a1 1 0 1 1 0 2Z"/>
                </svg>
                <svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 18 16">
                  <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1.248 15C.22 11.77 2.275 4.232 9.466 4.232V2.079a1.025 1.025 0 0 1 1.644-.862l5.479 4.307a1.108 1.108 0 0 1 0 1.723l-5.48 4.307a1.026 1.026 0 0 1-1.643-.861V8.539C2.275 9.616 1.248 15 1.248 15Z"/>
                </svg>
              </div>
              <h1 class="font-semibold  text-black dark:text-white">@BlackRing.Side</h1>
              <p class=" text-black dark:text-white">Lorem ipsum dolor sit amet consectetur adipisicing elit. Illum, deleniti.</p>
            </div>
          </div>
        </div>

        
       
        
        
      </div>
    </div>
  @endsection