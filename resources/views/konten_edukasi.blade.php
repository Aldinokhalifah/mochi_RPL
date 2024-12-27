<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HealthTube</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="min-h-screen bg-white">
    <!-- Header -->
    <header class="fixed top-0 left-0 right-0 bg-white border-b z-50">
        <div class="flex items-center justify-between px-4 h-14">
            <!-- Left -->
            <div class="flex items-center gap-4">
                <a href="{{ url('/') }}">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 cursor-pointer" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                    </svg>
                </a>
                <img src="{{ asset('img/logo mochi.png') }}" class="h-8 w-8 rounded-lg shadow-lg cursor-pointer" alt="">
                <span class="text-xl font-bold">HealthChi</span>
            </div>

            <!-- Center -->
            <div class="hidden md:flex items-center flex-1 max-w-2xl mx-4">
                <div class="flex items-center w-full">
                    <input type="text" placeholder="Cari video kesehatan..." class="w-full px-4 py-2 border rounded-l-full focus:outline-none focus:border-blue-500">
                    <button class="px-6 py-2 bg-gray-100 border border-l-0 rounded-r-full hover:bg-gray-200">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                        </svg>
                    </button>
                </div>
            </div>
        </div>
    </header>

    <!-- Main Content -->
    <main class="pt-20 px-4">
        <!-- Categories -->
        <div class="flex gap-2 overflow-x-auto pb-4 mb-4">
            <button class="px-4 py-1 bg-black text-white rounded-full whitespace-nowrap">Semua</button>
            <button class="px-4 py-1 bg-gray-100 rounded-full whitespace-nowrap hover:bg-gray-200">Kehamilan</button>
            <button class="px-4 py-1 bg-gray-100 rounded-full whitespace-nowrap hover:bg-gray-200">Bayi Baru Lahir</button>
            <button class="px-4 py-1 bg-gray-100 rounded-full whitespace-nowrap hover:bg-gray-200">Nutrisi Anak</button>
            <button class="px-4 py-1 bg-gray-100 rounded-full whitespace-nowrap hover:bg-gray-200">Perkembangan Anak</button>
            <button class="px-4 py-1 bg-gray-100 rounded-full whitespace-nowrap hover:bg-gray-200">Tips Parenting</button>
        </div>

        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-4 mb-10 mx-auto container px-4">
            <!-- Video Card 1 -->
            <div class="cursor-pointer hover:transform hover:scale-105 transition-transform duration-200">
                <a href="https://www.youtube.com/embed/ASTuae3afes?si=PuUJnYXYysemVOTx">
                    <div class="relative aspect-w-16 aspect-h-9 rounded-xl overflow-hidden shadow-lg">
                        <iframe 
                            class="w-full h-[200px] sm:h-[180px] md:h-[200px] lg:h-[180px] xl:h-[200px] rounded-lg"
                            src="https://www.youtube.com/embed/ASTuae3afes?si=PuUJnYXYysemVOTx" 
                            title="YouTube video player" 
                            frameborder="0" 
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" 
                            referrerpolicy="strict-origin-when-cross-origin" 
                            allowfullscreen>
                        </iframe>
                    </div>
                </a>
                <div class="mt-3 md:mt-4 flex gap-3">
                    
                    <div class="flex-1">
                        <h3 class="font-semibold text-sm md:text-base line-clamp-2 leading-snug">Tips Menjaga Kesehatan Ibu Hamil Trimester Pertama</h3>
                        <div class="flex items-center gap-1 text-xs md:text-sm text-gray-600">
                            <span>15rb x ditonton</span>
                            <span>•</span>
                            <span>2 hari yang lalu</span>
                        </div>
                    </div>
                </div>
            </div>
        
            <!-- Video Card 2 -->
            <div class="cursor-pointer hover:transform hover:scale-105 transition-transform duration-200">
                <a href="https://www.youtube.com/embed/Bbrpx2d8ex4?si=GGbIBIFYHJN7fPmg">
                    <div class="relative aspect-w-16 aspect-h-9 rounded-xl overflow-hidden shadow-lg">
                        <iframe 
                            class="w-full h-[200px] sm:h-[180px] md:h-[200px] lg:h-[180px] xl:h-[200px] rounded-lg"
                            src="https://www.youtube.com/embed/Bbrpx2d8ex4?si=GGbIBIFYHJN7fPmg" 
                            title="YouTube video player" 
                            frameborder="0" 
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" 
                            referrerpolicy="strict-origin-when-cross-origin" 
                            allowfullscreen>
                        </iframe>
                    </div>
                </a>
                <div class="mt-3 md:mt-4 flex gap-3">
                    
                    <div class="flex-1">
                        <h3 class="font-semibold text-sm md:text-base line-clamp-2 leading-snug">Makanan Sehat untuk Bayi 6-12 Bulan</h3>
                        <div class="flex items-center gap-1 text-xs md:text-sm text-gray-600">
                            <span>8rb x ditonton</span>
                            <span>•</span>
                            <span>5 hari yang lalu</span>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Video Card 3 -->
            <div class="cursor-pointer hover:transform hover:scale-105 transition-transform duration-200">
                <a href="https://www.youtube.com/embed/2Af7bxCqQwk?si=G16RY2dnwD2_oB5z">
                    <div class="relative aspect-w-16 aspect-h-9 rounded-xl overflow-hidden shadow-lg">
                        <iframe 
                            class="w-full h-[200px] sm:h-[180px] md:h-[200px] lg:h-[180px] xl:h-[200px] rounded-lg"
                            src="https://www.youtube.com/embed/2Af7bxCqQwk?si=G16RY2dnwD2_oB5z" 
                            title="YouTube video player" 
                            frameborder="0" 
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" 
                            allowfullscreen>
                        </iframe>
                    </div>
                </a>
                <div class="mt-3 md:mt-4 flex gap-3">
                    
                    <div class="flex-1">
                        <h3 class="font-semibold text-sm md:text-base line-clamp-2 leading-snug">Panduan Lengkap Asi Ekslusif</h3>
                        <div class="flex items-center gap-1 text-xs md:text-sm text-gray-600">
                            <span>18rb x ditonton</span>
                            <span>•</span>
                            <span>6 hari yang lalu</span>
                        </div>
                    </div>
                </div>
            </div>

            {{-- Video Card 4 --}}
            <div class="cursor-pointer hover:transform hover:scale-105 transition-transform duration-200">
                <a href="https://www.youtube.com/embed/DVPyUVvG5zM?si=gMyE0F8BSSYM1rQC">
                    <div class="relative aspect-w-16 aspect-h-9 rounded-xl overflow-hidden shadow-lg">
                        <iframe 
                            class="w-full h-[200px] sm:h-[180px] md:h-[200px] lg:h-[180px] xl:h-[200px] rounded-lg"
                            src="https://www.youtube.com/embed/DVPyUVvG5zM?si=gMyE0F8BSSYM1rQC" 
                            title="YouTube video player" 
                            frameborder="0" 
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" 
                            allowfullscreen>
                        </iframe>
                    </div>
                </a>
                <div class="mt-3 md:mt-4 flex gap-3">
                    
                    <div class="flex-1">
                        <h3 class="font-semibold text-sm md:text-base line-clamp-2 leading-snug">Perkembangan Bayi 0 - 12 Bulan</h3>
                        <div class="flex items-center gap-1 text-xs md:text-sm text-gray-600">
                            <span>13rb x ditonton</span>
                            <span>•</span>
                            <span>6 hari yang lalu</span>
                        </div>
                    </div>
                </div>
            </div>

            {{-- Video Card 5 --}}
            <div class="cursor-pointer hover:transform hover:scale-105 transition-transform duration-200">
                <a href="https://www.youtube.com/embed/6AJlPSJYkzw?si=kkRF78cPpCJNHtTb">
                    <div class="relative aspect-w-16 aspect-h-9 rounded-xl overflow-hidden shadow-lg">
                        <iframe 
                            class="w-full h-[200px] sm:h-[180px] md:h-[200px] lg:h-[180px] xl:h-[200px] rounded-lg"
                            src="https://www.youtube.com/embed/6AJlPSJYkzw?si=kkRF78cPpCJNHtTb" 
                            title="YouTube video player" 
                            frameborder="0" 
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" 
                            allowfullscreen>
                        </iframe>
                    </div>
                </a>
                <div class="mt-3 md:mt-4 flex gap-3">
                    
                    <div class="flex-1">
                        <h3 class="font-semibold text-sm md:text-base line-clamp-2 leading-snug">Senam Ibu Lahir</h3>
                        <div class="flex items-center gap-1 text-xs md:text-sm text-gray-600">
                            <span>8rb x ditonton</span>
                            <span>•</span>
                            <span>6 hari yang lalu</span>
                        </div>
                    </div>
                </div>
            </div>

            {{-- Video Card 6 --}}
            <div class="cursor-pointer hover:transform hover:scale-105 transition-transform duration-200">
                <a href="https://www.youtube.com/embed/DTIz2D0K_EE?si=tlmJjpYZJ0UjVrdc">
                    <div class="relative aspect-w-16 aspect-h-9 rounded-xl overflow-hidden shadow-lg">
                        <iframe 
                            class="w-full h-[200px] sm:h-[180px] md:h-[200px] lg:h-[180px] xl:h-[200px] rounded-lg"
                            src="https://www.youtube.com/embed/DTIz2D0K_EE?si=tlmJjpYZJ0UjVrdc" 
                            title="YouTube video player" 
                            frameborder="0" 
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" 
                            allowfullscreen>
                        </iframe>
                    </div>
                </a>
                <div class="mt-3 md:mt-4 flex gap-3">
                    
                    <div class="flex-1">
                        <h3 class="font-semibold text-sm md:text-base line-clamp-2 leading-snug">Perkembangan Bayi per Bulan</h3>
                        <div class="flex items-center gap-1 text-xs md:text-sm text-gray-600">
                            <span>21rb x ditonton</span>
                            <span>•</span>
                            <span>6 hari yang lalu</span>
                        </div>
                    </div>
                </div>
            </div>

            {{-- Video Card 7 --}}
            <div class="cursor-pointer hover:transform hover:scale-105 transition-transform duration-200">
                <a href="https://www.youtube.com/embed/5CAjqqvESPQ?si=PsSiL_kQ186Kf039">
                    <div class="relative aspect-w-16 aspect-h-9 rounded-xl overflow-hidden shadow-lg">
                        <iframe 
                            class="w-full h-[200px] sm:h-[180px] md:h-[200px] lg:h-[180px] xl:h-[200px] rounded-lg"
                            src="https://www.youtube.com/embed/5CAjqqvESPQ?si=PsSiL_kQ186Kf039" 
                            title="YouTube video player" 
                            frameborder="0" 
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" 
                            allowfullscreen>
                        </iframe>
                    </div>
                </a>
                <div class="mt-3 md:mt-4 flex gap-3">
                    
                    <div class="flex-1">
                        <h3 class="font-semibold text-sm md:text-base line-clamp-2 leading-snug">Stimulasi Tumbuh Kembang Anak</h3>
                        <div class="flex items-center gap-1 text-xs md:text-sm text-gray-600">
                            <span>22rb x ditonton</span>
                            <span>•</span>
                            <span>6 hari yang lalu</span>
                        </div>
                    </div>
                </div>
            </div>

            {{-- Video Card 8 --}}
            <div class="cursor-pointer hover:transform hover:scale-105 transition-transform duration-200">
                <a href="https://www.youtube.com/embed/NU9gqJGrEQ4?si=oYKpcJg0Ex67ans-">
                    <div class="relative aspect-w-16 aspect-h-9 rounded-xl overflow-hidden shadow-lg">
                        <iframe 
                            class="w-full h-[200px] sm:h-[180px] md:h-[200px] lg:h-[180px] xl:h-[200px] rounded-lg"
                            src="https://www.youtube.com/embed/NU9gqJGrEQ4?si=oYKpcJg0Ex67ans-" 
                            title="YouTube video player" 
                            frameborder="0" 
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" 
                            allowfullscreen>
                        </iframe>
                    </div>
                </a>
                <div class="mt-3 md:mt-4 flex gap-3">
                    
                    <div class="flex-1">
                        <h3 class="font-semibold text-sm md:text-base line-clamp-2 leading-snug">Perawatan Bayi Baru Lahir</h3>
                        <div class="flex items-center gap-1 text-xs md:text-sm text-gray-600">
                            <span>41rb x ditonton</span>
                            <span>•</span>
                            <span>6 hari yang lalu</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
</body>
</html>