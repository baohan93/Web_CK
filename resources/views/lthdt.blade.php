<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Website School</title>

    <link rel="stylesheet" href="{{url('css')}}/lesson.css">
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

    <script src="{{url('js')}}/lesson.js"></script>

</head>
<body>   
    <?php
        // include 'inc/header-lesson.php'
    ?>

<nav class="navbar navbar-expand-sm sticky-top navbar-light bg-light">
        <div class="container">
        <a class="icon" href="{{url('web')}}"><i class="fas fa-arrow-left"></i></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbar-main" aria-controls="navbar-main" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbar-main">
                <ul class="navbar-nav ml-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" href="{{ route('web') }}">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('web') }}">Lesson</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('web') }}">Teachers</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('web') }}">All Courses</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('web') }}">Testimonials</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('web') }}">Contact</a>
                    </li>
                    <li class="nav-item">
                         <a class="nav-link" href="{{ route('logout') }}">Logout</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    
    <div id="Tong">

        <div class="introduce">
            
            <h3>
                Bạn sẽ học được gì sau khi hoàn thành khóa học Lập trình hướng đối tượng ? 
            </h3>
        
            <div class="introduce-learn">
                <div class="introduce-learn_left">
                    <p>
                        <i class="fas fa-check" style="color: rgb(240, 124, 29); margin-right: 7px;"></i>
                        Nền tảng cho hầu hết các design pattern hiện nay.
                    </p>
                    <!-- <p>
                        <i class="fas fa-check" style="color: rgb(240, 124, 29); margin-right: 7px;"></i>
                        Format chuyên nghiệp và có tính thẩm mỹ

                    </p>
                    <p>
                        <i class="fas fa-check" style="color: rgb(240, 124, 29); margin-right: 7px;"></i>
                        Thành thạo các công cụ soạn thảo của Word

                    </p>
                    <p>
                        <i class="fas fa-check" style="color: rgb(240, 124, 29); margin-right: 7px;"></i>
                        Và nhiều bài tập thực hành ứng dụng thực tế

                    </p>
                 -->
                </div >
                <div class="introduce-learn-right">
                    <p>
                        <i class="fas fa-check" style="color: rgb(240, 124, 29); margin-right: 7px;"></i>
                        Để trừu tượng hóa các đối tượng thực tế trong cuộc sống
                    </p>
                    <!-- <p>
                        <i class="fas fa-check" style="color: rgb(240, 124, 29); margin-right: 7px;"></i>
                        Tiết kiệm chi phí và thời gian so với học offline, thời gian học linh hoạt
                    </p>
                    <p>
                        <i class="fas fa-check" style="color: rgb(240, 124, 29); margin-right: 7px;"></i>
                        Cơ hội thăng tiến lên vị trí Quản lý, trưởng phòng...vì 90% quản lý trên thế giới đều sử dụng thành thạo VBA Excel
                    </p> -->
                    
                </div>
            </div>
        </div>
    </div>

    <div class="contenner">
        <div class="left">
            <div id="video">
                <div>
                    <div id="b1_1" class="video_play">
                        <iframe src="https://drive.google.com/file/d/1e_8cMzktviJz0P2JLqaimpcrwWZ1T8Hv/preview" width="711" height="400" allow="autoplay"></iframe>     
                    </div>
                    
                    <div id="b1_2" class="video_play">
                        <iframe width="711" height="400" src="https://www.youtube.com/embed/WQ9j2sPRstk" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>             
                    </div>
                    <div id="b2" class="video_play">
                        <iframe width="711" height="400" src="https://www.youtube.com/embed/pXcMdI3LVEE" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    </div>
                    <div id="b3" class="video_play">
                        <iframe width="711" height="400" src="https://www.youtube.com/embed/X9srqYW3jIM" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    </div>
                    <div id="b4" class="video_play">
                        <iframe width="711" height="400" src="https://www.youtube.com/embed/9p6oW56Zo3c" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>                  
                    </div>     
                    <div id="b5" class="video_play">
                        <iframe width="711" height="400" src="https://www.youtube.com/embed/tgxT3xRdfvU" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>            
                    </div>
                    <div id="b6" class="video_play">
                        <iframe width="711" height="400" src="https://www.youtube.com/embed/SfFAk5LEW0I" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    </div>
                    <div id="b7" class="video_play">
                        <iframe width="711" height="400" src="https://www.youtube.com/embed/nKNE6EFCasw" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>            
                    </div>
                </div>

            </div>
            
        </div>

        <div class="list-title">
            <li>
                <h4 style="font-size: 25px; margin-left: 10px; margin-bottom: 20px; border-bottom: 1px solid black;">
                    7 LESSON
                </h4>
            </li>
            <div class="root-title">
                <ul class="ls">
                    <li>
                        <div><button class="small-title" id ="b1_1" onclick="open_lesion(this)" href="#"><i class="far fa-file-pdf"></i> 1.1 Giáo trình lập trình hướng đối tượng</button></div>
                        <div><button class="small-title" id ="b1_2" onclick="open_lesion(this)" href="#"><i class="far fa-play-circle"></i> 1.2 Tổng quan</button></div>
                        <div><button class="small-title" id ="b2" onclick="open_lesion(this)" href="#"><i class="far fa-play-circle"></i> 2. Class</button></div>
                        <div><button class="small-title" id ="b3" onclick="open_lesion(this)" href="#"><i class="far fa-play-circle"></i> 3. Các vi phạm truy cập </button></div>
                        <div><button class="small-title" id ="b4" onclick="open_lesion(this)" href="#"><i class="far fa-play-circle"></i> 4. Từ khóa Static </button></div>
                        <div><button class="small-title" id ="b5" onclick="open_lesion(this)" href="#"><i class="far fa-play-circle"></i> 5. Tính kế thừa</button></div>
                        <div><button class="small-title" id ="b6" onclick="open_lesion(this)" href="#"><i class="far fa-play-circle"></i> 6. Đa hình</button></div>
                        <div><button class="small-title" id ="b7" onclick="open_lesion(this)" href="#"><i class="far fa-play-circle"></i> 7. Interface</button></div>
                        
                    </li> 
                </ul>                   
            </div>
        </div>
    </div>
         
    

    <?php 
        include 'inc/footer.php'
    ?>