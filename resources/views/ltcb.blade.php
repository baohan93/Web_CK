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
                Bạn sẽ học được gì sau khi hoàn thành khóa học Lập trình C++ cơ bản ? 
            </h3>
        
            <div class="introduce-learn">
                <div class="introduce-learn_left">
                    <p>
                        <i class="fas fa-check" style="color: rgb(240, 124, 29); margin-right: 7px;"></i>
                        Hiểu cách sử dụng ngôn ngữ C++

                    </p>
                    <p>
                        <i class="fas fa-check" style="color: rgb(240, 124, 29); margin-right: 7px;"></i>
                        Hiểu rõ cách cấu trúc cơ bản của một ngôn ngữ lập trình

                    </p>
                    
                
                </div >
                <div class="introduce-learn-right">
                    <p>
                        <i class="fas fa-check" style="color: rgb(240, 124, 29); margin-right: 7px;"></i>
                        Làm quen với một số giải thuật cơ bản
                    </p>
                    <p>
                        <i class="fas fa-check" style="color: rgb(240, 124, 29); margin-right: 7px;"></i>
                        Vững kiến thức cơ bản
                    </p>
                    
                    
                </div>
            </div>
        </div>
    </div>

    <div class="contenner">
        <div class="left">
            <div id="video">
                <div>
                    <div id="b1_1" class="video_play">
                        <iframe src="https://drive.google.com/file/d/1qpgSihMhWLhbgsTpc3T6qaOhfM294DoL/preview" width="711" height="400" allow="autoplay"></iframe>              
                    </div>
                    <div id="b1_2" class="video_play">
                        <iframe width="711" height="400" src="https://www.youtube.com/embed/ILr_rU-lISk" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>                    
                    </div>
                    <div id="b2_2" class="video_play" > 
                        <iframe width="711" height="400" src="https://www.youtube.com/embed/q8UGqw6Cbnk" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    </div>
                    <div id="b3_2" class="video_play">
                        <iframe width="711" height="400" src="https://www.youtube.com/embed/i3nJyEt42Y8" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>                    
                    </div>
                    <div id="b4_2" class="video_play">
                        <iframe width="711" height="400" src="https://www.youtube.com/embed/Xh-gwtPCicU" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>                    
                    </div>
                    <div id="b5_2" class="video_play">
                        <iframe width="711" height="400" src="https://www.youtube.com/embed/T7i2DgLGiUo" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>                    
                    </div>
                    <div id="b6_2" class="video_play">
                        <iframe width="711" height="400" src="https://www.youtube.com/embed/QVfTsIEt5G4" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>                    
                    </div>
                    <div id="b7_2" class="video_play">
                        <iframe width="711" height="400" src="https://www.youtube.com/embed/RmTR7IK7c_A" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>                    
                    </div>
                    <div id="b8_2" class="video_play">
                        <iframe width="711" height="400" src="https://www.youtube.com/embed/4i--rEoaMn8" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>                    
                    </div>
                    <div id="b9_2" class="video_play">
                        <iframe width="711" height="400" src="https://www.youtube.com/embed/aL59MpOFMe0" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>                    
                    </div>
                    <div id="b10_2" class="video_play">
                        <iframe width="711" height="400" src="https://www.youtube.com/embed/cgKiUF98fLo" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>                
                    </div>
                    <div id="b11_2" class="video_play">
                        <iframe width="711" height="400" src="https://www.youtube.com/embed/gPzzRrQ5SfY" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    </div>
                </div>

            </div>
            
        </div>

        <div class="list-title">
            <li>
                <h4 style="font-size: 25px; margin-left: 10px; margin-bottom: 20px; border-bottom: 1px solid black;">
                    11 LESSON
                </h4>
            </li>
            <div class="root-title">
                <ul class="ls">
                    <li>
                        <div><button class="small-title" id ="b1_1" onclick="open_lesion(this)" href="#"><i class="far fa-file-pdf"></i> 1.1 Giáo trình lập trình C++ cơ bản</button></div>
                        <div><button class="small-title" id ="b1_2" onclick="open_lesion(this)" href="#"><i class="far fa-play-circle"></i> 1.2 Giới thiệu C++</button></div>
                        <div><button class="small-title" id ="b2_2" onclick="open_lesion(this)" href="#"><i class="far fa-play-circle"></i> 2. Xây dựng chương trình C++ đầu tiên</button></div>
                        <div><button class="small-title" id ="b3_2" onclick="open_lesion(this)" href="#"><i class="far fa-play-circle"></i> 3. Các biến C++</button></div>
                        <div><button class="small-title" id ="b4_2" onclick="open_lesion(this)" href="#"><i class="far fa-play-circle"></i> 4. Nhập, xuất C++</button></div>               
                        <div><button class="small-title" id ="b5_2" onclick="open_lesion(this)" href="#"><i class="far fa-play-circle"></i> 5. Khai báo và định nghĩa Hàm</button></div>
                        <div><button class="small-title" id ="b6_2" onclick="open_lesion(this)" href="#"><i class="far fa-play-circle"></i> 6. Câu điều kiện If</button></div>
                        <div><button class="small-title" id ="b7_2" onclick="open_lesion(this)" href="#"><i class="far fa-play-circle"></i> 7. Lệnh Goto</button></div>
                        <div><button class="small-title" id ="b8_2" onclick="open_lesion(this)" href="#"><i class="far fa-play-circle"></i> 8. Lệnh lặp While</button></div>
                        <div><button class="small-title" id ="b9_2" onclick="open_lesion(this)" href="#"><i class="far fa-play-circle"></i> 9. Lệnh lặp For</button></div>
                        <div><button class="small-title" id ="b10_2" onclick="open_lesion(this)" href="#"><i class="far fa-play-circle"></i> 10. Mảng 1 chiều</button></div>   
                        <div><button class="small-title" id ="b11_2" onclick="open_lesion(this)" href="#"><i class="far fa-play-circle"></i> 11. Mảng 2 chiều</button></div>

                    </li> 
                </ul>                   
            </div>
        </div>
    </div>
         
    

    <?php 
        include 'inc/footer.php'
    ?>