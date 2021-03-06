<!DOCTYPE html>
<html lang="">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge"> 
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <title>Website School</title>

        <link rel="stylesheet" href="{{url('css')}}/style.css">
        <link rel="stylesheet" href="{{url('css')}}/colors.css">
        <link rel="stylesheet" href="{{url('css')}}/responsive.css">
        <link rel='shortcut icon' href='images/logoo.png' />

        <!-- Bootstrap CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <!-- fontawesome -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
        <!-- owl -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css">
        <!-- fancybox -->
        <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.css"/>
        <!-- footer icon -->
        <script src="https://kit.fontawesome.com/44f557ccce.js"></script>
    </head>

    <body>
        
        <!-- NAVBAR -->
<nav class="navbar navbar-expand-sm sticky-top navbar-light bg-light">
        <div class="container">
            <a class="navbar-brand" href="#">
                <img src="./images/logoo.png" alt="logo detail">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbar-main" aria-controls="navbar-main" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbar-main">
                <ul class="navbar-nav ml-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" href="#about">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#courses">Lesson</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#teachers">Teachers</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#gallery">All Courses</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#testimonials">Testimonials</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#contact">Contact</a>
                    </li>
                    <li class="nav-item">
                         <a class="nav-link" href="{{ route('logout') }}">Logout</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
<div id="main">
    <!-- CAROUSEL IMAGES -->
    <section class="banner">
    	<div class="owl-carousel owl-theme carousel-sliders">
	    	<div class="item">
	        	<img src="images/course5.jpg" alt="Slider">
	        	<div class="overlay-bg"></div>
	        	<div class="container">
	            	<div class="caption">
	            		<h5 class="caption-supheading">Ch??o m???ng ?????n v???i WinX</h5>
		                <h1 class="caption-heading">Kh??a h???c tr???c tuy???n<br/> t???t nh???t d??nh cho b???n</h1>
		                <a href="#" class="btn btn-secondary">T??m hi???u th??m</a>
		            </div>  
	            </div>
	    	</div>
	    	<div class="item">
	            <img src="images/course2.jpg" alt="Slider">
	            <div class="overlay-bg"></div>
	            <div class="container">
	            	<div class="caption">
		                <h5 class="caption-supheading">Ch??o m???ng ?????n v???i WinX</h5>
		                <h1 class="caption-heading">Kh??a h???c tr???c tuy???n<br/> t???t nh???t d??nh cho b???n</h1>
		                <a href="#" class="btn btn-secondary">T??m hi???u th??m</a>
		            </div>  
	            </div>
	        </div>  
	    	<div class="item">
	            <img src="images/course4.jpg" alt="Slider"> 
	            <div class="overlay-bg"></div>
	            <div class="container">
	            	<div class="caption">
		                <h5 class="caption-supheading">Ch??o m???ng ?????n v???i WinX</h5>
		                <h1 class="caption-heading">Kh??a h???c tr???c tuy???n<br/> t???t nh???t d??nh cho b???n</h1>
		                <a href="#" class="btn btn-secondary">T??m hi???u th??m</a>
		            </div>  
	            </div>
	        </div>  
    	</div>
	    <div class="custom-nav owl-nav"></div>
    </section>

    <!-- WELCOME CONTENT -->
    <section id="about">
        <div class="container pt-5 pb-5">
            <div class="row">
                <div class="col-md-6">
                    <img class="w-100 p-3" src="images/WELCOME CONTENT1.jpg" alt="School about">
                </div>
                <div class="col-md-6">
                    <div class="about-content">
                        <h2 class="section-subtitle">Ch??o m???ng b???n ?????n v???i</h2>
                        <h1 class="section-title">Kh??a h???c tr???c tuy???n</h1>
                        <p>Kh??a h???c gi??p c??c b???n c?? th??? t??m hi???u, h???c h???i v??? 
                        nh???ng ng??n ng??? m???i t??? nh???ng con ng?????i ch???p ch???ng v???a bi???t 
                        vi???t code cho ?????n nh???ng thi???u ni??n ?????y kinh nghi???m ????? c?? th??? 
                        t??? b???n th??n vi???t tr??n nh???ng ch????ng tr??nh c???a b???n th??n b???ng nh???ng 
                        ng??n ng??? l???p tr??nh kh??c nhau nh?? C, C++, Python,??? t???o ra ???????c nh???ng 
                        ngu???n t??i nguy??n m???i gi??p ??ch cho th??? tr?????ng ??i???n t??? c???a Vi???t Nam ng??y 
                        m???t ti???n b??? v?? ????a nh???ng s???n ph???m ???y c?? th??? v????n t???m th??? gi???i.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- COURSES -->
    <section id="courses" class="courses">
        <div class="container pt-5 pb-5">
            <h2 class="section-subtitle">C??c kh??a h???c c???a ch??ng t??i</h2>
            <h1 class="section-title">C??c kh??a h???c h??ng ?????u</h1>
            <div class="row">
                <div class="col-md-4">
                    <div class="course mb-4">
                        <div class="course-image">
                            <img class="transition" src="images/tinhocvp1.png" alt="course detail">
                        </div>
                        <div class="course-detail p-4">
                            <h2>
                                <a href="#">Word</a>
                            </h2>
                            <div class="course-info row pt-2 pb-3">
                                <div class="col-6">
                                    <i class="fas fa-user"></i> 50
                                </div>
                                <div class="col-6 content-right">
                                    <i class="fas fa-clock"></i> 5h 40m
                                </div>
                            </div>
                            <div class="course-desc">
                                <p>Kh??a h???c "Word" cung c???p ?????y ????? ki???n th???c l?? thuy???t t??? 
                                c?? b???n ?????n n??ng cao v??? c??ng c??? Word. H???c vi??n tham gia kh??a h???c
                                ho??n to??n c?? th??? th???c hi???n c??ng vi???c so???n th???o v?? s??? d???ng c??c 
                                t??nh n??ng th??ng minh trong Word ngay trong qu?? tr??nh h???c tr???c tuy???n.</p>
                            </div>
                            <div class="row">
                                <div class="col-6 course-price">
                                    <span>$ Mi???n ph??</span>
                                </div>
                                <div class="col-6 content-right">
                                    <a class="btn btn-secondary" href="{{url('word')}}">Tham gia ngay</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end -->
                <div class="col-md-4">
                    <div class="course mb-4">
                        <div class="course-image">
                            <img class="transition" src="images/tinhocvp2.png" alt="course detail">
                        </div>
                        <div class="course-detail p-4">
                            <h2>
                                <a href="#">Excel</a>
                            </h2>
                            <div class="course-info row pt-2 pb-3">
                                <div class="col-6">
                                    <i class="fas fa-user"></i> 50
                                </div>
                                <div class="col-6 content-right">
                                    <i class="fas fa-clock"></i> 5h 40m
                                </div>
                            </div>
                            <div class="course-desc">
                                <p>Kh??a h???c bao ph??? to??n b??? c??c v???n ????? trong Excel. H???c vi??n 
                                ???????c tham gia c???ng ?????ng h???c vi??n Excel, trao ?????i th???o lu???n tr???c ti???p 
                                v???i gi???ng vi??n tr??n di???n ????n. Kh??a h???c nh?? m???t cu???n s??ch tra c???u c??c th??? thu???t, 
                                c??ch gi???i quy???t c??c v???n ????? g???p ph???i trong Excel.</p>
                            </div>
                            <div class="row">
                                <div class="col-6 course-price">
                                    <span>$ Mi???n ph??</span>
                                </div>
                                <div class="col-6 course-join content-right">
                                    <a class="btn btn-secondary" href="{{url('excel')}}">Tham gia ngay</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="course mb-4">
                        <div class="course-image">
                            <img class="transition" src="images/tinhocvp3.png" alt="course detail">
                        </div>
                        <div class="course-detail p-4">
                            <h2>
                                <a href="#">PowerPoint</a>
                            </h2>
                            <div class="course-info row pt-2 pb-3">
                                <div class="col-6">
                                    <i class="fas fa-user"></i> 50
                                </div>
                                <div class="col-6 content-right">
                                    <i class="fas fa-clock"></i> 5h 40m
                                </div>
                            </div>
                            <div class="course-desc">
                                <p>Kh??a h???c "Powerpoint" gi??p b???n ph??t tri???n v?? n??ng cao 
                                k??? n??ng chu???n b??? c??c b??i thuy???t tr??nh ?????c ????o v?? tuy???t v???i. 
                                B???n s??? c?? ???????c s??? hi???u bi???t r???ng r??i v??? h???u h???t c??c c??ng c???, 
                                t??nh n??ng, th??nh ph???n tr??nh chi???u ph??? bi???n v?? nhi???u c??ng c??? tr??nh b??y kh??c.</p>
                            </div>
                            <div class="row">
                                <div class="col-6 course-price">
                                    <span>$ Mi???n ph??</span>
                                </div>
                                <div class="col-6 course-join content-right">
                                    <a class="btn btn-secondary" href="{{url('ppt')}}">Tham gia ngay</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="course mb-4">
                        <div class="course-image">
                            <img class="transition" src="images/ltcbnv.png" alt="course detail">
                        </div>
                        <div class="course-detail p-4">
                            <h2>
                                <a href="#">L???p tr??nh c?? b???n</a>
                            </h2>
                            <div class="course-info row pt-2 pb-3">
                                <div class="col-6">
                                    <i class="fas fa-user"></i> 50
                                </div>
                                <div class="col-6 content-right">
                                    <i class="fas fa-clock"></i> 5h 40m
                                </div>
                            </div>
                            <div class="course-desc">
                                <p>Hi???n nay, C++ ???? l?? c??i t??n r???t quen thu???c trong ng??nh l???p tr??nh. 
                                M???c d?? C++ l?? ng??n ng??? l???p tr??nh ???? ra ?????i kh?? l??u, nh??ng kh??ng ph???i 
                                ai c??ng c?? c?? h???i ????? t??m hi???u v??? n??. N???i dung kh??a h???c s??? ???????c ph??n t??ch 
                                m???t c??ch chi ti???t, nh???m gi??p c??c b???n d??? hi???u v?? th???c h??nh ???????c ngay.</p>
                            </div>
                            <div class="row">
                                <div class="col-6 course-price">
                                    <span>$ Mi???n ph??</span>
                                </div>
                                <div class="col-6 content-right">
                                    <a class="btn btn-secondary" href="{{url('ltcb')}}">Tham gia ngay</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="course mb-4">
                        <div class="course-image">
                            <img class="transition" src="images/ltcbnv.png" alt="course detail">
                        </div>
                        <div class="course-detail p-4">
                            <h2>
                                <a href="#">L???p tr??nh n??ng cao</a>
                            </h2>
                            <div class="course-info row pt-2 pb-3">
                                <div class="col-6">
                                    <i class="fas fa-user"></i> 50
                                </div>
                                <div class="col-6 content-right">
                                    <i class="fas fa-clock"></i> 5h 40m
                                </div>
                            </div>
                            <div class="course-desc">
                                <p>Kh??a h???c n??y l?? s??? ti???p theo c???a kh??a h???c L???p tr??nh C++ c?? b???n 
                                v?? gi??p h???c vi??n hi???u s??u s???c h??n nh???ng kh??i ni???m. M???i b??i h???c ???????c
                                tr??nh b??y v???i l?? thuy???t v?? v?? d??? minh h???a d??? hi???u. H???c vi??n c??ng ???????c 
                                trang b??? c??c ki???n th???c v??? c???u tr??c d??? li???u v?? gi???i thu???t trong C++</p>
                            </div>
                            <div class="row">
                                <div class="col-6 course-price">
                                    <span>$ Mi???n ph??</span>
                                </div>
                                <div class="col-6 content-right">
                                    <a class="btn btn-secondary" href="{{url('ltnc')}}">Tham gia ngay</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="course mb-4">
                        <div class="course-image">
                            <img class="transition" src="images/lthtt.png" alt="course detail">
                        </div>
                        <div class="course-detail p-4">
                            <h2>
                                <a href="#">L???p tr??nh h?????ng ?????i t?????ng</a>
                            </h2>
                            <div class="course-info row pt-2 pb-3">
                                <div class="col-6">
                                    <i class="fas fa-user"></i> 50
                                </div>
                                <div class="col-6 content-right">
                                    <i class="fas fa-clock"></i> 5h 40m
                                </div>
                            </div>
                            <div class="course-desc">
                                <p>L???p tr??nh H?????ng ?????i t?????ng l?? m???t trong nh???ng ph????ng ph??p l???p tr??nh 
                                m?? m???i l???p tr??nh vi??n ?????u ph???i bi???t v?? s??? d???ng th??nh th???o. Kh??a h???c s??? 
                                h?????ng d???n b???n t???t c??? c??c kh??i ni???m t??? c?? b???n ?????n v??? OOP v???i C#. M???i b??i 
                                h???c ???????c tr??nh b??y v???i l?? thuy???t v?? v?? d??? minh h???a d??? hi???u.</p>
                            </div>
                            <div class="row">
                                <div class="col-6 course-price">
                                    <span>$ Mi???n ph??</span>
                                </div>
                                <div class="col-6 content-right">
                                    <a class="btn btn-secondary" href="{{url('lthdt')}}">Tham gia ngay</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- TEACHERS -->
    <section id="teachers" class="teachers">
        <div class="container pt-5 pb-5">
            <h2 class="section-subtitle">?????i ng?? gi???ng vi??n</h2>
            <h1 class="section-title">Gi???ng vi??n ch??nh</h1>
            <div class="row">
                <div class="col-md-4">
                    <div class="teacher transition text-center mb-5 pt-5 pb-5">
                        <img class="transition mb-4 mx-auto" src="images/avateacher1.png" alt="Teacher detail">
                        <h2>Nguy???n Ho??ng Vi???t Tu???n</h2>
                        <h4 class="mb-4">AI</h4>
                        <p>Gi???ng vi??n Khoa CNTT ??H S?? Ph???m TPHCM c?? kh??? n??ng chuy??n s??u v??? m???ng tr?? tu??? nh??n t???o, c?? t?? duy m???. 
                            T???o ra ???????c nh???ng ???ng d???ng m???i ti???p x??c v??o ?????i s???ng v??o nhi???u l??nh v???c nh?? y t???, khoa h???c, kinh doanh 
                            hay b???o m???t an ninh???
                        </p>
                        
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="teacher transition text-center mb-5 pt-5 pb-5">
                        <img class="transition mb-4 mx-auto" src="images/avateacher1.png" alt="Teacher detail">
                        <h2>L????ng Tr???n Ng???c Khi???t</h2>
                        <h4 class="mb-4">Full-stack</h4>
                        <p>Gi???ng vi??n ch??nh c???a Khoa CNTT t???i ??H S?? Ph???m TPHCM c?? kh??? n??ng chuy??n s??u trong l??nh v???c gi???ng d???y. 
                            Ph??? tr??ch c??? front-end (thi???t k??? UI, UX v?? flow) cho t???i back-end (thi???t k??? database v?? vi???t c??c API c???n thi???t) 
                            c???a h??? th???ng.
                        </p>
                        
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="teacher transition text-center mb-5 pt-5 pb-5">
                        <img class="transition mb-4 mx-auto" src="images/avateacher1.png" alt="Teacher detail">
                        <h2>Tr???n Thanh Nh??</h2>
                        <h4 class="mb-4">Full-stack</h4>
                        <p>Gi???ng vi??n ch??nh c???a Khoa CNTT t???i ??H S?? Ph???m TPHCM c?? kh??? n??ng chuy??n s??u trong l??nh v???c gi???ng d???y. 
                            Ph??? tr??ch c??? front-end (thi???t k??? UI, UX v?? flow) cho t???i back-end (thi???t k??? database v?? vi???t c??c API c???n thi???t) 
                            c???a h??? th???ng.
                        </p>
                       
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- GALLERY -->
    <section id="gallery" class="gallery">
        <div class="container pt-5 pb-5">
            <h2 class="section-subtitle">C??c kh??a h???c c???a ch??ng t??i</h2>
            <h1 class="section-title">T???t c??? c??c kh??a h???c</h1>
            <div class="row">
                <div class="col-md-4 col-6 gallery-item">
                    <div class="image">
                        <img class="image__img" src="./images/nangcao3.png" alt="Bricks">
                        <div class="image__overlay image__overlay--primary">
                            <p class="image__title">C?? s??? d??? li???u</p>
                            <div class="col-6 content-right">
                                <a class="btn btn-secondary" href="https://youtu.be/hj9BsGm8Ec8">Tham gia ngay</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-6 gallery-item">
                    <div class="image">
                        <img class="image__img" src="./images/nangcao4.png" alt="Bricks">
                        <div class="image__overlay image__overlay--primary">
                            <p class="image__title">C???u tr??c d??? li???u</p>
                            <div class="col-6 content-right">
                                <a class="btn btn-secondary" href="https://youtu.be/z0NzorviKXU">Tham gia ngay</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-6 gallery-item">
                    <div class="image">
                        <img class="image__img" src="./images/chuyennganh2.png" alt="Bricks">
                        <div class="image__overlay image__overlay--primary">
                            <p class="image__title">Ki???n tr??c m??y t??nh</p>
                            <div class="col-6 content-right">
                                <a class="btn btn-secondary" href="https://youtu.be/jRgEPH9uNrI">Tham gia ngay</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-6 gallery-item">
                    <div class="image">
                        <img class="image__img" src="./images/chuyennganh3.png" alt="Bricks">
                        <div class="image__overlay image__overlay--primary">
                            <p class="image__title">L???p tr??nh Web</p>
                            <div class="col-6 content-right">
                                <a class="btn btn-secondary" href="https://youtu.be/CxMbQ2AqteE">Tham gia ngay</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-6 gallery-item">
                    <div class="image">
                        <img class="image__img" src="./images/python1.png" alt="Bricks">
                        <div class="image__overlay image__overlay--primary">
                            <p class="image__title">Python</p>
                            <div class="col-6 content-right">
                                <a class="btn btn-secondary" href="https://youtu.be/NZj6LI5a9vc">Tham gia ngay</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-6 gallery-item">
                    <div class="image">
                        <img class="image__img" src="./images/java1.png" alt="Bricks">
                        <div class="image__overlay image__overlay--primary">
                            <p class="image__title">Java</p>
                            <div class="col-6 content-right">
                                <a class="btn btn-secondary" href="https://youtu.be/2Uthlmwd2bI">Tham gia ngay</a>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- EVENTS -->
    
    <!-- TESTIMONIALS -->
    <section id="testimonials" class="testimonials">
        <div class="container pt-5 pb-5">
            <h2 class="section-subtitle">Ph???n h???i</h2>
            <!-- <h1 class="section-title">Ph???n h???i</h1> -->
            <div class="owl-carousel owl-theme carousel-testimonials">
                <div class="item">
                    <div class="row">
                        <div class="col-md-6 testimonial mb-5">
                            <img class="transition" src="images/avateacher2.png" alt="testimonial detail">
                            <div class="testimonial-content">
                                <p>H??? tr??? n???m b??i b???ng c??c b??i t???p v?? v?? d??? t???t,</br> trang t???o c???m gi??c
                                nh??? nh??ng v?? tho???i m??i</p>
                                <h4>Nguy???n Ng???c Nhung</h4>
                                <h5>H???c vi??n</h5>
                            </div>
                        </div>
                        <div class="col-md-6 testimonial mb-5">
                            <img class="transition" src="images/avateacher2.png" alt="testimonial detail">
                            <div class="testimonial-content">
                                <p>Web d???y t??? c?? b???n ?????n n??ng cao kh?? ???n</br> nh??ng chuy???n trang qua l???i ch??a ???????c t???t</p>
                                <h4>Tr???n Ng???c B???o H??n</h4>
                                <h5>H???c vi??n</h5>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="row">
                        <div class="col-md-6 testimonial mb-5">
                            <img class="transition" src="images/avateacher1.png" alt="testimonial detail">
                            <div class="testimonial-content">
                                <p>C??c kh??a h???c ch??a ???n l???m, nhi???u l?? thuy???t</br> nh??ng c??n nhi???u b???t ti???n</p>
                                <h4>Tr???n Anh Khoa</h4>
                                <h5>H???c vi??n</h5>
                            </div>
                        </div>
                        <div class="col-md-6 testimonial mb-5">
                            <img class="transition" src="images/avateacher1.png" alt="testimonial detail">
                            <div class="testimonial-content">
                                <p>H??nh ???nh web g???i s??? h???ng th?? h???c nh??ng</br> c??n nhi???u ??i???u c???n c???i thi???n h??n</p>
                                <h4>Nguy???n Tu???n Ki???t</h4>
                                <h5>H???c vi??n</h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    
    <section id="contact" class="contact">
        <div class="container pt-5 pb-5">
            <h1 class="section-title">Contact Us</h1>
            <div class="container">
                <form> 
                    <div class="form-item">
                        <label for="">Name: </label><br>
                        <input type="text" name="name" id="name" placeholder="Name" required>
                    </div>
    
                    <div class="form-item">
                        <label for="">Phone: </label><br>
                        <input type="text" name="phone" id="phone" placeholder="Phone" required>
                    </div>
    
                    <div class="form-item">
                        <label for="">Email: </label><br>
                        <input type="text" name="email" id="mail" placeholder="Email" required>
                    </div>
    
                    <div class="form-item">
                        <label for="">Message: </label><br>
                        <input name="message" id="message" cols="30" rows="10" placeholder="Message" required>
                    </div>

                    <button class="contact-button">Send</button>
                </form>    
            </div>
        </div>
    </section>
</div>

    <?php
        include 'inc/footer.php'
    ?>

        <!-- jQuery -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
        <!-- Bootstrap JavaScript -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
        <!-- owl js-->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
        <!-- fancybox -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.js"></script>
        <!-- custom js -->
        <script src="{{url('js')}}/scripts.js"></script>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>