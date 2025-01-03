<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png" />
    <link rel="icon" type="image/png" href="{{ asset('img/Logo MoChi.png') }}" />
    <title>Profile</title>
    <!--     Fonts and icons     -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
    <!-- Font Awesome Icons -->
    <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
    <!-- Nucleo Icons -->
    <link href="../assets/css/nucleo-icons.css" rel="stylesheet" />
    <link href="../assets/css/nucleo-svg.css" rel="stylesheet" />
    <!-- Popper -->
    <script src="https://unpkg.com/@popperjs/core@2"></script>
    <script src="https://cdn.tailwindcss.com"></script>
    <!-- Main Styling -->
    <link href="../assets/css/soft-ui-dashboard-tailwind.css?v=1.0.5" rel="stylesheet" />

    <!-- Nepcha Analytics (nepcha.com) -->
    <!-- Nepcha is a easy-to-use web analytics. No cookies and fully compliant with GDPR, CCPA and PECR. -->
    <script defer data-site="YOUR_DOMAIN_HERE" src="https://api.nepcha.com/js/nepcha-analytics.js"></script></head>
<body class="m-0 font-sans antialiased font-normal text-base leading-default bg-gray-50 text-slate-500">
    <!-- sidenav  -->
    <aside class="max-w-62.5 ease-nav-brand z-990 fixed inset-y-0 my-4 ml-4 block w-full -translate-x-full flex-wrap items-center justify-between overflow-y-auto rounded-2xl border-0 bg-white p-0 antialiased shadow-none transition-transform duration-200 xl:left-0 xl:translate-x-0 xl:bg-transparent">
        <div class="h-19.5">
            <i class="absolute top-0 right-0 hidden p-4 opacity-50 cursor-pointer fas fa-times text-slate-400 xl:hidden" sidenav-close></i>
            <a class="block px-8 py-6 m-0 text-sm whitespace-nowrap text-slate-700" href="{{ url('/') }}" target="_blank">
                {{-- <a href=""></a> --}}
                <img src="{{ asset('img/Logo MoChi.png') }}" class="inline h-full max-w-full transition-all duration-200 ease-nav-brand max-h-8" alt="main_logo" />
                <span class="ml-1 font-semibold transition-all duration-200 ease-nav-brand">Dashboard User</span>
            </a>
        </div>

        <hr class="h-px mt-0 bg-transparent bg-gradient-to-r from-transparent via-black/40 to-transparent" />

        <div class="items-center block w-auto max-h-screen  h-sidenav grow basis-full">
            <ul class="flex flex-col pl-0 mb-0">
                <li class="mt-0.5 w-full">
                    <a class="py-2.7 text-sm ease-nav-brand my-0 mx-4 flex items-center whitespace-nowrap px-4 transition-colors" href="{{ route('dashboard') }}">
                        <div class="shadow-soft-2xl mr-2 flex h-8 w-8 items-center justify-center rounded-lg bg-white bg-center stroke-0 text-center xl:p-2.5">
                            <svg width="12px" height="12px" viewBox="0 0 45 40" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                            <title>shop</title>
                            <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                <g transform="translate(-1716.000000, -439.000000)" fill="#FFFFFF" fill-rule="nonzero">
                                <g transform="translate(1716.000000, 291.000000)">
                                    <g transform="translate(0.000000, 148.000000)">
                                    <path
                                        class="fill-slate-800 opacity-60"
                                        d="M46.7199583,10.7414583 L40.8449583,0.949791667 C40.4909749,0.360605034 39.8540131,0 39.1666667,0 L7.83333333,0 C7.1459869,0 6.50902508,0.360605034 6.15504167,0.949791667 L0.280041667,10.7414583 C0.0969176761,11.0460037 -1.23209662e-05,11.3946378 -1.23209662e-05,11.75 C-0.00758042603,16.0663731 3.48367543,19.5725301 7.80004167,19.5833333 L7.81570833,19.5833333 C9.75003686,19.5882688 11.6168794,18.8726691 13.0522917,17.5760417 C16.0171492,20.2556967 20.5292675,20.2556967 23.494125,17.5760417 C26.4604562,20.2616016 30.9794188,20.2616016 33.94575,17.5760417 C36.2421905,19.6477597 39.5441143,20.1708521 42.3684437,18.9103691 C45.1927731,17.649886 47.0084685,14.8428276 47.0000295,11.75 C47.0000295,11.3946378 46.9030823,11.0460037 46.7199583,10.7414583 Z"
                                    ></path>
                                    <path
                                        class="fill-slate-800"
                                        d="M39.198,22.4912623 C37.3776246,22.4928106 35.5817531,22.0149171 33.951625,21.0951667 L33.92225,21.1107282 C31.1430221,22.6838032 27.9255001,22.9318916 24.9844167,21.7998837 C24.4750389,21.605469 23.9777983,21.3722567 23.4960833,21.1018359 L23.4745417,21.1129513 C20.6961809,22.6871153 17.4786145,22.9344611 14.5386667,21.7998837 C14.029926,21.6054643 13.533337,21.3722507 13.0522917,21.1018359 C11.4250962,22.0190609 9.63246555,22.4947009 7.81570833,22.4912623 C7.16510551,22.4842162 6.51607673,22.4173045 5.875,22.2911849 L5.875,44.7220845 C5.875,45.9498589 6.7517757,46.9451667 7.83333333,46.9451667 L19.5833333,46.9451667 L19.5833333,33.6066734 L27.4166667,33.6066734 L27.4166667,46.9451667 L39.1666667,46.9451667 C40.2482243,46.9451667 41.125,45.9498589 41.125,44.7220845 L41.125,22.2822926 C40.4887822,22.4116582 39.8442868,22.4815492 39.198,22.4912623 Z"
                                    ></path>
                                    </g>
                                </g>
                                </g>
                            </g>
                            </svg>
                        </div>
                        <span class="ml-1 duration-300 opacity-100 pointer-events-none ease-soft">Dashboard</span>
                    </a>
                </li>
    
                <li class="mt-0.5 w-full">
                <a class="py-2.7 text-sm ease-nav-brand my-0 mx-4 flex items-center whitespace-nowrap px-4 transition-colors" href="{{ route('data_anak') }}">
                    <div class="shadow-soft-2xl mr-2 flex h-8 w-8 items-center justify-center rounded-lg bg-white bg-center stroke-0 text-center xl:p-2.5">
                    <svg width="12px" height="12px" viewBox="0 0 42 42" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                        <title>office</title>
                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                        <g transform="translate(-1869.000000, -293.000000)" fill="#FFFFFF" fill-rule="nonzero">
                            <g transform="translate(1716.000000, 291.000000)">
                            <g transform="translate(153.000000, 2.000000)">
                                <path class="fill-slate-800 opacity-60" d="M12.25,17.5 L8.75,17.5 L8.75,1.75 C8.75,0.78225 9.53225,0 10.5,0 L31.5,0 C32.46775,0 33.25,0.78225 33.25,1.75 L33.25,12.25 L29.75,12.25 L29.75,3.5 L12.25,3.5 L12.25,17.5 Z"></path>
                                <path class="fill-slate-800" d="M40.25,14 L24.5,14 C23.53225,14 22.75,14.78225 22.75,15.75 L22.75,38.5 L19.25,38.5 L19.25,22.75 C19.25,21.78225 18.46775,21 17.5,21 L1.75,21 C0.78225,21 0,21.78225 0,22.75 L0,40.25 C0,41.21775 0.78225,42 1.75,42 L40.25,42 C41.21775,42 42,41.21775 42,40.25 L42,15.75 C42,14.78225 41.21775,14 40.25,14 Z M12.25,36.75 L7,36.75 L7,33.25 L12.25,33.25 L12.25,36.75 Z M12.25,29.75 L7,29.75 L7,26.25 L12.25,26.25 L12.25,29.75 Z M35,36.75 L29.75,36.75 L29.75,33.25 L35,33.25 L35,36.75 Z M35,29.75 L29.75,29.75 L29.75,26.25 L35,26.25 L35,29.75 Z M35,22.75 L29.75,22.75 L29.75,19.25 L35,19.25 L35,22.75 Z"></path>
                            </g>
                            </g>
                        </g>
                        </g>
                    </svg>
                    </div>
                    <span class="ml-1 duration-300 opacity-100 pointer-events-none ease-soft">Data Anak</span>
                </a>
                </li>
    
                <li class="mt-0.5 w-full">
                <a class="py-2.7 text-sm ease-nav-brand my-0 mx-4 flex items-center whitespace-nowrap px-4 transition-colors" href="{{ route('activities') }}">
                    <div class="shadow-soft-2xl mr-2 flex h-8 w-8 items-center justify-center rounded-lg bg-white bg-center fill-current stroke-0 text-center xl:p-2.5">
                    <svg width="12px" height="12px" viewBox="0 0 43 36" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                        <title>credit-card</title>
                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                        <g transform="translate(-2169.000000, -745.000000)" fill="#FFFFFF" fill-rule="nonzero">
                            <g transform="translate(1716.000000, 291.000000)">
                            <g transform="translate(453.000000, 454.000000)">
                                <path class="fill-slate-800 opacity-60" d="M43,10.7482083 L43,3.58333333 C43,1.60354167 41.3964583,0 39.4166667,0 L3.58333333,0 C1.60354167,0 0,1.60354167 0,3.58333333 L0,10.7482083 L43,10.7482083 Z"></path>
                                <path class="fill-slate-800" d="M0,16.125 L0,32.25 C0,34.2297917 1.60354167,35.8333333 3.58333333,35.8333333 L39.4166667,35.8333333 C41.3964583,35.8333333 43,34.2297917 43,32.25 L43,16.125 L0,16.125 Z M19.7083333,26.875 L7.16666667,26.875 L7.16666667,23.2916667 L19.7083333,23.2916667 L19.7083333,26.875 Z M35.8333333,26.875 L28.6666667,26.875 L28.6666667,23.2916667 L35.8333333,23.2916667 L35.8333333,26.875 Z"></path>
                            </g>
                            </g>
                        </g>
                        </g>
                    </svg>
                    </div>
                    <span class="ml-1 duration-300 opacity-100 pointer-events-none ease-soft">Activities</span>
                </a>
                </li>
                <li class="w-full mt-4">
                <h6 class="pl-6 ml-2 text-xs font-bold leading-tight uppercase opacity-60">Account pages</h6>
                </li>
    
                <li class="mt-0.5 w-full">
                    <a class="py-2.7 text-sm shadow-soft-xl ease-nav-brand my-0 mx-4 flex items-center whitespace-nowrap rounded-lg bg-white px-4 font-semibold text-slate-700 transition-colors" href="{{ route('profile') }}">
                      <div class="bg-gradient-to-tl from-purple-700 to-pink-500 shadow-soft-2xl mr-2 flex h-8 w-8 items-center justify-center rounded-lg bg-white bg-center stroke-0 text-center xl:p-2.5">
                        <svg width="12px" height="12px" viewBox="0 0 46 42" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                            <title>customer-support</title>
                            <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                              <g transform="translate(-1717.000000, -291.000000)" fill="#FFFFFF" fill-rule="nonzero">
                                <g transform="translate(1716.000000, 291.000000)">
                                  <g transform="translate(1.000000, 0.000000)">
                                    <path class="opacity-60" d="M45,0 L26,0 C25.447,0 25,0.447 25,1 L25,20 C25,20.379 25.214,20.725 25.553,20.895 C25.694,20.965 25.848,21 26,21 C26.212,21 26.424,20.933 26.6,20.8 L34.333,15 L45,15 C45.553,15 46,14.553 46,14 L46,1 C46,0.447 45.553,0 45,0 Z"></path>
                                    <path class="" d="M22.883,32.86 C20.761,32.012 17.324,31 13,31 C8.676,31 5.239,32.012 3.116,32.86 C1.224,33.619 0,35.438 0,37.494 L0,41 C0,41.553 0.447,42 1,42 L25,42 C25.553,42 26,41.553 26,41 L26,37.494 C26,35.438 24.776,33.619 22.883,32.86 Z"></path>
                                    <path class="" d="M13,28 C17.432,28 21,22.529 21,18 C21,13.589 17.411,10 13,10 C8.589,10 5,13.589 5,18 C5,22.529 8.568,28 13,28 Z"></path>
                                  </g>
                                </g>
                              </g>
                            </g>
                          </svg>
                        </div>
                        <span class="ml-1 duration-300 opacity-100 pointer-events-none ease-soft">Profile</span>
                      </a>
                    </li>
    
                <li class="mt-0.5 w-full">
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <button type="submit" class="py-2.7 text-sm ease-nav-brand my-0 mx-4 flex items-center whitespace-nowrap px-4 transition-colors">
                            <div class="shadow-soft-2xl mr-2 flex h-8 w-8 items-center justify-center rounded-lg bg-white bg-center stroke-0 text-center xl:p-2.5">
                                <svg width="12px" height="12px" viewBox="0 0 40 44" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                    <title>document</title>
                                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                        <g transform="translate(-1870.000000, -591.000000)" fill="#FFFFFF" fill-rule="nonzero">
                                            <g transform="translate(1716.000000, 291.000000)">
                                                <g transform="translate(154.000000, 300.000000)">
                                                    <path class="fill-slate-800 opacity-60" d="M40,40 L36.3636364,40 L36.3636364,3.63636364 L5.45454545,3.63636364 L5.45454545,0 L38.1818182,0 C39.1854545,0 40,0.814545455 40,1.81818182 L40,40 Z"></path>
                                                    <path class="fill-slate-800" d="M30.9090909,7.27272727 L1.81818182,7.27272727 C0.814545455,7.27272727 0,8.08727273 0,9.09090909 L0,41.8181818 C0,42.8218182 0.814545455,43.6363636 1.81818182,43.6363636 L30.9090909,43.6363636 C31.9127273,43.6363636 32.7272727,42.8218182 32.7272727,41.8181818 L32.7272727,9.09090909 C32.7272727,8.08727273 31.9127273,7.27272727 30.9090909,7.27272727 Z M18.1818182,34.5454545 L7.27272727,34.5454545 L7.27272727,30.9090909 L18.1818182,30.9090909 L18.1818182,34.5454545 Z M25.4545455,27.2727273 L7.27272727,27.2727273 L7.27272727,23.6363636 L25.4545455,23.6363636 L25.4545455,27.2727273 Z M25.4545455,20 L7.27272727,20 L7.27272727,16.3636364 L25.4545455,16.3636364 L25.4545455,20 Z"></path>
                                                </g>
                                            </g>
                                        </g>
                                    </g>
                                </svg>
                            </div>
                            <span class="ml-1 duration-300 opacity-100 pointer-events-none ease-soft">Keluar</span>
                        </button>
                    </form>
                </li>
    
                
            </ul>
        </div>
        
    </aside>

    <!-- end sidenav -->

    <div class="ease-soft-in-out xl:ml-68.5 relative h-full max-h-screen bg-gray-50 transition-all duration-200">
        <nav class="absolute z-20 flex flex-wrap items-center justify-between w-full px-6 py-2 text-white transition-all shadow-none duration-250 ease-soft-in lg:flex-nowrap lg:justify-start" navbar-profile navbar-scroll="true">
            <div class="flex items-center justify-between w-full px-6 py-1 mx-auto flex-wrap-inherit">
            <nav>
                <h6 class="mb-2 ml-2 font-bold text-white capitalize">Profile</h6>
            </nav>

            <div class="flex items-center mt-2 grow sm:mt-0 sm:mr-6 md:mr-0 lg:flex lg:basis-auto">
                <div class="flex items-center md:ml-auto md:pr-4">
                </div>
                <ul class="flex flex-row justify-end pl-0 mb-0 list-none md-max:w-full">
                <!-- online builder btn  -->
                <!-- <li class="flex items-center">
                    <a class="inline-block px-8 py-2 mb-0 mr-4 font-bold text-center text-white uppercase align-middle transition-all border border-solid rounded-lg shadow-none cursor-pointer leading-pro border-white/75 bg-white/10 ease-soft-in text-xs hover:scale-102 active:shadow-soft-xs tracking-tight-soft hover:border-white hover:bg-transparent hover:text-white hover:opacity-75 hover:shadow-none active:bg-white active:text-black active:hover:bg-transparent active:hover:text-white" target="_blank" href="https://www.creative-tim.com/builder/soft-ui?ref=navbar-dashboard&amp;_ga=2.76518741.1192788655.1647724933-1242940210.1644448053">Online Builder</a>
                </li> -->
                
                <li class="flex items-center pl-4 xl:hidden">
                    <a href="javascript:;" class="block p-0 text-white transition-all ease-soft-in-out text-sm" sidenav-trigger>
                    <div class="w-4.5 overflow-hidden">
                        <i class="ease-soft mb-0.75 relative block h-0.5 rounded-sm bg-white transition-all"></i>
                        <i class="ease-soft mb-0.75 relative block h-0.5 rounded-sm bg-white transition-all"></i>
                        <i class="ease-soft relative block h-0.5 rounded-sm bg-white transition-all"></i>
                    </div>
                    </a>
                </li>
                <li class="flex items-center px-4">
                    <a href="javascript:;" class="p-0 text-white transition-all text-sm ease-soft-in-out">
                    <i fixed-plugin-button-nav class="cursor-pointer fa fa-cog" aria-hidden="true"></i>
                    <!-- fixed-plugin-button-nav  -->
                    </a>
                </li>

                <!-- notifications -->

                <li class="relative flex items-center pr-2">
                    <p class="hidden transform-dropdown-show"></p>
                    <a dropdown-trigger href="javascript:;" class="block p-0 text-white transition-all text-sm ease-nav-brand" aria-expanded="false">
                    <i class="cursor-pointer fa fa-bell" aria-hidden="true"></i>
                    </a>

                    <ul dropdown-menu class="text-sm transform-dropdown before:font-awesome before:leading-default before:duration-350 before:ease-soft lg:shadow-soft-3xl duration-250 min-w-44 before:sm:right-7.5 before:text-5.5 pointer-events-none absolute right-0 top-0 z-50 origin-top list-none rounded-lg border-0 border-solid border-transparent bg-white bg-clip-padding px-2 py-4 text-left text-slate-500 opacity-0 transition-all before:absolute before:right-2 before:left-auto before:top-0 before:z-50 before:inline-block before:font-normal before:text-white before:antialiased before:transition-all before:content-['\f0d8'] sm:-mr-6 lg:absolute lg:right-0 lg:left-auto lg:mt-2 lg:block lg:cursor-pointer">
                    <!-- add show class on dropdown open js -->
                    <li class="relative mb-2">
                        <a class="ease-soft py-1.2 clear-both block w-full whitespace-nowrap rounded-lg bg-transparent px-4 duration-300 lg:transition-colors" href="javascript:;">
                        <div class="flex py-1">
                            <div class="my-auto">
                            <img src="../assets/img/team-2.jpg" class="inline-flex items-center justify-center mr-4 text-white text-sm h-9 w-9 max-w-none rounded-xl" />
                            </div>
                            <div class="flex flex-col justify-center">
                            <h6 class="mb-1 font-normal leading-normal text-sm"><span class="font-semibold">New message</span> from Laur</h6>
                            <p class="mb-0 leading-tight text-xs text-slate-400">
                                <i class="mr-1 fa fa-clock" aria-hidden="true"></i>
                                13 minutes ago
                            </p>
                            </div>
                        </div>
                        </a>
                    </li>

                    <li class="relative mb-2">
                        <a class="ease-soft py-1.2 clear-both block w-full whitespace-nowrap rounded-lg px-4 duration-300 lg:transition-colors" href="javascript:;">
                        <div class="flex py-1">
                            <div class="my-auto">
                            <img src="../assets/img/small-logos/logo-spotify.svg" class="inline-flex items-center justify-center mr-4 text-white text-sm bg-gradient-to-tl from-gray-900 to-slate-800 h-9 w-9 max-w-none rounded-xl" />
                            </div>
                            <div class="flex flex-col justify-center">
                            <h6 class="mb-1 font-normal leading-normal text-sm"><span class="font-semibold">New album</span> by Travis Scott</h6>
                            <p class="mb-0 leading-tight text-xs text-slate-400">
                                <i class="mr-1 fa fa-clock" aria-hidden="true"></i>
                                1 day
                            </p>
                            </div>
                        </div>
                        </a>
                    </li>

                    <li class="relative">
                        <a class="ease-soft py-1.2 clear-both block w-full whitespace-nowrap rounded-lg px-4 duration-300 lg:transition-colors" href="javascript:;">
                        <div class="flex py-1">
                            <div class="inline-flex items-center justify-center my-auto mr-4 text-white transition-all duration-200 ease-soft-in-out text-sm bg-gradient-to-tl from-slate-600 to-slate-300 h-9 w-9 rounded-xl">
                            <svg width="12px" height="12px" viewBox="0 0 43 36" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                <title>credit-card</title>
                                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                <g transform="translate(-2169.000000, -745.000000)" fill="#FFFFFF" fill-rule="nonzero">
                                    <g transform="translate(1716.000000, 291.000000)">
                                    <g transform="translate(453.000000, 454.000000)">
                                        <path class="color-background" d="M43,10.7482083 L43,3.58333333 C43,1.60354167 41.3964583,0 39.4166667,0 L3.58333333,0 C1.60354167,0 0,1.60354167 0,3.58333333 L0,10.7482083 L43,10.7482083 Z" opacity="0.593633743"></path>
                                        <path class="color-background" d="M0,16.125 L0,32.25 C0,34.2297917 1.60354167,35.8333333 3.58333333,35.8333333 L39.4166667,35.8333333 C41.3964583,35.8333333 43,34.2297917 43,32.25 L43,16.125 L0,16.125 Z M19.7083333,26.875 L7.16666667,26.875 L7.16666667,23.2916667 L19.7083333,23.2916667 L19.7083333,26.875 Z M35.8333333,26.875 L28.6666667,26.875 L28.6666667,23.2916667 L35.8333333,23.2916667 L35.8333333,26.875 Z"></path>
                                    </g>
                                    </g>
                                </g>
                                </g>
                            </svg>
                            </div>
                            <div class="flex flex-col justify-center">
                            <h6 class="mb-1 font-normal leading-normal text-sm">Payment successfully completed</h6>
                            <p class="mb-0 leading-tight text-xs text-slate-400">
                                <i class="mr-1 fa fa-clock" aria-hidden="true"></i>
                                2 days
                            </p>
                            </div>
                        </div>
                        </a>
                    </li>
                    </ul>
                </li>
                </ul>
            </div>
            </div>
        </nav>

        <div class="container max-w-4xl bg-white rounded-lg shadow-md p-6">
            <!-- Header -->
            <div class="flex justify-between items-center border-b pb-4">
                <div>
                    <h1 class="text-xl font-semibold">Welcome, @auth
                        {{ Auth::user()->name }}
                    @endauth</h1>
                    <p class="text-sm text-gray-500 mt-1">Minggu, 29 Desember 2077</p>
                </div>
            </div>
        
            <!-- Profile Section -->
            <div class="flex justify-between items-center mt-6">
                <div class="flex items-center space-x-4">
                    <img src="{{ asset('img/kayina.jpg') }}" alt="Profile Picture" class="w-20 h-20 rounded-full border-2 border-blue-500">
                    <div>
                        <p class="font-bold text-lg">@auth
                            {{ Auth::user()->name }}
                        @endauth</p>
                        <p class="text-gray-600">@auth
                            {{ Auth::user()->email }}
                        @endauth</p>
                    </div>
                </div>
                <button class="bg-blue-500 text-white px-4 py-2 rounded-md hover:bg-blue-600">Edit</button>
            </div>
        
            <!-- Form Section -->
            <form class="mt-6 space-y-6">
                <!-- Full Name & Nickname -->
                <div class="grid grid-cols-1 sm:grid-cols-2 gap-6">
                    <div>
                        <label for="child-name" class="block text-sm font-medium text-gray-700">Nama Lengkap</label>
                        <input type="text" id="child-name" value="@auth{{ Auth::user()->name }}@endauth"  
                            class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500 sm:text-sm">
                    </div>
                    <div>
                        <label for="nickname" class="block text-sm font-medium text-gray-700">Nickname</label>
                        <input type="text" id="nickname" value="@auth{{ Auth::user()->name }}@endauth"  
                            class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500 sm:text-sm">
                    </div>
                </div>
        
                <!-- Gender & Country -->
                <div class="grid grid-cols-1 sm:grid-cols-2 gap-6">
                    <div>
                        <label for="gender" class="block text-sm font-medium text-gray-700">Gender</label>
                        <select id="gender" 
                            class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500 sm:text-sm">
                            <option>Perempuan</option>
                            <option>Laki-laki</option>
                        </select>
                    </div>
                    <div>
                        <label for="country" class="block text-sm font-medium text-gray-700">Country</label>
                        <select id="country" 
                            class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500 sm:text-sm">
                            <option>Indonesia</option>
                            <option>China</option>
                            <option>Japan</option>
                        </select>
                    </div>
                </div>
        
                <!-- Language & Time Zone -->
                <div class="grid grid-cols-1 sm:grid-cols-2 gap-6">
                    <div>
                        <label for="language" class="block text-sm font-medium text-gray-700">Language</label>
                        <select id="language" 
                            class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500 sm:text-sm">
                            <option>Indonesia</option>
                        </select>
                    </div>
                    <div>
                        <label for="timezone" class="block text-sm font-medium text-gray-700">Time Zone</label>
                        <select id="timezone" 
                            class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500 sm:text-sm">
                            <option>Jakarta</option>
                        </select>
                    </div>
                </div>
        
                <!-- Password Update -->
                <div class="grid grid-cols-1 sm:grid-cols-3 gap-6">
                    <input type="password" placeholder="Current Password" 
                        class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500 sm:text-sm">
                    <input type="password" placeholder="New Password" 
                        class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500 sm:text-sm">
                    <input type="password" placeholder="Confirm New Password" 
                        class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500 sm:text-sm">
                </div>
        
                <!-- Sign Out Button -->
                <div class="text-right">
                    <button type="button" class="bg-red-500 text-white px-4 py-2 rounded-md hover:bg-red-600">Sign Out</button>
                </div>
            </form>
        </div>
@include('profile.footer')




{{-- <div class="container max-w-4xl bg-white rounded-lg shadow-md p-6">
    <!-- Header -->
    <div class="flex justify-between items-center border-b pb-4">
        <div>
            <h1 class="text-xl font-semibold">Welcome, Kayinaa</h1>
            <p class="text-sm text-gray-500 mt-1">Minggu, 29 Desember 2077</p>
        </div>
    </div>

    <!-- Profile Section -->
    <div class="flex justify-between items-center mt-6">
        <div class="flex items-center space-x-4">
            <img src="../profile/assets/karina.jpeg" alt="Profile Picture" class="w-20 h-20 rounded-full border-2 border-blue-500">
            <div>
                <p class="font-bold text-lg">Kayinaa</p>
                <p class="text-gray-600">vladilena@example.com</p>
            </div>
        </div>
        <button class="bg-blue-500 text-white px-4 py-2 rounded-md hover:bg-blue-600">Edit</button>
    </div>

    <!-- Form Section -->
    <form class="mt-6 space-y-6">
        <!-- Full Name & Nickname -->
        <div class="grid grid-cols-1 sm:grid-cols-2 gap-6">
            <div>
                <label for="child-name" class="block text-sm font-medium text-gray-700">Nama Lengkap</label>
                <input type="text" id="child-name" value="Karina Siregar"  
                    class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500 sm:text-sm">
            </div>
            <div>
                <label for="nickname" class="block text-sm font-medium text-gray-700">Nickname</label>
                <input type="text" id="nickname" value="Kayinaa"  
                    class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500 sm:text-sm">
            </div>
        </div>

        <!-- Gender & Country -->
        <div class="grid grid-cols-1 sm:grid-cols-2 gap-6">
            <div>
                <label for="gender" class="block text-sm font-medium text-gray-700">Gender</label>
                <select id="gender" 
                    class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500 sm:text-sm">
                    <option>Perempuan</option>
                    <option>Laki-laki</option>
                </select>
            </div>
            <div>
                <label for="country" class="block text-sm font-medium text-gray-700">Country</label>
                <select id="country" 
                    class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500 sm:text-sm">
                    <option>Indonesia</option>
                    <option>China</option>
                    <option>Japan</option>
                </select>
            </div>
        </div>

        <!-- Language & Time Zone -->
        <div class="grid grid-cols-1 sm:grid-cols-2 gap-6">
            <div>
                <label for="language" class="block text-sm font-medium text-gray-700">Language</label>
                <select id="language" 
                    class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500 sm:text-sm">
                    <option>Indonesia</option>
                </select>
            </div>
            <div>
                <label for="timezone" class="block text-sm font-medium text-gray-700">Time Zone</label>
                <select id="timezone" 
                    class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500 sm:text-sm">
                    <option>Jakarta</option>
                </select>
            </div>
        </div>

        <!-- Password Update -->
        <div class="grid grid-cols-1 sm:grid-cols-3 gap-6">
            <input type="password" placeholder="Current Password" 
                class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500 sm:text-sm">
            <input type="password" placeholder="New Password" 
                class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500 sm:text-sm">
            <input type="password" placeholder="Confirm New Password" 
                class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500 sm:text-sm">
        </div>

        <!-- Sign Out Button -->
        <div class="text-right">
            <button type="button" class="bg-red-500 text-white px-4 py-2 rounded-md hover:bg-red-600">Sign Out</button>
        </div>
    </form>
</div> --}}