@extends('layouts/'. $layout)

@section('subhead')
    <title>Dashboard - Laravel Stripe Elegant</title>
@endsection


@section('sub-content')

<div class="container sm:px-10 mt-20">

    <div class="grid grid-cols-12 gap-6 px-10">
        <div class="col-span-12 2xl:col-span-9">
            <div class="grid grid-cols-12 gap-6">
                
                <!-- BEGIN: Home Screen Dash -->
                <div class="intro-y box col-span-12 2xl:col-span-6 ml-20">
                    <div class="flex items-center p-5 border-b border-gray-200 dark:border-dark-5">
                        <h2 class="font-medium text-base mr-auto">Home Screen Dashboard</h2>
                        <div class="dropdown ml-auto">
                            <a class="dropdown-toggle w-5 h-5 block" href="javascript:;" aria-expanded="false">
                                <i data-feather="more-horizontal" class="w-5 h-5 text-gray-600 dark:text-gray-300"></i>
                            </a>
                            <div class="dropdown-menu w-40">
                                <div class="dropdown-menu__content box dark:bg-dark-1 p-2">
                                    <a href="" class="flex items-center block p-2 transition duration-300 ease-in-out bg-white dark:bg-dark-1 hover:bg-gray-200 dark:hover:bg-dark-2 rounded-md">
                                        <i data-feather="edit-2" class="w-4 h-4 mr-2"></i> New Chat
                                    </a>
                                    <a href="" class="flex items-center block p-2 transition duration-300 ease-in-out bg-white dark:bg-dark-1 hover:bg-gray-200 dark:hover:bg-dark-2 rounded-md">
                                        <i data-feather="trash" class="w-4 h-4 mr-2"></i> Delete
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="p-5">
                        <div class="boxed-tabs nav nav-tabs flex-col justify-center sm:flex-row text-gray-700 dark:text-gray-300" role="tablist">
                            <a id="section1-tab" data-toggle="tab" data-target="#payments" href="javascript:;" class="w-full sm:w-30 sm:h-30 mb-2 sm:mb-0 py-5 rounded-md box dark:bg-dark-5 text-center sm:mx-2 active" role="tab" aria-selected="true">
                                <i data-feather="box" class="block w-6 h-6 mb-2 mx-auto"></i> Section #1
                            </a>
                            <a id="section2-tab" data-toggle="tab" data-target="#checkout" href="javascript:;" class="w-full sm:w-30 sm:h-30 mb-2 sm:mb-0 py-5 rounded-md box dark:bg-dark-5 text-center sm:mx-2" role="tab" aria-selected="false">
                                <i data-feather="inbox" class="block w-6 h-6 mb-2 mx-auto"></i> Section #2
                            </a>
                            <a id="section3-tab" data-toggle="tab" data-target="#subscriptions" href="javascript:;" class="w-full sm:w-30 sm:h-30 mb-2 sm:mb-0 py-5 rounded-md box dark:bg-dark-5 text-center sm:mx-2" role="tab" aria-selected="false">
                                <i data-feather="activity" class="block w-6 h-6 mb-2 mx-auto"></i> Section #3
                            </a>
                        </div>
                        <div class="tab-content mt-8">
                            <div id="payments" class="tab-pane active" role="tabpanel" aria-labelledby="payments-tab">
                                <div class="flex flex-col sm:flex-row items-center h-minscreen">
                                    Section #1
                                </div> 
                            </div>
                            <div id="checkout" class="tab-pane" role="tabpanel" aria-labelledby="payments-tab"> 
                                    Section #2
                            </div>
                            <div id="subscriptions" class="tab-pane" role="tabpanel" aria-labelledby="payments-tab"> 
                                    Section #3
                            </div>
                            
                            
                        </div>
                    </div>
                </div>
                <!-- END: Home Screen Dash -->
            </div>
        </div>
    </div>
</div>


@endsection
