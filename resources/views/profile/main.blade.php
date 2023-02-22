<x-app-layout>
    <div class="pt-1">
        <!-- <h2 class="sr-only">Products purchased</h2> -->

        <div class="space-y-6">
          <div class="bg-white sm:rounded-lg ">
            <div class="py-6 px-4 sm:px-6 lg:grid lg:grid-cols-12 lg:gap-x-8 lg:p-8">
              <div class="sm:flex lg:col-span-7">
                <div class="aspect-w-1 aspect-h-1 w-full flex-shrink-0 overflow-hidden rounded-lg sm:aspect-none sm:h-40 sm:w-40">
                  <img src="{{ Auth::user()->profile_photo_url }}" alt="" class="h-full w-full object-cover object-cover sm:h-full sm:w-full rounded-full">
                </div>

                <div class="mt-6 sm:mt-0 sm:ml-6 px-6">
                  <h3 class="text-base font-medium text-gray-900">
                    <a href="#"> {{Auth::user()->name}} </a>
                    <a href="{{route('profile.show')}}"><button type="button" class="ml-40 w-auto px-4 py-2 text-sm font-medium lemodal900 focus:outline-none focus:shadow-outline-blue">Edit Profile</button></a>
                  </h3>
                  <div class="flex flex-wrap items-center justify-start sm:flex-nowrap min-w-0 flex-1 justify-between text:align-right">
                    <p class="mt-2 text-sm font-medium text-gray-900">UX/UI Designer
                    </p> <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="blue" class="absolute ml-28 mt-3 w-6 h-6">
                      <path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75L11.25 15 15 9.75M21 12c0 1.268-.63 2.39-1.593 3.068a3.745 3.745 0 01-1.043 3.296 3.745 3.745 0 01-3.296 1.043A3.745 3.745 0 0112 21c-1.268 0-2.39-.63-3.068-1.593a3.746 3.746 0 01-3.296-1.043 3.745 3.745 0 01-1.043-3.296A3.745 3.745 0 013 12c0-1.268.63-2.39 1.593-3.068a3.745 3.745 0 011.043-3.296 3.746 3.746 0 013.296-1.043A3.746 3.746 0 0112 3c1.268 0 2.39.63 3.068 1.593a3.746 3.746 0 013.296 1.043 3.746 3.746 0 011.043 3.296A3.745 3.745 0 0121 12z" />
                    </svg>

                    <!-- <img src="images/Vector.png"> -->
                  </div>

                  <div class="flex flex-row gap-4 text-gray-800 my-auto text-2xl mx-auto md:mx-0 mt-6">
                      <div class="">
                        <dt><p class="hover:cursor-pointer hover:text-pink-800 text-sm font-bold space-x-6">25</p></dt>
                        <dd class="mt-3 space-y-3 text-gray-500 text-sm">
                          Applied
                        </dd>
                      </div>

                      <div class="px-8">
                        <dt><p class="hover:cursor-pointer hover:text-pink-800 text-sm font-bold space-x-6">19</p></dt>
                        <dd class="mt-3 space-y-3 text-gray-500 text-sm">
                          Reviewed
                        </dd>
                      </div>

                      <div class="px-2">
                        <dt><p class="hover:cursor-pointer hover:text-pink-800 text-sm font-bold space-x-6">14</p></dt>
                        <dd class="mt-3 space-y-3 text-gray-500 text-sm">
                          Interview
                        </dd>
                      </div>
                  </div>
                </div>
              </div>
      </div>
    </div>
  </div>
  </div>


  <div class="mt-4 grid grid-row-1 gap-4 sm:grid-cols-2">
    <ul>
      <li class="shadow-xl rounded-2xl p-4">
      <div >
        <div class="-ml-4 -mt-2 flex flex-wrap items-center justify-between sm:flex-nowrap">
          <div class="ml-4 mt-2">
            <h3 class="text-sm font-medium leading-6 text-black font-bold">Career Bio</h3>
          </div>
          <div class="ml-4 mt-4 flex-shrink-0">
            <a href="#" id="modal-bio" class="trigger"><button type="button" class="block w-full px-4 py-2 mt-4 text-sm font-medium leading-5 text-center text-white transition-colors duration-150 bg-pink-800 border border-transparent rounded-lg active:bg-pink-700 hover:bg-pink-900 focus:outline-none focus:shadow-outline-blue">EDIT</button></a>
          </div>
      </div>
      <p class="text-gray-500 pb-8 text-sm">Kindly update a professional career bio that best describes you </p>

    </li>

    <li class="shadow-xl mt-6 rounded-2xl p-4">
      <div >
        <div class="-ml-4 -mt-2 flex flex-wrap items-center justify-between sm:flex-nowrap">
          <div class="ml-4 mt-2">
            <h3 class="text-sm font-medium leading-6 text-black font-bold">Education Background</h3>
          </div>
          <div class="ml-4 mt-4 flex-shrink-0">
            <a href="educationbackground.html"><button type="button" class="block w-full px-4 py-2 mt-4 text-sm font-medium leading-5 text-center text-white transition-colors duration-150 bg-pink-800 border border-transparent rounded-lg active:bg-pink-700 hover:bg-pink-900 focus:outline-none focus:shadow-outline-blue">EDIT</button></a>
          </div>
      </div>
      <p class="text-gray-500 pb-8 text-sm">Kindly add all your education background </p>

    </li>

    <li class="shadow-xl mt-6 rounded-2xl p-4">
      <div >
        <div class="-ml-4 -mt-2 flex flex-wrap items-center justify-between sm:flex-nowrap">
          <div class="ml-4 mt-2">
            <h3 class="text-sm font-medium leading-6 text-black font-bold">Work Experience</h3>
          </div>
          <div class="ml-4 mt-4 flex-shrink-0">
            <a href="addworkexp.html"><button type="button" class="block w-full px-4 py-2 mt-4 text-sm font-medium leading-5 text-center text-white transition-colors duration-150 bg-pink-800 border border-transparent rounded-lg active:bg-pink-700 hover:bg-pink-900 focus:outline-none focus:shadow-outline-blue">EDIT</button></a>
          </div>
      </div>
      <div class="relative grid grid-cols-1 gap-16 sm:grid-cols-2 sm:gap-x-12 lg:col-span-2 lg:mt-0">
        <p class="text-gray-500 pb-8 text-sm">Kindly add all your work experience including the skills gained over your employment period </p>
      </div>


    </li>

    <li class="shadow-xl mt-6 rounded-2xl p-4">
      <div>
        <div class="-ml-4 -mt-2 flex flex-wrap items-center justify-between sm:flex-wrap">
          <div class="ml-4 mt-2">
            <h3 class="text-sm font-medium leading-6 text-black font-bold">Skillset</h3>
          </div>
          <div class="ml-4 mt-4 flex-shrink-0">
            <a href="#" id="modal-skills" class="trigger"><button type="button" class="block w-full px-4 py-2 mt-4 text-sm font-medium leading-5 text-center text-white transition-colors duration-150 bg-pink-800 border border-transparent rounded-lg active:bg-pink-700 hover:bg-pink-900 focus:outline-none focus:shadow-outline-blue">EDIT</button></a>
          </div>
      </div>

      <dl class="pb-6 space-x-24 sm:space-x-2 sm:flex-wrap mt-4 grid grid-cols-1 gap-12 sm:grid-cols-1 sm:gap-x-6 lg:grid-cols-4 lg:gap-x-8">
        <div class="relative">
          <dt>
            <!-- Heroicon name: outline/check -->
            <svg class="absolute mt-1 h-5 w-5 text-black" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
              <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5" />
            </svg>
            <p class="ml-10 text-sm text-gray-600 whitespace-nowrap">Graphic Design</p>
          </dt>

          <dt>
            <!-- Heroicon name: outline/check -->
            <svg class="absolute mt-1 h-5 w-5 text-black" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
              <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5" />
            </svg>
            <p class="ml-10 text-sm text-gray-600 whitespace-nowrap">UI/UX</p>
          </dt>

          <dt>
            <!-- Heroicon name: outline/check -->
            <svg class="absolute mt-1 h-5 w-5 text-black" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
              <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5" />
            </svg>
            <p class="ml-10 text-sm text-gray-600 whitespace-nowrap">Videography</p>
          </dt>

          <dt>
            <!-- Heroicon name: outline/check -->
            <svg class="absolute mt-1 h-5 w-5 text-black" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
              <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5" />
            </svg>
            <p class="ml-10 text-sm text-gray-600 whitespace-nowrap">Animation</p>
          </dt>
        </div>

        <div class="relative">
          <dt>
            <!-- Heroicon name: outline/check -->
            <svg class="absolute mt-1 h-5 w-5 text-black" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
              <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5" />
            </svg>
            <p class="ml-10 text-sm text-gray-600 whitespace-nowrap">2D Animator</p>
          </dt>

          <dt>
            <!-- Heroicon name: outline/check -->
            <svg class="absolute mt-1 h-5 w-5 text-black" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
              <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5" />
            </svg>
            <p class="ml-10 text-sm text-gray-600 whitespace-nowrap">3D Animator</p>
          </dt>

          <dt>
            <!-- Heroicon name: outline/check -->
            <svg class="absolute mt-1 h-5 w-5 text-black" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
              <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5" />
            </svg>
            <p class="ml-10 text-sm text-gray-600 whitespace-nowrap">Web Developer</p>
          </dt>

          <dt>
            <!-- Heroicon name: outline/check -->
            <svg class="absolute mt-1 h-5 w-5 text-black" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
              <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5" />
            </svg>
            <p class="ml-10 text-sm text-gray-600 whitespace-nowrap">Database Administrator</p>
          </dt>

        </div>
        </dl>

    </li>

    <li class="shadow-xl mt-6 rounded-2xl p-4">
      <div>
        <div class="-ml-4 -mt-2 flex flex-wrap items-center justify-between sm:flex-wrap">
          <div class="ml-4 mt-2">
            <h3 class="text-sm font-medium leading-6 text-black font-bold">Resume</h3>
          </div>
          <div class="ml-4 mt-4 flex-shrink-0">
            <a href="#" id="modal-resume" class=" trigger text-sm text-blue-700">Upload a resume</a>
          </div>
      </div>

      <dl class="pb-6 space-x-24 sm:space-x-2 sm:flex-wrap mt-4 grid grid-cols-1 gap-12 sm:grid-cols-1 sm:gap-x-6 lg:grid-cols-4 lg:gap-x-8">
        <div class="relative">
          <dt>
            <!-- Heroicon name: outline/check -->
            <svg class="absolute mt-1 h-5 w-5 text-blue-700 hover:text-red-700" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
              <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
            </svg>
            <p class="ml-10 text-sm text-blue-700 whitespace-nowrap">UX Designer CV</p>
          </dt>

          <dt>
            <svg class="absolute mt-1 h-5 w-5 text-blue-700 hover:text-red-700" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
              <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
            </svg>
            <p class="ml-10 text-sm text-blue-700 whitespace-nowrap">Videographer</p>
          </dt>
        </div>

        <div class="relative">
          <dt>
            <!-- Heroicon name: outline/check -->
            <svg class="absolute mt-1 h-5 w-5 text-blue-700 hover:text-red-700" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
              <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
            </svg>
            <p class="ml-10 text-sm text-blue-700 whitespace-nowrap">Animator CV</p>
          </dt>

          <dt>
            <svg class="absolute mt-1 h-5 w-5 text-blue-700 hover:text-red-700" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
              <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
            </svg>
            <p class="ml-10 text-sm text-blue-700 whitespace-nowrap">Web Developer CV</p>
          </dt>
        </div>
        </dl>

    </li>

  </ul>

  <div class="shadow-2xl m-4 rounded-2xl p-6">
    <div class="mt-10">
      <div class="-ml-4 -mt-2 flex flex-wrap items-center justify-between sm:flex-wrap">
        <div class="ml-4 mt-2">
          <h3 class="text-lg font-medium leading-6 text-black font-bold">Certificates and Awards</h3>
        </div>
        <div class="ml-4 mt-2 flex-shrink-0">
          <a href="#" id="modal-certificate" class="trigger"><p class=" text-sm text-blue-700" >Upload Certificates and Awards</p></a>
        </div>
    </div>
    <p class="text-gray-600 mt-2 text-sm">Kindly update a professional career Bio that best describes you</p>
    </div>

    <div class="mt-10">
      <div class="-ml-4 -mt-2 flex flex-wrap items-center justify-between sm:flex-nowrap">
        <div class="ml-4 mt-2">
          <h3 class="text-lg font-medium leading-6 text-black font-bold">Portfolio</h3>
        </div>
        <div class="ml-4 mt-2 flex-shrink-0">
          <a href="#"id="modal-portfolio" class="trigger"><p class="  text-sm text-blue-700">Upload portfolio</p></a>
        </div>
    </div>
    <div class="mt-4 grid grid-cols-3 gap-4 flex items-center">
      <div class="mb-4">
        <img src="images/image 18.png" class="max-w-full h-auto rounded-lg" alt="">
      </div>

      <div class="mb-4">
        <img src="images/image 14.png" class="max-w-full h-auto rounded-lg" alt="">
      </div>

      <div class="mb-4">
        <img src="images/image 13.png" class="max-w-full h-auto rounded-lg" alt="">
      </div>

      <div class="mb-4">
        <img src="images/image 15.png" class="max-w-full h-auto rounded-lg" alt="">
      </div>

      <div class="mb-4">
        <img src="images/image 16.png" class="max-w-full h-auto rounded-lg" alt="">
      </div>

      <div class="mb-4">
        <img src="images/image 17.png" class="max-w-full h-auto rounded-lg" alt="">
      </div>
    </div>
    </div>

    <div class="mt-10">
      <div class="-ml-4 -mt-2 flex flex-wrap items-center justify-between sm:flex-wrap">
        <div class="ml-4 mt-2">
          <h3 class="text-lg font-medium leading-6 text-black font-bold">Job Application</h3>
        </div>
        <div class="ml-4 mt-2 flex-shrink-0">
          <a href=""><p class="text-sm text-blue-700">View my job application</p></a>
        </div>
    </div>
    <div class="mt-4 grid grid-cols-1 gap-4 flex items-center">
      <div class="mb-4">
        <ul role="list" class="-mb-8 mt-6">
          <li>
              <div class="relative pb-8">
                  <span class="block inline-flex items-center justify-center rounded-md p-3" aria-hidden="true"></span>
                  <div class="relative flex space-x-3">
                    <div>
                      <span class="h-8 w-8 rounded-full flex items-center justify-center ">
                        <!-- Heroicon name: mini/user -->
                        <svg class="w-10 h-10 text-blue-600 fill-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 26 26">
                          <path
                              d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z"
                          />
                          </svg>
                      </span>
                    </div>
                    <div class="flex min-w-0 flex-1 justify-between space-x-4 ">
                      <div>
                          <p><a href="#" class="font-medium text-gray-900">Front End Developer</a></p>
                          <p class="text-gray-600">Facebook</p>
                      </div>

                    </div>

                    <div class="flex min-w-0 flex-1 justify-end space-x-4 pt-1.5">
                      <div>
                          <p><a href="#" class="mt-8 text-gray-600">2 days ago</a></p>
                      </div>
                    </div>

                  </div>
                </div>
          </li>

          <li>
            <div class="relative pb-8">
                <span class="block inline-flex items-center justify-center rounded-md" aria-hidden="true"></span>
                <div class="relative flex space-x-3">
                  <div>
                    <span class="h-8 w-8 rounded-full flex items-center justify-center ">
                      <!-- Heroicon name: mini/user -->
                      <svg class="w-10 h-10 text-blue-600 fill-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 26 26">
                        <path
                            d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z"
                        />
                        </svg>
                    </span>
                  </div>
                  <div class="flex min-w-0 flex-1 justify-between space-x-4 ">
                    <div>
                        <p><a href="#" class="font-medium text-gray-900">Front End Developer</a></p>
                        <p class="text-gray-600">Facebook</p>
                    </div>

                  </div>

                  <div class="flex min-w-0 flex-1 justify-end space-x-4 pt-1.5">
                    <div>
                        <p><a href="#" class="mt-8 text-gray-600">2 days ago</a></p>
                    </div>
                  </div>

                </div>
              </div>
        </li>

        <li>
          <div class="relative pb-8">
              <span class="block inline-flex items-center justify-center rounded-md" aria-hidden="true"></span>
              <div class="relative flex space-x-3">
                <div>
                  <span class="h-8 w-8 rounded-full flex items-center justify-center ">
                    <!-- Heroicon name: mini/user -->
                    <svg class="w-10 h-10 text-blue-600 fill-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 26 26">
                      <path
                          d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z"
                      />
                      </svg>
                  </span>
                </div>
                <div class="flex min-w-0 flex-1 justify-between space-x-4 ">
                  <div>
                      <p><a href="#" class="font-medium text-gray-900">Front End Developer</a></p>
                      <p class="text-gray-600">Facebook</p>
                  </div>

                </div>

                <div class="flex min-w-0 flex-1 justify-end space-x-4 pt-1.5">
                  <div>
                      <p><a href="#" class="mt-8 text-gray-600">2 days ago</a></p>
                  </div>
                </div>

              </div>
            </div>
      </li>
      </ul>

      </div>
    </div>
    </div>

  </div>



  </div>

</x-app-layout>
