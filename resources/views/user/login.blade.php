@extends('app')
@section('content')
<!-- <div class="row">
    <div class="col-md-6">
        @if(session('success'))
        <p class="alert alert-success">{{ session('success') }}</p>
        @endif
        @if($errors->any())
        @foreach($errors->all() as $err)
        <p class="alert alert-danger">{{ $err }}</p>
        @endforeach
        @endif
        <form method="POST" action="{{ route('login.action') }}" >
            @csrf
            <div class="mb-3">
                <label>Username <span class="text-danger">*</span></label>
                <input class="form-control" type="text" name="username" value="{{ old('username') }}" />
            </div>
            <div class="mb-3">
                <label>Password <span class="text-danger">*</span></label>
                <input class="form-control" type="password" name="password" />
            </div>
            <div class="mb-3">
                    <button class="btn btn-primary">Login</button>
                    <a class="btn btn-danger" href="{{ route('home') }}">Back</a>
            </div>
        </form>
    </div>
</div> -->

<!-- Section: Design Block -->
<section class="h-100 gradient-form" style="background-color: #fff;">
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
    <div class="container py-5 h-100">
        <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col-xl-10">
            <div class="card rounded-3 text-black">
            <div class="row g-0">
                <div class="col-lg-6">
                    <div class="card-body p-md-5 mx-md-4">

                        <div class="text-center">
                            <img src="images/logoo.png" style="width: 185px;" alt="logo">
                            <h4 class="mt-1 mb-5 pb-1">We are WinX</h4>
                        </div>
                        @if(session('success'))
                        <p class="alert alert-success">{{ session('success') }}</p>
                        @endif
                        @if($errors->any())
                        @foreach($errors->all() as $err)
                        <p class="alert alert-danger">{{ $err }}</p>
                        @endforeach
                        @endif
                        <form method="POST" action="{{ route('login.action') }}" >
                        @csrf
                        <div class="form-outline mb-4">
                            <label>Username <span class="text-danger">*</span></label>
                            <input class="form-control" type="text" name="username" value="{{ old('username') }}" />
                        </div>
                        <div class="form-outline mb-4">
                            <label>Password <span class="text-danger">*</span></label>
                            <input class="form-control" type="password" name="password" />
                        </div>
                        <div class="text-center pt-1 mb-5 pb-1">
                                <button class="btn btn-primary btn-block fa-lg gradient-custom-2 mb-3" style="border-color: #0d6e8500">Login</button>
                                <a class="btn btn-danger btn-block fa-lg gradient-custom-2 mb-3" style="border-color: #0d6e8500" href="{{ route('home') }}">Back</a>
                        </div>
                        </form>

                    </div>
                </div>

                <div class="col-lg-6 d-flex align-items-center gradient-custom-2">
                <div class="text-white px-3 py-4 p-md-5 mx-md-4">
                    <h4 class="fw-bolder mb-2 " style="text-align:center">Chào mừng bạn đến với</br> khóa học trực tuyến WinX</h4>
                    <p class="small mb-0" style="text-align:justify">Khóa học giúp các bạn có thể tìm hiểu, học hỏi về 
                        những ngôn ngữ mới từ những con người chập chững vừa biết 
                        viết code cho đến những thiếu niên đầy kinh nghiệm để có thể 
                        tự bản thân viết trên những chương trình của bản thân bằng những 
                        ngôn ngữ lập trình khác nhau như C, C++, Python,… tạo ra được những 
                        nguồn tài nguyên mới giúp ích cho thị trường Điện tử của Việt Nam ngày 
                        một tiến bộ và đưa những sản phẩm ấy có thể vươn tầm thế giới.</p>
                </div>
                </div>
            </div>
            </div>
        </div>
        </div>
    </div>
</section>
@endsection
