{{-- <x-guest-layout>
    <form method="POST" action="{{ route('register') }}">
        @csrf

        <!-- Name -->
        <div>
            <x-input-label for="name" :value="__('Name')" />
            <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
            <x-input-error :messages="$errors->get('name')" class="mt-2" />
        </div>

        <!-- Email Address -->
        <div class="mt-4">
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Password')" />

            <x-text-input id="password" class="block mt-1 w-full"
                            type="password"
                            name="password"
                            required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Confirm Password -->
        <div class="mt-4">
            <x-input-label for="password_confirmation" :value="__('Confirm Password')" />

            <x-text-input id="password_confirmation" class="block mt-1 w-full"
                            type="password"
                            name="password_confirmation" required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
        </div>

        <div class="flex items-center justify-end mt-4">
            <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('login') }}">
                {{ __('Already registered?') }}
            </a>

            <x-primary-button class="ms-4">
                {{ __('Register') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout> --}}
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar</title>
    <link rel="icon" type="image/png" href="{{ asset('img/Logo MoChi.png') }}" />
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="flex items-center justify-center min-h-screen bg-white">
    <div class="w-full max-w-md p-6 bg-white rounded-lg shadow-lg">
        <div class="text-center mb-6">
            <h2 class="text-3xl font-extrabold text-black">Daftar</h2>
        </div>
        <form method="POST" action="{{ route('register') }}">
            @csrf
            <div class="mb-4">
                <label for="name" class="block text-lg font-bold text-black mb-2">Nama Pengguna</label>
                <input
                    type="text"
                    id="name"
                    name="name"
                    value="{{ old('name') }}"
                    placeholder="Masukkan nama pengguna"
                    class="w-full px-4 py-3 text-lg font-bold placeholder-[#0096C7] bg-white border-2 border-[#0096C7] rounded focus:outline-none focus:ring focus:ring-[#0096C7]"
                    required
                    autofocus
                >
                @error('name')
                    <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-4">
                <label for="email" class="block text-lg font-bold text-black mb-2">Email</label>
                <input
                    type="email"
                    id="email"
                    name="email"
                    value="{{ old('email') }}"
                    placeholder="Masukkan email"
                    class="w-full px-4 py-3 text-lg font-bold placeholder-[#0096C7] bg-white border-2 border-[#0096C7] rounded focus:outline-none focus:ring focus:ring-[#0096C7]"
                    required
                >
                @error('email')
                    <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-4">
                <label for="password" class="block text-lg font-bold text-black mb-2">Kata Sandi</label>
                <input
                    type="password"
                    id="password"
                    name="password"
                    placeholder="**********"
                    class="w-full px-4 py-3 text-lg font-bold placeholder-[#0096C7] bg-white border-2 border-[#0096C7] rounded focus:outline-none focus:ring focus:ring-[#0096C7]"
                    required
                >
                @error('password')
                    <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-4">
                <label for="password_confirmation" class="block text-lg font-bold text-black mb-2">Ulangi Kata Sandi</label>
                <input
                    type="password"
                    id="password_confirmation"
                    name="password_confirmation"
                    placeholder="**********"
                    class="w-full px-4 py-3 text-lg font-bold placeholder-[#0096C7] bg-white border-2 border-[#0096C7] rounded focus:outline-none focus:ring focus:ring-[#0096C7]"
                    required
                >
                @error('password_confirmation')
                    <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                @enderror
            </div>

            <button
                type="submit"
                class="w-full px-6 py-3 text-lg font-extrabold text-white bg-[#0096C7] border-2 border-[#023E8A] rounded hover:bg-[#023E8A] focus:outline-none focus:ring focus:ring-[#0096C7] transition"
            >
                Daftar
            </button>

            <p class="mt-4 text-center text-lg font-bold text-black">
                Sudah punya akun?
                <a href="{{ route('login') }}" class="text-[#023E8A] hover:underline">Masuk</a>
            </p>

            <p class="mt-4 text-center text-lg font-bold text-black">
                Buat akun dokter?
                <a href="#" class="text-[#023E8A] hover:underline">Daftar</a>
            </p>
        </form>
    </div>
</body>
</html>
