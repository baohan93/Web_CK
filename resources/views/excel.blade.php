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
                B???n s??? h???c ???????c g?? sau khi ho??n th??nh kh??a h???c Excel?
            </h3>
        
            <div class="introduce-learn">
            <div class="introduce-learn_left">
                <p>
                    <i class="fas fa-check" style="color: rgb(240, 124, 29); margin-right: 7px;"></i>
                    Tr??? th??nh CHUY??N GIA EXCEL, c??ng c??? qu???n l?? t??i ch??nh h??ng ?????u th??? gi???i.
                </p>
                <p>
                    <i class="fas fa-check" style="color: rgb(240, 124, 29); margin-right: 7px;"></i>
                    T??? x??y d???ng M?? h??nh Qu???n l?? T??? ?????ng nh?? m?? h??nh th???ng k?? v?? ph??n t??ch hi???u qu??? d??? ??n...
                </p>
                <p>
                    <i class="fas fa-check" style="color: rgb(240, 124, 29); margin-right: 7px;"></i>
                    Ph??t tri???n t?? duy t??? ch???c d??? li???u v?? thi???t l???p b??o c??o
                </p>
                <p>
                    <i class="fas fa-check" style="color: rgb(240, 124, 29); margin-right: 7px;"></i>
                    T??ng 200% n??ng su???t c??ng vi???c nh??? t???o ra c??c ph???n m???m v?? h??? th???ng b??o c??o t??? ?????ng
                </p>
               
            </div >
            <div class="introduce-learn-right">
                <p>
                    <i class="fas fa-check" style="color: rgb(240, 124, 29); margin-right: 7px;"></i>
                    H??nh th??nh t?? duy l???p tr??nh v?? t??? vi???t ???????c code d??? d??ng
                </p>
                <p>
                    <i class="fas fa-check" style="color: rgb(240, 124, 29); margin-right: 7px;"></i>
                    Ti???t ki???m chi ph?? v?? th???i gian so v???i h???c offline, th???i gian h???c linh ho???t
                </p>
                <p>
                    <i class="fas fa-check" style="color: rgb(240, 124, 29); margin-right: 7px;"></i>
                    C?? h???i th??ng ti???n l??n v??? tr?? Qu???n l??, tr?????ng ph??ng...v?? 90% qu???n l?? tr??n th??? gi???i ?????u s??? d???ng th??nh th???o VBA Excel
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
                        <iframe width="711" height="400" src="https://drive.google.com/file/d/12mZgaOvMHj-5mahCuznou6dbsbOkYM8g/preview"></iframe>              
                    </div>
                    <div id="b1_2" class="video_play">
                        <iframe width="711" height="400" src="https://www.youtube.com/embed/m7ztoGoiv8c" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    </div>
                    <div id="b1_3"class="video_play">
                        <iframe src="https://h5p.org/h5p/embed/1262274" width="711" height="450" allow="geolocation ; microphone; camera ; midi; encrypted-media *" title="Right or Wrong ?"></iframe><script src="https://h5p.org/sites/all/modules/h5p/library/js/h5p-resizer.js" charset="UTF-8"></script>
                    </div>
                    <div id="b2_1" class="video_play">
                        <iframe width="711" height="400" src="https://drive.google.com/file/d/1_Xk4ouhinpoEf9cXj-knhhVOLlwDCSjf/preview"></iframe>              
                    </div>
                    <div id="b2_2" class="video_play" > 
                        <iframe width="711" height="400" src="https://www.youtube.com/embed/3PJ0USx7ju0" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    </div>
                    <div id="b2_3"class="video_play">
                        <iframe src="https://h5p.org/h5p/embed/1262252" width="711" height="450" allow="geolocation ; microphone; camera ; midi; encrypted-media *" title="Right or Wrong ?"></iframe><script src="https://h5p.org/sites/all/modules/h5p/library/js/h5p-resizer.js" charset="UTF-8"></script>
                    </div>
                    <div id="b3_1" class="video_play">
                        <iframe width="711" height="400" src="https://drive.google.com/file/d/1OPPHsQIoXrSR5GqOE_6Pfr7Ljqp9PIYC/preview"></iframe>              
                    </div>
                    <div id="b3_2" class="video_play">
                        <iframe width="711" height="400" src="https://www.youtube.com/embed/91CF1YSD33Q" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    </div>
                    <div id="b3_3"class="video_play">
                        <iframe src="https://h5p.org/h5p/embed/1262253" " width="711" height="450" allow="geolocation ; microphone; camera ; midi; encrypted-media *" title="Right or Wrong ?"></iframe><script src="https://h5p.org/sites/all/modules/h5p/library/js/h5p-resizer.js" charset="UTF-8"></script>
                    </div>
                    <div id="b4_1" class="video_play">
                        <iframe width="711" height="400" src="https://drive.google.com/file/d/1VRkwdbB4Rw18mCClEzx_rwLPvjcu6NPY/preview"></iframe>              
                    </div>
                    <div id="b4_2" class="video_play">
                        <iframe width="711" height="400" src="https://www.youtube.com/embed/eJQq7vOzky8" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>           
                    </div>
                    <div id="b4_3"class="video_play">
                        <iframe src="https://h5p.org/h5p/embed/1262254" width="711" height="450" allow="geolocation ; microphone; camera ; midi; encrypted-media *" title="Right or Wrong ?"></iframe><script src="https://h5p.org/sites/all/modules/h5p/library/js/h5p-resizer.js" charset="UTF-8"></script>
                    </div>
                    <div id="b5_1" class="video_play">
                        <iframe width="711" height="400" src="https://drive.google.com/file/d/1xPCy9zdH6ZzSZyxG3P6ZCOry_cIe82sG/preview"></iframe>              
                    </div>
                    <div id="b5_2" class="video_play">
                        <iframe width="711" height="400" src="https://www.youtube.com/embed/Sen-DGF-0OE" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    </div>
                    <div id="b5_3"class="video_play">
                        <iframe src="https://h5p.org/h5p/embed/1262262" width="711" height="450" allow="geolocation ; microphone; camera ; midi; encrypted-media *" title="Right or Wrong ?"></iframe><script src="https://h5p.org/sites/all/modules/h5p/library/js/h5p-resizer.js" charset="UTF-8"></script>
                    </div>
                    <div id="b6" class="video_play">
                        <iframe width="711" height="400" src="https://www.youtube.com/embed/BtswIDDQsQ4" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    </div>
                    <div id="b6_2"class="video_play">
                        <iframe src="https://h5p.org/h5p/embed/1262263" width="711" height="450" allow="geolocation ; microphone; camera ; midi; encrypted-media *" title="Right or Wrong ?"></iframe><script src="https://h5p.org/sites/all/modules/h5p/library/js/h5p-resizer.js" charset="UTF-8"></script>
                    </div>
                    <div id="b7" class="video_play">
                        <iframe width="711" height="400" src="https://www.youtube.com/embed/p-jJIBmtxJo" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    </div>
                    <div id="b7_2"class="video_play">
                        <iframe src="https://h5p.org/h5p/embed/1262265" width="711" height="450" allow="geolocation ; microphone; camera ; midi; encrypted-media *" title="Right or Wrong ?"></iframe><script src="https://h5p.org/sites/all/modules/h5p/library/js/h5p-resizer.js" charset="UTF-8"></script>
                    </div>
                    <div id="b8" class="video_play">
                        <iframe width="711" height="400" src="https://www.youtube.com/embed/tGPF9GyBF6I" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    </div>
                    <div id="b8_2"class="video_play">
                        <iframe src="https://h5p.org/h5p/embed/1262277" width="711" height="450" allow="geolocation ; microphone; camera ; midi; encrypted-media *" title="Right or Wrong ?"></iframe><script src="https://h5p.org/sites/all/modules/h5p/library/js/h5p-resizer.js" charset="UTF-8"></script>
                    </div>
                    <div id="b9" class="video_play">
                        <iframe width="711" height="400" src="https://www.youtube.com/embed/iiicOppPJ24" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    </div>
                    <div id="b9_2"class="video_play">
                        <iframe src="https://h5p.org/h5p/embed/1262268" width="711" height="450" allow="geolocation ; microphone; camera ; midi; encrypted-media *" title="Right or Wrong ?"></iframe><script src="https://h5p.org/sites/all/modules/h5p/library/js/h5p-resizer.js" charset="UTF-8"></script>
                    </div>
                    <div id="b10" class="video_play">
                        <iframe width="711" height="400" src="https://h5p.org/h5p/embed/1262269" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    </div>
                    <div id="b10_2"class="video_play">
                        <iframe src="https://h5p.org/h5p/embed/1262272" width="711" height="450" allow="geolocation ; microphone; camera ; midi; encrypted-media *" title="Right or Wrong ?"></iframe><script src="https://h5p.org/sites/all/modules/h5p/library/js/h5p-resizer.js" charset="UTF-8"></script>
                    </div>
                    <div id="b11" class="video_play">
                        <iframe width="711" height="400" src="https://www.youtube.com/embed/QgkCzElbdnk" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    </div>
                    <div id="b11_2"class="video_play">
                        <iframe src="https://h5p.org/h5p/embed/1262265" width="711" height="450" allow="geolocation ; microphone; camera ; midi; encrypted-media *" title="Right or Wrong ?"></iframe><script src="https://h5p.org/sites/all/modules/h5p/library/js/h5p-resizer.js" charset="UTF-8"></script>
                    </div>
                    <div id="b12" class="video_play">
                        <iframe width="711" height="400" src="https://www.youtube.com/embed/Nd91Abosmfw" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    </div>
                    <div id="b12_2"class="video_play">
                        <iframe src="https://h5p.org/h5p/embed/1262273" width="711" height="450" allow="geolocation ; microphone; camera ; midi; encrypted-media *" title="Right or Wrong ?"></iframe><script src="https://h5p.org/sites/all/modules/h5p/library/js/h5p-resizer.js" charset="UTF-8"></script>
                    </div>
                    
                </div>

            </div>
            
        </div>

        <div class="list-title">
            <li>
                <h4 style="font-size: 25px; margin-left: 10px; margin-bottom: 20px; border-bottom: 1px solid black;">
                    17 LESSION
                </h4>
            </li>
            <div class="root-title">
                <ul class="ls">
                    <li>
                        <div><button class="small-title" id ="b1_1" onclick="open_lesion(this)" href="#"><i class="far fa-file-pdf"></i> 1.1 T??m hi???u v??? Microsoft Excel</button></div>
                        <div><button class="small-title" id ="b1_2" onclick="open_lesion(this)" href="#"><i class="far fa-play-circle"></i>  1.2 Gi???i thi???u v??? Microsoft Excel</button></div>
                        <div><button class="small-title" id ="b1_3" onclick="open_lesion(this)" href="#"><i class="far fa-question-circle"></i> 1.3 C???ng c??? ki???n th???c</button></div>   
                        <div><button class="small-title" id ="b2_1" onclick="open_lesion(this)" href="#"><i class="far fa-file-pdf"></i> 2.1 Thi???t l???p c??ng th???c trong Excel </button></div>
                        <div><button class="small-title" id ="b2_2" onclick="open_lesion(this)" href="#"><i class="far fa-play-circle"></i> 2.2 C??ch thi???t l???p c??ng th???c trong Excel</button></div>
                        <div><button class="small-title" id ="b2_3" onclick="open_lesion(this)" href="#"><i class="far fa-question-circle"></i> 2.3 C???ng c??? ki???n th???c</button></div>   

                        <div><button class="small-title" id ="b3_1" onclick="open_lesion(this)" href="#"><i class="far fa-file-pdf"></i> 3.1 C??c h??m c?? b???n, ph??m t??t trong Excel</button></div>
                        <div><button class="small-title" id ="b3_2" onclick="open_lesion(this)" href="#"><i class="far fa-play-circle"></i> 3.2 S??? d???ng h??m trong Excel</button></div>
                        <div><button class="small-title" id ="b3_3" onclick="open_lesion(this)" href="#"><i class="far fa-question-circle"></i> 3.3 C???ng c??? ki???n th???c</button></div>   

                        <div><button class="small-title" id ="b4_1" onclick="open_lesion(this)" href="#"><i class="far fa-file-pdf"></i> 4.1 C??ch L??m Tr??n S???, AutoFill trong Excel</button></div>
                        <div><button class="small-title" id ="b4_2" onclick="open_lesion(this)" href="#"><i class="far fa-play-circle"></i> 4.2 C??c C??ch L??m Tr??n S??? - H??m ROUND</button></div>   
                        <div><button class="small-title" id ="b4_3" onclick="open_lesion(this)" href="#"><i class="far fa-question-circle"></i> 4.3 C???ng c??? ki???n th???c</button></div>   

                        <div><button class="small-title" id ="b5_1" onclick="open_lesion(this)" href="#"><i class="far fa-file-pdf"></i> 5.1 C??c ph??p to??n so s??nh, h??m ??i???u ki???n, h??m logic</button></div>
                        <div><button class="small-title" id ="b5_2" onclick="open_lesion(this)" href="#"><i class="far fa-play-circle"></i> 5.2 C??c ph??p to??n so s??nh, h??m ??i???u ki???n IF</button></div>
                        <div><button class="small-title" id ="b5_3" onclick="open_lesion(this)" href="#"><i class="far fa-question-circle"></i> 5.3 C???ng c??? ki???n th???c</button></div>   

                        <div><button class="small-title" id ="b6" onclick="open_lesion(this)" href="#"><i class="far fa-play-circle"></i> 6.1 C??c h??m Logic AND & OR</button></div>
                        <div><button class="small-title" id ="b6_2" onclick="open_lesion(this)" href="#"><i class="far fa-question-circle"></i> 6.2 C???ng c??? ki???n th???c</button></div>   

                        <div><button class="small-title" id ="b7" onclick="open_lesion(this)" href="#"><i class="far fa-play-circle"></i> 7.1 H??m Logic AND & OR k???t h???p h??m IF </button></div>
                        <div><button class="small-title" id ="b7_2" onclick="open_lesion(this)" href="#"><i class="far fa-question-circle"></i> 7.2 C???ng c??? ki???n th???c</button></div>   

                        <div><button class="small-title" id ="b8" onclick="open_lesion(this)" href="#"><i class="far fa-play-circle"></i> 8.1 ?????a ch??? tuy???t ?????i, t????ng ?????i</button></div> 
                        <div><button class="small-title" id ="b8_2" onclick="open_lesion(this)" href="#"><i class="far fa-question-circle"></i> 8.2 C???ng c??? ki???n th???c</button></div>   

                        <div><button class="small-title" id ="b9" onclick="open_lesion(this)" href="#"><i class="far fa-play-circle"></i> 9.1 H??m x???p h???ng - RANK</button></div>
                        <div><button class="small-title" id ="b9_2" onclick="open_lesion(this)" href="#"><i class="far fa-question-circle"></i> 9.2 C???ng c??? ki???n th???c</button></div>   

                        <div><button class="small-title" id ="b10" onclick="open_lesion(this)" href="#"><i class="far fa-play-circle"></i> 10.1 T??m ki???m v?? thay th???</button></div>
                        <div><button class="small-title" id ="b10_2" onclick="open_lesion(this)" href="#"><i class="far fa-question-circle"></i> 10.2 C???ng c??? ki???n th???c</button></div>   

                        <div><button class="small-title" id ="b11" onclick="open_lesion(this)" href="#"><i class="far fa-play-circle"></i> 11.1 S???p x???p d??? li???u - SORT</button></div>
                        <div><button class="small-title" id ="b11_2" onclick="open_lesion(this)" href="#"><i class="far fa-question-circle"></i> 11.2 C???ng c??? ki???n th???c</button></div>   

                        <div><button class="small-title" id ="b12" onclick="open_lesion(this)" href="#"><i class="far fa-play-circle"></i> 12.1 Tr??ch l???c d??? li???u - FILTER</button></div>
                        <div><button class="small-title" id ="b12_2" onclick="open_lesion(this)" href="#"><i class="far fa-question-circle"></i> 12.2 C???ng c??? ki???n th???c</button></div>   

                    </li> 
                </ul>                   

            </div>
 
        </div>
    </div>
         

    <?php 
        include 'inc/footer.php'
    ?>