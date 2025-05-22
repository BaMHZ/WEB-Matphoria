<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Dashboard</title>

    @vite('resources/css/app.css') <!-- Jika menggunakan Vite (default Laravel 11) -->

    <script src="https://kit.fontawesome.com/your-fontawesome-kit.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js" defer></script>
</head>

<body class="bg-gray-100 text-gray-800 flex min-h-screen">

    <!-- Sidebar -->
    <aside class="w-64 bg-white shadow-lg flex flex-col justify-between p-6">
        <div>
            <div class="flex items-center gap-3 mb-10">
                <svg class="w-8 h-8 text-sky-600" fill="none" stroke="currentColor" stroke-width="2"
                    viewBox="0 0 24 24">
                    <path d="M3 3h18v18H3V3z" stroke-linecap="round" stroke-linejoin="round" />
                </svg>
                <h1 class="text-2xl font-bold text-sky-700">MyApp</h1>
            </div>

            <nav class="space-y-2">
                <a href="{{ route('guru.dashboard') }}"
                    class="flex items-center px-4 py-3 rounded-lg text-sky-600 hover:bg-sky-100 transition">
                    <svg class="w-5 h-5 mr-3" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                        <path d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3"
                            stroke-linecap="round" stroke-linejoin="round" />
                    </svg>
                    Dashboard
                </a>
                <a href="/goals"
                    class="flex items-center px-4 py-3 rounded-lg text-yellow-600 hover:bg-yellow-100 transition">
                    <svg class="w-5 h-5 mr-3" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                        <path d="M12 8v4l3 3m6 2a9 9 0 11-18 0 9 9 0 0118 0z" stroke-linecap="round"
                            stroke-linejoin="round" />
                    </svg>
                    Goals
                </a>
                <a href="/profile"
                    class="flex items-center px-4 py-3 rounded-lg text-indigo-600 hover:bg-indigo-100 transition">
                    <svg class="w-5 h-5 mr-3" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                        <path
                            d="M5.121 17.804A10.96 10.96 0 0112 15c2.389 0 4.584.78 6.308 2.098M15 11a3 3 0 11-6 0 3 3 0 016 0z"
                            stroke-linecap="round" stroke-linejoin="round" />
                    </svg>
                    Profile
                </a>
                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <button type="submit"
                        class="flex items-center px-4 py-2 rounded-lg hover:bg-red-100 text-red-600 transition group w-full text-left">
                        <svg class="w-5 h-5 text-red-500 group-hover:text-red-600 mr-3" fill="none"
                            stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                            <path
                                d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a2 2 0 01-2 2H5a2 2 0 01-2-2V7a2 2 0 012-2h6a2 2 0 012 2v1"
                                stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                        Logout
                    </button>
                </form>


            </nav>
        </div>

        <footer class="text-center text-sm text-gray-400 mt-6">
            &copy; 2025 MyApp. All rights reserved.
        </footer>
    </aside>

    <!-- Main Content -->
    <main class="flex-1 p-10 space-y-10">
        <section>
            <h2 class="text-3xl font-bold text-sky-800">Dashboard</h2>
        </section>

        <!-- Practice Areas -->
        <section class="bg-white p-6 rounded-lg shadow-md">
            <h3 class="text-xl font-semibold text-sky-800">Practice Area</h3>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mt-6">
                <!-- Need Help -->
                <div class="bg-white p-5 rounded-lg border-t-4 border-green-400 shadow hover:shadow-lg transition">
                    <div class="flex flex-col items-center">
                        <div class="bg-green-100 p-3 rounded-full">
                            <svg class="h-8 w-8 text-green-600" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M12 2a10 10 0 1 0 10 10A10.011 10.011 0 0 0 12 2Zm1 15h-2v-2h2Zm0-4h-2V7h2Z" />
                            </svg>
                        </div>
                        <h4 class="mt-4 text-lg font-medium text-gray-700">Need Help</h4>
                        <p class="text-gray-500">0 Skills</p>
                        <a href="#" class="mt-2 text-sm text-blue-500 hover:underline">View →</a>
                    </div>
                </div>

                <!-- Practicing -->
                <div class="bg-white p-5 rounded-lg border-t-4 border-yellow-400 shadow hover:shadow-lg transition">
                    <div class="flex flex-col items-center">
                        <div class="bg-yellow-100 p-3 rounded-full">
                            <svg class="h-8 w-8 text-yellow-600" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M3 3v18h18V3Zm16 16H5V5h14Zm-3-3h-2v-5h2Zm-4 0H8v-3h2v1h2Z" />
                            </svg>
                        </div>
                        <h4 class="mt-4 text-lg font-medium text-gray-700">Practicing</h4>
                        <p class="text-gray-500">0 Skills</p>
                        <a href="#" class="mt-2 text-sm text-blue-500 hover:underline">View →</a>
                    </div>
                </div>

                <!-- Mastered -->
                <div class="bg-white p-5 rounded-lg border-t-4 border-gray-500 shadow hover:shadow-lg transition">
                    <div class="flex flex-col items-center">
                        <div class="bg-gray-200 p-3 rounded-full">
                            <svg class="h-8 w-8 text-gray-700" fill="currentColor" viewBox="0 0 24 24">
                                <path
                                    d="M12 2 2 7l10 5 10-5Zm0 6.75L6.3 7 12 4.25 17.7 7ZM2 17h20v-2l-10-5-10 5Zm2-1.2 8-4 8 4Zm4.5 3.7h7v1.5h-7Z" />
                            </svg>
                        </div>
                        <h4 class="mt-4 text-lg font-medium text-gray-700">Mastered</h4>
                        <p class="text-gray-500">0 Skills</p>
                        <a href="#" class="mt-2 text-sm text-blue-500 hover:underline">View →</a>
                    </div>
                </div>
            </div>
        </section>

        <!-- Recent Activity -->
        <section class="bg-white p-6 rounded-lg shadow-md">
            <h3 class="text-xl font-semibold text-sky-800">Recent Activity</h3>
            <div class="mt-4 text-gray-500">
                <p class="p-4 bg-gray-50 rounded-md text-center">No recent activity yet.</p>
            </div>
        </section>
    </main>

</body>

</html>
