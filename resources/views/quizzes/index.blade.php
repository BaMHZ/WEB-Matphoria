<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Daftar Quiz</title>
    @vite('resources/css/app.css')
    <style>
        body {
            background-color: #254aa7;
            /* tailwind blue-800 */
            background-image: url('storage/images/LogoTA.png');
            background-size: 400px;
            background-position: center;
            background-repeat: no-repeat;
        }

        h1 {
            color: #f1f1f1;
        }

        .card {
            background-color: #ffffff;
            border-radius: 10px;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
            padding: 20px;
            transition: all 0.3s ease;
        }

        .card:hover {
            transform: translateY(-5px);
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
        }

        .card h2 {
            color: #254aa7;
        }

        .card p {
            color: #4a4a4a;
        }

        .card .score {
            font-weight: bold;
        }

        .btn-start {
            display: block;
            width: 100%;
            padding: 12px 0;
            text-align: center;
            background-color: #1d4ed8;
            /* Blue 600 */
            color: white;
            border-radius: 8px;
            font-weight: 600;
            text-transform: uppercase;
            transition: background-color 0.3s ease;
        }

        .btn-start:hover {
            background-color: #2563eb;
            /* Blue 700 */
        }

        .grid {
            display: grid;
            grid-template-columns: 1fr;
            gap: 16px;
            max-width: 1200px;
            margin: 0 auto;
        }

        @media (min-width: 768px) {
            .grid {
                grid-template-columns: 1fr 1fr;
            }
        }

        @media (min-width: 1024px) {
            .grid {
                grid-template-columns: 1fr 1fr 1fr;
            }
        }

        /* Style for the score text */
        .score {
            font-weight: bold;
            margin-top: 12px;
        }

        .score-passed {
            color: green;
        }

        .score-not-done {
            color: red;
        }
    </style>
</head>

<body class="flex-1 p-8 min-h-screen relative">
    <h1 class="text-4xl font-bold mb-8 text-center">Daftar Quiz</h1>

    <div class="grid">
        @foreach ($quizzes as $quiz)
            <div class="card">
                <h2 class="text-2xl font-semibold mb-2">{{ $quiz->title }}</h2>
                <p class="mb-4">Minimal Lulus: <span class="font-semibold">{{ $quiz->passing_score }}%</span></p>

                @if (isset($results[$quiz->id]))
                    <p class="score score-passed">Nilai: {{ number_format($results[$quiz->id]->score, 2) }}%</p>
                @else
                    <p class="score score-not-done">Belum Dikerjakan</p>
                @endif

                <a href="{{ url('/quiz/' . $quiz->id) }}" class="btn-start">
                    Mulai Quiz
                </a>
            </div>
        @endforeach
    </div>
</body>

</html>
