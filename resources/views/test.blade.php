<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mathporia | LOGIN</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link
        href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300;400;600&family=Merriweather:wght@700&display=swap"
        rel="stylesheet">
    <style>
        body {
            font-family: 'Quicksand', sans-serif;
        }

        h1,
        h2,
        h3 {
            font-family: 'Merriweather', serif;
        }

        .fade-in {
            opacity: 0;
            transform: translateY(30px);
            transition: opacity 1s ease-out, transform 1s ease-out;
        }

        .loaded .fade-in {
            opacity: 1;
            transform: translateY(0);
        }
    </style>
</head>

<body class="bg-gradient-to-r from-gray-200 to-blue-100 flex flex-col min-h-screen">

    <!-- Navbar -->
    <nav
        class="bg-white text-indigo-600 py-3 px-5 flex justify-between items-center sticky top-0 z-50 shadow-md font-bold">
        <div>
            <img src="{{ asset('storage/images/LogoTA.png') }}" class="h-14 w-auto" alt="Logo Mathporia">
        </div>
        <div class="space-x-6 hidden md:flex">
            <a href="#" class="hover:text-blue-500 transition-all">HOME</a>
            <a href="#" class="hover:text-blue-500 transition-all">ABOUT</a>
            <a href="#" class="hover:text-blue-500 transition-all">SERVICE</a>
            <a href="#" class="hover:text-blue-500 transition-all">CONTACT</a>
        </div>
        <div class="relative group">
            <button
                class="bg-indigo-500 text-white px-4 py-2 rounded-md shadow-md hover:bg-indigo-600 transition-all">Login</button>
            <div class="absolute hidden group-hover:block right-0 bg-white text-black shadow-lg w-40 mt-2 rounded-md">
                <a href="#" class="block py-2 px-4 hover:bg-indigo-200 transition-all">SISWA</a>
                <a href="#" class="block py-2 px-4 hover:bg-indigo-200 transition-all">GURU</a>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <section class="relative w-full h-screen bg-cover bg-center flex items-center justify-center text-center"
        style="background-image: url('{{ asset('storage/images/bg_welcome.jpg') }}');">
        <div class="absolute inset-0 bg-black bg-opacity-50"></div>
        <div class="relative z-10 text-white fade-in">
            <h1 class="text-5xl font-bold uppercase tracking-wide drop-shadow-lg">Selamat Datang di Mathporia siswa
                siswi SMP N 21 Bekasi</h1>
            <p class="text-xl mt-2 drop-shadow-md">Belajar Matematika dengan Cara Menyenangkan!</p>
            <a href="#explore"
                class="mt-6 inline-block bg-indigo-600 text-white text-lg font-semibold px-6 py-3 rounded-full shadow-lg transition duration-300 ease-in-out hover:bg-indigo-500 hover:scale-105">
                Mulai Belajar
            </a>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-gradient-to-r from-indigo-600 to-indigo-900 text-white text-center py-6 mt-auto">
        <div class="container mx-auto">
            <p class="text-lg font-semibold">Mathporia - Belajar Matematika dengan Cara Menyenangkan!</p>
            <p class="text-sm mt-2">© 2025 Mathporia. All Rights Reserved.</p>
            <div class="flex justify-center space-x-4 mt-3">
                <a href="#" class="hover:text-gray-300">Privacy Policy</a>
                <span>|</span>
                <a href="#" class="hover:text-gray-300">Terms of Service</a>
                <span>|</span>
                <a href="#" class="hover:text-gray-300">Contact Us</a>
            </div>
        </div>
    </footer>

    <script>
        document.addEventListener("DOMContentLoaded", function() {
            document.body.classList.add("loaded");
        });
    </script>
</body>

</html>

<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mathporia | LOGIN</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link
        href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300;400;600&family=Merriweather:wght@700&display=swap"
        rel="stylesheet">
    <style>
        body {
            font-family: 'Quicksand', sans-serif;
        }

        h1,
        h2,
        h3 {
            font-family: 'Merriweather', serif;
        }

        .fade-in {
            opacity: 0;
            transform: translateY(30px);
            transition: opacity 1s ease-out, transform 1s ease-out;
        }

        .loaded .fade-in {
            opacity: 1;
            transform: translateY(0);
        }
    </style>
</head>

<body class="bg-gradient-to-r from-gray-200 to-blue-100 flex flex-col min-h-screen">

    <!-- Navbar -->
    <nav
        class="bg-white text-indigo-600 py-4 px-8 flex justify-between items-center sticky top-0 z-50 shadow-lg font-bold transition-all duration-300 hover:shadow-xl">
        <div class="flex items-center space-x-2">
            <img src="{{ asset('storage/images/LogoTA.png') }}"
                class="h-16 w-auto transform hover:scale-105 transition-transform" alt="Logo Mathporia">
            <span class="text-xl hidden sm:block font-merriweather"></span>
        </div>
        <div class="hidden md:flex space-x-8">
            <a href="/" class="hover:text-indigo-800 transition-all transform hover:-translate-y-1">HOME</a>
            <a href="#about" class="hover:text-indigo-800 transition-all transform hover:-translate-y-1">ABOUT</a>
            <a href="#service" class="hover:text-indigo-800 transition-all transform hover:-translate-y-1">SERVICE</a>
            <a href="#contact" class="hover:text-indigo-800 transition-all transform hover:-translate-y-1">CONTACT</a>
        </div>

        <!-- Dropdown Login & Register -->
        <div class="relative group">
            <button id="loginButton"
                class="bg-gradient-to-r from-indigo-500 to-purple-500 text-white px-5 py-2.5 rounded-lg shadow-lg hover:from-indigo-600 hover:to-purple-600 transition-all duration-300 flex items-center space-x-2">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24"
                    stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M11 16l-4-4m0 0l4-4m-4 4h14m-5 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h7a3 3 0 013 3v1" />
                </svg>
                <span>Login / Register</span>
            </button>
            <div id="dropdownMenu"
                class="absolute right-0 bg-white shadow-xl w-56 mt-2 rounded-lg overflow-hidden border border-gray-100 transition-all duration-300 origin-top transform scale-95 opacity-0 group-hover:scale-100 group-hover:opacity-100 pointer-events-none group-hover:pointer-events-auto">
                <div class="p-1.5">
                    <a href="http://web-student.test/login"
                        class="flex items-center px-4 py-3 text-gray-700 hover:bg-indigo-50 transition-all rounded-md group">
                        <div class="bg-indigo-100 p-2 rounded-full mr-3 group-hover:bg-indigo-200 transition-colors">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-indigo-600" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                            </svg>
                        </div>
                        <div>
                            <div class="font-medium">Login sebagai Siswa</div>
                            <div class="text-xs text-gray-500">Akses materi pembelajaran</div>
                        </div>
                    </a>
                    <a href="http://web-student.test/login"
                        class="flex items-center px-4 py-3 text-gray-700 hover:bg-indigo-50 transition-all rounded-md group">
                        <div class="bg-indigo-100 p-2 rounded-full mr-3 group-hover:bg-indigo-200 transition-colors">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-indigo-600" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                            </svg>
                        </div>
                        <div>
                            <div class="font-medium">Login sebagai Guru</div>
                            <div class="text-xs text-gray-500">Kelola kelas dan materi</div>
                        </div>
                    </a>
                </div>
                <div class="border-t border-gray-200 mx-3"></div>
                <div class="p-1.5">
                    <a href="http://web-student.test/register"
                        class="flex items-center px-4 py-3 text-indigo-600 font-medium hover:bg-indigo-50 transition-all rounded-md group">
                        <div class="bg-indigo-100 p-2 rounded-full mr-3 group-hover:bg-indigo-200 transition-colors">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-indigo-600" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M18 9v3m0 0v3m0-3h3m-3 0h-3m-2-5a4 4 0 11-8 0 4 4 0 018 0zM3 20a6 6 0 0112 0v1H3v-1z" />
                            </svg>
                        </div>
                        <div>
                            <div class="font-medium">Daftar Akun Baru</div>
                            <div class="text-xs text-gray-500">Bergabung dengan Mathporia</div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <section class="relative w-full h-screen bg-cover bg-center flex items-center justify-center text-center"
        style="background-image: url('{{ asset('storage/images/bg_welcome.jpg') }}');">
        <div class="absolute inset-0 bg-black bg-opacity-40 transition-all duration-1000 hover:bg-opacity-30"></div>
        <div class="relative z-10 text-white fade-in">
            <h1 class="text-6xl font-bold uppercase tracking-wide drop-shadow-lg animate-pulse">Selamat Datang di
                Mathporia</h1>
            <p class="text-2xl mt-4 drop-shadow-md font-light">Belajar Matematika dengan Cara Menyenangkan!</p>
            <a href="#explore"
                class="mt-8 inline-block bg-gradient-to-r from-indigo-600 to-purple-600 text-white text-xl font-semibold px-8 py-4 rounded-full shadow-xl transition-all duration-500 hover:from-indigo-500 hover:to-purple-500 hover:scale-110 hover:shadow-2xl">
                Mulai Belajar →
            </a>
        </div>
    </section>

    <!-- About Section -->
    <section id="about" class="py-20 px-5 bg-white fade-in">
        <div class="container mx-auto max-w-6xl">
            <h2 class="text-4xl font-bold text-center text-indigo-800 mb-12">Tentang Mathporia</h2>

            <div class="grid md:grid-cols-2 gap-12 items-center">
                <div>
                    <h3 class="text-2xl font-bold text-indigo-700 mb-4">Misi Kami</h3>
                    <p class="text-gray-700 mb-6 leading-relaxed">
                        Mathporia hadir untuk membantu siswa dan guru dalam menjadikan pembelajaran matematika lebih
                        menyenangkan, interaktif, dan mudah dipahami. Kami percaya bahwa dengan pendekatan yang tepat,
                        matematika bisa menjadi mata pelajaran yang menarik dan menumbuhkan rasa ingin tahu. Bagi siswa,
                        Mathporia menjadi teman belajar yang seru; bagi guru, Mathporia menjadi alat bantu yang
                        mendukung proses mengajar agar lebih efektif dan menyenangkan.
                    </p>

                    <h3 class="text-2xl font-bold text-indigo-700 mb-4">Apa yang Kami Tawarkan</h3>
                    <ul class="space-y-3 text-gray-700">
                        <li class="flex items-start">
                            <svg class="h-5 w-5 text-indigo-500 mr-2 mt-1" fill="none" viewBox="0 0 24 24"
                                stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M5 13l4 4L19 7" />
                            </svg>
                            <span>Pembelajaran interaktif dengan visualisasi menarik</span>
                        </li>
                        <li class="flex items-start">
                            <svg class="h-5 w-5 text-indigo-500 mr-2 mt-1" fill="none" viewBox="0 0 24 24"
                                stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M5 13l4 4L19 7" />
                            </svg>
                            <span>Materi yang disusun oleh guru-guru yang memahami kebutuhan siswa</span>
                        </li>
                        <li class="flex items-start">
                            <svg class="h-5 w-5 text-indigo-500 mr-2 mt-1" fill="none" viewBox="0 0 24 24"
                                stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M5 13l4 4L19 7" />
                            </svg>
                            <span>Sistem pembelajaran yang adaptif</span>
                        </li>
                    </ul>
                </div>

                <div
                    class="rounded-xl overflow-hidden shadow-2xl transform transition-all duration-500 hover:scale-105">
                    <img src="{{ asset('storage/images/bg_welcome.jpg') }}" alt="Belajar Matematika"
                        class="w-full h-auto transition-all duration-700 hover:scale-110">
                </div>
            </div>
        </div>
    </section>

    <!-- Service Section -->
    <section id="service" class="py-20 px-5 bg-gray-50 fade-in">
        <div class="container mx-auto max-w-6xl">
            <h2 class="text-4xl font-bold text-center text-indigo-800 mb-4">Layanan Kami</h2>
            <p class="text-xl text-center text-gray-600 mb-12">Berbagai cara menyenangkan untuk belajar matematika</p>

            <div class="grid md:grid-cols-3 gap-8">
                <!-- Service Card 1 -->
                <div class="bg-white p-8 rounded-xl shadow-lg hover:shadow-xl transition-all">
                    <div class="bg-indigo-100 w-16 h-16 rounded-full flex items-center justify-center mb-6 mx-auto">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-indigo-600" fill="none"
                            viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M9.663 17h4.673M12 3v1m6.364 1.636l-.707.707M21 12h-1M4 12H3m3.343-5.657l-.707-.707m2.828 9.9a5 5 0 117.072 0l-.548.547A3.374 3.374 0 0014 18.469V19a2 2 0 11-4 0v-.531c0-.895-.356-1.754-.988-2.386l-.548-.547z" />
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-center text-indigo-700 mb-3">Pembelajaran Interaktif</h3>
                    <p class="text-gray-600 text-center">
                        Materi pembelajaran disajikan dengan animasi dan visualisasi menarik untuk memudahkan pemahaman
                        konsep matematika.
                    </p>
                </div>

                <!-- Service Card 2 -->
                <div class="bg-white p-8 rounded-xl shadow-lg hover:shadow-xl transition-all">
                    <div class="bg-indigo-100 w-16 h-16 rounded-full flex items-center justify-center mb-6 mx-auto">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-indigo-600" fill="none"
                            viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253" />
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-center text-indigo-700 mb-3">Modul Lengkap</h3>
                    <p class="text-gray-600 text-center">
                        Kumpulan modul dari tingkat dasar hingga lanjut dengan contoh soal dan pembahasan yang jelas.
                    </p>
                </div>

                <!-- Service Card 3 -->
                <div class="bg-white p-8 rounded-xl shadow-lg hover:shadow-xl transition-all">
                    <div class="bg-indigo-100 w-16 h-16 rounded-full flex items-center justify-center mb-6 mx-auto">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-indigo-600" fill="none"
                            viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M8 10h.01M12 10h.01M16 10h.01M9 16H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-5l-5 5v-5z" />
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-center text-indigo-700 mb-3">Forum Diskusi</h3>
                    <p class="text-gray-600 text-center">
                        Tempat berdiskusi dengan siswa lain dan guru untuk bertanya dan berbagi pengetahuan matematika.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section id="contact" class="py-20 px-5 bg-white fade-in">
        <div class="container mx-auto max-w-4xl">
            <h2 class="text-4xl font-bold text-center text-indigo-800 mb-12">Hubungi Kami</h2>

            <div class="grid md:grid-cols-2 gap-12">
                <div>
                    <h3 class="text-2xl font-bold text-indigo-700 mb-4">Informasi Kontak</h3>
                    <div class="space-y-4 text-gray-700">
                        <div class="flex items-start">
                            <svg class="h-6 w-6 text-indigo-500 mr-3 mt-1" fill="none" viewBox="0 0 24 24"
                                stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                            </svg>
                            <span>info@mathporia.com</span>
                        </div>
                        <div class="flex items-start">
                            <svg class="h-6 w-6 text-indigo-500 mr-3 mt-1" fill="none" viewBox="0 0 24 24"
                                stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" />
                            </svg>
                            <span>+62 123 4567 890</span>
                        </div>
                        <div class="flex items-start">
                            <svg class="h-6 w-6 text-indigo-500 mr-3 mt-1" fill="none" viewBox="0 0 24 24"
                                stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                            </svg>
                            <span>Jl. Telkom No. 123, Bandung, Indonesia</span>
                        </div>
                    </div>
                </div>

                <div>
                    <h3 class="text-2xl font-bold text-indigo-700 mb-4">Kirim Pesan</h3>
                    <form class="space-y-4">
                        <div>
                            <input type="text" placeholder="Nama Anda"
                                class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-indigo-500">
                        </div>
                        <div>
                            <input type="email" placeholder="Email Anda"
                                class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-indigo-500">
                        </div>
                        <div>
                            <textarea placeholder="Pesan Anda" rows="4"
                                class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-indigo-500"></textarea>
                        </div>
                        <button type="submit"
                            class="bg-indigo-600 text-white px-6 py-2 rounded-md hover:bg-indigo-700 transition-colors">
                            Kirim Pesan
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-gradient-to-r from-indigo-600 to-indigo-900 text-white text-center py-6 mt-auto">
        <div class="container mx-auto">
            <p class="text-lg font-semibold">Mathporia - Belajar Matematika dengan Cara Menyenangkan!</p>
            <p class="text-sm mt-2">© 2025 Mathporia. All Rights Reserved.</p>
            <div class="flex justify-center space-x-4 mt-3">
                <a href="#" class="hover:text-gray-300">Privacy Policy</a>
                <span>|</span>
                <a href="#" class="hover:text-gray-300">Terms of Service</a>
                <span>|</span>
                <a href="#" class="hover:text-gray-300">Contact Us</a>
            </div>
        </div>
    </footer>

    <script>
        document.addEventListener("DOMContentLoaded", function() {
            document.body.classList.add("loaded");

            // Dropdown will now work on hover instead of click
            const loginButton = document.getElementById("loginButton");
            const dropdownMenu = document.getElementById("dropdownMenu");

            // Keep the click functionality as fallback
            loginButton.addEventListener("click", function() {
                dropdownMenu.classList.toggle('opacity-0');
                dropdownMenu.classList.toggle('scale-95');
                dropdownMenu.classList.toggle('pointer-events-none');
            });

            // Close when clicking outside
            document.addEventListener("click", function(event) {
                if (!loginButton.contains(event.target) && !dropdownMenu.contains(event.target)) {
                    dropdownMenu.classList.add('opacity-0', 'scale-95', 'pointer-events-none');
                }
            });
        });
    </script>

</body>

</html>
