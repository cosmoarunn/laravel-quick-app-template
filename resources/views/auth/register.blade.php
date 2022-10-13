@extends('layouts.generic')

@section('head')
    <title>Register - @fgbsUK Template</title>
@endsection

@section('content')
<div class="container">


<div class="container sm:px-10">
    <div class="block xl:grid grid-cols-2 gap-4">
        <!-- BEGIN: Login Info -->
        <div class="xl:flex flex-col min-h-screen">
            <a href="" class="-intro-x flex items-center pt-5">
                <img alt="fgbsUK" class="w-20" src="{{ asset('dist/images/fgbs-logo.png') }}">
                <span class="text-white text-lg ml-3">
                    @fgbsUK<span class="font-medium ml-2">Web Template</span>
                </span>
            </a>
            <div class="my-auto">
                <img alt="login-welcome" class="-intro-x w-1/2 -mt-16" src="{{ asset('dist/images/tour.svg') }}">
                <div class="-intro-x text-white font-medium text-4xl leading-tight mt-10">Are you ready to <br> take the tour?</div>
                <div class="-intro-x mt-5 text-lg text-white text-opacity-70 dark:text-gray-500">One template for all apps.</div>
            </div>
        </div>
        <!-- END: Login Info -->

        <div class="h-screen xl:h-auto flex py-5 xl:py-0 my-10 xl:my-0">
            <div class="my-auto mx-auto xl:ml-20 bg-white dark:bg-dark-1 xl:bg-transparent px-4 sm:px-8 py-8 xl:p-0 rounded-md shadow-md xl:shadow-none w-full sm:w-3/4 lg:w-2/4 xl:w-auto">
                <h2 class="intro-x font-bold text-2xl xl:text-3xl text-center xl:text-left text-theme-20">Sign In</h2>
                <div class="intro-x mt-2 text-gray-500 xl:hidden text-center text-theme-16">A few more clicks to sign in to your account. Manage all your e-commerce accounts in one place</div>

                <div class="row justify-content-center">
                    <div class="col-md-8">
                        <div class="card">
                            <div class="card-header">{{ __('Register') }}</div>

                            <div class="card-body">
                                <form method="POST" action="{{ route('register') }}">
                                    @csrf

                                    <div class="row mb-3">
                                        <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('Name') }}</label>

                                        <div class="col-md-6">
                                            <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                            @error('name')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="row mb-3">
                                        <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>

                                        <div class="col-md-6">
                                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                            @error('email')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="row mb-3">
                                        <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>

                                        <div class="col-md-6">
                                            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                            @error('password')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="row mb-3">
                                        <label for="password-confirm" class="col-md-4 col-form-label text-md-end">{{ __('Confirm Password') }}</label>

                                        <div class="col-md-6">
                                            <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                                        </div>
                                    </div>

                                    <div class="row mb-0">
                                        <div class="col-md-6 offset-md-4">
                                            <button type="submit" class="btn btn-primary">
                                                {{ __('Register') }}
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


</div>
@endsection
