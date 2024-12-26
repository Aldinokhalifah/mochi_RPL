@include('header')

{{-- End Navbar --}}

<!-- Head -->
<div class="mt-10 mb-10 relative flex flex-col w-full items-center space-y-10 min-h-screen px-3 lg:flex-row lg:items-start lg:space-y-0 lg:space-x-10">
    <!-- Left Section -->
    <div class="w-full text-center md:text-left">
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
    <div class="flex flex-col lg:flex-row gap-4 justify-center items-center">
        <img src="https://via.placeholder.com/500x300" alt="" class="rounded-lg shadow-lg">
        <div class="flex flex-col gap-4">
            <img src="https://via.placeholder.com/500x145" alt="" class="rounded-lg shadow-lg">
            <img src="https://via.placeholder.com/500x145" alt="" class="rounded-lg shadow-lg">
        </div>
    </div>

    <div class="container mx-auto px-4 mt-10">
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
            <!-- Card 1 -->
            <div class="flex flex-col gap-3 p-4 hover:shadow-lg transition-all duration-300">
                <img src="https://via.placeholder.com/300x145" alt="" class="rounded-lg shadow-lg w-full object-cover">
                <h3 class="font-bold text-lg mt-2">Nutrisi untuk kehamilan yang sehat</h3>
                <span class="font-bold text-blue-900 cursor-pointer hover:underline hover:underline-offset-2 transition-all duration-500">Baca Selengkapnya...</span>
            </div>
    
            <!-- Card 2 -->
            <div class="flex flex-col gap-3 p-4 hover:shadow-lg transition-all duration-300">
                <img src="https://via.placeholder.com/300x145" alt="" class="rounded-lg shadow-lg w-full object-cover">
                <h3 class="font-bold text-lg mt-2">Memenuhi kebutuhan nutrisi harian anak</h3>
                <span class="font-bold text-blue-900 cursor-pointer hover:underline hover:underline-offset-2 transition-all duration-500">Baca Selengkapnya...</span>
            </div>
    
            <!-- Card 3 -->
            <div class="flex flex-col gap-3 p-4 hover:shadow-lg transition-all duration-300">
                <img src="https://via.placeholder.com/300x145" alt="" class="rounded-lg shadow-lg w-full object-cover">
                <h3 class="font-bold text-lg mt-2">Olahraga membantu tumbuh kembang anak</h3>
                <span class="font-bold text-blue-900 cursor-pointer hover:underline hover:underline-offset-2 transition-all duration-500">Baca Selengkapnya...</span>
            </div>
    
            <!-- Card 4 -->
            <div class="flex flex-col gap-3 p-4 hover:shadow-lg transition-all duration-300">
                <img src="https://via.placeholder.com/300x145" alt="" class="rounded-lg shadow-lg w-full object-cover">
                <h3 class="font-bold text-lg mt-2">Nutrisi yang sehat untuk anak</h3>
                <span class="font-bold text-blue-900 cursor-pointer hover:underline hover:underline-offset-2 transition-all duration-500">Baca Selengkapnya...</span>
            </div>
    
            <!-- Card 5 -->
            <div class="flex flex-col gap-3 p-4 hover:shadow-lg transition-all duration-300">
                <img src="https://via.placeholder.com/300x145" alt="" class="rounded-lg shadow-lg w-full object-cover">
                <h3 class="font-bold text-lg mt-2">Mencegah anak stunting</h3>
                <span class="font-bold text-blue-900 cursor-pointer hover:underline hover:underline-offset-2 transition-all duration-500">Baca Selengkapnya...</span>
            </div>
        </div>
    </div>

    <div class="flex flex-col lg:flex-row gap-4 mt-10 items-center justify-center">
        <img src="https://via.placeholder.com/400x200" alt="" class="rounded-lg shadow-lg w-full">
        <div class="w-full">
            <h1 class="font-bold text-pretty">Pencegahan Stunting Saat Masa Kehamilan</h1>
            <p class="text-slate-500 text-balance font-semibold mt-3">Pencegahan stunting selama masa kehamilan penting untuk memastikan pertumbuhan dan 
                perkembangan janin yang optimal. Ibu hamil perlu mengonsumsi makanan bergizi seimbang yang kaya protein, vitamin, dan
                mineral, serta mengikuti anjuran dokter untuk mengonsumsi suplemen gizi seperti asam folat dan zat besi.
            </p>
            <p class="text-slate-500 text-balance font-semibold my-3">
                Selain itu, 
                penting untuk menjaga hidrasi yang cukup, melakukan pemeriksaan kesehatan rutin, dan mendapatkan pendidikan kesehatan
                yang memadai. Menghindari kebiasaan buruk seperti merokok dan minum alkohol, serta menyediakan dukungan psikososial juga
                berperan penting dalam kesehatan ibu dan janin. Semua langkah ini bertujuan untuk meminimalkan risiko stunting pada anak.
            </p>
            <span class="font-bold text-blue-900 cursor-pointer hover:underline hover:underline-offset-2 transition-all duration-500">Baca Selengkapnya...</span>
        </div>
    </div>
</div>
{{-- End Articles --}}

{{-- Facilities --}}
<div class="container mx-auto p-8 bg-blue-50 my-10 rounded-xl">
    <h1 class="text-3xl text-balance font-extrabold text-gray-800 text-center mb-4">Fasilitas <span class="text-blue-500">Tersedia</span></h1>
    <div class="grid gap-6 sm:grid-cols-1 md:grid-cols-2 lg:grid-cols-3">
        <div class="bg-blue-300 p-6 rounded-lg shadow-md">
            <h2 class="text-lg font-bold mb-2 flex items-center">
                <span class="material-icons-outlined mr-2">home</span>
                RS. Hermina Depok
            </h2>
            <p class="flex items-center mb-2">
                <span class="material-icons-outlined mr-2">phone</span>
                +62-2719-9281-097
            </p>
            <p class="flex items-center">
                <span class="material-icons-outlined mr-2">location_on</span>
                Jl. Siliwangi No.50, Depok, Kec. Pancoran Mas, Kota Depok, Jawa Barat 16436
            </p>
        </div>
        <div class="bg-blue-300 p-6 rounded-lg shadow-md">
            <h2 class="text-lg font-bold mb-2 flex items-center">
                <span class="material-icons-outlined mr-2">home</span>
                RS. Hermina Depok
            </h2>
            <p class="flex items-center mb-2">
                <span class="material-icons-outlined mr-2">phone</span>
                +62-2719-9281-097
            </p>
            <p class="flex items-center">
                <span class="material-icons-outlined mr-2">location_on</span>
                Jl. Siliwangi No.50, Depok, Kec. Pancoran Mas, Kota Depok, Jawa Barat 16436
            </p>
        </div>
        <div class="bg-blue-300 p-6 rounded-lg shadow-md">
            <h2 class="text-lg font-bold mb-2 flex items-center">
                <span class="material-icons-outlined mr-2">home</span>
                RS. Hermina Depok
            </h2>
            <p class="flex items-center mb-2">
                <span class="material-icons-outlined mr-2">phone</span>
                +62-2719-9281-097
            </p>
            <p class="flex items-center">
                <span class="material-icons-outlined mr-2">location_on</span>
                Jl. Siliwangi No.50, Depok, Kec. Pancoran Mas, Kota Depok, Jawa Barat 16436
            </p>
        </div>
    </div>
</div>

{{-- End Facilities --}}

{{-- Review --}}
<div class="container mx-auto px-4 py-8">
    <h1 class="text-3xl text-balance font-extrabold text-gray-800 text-center mb-4">Ulasan <span class="text-blue-500">Komunitas</span></h1>
    <p class="text-center text-gray-600 mb-8 font-semibold">
        Komunitas Sesama Ibu Muda Seluruh Dunia Tentang Kehamilan Dan Pasca Lahir
    </p>

    <!-- Reviews Grid -->
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
        <!-- Review Card 1 -->
        <div class="bg-blue-100 rounded-lg p-6 shadow-lg">
            <div class="flex items-center mb-4">
                <img src="https://via.placeholder.com/40x40" alt="Anisa Iraya" class="w-10 h-10 rounded-full mr-3">
                <div>
                    <h3 class="font-semibold">Anisa Iraya</h3>
                    <p class="text-sm text-gray-600">Jakarta</p>
                </div>
            </div>
            <p class="text-gray-700 text-sm">Lorem ipsum dolor sit amet consectetur adipisicing elit. Possimus omnis dolores voluptates saepe odit distinctio vitae sequi ut placeat earum, ea neque quis delectus perspiciatis a quae illum ex sit?</p>
        </div>

        <!-- Review Card 2 (with blue border) -->
        <div class="bg-blue-100 rounded-lg p-6 shadow-lg">
            <div class="flex items-center mb-4">
                <img src="https://via.placeholder.com/40x40" alt="Marisa DB" class="w-10 h-10 rounded-full mr-3">
                <div>
                    <h3 class="font-semibold">Marisa DB</h3>
                    <p class="text-sm text-gray-600">Depok</p>
                </div>
            </div>
            <p class="text-gray-700 text-sm">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Corrupti ducimus perferendis temporibus at ex officia in eius sapiente sint excepturi repellendus, perspiciatis impedit aut aspernatur molestiae iste reprehenderit consequuntur culpa.</p>
        </div>

        <!-- Review Card 3 -->
        <div class="bg-blue-100 rounded-lg p-6 shadow-lg">
            <div class="flex items-center mb-4">
                <img src="https://via.placeholder.com/40x40" alt="Nonerase Ap" class="w-10 h-10 rounded-full mr-3">
                <div>
                    <h3 class="font-semibold">Nonerase Ap</h3>
                    <p class="text-sm text-gray-600">Depok</p>
                </div>
            </div>
            <p class="text-gray-700 text-sm">Lorem ipsum dolor sit amet consectetur adipisicing elit. Eaque, alias molestiae? Molestiae, corrupti! Cumque facere perspiciatis, maiores ab magnam dignissimos quidem voluptatem nihil. Sed sint incidunt voluptatibus quis molestiae nemo.</p>
        </div>
    </div>

    <!-- Pagination Dots -->
    <div class="flex justify-center mt-8 space-x-2">
        <div class="w-2 h-2 bg-gray-300 rounded-full"></div>
        <div class="w-2 h-2 bg-blue-500 rounded-full"></div>
        <div class="w-2 h-2 bg-gray-300 rounded-full"></div>
        <div class="w-2 h-2 bg-gray-300 rounded-full"></div>
    </div>
</div>
{{-- End Review --}}

@include('footer')