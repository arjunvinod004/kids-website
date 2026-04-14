<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Quiz Results - {{ config('app.name') }}</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <style>
        .score-circle {
            width: 120px;
            height: 120px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 2rem;
            font-weight: bold;
            margin: 0 auto;
        }
        .celebration {
            animation: bounce 1s ease-in-out;
        }
        @keyframes bounce {
            0%, 20%, 50%, 80%, 100% { transform: translateY(0); }
            40% { transform: translateY(-10px); }
            60% { transform: translateY(-5px); }
        }
    </style>
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
        <div class="flex justify-center">
            <div class="max-w-2xl mx-auto">
                <div class="bg-white dark:bg-[#1D0002] rounded-lg shadow-md overflow-hidden">
                    <div class="bg-[#F53003] dark:bg-[#FF4433] text-white p-6 text-center">
                        <h2 class="text-2xl font-bold mb-0 flex items-center justify-center">
                            <svg class="w-6 h-6 mr-3" fill="currentColor" viewBox="0 0 20 20">
                                <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                            </svg>
                            Quiz Results
                        </h2>
                    </div>
                    <div class="p-6 text-center">
                        <h3 class="text-xl font-semibold mb-6 text-[#1b1b18] dark:text-[#EDEDEC]">{{ $quiz->title }}</h3>

                        <div class="score-circle mx-auto mb-6 {{ $percentage >= 70 ? 'bg-green-500 text-white celebration' : ($percentage >= 50 ? 'bg-yellow-500 text-gray-900' : 'bg-red-500 text-white') }}">
                            {{ $score }}/{{ $totalQuestions }}
                        </div>

                        <h4 class="text-lg font-semibold mb-6 text-[#1b1b18] dark:text-[#EDEDEC]">{{ $percentage }}% Correct</h4>

                        <div class="mb-6">
                            @if($percentage >= 90)
                                <div class="bg-green-50 dark:bg-green-900 border border-green-200 dark:border-green-700 rounded-md p-4">
                                    <div class="flex items-center justify-center">
                                        <svg class="w-5 h-5 text-yellow-500 mr-2" fill="currentColor" viewBox="0 0 20 20">
                                            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                                        </svg>
                                        <span class="text-green-800 dark:text-green-200 font-medium">Excellent! You're a quiz master!</span>
                                    </div>
                                </div>
                            @elseif($percentage >= 70)
                                <div class="bg-green-50 dark:bg-green-900 border border-green-200 dark:border-green-700 rounded-md p-4">
                                    <div class="flex items-center justify-center">
                                        <svg class="w-5 h-5 text-green-600 mr-2" fill="currentColor" viewBox="0 0 20 20">
                                            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                                        </svg>
                                        <span class="text-green-800 dark:text-green-200 font-medium">Great job! Well done!</span>
                                    </div>
                                </div>
                            @elseif($percentage >= 50)
                                <div class="bg-yellow-50 dark:bg-yellow-900 border border-yellow-200 dark:border-yellow-700 rounded-md p-4">
                                    <div class="flex items-center justify-center">
                                        <svg class="w-5 h-5 text-yellow-600 mr-2" fill="currentColor" viewBox="0 0 20 20">
                                            <path fill-rule="evenodd" d="M8.257 3.099c.765-1.36 2.722-1.36 3.486 0l5.58 9.92c.75 1.334-.213 2.98-1.742 2.98H4.42c-1.53 0-2.493-1.646-1.743-2.98l5.58-9.92zM11 13a1 1 0 11-2 0 1 1 0 012 0zm-1-8a1 1 0 00-1 1v3a1 1 0 002 0V6a1 1 0 00-1-1z" clip-rule="evenodd"></path>
                                        </svg>
                                        <span class="text-yellow-800 dark:text-yellow-200 font-medium">Good effort! Keep practicing!</span>
                                    </div>
                                </div>
                            @else
                                <div class="bg-red-50 dark:bg-red-900 border border-red-200 dark:border-red-700 rounded-md p-4">
                                    <div class="flex items-center justify-center">
                                        <svg class="w-5 h-5 text-red-600 mr-2" fill="currentColor" viewBox="0 0 20 20">
                                            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zM8.707 7.293a1 1 0 00-1.414 1.414L8.586 10l-1.293 1.293a1 1 0 101.414 1.414L10 11.414l1.293 1.293a1 1 0 001.414-1.414L11.414 10l1.293-1.293a1 1 0 00-1.414-1.414L10 8.586 8.707 7.293z" clip-rule="evenodd"></path>
                                        </svg>
                                        <span class="text-red-800 dark:text-red-200 font-medium">Don't worry! Try again to improve your score!</span>
                                    </div>
                                </div>
                            @endif
                        </div>

                        <div class="flex flex-col sm:flex-row gap-4 justify-center">
                            <a href="{{ route('quizzes.show', $quiz) }}" class="bg-[#F53003] dark:bg-[#FF4433] hover:bg-[#E02801] dark:hover:bg-[#E63946] text-white font-medium py-2 px-4 rounded-md transition-colors inline-flex items-center justify-center">
                                <svg class="w-4 h-4 mr-2" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M4 2a1 1 0 011 1v2.101a7.002 7.002 0 0111.601 2.566 1 1 0 11-1.885.666A5.002 5.002 0 005.999 7H9a1 1 0 010 2H4a1 1 0 01-1-1V3a1 1 0 011-1zm.008 9.057a1 1 0 011.276.61A5.002 5.002 0 0014.001 13H11a1 1 0 110-2h5a1 1 0 011 1v5a1 1 0 11-2 0v-2.101a7.002 7.002 0 01-11.601-2.566 1 1 0 01.61-1.276z" clip-rule="evenodd"></path>
                                </svg>
                                Try Again
                            </a>
                            <a href="{{ route('quizzes.index') }}" class="border border-[#F53003] dark:border-[#FF4433] text-[#F53003] dark:text-[#FF4433] hover:bg-[#F53003] dark:hover:bg-[#FF4433] hover:text-white font-medium py-2 px-4 rounded-md transition-colors inline-flex items-center justify-center">
                                <svg class="w-4 h-4 mr-2" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M3 4a1 1 0 011-1h12a1 1 0 011 1v2a1 1 0 01-1 1H4a1 1 0 01-1-1V4zM3 10a1 1 0 011-1h6a1 1 0 011 1v6a1 1 0 01-1 1H4a1 1 0 01-1-1v-6zM14 9a1 1 0 00-1 1v6a1 1 0 001 1h2a1 1 0 001-1v-6a1 1 0 00-1-1h-2z" clip-rule="evenodd"></path>
                                </svg>
                                More Quizzes
                            </a>
                        </div>
                    </div>
                </div>

                @if(isset($review) && $review)
                    <div class="bg-white dark:bg-[#1D0002] rounded-lg shadow-md overflow-hidden mt-8">
                        <div class="bg-[#FDFDFC] dark:bg-[#0a0a0a] p-4 border-b border-[#19140035] dark:border-[#3E3E3A]">
                            <h5 class="text-lg font-semibold mb-0 flex items-center text-[#1b1b18] dark:text-[#EDEDEC]">
                                <svg class="w-5 h-5 mr-2" fill="currentColor" viewBox="0 0 20 20">
                                    <path d="M10 12a2 2 0 100-4 2 2 0 000 4z"></path>
                                    <path fill-rule="evenodd" d="M.458 10C1.732 5.943 5.522 3 10 3s8.268 2.943 9.542 7c-1.274 4.057-5.064 7-9.542 7S1.732 14.057.458 10zM14 10a4 4 0 11-8 0 4 4 0 018 0z" clip-rule="evenodd"></path>
                                </svg>
                                Review Your Answers
                            </h5>
                        </div>
                        <div class="p-4">
                            @foreach($quiz->questions ?? [] as $index => $question)
                                <div class="mb-6 p-4 border border-[#19140035] dark:border-[#3E3E3A] rounded-md bg-[#FDFDFC] dark:bg-[#0a0a0a]">
                                    <h6 class="font-semibold mb-4 text-[#1b1b18] dark:text-[#EDEDEC]">{{ $index + 1 }}. {{ $question['question'] }}</h6>
                                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                                        <div>
                                            <p class="font-medium mb-2 text-[#706f6c] dark:text-[#A1A09A]">Your answer:</p>
                                            <p class="{{ isset($userAnswers[$index]) && $userAnswers[$index] == $question['correct'] ? 'text-green-600 dark:text-green-400' : 'text-red-600 dark:text-red-400' }}">
                                                {{ chr(65 + ($userAnswers[$index] ?? -1)) }}.
                                                {{ $question['options'][$userAnswers[$index] ?? -1] ?? 'Not answered' }}
                                            </p>
                                        </div>
                                        <div>
                                            <p class="font-medium mb-2 text-[#706f6c] dark:text-[#A1A09A]">Correct answer:</p>
                                            <p class="text-green-600 dark:text-green-400">
                                                {{ chr(65 + $question['correct']) }}.
                                                {{ $question['options'][$question['correct']] }}
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                @endif
            </div>
        </div>
    </main>
</body>
</html>
