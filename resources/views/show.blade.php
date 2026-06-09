@extends('master')

@section('title', $post->title)

@section('content')
    <div class="min-h-screen bg-gray-100 py-10">
        <div class="max-w-3xl mx-auto px-4">

            <!-- Home Button -->
            <div class="mb-6">
                <a href="{{ route('posts.index') }}"
                    class="inline-flex items-center px-5 py-3 bg-indigo-600 text-white font-medium rounded-xl shadow hover:bg-indigo-700 transition">
                    ← Home
                </a>
            </div>

            <div class="bg-white rounded-2xl shadow-lg p-8">

                <!-- Title -->
                <h1 class="text-4xl font-bold text-gray-900 mb-6">
                    {{ $post->title }}
                </h1>

                <!-- Description -->
                <div class="text-gray-700 text-lg leading-8">
                    {!! nl2br(e($post->description)) !!}
                </div>

            </div>

        </div>
    </div>
@endsection
