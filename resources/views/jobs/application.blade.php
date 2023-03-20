<x-app-layout>
  <div class="mt-4 relative px-4 pt-8 pb-20 sm:px-6 lg:px-14 lg:pt-6 lg:pb-28 rounded-2xl">
      <div class="relative mx-auto max-w-7xl">
          <div>
              <div>
                  <nav class="sm:hidden" aria-label="Back">
                      <a href="#" class="flex items-center text-sm font-medium text-gray-500 hover:text-gray-700">
                          <svg class="-ml-1 mr-1 h-5 w-5 flex-shrink-0 text-gray-400" viewBox="0 0 20 20"
                              fill="currentColor" aria-hidden="true">
                              <path fill-rule="evenodd"
                                  d="M12.79 5.23a.75.75 0 01-.02 1.06L8.832 10l3.938 3.71a.75.75 0 11-1.04 1.08l-4.5-4.25a.75.75 0 010-1.08l4.5-4.25a.75.75 0 011.06.02z"
                                  clip-rule="evenodd" />
                          </svg>
                          Back
                      </a>
                  </nav>
                  <nav class="hidden sm:flex" aria-label="Breadcrumb">
                      <ol role="list" class="flex items-center space-x-4">
                          <li>
                              <div class="flex">
                                  <a href=" {{ route('job.index') }} "
                                      class="text-sm font-medium text-gray-500 hover:text-gray-700">Jobs</a>
                              </div>
                          </li>
                          <li>
                              <div class="flex items-center">
                                  <svg class="h-5 w-5 flex-shrink-0 text-gray-400" viewBox="0 0 20 20"
                                      fill="currentColor" aria-hidden="true">
                                      <path fill-rule="evenodd"
                                          d="M7.21 14.77a.75.75 0 01.02-1.06L11.168 10 7.23 6.29a.75.75 0 111.04-1.08l4.5 4.25a.75.75 0 010 1.08l-4.5 4.25a.75.75 0 01-1.06-.02z"
                                          clip-rule="evenodd" />
                                  </svg>
                                  <a href=""
                                      class="ml-4 text-sm font-medium text-gray-500 hover:text-gray-700"> Your Applications </a>
                              </div>
                          </li>
                          <li>
                              <div class="flex items-center">


                              </div>
                          </li>
                      </ol>
                  </nav>
              </div>
              <div class="mt-2 md:flex md:items-center md:justify-between">
                  <div class="min-w-0 flex-1">
                      <h2
                          class="text-2xl font-bold leading-7 text-gray-900 sm:truncate sm:text-3xl sm:tracking-tight">
                          Your Applications</h2>
                  </div>

              </div>
          </div>

          <div class="mt-4">
              <a href="{{ route('job.index') }}" class="font-semibold hover:text-blue-800 text-pink-700">Jobs</a> |
              <a href="{{ route('saved-jobs.index') }}" class="font-semibold hover:text-pink-700">Saved Jobs </a> |
              <a href="{{ route('job.applications') }}" class="font-semibold hover:text-pink-700"> Applications </a>
          </div>

          <div class="flex items-center justify-center px-4 py-2 border border-gray-300 rounded-md shadow-sm">
              <div class="flex items-center flex-1">
                  <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"
                      class="w-6 h-6 text-gray-400">
                      <path fill-rule="evenodd"
                          d="M8.5 15a6.5 6.5 0 100-13 6.5 6.5 0 000 13zm6.19-1.31l3.61 3.61a.75.75 0 11-1.06 1.06l-3.61-3.61a8 8 0 111.06-1.06z"
                          clip-rule="evenodd" />
                  </svg>
                  <input type="search" name="search" id="search"
                      class="block w-full py-2 pl-3 pr-10 leading-5 text-gray-900 placeholder-gray-500 bg-white border-gray-300 rounded-md focus:outline-none focus:placeholder-pink-900  sm:text-sm"
                      placeholder="Search for jobs">
              </div>
              <button type="submit"
                  class="inline-flex items-center justify-center px-4 py-2 ml-2 font-medium text-white bg-pink-700 border border-transparent rounded-md hover:bg-pink-500 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-pink-800 sm:text-sm">
                  Search
              </button>
          </div>

          <p class="mt-4 font-semibold">Found <a class="text-green-400">{{ $applications->count() }}</a> jobs</p>
          <div class="grid grid-row-1 gap-4 sm:grid-cols-2">
             
          </div>
      </div>

      <div class="overflow-hidden bg-white shadow sm:rounded-md">
        <ul role="list" class="divide-y divide-gray-200">

          {{-- Application --}}
          @forelse ($applications as $application)
          <li>
            <a href=" {{route('job.application.show',$application->id)}} " class="block hover:bg-gray-50">
              <div class="px-4 py-4 sm:px-6">
                <div class="flex items-center justify-between">
                  <p class="truncate text-sm font-medium text-gray-900"> {{$application->job->title}} </p>
                  <div class="ml-2 flex flex-shrink-0">
                    <p class="inline-flex rounded-full bg-green-100 px-2 text-xs font-semibold leading-5 text-green-800">Full-time</p>
                  </div>
                </div>
                <div class="mt-2 sm:flex sm:justify-between">
                  <div class="sm:flex">
                    <p class="flex items-center text-sm text-gray-500">
                      <svg class="mr-1.5 h-5 w-5 flex-shrink-0 text-gray-400" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                        <path d="M7 8a3 3 0 100-6 3 3 0 000 6zM14.5 9a2.5 2.5 0 100-5 2.5 2.5 0 000 5zM1.615 16.428a1.224 1.224 0 01-.569-1.175 6.002 6.002 0 0111.908 0c.058.467-.172.92-.57 1.174A9.953 9.953 0 017 18a9.953 9.953 0 01-5.385-1.572zM14.5 16h-.106c.07-.297.088-.611.048-.933a7.47 7.47 0 00-1.588-3.755 4.502 4.502 0 015.874 2.636.818.818 0 01-.36.98A7.465 7.465 0 0114.5 16z" />
                      </svg>
                      {{$application->job->category->name}}
                    </p>
                    <p class="mt-2 flex items-center text-sm text-gray-500 sm:mt-0 sm:ml-6">
                      <svg class="mr-1.5 h-5 w-5 flex-shrink-0 text-gray-400" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                        <path fill-rule="evenodd" d="M9.69 18.933l.003.001C9.89 19.02 10 19 10 19s.11.02.308-.066l.002-.001.006-.003.018-.008a5.741 5.741 0 00.281-.14c.186-.096.446-.24.757-.433.62-.384 1.445-.966 2.274-1.765C15.302 14.988 17 12.493 17 9A7 7 0 103 9c0 3.492 1.698 5.988 3.355 7.584a13.731 13.731 0 002.273 1.765 11.842 11.842 0 00.976.544l.062.029.018.008.006.003zM10 11.25a2.25 2.25 0 100-4.5 2.25 2.25 0 000 4.5z" clip-rule="evenodd" />
                      </svg>
                      {{$application->job->location}}
                    </p>
                  </div>
                  <div class="mt-2 flex items-center text-sm text-gray-500 sm:mt-0">
                    <svg class="mr-1.5 h-5 w-5 flex-shrink-0 text-gray-400" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                      <path fill-rule="evenodd" d="M5.75 2a.75.75 0 01.75.75V4h7V2.75a.75.75 0 011.5 0V4h.25A2.75 2.75 0 0118 6.75v8.5A2.75 2.75 0 0115.25 18H4.75A2.75 2.75 0 012 15.25v-8.5A2.75 2.75 0 014.75 4H5V2.75A.75.75 0 015.75 2zm-1 5.5c-.69 0-1.25.56-1.25 1.25v6.5c0 .69.56 1.25 1.25 1.25h10.5c.69 0 1.25-.56 1.25-1.25v-6.5c0-.69-.56-1.25-1.25-1.25H4.75z" clip-rule="evenodd" />
                    </svg>
                    <p>
                      Closing on
                      <time datetime="2020-01-07">December 7, 2023</time>
                    </p>
                  </div>
                </div>
              </div>
            </a>
          </li>
          @empty
              No Applications yet
          @endforelse
         
      
      
      
         
        </ul>
      </div>
      
  </div>

  
  </div>

  

  <script>
      function submitForm() {
          var form = this.$refs.hiddenForm;
          form.submit();
      }

      window.Alpine.data('submitForm', submitForm);
  </script>
</x-app-layout>
