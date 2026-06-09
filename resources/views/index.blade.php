@extends('master')

@section('title', 'All Posts')

@section('content')
    <div class="min-h-screen bg-gray-100 py-10">
        <div class="max-w-6xl mx-auto px-4">

            <!-- Header -->
            <div class="flex items-center justify-between mb-8">
                <h1 class="text-3xl font-bold text-gray-800">
                    Posts
                </h1>

                <a href="{{ route('posts.create') }}"
                    class="px-5 py-3 bg-indigo-600 text-white rounded-xl font-semibold hover:bg-indigo-700 transition">
                    + Create Post
                </a>
            </div>

            <!-- Success Message -->
            @if (session('success'))
                <div class="mb-6 p-4 bg-green-100 text-green-700 rounded-xl">
                    {{ session('success') }}
                </div>
            @endif

            <!-- Posts List -->
            <div class="grid gap-6">
                @forelse($posts as $post)
                    <div class="bg-white rounded-2xl shadow-md p-6 hover:shadow-lg transition">

                        <div class="flex justify-between items-start">
                            <div>
                                <h2 class="text-2xl font-bold text-gray-800">
                                    {{ $post->title }}
                                </h2>

                                <p class="mt-3 text-gray-600 leading-relaxed">
                                    {{ Str::limit($post->description, 200) }}
                                </p>
                            </div>
                        </div>

                        <div class="mt-6 flex items-center justify-between">
                            <span class="text-sm text-gray-500">
                                {{ $post->created_at->format('j M Y ') }}
                            </span>

                            <div class="flex gap-3">
                                <a href="{{ route('posts.show', $post->id) }}"
                                    class="px-4 py-2 bg-blue-500 text-white rounded-lg hover:bg-blue-600">
                                    See More
                                </a>

                                <a href="{{ route('posts.edit', $post->id) }}"
                                    class="px-4 py-2 bg-yellow-500 text-white rounded-lg hover:bg-yellow-600">
                                    Edit
                                </a>

                                <form action="{{ route('posts.destroy', $post->id) }}" method="POST">
                                    @csrf
                                    @method('DELETE')

                                    <button onclick="return confirm('Delete this post?')"
                                        class="px-4 py-2 bg-red-500 text-white rounded-lg hover:bg-red-600">
                                        Delete
                                    </button>
                                </form>
                            </div>
                        </div>

                    </div>
                @empty
                    <div class="bg-white rounded-2xl shadow-md p-10 text-center">
                        <h2 class="text-2xl font-bold text-gray-700">
                            No Posts Found
                        </h2>

                        <p class="text-gray-500 mt-2">
                            Create your first post to get started.
                        </p>
                    </div>
                @endforelse
            </div>

            {{-- <div class="container">
                @foreach ($users as $user)
                    {{ $user->name }}
                @endforeach
            </div> --}}

            {{-- {{ $posts->links() }} --}}
            {{ $posts->onEachSide(5)->links() }}

        </div>
    </div>
@endsection
