<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Masuk</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="icon" type="image/png" href="{{ asset('img/Logo MoChi.png') }}" />
</head>
<body class="flex items-center justify-center min-h-screen bg-white">
    <div class="w-full max-w-md p-6 bg-white rounded-lg shadow-lg">
        <div class="text-center mb-6">
            <h2 class="text-3xl font-extrabold text-black">Masuk</h2>
        </div>
        
        <form method="POST" action="{{ route('login') }}">
            @csrf

            <!-- Email Address -->
            <div class="mb-4">
                <label for="email" class="block text-lg font-bold text-black mb-2">Email Pengguna</label>
                <input
                    type="email"
                    id="email"
                    name="email"
                    :value="old('email')"
                    required
                    autofocus
                    autocomplete="username"
                    class="w-full px-4 py-3 text-lg font-bold bg-white border-2 border-[#0096C7] rounded focus:outline-none focus:ring focus:ring-indigo-300"
                >
                @error('email')
                    <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>

            <!-- Password -->
            <div class="mb-4 relative">
                <label for="password" class="block text-lg font-bold text-black mb-2">Password</label>
                <input
                    type="password"
                    id="password"
                    name="password"
                    required
                    autocomplete="current-password"
                    class="w-full px-4 py-3 text-lg font-bold placeholder-[#0096C7] bg-white border-2 border-[#0096C7] rounded focus:outline-none focus:ring focus:ring-indigo-300"
                >
                @error('password')
                    <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>

            <!-- Remember Me -->
            <div class="flex items-center justify-between mb-6">
                <label class="flex items-center text-lg font-bold text-black">
                    <input id="remember_me" name="remember" type="checkbox" class="mr-2 border-gray-300 text-indigo-600 shadow-sm focus:ring-indigo-500">
                    Ingat saya
                </label>
                @if (Route::has('password.request'))
                    <a href="{{ route('password.request') }}" class="text-lg font-bold text-[#0096C7] hover:underline">Lupa Password?</a>
                @endif
            </div>

            <!-- Submit Button -->
            <button
                type="submit"
                class="w-full px-6 py-3 text-lg font-extrabold text-white bg-[#0096C7] border-2 border-[#023E8A] rounded hover:bg-[#023E8A] focus:outline-none focus:ring focus:ring-indigo-300 transition"
            >
                Sign in
            </button>

            <!-- Register Link -->
            <p class="mt-4 text-center text-lg font-bold text-black">
                Belum punya akun? 
                <a href="{{ route('register') }}" class="text-[#023E8A] hover:underline">Daftar</a>
            </p>
        </form>
    </div>
</body>
</html>
