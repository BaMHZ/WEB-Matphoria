<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" />
    @vite('resources/css/app.css')
    <title>Material</title>
</head>

<body>
    <div class="flex h-screen">
        <!-- Sidebar -->
        <aside class="w-64 bg-white text-indigo-800 p-4 flex-col overflow-y-auto">
            <div class="p-4 border-b border-gray-800">
                <div class="flex items-center justify-between">
                    <img src="{{ asset('images/LogoTA.png') }}" alt="Logo Mathporia"
                        class="max-h-24 w-auto flex-shrink-0">
                </div>
            </div>

            <!-- Search Bar -->
            <div class="p-4">
                <div class="relative">
                    <input type="text"
                        class="w-full bg-gray-800 text-white rounded-md pl-10 pr-4 py-2 text-sm focus:outline-none focus:ring-2 focus:ring-indigo-500"
                        placeholder="Search...">
                    <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                        <svg class="h-5 w-5 text-gray-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                            fill="currentColor">
                            <path fill-rule="evenodd"
                                d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z"
                                clip-rule="evenodd" />
                        </svg>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/js/all.min.js"></script>
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Mathporia - Dashboard</title>

    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap');

        * {
            font-family: 'Poppins', sans-serif;
        }

        .gradient-bg {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
        }

        .card-hover {
            transition: all 0.3s ease;
        }

        .card-hover:hover {
            transform: translateY(-5px);
            box-shadow: 0 20px 25px -5px rgba(0, 0, 0, 0.1), 0 10px 10px -5px rgba(0, 0, 0, 0.04);
        }

        .pulse-animation {
            animation: pulse 2s infinite;
        }

        @keyframes pulse {

            0%,
            100% {
                opacity: 1;
            }

            50% {
                opacity: 0.7;
            }
        }

        .bounce-animation {
            animation: bounce 1s infinite;
        }

        @keyframes bounce {

            0%,
            20%,
            53%,
            80%,
            100% {
                transform: translate3d(0, 0, 0);
            }

            40%,
            43% {
                transform: translate3d(0, -10px, 0);
            }

            70% {
                transform: translate3d(0, -5px, 0);
            }

            90% {
                transform: translate3d(0, -2px, 0);
            }
        }

        .float-animation {
            animation: float 3s ease-in-out infinite;
        }

        @keyframes float {
            0% {
                transform: translateY(0px);
            }

            50% {
                transform: translateY(-10px);
            }

            100% {
                transform: translateY(0px);
            }
        }

        .sidebar-item {
            transition: all 0.3s ease;
            position: relative;
            overflow: hidden;
        }

        .sidebar-item::before {
            content: '';
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 100%;
            background: linear-gradient(90deg, transparent, rgba(255, 255, 255, 0.2), transparent);
            transition: left 0.5s;
        }

        .sidebar-item:hover::before {
            left: 100%;
        }

        .progress-bar {
            background: linear-gradient(90deg, #4ade80, #22c55e);
            border-radius: 10px;
            height: 8px;
            position: relative;
            overflow: hidden;
        }

        .progress-bar::after {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: linear-gradient(90deg, transparent, rgba(255, 255, 255, 0.3), transparent);
            animation: shimmer 2s infinite;
        }

        @keyframes shimmer {
            0% {
                transform: translateX(-100%);
            }

            100% {
                transform: translateX(100%);
            }
        }

        .notification-dot {
            animation: ping 1s cubic-bezier(0, 0, 0.2, 1) infinite;
        }

        @keyframes ping {

            75%,
            100% {
                transform: scale(2);
                opacity: 0;
            }
        }

        @keyframes float-slow {

            0%,
            100% {
                transform: translateY(0);
            }

            50% {
                transform: translateY(-6px);
            }
        }

        .animate-float-slow {
            animation: float-slow 4s ease-in-out infinite;
        }

        @keyframes spin-slow {
            0% {
                transform: rotate(0deg);
            }

            100% {
                transform: rotate(360deg);
            }
        }

        .animate-spin-slow {
            animation: spin-slow 20s linear infinite;
        }
    </style>
</head>

<body class="bg-gray-50">
    <div class="flex min-h-screen">
        <!-- Sidebar dengan animasi -->
        <aside class="w-64 bg-white shadow-2xl relative overflow-y-auto flex-shrink-0">
            <!-- Background pattern -->
            <div class="absolute inset-0 opacity-5">
                <div class="absolute inset-0"
                    style="background-image: repeating-linear-gradient(45deg, transparent, transparent 10px, rgba(0,0,0,.1) 10px, rgba(0,0,0,.1) 20px);">
                </div>
            </div>

            <!-- Logo dengan animasi float -->
            <div class="p-6 border-b border-gray-200 relative z-10">
                <div class="flex items-center justify-center">
                    <div class="float-animation bg-gradient-to-r from-blue-500 to-purple-600 p-3 rounded-xl shadow-lg">
                        <i class="fas fa-calculator text-white text-2xl"></i>
                    </div>
                    <div class="flex items-center justify-between">
                        <img src="{{ asset('images/LogoTA.png') }}" alt="Logo Mathporia"
                            class="max-h-24 w-auto flex-shrink-0">

                    </div>
                </div>
            </div>


            <nav class="mt-5 px-2">
                <!-- Main Navigation -->
                <div class="space-y-4">
                    <!-- Dashboard -->
                    <a href="{{ route('home') }}"
                        class="flex items-center px-4 py-2.5 text-sm font-medium rounded-lg transition-all duration-200
                         {{ Request::routeIs('home') ? 'bg-gray-300 text-indigo-800' : 'text-blue hover:bg-gray-300 hover:text-indigo-800' }}">
                        <svg class="h-5 w-5 mr-3" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6" />
                        </svg>
                        Home
                    </a>
                    <!-- Material Dropdown -->
                    <div class="space-y-1">
                        <button
                            class="w-full flex items-center justify-between px-4 py-2.5 text-sm font-medium rounded-lg  text-indigo-800 hover:bg-gray-300 hover:text-indigo-800 focus:outline-none"
                            aria-expanded="false" aria-controls="material-dropdown">
                            <div class="flex items-center">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.5" stroke="currentColor" class="size-6">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M12 6.042A8.967 8.967 0 0 0 6 3.75c-1.052 0-2.062.18-3 .512v14.25A8.987 8.987 0 0 1 6 18c2.305 0 4.408.867 6 2.292m0-14.25a8.966 8.966 0 0 1 6-2.292c1.052 0 2.062.18 3 .512v14.25A8.987 8.987 0 0 0 18 18a8.967 8.967 0 0 0-6 2.292m0-14.25v14.25" />
                                </svg>
                                <span class="ml-3">Take Material</span>
                            </div>
                            <svg class="ml-2 h-5 w-5 transform transition-transform duration-200"
                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd"
                                    d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                    clip-rule="evenodd" />
                            </svg>
                        </button>
                        <div class="hidden space-y-1 pl-11" id="material-dropdown">
                            <a href="{{ route('material') }}"
                                class="group flex items-center px-4 py-2 text-sm rounded-md transition-all duration-200
                                {{ Request::is('material') ? 'bg-gray-300 text-indigo-800' : 'text-indigo-800 hover:bg-gray-300 hover:text-indigo-800' }}">
                                List of Materials
                            </a>
                            <a href="{{ route('discussion') }}"
                                class="group flex items-center px-4 py-2 text-sm rounded-md transition-all duration-200
                                {{ Request::is('discussion') ? 'bg-gray-300 text-indigo-800' : 'text-indigo-800 hover:bg-gray-300 hover:text-indigo-800' }}">
                                Discussion with Teacher
                            </a>

            <div class="p-4 relative z-10">
                <div class="relative w-40 h-40 mx-auto">
                    <!-- Central hub -->
                    <div
                        class="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 w-16 h-16 bg-white border-2 border-gray-200 rounded-full shadow-lg flex items-center justify-center cursor-pointer hover:shadow-xl transition-shadow duration-300">
                        <span class="text-2xl">🏠</span>
                    </div>

                    <!-- Orbiting elements -->
                    <div class="absolute inset-0 animate-spin-slow">
                        <div
                            class="absolute top-0 left-1/2 transform -translate-x-1/2 -translate-y-1/2 w-12 h-12 bg-gradient-to-br from-blue-400 to-blue-500 rounded-full shadow-lg flex items-center justify-center cursor-pointer hover:scale-110 transition-transform duration-300">
                            <span class="text-white text-lg">📚</span>
                        </div>
                    </div>

                    <div class="absolute inset-0 animate-spin-slow" style="animation-delay: -2s;">
                        <div
                            class="absolute top-0 left-1/2 transform -translate-x-1/2 -translate-y-1/2 w-12 h-12 bg-gradient-to-br from-green-400 to-green-500 rounded-full shadow-lg flex items-center justify-center cursor-pointer hover:scale-110 transition-transform duration-300">
                            <span class="text-white text-lg">🎯</span>
                        </div>
                    </div>

                    <div class="absolute inset-0 animate-spin-slow" style="animation-delay: -4s;">
                        <div
                            class="absolute top-0 left-1/2 transform -translate-x-1/2 -translate-y-1/2 w-12 h-12 bg-gradient-to-br from-purple-400 to-purple-500 rounded-full shadow-lg flex items-center justify-center cursor-pointer hover:scale-110 transition-transform duration-300">
                            <span class="text-white text-lg">⭐</span>
                        </div>
                    </div>
                </div>
            </div>

            <style>
                @keyframes spin-slow {
                    from {
                        transform: rotate(0deg);
                    }

                    to {
                        transform: rotate(360deg);
                    }
                }

                .animate-spin-slow {
                    animation: spin-slow 12s linear infinite;
                }
            </style>

            <nav class="mt-2 px-4 relative z-10">
                <!-- Navigation dengan hover effects -->
                <div class="space-y-2">
                    <!-- Dashboard -->
                    <a href="{{ route('home') }}"
                        class="sidebar-item flex items-center px-4 py-3 text-sm font-medium rounded-xl text-gray-700 hover:bg-gradient-to-r hover:from-blue-500 hover:to-blue-600 hover:text-white transition-all duration-300">
                        <i class="fas fa-home mr-3 text-lg"></i>
                        <span>Dashboard</span>
                        <div class="ml-auto w-2 h-2 bg-white rounded-full pulse-animation"></div>
                    </a>

                    <!-- Take Material Dropdown -->
                    <div class="space-y-1">
                        <button onclick="toggleDropdown('material')"
                            class="sidebar-item w-full flex items-center justify-between px-4 py-3 text-sm font-medium rounded-xl text-gray-700 hover:bg-gradient-to-r hover:from-green-500 hover:to-green-600 hover:text-white focus:outline-none transition-all duration-300">
                            <div class="flex items-center">
                                <i class="fas fa-book-open mr-3 text-lg"></i>
                                <span>Materi Belajar</span>
                            </div>
                            <i id="material-arrow" class="fas fa-chevron-down transition-transform duration-300"></i>
                        </button>
                        <div class="hidden space-y-1 pl-8 material-dropdown" id="material-dropdown">
                            <a href="{{ route('material') }}"
                                class="sidebar-item group flex items-center px-4 py-2 text-sm rounded-lg bg-green-600 text-white shadow-md transition-all duration-200">
                                <i class="fas fa-list-ul mr-2 text-xs"></i>
                                Daftar Materi
                            </a>
                            @php
                                $gurus = Auth::user()->gurus();
                            @endphp

                            @foreach ($gurus as $guru)
                                <a href="{{ route('discussion.show', $guru->id) }}"
                                    class="sidebar-item group flex items-center px-4 py-2 text-sm rounded-lg text-gray-600 hover:bg-green-100 hover:text-green-700 transition-all duration-200">
                                    <i class="fas fa-comments mr-2 text-xs"></i>
                                    Diskusi dengan {{ $guru->name }}
                                </a>
                            @endforeach


                        </div>
                    </div>

                    <!-- Quiz Dropdown -->
                    <div class="space-y-1">

                        <button
                            class="w-full flex items-center justify-between px-4 py-2.5 text-sm font-medium rounded-lg text-indigo-800 hover:bg-gray-300 hover:text-indigo-800 focus:outline-none"
                            aria-expanded="false" aria-controls="quiz-dropdown">
                            <div class="flex items-center">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.5" stroke="currentColor" class="size-6">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M8.25 7.5V6.108c0-1.135.845-2.098 1.976-2.192.373-.03.748-.057 1.123-.08M15.75 18H18a2.25 2.25 0 0 0 2.25-2.25V6.108c0-1.135-.845-2.098-1.976-2.192a48.424 48.424 0 0 0-1.123-.08M15.75 18.75v-1.875a3.375 3.375 0 0 0-3.375-3.375h-1.5a1.125 1.125 0 0 1-1.125-1.125v-1.5A3.375 3.375 0 0 0 6.375 7.5H5.25m11.9-3.664A2.251 2.251 0 0 0 15 2.25h-1.5a2.251 2.251 0 0 0-2.15 1.586m5.8 0c.065.21.1.433.1.664v.75h-6V4.5c0-.231.035-.454.1-.664M6.75 7.5H4.875c-.621 0-1.125.504-1.125 1.125v12c0 .621.504 1.125 1.125 1.125h9.75c.621 0 1.125-.504 1.125-1.125V16.5a9 9 0 0 0-9-9Z" />
                                </svg>

                                <span class="ml-3">Quiz</span>
                            </div>
                            <svg class="ml-2 h-5 w-5 transform transition-transform duration-200"
                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd"
                                    d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                    clip-rule="evenodd" />
                            </svg>
                        </button>
                        <div class="hidden space-y-1 pl-11" id="quiz-dropdown">
                            <a href="#"
                                class="group flex items-center px-4 py-2 text-sm rounded-md transition-all duration-200 text-indigo-800 hover:bg-gray-300 hover:text-indigo-800"
                                target="_blank">
                                Take a Quiz
                            </a>
                            <a href="https://www.desmos.com/scientific"
                                class="group flex items-center px-4 py-2 text-sm rounded-md transition-all duration-200 text-indigo-800 hover:bg-gray-300 hover:text-indigo-800"
                                target="_blank">
                                Scientific Calculator
                            </a>
                            <a href="#"
                                class="group flex items-center px-4 py-2 text-sm rounded-md transition-all duration-200 text-indigo-800 hover:bg-gray-300 hover:text-indigo-800">
                                Check History Quiz Score

                        <button onclick="toggleDropdown('quiz')"
                            class="sidebar-item w-full flex items-center justify-between px-4 py-3 text-sm font-medium rounded-xl text-gray-700 hover:bg-gradient-to-r hover:from-purple-500 hover:to-purple-600 hover:text-white focus:outline-none transition-all duration-300">
                            <div class="flex items-center">
                                <i class="fas fa-question-circle mr-3 text-lg"></i>
                                <span>Kuis & Latihan</span>
                            </div>
                            <i id="quiz-arrow" class="fas fa-chevron-down transition-transform duration-300"></i>
                        </button>
                        <div class="hidden space-y-1 pl-8" id="quiz-dropdown">
                            <a href="{{ route('siswa.fiturquiz') }}"
                                class="sidebar-item group flex items-center px-4 py-2 text-sm rounded-lg text-gray-600 hover:bg-purple-100 hover:text-purple-700 transition-all duration-200">
                                <i class="fas fa-play mr-2 text-xs"></i>
                                Mulai Kuis
                                <span
                                    class="ml-auto bg-yellow-400 text-yellow-800 text-xs px-2 py-1 rounded-full">Hot!</span>
                            </a>
                            <a href="https://www.desmos.com/scientific"
                                class="sidebar-item group flex items-center px-4 py-2 text-sm rounded-lg text-gray-600 hover:bg-purple-100 hover:text-purple-700 transition-all duration-200">
                                <i class="fas fa-calculator mr-2 text-xs"></i>
                                Kalkulator Ilmiah
                            </a>
                            <a href="{{ route('quiz.results') }}"
                                class="sidebar-item group flex items-center px-4 py-2 text-sm rounded-lg text-gray-600 hover:bg-purple-100 hover:text-purple-700 transition-all duration-200">
                                <i class="fas fa-history mr-2 text-xs"></i>
                                Riwayat Nilai

                            </a>
                        </div>
                    </div>


                    <!-- Member Dropdown -->
                    <div class="space-y-1">
                        <button
                            class="w-full flex items-center justify-between px-4 py-2.5 text-sm font-medium rounded-lg text-indigo-800 hover:bg-gray-300 hover:text-indigo-800 focus:outline-none"
                            aria-expanded="false" aria-controls="member-dropdown">
                            <div class="flex items-center">
                                <svg class="h-5 w-5 mr-3" xmlns="http://www.w3.org/2000/svg" fill="none"
                                    viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z" />
                                </svg>
                                Members
                            </div>
                            <svg class="ml-2 h-5 w-5 transform transition-transform duration-200"
                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd"
                                    d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                    clip-rule="evenodd" />
                            </svg>
                        </button>
                        <div class="hidden space-y-1 pl-11" id="member-dropdown">
                            <a href="{{ route('forums.index') }}"
                                class="group flex items-center px-4 py-2 text-sm rounded-md transition-all duration-200
                                {{ Request::is('forum') ? 'bg-gray-300 text-indigo-800' : 'text-indigo-800 hover:bg-gray-300 hover:text-indigo-800' }}">
                                Discussion Forum
                            </a>
                            <a href="#"
                                class="group flex items-center px-4 py-2 text-sm rounded-md transition-all duration-200 text-indigo-800 hover:bg-gray-300 hover:text-indigo-800">
                                Discussion Team

                    <!-- Members Dropdown -->
                    <div class="space-y-1">
                        <button onclick="toggleDropdown('member')"
                            class="sidebar-item w-full flex items-center justify-between px-4 py-3 text-sm font-medium rounded-xl text-gray-700 hover:bg-gradient-to-r hover:from-orange-500 hover:to-orange-600 hover:text-white focus:outline-none transition-all duration-300">
                            <div class="flex items-center">
                                <i class="fas fa-users mr-3 text-lg"></i>
                                <span>Komunitas</span>
                            </div>
                            <i id="member-arrow" class="fas fa-chevron-down transition-transform duration-300"></i>
                        </button>
                        <div class="hidden space-y-1 pl-8" id="member-dropdown">
                            <a href="{{ route('forums.index') }}"
                                class="sidebar-item group flex items-center px-4 py-2 text-sm rounded-lg text-gray-600 hover:bg-orange-100 hover:text-orange-700 transition-all duration-200">
                                <i class="fas fa-comment-dots mr-2 text-xs"></i>
                                Forum Diskusi
                            </a>
                            <a href="#"
                                class="sidebar-item group flex items-center px-4 py-2 text-sm rounded-lg text-gray-600 hover:bg-orange-100 hover:text-orange-700 transition-all duration-200">
                                <i class="fas fa-user-friends mr-2 text-xs"></i>
                                Grup Belajar

                            </a>
                        </div>
                    </div>

                    <!-- Calendar -->
                    <a href="{{ route('calendar.index') }}"

                        class="flex items-center px-4 py-2.5 text-sm font-medium rounded-lg transition-all duration-200
                            {{ Request::routeIs('calendar.calendar') ? 'bg-gray-300 text-indigo-800' : 'text-indigo-800 hover:bg-gray-300 hover:text-indigo-800' }}">
                        <svg class="h-5 w-5 mr-3" xmlns="http://www.w3.org/2000/svg" fill="none"
                            viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                        </svg>
                        Calendar
                    </a>

                    <!-- Documents -->
                    <a href="#"
                        class="flex items-center px-4 py-2.5 text-sm font-medium rounded-lg text-indigo-800 hover:bg-gray-300 hover:text-indigo-800 group transition-all duration-200">
                        <svg class="h-5 w-5 mr-3" xmlns="http://www.w3.org/2000/svg" fill="none"
                            viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" />
                        </svg>
                        Information

                        class="sidebar-item flex items-center px-4 py-3 text-sm font-medium rounded-xl text-gray-700 hover:bg-gradient-to-r hover:from-pink-500 hover:to-pink-600 hover:text-white transition-all duration-300">
                        <i class="fas fa-calendar-alt mr-3 text-lg"></i>
                        <span>Kalender</span>
                    </a>

                    <!-- Information -->
                    <a href="{{ route('setting.information') }}"
                        class="sidebar-item flex items-center px-4 py-3 text-sm font-medium rounded-xl text-gray-700 hover:bg-gradient-to-r hover:from-indigo-500 hover:to-indigo-600 hover:text-white transition-all duration-300">
                        <i class="fas fa-info-circle mr-3 text-lg"></i>
                        <span>Informasi</span>

                    </a>
                </div>
            </nav>


            <!-- User Profile -->
            <div class="mt-auto p-4 border-t border-gray-800">
                <div class="flex items-center">
                    <img class="h-8 w-8 rounded-full"
                        src="{{ Auth::user()->foto ? asset('storage/' . Auth::user()->foto) : 'https://via.placeholder.com/256' }}"
                        alt="{{ Auth::user()->name }}">
                    <div class="ml-3">
                        <p class="text-sm font-medium text-gray-700">{{ Auth::user()->name }}</p>
                        <p class="text-xs text-gray-400">{{ Auth::user()->email }}</p>
                    </div>
                </div>
            </div>

            <!-- Link Setting -->
            <div class="mt-4 flex justify-center">
                <a href="{{ route('setting.form') }}"
                    class="inline-flex items-center gap-2 text-gray-600 hover:text-white bg-gray-100 hover:bg-gray-500 px-5 py-2.5 rounded-xl shadow-sm transition duration-300 ease-in-out">
                    <!-- Ikon Gear -->
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"
                        xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M11.983 4.917a1 1 0 011.034 0l1.347.777a1 1 0 001.034 0l1.347-.777a1 1 0 011.034 0l.777 1.347a1 1 0 000 1.034l-.777 1.347a1 1 0 000 1.034l.777 1.347a1 1 0 010 1.034l-1.347.777a1 1 0 000 1.034l.777 1.347a1 1 0 01-1.034 0l-1.347-.777a1 1 0 00-1.034 0l-1.347.777a1 1 0 01-1.034 0l-.777-1.347a1 1 0 000-1.034l.777-1.347a1 1 0 000-1.034l-.777-1.347a1 1 0 010-1.034l1.347-.777a1 1 0 000-1.034l-.777-1.347a1 1 0 011.034 0zM12 15a3 3 0 100-6 3 3 0 000 6z">
                        </path>
                    </svg>
                    <span class="font-medium text-sm">Setting</span>
                </a>
            </div>

            <form id="logout-form" method="POST" action="{{ route('logout') }}">
                @csrf
                <a href="#" onclick="confirmLogout()"
                    class="flex items-center text-red-600 hover:text-white bg-red-200 hover:bg-red-600 px-4 py-2 rounded-lg transition duration-300">
                    <!-- Ikon Logout -->
                    <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" stroke-width="2"
                        viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M17 16l4-4m0 0l-4-4m4 4H7m6-10v4m0 12v-4"></path>
                    </svg>
                    <span>Logout</span>
                </a>
            </form>
        </aside>

        <!-- Main Content -->
        <main class="flex-1 p-8 bg-center bg-no-repeat min-h-screen relative"
            style="background-color: #254aa7; /* tailwind blue-800 */ background-image: url('storage/images/LogoTA.png'); background-size: 400px; background-position: center; background-repeat: no-repeat;">

            <!-- Judul Halaman -->
            <h1 class="text-3xl font-bold text-white drop-shadow-md mb-6">📚 List of Learning Materials</h1>

            <!-- Container Scrollable -->
            <div
                class="p-6 bg-white bg-opacity-80 rounded-lg shadow-lg h-[calc(100vh-100px)] overflow-y-auto backdrop-blur-md space-y-10">

                <!-- Loop Bab -->
                <!-- Contoh Bab 1 -->
                <section>
                    <h2 class="text-2xl font-bold text-gray-800 mb-4">🧮 Bab 1: Bilangan Berpangkat</h2>
                    <div class="space-y-3">
                        <div
                            class="p-4 rounded-lg bg-gradient-to-r from-blue-500 to-blue-700 text-white flex items-center shadow-md hover:scale-105 transition">
                            <div class="text-2xl mr-3 text-amber-500">
                                <i class="fas fa-scroll"></i>
                            </div>
                            <div>
                                <h3 class="font-semibold">Materi 1.1</h3>
                                <p class="text-sm opacity-80">Bilangan Berpangkat Bulat</p>
                            </div>
                        </div>
                        <div
                            class="p-4 rounded-lg bg-gradient-to-r from-blue-500 to-blue-700 text-white flex items-center shadow-md hover:scale-105 transition">
                            <div class="text-2xl mr-3 text-amber-500">
                                <i class="fas fa-scroll"></i>
                            </div>
                            <div>
                                <h3 class="font-semibold">Materi 1.2</h3>
                                <p class="text-sm opacity-80">Bilangan Bentuk Akar</p>
                            </div>
                        </div>
                        <div
                            class="p-4 rounded-lg bg-gradient-to-r from-blue-500 to-blue-700 text-white flex items-center shadow-md hover:scale-105 transition">
                            <div class="text-2xl mr-3 text-amber-500">
                                <i class="fas fa-scroll"></i>
                            </div>
                            <div>
                                <h3 class="font-semibold">Materi 1.3</h3>
                                <p class="text-sm opacity-80">Penulisan Bentuk Baku</p>
                            </div>
                        </div>
                    </div>
                </section>

                <!-- Bab 2 -->
                <section>
                    <h2 class="text-2xl font-bold text-gray-800 mb-4">🧮 Bab 2: Teorema Pythagoras</h2>
                    <div class="space-y-3">
                        <div
                            class="p-4 rounded-lg bg-gradient-to-r from-green-500 to-green-700 text-white flex items-center shadow-md hover:scale-105 transition">
                            <div class="text-2xl mr-3 text-amber-500">
                                <i class="fas fa-scroll"></i>
                            </div>
                            <div>
                                <h3 class="font-semibold">Materi 2.1</h3>
                                <p class="text-sm opacity-80">Konsep Pythagoras</p>
                            </div>
                        </div>
                        <div
                            class="p-4 rounded-lg bg-gradient-to-r from-green-500 to-green-700 text-white flex items-center shadow-md hover:scale-105 transition">
                            <div class="text-2xl mr-3 text-amber-500">
                                <i class="fas fa-scroll"></i>
                            </div>
                            <div>
                                <h3 class="font-semibold">Materi 2.2</h3>
                                <p class="text-sm opacity-80">Triple Pythagoras</p>
                            </div>
                        </div>
                        <div
                            class="p-4 rounded-lg bg-gradient-to-r from-green-500 to-green-700 text-white flex items-center shadow-md hover:scale-105 transition">
                            <div class="text-2xl mr-3 text-amber-500">
                                <i class="fas fa-scroll"></i>
                            </div>
                            <div>
                                <h3 class="font-semibold">Materi 2.3</h3>
                                <p class="text-sm opacity-80">Penerapan Teorema Pyhtagoras</p>
                            </div>
                        </div>
                    </div>
                </section>

                <!-- Bab 3 -->
                <section>
                    <h2 class="text-2xl font-bold text-gray-800 mb-4">🧮 Bab 3: Persamaan Linear dan Pertidaksamaan
                        Linier Satu Variabel</h2>
                    <div class="space-y-3">
                        <div
                            class="p-4 rounded-lg bg-gradient-to-r from-red-500 to-red-700 text-white flex items-center shadow-md hover:scale-105 transition">
                            <div class="text-2xl mr-3 text-amber-500">
                                <i class="fas fa-scroll"></i>
                            </div>
                            <div>
                                <h3 class="font-semibold">Materi 3.1</h3>
                                <p class="text-sm opacity-80">Memahami Konsep Persamaan Linier Satu Variabel</p>
                            </div>
                        </div>
                        <div
                            class="p-4 rounded-lg bg-gradient-to-r from-red-500 to-red-700 text-white flex items-center shadow-md hover:scale-105 transition">
                            <div class="text-2xl mr-3 text-amber-500">
                                <i class="fas fa-scroll"></i>
                            </div>
                            <div>
                                <h3 class="font-semibold">Materi 3.2</h3>
                                <p class="text-sm opacity-80">Menyelesaikan Persamaan Linier Satu Variabel</p>
                            </div>
                        </div>
                        <div
                            class="p-4 rounded-lg bg-gradient-to-r from-red-500 to-red-700 text-white flex items-center shadow-md hover:scale-105 transition">
                            <div class="text-2xl mr-3 text-amber-500">
                                <i class="fas fa-scroll"></i>
                            </div>
                            <div>
                                <h3 class="font-semibold">Materi 3.2</h3>
                                <p class="text-sm opacity-80">Menemukan Konsep Pertidaksamaan Linier Satu Variabel</p>
                            </div>
                        </div>
                        <div
                            class="p-4 rounded-lg bg-gradient-to-r from-red-500 to-red-700 text-white flex items-center shadow-md hover:scale-105 transition">
                            <div class="text-2xl mr-3 text-amber-500">
                                <i class="fas fa-scroll"></i>
                            </div>
                            <div>
                                <h3 class="font-semibold">Materi 3.2</h3>
                                <p class="text-sm opacity-80">Menyelesaikan Masalah terkait Pertidaksamaan Linier Satu
                                    Variabel</p>
                            </div>
                        </div>
                    </div>
                </section>

                <!-- Bab 4 -->
                <section>
                    <h2 class="text-2xl font-bold text-gray-800 mb-4">🧮 Bab 4: Relasi dan Fungsi</h2>
                    <div class="space-y-3">
                        <div
                            class="p-4 rounded-lg bg-gradient-to-r from-yellow-500 to-yellow-700 text-white flex items-center shadow-md hover:scale-105 transition">
                            <div class="text-2xl mr-3 text-amber-500">
                                <i class="fas fa-scroll"></i>
                            </div>
                            <div>
                                <h3 class="font-semibold">Materi 4.1</h3>
                                <p class="text-sm opacity-80">Memahami Relasi</p>
                            </div>
                        </div>
                        <div
                            class="p-4 rounded-lg bg-gradient-to-r from-yellow-500 to-yellow-700 text-white flex items-center shadow-md hover:scale-105 transition">
                            <div class="text-2xl mr-3 text-amber-500">
                                <i class="fas fa-scroll"></i>
                            </div>
                            <div>
                                <h3 class="font-semibold">Materi 4.2</h3>
                                <p class="text-sm opacity-80">Memahami Fungsi</p>
                            </div>
                        </div>
                        <div
                            class="p-4 rounded-lg bg-gradient-to-r from-yellow-500 to-yellow-700 text-white flex items-center shadow-md hover:scale-105 transition">
                            <div class="text-2xl mr-3 text-amber-500">
                                <i class="fas fa-scroll"></i>
                            </div>
                            <div>
                                <h3 class="font-semibold">Materi 4.3</h3>
                                <p class="text-sm opacity-80">Korespondensi Satu-satu (Pengayaan)</p>
                            </div>
                        </div>
                    </div>
                </section>

                <!-- Bab 5 -->
                <section>
                    <h2 class="text-2xl font-bold text-gray-800 mb-4">🧮 Bab 5: Persamaan Garis Lurus</h2>
                    <div class="space-y-3">
                        <div
                            class="p-4 rounded-lg bg-gradient-to-r from-gray-500 to-gray-700 text-white flex items-center shadow-md hover:scale-105 transition">
                            <div class="text-2xl mr-3 text-amber-500">
                                <i class="fas fa-scroll"></i>
                            </div>
                            <div>
                                <h3 class="font-semibold">Materi 5.1</h3>
                                <p class="text-sm opacity-80">Grafik Persamaan Garis Lurus</p>
                            </div>
                        </div>
                        <div
                            class="p-4 rounded-lg bg-gradient-to-r from-gray-500 to-gray-700 text-white flex items-center shadow-md hover:scale-105 transition">
                            <div class="text-2xl mr-3 text-amber-500">
                                <i class="fas fa-scroll"></i>
                            </div>
                            <div>
                                <h3 class="font-semibold">Materi 5.2</h3>
                                <p class="text-sm opacity-80">Pengertian Kemiringan</p>
                            </div>
                        </div>
                    </div>
                </section>

                <!-- Bab 6 -->
                <section>
                    <h2 class="text-2xl font-bold text-gray-800 mb-4">🧮 Bab 6: Statitiska</h2>
                    <div class="space-y-3">
                        <div
                            class="p-4 rounded-lg bg-gradient-to-r from-purple-500 to-purple-700 text-white flex items-center shadow-md hover:scale-105 transition">
                            <div class="text-2xl mr-3 text-amber-500">
                                <i class="fas fa-scroll"></i>
                            </div>
                            <div>
                                <h3 class="font-semibold">Materi 6.1</h3>
                                <p class="text-sm opacity-80">Pemusatan Data</p>
                            </div>
                        </div>
                        <div
                            class="p-4 rounded-lg bg-gradient-to-r from-purple-500 to-purple-700 text-white flex items-center shadow-md hover:scale-105 transition">
                            <div class="text-2xl mr-3 text-amber-500">
                                <i class="fas fa-scroll"></i>
                            </div>
                            <div>
                                <h3 class="font-semibold">Materi 6.2</h3>
                                <p class="text-sm opacity-80">Penyebaran Data</p>
                            </div>
                        </div>
                    </div>
                </section>

            </div>
        </main>

        <script>
            function confirmLogout() {
                if (confirm("Apakah Anda yakin ingin logout?")) {
                    document.getElementById('logout-form').submit();
                }
            }
        </script>
        <script>
            function toggleDropdown() {
                document.getElementById("dropdown").classList.toggle("hidden");
            }
        </script>
        <script>
            // Dropdown functionality
            document.querySelectorAll('button[aria-controls]').forEach(button => {
                button.addEventListener('click', () => {
                    const isExpanded = button.getAttribute('aria-expanded') === 'true';
                    const dropdownContent = document.getElementById(button.getAttribute('aria-controls'));

                    button.setAttribute('aria-expanded', !isExpanded);
                    dropdownContent.classList.toggle('hidden');
                    button.querySelector('svg:last-child').classList.toggle('rotate-180');
                });
            });

            <!-- User Profile dengan animasi -->
            <div class="mt-8 p-4 bg-gradient-to-r from-blue-50 to-purple-50 border-t border-gray-200">
                <div class="flex items-center mb-4">
                    <div class="relative">
                        <img class="h-11 w-12 rounded-full"
                            src="{{ Auth::user()->foto ? asset('storage/' . Auth::user()->foto) : 'https://via.placeholder.com/256' }}"
                            alt="{{ Auth::user()->name }}">
                        <div class="absolute -top-1 -right-1 w-4 h-4 bg-green-400 rounded-full border-2 border-white">
                        </div>
                    </div>
                    <div class="ml-3">
                        <p class="text-sm font-medium text-gray-700">{{ Auth::user()->name }}</p>
                        <p class="text-xs text-gray-400">{{ Auth::user()->email }}</p>
                        <span
                            class="inline-block mt-1 px-2 py-1 bg-indigo-100 text-indigo-700 rounded text-xs font-semibold">
                            Kelas: {{ Auth::user()->kelas }}
                        </span>
                    </div>
                </div>

                <!-- Progress indicator -->
                <div class="mb-4">
                    <div class="flex justify-between text-xs text-gray-600 mb-1">
                        <span>Progress Belajar</span>
                        <span>75%</span>
                    </div>
                    <div class="w-full bg-gray-200 rounded-full h-2">
                        <div class="progress-bar w-3/4"></div>
                    </div>
                </div>

                <!-- Action buttons -->
                <div class="flex space-x-2">
                    <a href="{{ route('setting.form') }}"
                        class="flex-1 text-center bg-gradient-to-r from-gray-500 to-gray-600 text-white py-2 px-3 rounded-lg text-xs font-medium hover:from-gray-600 hover:to-gray-700 transition-all duration-300 transform hover:scale-105">
                        <i class="fas fa-cog mr-1"></i> Setting
                    </a>

                    <form id="logout-form" method="POST" action="{{ route('logout') }}" class="flex-1">
                        @csrf
                        <button type="submit" onclick="confirmLogout(event)"
                            class="w-full bg-gradient-to-r from-red-500 to-red-600 text-white py-2 px-3 rounded-lg text-xs font-medium hover:from-red-600 hover:to-red-700 transition-all duration-300 transform hover:scale-105">
                            <i class="fas fa-sign-out-alt mr-1"></i> Logout
                        </button>
                    </form>
                </div>
            </div>
        </aside>

        <!-- Main Content -->
        <main class="flex-1 p-8 gradient-bg overflow-y-auto min-h-screen relative text-white">
            <!-- Floating Decorative Icons -->
            <div class="absolute inset-0 z-0 pointer-events-none">
                <i class="fas fa-star text-yellow-300 text-xl absolute top-10 left-10 opacity-20 animate-pulse"></i>
                <i class="fas fa-magic text-pink-300 text-2xl absolute top-28 right-12 opacity-20 animate-bounce"></i>
                <i
                    class="fas fa-book-open text-blue-300 text-lg absolute bottom-16 left-8 opacity-10 animate-spin-slow"></i>
                <i
                    class="fas fa-lightbulb text-white text-2xl absolute bottom-24 right-20 opacity-10 animate-pulse"></i>
                <i
                    class="fas fa-graduation-cap text-white text-xl absolute top-20 right-1/4 opacity-10 animate-float-slow"></i>
            </div>

            <!-- Header -->
            <div class="flex items-center justify-between mb-10 relative z-10">
                <div>
                    <h2 class="text-4xl font-bold flex items-center gap-3">
                        <i class="fas fa-lightbulb text-yellow-300 animate-bounce"></i>
                        Materi Pembelajaran
                    </h2>
                    <p class="text-indigo-100 text-sm mt-1">Ayo lanjutkan belajar hari ini ✨</p>
                </div>
                <div class="text-right text-sm text-indigo-200">
                    <div id="current-date" class="font-semibold"></div>
                    <div id="current-time" class="text-lg font-bold text-white"></div>
                </div>
            </div>

            @if ($materis->isEmpty())
                <div class="flex flex-col items-center justify-center text-center py-20 text-indigo-100 relative z-10">
                    <i class="fas fa-archive text-6xl mb-4 opacity-30"></i>
                    <p class="text-lg font-medium">Belum ada materi yang tersedia saat ini.</p>
                    <p class="text-sm mt-2">Silakan kembali nanti atau hubungi pengajar Anda.</p>
                </div>
            @else
                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8 animate-fade-in-down relative z-10">
                    @foreach ($materis as $materi)
                        <div
                            class="relative bg-white/90 backdrop-blur-md rounded-2xl shadow-lg hover:shadow-2xl transition-shadow duration-300 border border-white/40 overflow-hidden group transform hover:-translate-y-1 text-gray-800">

                            <!-- Shine effect -->
                            <div
                                class="absolute inset-0 bg-gradient-to-tr from-transparent via-white/30 to-transparent opacity-0 group-hover:opacity-100 transition duration-500 pointer-events-none">
                            </div>

                            <div class="p-6">
                                <div class="flex justify-between items-start mb-2">
                                    <div class="text-xl font-bold text-indigo-700 leading-tight">
                                        {{ $materi->judul }}
                                    </div>
                                    <div class="text-indigo-500">
                                        <i class="fas fa-book-open text-xl"></i>
                                    </div>
                                </div>

                                <p class="text-sm text-gray-600 mb-2">
                                    🧩 Kelas: <span class="font-semibold">{{ $materi->kelas }}</span>
                                </p>

                                <p class="text-gray-700 text-sm mb-3 line-clamp-4">
                                    {{ $materi->deskripsi }}
                                </p>

                                @if ($materi->deadline)
                                    <div class="flex items-center text-xs text-red-500 mb-2">
                                        <i class="fas fa-clock mr-1"></i>
                                        Deadline: <strong
                                            class="ml-1">{{ \Carbon\Carbon::parse($materi->deadline)->format('d M Y H:i') }}</strong>
                                    </div>
                                @endif

                                @if (!empty($materi->file_path))
                                    @if (\Carbon\Carbon::parse($materi->deadline)->isFuture())
                                        <a href="{{ asset('storage/' . $materi->file_path) }}" target="_blank"
                                            class="inline-flex items-center text-sm text-blue-600 font-medium hover:underline transition">
                                            <i class="fas fa-file-download mr-1"></i>
                                            Lihat Materi
                                        </a>
                                    @else
                                        <p class="text-sm text-gray-400 italic"><i class="fas fa-lock mr-1"></i>
                                            Materi tidak dapat diakses (lewat deadline)</p>
                                    @endif
                                @else
                                    <p class="text-sm text-red-500"><i class="fas fa-times-circle mr-1"></i> File
                                        tidak tersedia</p>
                                @endif
                            </div>

                            <!-- Label floating -->
                            <div
                                class="absolute top-0 left-0 bg-purple-600 text-white text-xs font-semibold px-3 py-1 rounded-br-xl shadow-md">
                                Materi Baru
                            </div>
                        </div>
                    @endforeach
                </div>
            @endif
        </main>

        <script>
            // Update time and greeting
            function updateTimeAndGreeting() {
                const now = new Date();
                const timeStr = now.toLocaleTimeString('id-ID', {
                    hour: '2-digit',
                    minute: '2-digit'
                });
                const dateStr = now.toLocaleDateString('id-ID', {
                    weekday: 'long',
                    year: 'numeric',
                    month: 'long',
                    day: 'numeric'
                });

                document.getElementById('current-time').textContent = timeStr;
                document.getElementById('current-date').textContent = dateStr;

                // Dynamic greeting based on time
                const hour = now.getHours();
                let greeting = "Selamat belajar!";
                if (hour < 12) greeting = "Selamat pagi! Semangat belajar!";
                else if (hour < 15) greeting = "Selamat siang! Tetap fokus!";
                else if (hour < 18) greeting = "Selamat sore! Jangan lupa istirahat!";
                else greeting = "Selamat malam! Waktunya review!";

                document.getElementById('greeting-text').textContent = greeting;
            }

            // Dropdown functionality with smooth animations
            function toggleDropdown(type) {
                const dropdown = document.getElementById(type + '-dropdown');
                const arrow = document.getElementById(type + '-arrow');

                dropdown.classList.toggle('hidden');
                arrow.classList.toggle('rotate-180');

                // Add slide animation
                if (!dropdown.classList.contains('hidden')) {
                    dropdown.style.maxHeight = '0';
                    dropdown.style.overflow = 'hidden';
                    dropdown.style.transition = 'max-height 0.3s ease-out';
                    setTimeout(() => {
                        dropdown.style.maxHeight = dropdown.scrollHeight + 'px';
                    }, 10);
                }
            }

            // Logout confirmation
            function confirmLogout(event) {
                event.preventDefault(); // Cegah form submit langsung
                if (confirm("Apakah Anda yakin ingin logout? 🤔")) {
                    alert("Logout berhasil! Sampai jumpa! 👋");
                    document.getElementById('logout-form').submit();
                }
            }

            // Initialize
            updateTimeAndGreeting();
            setInterval(updateTimeAndGreeting, 1000);

            // Add some interactive elements
            document.addEventListener('DOMContentLoaded', function() {
                // Add click effects to cards
                const cards = document.querySelectorAll('.card-hover');
                cards.forEach(card => {
                    card.addEventListener('click', function() {
                        this.style.transform = 'scale(0.98)';
                        setTimeout(() => {
                            this.style.transform = '';
                        }, 150);
                    });
                });

                // Add typing effect to greeting (optional)
                const greetingEl = document.getElementById('greeting-text');
                const originalText = greetingEl.textContent;
                let i = 0;

                function typeWriter() {
                    if (i < originalText.length) {
                        greetingEl.textContent = originalText.substring(0, i + 1);
                        i++;
                        setTimeout(typeWriter, 50);
                    }
                }

                // Uncomment to enable typing effect
                // greetingEl.textContent = '';
                // typeWriter();
            });

            // Add floating elements animation
            function createFloatingElements() {
                const main = document.querySelector('main');
                for (let i = 0; i < 5; i++) {
                    const element = document.createElement('div');
                    element.className = 'absolute w-2 h-2 bg-white opacity-20 rounded-full animate-pulse';
                    element.style.left = Math.random() * 100 + '%';
                    element.style.top = Math.random() * 100 + '%';
                    element.style.animationDelay = Math.random() * 2 + 's';
                    main.appendChild(element);
                }
            }

            function toggleDropdown(type) {
                const dropdown = document.getElementById(type + '-dropdown');
                const arrow = document.getElementById(type + '-arrow');
                const button = document.querySelector(`[onclick="toggleDropdown('${type}')"]`);

                const isHidden = dropdown.classList.contains('hidden');

                dropdown.classList.toggle('hidden');
                arrow.classList.toggle('rotate-180');

                // Animasi slide
                if (!dropdown.classList.contains('hidden')) {
                    dropdown.style.maxHeight = '0';
                    dropdown.style.overflow = 'hidden';
                    dropdown.style.transition = 'max-height 0.3s ease-out';
                    setTimeout(() => {
                        dropdown.style.maxHeight = dropdown.scrollHeight + 'px';
                    }, 10);
                }

                // Toggle class aktif   
                button.classList.toggle('bg-gradient-to-r');
                button.classList.toggle('from-green-500');
                button.classList.toggle('to-green-600');
                button.classList.toggle('text-white');
                button.classList.toggle('shadow-md');
                button.classList.toggle('text-gray-700');

                // Simpan status di localStorage
                localStorage.setItem(type + '-active', !isHidden);
            }

            createFloatingElements();

        </script>
</body>

</html>
