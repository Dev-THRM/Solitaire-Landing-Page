<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Post New Job') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    
                    <form action="{{ route('admin.jobs.update', $job) }}" method="POST" class="space-y-6">
                        @csrf
                        @method('PUT')
                        
                        <div>
                            <label for="title" class="block font-medium text-sm text-gray-700">Job Title</label>
                            <input id="title" class="block mt-1 w-full border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm" type="text" name="title" value="{{ old('title', $job->title) }}" required autofocus />
                        </div>

                        <div>
                            <label for="location" class="block font-medium text-sm text-gray-700">Location</label>
                            <input id="location" class="block mt-1 w-full border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm" type="text" name="location" value="{{ old('location', $job->location) }}" placeholder="e.g. Mumbai, India" required />
                        </div>

                        <div>
                            <label for="type" class="block font-medium text-sm text-gray-700">Job Type</label>
                            <select id="type" name="type" class="block mt-1 w-full border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm" required>
                                <option value="Full-time" {{ old('type', $job->type) == 'Full-time' ? 'selected' : '' }}>Full-time</option>
                                <option value="Part-time" {{ old('type', $job->type) == 'Part-time' ? 'selected' : '' }}>Part-time</option>
                                <option value="Contract" {{ old('type', $job->type) == 'Contract' ? 'selected' : '' }}>Contract</option>
                            </select>
                        </div>

                        <div>
                            <label for="description" class="block font-medium text-sm text-gray-700">Description</label>
                            <textarea id="description" name="description" rows="8" class="block mt-1 w-full border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm" required>{{ old('description', $job->description) }}</textarea>
                        </div>

                        <div class="flex items-center justify-end mt-4">
                            <button type="submit" class="inline-flex items-center px-4 py-2 bg-blue-600 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-blue-700 focus:bg-blue-700 active:bg-blue-900 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 transition ease-in-out duration-150">
                                Update Job
                            </button>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>
</x-app-layout>
