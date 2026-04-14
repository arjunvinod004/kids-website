<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ $story->title }} - {{ config('app.name') }}</title>
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600" rel="stylesheet" />
    <style>
        [x-cloak] { display: none !important; }
        .story-content { line-height: 1.9; font-size: 1rem; }
    </style>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="antialiased bg-[#FDFDFC] dark:bg-[#0a0a0a] text-[#1b1b18] dark:text-[#EDEDEC]">
    <nav class="bg-white dark:bg-[#1D0002] border-b border-[#19140035] dark:border-[#3E3E3A]">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between h-16 items-center">
                <div class="flex items-center gap-6">
                    <a href="/" class="font-bold text-xl text-[#1b1b18] dark:text-[#EDEDEC]">{{ config('app.name') }}</a>
                    <a href="{{ route('stories.index') }}" class="text-sm font-semibold text-[#F53003] dark:text-[#FF4433] border-b-2 border-[#F53003] dark:border-[#FF4433] pb-1">Stories</a>
                    <a href="{{ route('quizzes.index') }}" class="text-sm text-[#706f6c] dark:text-[#A1A09A] hover:text-[#1b1b18] dark:hover:text-[#EDEDEC] pb-1">Quizzes</a>
                </div>
                <div class="hidden sm:flex sm:items-center">
                    @auth
                        <a href="{{ url('/admin') }}" class="text-[#706f6c] dark:text-[#A1A09A] hover:text-[#1b1b18] dark:hover:text-[#EDEDEC] text-sm">Admin</a>
                    @endauth
                </div>
            </div>
        </div>
    </nav>

    <main class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8 py-16">
        <div class="public-ui-card mb-12">
            <div class="public-ui-topbar">
                <div class="title-group">
                    <h1 class="text-3xl font-bold text-[#1b1b18] dark:text-[#EDEDEC]">{{ $story->title }}</h1>
                    <p class="mt-3 text-[#706f6c] dark:text-[#A1A09A] max-w-2xl">Enjoy this story with a calm reading experience and easy navigation.</p>
                </div>
                <span class="public-ui-xpill">Published {{ $story->created_at->format('M j, Y') }}</span>
            </div>
        </div>

        <div class="public-ui-card">
            <div class="story-content text-[#1b1b18] dark:text-[#EDEDEC]">
                {!! nl2br(e($story->content)) !!}
            </div>
        </div>

        <div class="mt-8 flex flex-col gap-4 sm:flex-row sm:items-center sm:justify-between">
            <a href="{{ route('stories.index') }}" class="public-ui-btn-outline inline-flex items-center gap-2">
                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 20 20"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path></svg>
                Back to Stories
            </a>
            <a href="{{ route('quizzes.index') }}" class="public-ui-btn-brand">Browse Quizzes</a>
        </div>
    </main>
</body>
</html>
