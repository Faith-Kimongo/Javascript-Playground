<x-app-layout>
    <div class="mt-4 border-b border-gray-200 bg-white px-4 py-5 sm:px-6">
        <h3 class="text-base font-semibold leading-6 text-gray-900">Job Applications</h3>
        <p class="mt-1 text-sm text-gray-500">All jobs applied</p>
      </div>
    <div class="overflow-hidden bg-white shadow sm:rounded-md">
        <ul role="list" class="divide-y divide-gray-200">

            @forelse ($applications as $application)
            <li>
              <a href=" {{route('job.application.show',$application->id)}} " class="block hover:bg-gray-50">
                <div class="flex items-center px-4 py-4 sm:px-6">
                  <div class="flex min-w-0 flex-1 items-center">
                    <div class="flex-shrink-0">
                      {{-- <img class="h-12 w-12 rounded-full" src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt=""> --}}
                    </div>
                    <div class="min-w-0 flex-1 px-4 md:grid md:grid-cols-2 md:gap-4">
                      <div>
                        <p class="truncate text-sm font-medium text-indigo-600">{{$application->job->title}} </p>
                        <p class="mt-2 flex items-center text-sm text-gray-500">
                          <svg class="mr-1.5 h-5 w-5 flex-shrink-0 text-gray-400" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                            <path d="M3 4a2 2 0 00-2 2v1.161l8.441 4.221a1.25 1.25 0 001.118 0L19 7.162V6a2 2 0 00-2-2H3z" />
                            <path d="M19 8.839l-7.77 3.885a2.75 2.75 0 01-2.46 0L1 8.839V14a2 2 0 002 2h14a2 2 0 002-2V8.839z" />
                          </svg>
                          <span class="truncate">{{$application->job->location}}</span>
                        </p>
                      </div>
                      <div class="hidden md:block">
                        <div>
                          <p class="text-sm text-gray-900">
                            Applied on
                            <time datetime="2020-01-07"> {{$application->job->created_at->format('M d Y ')}}</time>
                          </p>
                          <p class="mt-2 flex items-center text-sm text-gray-500">
                            <svg class="mr-1.5 h-5 w-5 flex-shrink-0 text-green-400" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                              <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.857-9.809a.75.75 0 00-1.214-.882l-3.483 4.79-1.88-1.88a.75.75 0 10-1.06 1.061l2.5 2.5a.75.75 0 001.137-.089l4-5.5z" clip-rule="evenodd" />
                            </svg>
                            Completed phone screening
                          </p>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div>
                    <svg class="h-5 w-5 text-gray-400" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                      <path fill-rule="evenodd" d="M7.21 14.77a.75.75 0 01.02-1.06L11.168 10 7.23 6.29a.75.75 0 111.04-1.08l4.5 4.25a.75.75 0 010 1.08l-4.5 4.25a.75.75 0 01-1.06-.02z" clip-rule="evenodd" />
                    </svg>
                  </div>
                </div>
              </a>
            </li>
            @empty
                
            @endforelse
         
      
         
      
          
        </ul>
      </div>
      
</x-app-layout>