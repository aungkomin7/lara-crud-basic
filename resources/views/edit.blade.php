@extends('master')

@section('title', $post->title)

@section('content')
    <div class="min-h-screen bg-gray-100 flex items-center justify-center p-6">
        <div class="w-full max-w-2xl bg-white rounded-2xl shadow-xl p-8">

            <h1 class="text-3xl font-bold text-gray-800 mb-6">
                Edit New Post
            </h1>

            <form action="{{ route('post.update',$post->id) }}" method="POST" class="space-y-6">
                @csrf
                @method("put")

                <!-- Title -->
                <div>
                    <label for="title" class="block text-sm font-medium text-gray-700 mb-2">
                        Title
                    </label>
                    <input value="{{ $post->title }}" type="text" id="title" name="title"
                        placeholder="Enter post title"
                        class="w-full px-4 py-3 border border-gray-300 rounded-xl focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500">
                </div>

                <!-- Description -->
                <div>
                    <label for="description" class="block text-sm font-medium text-gray-700 mb-2">
                        Description
                    </label>
                    <textarea id="description" name="description" rows="6" placeholder="Write your post description..."
                        class="w-full px-4 py-3 border border-gray-300 rounded-xl resize-none focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500">{{ $post->description }}</textarea>
                </div>

                <!-- Button -->
                <div class="flex justify-end">
                    <button type="submit"
                        class="px-6 py-3 bg-indigo-600 text-white font-semibold rounded-xl shadow-md hover:bg-indigo-700 transition duration-200">
                        Updata Post
                    </button>
                </div>
            </form>

        </div>
    </div>
@endsection
