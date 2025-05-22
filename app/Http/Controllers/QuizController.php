<?php

namespace App\Http\Controllers;

use App\Models\Quiz;
use Illuminate\Http\Request;
use App\Models\QuizResult;
use Illuminate\Support\Facades\Auth;

class QuizController extends Controller
{
    public function index()
    {
        $quizzes = Quiz::all();
        $results = QuizResult::where('user_id', Auth::id())->get()->keyBy('quiz_id');
        return view('quizzes.index', compact('quizzes', 'results'));
    }

    public function show($id)
{
    $quiz = Quiz::with('questions')->findOrFail($id);

    // Cek apakah user sudah lulus quiz sebelumnya
    $previousQuiz = Quiz::where('id', '<', $quiz->id)->orderBy('id', 'desc')->first();
    if ($previousQuiz) {
        $previousResult = QuizResult::where('user_id', Auth::id())
            ->where('quiz_id', $previousQuiz->id)
            ->where('passed', true)
            ->first();

        if (!$previousResult) {
            return redirect()->route('quizzes.index')->with('error', 'Selesaikan dan lulus kuis sebelumnya dulu!');
        }
    }

    return view('quizzes.show', compact('quiz'));
}

    public function submit(Request $request, $id)
    {
    $quiz = Quiz::with('questions')->findOrFail($id);
    $score = 0;
    $pointPerQuestion = 100 / $quiz->questions->count();

    foreach ($quiz->questions as $question) {
        if ($request->input('answers.' . $question->id) == $question->answer) {
            $score += $pointPerQuestion;
        }
    }

    $passed = $score >= $quiz->passing_score;

QuizResult::updateOrCreate(
    ['user_id' => Auth::id(), 'quiz_id' => $quiz->id],
    [
        'score' => $score,
        'passed' => $passed,
        'completed_at' => now()
    ]
);

    return view('quizzes.result', compact('score', 'quiz'));
    }
}
