<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login ke Mathporia</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="min-h-screen flex items-center justify-center bg-gradient-to-r from-blue-400 to-indigo-600 px-4">
    <div class="w-full max-w-md bg-white rounded-lg shadow-lg p-6">
        <h2 class="text-2xl font-bold text-center text-gray-700">Login ke Mathporia</h2>
        <p class="text-gray-500 text-center text-sm mb-6">Masukkan email dan password Anda untuk masuk</p>

        <form method="POST" action="{{ route('login') }}">
            @csrf

            <!-- Email Address -->
            <div>
                <label for="email" class="text-gray-600">Email</label>
                <input id="email" type="email" name="email" required autofocus autocomplete="username"
                    class="block mt-1 w-full border-gray-300 rounded-lg shadow-sm focus:ring-indigo-500 focus:border-indigo-500">
            </div>

            <!-- Password -->
            <div class="mt-4">
                <label for="password" class="text-gray-600">Password</label>
                <input id="password" type="password" name="password" required autocomplete="current-password"
                    class="block mt-1 w-full border-gray-300 rounded-lg shadow-sm focus:ring-indigo-500 focus:border-indigo-500">
            </div>

            <!-- Remember Me -->
            <div class="flex items-center justify-between mt-4">
                <label for="remember_me" class="inline-flex items-center">
                    <input id="remember_me" type="checkbox"
                        class="rounded border-gray-300 text-indigo-600 focus:ring-indigo-500" name="remember">
                    <span class="ml-2 text-sm text-gray-600">Remember me</span>
                </label>
                <a href="{{ route('password.request') }}"
                    class="text-sm text-indigo-500 hover:text-indigo-700 transition">
                    Forgot password?
                </a>
            </div>

            <div class="mt-6">
                <button type="submit"
                    class="w-full bg-indigo-600 hover:bg-indigo-700 text-white font-semibold py-2 rounded-lg shadow-md transition-all">
                    Log in
                </button>
            </div>
        </form>

        <p class="text-center text-sm text-gray-500 mt-4">
            Belum punya akun? <a href="{{ route('register') }}"
                class="text-indigo-500 hover:text-indigo-700 font-medium">Daftar sekarang</a>
        </p>
    </div>
</body>

</html>
