<x-app-layout>
    <div class="mt-4 py-10 px-4 pt-8 pb-20 sm:px-6 lg:px-2 lg:pt-6 lg:pb-28 rounded-2xl">
    <x-common.page-header $currenturl="{{route('dashboard')}}"/>
        
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

            <p class="mt-4 font-semibold">Found <a class="text-green-400">{{ $jobs->count() }}</a> jobs</p>
            <div class="grid grid-row-1 gap-4 sm:grid-cols-2">
                <div class="shadow-2xl m-2 rounded-2xl p-6">
                    <ul>
                        @forelse ($jobs as $job)
                            <li class="shadow-md rounded-2xl p-3 bg-gray-200 mt-4">
                                <a href=" {{ route('job.show',$job->id)}} ">
                                    <div>
                                        <div class="-ml-4 -mt-2 flex flex-wrap items-center justify-between sm:flex-nowrap">
                                            <div class="">
                                                <span class="h-20 w-20 rounded-full flex items-center justify-center ">
                                                    <!-- Heroicon name: mini/user -->
                                                    <img class="h-12 w-12 rounded-full object-cover"
                                                        src="{{ $job->user->profile_photo_url }}"
                                                        alt="{{ Auth::user()->name }}" />
                                                </span>
                                            </div>
                                            <div class="flex min-w-0 flex-1 justify-between space-x-4 ">
                                                <div>
                                                    <p><a href="#" class="font-medium text-gray-900">
                                                            {{ $job->title }} </a></p>
                                                    <p class="mt-3 text-gray-600"> {{ $job->user->name }} </p>
                                                    <p class="mt-3 text-gray-600">
                                                        @php
                                                            $now = Carbon\Carbon::now();
                                                            $daysRemaining = $now->diffInDays($job->deadline, false);
                                                        @endphp
                                                    <p>{{ $daysRemaining }} days remaining to the deadline</p>
                                                    </p>
                                                </div>
    
                                            </div>
    
                                            <div class="ml-4 mt-4 flex-shrink-0">
                                                <p> KES {{ $job->remuneration }} </p>
                                                <p class="mt-3 text-gray-600"> {{ $job->location }} </p>
                                            </div>
                                        </div>
    
                                
                                </a>
                              </li>
                        @empty
                            <div class="bg-white  sm:rounded-lg sm:col-8">
                                <div class="px-4 py-5 sm:p-6">
                                    <h3 class="text-base font-semibold leading-6 text-gray-900">No Job recommendation
                                        yet because your profile is not complete</h3>

                                    <div class="mt-3 text-sm leading-6">
                                        <a href=" {{ route('user-profile') }} "
                                            class="font-semibold text-pink-600 hover:text-pink-500">
                                            Update your profile
                                            <span aria-hidden="true"> &rarr;</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        @endforelse

                    </ul>
                </div>


                {{-- Pinned Job --}}
                @if (isset($pinned_job))
                    <div class="shadow-2xl m-4 rounded-2xl p-6">
                        <div>
                            <div class="-ml-4 -mt-2 flex flex-wrap items-center justify-between sm:flex-nowrap">
                                <div class="ml-4 mt-2">
                                    <span class="h-20 w-20 rounded-full flex items-center justify-center ">
                                        <img class="object-cover" src="{{ $pinned_job->user->profile_photo_url }}" />
                                    </span>
                                </div>

                                <div class="flex min-w-0 flex-1 justify-between ml-3">
                                    <div>
                                        <p><a href="#"
                                                class="font-medium text-gray-900">{{ $pinned_job->title }}</a></p>
                                        <p class="mt-3 text-gray-600"> {{ $pinned_job->user->name }} </p>
                                        <p class="mt-2  text-sm text-gray-500 sm:mt-0 sm:ml-6">
                                            <svg class="mr-1.5 h-5 w-5 flex-shrink-0 text-gray-400" viewBox="0 0 20 20"
                                                fill="currentColor" aria-hidden="true">
                                                <path fill-rule="evenodd"
                                                    d="M9.69 18.933l.003.001C9.89 19.02 10 19 10 19s.11.02.308-.066l.002-.001.006-.003.018-.008a5.741 5.741 0 00.281-.14c.186-.096.446-.24.757-.433.62-.384 1.445-.966 2.274-1.765C15.302 14.988 17 12.493 17 9A7 7 0 103 9c0 3.492 1.698 5.988 3.355 7.584a13.731 13.731 0 002.273 1.765 11.842 11.842 0 00.976.544l.062.029.018.008.006.003zM10 11.25a2.25 2.25 0 100-4.5 2.25 2.25 0 000 4.5z"
                                                    clip-rule="evenodd" />
                                            </svg>
                                            {{ $pinned_job->location }}
                                        </p>
                                    </div>

                                </div>
                                <div class="ml-4 mt-4 flex-shrink-0">
                                    <p> KES {{$pinned_job->remuneration}} </p>
                                    <p class="mt-3 text-gray-600">Closing:
                                        {{ $pinned_job->deadline->format('jS \o\f F Y') }}</p>
                                    <p class="mt-3 text-gray-600">3 days remaining</p>
                                    <p class="mt-3 text-gray-600">Posted:
                                        {{ $pinned_job->created_at->diffForHumans() }}</p>
                                </div>

                            </div>

                            <div class="relative flex flex-1 justify-center mt-4">
                                <a href="{{ route('job.apply', $pinned_job->id) }}"
                                    class="mt-3 inline-flex items-center flex-shrink-0 rounded-md border border-transparent bg-gradient-to-r from-pink-800 to-pink-900 bg-origin-border px-4 py-2 text-base font-medium text-white shadow-sm hover:from-pink-700 hover:to-pink-900">Apply
                                    Job</a>

                                @if (session('success'))
                                    <div class="rounded-md bg-green-50 p-4">
                                        <div class="flex">
                                            <div class="flex-shrink-0">
                                                <svg class="h-5 w-5 text-green-400" viewBox="0 0 20 20"
                                                    fill="currentColor" aria-hidden="true">
                                                    <path fill-rule="evenodd"
                                                        d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.857-9.809a.75.75 0 00-1.214-.882l-3.483 4.79-1.88-1.88a.75.75 0 10-1.06 1.061l2.5 2.5a.75.75 0 001.137-.089l4-5.5z"
                                                        clip-rule="evenodd" />
                                                </svg>
                                            </div>
                                            <div class="ml-3">
                                                <h3 class="text-sm font-medium text-green-800">
                                                    {{ session('success') }} </h3>
                                            </div>
                                        </div>
                                    </div>
                                @endif


                                {{-- check if the job is saved --}}

                                @if (in_array($pinned_job->id, $savedjobs))
                                    <button
                                        class="mt-3 ml-3 inline-flex items-center flex-shrink-0 rounded-md border border-pink-800 px-4 py-2 text-base font-medium text-black shadow-sm hover:from-pink-700 hover:to-pink-900">Saved</button>
                                @else
                                    <div x-data="{ inputVal: '{{ $pinned_job->id }}' }">
                                        {{-- <input type="text" x-model="inputVal"> --}}
                                        <button
                                            class="mt-3 ml-3 inline-flex items-center flex-shrink-0 rounded-md border border-pink-800 px-4 py-2 text-base font-medium text-black shadow-sm hover:from-pink-700 hover:to-pink-900"
                                            x-on:click.prevent="submitForm">Save</button>

                                        <form x-ref="hiddenForm" method="POST"
                                            action="{{ route('saved-jobs.store') }}" style="display:none"
                                            @submit.prevent>
                                            @csrf
                                            <input type="hidden" name="job_id" x-bind:value="inputVal">
                                        </form>
                                    </div>
                                @endif


                            </div>

                        </div>
                        <p class="font-semibold mt-10">About Company</p>
                        <p class="mt-4">
                            {{ $pinned_job->user->bio }}
                        </p>

                        <p class="font-semibold mt-10">Job Description</p>
                        <p class="mt-4">
                            {{ $pinned_job->desc }}
                            <br><br>
                        <p class="font-semibold">Responsibilities:</p>
                        <ul class="list-disc">

                            {{ $pinned_job->responsibilities }}

                        </ul>
                        <br>
                        <p class="font-semibold">Requirements:</p>
                        <ul class="list-disc">
                            {{ $pinned_job->requirements }}

                        </ul>
                        </p>
                        <div class="sm:col-span-2 sm:flex sm:justify-end">
                            <button type="submit"
                                class="mt-4 ml-4 inline-flex items-center justify-center whitespace-nowrap rounded-md border border-transparent bg-gradient-to-r from-pink-800 to-pink-900 bg-origin-border px-4 py-2 text-base font-medium text-white shadow-sm hover:from-pink-700 hover:to-pink-900">Apply
                                Job</button>
                        </div>
                    </div>
                @endif
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
