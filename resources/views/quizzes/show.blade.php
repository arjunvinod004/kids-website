<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ $quiz->title }} - {{ config('app.name') }}</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <style>
        .question-card { display: none; }
        .question-card.active { display: block; }
        .option-btn { transition: all 0.2s; }
        .option-btn:hover { transform: translateY(-2px); }
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
        <div class="public-ui-card mb-10">
            <div class="public-ui-topbar">
                <div class="title-group">
                    <h1 class="text-3xl font-bold text-[#1b1b18] dark:text-[#EDEDEC]">{{ $quiz->title }}</h1>
                    <p class="mt-3 text-[#706f6c] dark:text-[#A1A09A] max-w-2xl">Answer all questions with confidence and enjoy the journey.</p>
                </div>
                <span class="public-ui-xpill">Quiz</span>
            </div>
            <div class="mt-6 public-ui-progress-wrap">
                <div class="public-ui-progress-bar" id="quiz-progress" style="width: 0%"></div>
            </div>
        </div>

        <div class="public-ui-card">
            <form id="quiz-form" method="POST" action="{{ route('quizzes.submit', $quiz) }}">
                @csrf
                <div id="questions-container">
                    @foreach($quiz->questions ?? [] as $index => $question)
                        <div class="question-card {{ $index === 0 ? 'active' : '' }}" data-question="{{ $index }}">
                            <div class="mb-8">
                                <div class="flex items-center justify-between gap-4 mb-4">
                                    <div>
                                        <span class="block text-sm text-[#F53003] dark:text-[#FF4433] font-semibold">Question {{ $index + 1 }}</span>
                                        <h2 class="text-2xl font-bold text-[#1b1b18] dark:text-[#EDEDEC]">{{ $question['question'] }}</h2>
                                    </div>
                                    <span class="public-ui-xpill">{{ count($quiz->questions ?? []) }} total</span>
                                </div>
                                <div class="space-y-3">
                                    @foreach($question['options'] ?? [] as $optionIndex => $option)
                                        <button type="button" class="public-ui-qopt option-btn" data-option="{{ $optionIndex }}" onclick="selectOption(this, '{{ $index }}', '{{ $optionIndex }}')">
                                            <span class="font-semibold mr-3">{{ chr(65 + $optionIndex) }}.</span> {{ $option }}
                                        </button>
                                    @endforeach
                                </div>
                            </div>
                            <div class="flex flex-col gap-3 sm:flex-row sm:justify-between">
                                <button type="button" class="public-ui-btn-outline" id="prev-btn" onclick="previousQuestion()" style="display: none;">? Previous</button>
                                <button type="button" class="public-ui-btn-brand" id="next-btn" onclick="nextQuestion()" style="display: none;">Next</button>
                                @if($index === count($quiz->questions ?? []) - 1)
                                    <button type="submit" class="public-ui-btn-brand" id="submit-btn" style="display: none;">Submit Quiz</button>
                                @endif
                            </div>
                        </div>
                    @endforeach
                </div>
            </form>
        </div>

        <div class="mt-8 text-center">
            <a href="{{ route('quizzes.index') }}" class="public-ui-btn-outline">Back to Quizzes</a>
        </div>
    </main>

    <script>
        let currentQuestion = 0;
        const totalQuestions = {{ count($quiz->questions ?? []) }};
        const answers = new Array(totalQuestions).fill(null);

        function selectOption(button, questionIndex, optionIndex) {
            const questionCard = button.closest('.question-card');
            const optionButtons = questionCard.querySelectorAll('.option-btn');
            optionButtons.forEach(btn => btn.classList.remove('selected'));
            button.classList.add('selected');
            answers[parseInt(questionIndex)] = parseInt(optionIndex);
            updateNavigationButtons();
        }

        function updateNavigationButtons() {
            const prevBtn = document.getElementById('prev-btn');
            const nextBtn = document.getElementById('next-btn');
            const submitBtn = document.getElementById('submit-btn');
            prevBtn.style.display = currentQuestion > 0 ? 'inline-flex' : 'none';
            nextBtn.style.display = currentQuestion < totalQuestions - 1 ? 'inline-flex' : 'none';
            submitBtn.style.display = currentQuestion === totalQuestions - 1 && answers[currentQuestion] !== null ? 'inline-flex' : 'none';
        }

        function nextQuestion() { if (currentQuestion < totalQuestions - 1) showQuestion(currentQuestion + 1); }
        function previousQuestion() { if (currentQuestion > 0) showQuestion(currentQuestion - 1); }

        function showQuestion(questionIndex) {
            document.querySelectorAll('.question-card').forEach(card => card.classList.remove('active'));
            const target = document.querySelector(`.question-card[data-question="${questionIndex}"]`);
            if (target) target.classList.add('active');
            currentQuestion = questionIndex;
            document.getElementById('quiz-progress').style.width = `${((questionIndex + 1) / totalQuestions) * 100}%`;
            updateNavigationButtons();
        }

        document.getElementById('quiz-form').addEventListener('submit', function () {
            answers.forEach((answer, index) => {
                const input = document.createElement('input');
                input.type = 'hidden';
                input.name = `answers[${index}]`;
                input.value = answer;
                this.appendChild(input);
            });
        });

        updateNavigationButtons();
    </script>
</body>
</html>
