<x-app-layout>
    <div class="py-20">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <x-section-heading
                title="Fun Quizzes"
                subtitle="Test your knowledge and earn stars with our interactive quizzes"
            />

            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-10">
                @forelse($quizzes as $quiz)
                    <div class="group glass rounded-[2.5rem] p-8 hover:shadow-2xl transition-all border-2 border-transparent hover:border-blue-200">
                        <div class="w-16 h-16 bg-blue-100 rounded-2xl flex items-center justify-center text-3xl mb-6 group-hover:scale-110 transition-transform">
                             🧠
                        </div>
                        <h3 class="text-2xl font-kids font-extrabold text-gray-900 dark:text-white mb-4">
                            {{ $quiz->title }}
                        </h3>
                        <div class="flex flex-wrap gap-2 mb-8">
                            <span class="px-3 py-1 bg-blue-50 dark:bg-blue-900/20 text-blue-600 dark:text-blue-400 text-[10px] font-black uppercase tracking-widest rounded-full">
                                {{ $quiz->age_range ?? 'All Ages' }}
                            </span>
                            <span class="px-3 py-1 bg-gray-50 dark:bg-gray-800 text-gray-500 text-[10px] font-black uppercase tracking-widest rounded-full">
                                {{ count($quiz->questions ?? []) }} Questions
                            </span>
                        </div>
                        <div class="flex items-center justify-between">
                            <a href="{{ route('quizzes.show', $quiz) }}" class="px-6 py-3 bg-blue-500 text-white rounded-2xl font-bold text-sm shadow-lg shadow-blue-500/20 hover:scale-105 transition-all">
                                Start Quiz
                            </a>
                            <span class="text-[10px] font-medium text-gray-400 uppercase">
                                {{ $quiz->created_at->diffForHumans() }}
                            </span>
                        </div>
                    </div>
                @empty
                    <div class="col-span-full text-center py-20 glass rounded-[3rem]">
                        <div class="w-24 h-24 bg-gray-100 dark:bg-gray-800 rounded-full flex items-center justify-center mx-auto mb-6 text-4xl">
                            ❓
                        </div>
                        <h3 class="text-2xl font-kids font-bold text-gray-900 dark:text-white mb-2">No quizzes available yet</h3>
                        <p class="text-gray-500 dark:text-gray-400 mb-8">Check back later for new challenges!</p>
                        <a href="/" class="inline-flex items-center gap-2 text-blue-500 font-bold hover:gap-4 transition-all">
                            ← Back to Home
                        </a>
                    </div>
                @endforelse
            </div>

            @if(isset($quizzes) && method_exists($quizzes, 'hasPages') && $quizzes->hasPages())
                <div class="mt-16">
                    {{ $quizzes->links() }}
                </div>
            @endif
        </div>
    </div>
</x-app-layout>
