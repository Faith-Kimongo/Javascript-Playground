<x-app-layout>
    <div class="mx-auto max-w-4xl py-16 px-4 sm:py-8 sm:px-6 lg:px-8">
        <div class="rounded-2xl bg-white shadow-2xl">

            <div class="grid grid-cols-1 lg:grid-cols-2">
                <!-- Contact information -->

                <!-- job form -->
                <form action="{{ route('job.store') }}" method="POST" class="max-w-lg mx-auto">
                    @csrf
                    <div class="mb-4">
                        <label for="title" class="block font-medium text-gray-700">Title</label>
                        <input type="text" id="title" name="title" value="{{ old('title') }}" required
                            class="form-input mt-1 block w-full rounded-md border-gray-300">
                        @error('title')
                            <div class="text-red-500">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="mb-4">
                        <label for="location" class="block font-medium text-gray-700">Location</label>
                        <input type="text" id="location" name="location" value="{{ old('location') }}" required
                            class="form-input mt-1 block w-full rounded-md border-gray-300">
                        @error('location')
                            <div class="text-red-500">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="mb-4">
                        <label for="category_id" class="block font-medium text-gray-700">Category</label>
                        <select id="category_id" name="category_id" required
                            class="form-select mt-1 block w-full rounded-md border-gray-300">
                            <option value="">Select a category</option>
                            @foreach ($categories as $category)
                                <option value="{{ $category->id }}" {{ old('category_id') == $category->id ? 'selected' : '' }}>
                                    {{ $category->name }}
                                </option>
                            @endforeach
                        </select>
                        @error('category_id')
                            <div class="text-red-500">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="mb-4">
                        <label for="description" class="block font-medium text-gray-700">Description</label>
                        <textarea id="description" name="description" required
                            class="form-textarea mt-1 block w-full rounded-md border-gray-300">{{ old('description') }}</textarea>
                        @error('description')
                            <div class="text-red-500">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="mb-4">
                        <label for="responsibilities" class="block font-medium text-gray-700">Responsibilities</label>
                        <textarea id="responsibilities" name="responsibilities" required
                            class="form-textarea mt-1 block w-full rounded-md border-gray-300">{{ old('responsibilities') }}</textarea>
                        @error('responsibilities')
                            <div class="text-red-500">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="mb-4">
                        <label for="requirements" class="block font-medium text-gray-700">Requirements</label>
                        <textarea id="requirements" name="requirements" required
                            class="form-textarea mt-1 block w-full rounded-md border-gray-300">{{ old('requirements') }}</textarea>
                        @error('requirements')
                            <div class="text-red-500">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="mb-4">
                        <label for="remuneration" class="block font-medium text-gray-700">Remuneration</label>
                        <input type="text" id="remuneration" name="remuneration"/>
                    </div>                
                        
                
               
            </div>
        </div>
    </div>
</x-app-layout>
