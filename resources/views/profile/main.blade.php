<x-app-layout>
    <div class="pt-1">
        <!-- <h2 class="sr-only">Products purchased</h2> -->

        <div class="space-y-6">
          <div class="bg-white sm:rounded-lg ">
            <div class="py-6 px-4 sm:px-6 lg:grid lg:grid-cols-12 lg:gap-x-8 lg:p-8">
              <div class="sm:flex lg:col-span-7">
                <div class="aspect-w-1 aspect-h-1 w-full flex-shrink-0 overflow-hidden rounded-lg sm:aspect-none sm:h-40 sm:w-40">
                  <a href="{{route('profile.show')}}">                  <img src="{{ Auth::user()->profile_photo_url }}" alt="" class="h-full w-full object-cover object-cover sm:h-full sm:w-full rounded-full">
                  </a>
                </div>

                <div class="mt-6 sm:mt-0 sm:ml-6 px-6">
                  <h3 class="text-base font-medium text-gray-900">
                    <a href="#"> {{Auth::user()->name}} </a>
                    <a href="{{route('profile.show')}}"><button type="button" class="ml-40 w-auto px-4 py-2 text-sm font-medium lemodal900 focus:outline-none focus:shadow-outline-blue">Edit Profile</button></a>
                  </h3>
                  <div class="flex flex-wrap items-center justify-start sm:flex-nowrap min-w-0 flex-1 justify-between text:align-right">
                    <p class="mt-2 text-sm font-medium text-gray-900"> {{ ucfirst(Auth::user()->skills->first()->name ?? "No Skill Yet")}}
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
            <a  href="{{route('profile.show')}}" id="modal-bio" class="trigger">
              <button type="button" class="block w-full px-4 py-2 mt-4 text-sm font-medium leading-5 text-center text-white transition-colors duration-150 bg-pink-800 border border-transparent rounded-lg active:bg-pink-700 hover:bg-pink-900 focus:outline-none focus:shadow-outline-blue">
              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24">
                <path fill="#fff" d="M21.5 5.5l-3-3c-.5-.5-1.2-.5-1.7 0l-1.8 1.8 3.7 3.7 1.8-1.8c.5-.5.5-1.2 0-1.7zM2.5 18.5V22h3.5l11.6-11.6-3.5-3.5L2.5 18.5z"/>
                <path d="M0 0h24v24H0z" fill="none"/>
              </svg>
              
            </button></a>
          </div>
      </div>
      @if (Auth::user()->bio)
      <p class="text-gray-500 pb-8 text-sm"> {{Auth::user()->bio}} </p>
      @else
      <p class="text-gray-500 pb-8 text-sm"> No career bio now, please click the above code to add </p>

      @endif

    </li>

    {{-- @livewire('update') --}}

    <li class="shadow-xl mt-6 rounded-2xl p-4">
      {{-- <div >
        <div class="-ml-4 -mt-2 flex flex-wrap items-center justify-between sm:flex-nowrap">
          <div class="ml-4 mt-2">
            <h3 class="text-sm font-medium leading-6 text-black font-bold">Education Background</h3>
          </div>
          <div class="ml-4 mt-4 flex-shrink-0">
            <a href="{{route('profile.education.create')}}"><button type="button" class="block w-full px-4 py-2 mt-4 text-sm font-medium leading-5 text-center text-white transition-colors duration-150 bg-pink-800 border border-transparent rounded-lg active:bg-pink-700 hover:bg-pink-900 focus:outline-none focus:shadow-outline-blue"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24">
              <path fill="#fff" d="M10 10V2c0-.6.4-1 1-1h2c.6 0 1 .4 1 1v8h8c.6 0 1 .4 1 1v2c0 .6-.4 1-1 1h-8v8c0 .6-.4 1-1 1h-2c-.6 0-1-.4-1-1v-8H2c-.6 0-1-.4-1-1v-2c0-.6.4-1 1-1h8z"/>
            </svg>
            </button></a>
          </div>
      </div>
      @forelse (Auth::user()->educations as $education)
      <p class="text-gray-500 pb-2 text-sm"> {{$education->name}} - {{$education->field}} 
        <br>
        {{$education->start_date->format('Y')}} - {{$education->end_date->format('Y')}}
        </p> 
      @empty
      <p class="text-gray-500 pb-2 text-sm">Please add education details </p> 
      @endforelse  --}}
    
      <div class="px-6 lg:px-8">
        <div class="sm:flex sm:items-center">
          <div class="sm:flex-auto">
            <h1 class="text-xl font-semibold text-gray-900">Education</h1>
            <p class="mt-2 text-sm text-gray-700">Your education  list.</p>
          </div>
          <div class="mt-4 sm:mt-0 sm:ml-16 sm:flex-none">
            <a href="{{route('profile.education.create')}}" type="button" class="block rounded-md bg-pink-700 py-1.5 px-3 text-center text-sm font-semibold leading-6 text-white shadow-sm hover:bg-pink-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">
              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24">
                <path fill="#fff" d="M10 10V2c0-.6.4-1 1-1h2c.6 0 1 .4 1 1v8h8c.6 0 1 .4 1 1v2c0 .6-.4 1-1 1h-8v8c0 .6-.4 1-1 1h-2c-.6 0-1-.4-1-1v-8H2c-.6 0-1-.4-1-1v-2c0-.6.4-1 1-1h8z"/>
              </svg>
            </a>
          </div>
        </div>
        <div class="mt-8 flow-root">
          <div class="-my-2 -mx-6 lg:-mx-8">
            <div class="inline-block min-w-full py-2 align-middle">
              <table class="min-w-full border-separate border-spacing-0">
                <thead>
                  <tr>
                    <th scope="col" class="sticky top-0 z-10 border-b border-gray-300 bg-white bg-opacity-75 py-3.5 pl-6 pr-3 text-left text-sm font-semibold text-gray-900 backdrop-blur backdrop-filter lg:pl-8">Institution Name</th>
                    <th scope="col" class="sticky top-0 z-10 hidden border-b border-gray-300 bg-white bg-opacity-75 px-3 py-3.5 text-left text-sm font-semibold text-gray-900 backdrop-blur backdrop-filter sm:table-cell">Field</th>
                    <th scope="col" class="sticky top-0 z-10 border-b border-gray-300 bg-white bg-opacity-75 py-3.5 pr-6 pl-3 backdrop-blur backdrop-filter lg:pr-8">From - To
                    </th>
                  </tr>
                </thead>
                <tbody>
                  @forelse (Auth::user()->educations as $education)
                  <tr>
                    <td class="whitespace-nowrap border-b border-gray-200 py-4 pl-6 pr-3 text-sm font-medium text-gray-900 lg:pl-8">{{$education->name}} </td>
                    <td class="whitespace-nowrap border-b border-gray-200 px-3 py-4 text-sm text-gray-500 hidden sm:table-cell">{{$education->field}}</td>
                    {{-- <td class="whitespace-nowrap border-b border-gray-200 px-3 py-4 text-sm text-gray-500 hidden lg:table-cell">lindsay.walton@example.com</td> --}}
                    {{-- <td class="whitespace-nowrap border-b border-gray-200 px-3 py-4 text-sm text-gray-500">Member</td> --}}
                    <td class="relative whitespace-nowrap border-b border-gray-200 py-4 pr-6 pl-3 text-left text-sm font-medium lg:pr-8">
                      {{$education->start_date->format('Y')}}-{{$education->end_date->format('Y')}}
                    </td>
                  </tr>
                  @empty
                  <tr>
                    <td>                    
                      No Experience added yet
                    </td>

<<<<<<< HEAD
      <blockquote>{{$education->start_date->format('Y')}}-{{$education->end_date->format('Y')}}</blockquote>
      @endforeach
=======
                  </tr>
                  @endforelse
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </li>

    <li class="shadow-xl mt-6 rounded-2xl p-4">
     
      <div class="px-6 lg:px-8">
        <div class="sm:flex sm:items-center">
          <div class="sm:flex-auto">
            <h1 class="text-xl font-semibold text-gray-900">Work Experience</h1>
            <p class="mt-2 text-sm text-gray-700">Your job experience list.</p>
          </div>
          <div class="mt-4 sm:mt-0 sm:ml-16 sm:flex-none">
            <a href="{{route('experience.create')}}" type="button" class="block rounded-md bg-pink-700 py-1.5 px-3 text-center text-sm font-semibold leading-6 text-white shadow-sm hover:bg-pink-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">
              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24">
                <path fill="#fff" d="M10 10V2c0-.6.4-1 1-1h2c.6 0 1 .4 1 1v8h8c.6 0 1 .4 1 1v2c0 .6-.4 1-1 1h-8v8c0 .6-.4 1-1 1h-2c-.6 0-1-.4-1-1v-8H2c-.6 0-1-.4-1-1v-2c0-.6.4-1 1-1h8z"/>
              </svg>
            </a>
          </div>
        </div>
        <div class="mt-8 flow-root">
          <div class="-my-2 -mx-6 lg:-mx-8">
            <div class="inline-block min-w-full py-2 align-middle">
              <table class="min-w-full border-separate border-spacing-0">
                <thead>
                  <tr>
                    <th scope="col" class="sticky top-0 z-10 border-b border-gray-300 bg-white bg-opacity-75 py-3.5 pl-6 pr-3 text-left text-sm font-semibold text-gray-900 backdrop-blur backdrop-filter lg:pl-8">Employer Name</th>
                    <th scope="col" class="sticky top-0 z-10 hidden border-b border-gray-300 bg-white bg-opacity-75 px-3 py-3.5 text-left text-sm font-semibold text-gray-900 backdrop-blur backdrop-filter sm:table-cell">Job Title</th>
                    <th scope="col" class="sticky top-0 z-10 border-b border-gray-300 bg-white bg-opacity-75 py-3.5 pr-6 pl-3 backdrop-blur backdrop-filter lg:pr-8">From - To
                    </th>
                  </tr>
                </thead>
                <tbody>
                  @forelse (Auth::user()->experiences as $experience)
                  <tr>
                    <td class="whitespace-nowrap border-b border-gray-200 py-4 pl-6 pr-3 text-sm font-medium text-gray-900 lg:pl-8">{{$experience->employer_name}} </td>
                    <td class="whitespace-nowrap border-b border-gray-200 px-3 py-4 text-sm text-gray-500 hidden sm:table-cell">{{$experience->job_title}}</td>
                    {{-- <td class="whitespace-nowrap border-b border-gray-200 px-3 py-4 text-sm text-gray-500 hidden lg:table-cell">lindsay.walton@example.com</td> --}}
                    {{-- <td class="whitespace-nowrap border-b border-gray-200 px-3 py-4 text-sm text-gray-500">Member</td> --}}
                    <td class="relative whitespace-nowrap border-b border-gray-200 py-4 pr-6 pl-3 text-left text-sm font-medium lg:pr-8">
                      {{$experience->start_date->format('Y')}}-{{$experience->end_date->format('Y')}}
                    </td>
                  </tr>
                  @empty
                  <tr>
                    <td class="relative whitespace-nowrap border-b border-gray-200 py-4 pr-6 pl-3 text-left text-sm font-medium lg:pr-8">                    No Skill added yet
                    </td>

                  </tr>
                  @endforelse
                  
      
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
      
      
>>>>>>> 96a0808c6c11a744d8212dd8ba0e5e65891ab9fe

    </li>

    <li class="shadow-xl mt-6 rounded-2xl p-4">
<<<<<<< HEAD
      <div >
        <div class="-ml-4 -mt-2 flex flex-wrap items-center justify-between sm:flex-nowrap">
          <div class="ml-4 mt-2">
            <h3 class="text-sm font-medium leading-6 text-black font-bold">Work Experience</h3>
          </div>
          <div class="ml-4 mt-4 flex-shrink-0">
            <a href="{{route('profile.workexp.create')}}"><button type="button" class="block w-full px-4 py-2 mt-4 text-sm font-medium leading-5 text-center text-white transition-colors duration-150 bg-pink-800 border border-transparent rounded-lg active:bg-pink-700 hover:bg-pink-900 focus:outline-none focus:shadow-outline-blue">EDIT</button></a>
          </div>
      </div>
      @foreach (Auth::user()->workexp as $workexp)
      <p class="text-gray-500 pb-2 text-sm"> {{$workexp->name}} - {{$workexp->title}} </p> <br>

      <blockquote>{{$workexp->start_date->format('Y')}}-{{$workexp->end_date->format('Y')}}</blockquote>
      @endforeach


    </li>

    <li class="shadow-xl mt-6 rounded-2xl p-4">
      <div>
=======
      {{-- <div>
>>>>>>> 96a0808c6c11a744d8212dd8ba0e5e65891ab9fe
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
        </dl> --}}
        <div class="px-6 lg:px-8">
          <div class="sm:flex sm:items-center">
            <div class="sm:flex-auto">
              <h1 class="text-xl font-semibold text-gray-900">Your Skills</h1>
              <p class="mt-2 text-sm text-gray-700">Your skills list.</p>
            </div>
            <div class="mt-4 sm:mt-0 sm:ml-16 sm:flex-none">
              <a href="{{route('skills.create')}}" type="button" class="block rounded-md bg-pink-700 py-1.5 px-3 text-center text-sm font-semibold leading-6 text-white shadow-sm hover:bg-pink-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24">
                  <path fill="#fff" d="M10 10V2c0-.6.4-1 1-1h2c.6 0 1 .4 1 1v8h8c.6 0 1 .4 1 1v2c0 .6-.4 1-1 1h-8v8c0 .6-.4 1-1 1h-2c-.6 0-1-.4-1-1v-8H2c-.6 0-1-.4-1-1v-2c0-.6.4-1 1-1h8z"/>
                </svg>
              </a>
            </div>
          </div>
          <div class="mt-8 flow-root">
            <div class="-my-2 -mx-6 lg:-mx-8">
              <div class="inline-block min-w-full py-2 align-middle">
                <table class="min-w-full border-separate border-spacing-0">
                  <thead>
                    <tr>
                      <th scope="col" class="sticky top-0 z-10 border-b border-gray-300 bg-white bg-opacity-75 py-3.5 pl-6 pr-3 text-left text-sm font-semibold text-gray-900 backdrop-blur backdrop-filter lg:pl-8">Skills</th>
                      </th>
                    </tr>
                  </thead>
                  <tbody>
                    @forelse (Auth::user()->skills as $skill)
                    <tr>
                      <td class="whitespace-nowrap border-b border-gray-200 py-4 pl-6 pr-3 text-sm font-medium text-gray-900 lg:pl-8">{{$skill->name}} </td>
                      {{-- <td class="whitespace-nowrap border-b border-gray-200 px-3 py-4 text-sm text-gray-500 hidden lg:table-cell">lindsay.walton@example.com</td> --}}
                      {{-- <td class="whitespace-nowrap border-b border-gray-200 px-3 py-4 text-sm text-gray-500">Member</td> --}}
                      
                    </tr>
                    @empty
                    <tr>
                      <td class="whitespace-nowrap border-b border-gray-200 py-4 pl-6 pr-3 text-sm font-medium text-gray-900 lg:pl-8">No Skill added yet</td>
                    </tr>
                    @endforelse
                    
        
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>

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


  {{-- Bio Modal --}}
  <div id="modal-bio" class="modal">
    <div id="modal-bio" class="mt-24 modal bg-black bg-opacity-50 absolute inset-0 hidden flex justify-center items-center z-10"  >
      <div class="relative w-full max-w-lg h-full lg:h-auto">
        <div id="modal-content" class="bg-gray-200 max-w-4xl rounded-2xl shadow-xl text-gray-800 text-center">
          <div class="modal-title w-full justify-center items-center rounded-xl border-b border-pink-900 bg-gradient-to-r from-teal-800 to-pink-900 shadow-sm hover:from-teal-700 hover:to-pink-900">
            <h3 class="text-md font-medium text-white dark:text-white p-2">Update your Bio</h3>
            <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-toggle="small-modal">
            </button>
          </div>

          <div class="sm:col-span-2 m-6 rounded-lg">
            <div class="flex justify-between">
              <label for="message" class="block text-sm font-medium text-gray-900">Bio</label>
              <!-- <span id="message-max" class="text-sm text-gray-500">Max. 500 characters</span> -->
            </div>
            <div class="mt-1">
              <textarea id="message" name="message" rows="4" class="block w-full rounded-md border border-gray-300 py-3 px-4 text-gray-900 shadow-sm focus:border-indigo-500 focus:ring-indigo-500" aria-describedby="message-max"></textarea>
            </div>
          </div>
          <div class="mt-5 sm:mt-6 sm:grid sm:grid-cols-2 sm:gap-3 sm:grid-flow-row-dense" id="buttons">
            <input type="submit" class="mb-5 w-full inline-flex items-center justify-center whitespace-nowrap rounded-md border border-transparent bg-gradient-to-r from-pink-900 to-pink-900 bg-origin-border px-2 py-2 text-base font-medium text-white shadow-sm hover:from-pink-700 hover:to-teal-900">
            <button id="modal-bio" type="button" class="close-modal mb-5 w-full inline-flex items-center justify-center whitespace-nowrap rounded-md border border-transparent bg-gradient-to-r from-pink-900 to-pink-900 bg-origin-border px-2 py-2 text-base font-medium text-white shadow-sm hover:from-pink-700 hover:to-teal-900" >Cancel</button>
          </div>
        </div>
      </div>
    </div>
  </div>
</x-app-layout>
