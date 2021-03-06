@extends('app')
@section('content')

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
                        @if($errors->any())
                        @foreach($errors->all() as $err)
                        <p class="alert alert-danger">{{ $err }}</p>
                        @endforeach
                        @endif
                        <form method="POST" action="{{ route('register.action') }}">
                        @csrf
                        <div class="form-outline mb-4">
                            <label>Name <span class="text-danger">*</span></label>
                            <input class="form-control" type="text" name="name" value="{{old('name')}}" >
                        </div>
                        <div class="form-outline mb-4">
                            <label>Username <span class="text-danger">*</span></label>
                            <input class="form-control" type="text" name="username" value="{{old('username')}}" >
                        </div>
                        <div class="form-outline mb-4">
                            <label>Password <span class="text-danger">*</span></label>
                            <input class="form-control" type="password" name="password" >
                        </div>
                        <div class="form-outline mb-4">
                            <label>Password Confirmation<span class="text-danger">*</span></label>
                            <input class="form-control" type="password" name="password_confirmation" >
                        </div>
                        <div class="text-center pt-1 mb-5 pb-1">
                                <button class="btn btn-primary btn-block fa-lg gradient-custom-2 mb-3" style="border-color: #0d6e8500">Register</button>
                                <a class="btn btn-danger btn-block fa-lg gradient-custom-2 mb-3" style="border-color: #0d6e8500" href="{{ route('home') }}">Back</a>
                        </div>
                        </form>

                    </div>
                </div>

                <div class="col-lg-6 d-flex align-items-center gradient-custom-2">
                    <div class="text-white px-3 py-4 p-md-5 mx-md-4">
                        <h4 class="fw-bolder mb-2 " style="text-align:center">Ch??o m???ng b???n ?????n v???i</br> kh??a h???c tr???c tuy???n WinX</h4>
                        <p class="small mb-0" style="text-align:justify">Kh??a h???c gi??p c??c b???n c?? th??? t??m hi???u, h???c h???i v??? 
                            nh???ng ng??n ng??? m???i t??? nh???ng con ng?????i ch???p ch???ng v???a bi???t 
                            vi???t code cho ?????n nh???ng thi???u ni??n ?????y kinh nghi???m ????? c?? th??? 
                            t??? b???n th??n vi???t tr??n nh???ng ch????ng tr??nh c???a b???n th??n b???ng nh???ng 
                            ng??n ng??? l???p tr??nh kh??c nhau nh?? C, C++, Python,??? t???o ra ???????c nh???ng 
                            ngu???n t??i nguy??n m???i gi??p ??ch cho th??? tr?????ng ??i???n t??? c???a Vi???t Nam ng??y 
                            m???t ti???n b??? v?? ????a nh???ng s???n ph???m ???y c?? th??? v????n t???m th??? gi???i.</p>
                    </div>
                </div>
            </div>
            </div>
        </div>
        </div>
    </div>
</section>
@endsection