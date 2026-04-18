<x-app-layout>
    <div class="py-16 md:py-24">
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
            <!-- Header -->
            <div class="mb-12">
                <a href="{{ route('stories.index') }}" class="inline-flex items-center gap-2 text-sm font-bold text-orange-500 hover:gap-4 transition-all mb-8">
                    ← Back to Library
                </a>
                <h1 class="text-4xl md:text-6xl font-kids font-extrabold text-gray-900 dark:text-white leading-tight mb-6">
                    {{ $story->title }}
                </h1>
                <div class="flex items-center gap-4">
                    <span class="px-4 py-2 bg-orange-100 dark:bg-orange-900/30 rounded-full text-orange-600 dark:text-orange-400 font-bold text-xs uppercase tracking-widest">
                         {{ $story->age_range ?? 'All Ages' }}
                    </span>
                    <span class="text-sm text-gray-400">
                        Published {{ $story->created_at->format('M j, Y') }}
                    </span>
                </div>
            </div>

            <!-- Content Card -->
            <div class="glass rounded-[3rem] p-8 md:p-16 shadow-2xl relative overflow-hidden">
                <!-- Decorative element -->
                <div class="absolute top-0 right-0 w-32 h-32 bg-orange-200/20 rounded-bl-[4rem] pointer-events-none"></div>

                <div class="prose prose-lg prose-orange max-w-none dark:prose-invert">
                    <div class="text-xl md:text-2xl text-gray-700 dark:text-gray-200 leading-relaxed font-medium font-kids">
                        {!! nl2br(e($story->content)) !!}
                    </div>
                </div>

                <!-- Footer Action -->
                <div class="mt-16 pt-12 border-t border-gray-100 dark:border-gray-800 flex flex-col sm:flex-row items-center justify-between gap-6">
                    <div class="flex items-center gap-4">
                        <div class="w-12 h-12 bg-orange-100 rounded-full flex items-center justify-center text-2xl">
                            👋
                        </div>
                        <div>
                            <p class="font-bold text-gray-900 dark:text-white">Enjoyed the story?</p>
                            <p class="text-sm text-gray-500">Share it with your friends!</p>
                        </div>
                    </div>
                    <a href="{{ route('quizzes.index') }}" class="px-8 py-4 bg-orange-500 text-white rounded-[2rem] font-bold shadow-lg shadow-orange-500/30 hover:scale-105 transition-all">
                        Take a Quiz!
                    </a>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>

