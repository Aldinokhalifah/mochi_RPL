
{{-- Footer --}}
<!-- Footer Section -->
<footer class="bg-blue-500 text-white mt-16">
    <div class="container mx-auto px-4 py-8">
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            <!-- Logo -->
            <div class="flex items-center justify-center md:justify-start">
                <img src="{{ asset('img/logo mochi.png') }}" alt="Mom & Child Safety" class="h-32 rounded-lg shadow-lg">
            </div>

            <!-- Contact -->
            <div>
                <h3 class="font-bold mb-4">Contact Person</h3>
                <div class="space-y-2">
                    <div class="flex items-center">
                        <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" />
                            <span>+62 1231 2039</span>
                        </svg>
                    </div>
                    <div class="flex items-center">
                        <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                            <span>AbyysolArtist@gmail.com</span>
                        </svg>
                    </div>
                </div>
            </div>

            <!-- Social Media -->
            <div>
                <h3 class="font-bold mb-4">Sosial Media</h3>
                <div class="space-y-2">
                    <div class="flex items-center gap-3">
                        <a href="https://www.instagram.com/abysssalartist?utm_source=ig_web_button_share_sheet&igsh=ZDNlZDc0MzIxNw==" class="text-white text-lg">
                            <i class="fa-brands fa-instagram"></i>
                            <span class="mr-2">AbyysolArtist</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <!-- Copyright -->
        <div class="text-center pt-8 mt-8 border-t border-cyan-400 font-bold">
            <p>Copyright -MomAndChildSafety, All Right Reserved</p>
        </div>
    </div>
</footer>
{{-- End Footer --}}


<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script>
    AOS.init();
</script>
</body>
</html>
