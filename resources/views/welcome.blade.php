@extends('../layouts/generic')

@section('subhead')
    <title>JustDrive | Home </title>
@endsection

@section('content')

  <div class="container sm:px-10 bg-theme-10 dark:bg-theme-6" style="border-radius:50px;">
     
    <!-- BEGIN: Top Bar -->
    <div class="top-bar my-10 pb-5 border-theme-3   px-4 md:px-6 mb-14 md:mb-8 " >
        <div class="w-full flex items-center mx-10">
            <!-- BEGIN: Logo -->
                <a class="intro-y text-4xl flex items-center justify-center md:justify-start my-10" href="">
                    <img alt="FGBS" class="rounded-full w-20 mr-3" src="{{ asset('dist/images/fgbs-logo.png') }}">
                    <span class="mr-2 font-medium">Laravel</span>
                    <span class="font-bold text-sm px-1.5 py-0.5 rounded-lg border-2 border-white mt-1.5">App</span>
                </a>
            
            <!-- END: Logo -->
           
            
            <div class="action-bar ml-20 mr-auto cursor-pointer" > 
                <button class="flex btn-download btn btn-outline-dark pl-5 pr-5 py-4 border-theme-7 text-theme-29 dark:text-white relative w-full md:w-auto md:text-left rounded-full mt-6 mr-5 md:mt-2 tooltip" 
                        title="Toggle to host mode">
                    <span class="bg-white w-12 h-12 absolute flex justify-center items-center text-white rounded-full left-0 top-0 bottom-0 my-auto ml-auto mr-0.5">
                        <img alt="hand-shake" class="w-10 h-10 rounded-full" src="{{ asset('dist/images/home/hand-shake.png') }}">
                    </span>
                    <span class="w-full ml-10"> Become a Host</span>
                </button> 
            </div>
            @if(isset($user))
            <!-- BEGIN: Notifications -->
            <div class="intro-x dropdown mr-4 sm:mr-6">
                <div class="dropdown-toggle notification notification--light notification--bullet cursor-pointer" role="button" aria-expanded="false">
                    <i data-feather="bell" class="notification__icon dark:text-gray-300"></i>
                </div>
                <div class="notification-content pt-2 dropdown-menu">
                    <div class="notification-content__box dropdown-menu__content box dark:bg-dark-6">
                        <div class="notification-content__title">Notifications</div>
                        
                            <div class="cursor-pointer relative flex items-center {{ $user  ? 'mt-5' : '' }}">
                                <div class="w-12 h-12 flex-none image-fit mr-1">
                                    <img alt="JustDrive" class="rounded-full" src="dist/images/profile-1.jpg">
                                    <div class="w-3 h-3 bg-theme-20 absolute right-0 bottom-0 rounded-full border-2 border-white"></div>
                                </div>
                                <div class="ml-2 overflow-hidden">
                                    <div class="flex items-center">
                                        <a href="javascript:;" class="font-medium truncate mr-5">{{ $user['name'] }}</a>
                                        <div class="text-xs text-gray-500 ml-auto whitespace-nowrap">Member</div>
                                    </div> <!--  $user->getMaxRole($user->getRoleNames(), true)[1]  -->
                                    <div class="w-full truncate text-gray-600 mt-0.5">Random lines of code, grouped together to..</div>
                                </div>
                            </div>
                        
                    </div>
                </div>
            </div>
            <!-- END: Notifications -->
            <!-- BEGIN: Account Menu -->
            <div class="intro-x dropdown w-8 h-8">
                <div class="dropdown-toggle w-8 h-8 rounded-full overflow-hidden shadow-lg image-fit zoom-in" role="button" aria-expanded="false">
                    <img alt="JustDrive" src="{{ asset('dist/images/profile-1.jpg') }}">
                </div>
                <div class="dropdown-menu w-56">
                    <div class="dropdown-menu__content box dark:bg-dark-6">
                        <div class="p-4 border-b border-black border-opacity-5 dark:border-dark-3">
                            <div class="font-medium">{{ $user['name'] }}</div>
                            <div class="text-xs text-gray-600 mt-0.5 dark:text-gray-600">Member</div>
                        </div> <!-- $user->getMaxRole($user->getRoleNames(), true)[1] -->
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
            @else
            <a href="/login"> Login </a>
            @endif
        </div>
    </div>
    <!-- END: Top Bar -->


    <div class="">
        <!-- BEGIN: Home Search -->
        <div class="home-search-bar hidden sm:grid grid-cols-3 gap-2 bg-theme-14 dark:bg-dark-4 px-5 py-5 mx-0 my-10">
            <div class="search__input__box bg-theme-9">
                <span class="search__input__label">Location</span>
                <input type="text" class="search__input__item form-control border-theme-1 placeholder-theme-13" placeholder="Airport Terminal 1">
            </div>
            <div class="search__input__box">
                <span class="search__input__label">Trip Duration</span>             
                <div class="search__input__item relative w-56 mx-auto">
                    <div class="absolute rounded-l w-10 h-full flex items-center justify-center bg-none border-none text-gray-600 dark:bg-dark-1 dark:border-dark-4">
                        <i data-feather="calendar" class="w-4 h-4"></i>
                    </div>
                    
                                
                    <input data-daterange="true" class="bg-none border-none datepicker form-control w-56 block mx-auto " style="background:none">
                    
                </div>
            </div>
            <div class="search__input">
                <div class="search__input__optionals"> 
                    <div class="mt-2 grid grid-cols-2 gap-1">
                        
                        <div class="form-check">    <input id="checkbox-switch-1" class="form-check-switch" type="checkbox"> <label class="form-check-label" for="checkbox-switch-1">Delivery</label></div>
                        <div class="form-check">    <input id="checkbox-switch-2" class="form-check-switch" type="checkbox"><label class="form-check-label" for="checkbox-switch-2">Pet-Friendly</label></div>
                        <div class="form-check">    <input id="checkbox-switch-3" class="form-check-switch" type="checkbox"><label class="form-check-label" for="checkbox-switch-3">Electric</label></div>
                        <div class="form-check">    <input id="checkbox-switch-3" class="form-check-switch" type="checkbox"><label class="form-check-label" for="checkbox-switch-3">Hybrid</label></div>
                        <div class="form-check">    <input id="checkbox-switch-4" class="form-check-switch" type="checkbox"><label class="form-check-label" for="checkbox-switch-4">Comfort/Exec</label></div>
                        
                    </div>
                </div>
            </div>
            <div class="rounded-full  search__icon bg-theme-1 dark:bg-theme-1 pointer">  <i data-feather="search" class=" dark:text-gray-300"></i> </div>

            <div class="home-search-result">
                <div class="search-result__content mt-0">
                    <!-- BEGIN: Form Layout -->
                    <div class="intro-y box p-5">
                        <div>
                            <input id="crud-form-1" type="text" class="form-control w-full" placeholder="Start typing.. Eg: Audi A6, BMW 5 Series, Mercedes E Class etc">
                        </div>
                        <div class="mt-3">
                            <label for="crud-form-2" class="form-label">Make</label>
                            <select data-placeholder="Select your favorite actors" class="tom-select w-full" id="crud-form-2" multiple>

                            </select>
                        </div>
                        <div class="mt-3">
                            <label for="crud-form-2" class="form-label">Model</label>
                            <select data-placeholder="Select your favorite actors" class="tom-select w-full" id="crud-form-2" multiple>
                                <option value="1" selected>ACUOTH</option>
                                <option value="2">ALFAOTH</option>
                                <option value="3" selected>5 Series</option>
                                <option value="4">Focus</option>
                                <option value="5" selected>Ioniq</option>
                            </select>
                        </div>
                        <div class="mt-3">
                            <label for="crud-form-2" class="form-label">Type</label>
                            <select data-placeholder="Select your favorite actors" class="tom-select w-full" id="crud-form-2" multiple>
                                <option value="1" selected>Rental</option>
                                <option value="2" selected>Private Hire</option>
                                <option value="3" >Public Hire</option>
                                
                            </select>
                        </div>
                        <div class="mt-3">
                            <label class="form-label">Price</label>
                            <div class="sm:grid grid-cols-3 gap-2">
                                    <div class="range-container input-group w-auto">
                                        <div id="input-group-3" class="input-group-text">Min.</div>
                                        <input type="range" id="range-slider" class="form-control w-auto ml-4" value="0"><div id="input-group-2" class="input-group-text">33</div>
                                        <input type="text" class="form-control w-auto ml-2 text-center" placeholder="0" aria-describedby="input-group-3"  style="max-width: 100px" />
                                        <div id="input-group-1" class="input-group-text">£</div>
                                    </div>
                                    <div class="input-group"> 
                                        
                                        
                                    </div>
                            </div>
                        </div>
                        
                            
                        <div class="mt-3">
                            <label for="crud-form-3" class="form-label">Duration of Hire</label>    
                            <input data-daterange="true" class="datepicker form-control w-56 block mx-auto">
                        </div>
                        
                        <div class="mt-3">
                            <label for="crud-form-3" class="form-label">Price</label>
                            <div class="input-group">
                                <input id="crud-form-3" type="text" class="form-control" placeholder="Min." aria-describedby="input-group-1">
                                <input id="crud-form-3" type="text" class="form-control" placeholder="Max." aria-describedby="input-group-1">
                                <div id="input-group-1" class="input-group-text">£</div>
                            </div>
                        </div>
                        <div class="mt-3">
                            <label for="crud-form-4" class="form-label">Trim</label>
                            <div class="input-group">
                                <input id="crud-form-4" type="text" class="form-control" placeholder="Weight" aria-describedby="input-group-2">
                            </div>
                        </div>
                        <div class="mt-3">
                            <label for="crud-form-4" class="form-label">Style</label>
                            <div class="input-group">
                                <input id="crud-form-4" type="text" class="form-control" placeholder="Weight" aria-describedby="input-group-2">
                            </div>
                        </div>
                        <div class="mt-3">
                            <label class="form-label">Specific</label>
                            <div class="sm:grid grid-cols-3 gap-2">
                                <div class="input-group">
                                    <div id="input-group-3" class="input-group-text">Miles/day</div>
                                    <input type="text" class="form-control" placeholder="200" aria-describedby="input-group-3">
                                </div>
                                <div class="input-group mt-2 sm:mt-0">
                                    <div id="input-group-4" class="input-group-text">Wholesale</div>
                                    <input type="text" class="form-control" placeholder="Wholesale" aria-describedby="input-group-4">
                                </div>
                                <div class="input-group mt-2 sm:mt-0">
                                    <div id="input-group-5" class="input-group-text">Bulk</div>
                                    <input type="text" class="form-control" placeholder="Bulk" aria-describedby="input-group-5">
                                </div>
                            </div>
                        </div>
                        <div class="mt-3">
                            <label>Delivery</label>
                            <div class="flex flex-col sm:flex-row mt-2">
                                <div class="form-check mr-2">
                                    <input id="checkbox-switch-4" class="form-check-input" type="checkbox" value="">
                                    <label class="form-check-label" for="checkbox-switch-4">My Location</label>
                                </div>
                                <div class="form-check mr-2 mt-2 sm:mt-0">
                                    <input id="checkbox-switch-5" class="form-check-input" type="checkbox" value="">
                                    <label class="form-check-label" for="checkbox-switch-5">Host Location</label>
                                </div>
                                <div class="form-check mr-2 mt-2 sm:mt-0">
                                    <input id="checkbox-switch-6" class="form-check-input" type="checkbox" value="">
                                    <label class="form-check-label" for="checkbox-switch-6">Anywhere</label>
                                </div>
                            </div>
                        </div>
                        <div class="mt-3">
                            <label>Transmission</label>
                            <div class="mt-2 sm:grid grid-cols-3 gap-2">
                                <div id="input-group-3" class="input-group-text">Manual</div>
                                <input type="checkbox" class="form-check-switch">
                                <div id="input-group-3" class="input-group-text">Automatic</div>
                            </div>
                        </div>
                        
                        <div class="text-right mt-5">
                            
                            <button type="button" class="btn btn-primary w-24">Search</button>
                        </div>
                    </div>
                    <!-- END: Form Layout -->
                    
                    <div class="search-result__content__title">Hire Vehicle</div>
                    <div class="mb-5">
                        <a href="" class="flex items-center">
                            <div class="w-8 h-8 bg-theme-17 text-theme-20 flex items-center justify-center rounded-full">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" class="feather feather-inbox w-4 h-4"><polyline points="22 12 16 12 14 15 10 15 8 12 2 12"></polyline><path d="M5.45 5.11L2 12v6a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2v-6l-3.45-6.89A2 2 0 0 0 16.76 4H7.24a2 2 0 0 0-1.79 1.11z"></path></svg>
                            </div>
                            <div class="ml-3">Mail Settings</div>
                        </a>
                        <a href="" class="flex items-center mt-2">
                            <div class="w-8 h-8 bg-theme-18 text-theme-21 flex items-center justify-center rounded-full">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" class="feather feather-users w-4 h-4"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path><circle cx="9" cy="7" r="4"></circle><path d="M23 21v-2a4 4 0 0 0-3-3.87"></path><path d="M16 3.13a4 4 0 0 1 0 7.75"></path></svg>
                            </div>
                            <div class="ml-3">Users &amp; Permissions</div>
                        </a>
                        <a href="" class="flex items-center mt-2">
                            <div class="w-8 h-8 bg-theme-19 text-theme-22 flex items-center justify-center rounded-full">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" class="feather feather-credit-card w-4 h-4"><rect x="1" y="4" width="22" height="16" rx="2" ry="2"></rect><line x1="1" y1="10" x2="23" y2="10"></line></svg>
                            </div>
                            <div class="ml-3">Transactions Report</div>
                        </a>
                    </div>
                    <div class="search-result__content__title">Fleets</div>
                    
                    <div class="hidden mb-5">
                            <a href="" class="flex items-center mt-2">
                                <div class="w-8 h-8 image-fit">
                                    <img alt="JustDrive" class="rounded-full" src="{{ asset('dist/images/profile-1.jpg') }}">
                                </div>
                                <div class="ml-3">Brad Pitt</div>
                                <div class="ml-auto w-48 truncate text-gray-600 text-xs text-right">bradpitt@left4code.com</div>
                            </a>
                            <a href="" class="flex items-center mt-2">
                                <div class="w-8 h-8 image-fit">
                                    <img alt="JustDrive" class="rounded-full" src="{{ asset('dist/images/profile-15.jpg') }}">
                                </div>
                                <div class="ml-3">Johnny Depp</div>
                                <div class="ml-auto w-48 truncate text-gray-600 text-xs text-right">johnnydepp@left4code.com</div>
                            </a>
                            <a href="" class="flex items-center mt-2">
                                <div class="w-8 h-8 image-fit">
                                    <img alt="JustDrive" class="rounded-full" src="{{ asset('dist/images/profile-15.jpg') }}">
                                </div>
                                <div class="ml-3">Brad Pitt</div>
                                <div class="ml-auto w-48 truncate text-gray-600 text-xs text-right">bradpitt@left4code.com</div>
                            </a>
                            <a href="" class="flex items-center mt-2">
                                <div class="w-8 h-8 image-fit">
                                    <img alt="JustDrive" class="rounded-full" src="{{ asset('dist/images/profile-6.jpg') }}">
                                </div>
                                <div class="ml-3">Al Pacino</div>
                                <div class="ml-auto w-48 truncate text-gray-600 text-xs text-right">alpacino@left4code.com</div>
                            </a>
                    </div>
                
            
                </div>
            </div>
        </div>
        <!-- END: Home Search -->
        <!-- BEGIN: Welcome Info -->
        <div class="hidden px-5 py-5 xl:flex flex-col min-h-screen bg-theme-4 dark:bg-theme-3">        
            <div class="grid grid-cols-2 ">
                <div class="*lg:w-3/4 *xl:w-1/2 h-screen pt-10 md:pt-0 md:flex flex-col justify-center text-center px-5 sm:px-0 md:text-left">
                    
                    <div class="intro-y mt-2">
                        <div class="intro-y text-3xl md:text-5xl md:leading-tight font-medium">
                            Business ready, well organized,
                            <span class="text-theme-20">Laravel Web App!</span>
                        </div>
                        <div class="intro-y text-lg md:text-2xl text-blue/20 mt-6">
                            For a quick launch, employing a very well crafted advanced UI components to kick start or run smooth your websites.
                        </div>
                        <div class="intro-y flex text-lg mt-14">
                            <a href="javascript:;" target="blank" class="btn-download btn pl-8 pr-16 py-3 border-white text-white relative w-full md:w-auto md:text-left rounded-full mt-5 md:mt-0">
                                <img alt="google-play" class="w-40 rounded-full" src="{{ asset('dist/images/google-play.png') }}">
                                <span class="bg-white w-12 h-12 absolute flex justify-center items-center text-white rounded-full right-0 top-0 bottom-0 my-auto ml-auto mr-0.5">
                                <img alt="google-play" class="w-10 h-10 rounded-full" src="{{ asset('dist/images/google-play-logo.png') }}">
                                </span>
                            </a>
                            <button class="btn-download btn btn-outline pl-8 pr-16 py-3 border-white text-white relative w-full md:w-auto md:text-left rounded-full mt-5 md:mt-0">
                                <img alt="app-store" class="w-40 rounded-full" src="{{ asset('dist/images/app-store.png') }}">
                                <span class="bg-white w-12 h-12 absolute flex justify-center items-center text-white rounded-full right-0 top-0 bottom-0 my-auto ml-auto mr-0.5">
                                <img alt="google-play" class="w-10 h-10 rounded-full" src="{{ asset('dist/images/app-store-logo.png') }}">
                                </span>
                            </button>
                        </div>
                    </div>
                    
                </div>
                <div class="w-full inline-flex items-center justify-center rounded-full bg-indigo-100 text-indigo-500 mb-5">
                <img class="object-cover object-center rounded-full w-full" alt="hero" src="{{ asset('dist/images/home/hire-car.png') }}">
                        
                </div>
                </div>

                <div class="intro-y flex-1 h-screen hidden xl:block">
                    <div class="relative -mr-96 md:-mr-64 xxl:mr-0">
                    <div class="preview-wrapper">
                        <div class="preview h-full rounded-md" style="background-position: 0px -7015px;"></div>
                    </div>
                    </div>
                </div>
                
            </div>       
           
        </div>
        <!-- END: Welcome Info -->
        
        <!-- BEGIN: Statistics -->
        <div class="flex items-center justify-center mt-10 mb-10 bg-theme-8 rounded-full">
            <div class="text-right bg-theme-8 p-5">
                <div class="text-white dark:text-gray-300 text-3xl font-medium">1,132,918</div>
                <div class="text-gray-500 truncate mt-1 text-theme-34 dark:text-theme-34">Users</div>
            </div>
            <div class="w-px h-16 border border-r border-dashed border-theme-28 dark:border-dark-5 mx-4 xl:mx-6"></div>
            <div class="text-right bg-theme-8 p-5">
                <div class="text-white dark:text-gray-300 text-3xl font-medium">32,372</div>
                <div class="text-gray-500 truncate mt-1 text-theme-34 dark:text-theme-34"> Trips</div>
            </div>
            <div class="w-px h-16 border border-r border-dashed border-theme-28 dark:border-dark-5 mx-4 xl:mx-6"></div>
            <div class="text-right bg-theme-8 p-5">
                <div class="text-white dark:text-gray-300 text-3xl font-medium">1049</div>
                <div class="text-gray-500 truncate mt-1 text-theme-34 dark:text-theme-34">Vehicles </div>
            </div>
            <div class="w-px h-16 border border-r border-dashed border-theme-28 dark:border-dark-5 mx-4 xl:mx-6"></div>
            <div class="text-right bg-theme-8 p-5">
                <div class="text-white dark:text-gray-300 text-3xl font-medium">151</div>
                <div class="text-gray-500 truncate mt-1 text-theme-34 dark:text-theme-34">Active Fleets</div>
            </div>
            <div class="w-px h-16 border border-r border-dashed border-theme-28 dark:border-dark-5 mx-4 xl:mx-6"></div>
            <div class="bg-theme-8 p-5">
                <div class="text-white dark:text-gray-300 text-3xl font-medium">135</div>
                <div class="text-gray-500 truncate mt-1 text-theme-34 dark:text-theme-34">Browse all</div>
            </div>
        </div>     
        <!-- END: Statistics -->

        <div class="my-auto">
            <img alt="JustDrive" class="hidden -intro-x w-1/2 -mt-8" src="{{ asset('dist/images/illustration.svg') }}">
                <!-- BEGIN: Explore vehicles -->
            <div class="bg-theme-4 dark:bg-dark-4 px-10 py-5 pb-10 mx-0 my-20 rounded">
                    <h2 class="text-3xl my-4 px-4 font-extrabold tracking-tight text-gray-900 sm:text-4xl">
                        <span class="block text-theme-16 font-bold text-xxl dark:text-theme-12 " >Featured Fleets</span>
                        <span class="block text-indigo-600 text-theme-20">Hire a car with minimum effort!</span>
                    </h2>
                <div class="center-mode">
                    <div class="h-96 px-2 py-3 bg-light">
                        <div class="h-full report-box bg-gray-200 dark:bg-dark-1 rounded-md">
                            <div class="mini-report-chart box p-5 zoom-in">
                            <div class="flex items-center">
                                <div class="w-2/4 flex-none">
                                    <div class="text-lg font-medium truncate">Kia Sportage 2016</div>
                                    <div class="text-gray-600 mt-1">32 Hires</div>
                                </div>
                                <div class="flex-none ml-auto relative">
                                    <canvas id="report-donut-chart-1" width="90" height="90"></canvas>
                                    <div class="font-medium absolute w-full h-full flex items-center justify-center top-0 left-0">20%</div>
                                </div>
                                
                            </div>
                            </div>
                            <div class="px-12  pt-2" style="position:absolute; overflow-y:scroll">
                                <!-- BEGIN: PhotoDesc -->
                                <div class="mx-6 pb-8">
                                        <div class="single-item">
                                            <div class="h-32 w-32 px-2">
                                                <div class="h-full image-fit rounded-md overflow-hidden">
                                                    <img alt="Kia Sportage 2016" src="{{ asset('dist/images/vehicles/kia/kia1.jpg') }}" />
                                                </div>
                                            </div>
                                            <div class="h-32 w-32 px-2">
                                                <div class="h-full image-fit rounded-md overflow-hidden">
                                                    <img alt="Kia Sportage 2016" src="{{ asset('dist/images/vehicles/kia/kia2.jpg') }}" />
                                                </div>
                                            </div>
                                            <div class="h-32 w-32 px-2">
                                                <div class="h-full image-fit rounded-md overflow-hidden">
                                                    <img alt="Kia Sportage 2016" src="{{ asset('dist/images/vehicles/kia/kia4.jpg') }}" />
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                
                            
                                
                                <!-- END: PhotoDesc -->
                                <div class="text-base font-medium truncate">Lorem Ipsum is simply dummy text</div>
                                <div class="text-gray-500 mt-1">20 Hours ago</div>
                                <div class="text-gray-600 text-justify mt-1">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry standard dummy text ever since the 1500s.</div>
                                <div class="font-medium flex mt-5">
                                    <button type="button" class="button button--sm bg-gray-200 dark:bg-dark-5 text-gray-600 dark:text-gray-300">View Notes</button>
                                    <button type="button" class="button button--sm border border-gray-300 dark:border-dark-5 text-gray-600 ml-auto">Dismiss</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="h-96 px-2 py-3 bg-light">
                        <div class="h-full report-box bg-gray-200 dark:bg-dark-1 rounded-md">
                            <div class="mini-report-chart box p-5 zoom-in">
                                <div class="flex items-center">
                                    <div class="w-2/4 flex-none">
                                        <div class="text-lg font-medium truncate">FGBS Fleet</div>
                                        <div class="text-gray-600 mt-1">12 vehicles added today.</div>
                                    </div>
                                    <div class="flex-none ml-auto relative">
                                        <canvas id="report-donut-chart-2" width="90" height="90"></canvas>
                                        <div class="font-medium absolute w-full h-full flex items-center justify-center top-0 left-0">45%</div>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="px-12 pt-2" style="position:absolute;">
                                    <div class="text-base font-medium truncate">Try it for a few months to see how it goes!</div>
                                    <div class="text-gray-500 mt-1">3 Hours ago</div>
                                    <div class="text-gray-600 text-justify mt-1">From our members recommendations, our admin have introduced a brand new 
                                <span class="font-bold">Quarterly Challenge</span> for those who want to dive right in! Feel it&apos;s too late? The answer is No! It&apos;s never too late to participate in a challenge until 
                                first or second week. So much could happen in the stock market world during last week of financial quarter. </div>
                                    <div class="font-medium flex mt-5">
                                        <button type="button" class="button button--sm bg-gray-200 dark:bg-dark-5 text-gray-600 dark:text-gray-300">View Notes</button>
                                        <button type="button" class="button button--sm border border-gray-300 dark:border-dark-5 text-gray-600 ml-auto">Dismiss</button>
                                    </div>
                            </div>
                        </div>
                    </div>
                
                    <div class="h-96 px-2 py-3 bg-light">
                        <div class="h-full report-box bg-gray-200 dark:bg-dark-1 rounded-md">
                            <div class="mini-report-chart box p-5 zoom-in">
                            <div class="flex items-center">
                                <div class="w-2/4 flex-none">
                                    <div class="text-lg font-medium truncate">Toyota Auris</div>
                                    <div class="text-gray-600 mt-1">71 Hires</div>
                                </div>
                                <div class="flex-none ml-auto relative">
                                    <canvas id="report-donut-chart" width="90" height="90"></canvas>
                                    <div class="font-medium absolute w-full h-full flex items-center justify-center top-0 left-0">31%</div>
                                </div>
                                
                            </div>
                            </div>
                            <div class="px-12  pt-2" style="position:absolute;">
                                <!-- BEGIN: PhotoDesc -->
                                <div class="mx-6 pb-8">
                                        <div class="single-item">
                                            <div class="h-32 w-32 px-2">
                                                <div class="h-full image-fit rounded-md overflow-hidden">
                                                    <img alt="Toyota Auris 2016" src="{{ asset('dist/images/vehicles/auris/auris1.jpg') }}" />
                                                </div>
                                            </div>
                                            <div class="h-32 w-32 px-2">
                                                <div class="h-full image-fit rounded-md overflow-hidden">
                                                    <img alt="Kia Sportage 2016" src="{{ asset('dist/images/vehicles/auris/auris2.jpg') }}" />
                                                </div>
                                            </div>
                                            <div class="h-32 w-32 px-2">
                                                <div class="h-full image-fit rounded-md overflow-hidden">
                                                    <img alt="Kia Sportage 2016" src="{{ asset('dist/images/vehicles/auris/auris3.jpg') }}" />
                                                </div>
                                            </div>
                                            <div class="h-32 w-32 px-2">
                                                <div class="h-full image-fit rounded-md overflow-hidden">
                                                    <img alt="Kia Sportage 2016" src="{{ asset('dist/images/vehicles/auris/auris4.jpg') }}" />
                                                </div>
                                            </div>
                                            <div class="h-32 w-32 px-2">
                                                <div class="h-full image-fit rounded-md overflow-hidden">
                                                    <img alt="Kia Sportage 2016" src="{{ asset('dist/images/vehicles/auris/auris5.jpg') }}" />
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                
                            
                                
                                <!-- END: PhotoDesc -->
                                <div class="text-base font-medium truncate">Lorem Ipsum is simply dummy text</div>
                                <div class="text-gray-500 mt-1">20 Hours ago</div>
                                <div class="text-gray-600 text-justify mt-1">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry standard dummy text ever since the 1500s.</div>
                                <div class="font-medium flex mt-5">
                                    <button type="button" class="button button--sm bg-gray-200 dark:bg-dark-5 text-gray-600 dark:text-gray-300">View Notes</button>
                                    <button type="button" class="button button--sm border border-gray-300 dark:border-dark-5 text-gray-600 ml-auto">Dismiss</button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="h-96 px-2 py-3 bg-light">
                            <div class="h-full report-box bg-gray-200 dark:bg-dark-1 rounded-md">
                                <div class="mini-report-chart box p-5 zoom-in">
                                <div class="flex items-center">
                                    <div class="w-2/4 flex-none">
                                        <div class="text-lg font-medium truncate">Hyundai Ioniq 2019</div>
                                        <div class="text-gray-600 mt-1">46 Hires</div>
                                    </div>
                                    <div class="flex-none ml-auto relative">
                                        <canvas id="report-donut-chart" width="90" height="90"></canvas>
                                        <div class="font-medium absolute w-full h-full flex items-center justify-center top-0 left-0">20%</div>
                                    </div>
                                    
                                </div>
                                </div>
                                <div class="px-12  pt-2" style="position:absolute;">
                                    <!-- BEGIN: PhotoDesc -->
                                    <div class="mx-6 pb-8">
                                            <div class="single-item">
                                                <div class="h-32 w-32 px-2">
                                                    <div class="h-full image-fit rounded-md overflow-hidden">
                                                        <img alt="Kia Sportage 2016" src="{{ asset('dist/images/vehicles/kia/kia1.jpg') }}" />
                                                    </div>
                                                </div>
                                                <div class="h-32 w-32 px-2">
                                                    <div class="h-full image-fit rounded-md overflow-hidden">
                                                        <img alt="Kia Sportage 2016" src="{{ asset('dist/images/vehicles/kia/kia2.jpg') }}" />
                                                    </div>
                                                </div>
                                                <div class="h-32 w-32 px-2">
                                                    <div class="h-full image-fit rounded-md overflow-hidden">
                                                        <img alt="Kia Sportage 2016" src="{{ asset('dist/images/vehicles/kia/kia4.jpg') }}" />
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    
                                
                                    
                                    <!-- END: PhotoDesc -->
                                    <div class="text-base font-medium truncate">Lorem Ipsum is simply dummy text</div>
                                    <div class="text-gray-500 mt-1">20 Hours ago</div>
                                    <div class="text-gray-600 text-justify mt-1">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry standard dummy text ever since the 1500s.</div>
                                    <div class="font-medium flex mt-5">
                                        <button type="button" class="button button--sm bg-gray-200 dark:bg-dark-5 text-gray-600 dark:text-gray-300">View Notes</button>
                                        <button type="button" class="button button--sm border border-gray-300 dark:border-dark-5 text-gray-600 ml-auto">Dismiss</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    
                
                    
                    </div>
                
                    <div class="flex sm:ml-auto mt-5 ">
                        <button class="btn btn-secondary  ml-auto">View All</button>
                        
                    </div>
                </div>
            <!-- END: Explore vehicles -->
            <section class="text-gray-700 body-font">
                <div class="container mx-auto flex px-5 py-10 md:flex-row flex-col items-center">
                    <div class="lg:flex-grow md:w-1/2 lg:pr-24 md:pr-16 flex flex-col md:items-start md:text-left mb-10 md:mb-0 items-center text-center">
                    <h2  class=" text-md text-indigo-500 tracking-widest text-theme-15 font-medium title-font mb-1">Searching hours for a ride?</h2>
                    <h1 class="title-font sm:text-4xl text-3xl mb-4 font-medium text-theme-16">It&apos;s even easier with
                        <br class="hidden lg:inline-block"> <span class="text-theme-20">FGBS&trade; </span> App
                    </h1>
                    <p class="mb-8 leading-relaxed text-theme-14 font-normal text-xl">
                        FGBS&trade; App is now available on both Apple Store &amp; Google Playstore. Download now 
                        for a best experience in a hand held device.
                    </p>
                    <div class="intro-y flex text-lg mt-14">
                        <a href="/googleplay/download" target="blank" class="btn-download btn pl-8 pr-16 py-3 border-white bg-theme-10 text-white relative w-full md:w-auto md:text-left rounded-full mt-5 md:mt-0">
                            <img alt="google-play" class="w-40 rounded-full" src="{{ asset('dist/images/google-play.png') }}">
                            <span class="bg-white w-12 h-12 absolute flex justify-center items-center text-white rounded-full right-0 top-0 bottom-0 my-auto ml-auto mr-0.5">
                            <img alt="google-play" class="w-10 h-10 rounded-full" src="{{ asset('dist/images/google-play-logo.png') }}">
                            </span>
                        </a>
                        <button class="btn-download btn btn-outline pl-8 pr-16 py-3 border-white text-white relative w-full bg-theme-10 md:w-auto md:text-left rounded-full mt-5 md:mt-0">
                            <img alt="app-store" class="w-40 rounded-full" src="{{ asset('dist/images/app-store.png') }}">
                            <span class="bg-white w-12 h-12 absolute flex justify-center items-center text-white rounded-full right-0 top-0 bottom-0 my-auto ml-auto mr-0.5">
                            <img alt="google-play" class="w-10 h-10 rounded-full" src="{{ asset('dist/images/app-store-logo.png') }}">
                            </span>
                        </button>
                    </div>
                    
                    </div>
                    <div class="lg:max-w-lg lg:w-full md:w-1/2 w-5/6 mt-10">
                        <img class="object-cover object-center rounded-full " alt="hero" src="{{ asset('dist/images/settle-20-percent.png') }}">
                        <input class="bottom-0 mb-20 placeholder w-full rounded border-b p-5 z-10 font-normal text-2xl text-theme-16" placeholder="Search Settle cars..">
                        
                    </div>
                    
                </div>
            </section>
            <!-- -->
            <section class="text-gray-700 body-font border-t border-gray-200">
                <div class="container px-5 py-12 mx-auto bg-theme-4 dark:bg-theme-8">
                    <div class="flex flex-col text-center w-full mb-20">
                    <h2 id="trigger-signup" class=" text-xs text-indigo-500 tracking-widest text-theme-29 font-bold title-font mb-1">TAILORED TO YOUR NEEDS</h2>
                    <h1 class="sm:text-3xl text-2xl font-medium title-font text-theme-20">Business or Personal? suit as you see it fit!</h1>
                    </div>
                    <div class="flex flex-wrap -m-4">
                    <div class="p-4 md:w-1/3">
                        <div class="flex rounded-lg h-full bg-gray-100 p-8 flex-col">
                        <div class="flex items-center mb-3">
                            <div class="w-20 h-20 mr-3 inline-flex items-center justify-center rounded-full bg-indigo-500 text-white flex-shrink-0">
                                <img src="{{ asset('dist/images/home/cars-list-64.png') }}"  />
                            </div>
                            <h2 class="text-gray-900 text-lg title-font font-medium">Rentals</h2>
                        </div>
                        <div class="flex-grow">
                            <p class="leading-relaxed text-base">Visiting UK? Hire an affordable ride in minutes. Search over a 11,600 cars listed on JustDrive&trade;</p>
                            <a class="mt-3 text-indigo-500 inline-flex items-center">Learn More
                            <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-4 h-4 ml-2" viewBox="0 0 24 24">
                                <path d="M5 12h14M12 5l7 7-7 7"></path>
                            </svg>
                            </a>
                        </div>
                        </div>
                    </div>
                    <div class="p-4 md:w-1/3">
                        <div class="flex rounded-lg h-full bg-gray-100 p-8 flex-col">
                        <div class="flex items-center mb-3">
                            <div class="w-20 h-20 mr-3 inline-flex items-center justify-center rounded-full bg-indigo-500 text-white flex-shrink-0">
                                <img src="{{ asset('dist/images/home/car-taxi.png') }}"  />
                            </div>
                            <h2 class="text-gray-900 text-lg title-font font-medium">Settles &amp; Taxis</h2>
                        </div>
                        <div class="flex-grow">
                            <p class="leading-relaxed text-base">
                                Are you a badge holder from your council? Looking to hire a settle car temporarily or as long as its needed? Our fleet owners have the best 
                                hybrid/electric cars (complaint to CAZ)
                            </p>
                            <a class="mt-3 text-indigo-500 inline-flex items-center">Learn More
                            <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-4 h-4 ml-2" viewBox="0 0 24 24">
                                <path d="M5 12h14M12 5l7 7-7 7"></path>
                            </svg>
                            </a>
                        </div>
                        </div>
                    </div>
                    <div class="p-4 md:w-1/3">
                        <div class="flex rounded-lg h-full bg-gray-100 p-8 flex-col">
                        <div class="flex items-center mb-3">
                            <div class="w-20 h-20 mr-3 inline-flex items-center justify-center rounded-full bg-indigo-500 text-white flex-shrink-0">
                                <img src="{{ asset('dist/images/home/semi-truck.png') }}"  />
                            </div>
                            <h2 class="text-gray-900 text-lg title-font font-medium">MGVs/HGVs</h2>
                        </div>
                        <div class="flex-grow">
                            <p class="leading-relaxed text-base">
                                Looking to hire a Medium Goods or Heavy Goods Vehicle on or above 7T? Search over a hundred fleet 
                                operating MGV&apos;s and HGV&apos;s
                            </p>
                            <a class="mt-3 text-indigo-500 inline-flex items-center">Learn More
                            <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-4 h-4 ml-2" viewBox="0 0 24 24">
                                <path d="M5 12h14M12 5l7 7-7 7"></path>
                            </svg>
                            </a>
                        </div>
                        </div>
                    </div>
                    </div>
                </div>
            </section>
            <!-- -->
            <section class="text-gray-700 body-font border-t border-gray-200">
                <div class="container px-5 py-12 mx-auto flex flex-wrap">
                    <div class="lg:w-1/2 w-full mb-10 lg:mb-0 rounded-lg overflow-hidden">
                    <img class="object-cover object-center rounded" alt="hero" src="{{ asset('dist/images/connected-world.svg') }}">
                    </div>
                    <div class="flex flex-col flex-wrap lg:py-6 -mb-10 lg:w-1/2 lg:pl-12 lg:text-left text-center">
                    <div class="flex flex-col mb-10 lg:items-start items-center">
                        <div class="w-12 h-12 inline-flex items-center justify-center rounded-full bg-indigo-100 text-indigo-500 mb-5">
                        <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-6 h-6" viewBox="0 0 24 24">
                            <path d="M22 12h-4l-3 9L9 3l-3 9H2"></path>
                        </svg>
                        </div> 
                        <div class="flex-grow">
                        <h2 class="text-gray-900 text-lg title-font font-medium mb-3">Travel Anywhere, Hire Anywhere</h2>
                        <p class="leading-relaxed text-base">FGBS Fleet&trade; operates across all major continents and visitng places. 
                            Our partners and fleet owners have bases in every major city. Its easier to find a ride just near to you. Over 8,568 fleets operating about 20K cars. Some of our fleet 
                            operators offers chauffers and tourist guides as perks.
                        </p>
                        <a class="mt-3 text-indigo-500 inline-flex items-center">Learn More
                            <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-4 h-4 ml-2" viewBox="0 0 24 24">
                            <path d="M5 12h14M12 5l7 7-7 7"></path>
                            </svg>
                        </a>
                        </div>
                    </div>
                    
                    </div>
                </div>
            </section>
            <section class="text-gray-700 body-font border-t border-gray-200">
                <div class="container px-5 py-12 mx-auto">
                    <div class="flex flex-wrap w-full mb-20 flex-col items-center text-center">
                    <h1 class="sm:text-3xl text-2xl font-medium title-font mb-2 text-gray-900 dark:text-theme-19">Fleet Management Tools</h1>
                    <p class="lg:w-1/2 w-full leading-relaxed text-base">Whatever cardigan tote bag tumblr hexagon brooklyn asymmetrical gentrify, subway tile poke farm-to-table.</p>
                    </div>
                    <div class="flex flex-wrap -m-4">
                    <div class="xl:w-1/3 md:w-1/2 p-4">
                        <div class="border border-gray-300 p-6 rounded-lg">
                        <div class="w-10 h-10 inline-flex items-center justify-center rounded-full bg-indigo-100 text-indigo-500 mb-4">
                            <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-6 h-6" viewBox="0 0 24 24">
                            <path d="M22 12h-4l-3 9L9 3l-3 9H2"></path>
                            </svg>
                        </div>
                        <h2 class="text-lg text-gray-900 font-medium title-font mb-2 dark:text-theme-19">Leasing Insights</h2>
                        <p class="leading-relaxed text-base">Fingerstache flexitarian street art 8-bit waist co, subway tile poke farm.</p>
                        </div>
                    </div>
                    <div class="xl:w-1/3 md:w-1/2 p-4">
                        <div class="border border-gray-300 p-6 rounded-lg">
                        <div class="w-10 h-10 inline-flex items-center justify-center rounded-full bg-indigo-100 text-indigo-500 mb-4">
                            <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-6 h-6" viewBox="0 0 24 24">
                            <circle cx="6" cy="6" r="3"></circle>
                            <circle cx="6" cy="18" r="3"></circle>
                            <path d="M20 4L8.12 15.88M14.47 14.48L20 20M8.12 8.12L12 12"></path>
                            </svg>
                        </div>
                        <h2 class="text-lg text-gray-900 font-medium title-font mb-2 dark:text-theme-19">Driver Training</h2>
                        <p class="leading-relaxed text-base">Fingerstache flexitarian street art 8-bit waist co, subway tile poke farm.</p>
                        </div>
                    </div>
                    <div class="xl:w-1/3 md:w-1/2 p-4">
                        <div class="border border-gray-300 p-6 rounded-lg">
                        <div class="w-10 h-10 inline-flex items-center justify-center rounded-full bg-indigo-100 text-indigo-500 mb-4">
                            <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-6 h-6" viewBox="0 0 24 24">
                            <path d="M20 21v-2a4 4 0 00-4-4H8a4 4 0 00-4 4v2"></path>
                            <circle cx="12" cy="7" r="4"></circle>
                            </svg>
                        </div>
                        <h2 class="text-lg text-gray-900 font-medium title-font mb-2 dark:text-theme-19">Service, Maintenance &amp; Repair</h2>
                        <p class="leading-relaxed text-base">Fingerstache flexitarian street art 8-bit waist co, subway tile poke farm.</p>
                        </div>
                    </div>
                    <div class="xl:w-1/3 md:w-1/2 p-4">
                        <div class="border border-gray-300 p-6 rounded-lg">
                        <div class="w-10 h-10 inline-flex items-center justify-center rounded-full bg-indigo-100 text-indigo-500 mb-4">
                            <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-6 h-6" viewBox="0 0 24 24">
                            <path d="M4 15s1-1 4-1 5 2 8 2 4-1 4-1V3s-1 1-4 1-5-2-8-2-4 1-4 1zM4 22v-7"></path>
                            </svg>
                        </div>
                        <h2 class="text-lg text-gray-900 font-medium title-font mb-2 dark:text-theme-19">Telematics &amp; Vehicle Tracking</h2>
                        <p class="leading-relaxed text-base">Fingerstache flexitarian street art 8-bit waist co, subway tile poke farm.</p>
                        </div>
                    </div>
                    <div class="xl:w-1/3 md:w-1/2 p-4">
                        <div class="border border-gray-300 p-6 rounded-lg">
                        <div class="w-10 h-10 inline-flex items-center justify-center rounded-full bg-indigo-100 text-indigo-500 mb-4">
                            <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-6 h-6" viewBox="0 0 24 24">
                            <path d="M21 12.79A9 9 0 1111.21 3 7 7 0 0021 12.79z"></path>
                            </svg>
                        </div>
                        <h2 class="text-lg text-gray-900 font-medium title-font mb-2 dark:text-theme-19" >Safety &amp; Risk Management</h2>
                        <p class="leading-relaxed text-base">Fingerstache flexitarian street art 8-bit waist co, subway tile poke farm.</p>
                        </div>
                    </div>
                    <div class="xl:w-1/3 md:w-1/2 p-4">
                        <div class="border border-gray-300 p-6 rounded-lg">
                        <div class="w-10 h-10 inline-flex items-center justify-center rounded-full bg-indigo-100 text-indigo-500 mb-4">
                            <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-6 h-6" viewBox="0 0 24 24">
                            <path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"></path>
                            </svg>
                        </div>
                        <h2 class="text-lg text-gray-900 font-medium title-font mb-2 dark:text-theme-19">Incident Management</h2>
                        <p class="leading-relaxed text-base">Fingerstache flexitarian street art 8-bit waist co, subway tile poke farm.</p>
                        </div>
                    </div>
                    <div class="xl:w-1/3 md:w-1/2 p-4">
                        <div class="border border-gray-300 p-6 rounded-lg">
                        <div class="w-10 h-10 inline-flex items-center justify-center rounded-full bg-indigo-100 text-indigo-500 mb-4">
                            <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-6 h-6" viewBox="0 0 24 24">
                            <path d="M4 15s1-1 4-1 5 2 8 2 4-1 4-1V3s-1 1-4 1-5-2-8-2-4 1-4 1zM4 22v-7"></path>
                            </svg>
                        </div>
                        <h2 class="text-lg text-gray-900 font-medium title-font mb-2 dark:text-theme-19">Fleet Funding</h2>
                        <p class="leading-relaxed text-base">Fingerstache flexitarian street art 8-bit waist co, subway tile poke farm.</p>
                        </div>
                    </div>
                    <div class="xl:w-1/3 md:w-1/2 p-4">
                        <div class="border border-gray-300 p-6 rounded-lg">
                        <div class="w-10 h-10 inline-flex items-center justify-center rounded-full bg-indigo-100 text-indigo-500 mb-4">
                            <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-6 h-6" viewBox="0 0 24 24">
                            <path d="M21 12.79A9 9 0 1111.21 3 7 7 0 0021 12.79z"></path>
                            </svg>
                        </div>
                        <h2 class="text-lg text-gray-900 font-medium title-font mb-2 dark:text-theme-19" >Fleet Insurance</h2>
                        <p class="leading-relaxed text-base">Fingerstache flexitarian street art 8-bit waist co, subway tile poke farm.</p>
                        </div>
                    </div>
                    <div class="xl:w-1/3 md:w-1/2 p-4">
                        <div class="border border-gray-300 p-6 rounded-lg">
                        <div class="w-10 h-10 inline-flex items-center justify-center rounded-full bg-indigo-100 text-indigo-500 mb-4">
                            <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-6 h-6" viewBox="0 0 24 24">
                            <path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"></path>
                            </svg>
                        </div>
                        <h2 class="text-lg text-gray-900 font-medium title-font mb-2 dark:text-theme-19">Fleet Benchmarking</h2>
                        <p class="leading-relaxed text-base">Fingerstache flexitarian street art 8-bit waist co, subway tile poke farm.</p>
                        </div>
                    </div>
                    </div>
                </div>
            </section> 
        </div>
         

         
    </div>
</div>
        <!-- BEGIN: DiveIn block -->
        <div class="bg-gray-50 mt-6 bg-theme-24 dark:bg-dark-1">
            <div class="max-w-7xl mx-auto py-12 px-4 sm:px-6 lg:py-16 lg:px-8 lg:flex lg:items-center lg:justify-between dark:bg-dark-2">
                <h2 class="text-3xl font-extrabold tracking-tight text-gray-900 sm:text-4xl">
                    <span class="block dark:text-theme-12 " >Ready to dive in?</span>
                    <span class="block text-indigo-600 text-theme-12">Start your free trial today.</span>
                </h2>
                
                <div class="mt-8 flex lg:mt-0 lg:flex-shrink-0">
                    <div class="inline-flex rounded-md shadow">
                        <a id="notification-test" href="#" class="inline-flex items-center justify-center px-5 py-3 border border-transparent text-base font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700">
                        Get started
                        </a>
                    </div>
                    <div class="ml-3 inline-flex rounded-md shadow">
                        <a href="#" class="inline-flex items-center justify-center px-5 py-3 border border-transparent text-base font-medium rounded-md text-indigo-600 bg-white hover:bg-indigo-50">
                        Learn more
                        </a>
                    </div>
                </div>
            </div>
            <div class="container px-6 py-16 mx-auto text-center">
                <div class="max-w-lg mx-auto">
                    <h1 class="text-3xl font-bold text-theme-18 dark:text-white md:text-4xl">Automated Fleet Management with powerful tools to ensure productivity on the fly! </h1>
                    @if(! Auth::check())
                    
                        <p class="mt-6 text-gray-500 dark:text-gray-300">
                            Signup to receive periodical email about fleet management tools and our exclusive offers &amp; promotions to keep yourself updated.
                        </p>

                        <div class="ns-form w-full max-w-sm mx-auto mt-6 bg-transparent border rounded-md dark:border-gray-700 focus-within:border-blue-400 focus-within:ring focus-within:ring-blue-300 dark:focus-within:border-blue-300 focus-within:ring-opacity-40">
                            <form class=" flex flex-col md:flex-row" action="#">
                                <input type="email" name="ns_email" id="ns_email" placeholder="me@example.com" class="flex-1 h-10 w-full px-4 py-2 m-1 text-white text-xl placeholder-gray-400 bg-transparent border-none appearance-none dark:text-gray-200 focus:outline-none focus:placeholder-transparent focus:ring-0" /> 
                                <button type="button" id="ns_submit" class="h-10 w-40 px-4 py-2 m-1 text-white transition-colors duration-200 transform bg-theme-20 rounded-md hover:bg-blue-200 focus:outline-none focus:bg-blue-400">
                                    Subscribe
                                </button>
                            </form>
                        </div>
                   
                    @endif
                </div>
        
                <div class="max-w-screen-xl mx-auto mt-20">
                    <div class="grid grid-cols-2 gap-8 md:grid-cols-6 lg:grid-cols-5">
                        <div class="flex items-center justify-center col-span-1 md:col-span-2 lg:col-span-1">
                            <svg class="h-12 text-gray-500 fill-current dark:text-gray-300" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 266 100"><path fill="none" d="M0 0h266v100H0z"></path><path d="M140.021 49.597c-1.784 0-3.07.585-4.374 1.181v13.486c1.249.119 1.965.119 3.15.119 4.282 0 4.869-1.961 4.869-4.699v-6.441c0-2.022-.671-3.646-3.645-3.646zm-28.438-.736c-2.971 0-3.649 1.631-3.649 3.651v1.135h7.294v-1.135c0-2.02-.678-3.651-3.645-3.651zm-55.09 14.037c0 1.598.754 2.428 2.418 2.428 1.785 0 2.842-.582 4.145-1.18v-3.199h-3.903c-1.848 0-2.66.344-2.66 1.951zm111.191-13.301c-2.976 0-4.007 1.624-4.007 3.646v7.379c0 2.027 1.031 3.656 4.007 3.656 2.968 0 4.007-1.629 4.007-3.656v-7.379c-.001-2.022-1.04-3.646-4.007-3.646zM41.909 71.172h-8.748V49.998H28.79v-7.296h4.372V38.32c0-5.953 2.467-9.492 9.479-9.492h5.838v7.298H44.83c-2.73 0-2.91 1.02-2.91 2.923l-.011 3.652h6.61l-.773 7.296h-5.837v21.175zm29.897.055h-7.291l-.315-1.844c-3.329 1.844-6.3 2.143-8.26 2.143-5.347 0-8.193-3.572-8.193-8.512 0-5.828 3.321-7.908 9.262-7.908h6.047v-1.26c0-2.975-.341-3.848-4.916-3.848h-7.48l.731-7.296h8.176c10.038 0 12.239 3.171 12.239 11.203v17.322zm24.793-20.694c-4.537-.778-5.84-.949-8.023-.949-3.921 0-5.106.865-5.106 4.195v6.299c0 3.33 1.185 4.199 5.106 4.199 2.183 0 3.486-.174 8.023-.955v7.117c-3.974.891-6.563 1.125-8.751 1.125-9.392 0-13.125-4.939-13.125-12.074v-5.111c0-7.141 3.733-12.089 13.125-12.089 2.188 0 4.777.235 8.751 1.13v7.113zm27.376 8.957h-16.042v.588c0 3.33 1.186 4.199 5.106 4.199 3.524 0 5.675-.174 10.204-.955v7.117c-4.368.891-6.644 1.125-10.929 1.125-9.393 0-13.128-4.939-13.128-12.074v-5.844c0-6.243 2.771-11.356 12.396-11.356s12.393 5.054 12.393 11.356v5.844zm28.437.135c0 6.896-1.971 11.926-13.911 11.926-4.312 0-6.841-.379-11.6-1.111V31.02l8.745-1.459V43.35c1.89-.702 4.336-1.059 6.562-1.059 8.746 0 10.203 3.921 10.203 10.222v7.112zm28.033.15c0 5.949-2.456 11.719-12.732 11.719-10.281 0-12.783-5.77-12.783-11.719v-5.744c0-5.952 2.502-11.723 12.783-11.723 10.276 0 12.732 5.771 12.732 11.723v5.744zm28.014 0c0 5.949-2.459 11.719-12.733 11.719-10.281 0-12.783-5.77-12.783-11.719v-5.744c0-5.952 2.502-11.723 12.783-11.723 10.274 0 12.733 5.771 12.733 11.723v5.744zm28.749 11.397h-9.479l-8.017-13.383v13.383h-8.748V31.019l8.748-1.459v25.849l8.017-12.707h9.479l-8.752 13.867 8.752 14.603zm-41.512-21.575c-2.971 0-4.002 1.624-4.002 3.646v7.379c0 2.027 1.031 3.656 4.002 3.656 2.967 0 4.017-1.629 4.017-3.656v-7.379c0-2.022-1.05-3.646-4.017-3.646zm46.505 16.581c1.473 0 2.646 1.201 2.646 2.701 0 1.523-1.174 2.711-2.657 2.711-1.476 0-2.673-1.188-2.673-2.711 0-1.5 1.197-2.701 2.673-2.701h.011zm-.011.42c-1.187 0-2.158 1.021-2.158 2.281 0 1.283.972 2.291 2.169 2.291 1.198.012 2.155-1.008 2.155-2.279s-.957-2.293-2.155-2.293h-.011zm-.503 3.853h-.48v-3.014c.252-.035.492-.07.852-.07.456 0 .754.096.937.227.177.133.272.336.272.623 0 .398-.262.637-.585.734v.023c.263.049.442.287.503.73.07.469.143.648.19.746h-.503c-.071-.098-.144-.373-.204-.77-.07-.383-.264-.527-.648-.527h-.333v1.298zm0-1.668h.348c.394 0 .729-.145.729-.518 0-.264-.19-.527-.729-.527-.157 0-.266.012-.348.023v1.022z"></path></svg>
                        </div>

                        <div class="flex items-center justify-center col-span-1 md:col-span-2 lg:col-span-1">
                            <svg class="h-10 text-gray-500 fill-current dark:text-gray-300" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 316 60"><g transform="translate(9.259 4.552) scale(.4941)"><path d="M52.1 102.1V82.5c20.8 0 36.8-20.6 28.9-42.4-3-8.1-9.4-14.6-17.5-17.5-21.8-7.9-42.4 8.1-42.4 28.9H1.5c0-33.1 32-58.9 66.7-48.1 15.2 4.7 27.2 16.8 31.9 31.9 10.8 34.8-14.9 66.8-48 66.8z"></path><path d="M32.6 63h19.5v19.5H32.6zm-15 34.5v-15h15v15h-15zM5 70h12.6v12.5H5z" fill-rule="evenodd"></path><path d="M181.5 30.2c-5.8-4-13-6.1-21.4-6.1h-18.3v58.1h18.3c8.4 0 15.6-2.1 21.4-6.4 3.2-2.2 5.7-5.4 7.4-9.3s2.6-8.5 2.6-13.7c0-5.1-.9-9.7-2.6-13.6-1.7-3.8-4.2-6.9-7.4-9zm-29 3.8h5.8c6.4 0 11.7 1.3 15.7 3.7 4.4 2.7 6.7 7.8 6.7 15.1 0 7.6-2.3 12.9-6.7 15.8-3.8 2.5-9.1 3.8-15.6 3.8h-5.8V34z"></path><use xlink:href="#A"></use><path d="M199 41.3h10.3v41H199zm47.8 3.4c-3.1-2.8-6.6-4.4-10.3-4.4-5.7 0-10.4 2-14.1 5.8s-5.5 8.8-5.5 14.7c0 5.8 1.8 10.7 5.5 14.7 3.7 3.8 8.4 5.8 14.1 5.8 4 0 7.4-1.1 10.2-3.3v1c0 3.4-.9 6-2.7 7.9-1.8 1.8-4.3 2.7-7.4 2.7-4.8 0-7.7-1.9-11.4-6.8l-7 6.7.2.3c1.5 2.1 3.8 4.2 6.9 6.2s6.9 3 11.5 3c6.1 0 11.1-1.9 14.7-5.6 3.7-3.7 5.5-8.7 5.5-14.9V41.3h-10.1v3.4zm-2.7 24.2c-1.8 2-4.1 3-7.1 3s-5.3-1-7-3c-1.8-2-2.7-4.7-2.7-8s.9-6.1 2.7-8.1 4.1-3.1 7-3.1c3 0 5.3 1 7.1 3.1 1.8 2 2.7 4.8 2.7 8.1s-1 6-2.7 8zm21.6-27.6H276v41h-10.3z"></path><use xlink:href="#A" x="66.7"></use><path d="M298.6 30.3h-10.1v11.1h-5.9v9.4h5.9v17c0 5.3 1.1 9.1 3.2 11.3s5.8 3.3 11.1 3.3c1.7 0 3.4-.1 5-.2h.5v-9.4l-3.5.2c-2.5 0-4.1-.4-4.9-1.3s-1.2-2.7-1.2-5.4V50.7h9.6v-9.4h-9.6v-11zm57.9-6.2h10.3v58.1h-10.3zm114.4 43.5c-1.8 2.1-3.7 3.9-5.2 4.8-1.4.9-3.2 1.4-5.3 1.4-3 0-5.5-1.1-7.5-3.4s-3-5.2-3-8.7 1-6.4 2.9-8.6c2-2.3 4.4-3.4 7.4-3.4 3.3 0 6.8 2.1 9.8 5.6l6.8-6.5c-4.4-5.8-10.1-8.5-16.9-8.5-5.7 0-10.6 2.1-14.6 6.1s-6 9.2-6 15.3 2 11.2 6 15.3 8.9 6.1 14.6 6.1c7.5 0 13.5-3.2 17.5-9.1l-6.5-6.4zM513.2 47c-1.5-2-3.5-3.7-5.9-4.9-2.5-1.2-5.3-1.8-8.5-1.8-5.8 0-10.5 2.1-14 6.3-3.4 4.2-5.2 9.3-5.2 15.4 0 6.2 1.9 11.3 5.7 15.3 3.7 3.9 8.8 5.9 14.9 5.9 6.9 0 12.7-2.8 16.9-8.4l.2-.3-6.7-6.5c-.6.8-1.5 1.6-2.3 2.4-1 1-2 1.7-3 2.2-1.5.8-3.3 1.1-5.2 1.1-2.9 0-5.2-.8-7-2.5-1.7-1.5-2.7-3.6-2.9-6.2h27.3l.1-3.8c0-2.7-.4-5.2-1.1-7.6-.7-2.3-1.8-4.5-3.3-6.6zm-22.5 9.7c.5-2 1.4-3.6 2.7-4.9 1.4-1.4 3.2-2.1 5.4-2.1 2.5 0 4.4.7 5.7 2.1 1.2 1.3 1.9 2.9 2.1 4.8h-15.9zm62.1-12.3c-3.1-2.7-7.4-4-12.8-4-3.4 0-6.6.8-9.5 2.2-2.7 1.4-5.3 3.6-7 6.6l.1.1 6.6 6.3c2.7-4.3 5.7-5.8 9.7-5.8 2.2 0 3.9.6 5.3 1.7s2 2.6 2 4.4v2c-2.6-.8-5.1-1.2-7.6-1.2-5.1 0-9.3 1.2-12.4 3.6s-4.7 5.9-4.7 10.2c0 3.8 1.3 7 4 9.3 2.7 2.2 6 3.4 9.9 3.4s7.6-1.6 10.9-4.3v3.4h10.1V55.9c.2-4.9-1.4-8.8-4.6-11.5zm-18.3 22.2c1.2-.8 2.8-1.2 4.9-1.2 2.5 0 5.1.5 7.8 1.5v4C545 73 542 74 538.3 74c-1.8 0-3.2-.4-4.1-1.2s-1.4-1.7-1.4-3 .6-2.4 1.7-3.2zm62.7-21.4c-2.9-3.2-6.9-4.8-12-4.8-4.1 0-7.4 1.2-9.9 3.5v-2.5h-10.1v41h10.3V59.7c0-3.1.7-5.6 2.2-7.3 1.5-1.8 3.4-2.6 6.1-2.6 2.3 0 4.1.8 5.4 2.3 1.3 1.6 2 3.7 2 6.4v23.7h10.3V58.5c0-5.6-1.4-10.1-4.3-13.3zm-253.6-.8c-3.1-2.7-7.4-4-12.8-4-3.4 0-6.6.8-9.5 2.2-2.7 1.4-5.3 3.6-7 6.6l.1.1 6.6 6.3c2.7-4.3 5.7-5.8 9.7-5.8 2.2 0 3.9.6 5.3 1.7s2 2.6 2 4.4v2c-2.6-.8-5.1-1.2-7.6-1.2-5.1 0-9.3 1.2-12.4 3.6s-4.7 5.9-4.7 10.2c0 3.8 1.3 7 4 9.3 2.7 2.2 6 3.4 9.9 3.4s7.6-1.6 10.9-4.3v3.4h10.1V55.9c.1-4.9-1.5-8.8-4.6-11.5zm-18.3 22.2c1.2-.8 2.8-1.2 4.9-1.2 2.5 0 5.1.5 7.8 1.5v4c-2.2 2.1-5.2 3.1-8.9 3.1-1.8 0-3.2-.4-4.1-1.2s-1.4-1.7-1.4-3 .5-2.4 1.7-3.2zm78.9 16.5c-16.5 0-30-13.4-30-30s13.4-30 30-30c16.5 0 30 13.4 30 30s-13.5 30-30 30zm0-49.3c-10.7 0-19.4 8.7-19.4 19.4s8.7 19.4 19.4 19.4 19.4-8.7 19.4-19.4-8.7-19.4-19.4-19.4z"></path></g><defs><path d="M204.3 23.4c-1.8 0-3.3.6-4.5 1.8s-1.9 2.7-1.9 4.4c0 1.8.6 3.3 1.9 4.5 1.2 1.2 2.7 1.9 4.5 1.9s3.3-.6 4.5-1.9c1.2-1.2 1.9-2.8 1.9-4.5 0-1.8-.6-3.3-1.9-4.4-1.2-1.2-2.8-1.8-4.5-1.8z"></path></defs></svg>
                        </div>

                        <div class="flex items-center justify-center col-span-1 md:col-span-2 lg:col-span-1">
                            <svg class="h-8 mt-2 text-gray-500 fill-current dark:text-gray-300" viewBox="0 0 398 120" xmlns="http://www.w3.org/2000/svg"><g fill-rule="nonzero"><path d="M247.292 94.106C224.124 111.016 190.526 120 161.608 120c-40.544 0-77.046-14.822-104.673-39.476-2.164-1.936-.235-4.583 2.369-3.082 29.806 17.15 66.66 27.475 104.731 27.475 25.677 0 53.906-5.271 79.884-16.163 3.923-1.646 7.21 2.545 3.373 5.352"></path><path d="M256.533 82.534c-2.965-3.771-19.551-1.787-27.003-.897-2.254.277-2.605-1.692-.57-3.122 13.233-9.265 34.922-6.587 37.447-3.487 2.54 3.13-.666 24.802-13.073 35.147-1.91 1.59-3.718.744-2.877-1.357 2.782-6.952 9.04-22.505 6.076-26.284zM230.05 13.058V4.063c.015-1.378 1.04-2.29 2.291-2.283l40.493-.007c1.295 0 2.335.94 2.335 2.268v7.726c-.015 1.29-1.113 2.983-3.053 5.668l-20.97 29.843c7.78-.182 16.022.985 23.093 4.939 1.596.897 2.027 2.217 2.152 3.516v9.607c0 1.32-1.457 2.86-2.987 2.057-12.458-6.507-29-7.214-42.776.08-1.405.745-2.884-.765-2.884-2.086v-9.133c0-1.459.03-3.961 1.508-6.186l24.302-34.738h-21.162c-1.295 0-2.327-.927-2.342-2.276zM82.354 69.294H70.042c-1.171-.08-2.108-.956-2.203-2.072l.014-63.006c0-1.262 1.062-2.268 2.38-2.268L81.71 1.94c1.2.059 2.159.963 2.232 2.116v8.221h.234C87.163 4.326 92.8.613 100.39.613c7.708 0 12.539 3.713 15.98 11.664C119.361 4.326 126.14.613 133.393.613c5.175 0 10.804 2.123 14.251 6.893 3.916 5.311 3.111 12.993 3.111 19.755l-.015 39.764c0 1.255-1.061 2.262-2.379 2.262h-12.304c-1.23-.08-2.203-1.05-2.203-2.262l-.007-33.41c0-2.648.234-9.28-.344-11.796-.923-4.246-3.675-5.435-7.24-5.435-2.986 0-6.09 1.985-7.356 5.165-1.266 3.188-1.15 8.484-1.15 12.066v33.403c0 1.255-1.06 2.262-2.378 2.262h-12.297c-1.237-.08-2.21-1.051-2.21-2.262l-.015-33.41c0-7.025 1.142-17.362-7.59-17.362-8.858 0-8.506 10.074-8.506 17.362l-.007 33.403c-.022 1.276-1.084 2.283-2.401 2.283zm227.788-55.82c-9.084 0-9.662 12.328-9.662 20.017s-.117 24.131 9.545 24.131c9.545 0 10.006-13.262 10.006-21.345 0-5.303-.234-11.664-1.845-16.705-1.383-4.377-4.143-6.098-8.044-6.098zM310.025.613c18.284 0 28.173 15.647 28.173 35.533 0 19.222-10.92 34.468-28.173 34.468-17.933 0-27.712-15.647-27.712-35.132C282.305 15.86 292.2.612 310.025.612zm51.882 68.681h-12.275c-1.23-.08-2.211-1.05-2.211-2.261l-.015-63.028c.103-1.16 1.12-2.057 2.365-2.057l11.426-.008c1.076.059 1.961.788 2.188 1.766v9.636h.234c3.448-8.622 8.279-12.73 16.785-12.73 5.519 0 10.92 1.992 14.375 7.427C398 13.072 398 21.556 398 27.662v39.64c-.14 1.117-1.142 1.985-2.364 1.985h-12.349c-1.141-.073-2.064-.912-2.188-1.984V33.097c0-6.894.805-16.968-7.708-16.968-2.993 0-5.753 1.984-7.13 5.033-1.72 3.845-1.953 7.69-1.953 11.935v33.928c-.03 1.262-1.091 2.27-2.401 2.27zm-151.715-.16c-.813.73-1.991.78-2.913.284-4.092-3.385-4.824-4.953-7.064-8.177-6.756 6.864-11.543 8.921-20.305 8.921-10.372 0-18.438-6.376-18.438-19.134 0-9.965 5.424-16.742 13.139-20.061 6.683-2.925 16.023-3.458 23.167-4.253v-1.598c0-2.925.234-6.375-1.5-8.9-1.501-2.26-4.378-3.195-6.918-3.195-4.692 0-8.871 2.4-9.904 7.375-.212 1.11-1.024 2.204-2.137 2.262l-11.938-1.291c-1.01-.234-2.13-1.029-1.838-2.568C166.288 4.362 179.37 0 191.087 0c5.995 0 13.827 1.59 18.556 6.113 5.995 5.58 5.416 13.021 5.416 21.126v19.127c0 5.756 2.401 8.28 4.648 11.373.79 1.116.967 2.444-.036 3.26-2.518 2.102-6.983 5.968-9.443 8.15l-.036-.015zm-12.414-29.931v-2.656c-8.908 0-18.322 1.897-18.322 12.35 0 5.319 2.767 8.908 7.488 8.908 3.455 0 6.566-2.123 8.528-5.58 2.423-4.254 2.306-8.237 2.306-13.022zM48.72 69.133c-.813.73-1.991.781-2.913.285-4.092-3.385-4.824-4.953-7.064-8.177-6.763 6.864-11.55 8.921-20.305 8.921C8.06 70.162 0 63.786 0 51.028c0-9.965 5.417-16.742 13.139-20.061 6.683-2.925 16.015-3.458 23.16-4.253v-1.598c0-2.925.233-6.375-1.501-8.9-1.5-2.26-4.377-3.195-6.91-3.195-4.7 0-8.879 2.4-9.904 7.375-.212 1.11-1.024 2.204-2.137 2.262L3.91 21.367c-1.01-.234-2.13-1.029-1.845-2.568C4.81 4.362 17.89.007 29.615.007c5.995 0 13.827 1.59 18.556 6.113 5.995 5.581 5.416 13.022 5.416 21.126v19.128c0 5.755 2.401 8.28 4.648 11.372.79 1.116.967 2.444-.036 3.261-2.518 2.101-6.99 5.967-9.45 8.148l-.03-.021zm-12.422-29.93v-2.656c-8.908 0-18.32 1.897-18.32 12.35 0 5.319 2.766 8.908 7.487 8.908 3.462 0 6.573-2.123 8.528-5.58 2.422-4.254 2.305-8.237 2.305-13.022z"></path></g></svg>
                        </div>

                        <div class="flex items-center justify-center col-span-1 md:col-span-3 lg:col-span-1">
                            <svg class="h-5 mt-1 text-gray-500 fill-current dark:text-gray-300" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 278.7 36.3"><g><path class="st0" d="M238.1 14.4v21.9h7V21.7h25.6v14.6h7V14.4h-39.6m6.2-7.1h27c3.8-.7 6.5-4.1 7.3-7.3H237c.8 3.2 3.6 6.5 7.3 7.3m-27.5 29c3.5-1.5 5.4-4.1 6.2-7.1h-31.5V.1h-7.1v36.2h32.4M131.9 7.2h25c3.8-1.1 6.9-4 7.7-7.1H125v21.4h32.4V29H132c-4 1.1-7.4 3.8-9.1 7.3h41.5V14.4H132l-.1-7.2m-61.6.1h27c3.8-.7 6.6-4.1 7.3-7.3H62.9c.8 3.2 3.6 6.5 7.4 7.3m0 14.3h27c3.8-.7 6.6-4.1 7.3-7.3H62.9c.8 3.2 3.6 6.5 7.4 7.3m0 14.7h27c3.8-.7 6.6-4.1 7.3-7.3H62.9c.8 3.2 3.6 6.6 7.4 7.3M0 .1c.8 3.2 3.6 6.4 7.3 7.2h11.4l.6.2v28.7h7.1V7.5l.6-.2h11.4c3.8-1 6.5-4 7.3-7.2V0L0 .1"></path></g></svg>
                        </div>
                        
                        <div class="flex items-center justify-center col-span-2 md:col-span-3 lg:col-span-1">
                            <svg class="h-8 text-gray-500 fill-current dark:text-gray-300" viewBox="0 0 2270 546" xmlns="http://www.w3.org/2000/svg"><g fill-rule="evenodd"><path d="M888.413 394.397l-31.127 144.717h-71.593L903.977 14.642h84.81l111.28 524.472h-72.371l-30.35-144.717H888.413zm100.373-58.364l-24.124-125.3c-7.003-35.797-14.007-82.463-19.441-119.828h-3.126c-5.434 38.13-13.242 86.365-20.22 119.827l-24.902 125.301h91.813zM1373.34.648v441.205c0 28.806 1.556 70.828 3.1 97.274h-63.02l-4.67-45.9h-2.334c-12.451 26.445-41.244 52.138-79.362 52.138-70.037 0-112.837-76.275-112.837-193.755 0-133.848 56.794-196.881 116.728-196.881 30.336 0 54.46 14.02 67.689 42.8h1.556V.648h73.15zm-73.163 304.258c0-6.991 0-15.551-.778-23.359-3.89-34.227-23.345-63.798-49.79-63.798-45.927 0-61.477 63.798-61.477 133.848 0 77.818 20.232 132.278 59.142 132.278 16.342 0 38.118-8.56 50.569-53.681 1.556-6.226 2.334-15.577 2.334-24.111V304.906zm247.399 240.446c-75.471 0-129.957-64.59-129.957-194.52 0-137.752 64.576-196.116 133.835-196.116 74.705 0 128.387 66.924 128.387 194.546 0 150.19-73.927 196.09-131.5 196.09h-.765zm2.321-57.573c45.122 0 55.251-80.153 55.251-137.726 0-56.82-10.116-137.739-56.794-137.739-48.26 0-57.586 80.919-57.586 137.74 0 63.02 10.895 137.725 58.364 137.725h.765zM1723.938.648h73.137V203.74h1.556c19.455-34.227 45.913-49.025 79.375-49.025 64.577 0 105.055 73.15 105.055 189.099 0 135.391-55.25 201.537-117.506 201.537-37.353 0-58.364-20.246-74.719-53.708h-3.086l-3.904 47.47h-63.02c1.556-25.668 3.112-68.468 3.112-97.274V.648zm73.137 404.618c0 8.586.778 17.146 3.113 23.358 11.66 45.926 34.24 55.251 49.012 55.251 43.579 0 59.92-57.572 59.92-135.391 0-72.371-17.106-130.735-60.698-130.735-24.124 0-43.578 28.793-49.025 56.03-1.557 7.781-2.335 17.91-2.335 25.68v105.807h.013zm293.92-40.453c.779 97.273 42.788 121.384 87.145 121.384 26.458 0 49.025-6.213 65.367-14.007l10.895 52.916c-22.568 11.673-56.808 17.912-90.27 17.912-94.925 0-144.73-71.594-144.73-188.321 0-123.732 56.795-199.994 135.392-199.994s115.172 75.484 115.172 170.435c0 18.664-.792 30.35-1.557 40.453l-177.413-.778zm109.712-52.126c.778-66.924-22.567-102.707-51.347-102.707-38.144 0-55.264 55.251-57.586 102.707h108.933z" fill-rule="nonzero"></path><path d="M373.462 16.043h218.501v523.07L373.462 16.044zm-153.926 0H.88v523.07l218.657-523.07zm76.976 192.77l139.218 330.3H344.5l-41.633-105.197H200.964l95.548-225.103z"></path></g></svg>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- END: DiveIn block -->
     

       
     
        <!-- BEGIN: Ads 2 -->
        <div class="px-20 mt-2 my-10">
            <div class="grid grid-cols-2 gap-2 mb-10">
                <div class="ads-box box p-8 relative overflow-hidden intro-y">
                    <div class="ads-box__title w-full sm:w-52 text-theme-24 dark:text-white text-xl -mt-3">Got a car to spare? <span class="font-medium">FREE</span> Listing!</div>
                    <div class="w-full sm:w-60 leading-relaxed text-gray-600 mt-2">Make up to £750 a month by making your vehicle available to hire!</div>
                    <div class="w-48 relative mt-6 cursor-pointer tooltip" title="Copy referral link">
                        <input class="form-control" placeholder="john@doe.com">
                        <i data-feather="copy" class="absolute right-0 top-0 bottom-0 my-auto mr-4 w-4 h-4"></i>
                    </div>
                    <img class="hidden sm:block absolute top-0 right-0 w-1/2 mt-1 -mr-12" alt="JustDrive" src="{{ asset('dist/images/phone-illustration.svg') }}">
                </div>
            
                <div class="ads-box box p-8 relative overflow-hidden intro-y">
                    <div class="ads-box__title w-full sm:w-52 text-theme-24 dark:text-white text-xl -mt-3">Invite friends to get <span class="font-medium">FREE</span> bonuses!</div>
                    <div class="w-full sm:w-60 leading-relaxed text-gray-600 mt-2">Get a IDR 100,000 voucher by inviting your friends to fund #BecomeMember</div>
                    <div class="w-48 relative mt-6 cursor-pointer tooltip" title="Copy referral link">
                        <input class="form-control" value="https://dashboard.in">
                        <i data-feather="copy" class="absolute right-0 top-0 bottom-0 my-auto mr-4 w-4 h-4"></i>
                    </div>
                    <img class="hidden sm:block absolute top-0 right-0 w-1/2 mt-1 -mr-12" alt="JustDrive" src="{{ asset('dist/images/phone-illustration.svg') }}">
                </div>
            </div>
        </div>
        <!-- END: Ads 2 -->


    
    

   
    

    <!-- BEGIN: DiveIn block -->
       <div class="bg-gray-50 my-10 pt-20 bg-theme-24 dark:bg-dark-1 ">
        <div class="max-w-7xl mx-auto py-12 px-4 sm:px-6 lg:py-16 lg:px-8 lg:flex lg:items-center lg:justify-between dark:bg-dark-2">
            <h2 class="text-3xl font-extrabold tracking-tight text-gray-900 sm:text-4xl">
                <span class="block dark:text-theme-12 " >Have a car to spare?</span>
                <span class=" text-xl font-normal text-indigo-600 text-theme-12">You don&apos;t need a fleet to get started. If you have a car to spare, list it for hire. One of our agent will be in touch with you get things moving.</span>
            </h2>
            
            <div class="mt-8 flex lg:mt-0 lg:flex-shrink-0">
            <div class="inline-flex rounded-md shadow">
                <a id="notification-test" href="#" class="inline-flex items-center justify-center px-5 py-3 border border-transparent text-base font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700">
                Get started
                </a>
            </div>
            <div class="ml-3 inline-flex rounded-md shadow">
                <a href="#" class="inline-flex items-center justify-center px-5 py-3 border border-transparent text-base font-medium rounded-md text-indigo-600 bg-white hover:bg-indigo-50">
                Learn more
                </a>
            </div>
            </div> 
        </div>
        <section class="text-gray-700 body-font border-t border-gray-200">
                <div class="container px-5 py-24 mx-auto">
                    <div class="xl:w-1/2 lg:w-3/4 w-full mx-auto text-center">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="inline-block w-8 h-8 text-gray-400 mb-8" viewBox="0 0 975.036 975.036">
                        <path d="M925.036 57.197h-304c-27.6 0-50 22.4-50 50v304c0 27.601 22.4 50 50 50h145.5c-1.9 79.601-20.4 143.3-55.4 191.2-27.6 37.8-69.399 69.1-125.3 93.8-25.7 11.3-36.8 41.7-24.8 67.101l36 76c11.6 24.399 40.3 35.1 65.1 24.399 66.2-28.6 122.101-64.8 167.7-108.8 55.601-53.7 93.7-114.3 114.3-181.9 20.601-67.6 30.9-159.8 30.9-276.8v-239c0-27.599-22.401-50-50-50zM106.036 913.497c65.4-28.5 121-64.699 166.9-108.6 56.1-53.7 94.4-114.1 115-181.2 20.6-67.1 30.899-159.6 30.899-277.5v-239c0-27.6-22.399-50-50-50h-304c-27.6 0-50 22.4-50 50v304c0 27.601 22.4 50 50 50h145.5c-1.9 79.601-20.4 143.3-55.4 191.2-27.6 37.8-69.4 69.1-125.3 93.8-25.7 11.3-36.8 41.7-24.8 67.101l35.9 75.8c11.601 24.399 40.501 35.2 65.301 24.399z"></path>
                    </svg>
                    <p class="leading-relaxed text-lg">Edison bulb retro cloud bread echo park, helvetica stumptown taiyaki taxidermy 90's cronut +1 kinfolk. Single-origin coffee ennui shaman taiyaki vape DIY tote bag drinking vinegar cronut adaptogen squid fanny pack vaporware. Man bun next level coloring book skateboard four loko knausgaard. Kitsch keffiyeh master cleanse direct trade indigo juice before they sold out gentrify plaid gastropub normcore XOXO 90's pickled cindigo jean shorts. Slow-carb next level shoindigoitch ethical authentic, yr scenester sriracha forage franzen organic drinking vinegar.</p>
                    <span class="inline-block h-1 w-10 rounded bg-indigo-500 mt-8 mb-6"></span>
                    <h2 class="text-gray-900 font-medium title-font tracking-wider text-sm">HOLDEN CAULFIELD</h2>
                    <p class="text-gray-500">Senior Product Designer</p>
                    </div>
                </div>
            </section>
    </div>
    <!-- END: DiveIn block -->
  

                    

       
   
   <!-- BEGIN: FOOTER -->                 
   <section class="my-10 px-10"> 
       

    <div class="container max-w-full mx-auto py-12 px-6">
        <h1 class="text-center text-4xl text-black font-medium leading-snug tracking-wider"> Pricing  </h1>
        <p class="text-center text-lg text-gray-700 mt-2 px-6">
        Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam.
        </p>
        <div class="h-1 mx-auto bg-indigo-200 w-24 opacity-75 mt-4 rounded"></div>

        <div class="max-w-full md:max-w-6xl mx-auto my-3 md:px-8">
        <div class="relative block flex flex-col md:flex-row items-center">
            <div class="w-11/12 max-w-sm sm:w-3/5 lg:w-1/3 sm:my-5 my-8 relative z-0 rounded-lg shadow-lg md:-mr-4">
            <div class="bg-white text-black rounded-lg shadow-inner shadow-lg overflow-hidden">
                <div class="block text-left text-sm sm:text-md max-w-sm mx-auto mt-2 text-black px-8 lg:px-6">
                <h1 class="text-lg font-medium uppercase p-3 pb-0 text-center tracking-wide">
                    Single License
                </h1>
                <h2 class="text-sm text-gray-500 text-center pb-6">FREE</h2>

                Stripe offers everything needed to run an online business at scale. Get in touch for details.
                </div>

                <div class="flex flex-wrap mt-3 px-6">
                <ul>
                    <li class="flex items-center">
                    <div class=" rounded-full p-2 fill-current text-green-700">
                        <svg class="w-6 h-6 align-middle" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
        <path  d="M22 11.08V12a10 10 0 1 1-5.93-9.14"  ></path>  <polyline  points="22 4 12 14.01 9 11.01"  ></polyline>
        </svg>
                    </div>
                    <span class="text-gray-700 text-lg ml-3">No setup</span
    >
    </li>
    <li class="flex items-center">
    <div
    class=" rounded-full p-2 fill-current text-green-700"
    >
    <svg
    class="w-6 h-6 align-middle"
    width="24"
    height="24"
    viewBox="0 0 24 24"
    fill="none"
    stroke="currentColor"
    stroke-width="2"
    stroke-linecap="round"
    stroke-linejoin="round"
    >
    <path
    d="M22 11.08V12a10 10 0 1 1-5.93-9.14"
    ></path>
    <polyline
    points="22 4 12 14.01 9 11.01"
    ></polyline>
    </svg>
    </div>
    <span class="text-gray-700 text-lg ml-3"
    >No setups</span
    >
                    </li>
                    <li class="flex items-center">
                    <div class=" rounded-full p-2 fill-current text-green-700">
                        <svg class="w-6 h-6 align-middle" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
    <path
    d="M22 11.08V12a10 10 0 1 1-5.93-9.14"
    ></path>
    <polyline
    points="22 4 12 14.01 9 11.01"
    ></polyline>
    </svg>
                    </div>
                    <span class="text-gray-700 text-lg ml-3">Speed</span>
                    </li>
                </ul>
                </div>
                <div class="block flex items-center p-8  uppercase">
                <button class="mt-3 text-lg font-semibold 
    bg-black w-full text-white rounded-lg 
    px-6 py-3 block shadow-xl hover:bg-gray-700">
    Select
    </button>
                </div>
            </div>
            </div>
            <div class="w-full max-w-md sm:w-2/3 lg:w-1/3 sm:my-5 my-8 relative z-10 bg-white rounded-lg shadow-lg">
            <div class="text-sm leading-none rounded-t-lg bg-gray-200 text-black font-semibold uppercase py-4 text-center tracking-wide">
                Most Popular
            </div>
            <div class="block text-left text-sm sm:text-md max-w-sm mx-auto mt-2 text-black px-8 lg:px-6">
                <h1 class="text-lg font-medium uppercase p-3 pb-0 text-center tracking-wide">
                Expert
                </h1>
                <h2 class="text-sm text-gray-500 text-center pb-6"><span class="text-3xl">€19</span> /mo</h2>

                Stripe offers everything needed to run an online business at scale. Get in touch for details.
            </div>
            <div class="flex pl-12 justify-start sm:justify-start mt-3">
                <ul>
                <li class="flex items-center">
                    <div class="rounded-full p-2 fill-current text-green-700">
                    <svg class="w-6 h-6 align-middle" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
        <path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"></path>
        <polyline points="22 4 12 14.01 9 11.01"></polyline>
        </svg>
                    </div>
                    <span class="text-gray-700 text-lg ml-3">No setup</span>
                </li>
                <li class="flex items-center">
                    <div class=" rounded-full p-2 fill-current text-green-700">
                    <svg class="w-6 h-6 align-middle" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
    <path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"></path>
    <polyline points="22 4 12 14.01 9 11.01"></polyline>
    </svg>
                    </div>
                    <span class="text-gray-700 text-lg ml-3">Hidden fees</span
    >
                </li>
                <li class="flex items-center">
                    <div class=" rounded-full p-2 fill-current text-green-700">
                    <svg class="w-6 h-6 align-middle" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
    <path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"></path>
    <polyline points="22 4 12 14.01 9 11.01"></polyline>
    </svg>
                    </div>
                    <span class="text-gray-700 text-lg ml-3">Original</span>
                </li>
                </ul>
            </div>

            <div class="block flex items-center p-8  uppercase">
                <button class="mt-3 text-lg font-semibold 
    bg-black w-full text-white rounded-lg 
    px-6 py-3 block shadow-xl hover:bg-gray-700">
    Select
    </button>
            </div>
            </div>
            <div class="w-11/12 max-w-sm sm:w-3/5 lg:w-1/3 sm:my-5 my-8 relative z-0 rounded-lg shadow-lg md:-ml-4">
            <div class="bg-white text-black rounded-lg shadow-inner shadow-lg overflow-hidden">
                <div class="block text-left text-sm sm:text-md max-w-sm mx-auto mt-2 text-black px-8 lg:px-6">
                <h1 class="text-lg font-medium uppercase p-3 pb-0 text-center tracking-wide">
                    Enterprise
                </h1>
                <h2 class="text-sm text-gray-500 text-center pb-6">€39 /mo</h2>

                Stripe offers everything needed to run an online business at scale. Get in touch for details.
                </div>
                <div class="flex flex-wrap mt-3 px-6">
                <ul>
                    <li class="flex items-center">
                    <div class=" rounded-full p-2 fill-current text-green-700">
                        <svg class="w-6 h-6 align-middle" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
        <path
        d="M22 11.08V12a10 10 0 1 1-5.93-9.14"
        ></path>
        <polyline
        points="22 4 12 14.01 9 11.01"
        ></polyline>
        </svg>
                    </div>
                    <span class="text-gray-700 text-lg ml-3">Electric</span
    >
    </li>
    <li class="flex items-center">
    <div
    class=" rounded-full p-2 fill-current text-green-700"
    >
    <svg
    class="w-6 h-6 align-middle"
    width="24"
    height="24"
    viewBox="0 0 24 24"
    fill="none"
    stroke="currentColor"
    stroke-width="2"
    stroke-linecap="round"
    stroke-linejoin="round"
    >
    <path
    d="M22 11.08V12a10 10 0 1 1-5.93-9.14"
    ></path>
    <polyline
    points="22 4 12 14.01 9 11.01"
    ></polyline>
    </svg>
    </div>
    <span class="text-gray-700 text-lg ml-3"
    >Monthly</span
    >
                    </li>
                    <li class="flex items-center">
                    <div class=" rounded-full p-2 fill-current text-green-700">
                        <svg class="w-6 h-6 align-middle" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
    <path
    d="M22 11.08V12a10 10 0 1 1-5.93-9.14"
    ></path>
    <polyline
    points="22 4 12 14.01 9 11.01"
    ></polyline>
    </svg>
                    </div>
                    <span class="text-gray-700 text-lg ml-3">No setup</span
    >
                    </li>
                </ul>
                </div>

                <div class="block flex items-center p-8  uppercase">
                <button class="mt-3 text-lg font-semibold 
    bg-black w-full text-white rounded-lg 
    px-6 py-3 block shadow-xl hover:bg-gray-700">
    Select
    </button>
                </div>
            </div>
            </div>
        </div>
        </div>
    </div>

    </section>

    <footer class="pt-4">
         <!-- BEGIN: Application block -->               
         <div class="grid grid-cols-12 gap-6 my-24 pb-20 px-10">
         <a href="" class="intro-y col-span-12 lg:col-span-4 box py-10 border-2 border-theme-25 bg-theme-26 dark:border-theme-1">
                <i data-feather="shield" class="block w-12 h-12 text-theme-25 dark:text-theme-22 mx-auto"></i>
                <div class="font-medium text-center text-theme-18 text-base mt-3">Single Application</div>
                <div class="text-gray-600 mt-2 w-3/4 text-theme-18 text-center mx-auto">Lorem Ipsum is simply dummy text of the printing</div>
            </a>
            <a href="" class="intro-y col-span-12 lg:col-span-4   bg-theme-26 box py-10">
                <i data-feather="send" class="block w-12 h-12 text-theme-25 dark:text-theme-22 mx-auto"></i>
                <div class="font-medium text-center text-theme-18 text-base mt-3">Multi Application</div>
                <div class="text-gray-600 mt-2 w-3/4 text-theme-18 text-center mx-auto">Lorem Ipsum is simply dummy text of the printing</div>
            </a>
            <a href="" class="intro-y col-span-12 lg:col-span-4  bg-theme-26 box py-10">
                <i data-feather="trending-up" class="block w-12 h-12 text-theme-25 dark:text-theme-22 mx-auto"></i>
                <div class="font-medium text-center text-theme-18 text-base mt-3">Custom License</div>
                <div class="text-gray-600 mt-2 w-3/4 text-theme-18 text-center mx-auto">Lorem Ipsum is simply dummy text of the printing</div>
            </a>
            </div>

            <div class="grid grid-cols-3 gap-6 my-24 pb-20 px-10 bg-theme-4 dark:bg-theme-9">
            <!-- BEGIN: Footer Menu -->
            
            <table class="table">
                <thead>
                   <th colspan="2"><h1 class="text-center text-4xl text-black font-medium leading-snug tracking-wider"> ABOUT  </h1></th>         
                </thead>
                <tbody>
                    <tr>
                        <td class="border-b dark:border-dark-5">
                            <div class="font-medium whitespace-nowrap">Tinker HTML Admin Template</div>
                            <div class="text-gray-600 text-sm mt-0.5 whitespace-nowrap">Regular License</div>
                        </td>
                        <td class="text-right border-b dark:border-dark-5 w-32">></td>
                    </tr>
                    <tr>
                        <td class="border-b dark:border-dark-5">
                            <div class="font-medium whitespace-nowrap">Vuejs Admin Template</div>
                            <div class="text-gray-600 text-sm mt-0.5 whitespace-nowrap">Regular License</div>
                        </td>
                        <td class="text-right border-b dark:border-dark-5 w-32">></td>
                    </tr>
                    <tr>
                        <td class="border-b dark:border-dark-5">
                            <div class="font-medium whitespace-nowrap">React Admin Template</div>
                            <div class="text-gray-600 text-sm mt-0.5 whitespace-nowrap">Regular License</div>
                        </td>
                        <td class="text-right border-b dark:border-dark-5 w-32">></td>
                    </tr>
                    <tr>
                        <td>
                            <div class="font-medium whitespace-nowrap">Laravel Admin Template</div>
                            <div class="text-gray-600 text-sm mt-0.5 whitespace-nowrap">Regular License</div>
                        </td>
                        <td class="text-right w-32">></td>
                    </tr>
                </tbody>
            </table>
            
            <table class="table">
                <thead>
                   <th colspan="2"><h1 class="text-center text-4xl text-black font-medium leading-snug tracking-wider"> ABOUT  </h1></th>         
                </thead>
                <tbody>
                    <tr>
                        <td class="border-b dark:border-dark-5">
                            <div class="font-medium whitespace-nowrap">Tinker HTML Admin Template</div>
                            <div class="text-gray-600 text-sm mt-0.5 whitespace-nowrap">Regular License</div>
                        </td>
                        <td class="text-right border-b dark:border-dark-5 w-32">2</td>
                    </tr>
                    <tr>
                        <td class="border-b dark:border-dark-5">
                            <div class="font-medium whitespace-nowrap">Vuejs Admin Template</div>
                            <div class="text-gray-600 text-sm mt-0.5 whitespace-nowrap">Regular License</div>
                        </td>
                        <td class="text-right border-b dark:border-dark-5 w-32">1</td>
                    </tr>
                    <tr>
                        <td class="border-b dark:border-dark-5">
                            <div class="font-medium whitespace-nowrap">React Admin Template</div>
                            <div class="text-gray-600 text-sm mt-0.5 whitespace-nowrap">Regular License</div>
                        </td>
                        <td class="text-right border-b dark:border-dark-5 w-32">1</td>
                    </tr>
                    <tr>
                        <td>
                            <div class="font-medium whitespace-nowrap">Laravel Admin Template</div>
                            <div class="text-gray-600 text-sm mt-0.5 whitespace-nowrap">Regular License</div>
                        </td>
                        <td class="text-right w-32">3</td>
                    </tr>
                </tbody>
            </table>

            <table class="table">
                <thead>
                   <th colspan="2"><h1 class="text-center text-4xl text-black font-medium leading-snug tracking-wider"> ABOUT  </h1></th>         
                </thead>
                <tbody>
                    <tr>
                        <td class="border-b dark:border-dark-5">
                            <div class="font-medium whitespace-nowrap">Tinker HTML Admin Template</div>
                            <div class="text-gray-600 text-sm mt-0.5 whitespace-nowrap">Regular License</div>
                        </td>
                        <td class="text-right border-b dark:border-dark-5 w-32">2</td>
                    </tr>
                    <tr>
                        <td class="border-b dark:border-dark-5">
                            <div class="font-medium whitespace-nowrap">Vuejs Admin Template</div>
                            <div class="text-gray-600 text-sm mt-0.5 whitespace-nowrap">Regular License</div>
                        </td>
                        <td class="text-right border-b dark:border-dark-5 w-32">1</td>
                    </tr>
                    <tr>
                        <td class="border-b dark:border-dark-5">
                            <div class="font-medium whitespace-nowrap">React Admin Template</div>
                            <div class="text-gray-600 text-sm mt-0.5 whitespace-nowrap">Regular License</div>
                        </td>
                        <td class="text-right border-b dark:border-dark-5 w-32">1</td>
                    </tr>
                    <tr>
                        <td>
                            <div class="font-medium whitespace-nowrap">Laravel Admin Template</div>
                            <div class="text-gray-600 text-sm mt-0.5 whitespace-nowrap">Regular License</div>
                        </td>
                        <td class="text-right w-32">3</td>
                    </tr>
                </tbody>
            </table>
            
            <!-- END: Footer Menu -->
        </div>
        <!-- END: Application block --> 
                            
        <a href="https://twitter.com/fgbsuk" target="_blank">
            <div class="flex flex-row items-center justify-center">
            <span class="text-center font-sans border-b-2 border-blue-200 hover:text-blue-200">@fgbsuk  </span>
                <svg class="h-5 px-2 cursor-pointer fill-current text-blue-200 hover:text-blue-300" viewBox="0 0 30 24" xmlns="http://www.w3.org/2000/svg">
                    <path d="M9.4344 24C20.7552 24 26.9472 14.7658 26.9472 6.75787C26.9472 6.49559 26.9472 6.23449 26.9292 5.97457C28.1338 5.11673 29.1736 4.05457 30 2.83781C28.8767 3.32788 27.685 3.64927 26.4648 3.79125C27.7497 3.03391 28.7113 1.84276 29.1708 0.439464C27.9626 1.14533 26.6408 1.64279 25.2624 1.91037C23.3545 -0.0869983 20.3229 -0.575862 17.8675 0.717909C15.4121 2.01168 14.1435 4.76633 14.7732 7.43721C9.82427 7.19294 5.21337 4.89156 2.088 1.1058C0.454347 3.87471 1.28879 7.41696 3.9936 9.19521C3.01409 9.16663 2.05594 8.90648 1.2 8.43672C1.2 8.46153 1.2 8.48752 1.2 8.51351C1.2008 11.3981 3.2661 13.8827 6.138 14.4539C5.23184 14.6972 4.2811 14.7327 3.3588 14.5578C4.16514 17.0264 6.47589 18.7175 9.1092 18.7662C6.92968 20.4526 4.23727 21.3681 1.4652 21.3654C0.975484 21.3644 0.486245 21.3352 0 21.2779C2.81476 23.0563 6.0899 23.9997 9.4344 23.9953" ></path>
                </svg> 
            </div>
        </a>
    </footer>
   <!-- END: FOOTER -->
        

                             
@endsection