<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Quiz;
use App\Models\Question;
use App\Models\QuizResult;
use App\Models\User; // Kalau mau sekalian buat dummy user
use Illuminate\Support\Facades\Hash;

class FullQuizSeeder extends Seeder
{
    public function run(): void

    {
        // Bikin User Dummy
        $user = User::firstOrCreate(
            ['email' => 'siswa@example.com'],
            [
                'name' => 'Siswa Pertama',
                'password' => Hash::make('password'), // password: password
            ]
        );

        // Bikin Quiz 1
        $quiz1 = Quiz::create([
            'title' => 'Quiz 1: Pengetahuan Umum',
            'passing_score' => 60,
        ]);

        // Soal untuk Quiz 1
        Question::insert([
            [
                'quiz_id' => $quiz1->id,
                'question' => 'Apa ibu kota Indonesia?',
                'options' => json_encode(['Jakarta', 'Bandung', 'Medan']),
                'answer' => 'Jakarta',
            ],
            [
                'quiz_id' => $quiz1->id,
                'question' => 'Berapa jumlah provinsi di Indonesia tahun 2024?',
                'options' => json_encode(['34', '38', '40']),
                'answer' => '38',
            ],
            [
                'quiz_id' => $quiz1->id,
                'question' => 'Siapa presiden pertama Indonesia?',
                'options' => json_encode(['Soekarno', 'Soeharto', 'Jokowi']),
                'answer' => 'Soekarno',
            ],
        ]);

        // Bikin Quiz 2
        $quiz2 = Quiz::create([
            'title' => 'Quiz 2: Matematika Dasar',
            'passing_score' => 70,
        ]);

        // Soal untuk Quiz 2
        Question::insert([
            [
                'quiz_id' => $quiz2->id,
                'question' => 'Berapakah hasil dari 2 + 3?',
                'options' => json_encode(['4', '5', '6']),
                'answer' => '5',
            ],
            [
                'quiz_id' => $quiz2->id,
                'question' => 'Berapakah hasil dari 7 x 6?',
                'options' => json_encode(['42', '36', '48']),
                'answer' => '42',
            ],
        ]);

        // Simpan hasil dummy QuizResult (opsional)
        QuizResult::create([
            'user_id' => $user->id,
            'quiz_id' => $quiz1->id,
            'score' => 80,
            'completed_at' => now(),
        ]);
    }

{
    // Seeder ini tidak lagi digunakan karena kuis dibuat langsung oleh guru.
}

}
