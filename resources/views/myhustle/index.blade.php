<x-app-layout>
    <div class="flex h-auto flex-col lg:grid-col-3 overscroll-contain mb-6">
        <div class="flex min-h-0 ml-6 ">
          <!-- Narrow sidebar-->
        <div id="categories">
          <div class="rounded-xl mt-6 mb-6">
            <p class="rounded-lg px-4 font-semibold border-b border-gray-300 bg-gray-200">Categories</p>
            <div class ="category">
              <nav aria-label="Sidebar" class="md:block md:flex-shrink-0 h-full w-96 shadow-2xl rounded-2xl mt-3">
                <div>
                  <div class="category md:flex md:items-center md:justify-between p-3">
                    <div class="min-w-0 flex flex-row">
                      <a href="#" class="flex-1 bg-white text-white flex-shrink-0 inline-flex items-center justify-center h-14 w-14">
                        <img class="h-10 w-auto sm:h-10 rounded-full" src="images/myhustle/electronics.jpg" alt="">    
                      </a>
                      <p class="text-sm mt-4 ml-2 text-gray-700">Electronics</p>
                    </div>
                    <div class="mt-4 flex md:mt-0 md:ml-4 p-4">
                      <a href=""><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="gray" class="dropdown-toggle w-4 h-4" id="dropdownDefaultButton" data-dropdown-toggle="dropdown">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 4.5l7.5 7.5-7.5 7.5" />
                      </svg></a>
                    </div>
                  </div>
                  <!-- subcategory -->
                <div class="bg-white dropdown-menu mt-6 ml-6 w-96 overscroll-contain z-10 hidden" id="dropdown">
                        <ul>
                          <li class="shadow-xl rounded-2xl p-4">
                          <div >
                            <div class="-ml-4 -mt-2 flex flex-wrap items-center justify-between sm:flex-nowrap bg-gray-200 rounded-lg ">
                              <div class="ml-4 mt-2 ">
                                <h3 class="text-sm font-medium leading-6 text-black font-bold ">Sub-Categories</h3>
                              </div>
                          </div>
                          <ul class="ml-6 mt-4">
                            <li class="flex flex-row gap-3">Mobile phones <p class="text-gray-600">| 2789</p></li>
                            <li class="flex flex-row gap-3">Smart Watches <p class="text-gray-600">| 7900</p></li>
                            <li class="flex flex-row gap-3">Accessories for mobile phones <p class="text-gray-600">| 5000</p></li>
                          </ul>
                            
                        </li>
                  
                        <li class="shadow-xl mt-5 rounded-2xl p-4">
                          <div >
                            <div class="-ml-4 -mt-2 flex flex-wrap items-center justify-between sm:flex-nowrap bg-gray-200 rounded-lg">
                              <div class="ml-4 mt-2">
                                <h3 class="text-sm font-bold leading-6 text-black font-bold">Location</h3>
                              </div>
                          </div>
                          <div class="flex flex-row flex-wrap justify-between sm:flex-nowrap">
                            <a href="#"><p class="text-gray-600 pb-3 text-sm ml-6 mt-2">All Kenya </p></a>
                          <div class="flex justify-end align-right flex-shrink-0">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                              <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 4.5l7.5 7.5-7.5 7.5" />
                            </svg>
                            
                          </div>
                          </div>
                          
                            
                        </li>
              
                        <li class="shadow-xl rounded-2xl p-4 mt-5">
                          <div >
                            <div class="-ml-4 -mt-2 flex flex-wrap items-center justify-between sm:flex-nowrap bg-gray-200 rounded-lg">
                              <div class="ml-4 mt-2">
                                <h3 class="text-sm font-medium leading-6 text-black font-bold">Price, Kshs</h3>
                              </div>
                          </div>
                          <div class="gap-2 mt-3 flex flex-row">
                            <div>
                              <div class="mt-1">
                                
                              </div>
                            </div>
                            <button type="button" class="text-gray-500 block w-32 rounded-md border border-gray-500 bg-white px-4 items-center py-3 px-4 shadow-sm focus:ring-2 focus:ring-offset-2 focus:ring-pink-900">Min</button>
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="mt-4 w-6 h-6">
                              <path stroke-linecap="round" stroke-linejoin="round" d="M18 12H6" />
                            </svg>              
                            <button type="button" class="text-gray-500 block w-32 rounded-md border border-gray-500 bg-white px-4 items-center py-3 px-4 shadow-sm focus:ring-2 focus:ring-offset-2 focus:ring-pink-900">Max</button>
                          </div>
                          
              
                          <ul class="ml-6 mt-4">
                            <div class="relative flex items-start">
                              <div class="flex h-5 items-center">
                                <input id="comments" aria-describedby="comments-description" name="comments" type="checkbox" class="h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-500">
                              </div>
                            <div class="ml-3 text-sm">
                              <li class="flex flex-row gap-3">Under 500 <p class="text-gray-600">| 2789 ads</p></li>
                              </div>
                            </div>
                            <div class="relative flex items-start">
                              <div class="flex h-5 items-center">
                                <input id="comments" aria-describedby="comments-description" name="comments" type="checkbox" class="h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-500">
                              </div>
                            <div class="ml-3 text-sm">
                              <li class="flex flex-row gap-3">500 - 2K <p class="text-gray-600">| 5000 ads</p></li>
                              </div>
                            </div>
              
                            <div class="relative flex items-start">
                              <div class="flex h-5 items-center">
                                <input id="comments" aria-describedby="comments-description" name="comments" type="checkbox" class="h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-500">
                              </div>
                            <div class="ml-3 text-sm">
                              <li class="flex flex-row gap-3">2K - 5K <p class="text-gray-600">| 7900 ads</p></li>
                              </div>
                            </div>
              
                            <div class="relative flex items-start">
                              <div class="flex h-5 items-center">
                                <input id="comments" aria-describedby="comments-description" name="comments" type="checkbox" class="h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-500">
                              </div>
                            <div class="ml-3 text-sm">
                              <li class="flex flex-row gap-3"> >5K  <p class="text-gray-600">| 3000 ads</p></li>
                              </div>
                            </div>
                            
                            <div class="-ml-4 -mt-2 flex flex-wrap items-center justify-between sm:flex-nowrap">
                              <div class="ml-4 mt-2">
                                <a href="#"><button type="button" class="block w-full px-4 py-2 mt-4 text-sm font-medium leading-5 text-center text-pink-900 text-sm border border-pink-700 rounded-lg">clear</button></a>
                              </div>
                              <div class="ml-4 mt-4 flex-shrink-0">
                                <a href="#"><button type="button" class="block w-full px-4 py-2 mt-4 text-sm font-medium leading-5 text-center text-teal-600 text-sm border border-teal-500 rounded-lg">Apply</button></a>
                              </div>
                          </div>
                            
                            
                            
                          </ul>
                            
                        </li>
                  
                      </ul>
                      
                </div>
                <!-- subcategory -->
                </div>
                
                <div>
                  <div class="category md:flex md:items-center md:justify-between p-3">
                    <div class="min-w-0 flex flex-row">
                      <a href="#" class="flex-1 bg-white text-white flex-shrink-0 inline-flex items-center justify-center h-14 w-14">
                        <img class="h-10 w-auto sm:h-10 rounded-full" src="images/myhustle/mobile.webp" alt="">    
                      </a>
                      <p class="text-sm mt-4 ml-2 text-gray-700">Phones & Tablets</p>
                    </div>
                    <div class="mt-4 flex md:mt-0 md:ml-4 p-4">
                      <a href=""><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="gray" class="dropdown-toggle w-4 h-4" id="dropdownDefaultButton" data-dropdown-toggle="dropdown">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 4.5l7.5 7.5-7.5 7.5" />
                      </svg></a>
                    </div>
                  </div>
                  <!-- subcategory -->
                <div class="bg-white dropdown-menu mt-6 ml-6 w-96 overscroll-contain z-10 hidden" id="dropdown">
                        <ul>
                          <li class="shadow-xl rounded-2xl p-4">
                          <div >
                            <div class="-ml-4 -mt-2 flex flex-wrap items-center justify-between sm:flex-nowrap bg-gray-200 rounded-lg ">
                              <div class="ml-4 mt-2 ">
                                <h3 class="text-sm font-medium leading-6 text-black font-bold ">Sub-Categories</h3>
                              </div>
                          </div>
                          <ul class="ml-6 mt-4">
                            <li class="flex flex-row gap-3">Mobile phones <p class="text-gray-600">| 2789</p></li>
                            <li class="flex flex-row gap-3">Smart Watches <p class="text-gray-600">| 7900</p></li>
                            <li class="flex flex-row gap-3">Accessories for mobile phones <p class="text-gray-600">| 5000</p></li>
                          </ul>
                            
                        </li>
                  
                        <li class="shadow-xl mt-5 rounded-2xl p-4">
                          <div >
                            <div class="-ml-4 -mt-2 flex flex-wrap items-center justify-between sm:flex-nowrap bg-gray-200 rounded-lg">
                              <div class="ml-4 mt-2">
                                <h3 class="text-sm font-medium leading-6 text-black font-bold">Location</h3>
                              </div>
                          </div>
                          <div class="flex flex-row flex-wrap justify-between sm:flex-nowrap">
                            <a href="#"><p class="text-gray-600 pb-3 text-sm ml-6 mt-2">All Kenya </p></a>
                          <div class="flex justify-end align-right flex-shrink-0">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                              <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 4.5l7.5 7.5-7.5 7.5" />
                            </svg>
                            
                          </div>
                          </div>
                          
                            
                        </li>
              
                        <li class="shadow-xl rounded-2xl p-4 mt-5">
                          <div >
                            <div class="-ml-4 -mt-2 flex flex-wrap items-center justify-between sm:flex-nowrap bg-gray-200 rounded-lg">
                              <div class="ml-4 mt-2">
                                <h3 class="text-sm font-medium leading-6 text-black font-bold">Price, Kshs</h3>
                              </div>
                          </div>
                          <div class="gap-2 mt-3 flex flex-row">
                            <div>
                              <div class="mt-1">
                                
                              </div>
                            </div>
                            <button type="button" class="text-gray-500 block w-32 rounded-md border border-gray-500 bg-white px-4 items-center py-3 px-4 shadow-sm focus:ring-2 focus:ring-offset-2 focus:ring-pink-900">Min</button>
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="mt-4 w-6 h-6">
                              <path stroke-linecap="round" stroke-linejoin="round" d="M18 12H6" />
                            </svg>              
                            <button type="button" class="text-gray-500 block w-32 rounded-md border border-gray-500 bg-white px-4 items-center py-3 px-4 shadow-sm focus:ring-2 focus:ring-offset-2 focus:ring-pink-900">Max</button>
                          </div>
                          
              
                          <ul class="ml-6 mt-4">
                            <div class="relative flex items-start">
                              <div class="flex h-5 items-center">
                                <input id="comments" aria-describedby="comments-description" name="comments" type="checkbox" class="h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-500">
                              </div>
                            <div class="ml-3 text-sm">
                              <li class="flex flex-row gap-3">Under 500 <p class="text-gray-600">| 2789 ads</p></li>
                              </div>
                            </div>
                            <div class="relative flex items-start">
                              <div class="flex h-5 items-center">
                                <input id="comments" aria-describedby="comments-description" name="comments" type="checkbox" class="h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-500">
                              </div>
                            <div class="ml-3 text-sm">
                              <li class="flex flex-row gap-3">500 - 2K <p class="text-gray-600">| 5000 ads</p></li>
                              </div>
                            </div>
              
                            <div class="relative flex items-start">
                              <div class="flex h-5 items-center">
                                <input id="comments" aria-describedby="comments-description" name="comments" type="checkbox" class="h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-500">
                              </div>
                            <div class="ml-3 text-sm">
                              <li class="flex flex-row gap-3">2K - 5K <p class="text-gray-600">| 7900 ads</p></li>
                              </div>
                            </div>
              
                            <div class="relative flex items-start">
                              <div class="flex h-5 items-center">
                                <input id="comments" aria-describedby="comments-description" name="comments" type="checkbox" class="h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-500">
                              </div>
                            <div class="ml-3 text-sm">
                              <li class="flex flex-row gap-3"> >5K  <p class="text-gray-600">| 3000 ads</p></li>
                              </div>
                            </div>
                            
                            <div class="-ml-4 -mt-2 flex flex-wrap items-center justify-between sm:flex-nowrap">
                              <div class="ml-4 mt-2">
                                <a href="#"><button type="button" class="block w-full px-4 py-2 mt-4 text-sm font-medium leading-5 text-center text-pink-900 text-sm border border-pink-700 rounded-lg">clear</button></a>
                              </div>
                              <div class="ml-4 mt-4 flex-shrink-0">
                                <a href="#"><button type="button" class="block w-full px-4 py-2 mt-4 text-sm font-medium leading-5 text-center text-teal-600 text-sm border border-teal-500 rounded-lg">Apply</button></a>
                              </div>
                          </div>
                            
                            
                            
                          </ul>
                            
                        </li>
                  
                      </ul>
                      
                </div>
                <!-- subcategory -->
                </div>

                <div>
                  <div class="category md:flex md:items-center md:justify-between p-3">
                    <div class="min-w-0 flex flex-row">
                      <a href="#" class="flex-1 bg-white text-white flex-shrink-0 inline-flex items-center justify-center h-14 w-14">
                        <img class="h-10 w-auto sm:h-10 rounded-full" src="images/myhustle/bags.webp" alt="">    
                      </a>
                      <p class="text-sm mt-4 ml-2 text-gray-700">Bags</p>
                    </div>
                    <div class="mt-4 flex md:mt-0 md:ml-4 p-4">
                      <a href=""><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="gray" class="dropdown-toggle w-4 h-4" id="dropdownDefaultButton" data-dropdown-toggle="dropdown">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 4.5l7.5 7.5-7.5 7.5" />
                      </svg></a>
                    </div>
                  </div>
                  <!-- subcategory -->
                <div class="bg-white dropdown-menu mt-6 ml-6 w-96 overscroll-contain z-10 hidden" id="dropdown">
                        <ul>
                          <li class="shadow-xl rounded-2xl p-4">
                          <div >
                            <div class="-ml-4 -mt-2 flex flex-wrap items-center justify-between sm:flex-nowrap bg-gray-200 rounded-lg ">
                              <div class="ml-4 mt-2 ">
                                <h3 class="text-sm font-medium leading-6 text-black font-bold ">Sub-Categories</h3>
                              </div>
                          </div>
                          <ul class="ml-6 mt-4">
                            <li class="flex flex-row gap-3">Mobile phones <p class="text-gray-600">| 2789</p></li>
                            <li class="flex flex-row gap-3">Smart Watches <p class="text-gray-600">| 7900</p></li>
                            <li class="flex flex-row gap-3">Accessories for mobile phones <p class="text-gray-600">| 5000</p></li>
                          </ul>
                            
                        </li>
                  
                        <li class="shadow-xl mt-5 rounded-2xl p-4">
                          <div >
                            <div class="-ml-4 -mt-2 flex flex-wrap items-center justify-between sm:flex-nowrap bg-gray-200 rounded-lg">
                              <div class="ml-4 mt-2">
                                <h3 class="text-sm font-medium leading-6 text-black font-bold">Location</h3>
                              </div>
                          </div>
                          <div class="flex flex-row flex-wrap justify-between sm:flex-nowrap">
                            <a href="#"><p class="text-gray-600 pb-3 text-sm ml-6 mt-2">All Kenya </p></a>
                          <div class="flex justify-end align-right flex-shrink-0">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                              <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 4.5l7.5 7.5-7.5 7.5" />
                            </svg>
                            
                          </div>
                          </div>
                          
                            
                        </li>
              
                        <li class="shadow-xl rounded-2xl p-4 mt-5">
                          <div >
                            <div class="-ml-4 -mt-2 flex flex-wrap items-center justify-between sm:flex-nowrap bg-gray-200 rounded-lg">
                              <div class="ml-4 mt-2">
                                <h3 class="text-sm font-medium leading-6 text-black font-bold">Price, Kshs</h3>
                              </div>
                          </div>
                          <div class="gap-2 mt-3 flex flex-row">
                            <div>
                              <div class="mt-1">
                                
                              </div>
                            </div>
                            <button type="button" class="text-gray-500 block w-32 rounded-md border border-gray-500 bg-white px-4 items-center py-3 px-4 shadow-sm focus:ring-2 focus:ring-offset-2 focus:ring-pink-900">Min</button>
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="mt-4 w-6 h-6">
                              <path stroke-linecap="round" stroke-linejoin="round" d="M18 12H6" />
                            </svg>              
                            <button type="button" class="text-gray-500 block w-32 rounded-md border border-gray-500 bg-white px-4 items-center py-3 px-4 shadow-sm focus:ring-2 focus:ring-offset-2 focus:ring-pink-900">Max</button>
                          </div>
                          
              
                          <ul class="ml-6 mt-4">
                            <div class="relative flex items-start">
                              <div class="flex h-5 items-center">
                                <input id="comments" aria-describedby="comments-description" name="comments" type="checkbox" class="h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-500">
                              </div>
                            <div class="ml-3 text-sm">
                              <li class="flex flex-row gap-3">Under 500 <p class="text-gray-600">| 2789 ads</p></li>
                              </div>
                            </div>
                            <div class="relative flex items-start">
                              <div class="flex h-5 items-center">
                                <input id="comments" aria-describedby="comments-description" name="comments" type="checkbox" class="h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-500">
                              </div>
                            <div class="ml-3 text-sm">
                              <li class="flex flex-row gap-3">500 - 2K <p class="text-gray-600">| 5000 ads</p></li>
                              </div>
                            </div>
              
                            <div class="relative flex items-start">
                              <div class="flex h-5 items-center">
                                <input id="comments" aria-describedby="comments-description" name="comments" type="checkbox" class="h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-500">
                              </div>
                            <div class="ml-3 text-sm">
                              <li class="flex flex-row gap-3">2K - 5K <p class="text-gray-600">| 7900 ads</p></li>
                              </div>
                            </div>
              
                            <div class="relative flex items-start">
                              <div class="flex h-5 items-center">
                                <input id="comments" aria-describedby="comments-description" name="comments" type="checkbox" class="h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-500">
                              </div>
                            <div class="ml-3 text-sm">
                              <li class="flex flex-row gap-3"> >5K  <p class="text-gray-600">| 3000 ads</p></li>
                              </div>
                            </div>
                            
                            <div class="-ml-4 -mt-2 flex flex-wrap items-center justify-between sm:flex-nowrap">
                              <div class="ml-4 mt-2">
                                <a href="#"><button type="button" class="block w-full px-4 py-2 mt-4 text-sm font-medium leading-5 text-center text-pink-900 text-sm border border-pink-700 rounded-lg">clear</button></a>
                              </div>
                              <div class="ml-4 mt-4 flex-shrink-0">
                                <a href="#"><button type="button" class="block w-full px-4 py-2 mt-4 text-sm font-medium leading-5 text-center text-teal-600 text-sm border border-teal-500 rounded-lg">Apply</button></a>
                              </div>
                          </div>
                            
                            
                            
                          </ul>
                            
                        </li>
                  
                      </ul>
                      
                </div>
                <!-- subcategory -->
                </div>

                <div>
                  <div class="category md:flex md:items-center md:justify-between p-3">
                    <div class="min-w-0 flex flex-row">
                      <a href="#" class="flex-1 bg-white text-white flex-shrink-0 inline-flex items-center justify-center h-14 w-14">
                        <img class="h-10 w-auto sm:h-10 rounded-full" src="images/myhustle/mercedes.webp" alt="">    
                      </a>
                      <p class="text-sm mt-4 ml-2 text-gray-700">Vehicles</p>
                    </div>
                    <div class="mt-4 flex md:mt-0 md:ml-4 p-4">
                      <a href=""><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="gray" class="dropdown-toggle w-4 h-4" id="dropdownDefaultButton" data-dropdown-toggle="dropdown">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 4.5l7.5 7.5-7.5 7.5" />
                      </svg></a>
                    </div>
                  </div>
                  <!-- subcategory -->
                <div class="bg-white dropdown-menu mt-6 ml-6 w-96 overscroll-contain z-10 hidden" id="dropdown">
                        <ul>
                          <li class="shadow-xl rounded-2xl p-4">
                          <div >
                            <div class="-ml-4 -mt-2 flex flex-wrap items-center justify-between sm:flex-nowrap bg-gray-200 rounded-lg ">
                              <div class="ml-4 mt-2 ">
                                <h3 class="text-sm font-medium leading-6 text-black font-bold ">Sub-Categories</h3>
                              </div>
                          </div>
                          <ul class="ml-6 mt-4">
                            <li class="flex flex-row gap-3">Mobile phones <p class="text-gray-600">| 2789</p></li>
                            <li class="flex flex-row gap-3">Smart Watches <p class="text-gray-600">| 7900</p></li>
                            <li class="flex flex-row gap-3">Accessories for mobile phones <p class="text-gray-600">| 5000</p></li>
                          </ul>
                            
                        </li>
                  
                        <li class="shadow-xl mt-5 rounded-2xl p-4">
                          <div >
                            <div class="-ml-4 -mt-2 flex flex-wrap items-center justify-between sm:flex-nowrap bg-gray-200 rounded-lg">
                              <div class="ml-4 mt-2">
                                <h3 class="text-sm font-medium leading-6 text-black font-bold">Location</h3>
                              </div>
                          </div>
                          <div class="flex flex-row flex-wrap justify-between sm:flex-nowrap">
                            <a href="#"><p class="text-gray-600 pb-3 text-sm ml-6 mt-2">All Kenya </p></a>
                          <div class="flex justify-end align-right flex-shrink-0">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                              <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 4.5l7.5 7.5-7.5 7.5" />
                            </svg>
                            
                          </div>
                          </div>
                          
                            
                        </li>
              
                        <li class="shadow-xl rounded-2xl p-4 mt-5">
                          <div >
                            <div class="-ml-4 -mt-2 flex flex-wrap items-center justify-between sm:flex-nowrap bg-gray-200 rounded-lg">
                              <div class="ml-4 mt-2">
                                <h3 class="text-sm font-medium leading-6 text-black font-bold">Price, Kshs</h3>
                              </div>
                          </div>
                          <div class="gap-2 mt-3 flex flex-row">
                            <div>
                              <div class="mt-1">
                                
                              </div>
                            </div>
                            <button type="button" class="text-gray-500 block w-32 rounded-md border border-gray-500 bg-white px-4 items-center py-3 px-4 shadow-sm focus:ring-2 focus:ring-offset-2 focus:ring-pink-900">Min</button>
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="mt-4 w-6 h-6">
                              <path stroke-linecap="round" stroke-linejoin="round" d="M18 12H6" />
                            </svg>              
                            <button type="button" class="text-gray-500 block w-32 rounded-md border border-gray-500 bg-white px-4 items-center py-3 px-4 shadow-sm focus:ring-2 focus:ring-offset-2 focus:ring-pink-900">Max</button>
                          </div>
                          
              
                          <ul class="ml-6 mt-4">
                            <div class="relative flex items-start">
                              <div class="flex h-5 items-center">
                                <input id="comments" aria-describedby="comments-description" name="comments" type="checkbox" class="h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-500">
                              </div>
                            <div class="ml-3 text-sm">
                              <li class="flex flex-row gap-3">Under 500 <p class="text-gray-600">| 2789 ads</p></li>
                              </div>
                            </div>
                            <div class="relative flex items-start">
                              <div class="flex h-5 items-center">
                                <input id="comments" aria-describedby="comments-description" name="comments" type="checkbox" class="h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-500">
                              </div>
                            <div class="ml-3 text-sm">
                              <li class="flex flex-row gap-3">500 - 2K <p class="text-gray-600">| 5000 ads</p></li>
                              </div>
                            </div>
              
                            <div class="relative flex items-start">
                              <div class="flex h-5 items-center">
                                <input id="comments" aria-describedby="comments-description" name="comments" type="checkbox" class="h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-500">
                              </div>
                            <div class="ml-3 text-sm">
                              <li class="flex flex-row gap-3">2K - 5K <p class="text-gray-600">| 7900 ads</p></li>
                              </div>
                            </div>
              
                            <div class="relative flex items-start">
                              <div class="flex h-5 items-center">
                                <input id="comments" aria-describedby="comments-description" name="comments" type="checkbox" class="h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-500">
                              </div>
                            <div class="ml-3 text-sm">
                              <li class="flex flex-row gap-3"> >5K  <p class="text-gray-600">| 3000 ads</p></li>
                              </div>
                            </div>
                            
                            <div class="-ml-4 -mt-2 flex flex-wrap items-center justify-between sm:flex-nowrap">
                              <div class="ml-4 mt-2">
                                <a href="#"><button type="button" class="block w-full px-4 py-2 mt-4 text-sm font-medium leading-5 text-center text-pink-900 text-sm border border-pink-700 rounded-lg">clear</button></a>
                              </div>
                              <div class="ml-4 mt-4 flex-shrink-0">
                                <a href="#"><button type="button" class="block w-full px-4 py-2 mt-4 text-sm font-medium leading-5 text-center text-teal-600 text-sm border border-teal-500 rounded-lg">Apply</button></a>
                              </div>
                          </div>
                            
                            
                            
                          </ul>
                            
                        </li>
                  
                      </ul>
                      
                </div>
                <!-- subcategory -->
                </div>

                <div>
                  <div class="category md:flex md:items-center md:justify-between p-3">
                    <div class="min-w-0 flex flex-row">
                      <a href="#" class="flex-1 bg-white text-white flex-shrink-0 inline-flex items-center justify-center h-14 w-14">
                        <img class="h-10 w-auto sm:h-10 rounded-full" src="images/myhustle/clothesboth.webp" alt="">    
                      </a>
                      <p class="text-sm mt-4 ml-2 text-gray-700">Clothes</p>
                    </div>
                    <div class="mt-4 flex md:mt-0 md:ml-4 p-4">
                      <a href=""><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="gray" class="dropdown-toggle w-4 h-4" id="dropdownDefaultButton" data-dropdown-toggle="dropdown">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 4.5l7.5 7.5-7.5 7.5" />
                      </svg></a>
                    </div>
                  </div>
                  <!-- subcategory -->
                <div class="bg-white dropdown-menu mt-6 ml-6 w-96 overscroll-contain z-10 hidden" id="dropdown">
                        <ul>
                          <li class="shadow-xl rounded-2xl p-4">
                          <div >
                            <div class="-ml-4 -mt-2 flex flex-wrap items-center justify-between sm:flex-nowrap bg-gray-200 rounded-lg ">
                              <div class="ml-4 mt-2 ">
                                <h3 class="text-sm font-medium leading-6 text-black font-bold ">Sub-Categories</h3>
                              </div>
                          </div>
                          <ul class="ml-6 mt-4">
                            <li class="flex flex-row gap-3">Mobile phones <p class="text-gray-600">| 2789</p></li>
                            <li class="flex flex-row gap-3">Smart Watches <p class="text-gray-600">| 7900</p></li>
                            <li class="flex flex-row gap-3">Accessories for mobile phones <p class="text-gray-600">| 5000</p></li>
                          </ul>
                            
                        </li>
                  
                        <li class="shadow-xl mt-5 rounded-2xl p-4">
                          <div >
                            <div class="-ml-4 -mt-2 flex flex-wrap items-center justify-between sm:flex-nowrap bg-gray-200 rounded-lg">
                              <div class="ml-4 mt-2">
                                <h3 class="text-sm font-medium leading-6 text-black font-bold">Location</h3>
                              </div>
                          </div>
                          <div class="flex flex-row flex-wrap justify-between sm:flex-nowrap">
                            <a href="#"><p class="text-gray-600 pb-3 text-sm ml-6 mt-2">All Kenya </p></a>
                          <div class="flex justify-end align-right flex-shrink-0">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                              <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 4.5l7.5 7.5-7.5 7.5" />
                            </svg>
                            
                          </div>
                          </div>
                          
                            
                        </li>
              
                        <li class="shadow-xl rounded-2xl p-4 mt-5">
                          <div >
                            <div class="-ml-4 -mt-2 flex flex-wrap items-center justify-between sm:flex-nowrap bg-gray-200 rounded-lg">
                              <div class="ml-4 mt-2">
                                <h3 class="text-sm font-medium leading-6 text-black font-bold">Price, Kshs</h3>
                              </div>
                          </div>
                          <div class="gap-2 mt-3 flex flex-row">
                            <div>
                              <div class="mt-1">
                                
                              </div>
                            </div>
                            <button type="button" class="text-gray-500 block w-32 rounded-md border border-gray-500 bg-white px-4 items-center py-3 px-4 shadow-sm focus:ring-2 focus:ring-offset-2 focus:ring-pink-900">Min</button>
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="mt-4 w-6 h-6">
                              <path stroke-linecap="round" stroke-linejoin="round" d="M18 12H6" />
                            </svg>              
                            <button type="button" class="text-gray-500 block w-32 rounded-md border border-gray-500 bg-white px-4 items-center py-3 px-4 shadow-sm focus:ring-2 focus:ring-offset-2 focus:ring-pink-900">Max</button>
                          </div>
                          
              
                          <ul class="ml-6 mt-4">
                            <div class="relative flex items-start">
                              <div class="flex h-5 items-center">
                                <input id="comments" aria-describedby="comments-description" name="comments" type="checkbox" class="h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-500">
                              </div>
                            <div class="ml-3 text-sm">
                              <li class="flex flex-row gap-3">Under 500 <p class="text-gray-600">| 2789 ads</p></li>
                              </div>
                            </div>
                            <div class="relative flex items-start">
                              <div class="flex h-5 items-center">
                                <input id="comments" aria-describedby="comments-description" name="comments" type="checkbox" class="h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-500">
                              </div>
                            <div class="ml-3 text-sm">
                              <li class="flex flex-row gap-3">500 - 2K <p class="text-gray-600">| 5000 ads</p></li>
                              </div>
                            </div>
              
                            <div class="relative flex items-start">
                              <div class="flex h-5 items-center">
                                <input id="comments" aria-describedby="comments-description" name="comments" type="checkbox" class="h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-500">
                              </div>
                            <div class="ml-3 text-sm">
                              <li class="flex flex-row gap-3">2K - 5K <p class="text-gray-600">| 7900 ads</p></li>
                              </div>
                            </div>
              
                            <div class="relative flex items-start">
                              <div class="flex h-5 items-center">
                                <input id="comments" aria-describedby="comments-description" name="comments" type="checkbox" class="h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-500">
                              </div>
                            <div class="ml-3 text-sm">
                              <li class="flex flex-row gap-3"> >5K  <p class="text-gray-600">| 3000 ads</p></li>
                              </div>
                            </div>
                            
                            <div class="-ml-4 -mt-2 flex flex-wrap items-center justify-between sm:flex-nowrap">
                              <div class="ml-4 mt-2">
                                <a href="#"><button type="button" class="block w-full px-4 py-2 mt-4 text-sm font-medium leading-5 text-center text-pink-900 text-sm border border-pink-700 rounded-lg">clear</button></a>
                              </div>
                              <div class="ml-4 mt-4 flex-shrink-0">
                                <a href="#"><button type="button" class="block w-full px-4 py-2 mt-4 text-sm font-medium leading-5 text-center text-teal-600 text-sm border border-teal-500 rounded-lg">Apply</button></a>
                              </div>
                          </div>
                            
                            
                            
                          </ul>
                            
                        </li>
                  
                      </ul>
                      
                </div>
                <!-- subcategory -->
                </div>

                <div>
                  <div class="category md:flex md:items-center md:justify-between p-3">
                    <div class="min-w-0 flex flex-row">
                      <a href="#" class="flex-1 bg-white text-white flex-shrink-0 inline-flex items-center justify-center h-14 w-14">
                        <img class="h-10 w-auto sm:h-10 rounded-full" src="images/myhustle/gym.webp" alt="">    
                      </a>
                      <p class="text-sm mt-4 ml-2 text-gray-700">Sports & Outdoors</p>
                    </div>
                    <div class="mt-4 flex md:mt-0 md:ml-4 p-4">
                      <a href=""><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="gray" class="dropdown-toggle w-4 h-4" id="dropdownDefaultButton" data-dropdown-toggle="dropdown">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 4.5l7.5 7.5-7.5 7.5" />
                      </svg></a>
                    </div>
                  </div>
                  <!-- subcategory -->
                <div class="bg-white dropdown-menu mt-6 ml-6 w-96 overscroll-contain z-10 hidden" id="dropdown">
                        <ul>
                          <li class="shadow-xl rounded-2xl p-4">
                          <div >
                            <div class="-ml-4 -mt-2 flex flex-wrap items-center justify-between sm:flex-nowrap bg-gray-200 rounded-lg ">
                              <div class="ml-4 mt-2 ">
                                <h3 class="text-sm font-medium leading-6 text-black font-bold ">Sub-Categories</h3>
                              </div>
                          </div>
                          <ul class="ml-6 mt-4">
                            <li class="flex flex-row gap-3">Mobile phones <p class="text-gray-600">| 2789</p></li>
                            <li class="flex flex-row gap-3">Smart Watches <p class="text-gray-600">| 7900</p></li>
                            <li class="flex flex-row gap-3">Accessories for mobile phones <p class="text-gray-600">| 5000</p></li>
                          </ul>
                            
                        </li>
                  
                        <li class="shadow-xl mt-5 rounded-2xl p-4">
                          <div >
                            <div class="-ml-4 -mt-2 flex flex-wrap items-center justify-between sm:flex-nowrap bg-gray-200 rounded-lg">
                              <div class="ml-4 mt-2">
                                <h3 class="text-sm font-medium leading-6 text-black font-bold">Location</h3>
                              </div>
                          </div>
                          <div class="flex flex-row flex-wrap justify-between sm:flex-nowrap">
                            <a href="#"><p class="text-gray-600 pb-3 text-sm ml-6 mt-2">All Kenya </p></a>
                          <div class="flex justify-end align-right flex-shrink-0">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                              <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 4.5l7.5 7.5-7.5 7.5" />
                            </svg>
                            
                          </div>
                          </div>
                          
                            
                        </li>
              
                        <li class="shadow-xl rounded-2xl p-4 mt-5">
                          <div >
                            <div class="-ml-4 -mt-2 flex flex-wrap items-center justify-between sm:flex-nowrap bg-gray-200 rounded-lg">
                              <div class="ml-4 mt-2">
                                <h3 class="text-sm font-medium leading-6 text-black font-bold">Price, Kshs</h3>
                              </div>
                          </div>
                          <div class="gap-2 mt-3 flex flex-row">
                            <div>
                              <div class="mt-1">
                                
                              </div>
                            </div>
                            <button type="button" class="text-gray-500 block w-32 rounded-md border border-gray-500 bg-white px-4 items-center py-3 px-4 shadow-sm focus:ring-2 focus:ring-offset-2 focus:ring-pink-900">Min</button>
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="mt-4 w-6 h-6">
                              <path stroke-linecap="round" stroke-linejoin="round" d="M18 12H6" />
                            </svg>              
                            <button type="button" class="text-gray-500 block w-32 rounded-md border border-gray-500 bg-white px-4 items-center py-3 px-4 shadow-sm focus:ring-2 focus:ring-offset-2 focus:ring-pink-900">Max</button>
                          </div>
                          
              
                          <ul class="ml-6 mt-4">
                            <div class="relative flex items-start">
                              <div class="flex h-5 items-center">
                                <input id="comments" aria-describedby="comments-description" name="comments" type="checkbox" class="h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-500">
                              </div>
                            <div class="ml-3 text-sm">
                              <li class="flex flex-row gap-3">Under 500 <p class="text-gray-600">| 2789 ads</p></li>
                              </div>
                            </div>
                            <div class="relative flex items-start">
                              <div class="flex h-5 items-center">
                                <input id="comments" aria-describedby="comments-description" name="comments" type="checkbox" class="h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-500">
                              </div>
                            <div class="ml-3 text-sm">
                              <li class="flex flex-row gap-3">500 - 2K <p class="text-gray-600">| 5000 ads</p></li>
                              </div>
                            </div>
              
                            <div class="relative flex items-start">
                              <div class="flex h-5 items-center">
                                <input id="comments" aria-describedby="comments-description" name="comments" type="checkbox" class="h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-500">
                              </div>
                            <div class="ml-3 text-sm">
                              <li class="flex flex-row gap-3">2K - 5K <p class="text-gray-600">| 7900 ads</p></li>
                              </div>
                            </div>
              
                            <div class="relative flex items-start">
                              <div class="flex h-5 items-center">
                                <input id="comments" aria-describedby="comments-description" name="comments" type="checkbox" class="h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-500">
                              </div>
                            <div class="ml-3 text-sm">
                              <li class="flex flex-row gap-3"> >5K  <p class="text-gray-600">| 3000 ads</p></li>
                              </div>
                            </div>
                            
                            <div class="-ml-4 -mt-2 flex flex-wrap items-center justify-between sm:flex-nowrap">
                              <div class="ml-4 mt-2">
                                <a href="#"><button type="button" class="block w-full px-4 py-2 mt-4 text-sm font-medium leading-5 text-center text-pink-900 text-sm border border-pink-700 rounded-lg">clear</button></a>
                              </div>
                              <div class="ml-4 mt-4 flex-shrink-0">
                                <a href="#"><button type="button" class="block w-full px-4 py-2 mt-4 text-sm font-medium leading-5 text-center text-teal-600 text-sm border border-teal-500 rounded-lg">Apply</button></a>
                              </div>
                          </div>
                            
                            
                            
                          </ul>
                            
                        </li>
                  
                      </ul>
                      
                </div>
                <!-- subcategory -->
                </div>

                <div>
                  <div class="category md:flex md:items-center md:justify-between p-3">
                    <div class="min-w-0 flex flex-row">
                      <a href="#" class="flex-1 bg-white text-white flex-shrink-0 inline-flex items-center justify-center h-14 w-14">
                        <img class="h-10 w-auto sm:h-10 rounded-full" src="images/myhustle/furniture.jpg" alt="">    
                      </a>
                      <p class="text-sm mt-4 ml-2 text-gray-700">Furniture & Appliances</p>
                    </div>
                    <div class="mt-4 flex md:mt-0 md:ml-4 p-4">
                      <a href=""><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="gray" class="dropdown-toggle w-4 h-4" id="dropdownDefaultButton" data-dropdown-toggle="dropdown">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 4.5l7.5 7.5-7.5 7.5" />
                      </svg></a>
                    </div>
                  </div>
                  <!-- subcategory -->
                <div class="bg-white dropdown-menu mt-6 ml-6 w-96 overscroll-contain z-10 hidden" id="dropdown">
                        <ul>
                          <li class="shadow-xl rounded-2xl p-4">
                          <div >
                            <div class="-ml-4 -mt-2 flex flex-wrap items-center justify-between sm:flex-nowrap bg-gray-200 rounded-lg ">
                              <div class="ml-4 mt-2 ">
                                <h3 class="text-sm font-medium leading-6 text-black font-bold ">Sub-Categories</h3>
                              </div>
                          </div>
                          <ul class="ml-6 mt-4">
                            <li class="flex flex-row gap-3">Mobile phones <p class="text-gray-600">| 2789</p></li>
                            <li class="flex flex-row gap-3">Smart Watches <p class="text-gray-600">| 7900</p></li>
                            <li class="flex flex-row gap-3">Accessories for mobile phones <p class="text-gray-600">| 5000</p></li>
                          </ul>
                            
                        </li>
                  
                        <li class="shadow-xl mt-5 rounded-2xl p-4">
                          <div >
                            <div class="-ml-4 -mt-2 flex flex-wrap items-center justify-between sm:flex-nowrap bg-gray-200 rounded-lg">
                              <div class="ml-4 mt-2">
                                <h3 class="text-sm font-medium leading-6 text-black font-bold">Location</h3>
                              </div>
                          </div>
                          <div class="flex flex-row flex-wrap justify-between sm:flex-nowrap">
                            <a href="#"><p class="text-gray-600 pb-3 text-sm ml-6 mt-2">All Kenya </p></a>
                          <div class="flex justify-end align-right flex-shrink-0">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                              <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 4.5l7.5 7.5-7.5 7.5" />
                            </svg>
                            
                          </div>
                          </div>
                          
                            
                        </li>
              
                        <li class="shadow-xl rounded-2xl p-4 mt-5">
                          <div >
                            <div class="-ml-4 -mt-2 flex flex-wrap items-center justify-between sm:flex-nowrap bg-gray-200 rounded-lg">
                              <div class="ml-4 mt-2">
                                <h3 class="text-sm font-medium leading-6 text-black font-bold">Price, Kshs</h3>
                              </div>
                          </div>
                          <div class="gap-2 mt-3 flex flex-row">
                            <div>
                              <div class="mt-1">
                                
                              </div>
                            </div>
                            <button type="button" class="text-gray-500 block w-32 rounded-md border border-gray-500 bg-white px-4 items-center py-3 px-4 shadow-sm focus:ring-2 focus:ring-offset-2 focus:ring-pink-900">Min</button>
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="mt-4 w-6 h-6">
                              <path stroke-linecap="round" stroke-linejoin="round" d="M18 12H6" />
                            </svg>              
                            <button type="button" class="text-gray-500 block w-32 rounded-md border border-gray-500 bg-white px-4 items-center py-3 px-4 shadow-sm focus:ring-2 focus:ring-offset-2 focus:ring-pink-900">Max</button>
                          </div>
                          
              
                          <ul class="ml-6 mt-4">
                            <div class="relative flex items-start">
                              <div class="flex h-5 items-center">
                                <input id="comments" aria-describedby="comments-description" name="comments" type="checkbox" class="h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-500">
                              </div>
                            <div class="ml-3 text-sm">
                              <li class="flex flex-row gap-3">Under 500 <p class="text-gray-600">| 2789 ads</p></li>
                              </div>
                            </div>
                            <div class="relative flex items-start">
                              <div class="flex h-5 items-center">
                                <input id="comments" aria-describedby="comments-description" name="comments" type="checkbox" class="h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-500">
                              </div>
                            <div class="ml-3 text-sm">
                              <li class="flex flex-row gap-3">500 - 2K <p class="text-gray-600">| 5000 ads</p></li>
                              </div>
                            </div>
              
                            <div class="relative flex items-start">
                              <div class="flex h-5 items-center">
                                <input id="comments" aria-describedby="comments-description" name="comments" type="checkbox" class="h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-500">
                              </div>
                            <div class="ml-3 text-sm">
                              <li class="flex flex-row gap-3">2K - 5K <p class="text-gray-600">| 7900 ads</p></li>
                              </div>
                            </div>
              
                            <div class="relative flex items-start">
                              <div class="flex h-5 items-center">
                                <input id="comments" aria-describedby="comments-description" name="comments" type="checkbox" class="h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-500">
                              </div>
                            <div class="ml-3 text-sm">
                              <li class="flex flex-row gap-3"> >5K  <p class="text-gray-600">| 3000 ads</p></li>
                              </div>
                            </div>
                            
                            <div class="-ml-4 -mt-2 flex flex-wrap items-center justify-between sm:flex-nowrap">
                              <div class="ml-4 mt-2">
                                <a href="#"><button type="button" class="block w-full px-4 py-2 mt-4 text-sm font-medium leading-5 text-center text-pink-900 text-sm border border-pink-700 rounded-lg">clear</button></a>
                              </div>
                              <div class="ml-4 mt-4 flex-shrink-0">
                                <a href="#"><button type="button" class="block w-full px-4 py-2 mt-4 text-sm font-medium leading-5 text-center text-teal-600 text-sm border border-teal-500 rounded-lg">Apply</button></a>
                              </div>
                          </div>
                            
                            
                            
                          </ul>
                            
                        </li>
                  
                      </ul>
                      
                </div>
                <!-- subcategory -->
                </div>

                <div>
                  <div class="category md:flex md:items-center md:justify-between p-3">
                    <div class="min-w-0 flex flex-row">
                      <a href="#" class="flex-1 bg-white text-white flex-shrink-0 inline-flex items-center justify-center h-14 w-14">
                        <img class="h-10 w-auto sm:h-10 rounded-full" src="images/myhustle/babies.jpg" alt="">    
                      </a>
                      <p class="text-sm mt-4 ml-2 text-gray-700">Babies & Kids</p>
                    </div>
                    <div class="mt-4 flex md:mt-0 md:ml-4 p-4">
                      <a href=""><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="gray" class="dropdown-toggle w-4 h-4" id="dropdownDefaultButton" data-dropdown-toggle="dropdown">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 4.5l7.5 7.5-7.5 7.5" />
                      </svg></a>
                    </div>
                  </div>
                  <!-- subcategory -->
                <div class="bg-white dropdown-menu mt-6 ml-6 w-96 overscroll-contain z-10 hidden" id="dropdown">
                        <ul>
                          <li class="shadow-xl rounded-2xl p-4">
                          <div >
                            <div class="-ml-4 -mt-2 flex flex-wrap items-center justify-between sm:flex-nowrap bg-gray-200 rounded-lg ">
                              <div class="ml-4 mt-2 ">
                                <h3 class="text-sm font-medium leading-6 text-black font-bold ">Sub-Categories</h3>
                              </div>
                          </div>
                          <ul class="ml-6 mt-4">
                            <li class="flex flex-row gap-3">Mobile phones <p class="text-gray-600">| 2789</p></li>
                            <li class="flex flex-row gap-3">Smart Watches <p class="text-gray-600">| 7900</p></li>
                            <li class="flex flex-row gap-3">Accessories for mobile phones <p class="text-gray-600">| 5000</p></li>
                          </ul>
                            
                        </li>
                  
                        <li class="shadow-xl mt-5 rounded-2xl p-4">
                          <div >
                            <div class="-ml-4 -mt-2 flex flex-wrap items-center justify-between sm:flex-nowrap bg-gray-200 rounded-lg">
                              <div class="ml-4 mt-2">
                                <h3 class="text-sm font-medium leading-6 text-black font-bold">Location</h3>
                              </div>
                          </div>
                          <div class="flex flex-row flex-wrap justify-between sm:flex-nowrap">
                            <a href="#"><p class="text-gray-600 pb-3 text-sm ml-6 mt-2">All Kenya </p></a>
                          <div class="flex justify-end align-right flex-shrink-0">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                              <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 4.5l7.5 7.5-7.5 7.5" />
                            </svg>
                            
                          </div>
                          </div>
                          
                            
                        </li>
              
                        <li class="shadow-xl rounded-2xl p-4 mt-5">
                          <div >
                            <div class="-ml-4 -mt-2 flex flex-wrap items-center justify-between sm:flex-nowrap bg-gray-200 rounded-lg">
                              <div class="ml-4 mt-2">
                                <h3 class="text-sm font-medium leading-6 text-black font-bold">Price, Kshs</h3>
                              </div>
                          </div>
                          <div class="gap-2 mt-3 flex flex-row">
                            <div>
                              <div class="mt-1">
                                
                              </div>
                            </div>
                            <button type="button" class="text-gray-500 block w-32 rounded-md border border-gray-500 bg-white px-4 items-center py-3 px-4 shadow-sm focus:ring-2 focus:ring-offset-2 focus:ring-pink-900">Min</button>
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="mt-4 w-6 h-6">
                              <path stroke-linecap="round" stroke-linejoin="round" d="M18 12H6" />
                            </svg>              
                            <button type="button" class="text-gray-500 block w-32 rounded-md border border-gray-500 bg-white px-4 items-center py-3 px-4 shadow-sm focus:ring-2 focus:ring-offset-2 focus:ring-pink-900">Max</button>
                          </div>
                          
              
                          <ul class="ml-6 mt-4">
                            <div class="relative flex items-start">
                              <div class="flex h-5 items-center">
                                <input id="comments" aria-describedby="comments-description" name="comments" type="checkbox" class="h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-500">
                              </div>
                            <div class="ml-3 text-sm">
                              <li class="flex flex-row gap-3">Under 500 <p class="text-gray-600">| 2789 ads</p></li>
                              </div>
                            </div>
                            <div class="relative flex items-start">
                              <div class="flex h-5 items-center">
                                <input id="comments" aria-describedby="comments-description" name="comments" type="checkbox" class="h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-500">
                              </div>
                            <div class="ml-3 text-sm">
                              <li class="flex flex-row gap-3">500 - 2K <p class="text-gray-600">| 5000 ads</p></li>
                              </div>
                            </div>
              
                            <div class="relative flex items-start">
                              <div class="flex h-5 items-center">
                                <input id="comments" aria-describedby="comments-description" name="comments" type="checkbox" class="h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-500">
                              </div>
                            <div class="ml-3 text-sm">
                              <li class="flex flex-row gap-3">2K - 5K <p class="text-gray-600">| 7900 ads</p></li>
                              </div>
                            </div>
              
                            <div class="relative flex items-start">
                              <div class="flex h-5 items-center">
                                <input id="comments" aria-describedby="comments-description" name="comments" type="checkbox" class="h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-500">
                              </div>
                            <div class="ml-3 text-sm">
                              <li class="flex flex-row gap-3"> >5K  <p class="text-gray-600">| 3000 ads</p></li>
                              </div>
                            </div>
                            
                            <div class="-ml-4 -mt-2 flex flex-wrap items-center justify-between sm:flex-nowrap">
                              <div class="ml-4 mt-2">
                                <a href="#"><button type="button" class="block w-full px-4 py-2 mt-4 text-sm font-medium leading-5 text-center text-pink-900 text-sm border border-pink-700 rounded-lg">clear</button></a>
                              </div>
                              <div class="ml-4 mt-4 flex-shrink-0">
                                <a href="#"><button type="button" class="block w-full px-4 py-2 mt-4 text-sm font-medium leading-5 text-center text-teal-600 text-sm border border-teal-500 rounded-lg">Apply</button></a>
                              </div>
                          </div>
                            
                          </ul>
                            
                        </li>
                  
                      </ul>
                      
                </div>
                <!-- subcategory -->
                </div>

                <div>
                  <div class="category md:flex md:items-center md:justify-between p-3">
                    <div class="min-w-0 flex flex-row">
                      <a href="#" class="flex-1 bg-white text-white flex-shrink-0 inline-flex items-center justify-center h-14 w-14">
                        <img class="h-10 w-auto sm:h-10 rounded-full" src="images/myhustle/property.png" alt="">    
                      </a>
                      <p class="text-sm mt-4 ml-2 text-gray-700">Property</p>
                    </div>
                    <div class="mt-4 flex md:mt-0 md:ml-4 p-4">
                      <a href=""><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="gray" class="dropdown-toggle w-4 h-4" id="dropdownDefaultButton" data-dropdown-toggle="dropdown">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 4.5l7.5 7.5-7.5 7.5" />
                      </svg></a>
                    </div>
                  </div>
                  <!-- subcategory -->
                <div class="bg-white dropdown-menu mt-6 ml-6 w-96 overscroll-contain z-10 hidden" id="dropdown">
                        <ul>
                          <li class="shadow-xl rounded-2xl p-4">
                          <div >
                            <div class="-ml-4 -mt-2 flex flex-wrap items-center justify-between sm:flex-nowrap bg-gray-200 rounded-lg ">
                              <div class="ml-4 mt-2 ">
                                <h3 class="text-sm font-medium leading-6 text-black font-bold ">Sub-Categories</h3>
                              </div>
                          </div>
                          <ul class="ml-6 mt-4">
                            <li class="flex flex-row gap-3">Mobile phones <p class="text-gray-600">| 2789</p></li>
                            <li class="flex flex-row gap-3">Smart Watches <p class="text-gray-600">| 7900</p></li>
                            <li class="flex flex-row gap-3">Accessories for mobile phones <p class="text-gray-600">| 5000</p></li>
                          </ul>
                            
                        </li>
                  
                        <li class="shadow-xl mt-5 rounded-2xl p-4">
                          <div >
                            <div class="-ml-4 -mt-2 flex flex-wrap items-center justify-between sm:flex-nowrap bg-gray-200 rounded-lg">
                              <div class="ml-4 mt-2">
                                <h3 class="text-sm font-medium leading-6 text-black font-bold">Location</h3>
                              </div>
                          </div>
                          <div class="flex flex-row flex-wrap justify-between sm:flex-nowrap">
                            <a href="#"><p class="text-gray-600 pb-3 text-sm ml-6 mt-2">All Kenya </p></a>
                          <div class="flex justify-end align-right flex-shrink-0">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                              <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 4.5l7.5 7.5-7.5 7.5" />
                            </svg>
                            
                          </div>
                          </div>
                          
                            
                        </li>
              
                        <li class="shadow-xl rounded-2xl p-4 mt-5">
                          <div >
                            <div class="-ml-4 -mt-2 flex flex-wrap items-center justify-between sm:flex-nowrap bg-gray-200 rounded-lg">
                              <div class="ml-4 mt-2">
                                <h3 class="text-sm font-medium leading-6 text-black font-bold">Price, Kshs</h3>
                              </div>
                          </div>
                          <div class="gap-2 mt-3 flex flex-row">
                            <div>
                              <div class="mt-1">
                                
                              </div>
                            </div>
                            <button type="button" class="text-gray-500 block w-32 rounded-md border border-gray-500 bg-white px-4 items-center py-3 px-4 shadow-sm focus:ring-2 focus:ring-offset-2 focus:ring-pink-900">Min</button>
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="mt-4 w-6 h-6">
                              <path stroke-linecap="round" stroke-linejoin="round" d="M18 12H6" />
                            </svg>              
                            <button type="button" class="text-gray-500 block w-32 rounded-md border border-gray-500 bg-white px-4 items-center py-3 px-4 shadow-sm focus:ring-2 focus:ring-offset-2 focus:ring-pink-900">Max</button>
                          </div>
                          
              
                          <ul class="ml-6 mt-4">
                            <div class="relative flex items-start">
                              <div class="flex h-5 items-center">
                                <input id="comments" aria-describedby="comments-description" name="comments" type="checkbox" class="h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-500">
                              </div>
                            <div class="ml-3 text-sm">
                              <li class="flex flex-row gap-3">Under 500 <p class="text-gray-600">| 2789 ads</p></li>
                              </div>
                            </div>
                            <div class="relative flex items-start">
                              <div class="flex h-5 items-center">
                                <input id="comments" aria-describedby="comments-description" name="comments" type="checkbox" class="h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-500">
                              </div>
                            <div class="ml-3 text-sm">
                              <li class="flex flex-row gap-3">500 - 2K <p class="text-gray-600">| 5000 ads</p></li>
                              </div>
                            </div>
              
                            <div class="relative flex items-start">
                              <div class="flex h-5 items-center">
                                <input id="comments" aria-describedby="comments-description" name="comments" type="checkbox" class="h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-500">
                              </div>
                            <div class="ml-3 text-sm">
                              <li class="flex flex-row gap-3">2K - 5K <p class="text-gray-600">| 7900 ads</p></li>
                              </div>
                            </div>
              
                            <div class="relative flex items-start">
                              <div class="flex h-5 items-center">
                                <input id="comments" aria-describedby="comments-description" name="comments" type="checkbox" class="h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-500">
                              </div>
                            <div class="ml-3 text-sm">
                              <li class="flex flex-row gap-3"> >5K  <p class="text-gray-600">| 3000 ads</p></li>
                              </div>
                            </div>
                            
                            <div class="-ml-4 -mt-2 flex flex-wrap items-center justify-between sm:flex-nowrap">
                              <div class="ml-4 mt-2">
                                <a href="#"><button type="button" class="block w-full px-4 py-2 mt-4 text-sm font-medium leading-5 text-center text-pink-900 text-sm border border-pink-700 rounded-lg">clear</button></a>
                              </div>
                              <div class="ml-4 mt-4 flex-shrink-0">
                                <a href="#"><button type="button" class="block w-full px-4 py-2 mt-4 text-sm font-medium leading-5 text-center text-teal-600 text-sm border border-teal-500 rounded-lg">Apply</button></a>
                              </div>
                          </div>
                            
                            
                            
                          </ul>
                            
                        </li>
                  
                      </ul>
                      
                </div>
                <!-- subcategory -->
                </div>
              </nav>
              
        </div>
          </div>
          </div>
          <div class="ml-6 max-w-6xl shadow-2xl shadow-outline-blue rounded-2xl pb-6">
            
            <div class="bg-white">
                
              <section aria-labelledby="features-heading" class="mx-auto max-w-7xl sm:px-2 lg:px-8">
                <div class="border-b mt-4 p-4 border-gray-200 pb-5 sm:flex sm:items-center sm:justify-between">
                    <h3 class="text-base font-semibold leading-6 text-gray-900">My hustle(s)</h3>
                    <div class="mt-3 sm:mt-0 sm:ml-4">
                      <a href="{{route('myhustle.create')}}" type="button" class="inline-flex items-center rounded-md border border-transparent bg-pink-900 px-4 py-2 text-sm font-medium text-white shadow-sm hover:bg-pink-600 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2">Post your hustle</a>
                    </div>
                  </div>
                  
                <div class="mx-auto max-w-2xl px-4 lg:max-w-none lg:px-0">
                  <div class="max-w-3xl">
                    
                  </div>
            
                  <div class="mt-4">
                    <div class="-mx-4 flex overflow-x-auto sm:mx-0">
                      <div class="flex-auto border-b border-gray-200 px-4 sm:px-0">
                        <div class="-mb-px flex space-x-10" aria-orientation="horizontal" role="tablist">
                          <button id="features-tab-1" class="gap-2 flex flex-row border-transparent text-gray-500 hover:text-gray-700 hover:border-gray-300 whitespace-nowrap border-b-2 py-6 text-sm font-medium" aria-controls="features-panel-1" role="tab" type="button">Sort by:
                            <a href=""><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="indigo" class="w-6 h-6">
                              <path stroke-linecap="round" stroke-linejoin="round" d="M3 7.5L7.5 3m0 0L12 7.5M7.5 3v13.5m13.5 0L16.5 21m0 0L12 16.5m4.5 4.5V7.5" />
                            </svg></a>  
                            <p>Recommended</p>                        
                          </button>
            
                          <a href="#"><button id="features-tab-3" class="gap-2 flex flex-row border-transparent text-gray-500 hover:text-gray-700 hover:border-gray-300 whitespace-nowrap border-b-2 py-6 text-sm font-medium" aria-controls="features-panel-3" role="tab" type="button">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="indigo" class="w-6 h-6">
                              <path stroke-linecap="round" stroke-linejoin="round" d="M12 6v6h4.5m4.5 0a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>                          
                            Anytime</button></a>
            
                          
                        </div>
                      </div>
                    </div>
            
                    @forelse ($myhustles as $hustle)
                    <div id="features-panel-1" class="space-y-16 pt-10 lg:pt-16 " aria-labelledby="features-tab-1" role="tabpanel" tabindex="0">
                        <div class="flex flex-col-reverse lg:grid lg:grid-cols-12 lg:gap-x-8">
                          <div class="mt-6 lg:col-span-5 lg:mt-0">
                            <h3 class="text-lg font-medium text-gray-900"> {{$hustle->title}} </h3>
                            <p class="mt-2 text-sm text-gray-500 text-indigo-900"> {{$hustle->price}} </p>
                            <p class="mt-2 text-sm text-gray-500">{{$hustle->desc}}</p>
                            <p class="flex flex-row mt-5 gap-2 text-gray-500"><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class=" w-5 h-5">
                              <path stroke-linecap="round" stroke-linejoin="round" d="M15 10.5a3 3 0 11-6 0 3 3 0 016 0z" />
                              <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 10.5c0 7.142-7.5 11.25-7.5 11.25S4.5 17.642 4.5 10.5a7.5 7.5 0 1115 0z" />
                            </svg> {{$hustle->location}} </p>

                            <div class="flex items-center space-x-4">
                                <div class="flex-shrink-0">
                                    <img class="h-10 w-10 rounded-full object-cover" src="{{ $hustle->user->profile_photo_url }}" alt="{{ Auth::user()->name }}" />

                                  {{-- <img class="h-8 w-8 rounded-full" src="{{$hustle->user->profile_photo_path}}" alt="{{$hustle->user->name}}"/> --}}
                                </div>
                                <div class="min-w-0 flex-1">
                                  <p class="truncate text-sm font-medium text-gray-900"> {{$hustle->user->name}} </p>
                                  
                                  <p class="truncate text-sm text-gray-500"></p>
                                  
                                </div>
                                {{-- <div>
                                  <a href="#" class="inline-flex items-center rounded-full border border-gray-300 bg-white px-2.5 py-0.5 text-sm font-medium leading-5 text-gray-700 shadow-sm hover:bg-gray-50">Comment(s) </a>
                                </div> --}}
                              </div>
                          </div>
                          <div class="lg:col-span-7">
                            <div class="aspect-w-2 aspect-h-1 overflow-hidden rounded-lg bg-gray-100 sm:aspect-w-5 sm:aspect-h-2">
                              <img src="{{ asset('myhustleImages/' . $hustle->image) }}" alt="Maple organizer base with slots, supporting white polycarbonate trays of various sizes." class="w-full h-48 object-cover object-center">
                            </div>
                          </div>
                        </div>
                      </div>
                      <hr>
                      <div class="mt-2 border">
                        <div class="-mt-px flex divide-x divide-gray-200">
                          <div class="flex w-0 flex-1">
                            <a href="" class="relative -mr-px inline-flex w-0 flex-1 items-center justify-center rounded-bl-lg border border-transparent py-4 text-sm font-medium text-gray-700 hover:text-gray-500">
                              {{-- <svg class="h-5 w-5 text-gray-400" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                <path d="M3 4a2 2 0 00-2 2v1.161l8.441 4.221a1.25 1.25 0 001.118 0L19 7.162V6a2 2 0 00-2-2H3z" />
                                <path d="M19 8.839l-7.77 3.885a2.75 2.75 0 01-2.46 0L1 8.839V14a2 2 0 002 2h14a2 2 0 002-2V8.839z" />
                              </svg> --}}
                              {{-- <svg class="h-5 w-5 text-gray-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor">
                                <path d="M4.9 20.6c.8-.5 1.5-1.1 2.2-1.8l5.5-5.5c.6-.6.6-1.6 0-2.2l-.7-.7c-.6-.6-1.6-.6-2.2 0l-5.5 5.5c-1.3 1.3-1.3 3.4 0 4.7l.7.7zm14.2-7.4c0-4-3.4-7.4-7.4-7.4S4.3 9.2 4.3 13.2c0 3.4 2.3 6.3 5.4 7.1v3.7c0 .8 1 1.2 1.6.7l3.8-3.1c.3-.3.3-.9 0-1.2l-3.8-3.1c-.5-.5-1.6-.1-1.6.7v2.5c-2.6-.9-4.5-3.3-4.5-6.2 0-3.7 3-6.7 6.7-6.7s6.7 3 6.7 6.7z"/>
                              </svg> --}}
                              <svg class="h-5 w-5 text-gray-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor">
                                <path d="M20 2H4c-1.1 0-2 .9-2 2v14c0 1.1.9 2 2 2h16c1.1 0 2-.9 2-2V4c0-1.1-.9-2-2-2zM4 4h16v10l-4-2.67L12 14l-4-2.67L4 14V4zm0 14v-4l4-2.67L12 14l4-2.67L20 10v4H4z"/>
                              </svg>
                              
                        
                              <span class="ml-3">Comments</span>
                            </a>
                          </div>
                          <div class="-ml-px flex w-0 flex-1">
                            <a href="tel:{{$hustle->user->mobile_number}}" class="relative inline-flex w-0 flex-1 items-center justify-center rounded-br-lg border border-transparent py-4 text-sm font-medium text-gray-700 hover:text-gray-500">
                              <svg class="h-5 w-5 text-gray-400" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                <path fill-rule="evenodd" d="M2 3.5A1.5 1.5 0 013.5 2h1.148a1.5 1.5 0 011.465 1.175l.716 3.223a1.5 1.5 0 01-1.052 1.767l-.933.267c-.41.117-.643.555-.48.95a11.542 11.542 0 006.254 6.254c.395.163.833-.07.95-.48l.267-.933a1.5 1.5 0 011.767-1.052l3.223.716A1.5 1.5 0 0118 15.352V16.5a1.5 1.5 0 01-1.5 1.5H15c-1.149 0-2.263-.15-3.326-.43A13.022 13.022 0 012.43 8.326 13.019 13.019 0 012 5V3.5z" clip-rule="evenodd" />
                              </svg>
                              <span class="ml-3">Call</span>
                            </a>
                          </div>
                        </div>
                      </div>
                    @empty
                        <p>No hustle posted yet</p>
                    @endforelse
                  
            
                  
                  </div>
                </div>
              </section>
            </div>
            
          </div>
        </div>
    </div>
      </div>

      <script>
        // Get all arrow and subcategory elements
        const dropdownToggles = document.querySelectorAll('.dropdown-toggle');
        const dropdownMenus = document.querySelectorAll('.dropdown-menu');

        // Loop through each arrow and add event listeners to show/hide subcategory
        dropdownToggles.forEach((dropdownToggle, index) => {
          const dropdownMenu = dropdownMenus[index];
          
          dropdownToggle.addEventListener('mouseenter', () => {
            dropdownMenu.classList.remove('hidden');
          });

          dropdownToggle.addEventListener('mouseleave', (e) => {
            if (!e.relatedTarget || !dropdownMenu.contains(e.relatedTarget)) {
              dropdownMenu.classList.add('hidden');
            }
          });

          dropdownMenu.addEventListener('mouseleave', (e) => {
            if (!e.relatedTarget || !dropdownToggle.contains(e.relatedTarget)) {
              dropdownMenu.classList.add('hidden');
            }
          });
        });

      </script>

</x-app-layout>