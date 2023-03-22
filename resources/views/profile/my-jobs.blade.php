<x-app-layout>
    <div class="mt-4 relative px-4 pt-8 pb-20 sm:px-6 lg:px-2 lg:pt-6 lg:pb-28 rounded-2xl">
        <div class="relative mx-auto max-w-7xl">
            <x-common.page-header backurl="{{ route('home') }}" currenturl="{{ request()->url() }}"
                title="{{ 'Your Jobs' }}" backtitle="{{ 'Home' }}" />

            <div class="border-b border-gray-200 bg-white px-4 py-5 sm:px-6">
                <div class="-ml-4 -mt-2 flex flex-wrap items-center justify-between sm:flex-nowrap">
                    <div class="ml-4 mt-2">
                        <h3 class="text-base font-semibold leading-6 text-gray-900">Your Jobs</h3>
                    </div>
                    <div class="ml-4 mt-2 flex-shrink-0">
                        <a href=" {{route('myhustle.create')}} " type="button"
                            class="relative inline-flex items-center rounded-md bg-pink-600 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-pink-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-pink-600">Post a new job </a>
                    </div>
                </div>
            </div>

            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <div class="p-6">
                        <ul class="divide-y divide-gray-200">

                            @forelse (auth()->user()->jobs()->paginate(10) as $job)
                            <li class="py-4 flex">
                                <div class="flex-1">
                                    <div class="font-semibold">{{ $job->title }}</div>
                                    <div class="text-gray-500">{{ $job->description }}</div>
                                </div>
                                <div class="flex items-center">
                                    <a href="{{ route('job.show', $job) }}" class="mr-2">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M2.036 12.322a1.012 1.012 0 010-.639C3.423 7.51 7.36 4.5 12 4.5c4.638 0 8.573 3.007 9.963 7.178.07.207.07.431 0 .639C20.577 16.49 16.64 19.5 12 19.5c-4.638 0-8.573-3.007-9.963-7.178z" />
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                          </svg>
                                          
                                    </a>
                                    <a href="{{ route('job.edit', $job) }}" class="mr-2">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M16.862 4.487l1.687-1.688a1.875 1.875 0 112.652 2.652L10.582 16.07a4.5 4.5 0 01-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 011.13-1.897l8.932-8.931zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0115.75 21H5.25A2.25 2.25 0 013 18.75V8.25A2.25 2.25 0 015.25 6H10" />
                                          </svg>
                                          
                                    </a>
                                    <form action="{{ route('job.destroy', $job) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="text-red-400 hover:text-red-600">
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                                <path stroke-linecap="round" stroke-linejoin="round" d="M14.74 9l-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 01-2.244 2.077H8.084a2.25 2.25 0 01-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 00-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 013.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 00-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 00-7.5 0" />
                                              </svg>     
                                        </button>
                                    </form>
                                </div>
                            </li>
                            @empty
                            <div>
                                <div class="border-l-4 border-yellow-400 bg-yellow-50 p-4">
                                    <div class="flex">
                                      <div class="flex-shrink-0">
                                        <svg class="h-5 w-5 text-yellow-400" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                          <path fill-rule="evenodd" d="M8.485 2.495c.673-1.167 2.357-1.167 3.03 0l6.28 10.875c.673 1.167-.17 2.625-1.516 2.625H3.72c-1.347 0-2.189-1.458-1.515-2.625L8.485 2.495zM10 5a.75.75 0 01.75.75v3.5a.75.75 0 01-1.5 0v-3.5A.75.75 0 0110 5zm0 9a1 1 0 100-2 1 1 0 000 2z" clip-rule="evenodd" />
                                        </svg>
                                      </div>
                                      <div class="ml-3">
                                        <p class="text-sm text-yellow-700">
                                          You have no job yet.
                                          <a href=" {{route('myhustle.create')}} " class="font-medium text-yellow-700 underline hover:text-yellow-600">Create a hustle to earn more money.</a>
                                        </p>
                                      </div>
                                    </div>
                                  </div>
                                  
                            @endforelse
                          
                              
                        </ul>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>


