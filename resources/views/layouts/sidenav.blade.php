@extends('../layouts/base')

@section('body')
    <body class="">
        
    @yield('content')

        <!-- BEGIN: JS Assets-->
        <script src="{{ mix('dist/js/app.js') }}"></script>
        <!-- END: JS Assets-->
        
        
        <!-- BEGIN: Top Bar -->
        <div class=" top-bar-boxed border-b border-theme-3 px-4 md:px-6 mb-14 md:mb-8">
            <div class="h-full flex items-center">
             
            <!-- BEGIN: Logo -->
                <a href="" class="-intro-x flex items-center pt-5">
                    <img alt="fgbsUK" class="w-14" src="{{ asset('dist/images/fgbs-logo.png') }}">
                    <span class="text-white text-lg ml-3">
                        FGBS<span class="ml-2 font-medium">Ltd</span>
                    </span>
                </a>
                <!-- END: Logo -->
                <!-- BEGIN: Breadcrumb -->
                <div class="-intro-x breadcrumb breadcrumb--light mr-auto">
                    <a href="">Application</a>
                    <i data-feather="chevron-right" class="breadcrumb__icon"></i>
                    <a href="" class="breadcrumb--active">Dashboard</a>
                </div>
                <!-- END: Breadcrumb -->
                <!-- BEGIN: Search -->
                <div class="intro-x relative mr-3 sm:mr-6">
                    <div class="search hidden sm:block">
                        <input type="text" class="search__input form-control border-transparent placeholder-theme-13" placeholder="Search...">
                        <i data-feather="search" class="search__icon dark:text-gray-300"></i>
                    </div>
                    <a class="notification notification--light sm:hidden" href="">
                        <i data-feather="search" class="notification__icon dark:text-gray-300"></i>
                    </a>
                    <div class="search-result">
                        <div class="search-result__content">
                            <div class="search-result__content__title">Pages</div>
                            <div class="mb-5">
                                <a href="" class="flex items-center">
                                    <div class="w-8 h-8 bg-theme-17 text-theme-20 flex items-center justify-center rounded-full">
                                        <i class="w-4 h-4" data-feather="inbox"></i>
                                    </div>
                                    <div class="ml-3">Mail Settings</div>
                                </a>
                                <a href="" class="flex items-center mt-2">
                                    <div class="w-8 h-8 bg-theme-18 text-theme-21 flex items-center justify-center rounded-full">
                                        <i class="w-4 h-4" data-feather="users"></i>
                                    </div>
                                    <div class="ml-3">Users & Permissions</div>
                                </a>
                                <a href="" class="flex items-center mt-2">
                                    <div class="w-8 h-8 bg-theme-19 text-theme-22 flex items-center justify-center rounded-full">
                                        <i class="w-4 h-4" data-feather="credit-card"></i>
                                    </div>
                                    <div class="ml-3">Transactions Report</div>
                                </a>
                            </div>
                            <div class="search-result__content__title">Users</div>
                            
                            
                        </div>
                    </div>
                </div>
                <!-- END: Search -->
                <!-- BEGIN: Notifications -->
                <div class="intro-x dropdown mr-4 sm:mr-6">
                    <div class="dropdown-toggle notification notification--light notification--bullet cursor-pointer" role="button" aria-expanded="false">
                        <i data-feather="bell" class="notification__icon dark:text-gray-300"></i>
                    </div>
                    <div class="notification-content pt-2 dropdown-menu">
                        <div class="notification-content__box dropdown-menu__content box dark:bg-dark-6">
                            <div class="notification-content__title">Notifications</div>
                            
                                <div class="cursor-pointer relative flex items-center mt-5">
                                    <div class="w-12 h-12 flex-none image-fit mr-1">
                                        <img alt="JustDrive" class="rounded-full" src="{{ asset('dist/images/preview-1.jpg') }}">
                                        <div class="w-3 h-3 bg-theme-20 absolute right-0 bottom-0 rounded-full border-2 border-white"></div>
                                    </div>
                                    <div class="ml-2 overflow-hidden">
                                        <div class="flex items-center">
                                            <a href="javascript:;" class="font-medium truncate mr-5">Jane Doe</a>
                                            <div class="text-xs text-gray-500 ml-auto whitespace-nowrap">2 mins ago</div>
                                        </div>
                                        <div class="w-full truncate text-gray-600 mt-0.5">Hi, Just checking out..</div>
                                    </div>
                                </div>
                        
                        </div>
                    </div>
                </div>
                <!-- END: Notifications -->
                <!-- BEGIN: Account Menu -->
                <div class="intro-x dropdown w-8 h-8">
                    <div class="dropdown-toggle w-8 h-8 rounded-full overflow-hidden shadow-lg image-fit zoom-in" role="button" aria-expanded="false">
                        <img alt="JustDrive" src="{{ asset('dist/images/preview-1.jpg') }}">
                    </div>
                    <div class="dropdown-menu w-56">
                        <div class="dropdown-menu__content box dark:bg-dark-6">
                            <div class="p-4 border-b border-black border-opacity-5 dark:border-dark-3">
                                <div class="font-medium">Arun Panneerselvam</div>
                                <div class="text-xs text-gray-600 mt-0.5 dark:text-gray-600">Web Developer</div>
                            </div>
                            <div class="p-2">
                                <a href="" class="flex items-center block p-2 transition duration-300 ease-in-out hover:bg-gray-200 dark:hover:bg-dark-3 rounded-md">
                                    <i data-feather="user" class="w-4 h-4 mr-2"></i> Profile
                                </a>
                                <a href="" class="flex items-center block p-2 transition duration-300 ease-in-out hover:bg-gray-200 dark:hover:bg-dark-3 rounded-md">
                                    <i data-feather="edit" class="w-4 h-4 mr-2"></i> Add Account
                                </a>
                                <a href="" class="flex items-center block p-2 transition duration-300 ease-in-out hover:bg-gray-200 dark:hover:bg-dark-3 rounded-md">
                                    <i data-feather="lock" class="w-4 h-4 mr-2"></i> Reset Password
                                </a>
                                <a href="" class="flex items-center block p-2 transition duration-300 ease-in-out hover:bg-gray-200 dark:hover:bg-dark-3 rounded-md">
                                    <i data-feather="help-circle" class="w-4 h-4 mr-2"></i> Help
                                </a>
                            </div>
                            <div class="p-2 border-t border-black border-opacity-5 dark:border-dark-3">
                                <a href="{{ route('logout') }}" class="flex items-center block p-2 transition duration-300 ease-in-out hover:bg-gray-200 dark:hover:bg-dark-3 rounded-md">
                                    <i data-feather="toggle-right" class="w-4 h-4 mr-2"></i> Logout
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- END: Account Menu -->
            </div>
            @include('../layouts/components/dark-mode-switcher')
        </div>
       
        <!-- END: Top Bar -->
        <!-- BEGIN: Site Menu Start -->
        <div class=" side-nav flex flex-col items-center mt-10 w-40 h-full overflow-hidden text-gray-700 dark:text-gray-400 bg-gray-100 dark:bg-gray-900 rounded absolute" style="z-index:10000">
            <a class="flex items-center w-full px-3 mt-3" href="#">
                <svg class="w-8 h-8 fill-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                    <path d="M11 17a1 1 0 001.447.894l4-2A1 1 0 0017 15V9.236a1 1 0 00-1.447-.894l-4 2a1 1 0 00-.553.894V17zM15.211 6.276a1 1 0 000-1.788l-4.764-2.382a1 1 0 00-.894 0L4.789 4.488a1 1 0 000 1.788l4.764 2.382a1 1 0 00.894 0l4.764-2.382zM4.447 8.342A1 1 0 003 9.236V15a1 1 0 00.553.894l4 2A1 1 0 009 17v-5.764a1 1 0 00-.553-.894l-4-2z" />
                </svg>
                <span class="ml-2 text-sm font-bold">The App</span>
            </a>
            <div class="w-full px-2">
                <div class="flex flex-col items-center w-full mt-3 border-t border-gray-700">
                    <a class="flex items-center w-full h-12 px-3 mt-2 rounded hover:bg-gray-700 hover:text-gray-300" href="#">
                        <svg class="w-6 h-6 stroke-current" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6" />
                        </svg>
                        <span class="ml-2 text-sm font-medium">Dasboard</span>
                    </a>
                    <a class="flex items-center w-full h-12 px-3 mt-2 rounded hover:bg-gray-700 hover:text-gray-300" href="#">
                        <svg class="w-6 h-6 stroke-current" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                        </svg>
                        <span class="ml-2 text-sm font-medium">Search</span>
                    </a>
                    <a class="flex items-center w-full h-12 px-3 mt-2 text-gray-200 bg-gray-700 rounded" href="#">
                        <svg class="w-6 h-6 stroke-current" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 8v8m-4-5v5m-4-2v2m-2 4h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z" />
                        </svg>
                        <span class="ml-2 text-sm font-medium">Insights</span>
                    </a>
                    <a class="flex items-center w-full h-12 px-3 mt-2 rounded hover:bg-gray-700 hover:text-gray-300" href="#">
                        <svg class="w-6 h-6 stroke-current" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7v8a2 2 0 002 2h6M8 7V5a2 2 0 012-2h4.586a1 1 0 01.707.293l4.414 4.414a1 1 0 01.293.707V15a2 2 0 01-2 2h-2M8 7H6a2 2 0 00-2 2v10a2 2 0 002 2h8a2 2 0 002-2v-2" />
                        </svg>
                        <span class="ml-2 text-sm font-medium">Docs</span>
                    </a>
                </div>
                <div class="flex flex-col items-center w-full mt-2 border-t border-gray-700">
                    <a class="flex items-center w-full h-12 px-3 mt-2 rounded hover:bg-gray-700 hover:text-gray-300" href="#">
                        <svg class="w-6 h-6 stroke-current" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z" />
                        </svg>
                        <span class="ml-2 text-sm font-medium">Products</span>
                    </a>
                    <a class="flex items-center w-full h-12 px-3 mt-2 rounded hover:bg-gray-700 hover:text-gray-300" href="#">
                        <svg class="w-6 h-6 stroke-current"  xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6V4m0 2a2 2 0 100 4m0-4a2 2 0 110 4m-6 8a2 2 0 100-4m0 4a2 2 0 110-4m0 4v2m0-6V4m6 6v10m6-2a2 2 0 100-4m0 4a2 2 0 110-4m0 4v2m0-6V4" />
                        </svg>
                        <span class="ml-2 text-sm font-medium">Settings</span>
                    </a>
                    <a class="relative flex items-center w-full h-12 px-3 mt-2 rounded hover:bg-gray-700 hover:text-gray-300" href="#">
                        <svg class="w-6 h-6 stroke-current" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 8h10M7 12h4m1 8l-4-4H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-3l-4 4z" />
                        </svg>
                        <span class="ml-2 text-sm font-medium">Messages</span>
                        <span class="absolute top-0 left-0 w-2 h-2 mt-2 ml-2 bg-indigo-500 rounded-full"></span>
                    </a>
                </div>
            </div>
            <a class="flex items-center justify-center w-full h-8 mt-auto bg-gray-800 hover:bg-gray-700 hover:text-gray-300" href="#">
                <svg class="w-6 h-6 stroke-current" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5.121 17.804A13.937 13.937 0 0112 16c2.5 0 4.847.655 6.879 1.804M15 10a3 3 0 11-6 0 3 3 0 016 0zm6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                </svg>
                <span class="ml-2 text-sm font-medium">Account</span>
            </a>
        </div>
        <!-- END: Site Menu End  -->
        
        <!-- BEGIN: Content -->
        <div class="content @yield('content-modifier')">
           
            @yield('sub-content')
        </div>
        <!-- END: Content -->
        @yield('script')
    </body>
@endsection

 