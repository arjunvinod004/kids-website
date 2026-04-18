<x-app-layout>
    <div class="py-16 md:py-24">
        <div class="max-w-3xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <!-- Celebration Header -->
            <div class="mb-12">
                <div class="w-32 h-32 bg-yellow-100 rounded-full flex items-center justify-center mx-auto mb-8 text-6xl animate-bounce">
                    {{ $score >= $total / 2 ? '🎉' : '💪' }}
                </div>
                <h1 class="text-4xl md:text-5xl font-kids font-extrabold text-gray-900 dark:text-white mb-4">
                    {{ $score >= $total / 2 ? 'Great Job!' : 'Keep Practicing!' }}
                </h1>
                <p class="text-xl text-gray-500 dark:text-gray-400 font-medium">
                    You scored <span class="text-blue-500 font-black">{{ $score }}</span> out of <span class="text-gray-900 dark:text-white">{{ $total }}</span>
                </p>
            </div>

            <!-- Score Details Card -->
            <div class="glass rounded-[3rem] p-10 md:p-16 mb-12 shadow-2xl relative overflow-hidden">
                <div class="grid grid-cols-2 gap-8 mb-12">
                    <div class="p-6 bg-blue-50 dark:bg-blue-900/20 rounded-[2rem]">
                        <p class="text-xs font-black uppercase tracking-widest text-blue-500 mb-2">Accuracy</p>
                        <p class="text-3xl font-kids font-extrabold text-blue-600">
                            {{ round(($score / $total) * 100) }}%
                        </p>
                    </div>
                    <div class="p-6 bg-yellow-50 dark:bg-yellow-900/20 rounded-[2rem]">
                        <p class="text-xs font-black uppercase tracking-widest text-yellow-600 mb-2">Stars Won</p>
                        <p class="text-3xl font-kids font-extrabold text-yellow-600">
                            +{{ $score * 5 }} ⭐
                        </p>
                    </div>
                </div>

                <div class="flex flex-col sm:flex-row gap-4 justify-center">
                    <a href="{{ route('quizzes.show', $quiz) }}" class="px-10 py-5 bg-blue-500 text-white rounded-[2rem] font-bold shadow-lg shadow-blue-500/30 hover:scale-105 transition-all">
                        Try Again
                    </a>
                    <a href="{{ route('stories.index') }}" class="px-10 py-5 bg-white dark:bg-gray-800 text-gray-900 dark:text-white border-2 border-gray-100 dark:border-gray-700 rounded-[2rem] font-bold hover:bg-gray-50 transition-all">
                        Read Stories
                    </a>
                </div>
            </div>

            <!-- Review Section -->
            <div class="text-left">
                <h2 class="text-2xl font-kids font-bold text-gray-900 dark:text-white mb-8 ml-4">Review your answers</h2>
                <div class="space-y-6">
                    @foreach($quiz->questions as $index => $question)
                        @php
                            $userAnswer = $userAnswers[$index] ?? null;
                            $isCorrect = $userAnswer == $question['correct'];
                        @endphp
                        <div class="glass rounded-3xl p-8 border-l-8 {{ $isCorrect ? 'border-green-500' : 'border-red-500' }}">
                            <div class="flex items-start gap-4">
                                <span class="w-8 h-8 rounded-full flex items-center justify-center font-black text-sm {{ $isCorrect ? 'bg-green-100 text-green-600' : 'bg-red-100 text-red-600' }}">
                                    {{ $index + 1 }}
                                </span>
                                <div class="flex-1">
                                    <h3 class="text-lg font-bold text-gray-900 dark:text-white mb-4 leading-snug">
                                        {{ $question['text'] }}
                                    </h3>
                                    <div class="grid sm:grid-cols-2 gap-4 text-sm">
                                        <div class="p-4 rounded-xl {{ $isCorrect ? 'bg-green-50 dark:bg-green-900/10' : 'bg-red-50 dark:bg-red-900/10' }}">
                                            <p class="text-[10px] font-black uppercase tracking-wider mb-1 {{ $isCorrect ? 'text-green-600' : 'text-red-600' }}">Your Answer</p>
                                            <p class="font-bold {{ $isCorrect ? 'text-green-700 dark:text-green-400' : 'text-red-700 dark:text-red-400' }}">
                                                {{ $question['options'][$userAnswer] ?? 'No answer' }}
                                            </p>
                                        </div>
                                        @if(!$isCorrect)
                                            <div class="p-4 bg-green-50 dark:bg-green-900/10 rounded-xl">
                                                <p class="text-[10px] font-black uppercase tracking-wider mb-1 text-green-600">Correct Answer</p>
                                                <p class="font-bold text-green-700 dark:text-green-400">
                                                    {{ $question['options'][$question['correct']] }}
                                                </p>
                                            </div>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
