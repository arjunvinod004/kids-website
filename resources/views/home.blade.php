<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ config('app.name') }} - Fun Learning for Kids</title>
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600" rel="stylesheet" />
    <style>
        [x-cloak] { display: none !important; }
        .hero-section {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
        }
        .feature-card {
            transition: transform 0.3s ease;
        }
        .feature-card:hover {
            transform: translateY(-10px);
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
                        <a href="{{ route('stories.index') }}" class="border-transparent text-[#706f6c] dark:text-[#A1A09A] hover:text-[#1b1b18] dark:hover:text-[#EDEDEC] hover:border-[#F53003] dark:hover:border-[#FF4433] inline-flex items-center px-1 pt-1 border-b-2 text-sm font-medium">
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

    <section class="hero-section text-white py-20">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <h1 class="text-5xl font-bold mb-6">
                Welcome to {{ config('app.name') }}
            </h1>
            <p class="text-xl mb-8 max-w-2xl mx-auto">
                Discover amazing stories and test your knowledge with fun quizzes!
            </p>
            <div class="flex justify-center space-x-4">
                <a href="{{ route('stories.index') }}" class="bg-white text-[#1b1b18] px-8 py-3 rounded-lg font-semibold hover:bg-[#dbdbd7] transition-colors">
                    Read Stories
                </a>
                <a href="{{ route('quizzes.index') }}" class="bg-[#F53003] text-white px-8 py-3 rounded-lg font-semibold hover:bg-[#d12800] transition-colors">
                    Take Quizzes
                </a>
            </div>
        </div>
    </section>

    <section class="py-16 bg-[#dbdbd7] dark:bg-[#161615]">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-12">
                <h2 class="text-3xl font-bold text-[#1b1b18] dark:text-[#EDEDEC] mb-4">What We Offer</h2>
                <p class="text-[#706f6c] dark:text-[#A1A09A] text-lg">Engaging content designed for young learners</p>
            </div>

            <div class="grid md:grid-cols-2 gap-8">
                <div class="bg-white dark:bg-[#1D0002] rounded-lg shadow-md p-8 feature-card">
                    <div class="text-center mb-6">
                        <div class="w-16 h-16 bg-[#28a745] rounded-full flex items-center justify-center mx-auto mb-4">
                            <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.746 0 3.332.477 4.5 1.253v13C19.832 18.477 18.246 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"></path>
                            </svg>
                        </div>
                        <h3 class="text-xl font-semibold text-[#1b1b18] dark:text-[#EDEDEC] mb-3">Amazing Stories</h3>
                        <p class="text-[#706f6c] dark:text-[#A1A09A] mb-4">
                            Dive into captivating stories that spark imagination and teach valuable lessons.
                            Each story is carefully crafted for young readers.
                        </p>
                        <a href="{{ route('stories.index') }}" class="inline-flex items-center text-[#28a745] hover:text-[#218838] font-semibold">
                            Explore Stories →
                        </a>
                    </div>
                </div>

                <div class="bg-white dark:bg-[#1D0002] rounded-lg shadow-md p-8 feature-card">
                    <div class="text-center mb-6">
                        <div class="w-16 h-16 bg-[#007bff] rounded-full flex items-center justify-center mx-auto mb-4">
                            <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                            </svg>
                        </div>
                        <h3 class="text-xl font-semibold text-[#1b1b18] dark:text-[#EDEDEC] mb-3">Interactive Quizzes</h3>
                        <p class="text-[#706f6c] dark:text-[#A1A09A] mb-4">
                            Test your knowledge with fun, interactive quizzes. Learn while you play and
                            track your progress with instant feedback.
                        </p>
                        <a href="{{ route('quizzes.index') }}" class="inline-flex items-center text-[#007bff] hover:text-[#0056b3] font-semibold">
                            Start Quizzing →
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <footer class="bg-[#1b1b18] dark:bg-[#0a0a0a] text-white py-8">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <p class="text-[#A1A09A]">
                Made with ❤️ for curious young minds
            </p>
        </div>
    </footer>
</body>
</html>