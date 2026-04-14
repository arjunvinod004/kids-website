<?php

namespace App\Http\Controllers;

use App\Models\Quiz;
use Illuminate\Http\Request;

class QuizController extends Controller
{
    public function index()
    {
        $quizzes = Quiz::all();
        return view('admin.quizzes.index', compact('quizzes'));
    }

    public function create()
    {
        return view('admin.quizzes.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'title_ml' => 'nullable|string',
            'questions' => 'required|json',
            'questions_ml' => 'nullable|json',
            'age_group' => 'required|in:3-5,6-9,10-14',
        ]);

        Quiz::create([
            'title' => $request->title,
            'title_ml' => $request->title_ml,
            'questions' => json_decode($request->questions, true),
            'questions_ml' => $request->filled('questions_ml') ? json_decode($request->questions_ml, true) : null,
            'age_group' => $request->age_group,
        ]);

        return redirect()->route('admin.quizzes.index')->with('success', 'Quiz created successfully.');
    }

    public function edit(Quiz $quiz)
    {
        return view('admin.quizzes.edit', compact('quiz'));
    }

    public function update(Request $request, Quiz $quiz)
    {
        $request->validate([
            'title' => 'required',
            'title_ml' => 'nullable|string',
            'questions' => 'required|json',
            'questions_ml' => 'nullable|json',
            'age_group' => 'required|in:3-5,6-9,10-14',
        ]);

        $quiz->update([
            'title' => $request->title,
            'title_ml' => $request->title_ml,
            'questions' => json_decode($request->questions, true),
            'questions_ml' => $request->filled('questions_ml') ? json_decode($request->questions_ml, true) : null,
            'age_group' => $request->age_group,
        ]);

        return redirect()->route('admin.quizzes.index')->with('success', 'Quiz updated successfully.');
    }

    public function destroy(Quiz $quiz)
    {
        $quiz->delete();
        return redirect()->route('admin.quizzes.index')->with('success', 'Quiz deleted successfully.');
    }

    public function publicIndex()
    {
        $quizzes = Quiz::all();
        return view('quizzes.index', compact('quizzes'));
    }

    public function show(Quiz $quiz)
    {
        return view('quizzes.show', compact('quiz'));
    }

    public function submit(Request $request, Quiz $quiz)
    {
        $answers = $request->input('answers', []);
        $score = 0;
        $totalQuestions = count($quiz->questions ?? []);
        $userAnswers = [];

        foreach ($quiz->questions ?? [] as $index => $question) {
            $userAnswers[$index] = $answers[$index] ?? null;
            if (isset($answers[$index]) && $answers[$index] == $question['correct']) {
                $score++;
            }
        }

        $percentage = $totalQuestions > 0 ? round(($score / $totalQuestions) * 100) : 0;

        return view('quizzes.result', compact('quiz', 'score', 'totalQuestions', 'percentage', 'userAnswers'));
    }
}
