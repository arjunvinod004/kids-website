<x-app-layout>
    <div class="py-16 md:py-24">
        <div class="max-w-3xl mx-auto px-4 sm:px-6 lg:px-8">
            <!-- Header -->
            <div class="mb-12 text-center">
                <h1 class="text-4xl md:text-5xl font-kids font-extrabold text-gray-900 dark:text-white mb-4">
                    {{ $quiz->title }}
                </h1>
                <p class="text-gray-500 dark:text-gray-400 font-medium">Answer all questions to earn your stars! ⭐</p>
            </div>

            <!-- Quiz Container -->
            <div class="glass rounded-[3rem] p-8 md:p-12 shadow-2xl relative overflow-hidden" x-data="quizHandler()">
                <!-- Progress Bar -->
                <div class="mb-10">
                    <div class="flex justify-between items-center mb-3">
                        <span class="text-xs font-black uppercase tracking-widest text-blue-500">Progress</span>
                        <span class="text-xs font-black text-blue-500" x-text="Math.round(((currentQuestion + 1) / totalQuestions) * 100) + '%'">0%</span>
                    </div>
                    <div class="h-3 bg-gray-100 dark:bg-gray-800 rounded-full overflow-hidden p-0.5">
                        <div class="h-full bg-gradient-to-r from-blue-400 to-indigo-500 rounded-full transition-all duration-500" 
                             :style="'width: ' + (((currentQuestion + 1) / totalQuestions) * 100) + '%'"></div>
                    </div>
                </div>

                <!-- Questions -->
                <form id="quiz-form" action="{{ route('quizzes.submit', $quiz) }}" method="POST">
                    @csrf
                    @foreach($quiz->questions as $index => $question)
                        <div x-show="currentQuestion === {{ $index }}" 
                             x-transition:enter="transition ease-out duration-300"
                             x-transition:enter-start="opacity-0 transform translate-x-8"
                             x-transition:enter-end="opacity-100 transform translate-x-0"
                             class="space-y-8">
                            
                            <h2 class="text-2xl md:text-3xl font-kids font-bold text-gray-900 dark:text-white leading-tight">
                                {{ $question['text'] }}
                            </h2>

                            <div class="grid gap-4">
                                @foreach($question['options'] as $optIndex => $option)
                                    <label class="group relative flex items-center p-6 bg-white dark:bg-gray-800/50 border-2 border-gray-100 dark:border-gray-700 rounded-2xl cursor-pointer hover:border-blue-400 hover:bg-blue-50/30 transition-all shadow-sm active:scale-[0.98]">
                                        <input type="radio" 
                                               name="answers[{{ $index }}]" 
                                               value="{{ $optIndex }}" 
                                               class="hidden peer" 
                                               required
                                               @change="setAnswer({{ $index }}, {{ $optIndex }})">
                                        <div class="w-6 h-6 border-2 border-gray-300 rounded-full flex items-center justify-center mr-4 peer-checked:border-blue-500 peer-checked:bg-blue-500 transition-all">
                                            <div class="w-2 h-2 bg-white rounded-full opacity-0 peer-checked:opacity-100 transition-all"></div>
                                        </div>
                                        <span class="text-lg font-bold text-gray-700 dark:text-gray-300 group-hover:text-blue-600 transition-colors">
                                            {{ $option }}
                                        </span>
                                        <!-- Highlight Ring -->
                                        <div class="absolute inset-0 border-2 border-blue-500 rounded-2xl opacity-0 peer-checked:opacity-100 pointer-events-none transition-all"></div>
                                    </label>
                                @endforeach
                            </div>
                        </div>
                    @endforeach

                    <!-- Navigation -->
                    <div class="mt-12 flex items-center justify-between gap-4">
                        <button type="button" 
                                @click="prevQuestion()" 
                                x-show="currentQuestion > 0"
                                class="px-8 py-4 bg-gray-100 dark:bg-gray-800 text-gray-700 dark:text-gray-300 rounded-2xl font-bold hover:bg-gray-200 transition-all">
                            Back
                        </button>
                        <div x-show="currentQuestion === 0"></div>

                        <button type="button" 
                                @click="nextQuestion()" 
                                x-show="currentQuestion < totalQuestions - 1"
                                class="px-10 py-4 bg-blue-500 text-white rounded-2xl font-bold shadow-lg shadow-blue-500/30 hover:scale-105 transition-all">
                            Next Question
                        </button>

                        <button type="submit" 
                                x-show="currentQuestion === totalQuestions - 1"
                                class="px-10 py-4 bg-gradient-to-r from-green-500 to-emerald-600 text-white rounded-2xl font-bold shadow-lg shadow-green-500/30 hover:scale-105 transition-all">
                            Finish Adventure! 🚀
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <script>
        function quizHandler() {
            return {
                currentQuestion: 0,
                totalQuestions: {{ count($quiz->questions) }},
                answers: {},
                setAnswer(qIdx, aIdx) {
                    this.answers[qIdx] = aIdx;
                },
                nextQuestion() {
                    if (this.currentQuestion < this.totalQuestions - 1) {
                        this.currentQuestion++;
                    }
                },
                prevQuestion() {
                    if (this.currentQuestion > 0) {
                        this.currentQuestion--;
                    }
                }
            }
        }
    </script>
</x-app-layout>
