@include('header')

{{-- End Navbar --}}

<!-- Head -->
<div class="mt-10 mb-10 relative flex flex-col w-full items-center space-y-10 min-h-screen px-3 lg:flex-row lg:items-start lg:space-y-0 lg:space-x-10">
    <!-- Left Section -->
    <div class="w-full text-center">
        <div class="mb-4 p-4 bg-white rounded-lg shadow-lg">
            <p class="text-sm font-bold text-gray-800">Pasien</p>
            <div class="w-full h-2 mt-1 bg-gray-200 rounded">
                <div class="h-2 bg-blue-500 rounded" style="width: 90%;"></div>
            </div>
            <p class="mt-2 text-sm text-gray-600">2000</p>
            <p class="text-sm font-bold text-gray-800">Dokter</p>
            <div class="w-full h-2 mt-1 bg-gray-200 rounded">
                <div class="h-2 bg-blue-700 rounded" style="width: 50%;"></div>
            </div>
            <p class="mt-2 text-sm text-gray-600">500</p>
            <p class="text-sm font-bold text-gray-800">Tenaga Medis</p>
            <div class="w-full h-2 mt-1 bg-gray-200 rounded">
                <div class="h-2 bg-blue-800 rounded" style="width: 65%;"></div>
            </div>
            <p class="mt-2 text-sm text-gray-600">650</p>
        </div>
        <h1 class="text-4xl font-extrabold text-gray-800 lg:text-6xl">
            Bersama Kita mengatasi <span class="text-blue-500">Stunting</span>
        </h1>
        <p class="mt-4 text-lg text-gray-600 text-balance">
            Stunting adalah kondisi gagal tumbuh pada anak akibat malnutrisi, terutama kekurangan gizi dalam 1.000 hari pertama kehidupan, yang terdiri dari periode kehamilan hingga usia 2 tahun.
        </p>
        <button class="px-6 py-3 mt-6 text-lg font-semibold text-white bg-blue-500 rounded-lg shadow-lg hover:bg-blue-600 focus:outline-none focus:ring-4 focus:ring-blue-300">
            Read More
        </button>
    </div>

    <!-- Right Section (Chart and Graphs) -->
    <div class="w-full flex justify-center">
        <!-- Graph Image -->
        <div class="relative z-10 max-w-full">
            <img src="{{ asset('img/logo mochi.png') }}" alt="Logo Mochi" class="rounded-lg shadow-lg w-full md:w-auto">
        </div>
    </div>
</div>
{{-- End Head --}}

{{-- Articles --}}
<div class="px-3 mb-20">
    <h1 class="text-3xl text-balance font-extrabold text-gray-800 text-center mb-10">
        Artikel dan Video Edukasi Untuk  <span class="text-blue-500">Ibu Muda</span>
    </h1>
    <div class="grid grid-cols-1 lg:flex lg:items-center lg:justify-center gap-4">
        <img src="https://via.placeholder.com/500x300" alt="" class="rounded-lg shadow-lg w-full sm:w-auto">
        <div class="grid grid-cols-1 lg:flex lg:flex-col gap-4">
            <img src="https://via.placeholder.com/500x145" alt="" class="rounded-lg shadow-lg w-full sm:w-auto">
            <img src="https://via.placeholder.com/500x145" alt="" class="rounded-lg shadow-lg w-full sm:w-auto">
        </div>
    </div>
</div>
{{-- End Articles --}}



</body>
</html>
