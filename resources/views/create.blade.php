@extends('master')

@section('title', 'Create Post')

@section('content')
    <div class="min-h-screen bg-gray-100 flex items-center justify-center p-6">
        <div class="w-full max-w-2xl bg-white rounded-2xl shadow-xl p-8">

            <h1 class="text-3xl font-bold text-gray-800 mb-6">
                Create New Post
            </h1>

            <form action="{{ route('posts.store') }}" method="POST" class="space-y-6">
                @csrf

                <!-- Title -->
                <div class="space-y-2">
                    <label for="title" class="block text-sm font-semibold text-gray-700">
                        Title
                        <span class="text-red-500">*</span>
                    </label>

                    <input type="text" id="title" name="title" value="{{ old('title') }}"
                        placeholder="Enter a unique post title"
                        class="w-full rounded-xl border px-4 py-3 shadow-sm transition
        @error('title')
            border-red-500 focus:border-red-500 focus:ring-red-500
        @else
            border-gray-300 focus:border-indigo-500 focus:ring-indigo-500
        @enderror
        focus:outline-none focus:ring-2">

                    <p class="text-xs text-gray-500">
                        Maximum 255 characters.
                    </p>

                    @error('title')
                        <p class="text-sm text-red-600 font-medium">
                            {{ $message }}
                        </p>
                    @enderror
                </div>

                <!-- Description -->
                <div class="space-y-2">
                    <label for="description" class="block text-sm font-semibold text-gray-700">
                        Description
                        <span class="text-red-500">*</span>
                    </label>

                    <textarea id="description" name="description" rows="8" placeholder="Write your post description..."
                        class="w-full rounded-xl border px-4 py-3 shadow-sm transition resize-y
        @error('description')
            border-red-500 focus:border-red-500 focus:ring-red-500
        @else
            border-gray-300 focus:border-indigo-500 focus:ring-indigo-500
        @enderror
        focus:outline-none focus:ring-2">{{ old('description') }}</textarea>

                    <p class="text-xs text-gray-500">
                        Provide detailed content for your post.
                    </p>

                    @error('description')
                        <p class="text-sm text-red-600 font-medium">
                            {{ $message }}
                        </p>
                    @enderror
                </div>



                <!-- Button -->
                <div class="flex justify-end">
                    <button type="submit"
                        class="px-6 py-3 bg-indigo-600 text-white font-semibold rounded-xl shadow-md hover:bg-indigo-700 transition duration-200">
                        Create Post
                    </button>
                </div>
            </form>

        </div>
    </div>
@endsection
