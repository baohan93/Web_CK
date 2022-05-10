@extends('app')
@section('content')
@auth
<!-- <p>Welcome <b>{{ Auth::user()->name }}</b></p> -->
</br>
</br>
</br>
</br>
</br>
<style>
    .gradient-custom-2 {
    /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
        background: linear-gradient(-45deg, #092147, #19488E, #97B2DF);
        background-size: 400% 400%;
        animation: gradient 15s ease infinite;
    }
    @media (min-width: 768px) {
        .gradient-form {
            height: 100vh !important;
        }
    }
    @media (min-width: 769px) {
        .gradient-custom-2 {
            border-top-right-radius: .3rem;
            border-bottom-right-radius: .3rem;
        }
    }
    @keyframes gradient {
        0% {
            background-position: 0% 50%;
        }
        50% {
            background-position: 100% 50%;
        }
        100% {
            background-position: 0% 50%;
        }   
    }
</style>
<header class="py-5">
    <div class="container px-5">
        <div class="row gx-5 justify-content-center">
            <div class="col-lg-6 d-flex align-items-center gradient-custom-2">
                <div class="text-center my-5">
                    <h3 class="display-5 fw-bolder text-white mb-2">Chào mừng bạn đến với khóa học trực tuyến WinX</h3>
                    <p class="lead text-white-50 mb-4">Bạn nên đăng ký/đăng nhập để tham gia khóa học,</br> xin lỗi vì sự bất tiện này.</p>
                    <div class="d-grid gap-3 d-sm-flex justify-content-sm-center">
                        <a class="btn btn-outline-light btn-lg px-4" href="{{ route('web') }}">Web</a>    
                        <a class="btn btn-outline-light btn-lg px-4" href="{{ route('password') }}">Chang Password</a>
                        <a class="btn btn-outline-light btn-lg px-4" href="{{ route('logout') }}">Logout</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
@endauth
@guest
</br>
</br>
</br>
</br>
</br>
<style>
        .gradient-custom-2 {
        /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
            background: linear-gradient(-45deg, #092147, #19488E, #97B2DF);
            background-size: 400% 400%;
            animation: gradient 15s ease infinite;
        }
        @media (min-width: 768px) {
            .gradient-form {
                height: 100vh !important;
            }
        }
        @media (min-width: 769px) {
            .gradient-custom-2 {
                border-top-right-radius: .3rem;
                border-bottom-right-radius: .3rem;
            }
        }
        @keyframes gradient {
            0% {
                background-position: 0% 50%;
            }
            50% {
                background-position: 100% 50%;
            }
            100% {
                background-position: 0% 50%;
            }   
        }
</style>
<header class="py-5">
    <div class="container px-5">
        <div class="row gx-5 justify-content-center">
            <div class="col-lg-6 d-flex align-items-center gradient-custom-2">
                <div class="text-center my-5">
                    <h3 class="display-6 fw-bolder text-white mb-2">Chào mừng bạn đến với khóa học trực tuyến WinX</h3> 
                    <p class="lead text-white-50 mb-4">Bạn nên đăng ký/đăng nhập để tham gia khóa học,</br> xin lỗi vì sự bất tiện này.</p>
                    <div class="d-grid gap-3 d-sm-flex justify-content-sm-center">
                        <a class="btn btn-outline-light btn-lg px-4" href="{{ route('login') }}">Login</a>
                        <a class="btn btn-outline-light btn-lg px-4" href="{{ route('register') }}">Register</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
@endguest
@endsection