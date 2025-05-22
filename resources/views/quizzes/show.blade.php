<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>{{ $quiz->title }}</title>
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
            color: #ffffff;
        }

        .container {
            max-width: 700px;
            margin: auto;
            padding: 40px;
            background-color: #ffffff;
            border-radius: 12px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
        }

        .question {
            background-color: #f9fafb;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
        }

        .question h2 {
            font-size: 18px;
            color: #333333;
        }

        .options {
            margin-top: 15px;
        }

        .options label {
            display: flex;
            align-items: center;
            padding: 8px;
            background-color: #ffffff;
            border-radius: 8px;
            border: 1px solid #e0e0e0;
            transition: background-color 0.3s ease;
        }

        .options input[type="radio"]:checked+span {
            color: #2d6a4f;
        }

        .options input[type="radio"]:hover+span {
            color: #2d6a4f;
            cursor: pointer;
        }

        .options input[type="radio"] {
            margin-right: 12px;
            accent-color: #4c9f70;
        }

        .submit-btn {
            background-color: #28a745;
            color: white;
            font-weight: 600;
            padding: 12px 30px;
            border-radius: 12px;
            font-size: 18px;
            text-transform: uppercase;
            transition: background-color 0.3s ease;
        }

        .submit-btn:hover {
            background-color: #218838;
            cursor: pointer;
        }

        .submit-btn:focus {
            outline: none;
        }

        .question-number {
            background-color: #3b82f6;
            color: white;
            font-weight: bold;
            width: 30px;
            height: 30px;
            border-radius: 50%;
            display: inline-flex;
            align-items: center;
            justify-content: center;
        }
    </style>
</head>

<body class="flex-1 p-8 min-h-screen relative">
    <div class="container">
        <h1 class="text-3xl font-bold mb-6 text-center">{{ $quiz->title }}</h1>

        <form action="{{ url('/quiz/' . $quiz->id . '/submit') }}" method="POST" class="space-y-8">
            @csrf
            @foreach ($quiz->questions as $index => $question)
                <div class="question">
                    <div class="question-header flex items-center space-x-4 mb-4">
                        <span class="question-number">{{ $index + 1 }}</span>
                        <h2>{{ $question->question }}</h2>
                    </div>

                    <div class="options space-y-4">
                        @foreach ($question->options as $option)
                            <label class="flex items-center space-x-3">
                                <input type="radio" name="answers[{{ $question->id }}]" value="{{ $option }}"
                                    class="h-4 w-4">
                                <span class="text-gray-700">{{ $option }}</span>
                            </label>
                        @endforeach
                    </div>
                </div>
            @endforeach

            <div class="text-center">
                <button type="submit" class="submit-btn">
                    Kumpulkan Jawaban
                </button>
            </div>
        </form>
    </div>
</body>

</html>
