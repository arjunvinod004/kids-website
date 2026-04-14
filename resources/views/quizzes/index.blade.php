<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Quizzes - {{ config('app.name') }}</title>
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600" rel="stylesheet" />
    <style>
        [x-cloak] { display: none !important; }
    </style>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="antialiased bg-[#FDFDFC] dark:bg-[#0a0a0a] text-[#1b1b18] dark:text-[#EDEDEC]">
    <nav class="bg-white dark:bg-[#1D0002] border-b border-[#19140035] dark:border-[#3E3E3A]">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between h-16 items-center">
                <div class="flex items-center gap-6">
                    <a href="/" class="font-bold text-xl text-[#1b1b18] dark:text-[#EDEDEC]">{{ config('app.name') }}</a>
                    <a href="{{ route('stories.index') }}" class="text-sm text-[#706f6c] dark:text-[#A1A09A] hover:text-[#1b1b18] dark:hover:text-[#EDEDEC] pb-1">Stories</a>
                    <a href="{{ route('quizzes.index') }}" class="text-sm font-semibold text-[#F53003] dark:text-[#FF4433] border-b-2 border-[#F53003] dark:border-[#FF4433] pb-1">Quizzes</a>
                </div>
                <div class="hidden sm:flex sm:items-center">
                    @auth
                        <a href="{{ url('/admin') }}" class="text-[#706f6c] dark:text-[#A1A09A] hover:text-[#1b1b18] dark:hover:text-[#EDEDEC] text-sm">Admin</a>
                    @endauth
                </div>
            </div>
        </div>
    </nav>

    <main class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-16">
        <div class="public-ui-card mb-12">
            <div class="public-ui-topbar">
                <div class="title-group">
                    <h1 class="text-3xl font-bold text-[#1b1b18] dark:text-[#EDEDEC]">Fun Quizzes</h1>
                    <p class="mt-3 text-[#706f6c] dark:text-[#A1A09A] max-w-2xl">Test your knowledge with bright, interactive quizzes made for curious learners.</p>
                </div>
                <span class="public-ui-xpill">Quiz Library</span>
            </div>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            @forelse($quizzes as $quiz)
                <div class="public-ui-card">
                    <div class="flex items-center gap-3 bg-[#FDF2F2] dark:bg-[#4F0B0C] rounded-2xl p-4 mb-4">
                        <div class="w-12 h-12 rounded-3xl bg-[#FEE2E2] dark:bg-[#7F1D1D] flex items-center justify-center text-[#B91C1C] text-xl">??</div>
                        <div>
                            <h3 class="text-lg font-semibold text-[#1b1b18] dark:text-[#EDEDEC]">{{ $quiz->title }}</h3>
                            <p class="text-sm text-[#706f6c] dark:text-[#A1A09A]">{{ count($quiz->questions ?? []) }} questions</p>
                        </div>
                    </div>
                    <div class="flex items-center justify-between gap-3">
                        <a href="{{ route('quizzes.show', $quiz) }}" class="public-ui-btn-brand">Start Quiz</a>
                        <span class="public-ui-xpill">{{ $quiz->created_at->format('M j, Y') }}</span>
                    </div>
                </div>
            @empty
                <div class="col-span-full text-center py-16">
                    <div class="mx-auto mb-6 inline-flex h-24 w-24 items-center justify-center rounded-full bg-[#E5E7EB] dark:bg-[#3E3E3A] text-4xl">?</div>
                    <h3 class="text-2xl font-semibold text-[#1b1b18] dark:text-[#EDEDEC] mb-2">No quizzes available yet</h3>
                    <p class="text-[#706f6c] dark:text-[#A1A09A]">We’re preparing more quiz adventures — come back soon!</p>
                </div>
            @endforelse
        </div>
    </main>
</body>
</html>
