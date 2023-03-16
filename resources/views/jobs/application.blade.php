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
