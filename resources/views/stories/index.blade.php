<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Stories - {{ config('app.name') }}</title>
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600" rel="stylesheet" />
    <style>
        [x-cloak] { display: none !important; }
        .story-card {
            transition: transform 0.2s;
        }
        .story-card:hover {
            transform: translateY(-5px);
        }
    </style>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="antialiased bg-[#FDFDFC] dark:bg-[#0a0a0a] text-[#1b1b18] dark:text-[#EDEDEC]">
    <nav class="bg-white dark:bg-[#1D0002] border-b border-[#19140035] dark:border-[#3E3E3A]">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between h-16">
                <div class="flex">
                    <div class="shrink-0 flex items-center">
                        <a href="/" class="font-bold text-xl text-[#1b1b18] dark:text-[#EDEDEC]">
                            {{ config('app.name') }}
                        </a>
                    </div>
                    <div class="hidden space-x-8 sm:-my-px sm:ml-10 sm:flex">
                        <a href="{{ route('stories.index') }}" class="border-[#F53003] dark:border-[#FF4433] text-[#1b1b18] dark:text-[#EDEDEC] inline-flex items-center px-1 pt-1 border-b-2 text-sm font-medium">
                            Stories
                        </a>
                        <a href="{{ route('quizzes.index') }}" class="border-transparent text-[#706f6c] dark:text-[#A1A09A] hover:text-[#1b1b18] dark:hover:text-[#EDEDEC] hover:border-[#F53003] dark:hover:border-[#FF4433] inline-flex items-center px-1 pt-1 border-b-2 text-sm font-medium">
                            Quizzes
                        </a>
                    </div>
                </div>
                <div class="hidden sm:flex sm:items-center sm:ml-6">
                    @auth
                        <a href="{{ url('/admin') }}" class="text-[#706f6c] dark:text-[#A1A09A] hover:text-[#1b1b18] dark:hover:text-[#EDEDEC] text-sm">
                            Admin
                        </a>
                    @endauth
                </div>
            </div>
        </div>
    </nav>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="text-center mb-12">
                <h1 class="text-4xl font-bold text-[#1b1b18] dark:text-[#EDEDEC] mb-4">
                    Amazing Stories
                </h1>
                <p class="text-xl text-[#706f6c] dark:text-[#A1A09A] max-w-2xl mx-auto">
                    Discover captivating stories that spark imagination and teach valuable lessons
                </p>
            </div>

            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
                @forelse($stories as $story)
                    <div class="bg-white dark:bg-[#1D0002] rounded-lg shadow-md overflow-hidden story-card">
                        <div class="p-6">
                            <div class="flex items-center mb-4">
                                <div class="w-12 h-12 bg-[#28a745] rounded-full flex items-center justify-center mr-4">
                                    <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.746 0 3.332.477 4.5 1.253v13C19.832 18.477 18.246 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"></path>
                                    </svg>
                                </div>
                                <div>
                                    <h3 class="text-lg font-semibold text-[#1b1b18] dark:text-[#EDEDEC]">{{ $story->title }}</h3>
                                    <p class="text-sm text-[#706f6c] dark:text-[#A1A09A]">
                                        {{ Str::limit(strip_tags($story->content), 100) }}
                                    </p>
                                </div>
                            </div>
                            <div class="flex justify-between items-center">
                                <a href="{{ route('stories.show', $story) }}" class="text-[#28a745] hover:text-[#218838] font-semibold text-sm">
                                    Read Story →
                                </a>
                                <span class="text-xs text-[#706f6c] dark:text-[#A1A09A]">
                                    {{ $story->created_at->format('M j, Y') }}
                                </span>
                            </div>
                        </div>
                    </div>
                @empty
                    <div class="col-span-full text-center py-12">
                        <div class="w-24 h-24 bg-[#dbdbd7] dark:bg-[#3E3E3A] rounded-full flex items-center justify-center mx-auto mb-4">
                            <svg class="w-12 h-12 text-[#706f6c] dark:text-[#A1A09A]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.746 0 3.332.477 4.5 1.253v13C19.832 18.477 18.246 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"></path>
                            </svg>
                        </div>
                        <h3 class="text-xl font-semibold text-[#1b1b18] dark:text-[#EDEDEC] mb-2">No stories available yet</h3>
                        <p class="text-[#706f6c] dark:text-[#A1A09A]">Check back later for amazing stories!</p>
                    </div>
                @endforelse
            </div>

            <div class="text-center mt-12">
                <a href="/" class="bg-[#706f6c] dark:bg-[#A1A09A] text-white px-6 py-3 rounded-lg font-semibold hover:bg-[#5a5957] dark:hover:bg-[#8a8986] transition-colors">
                    ← Back to Home
                </a>
            </div>
        </div>
    </div>
</body>
</html>