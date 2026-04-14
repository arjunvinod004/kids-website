<?php

namespace App\Http\Controllers;

use App\Models\AppContent;
use App\Models\Quiz;
use App\Models\Story;
use Illuminate\Http\Request;

class AppController extends Controller
{
    public function index()
    {
        $stories = Story::all(['id', 'title', 'title_ml', 'content', 'content_ml', 'age_group'])->map(function (Story $story) {
            $contentEn = trim($story->content ?? '');
            $contentMl = trim($story->content_ml ?? '');
            $pagesEn = array_values(array_filter(preg_split('/\r?\n\s*\r?\n/', $contentEn), fn ($page) => trim($page) !== ''));
            $pagesMl = array_values(array_filter(preg_split('/\r?\n\s*\r?\n/', $contentMl !== '' ? $contentMl : $contentEn), fn ($page) => trim($page) !== ''));
            if (empty($pagesEn) && $contentEn !== '') {
                $pagesEn = [$contentEn];
            }
            if (empty($pagesMl) && ($contentMl !== '' || $contentEn !== '')) {
                $pagesMl = [$contentMl !== '' ? $contentMl : $contentEn];
            }

            return [
                'id' => $story->id,
                'title_en' => $story->title,
                'title_ml' => $story->title_ml ?? $story->title,
                'emoji' => '📖',
                'bg' => '#EFF6FF',
                'age_group' => $story->age_group,
                'pages_en' => $pagesEn,
                'pages_ml' => $pagesMl,
            ];
        });

        $quizzes = Quiz::all(['id', 'title', 'title_ml', 'questions', 'questions_ml', 'age_group'])->map(function (Quiz $quiz) {
            return [
                'id' => $quiz->id,
                'title_en' => $quiz->title,
                'title_ml' => $quiz->title_ml ?? $quiz->title,
                'age_group' => $quiz->age_group,
                'questions_en' => $quiz->questions ?? [],
                'questions_ml' => $quiz->questions_ml ?? $quiz->questions ?? [],
            ];
        });

        return view('app', [
            'appData' => [
                'stories' => $stories,
                'quizzes' => $quizzes,
            ],
        ]);
    }

    public function apiData()
    {
        $appData = AppContent::where('key', 'app_data')->first();

        return response()->json($appData ? $appData->value : []);
    }
}
