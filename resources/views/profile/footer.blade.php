
<footer class="pt-4">
    <div class="w-full px-6 mx-auto">
        <div class="flex flex-wrap items-center -mx-3 lg:justify-between">
        <div class="font-bold w-full max-w-full px-3 mt-0 mb-6 shrink-0 lg:mb-0 lg:w-1/2 lg:flex-none">
            <div class="text-sm leading-normal text-center text-slate-500 lg:text-left">
            ©
            <script>
                document.write(new Date().getFullYear() + ",");
            </script>
            made with <i class="fa fa-heart"></i> by MoChi Team
            </div>
        </div>
        </div>
    </div>
    </footer>
</div>
<!-- end cards -->
</main>
<div fixed-plugin>
<a fixed-plugin-button class="bottom-7.5 right-7.5 text-xl z-990 shadow-soft-lg rounded-circle fixed cursor-pointer bg-white px-4 py-2 text-slate-700">
<i class="py-2 pointer-events-none fa fa-cog"> </i>
</a>
<!-- -right-90 in loc de 0-->
<div fixed-plugin-card class="z-sticky shadow-soft-3xl w-90 ease-soft -right-90 fixed top-0 left-auto flex h-full min-w-0 flex-col break-words rounded-none border-0 bg-white bg-clip-border px-2.5 duration-200">
<div class="px-6 pt-4 pb-0 mb-0 bg-white border-b-0 rounded-t-2xl">
  <div class="float-left">
    <h5 class="mt-4 mb-0">Configurator</h5>
    <p>See our dashboard options.</p>
  </div>
  <div class="float-right mt-6">
    <button fixed-plugin-close-button class="inline-block p-0 mb-4 text-xs font-bold text-center uppercase align-middle transition-all bg-transparent border-0 rounded-lg shadow-none cursor-pointer hover:scale-102 leading-pro ease-soft-in tracking-tight-soft bg-150 bg-x-25 active:opacity-85 text-slate-700">
      <i class="fa fa-close"></i>
    </button>
  </div>
  <!-- End Toggle Button -->
</div>
<hr class="h-px mx-0 my-1 bg-transparent bg-gradient-to-r from-transparent via-black/40 to-transparent" />
<div class="flex-auto p-6 pt-0 sm:pt-4">
  <!-- Sidebar Backgrounds -->
  
  <!-- Sidenav Type -->
  <div class="mt-4">
    <h6 class="mb-0">Sidenav Type</h6>
    <p class="text-sm leading-normal">Choose between 2 different sidenav types.</p>
  </div>
  <div class="flex">
    <button transparent-style-btn class="inline-block w-full px-4 py-3 mb-2 text-xs font-bold text-center text-white uppercase align-middle transition-all border border-transparent border-solid rounded-lg cursor-pointer xl-max:cursor-not-allowed xl-max:opacity-65 xl-max:pointer-events-none xl-max:bg-gradient-to-tl xl-max:from-purple-700 xl-max:to-pink-500 xl-max:text-white xl-max:border-0 hover:scale-102 hover:shadow-soft-xs active:opacity-85 leading-pro ease-soft-in tracking-tight-soft shadow-soft-md bg-150 bg-x-25 bg-gradient-to-tl from-purple-700 to-pink-500 bg-fuchsia-500 hover:border-fuchsia-500" data-class="bg-transparent" active-style>Transparent</button>
    <button white-style-btn class="inline-block w-full px-4 py-3 mb-2 ml-2 text-xs font-bold text-center uppercase align-middle transition-all bg-transparent border border-solid rounded-lg cursor-pointer xl-max:cursor-not-allowed xl-max:opacity-65 xl-max:pointer-events-none xl-max:bg-gradient-to-tl xl-max:from-purple-700 xl-max:to-pink-500 xl-max:text-white xl-max:border-0 hover:scale-102 hover:shadow-soft-xs active:opacity-85 leading-pro ease-soft-in tracking-tight-soft shadow-soft-md bg-150 bg-x-25 border-fuchsia-500 bg-none text-fuchsia-500 hover:border-fuchsia-500" data-class="bg-white">White</button>
  </div>
  <p class="block mt-2 text-sm leading-normal xl:hidden">You can change the sidenav type just on desktop view.</p>
  <!-- Navbar Fixed -->
  <div class="mt-4">
    <h6 class="mb-0">Navbar Fixed</h6>
  </div>
  <div class="min-h-6 mb-0.5 block pl-0">
    <input navbarFixed class="rounded-10 duration-250 ease-soft-in-out after:rounded-circle after:shadow-soft-2xl after:duration-250 checked:after:translate-x-5.25 h-5 relative float-left mt-1 ml-auto w-10 cursor-pointer appearance-none border border-solid border-gray-200 bg-slate-800/10 bg-none bg-contain bg-left bg-no-repeat align-top transition-all after:absolute after:top-px after:h-4 after:w-4 after:translate-x-px after:bg-white after:content-[''] checked:border-slate-800/95 checked:bg-slate-800/95 checked:bg-none checked:bg-right" type="checkbox" />
  </div>
  <hr class="h-px bg-transparent bg-gradient-to-r from-transparent via-black/40 to-transparent sm:my-6" />
 
  <div class="w-full text-center">
    <a href="https://github.com/Aldinokhalifah/mochi_RPL" class="inline-block px-6 py-3 mb-0 mr-2 text-md font-bold text-center text-white uppercase align-middle transition-all border-0 rounded-lg cursor-pointer hover:shadow-soft-xs hover:scale-102 active:opacity-85 leading-pro ease-soft-in tracking-tight-soft shadow-soft-md bg-150 bg-x-25 me-2 border-slate-700 bg-slate-700" target="_blank"> <i class="mr-1 fab fa-github"></i> Follow </a>
    <a href="https://www.instagram.com/abysssalartist?utm_source=ig_web_button_share_sheet&igsh=ZDNlZDc0MzIxNw==" class="inline-block px-6 py-3 mb-0 mr-2 text-md font-bold text-center text-white uppercase align-middle transition-all border-0 rounded-lg cursor-pointer hover:shadow-soft-xs hover:scale-102 active:opacity-85 leading-pro ease-soft-in tracking-tight-soft shadow-soft-md bg-150 bg-x-25 me-2 border-slate-700 bg-slate-700" target="_blank"> <i class="mr-1 fab fa-instagram-square"></i> Follow </a>
  </div>
</div>
</div>
</div>
</body>


<!-- plugin for charts  -->
<script src="./assets/js/plugins/chartjs.min.js" async></script>
<script src="{{ asset('assets/js/chart-1.js') }}"></script>
<script src="{{ asset('assets/js/chart-3.js') }}"></script>
<!-- plugin for scrollbar  -->
<script src="{{ asset('./assets/js/plugins/perfect-scrollbar.min.js') }}" async></script>
<!-- github button -->
<script async defer src="https://buttons.github.io/buttons.js"></script>
<!-- main script file  -->
<script src="./assets/js/soft-ui-dashboard-tailwind.js?v=1.0.5" async></script>
</html>
