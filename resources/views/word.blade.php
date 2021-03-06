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
                B???n s??? h???c ???????c g?? sau khi ho??n th??nh kh??a h???c Word ? 
            </h3>
        
            <div class="introduce-learn">
                <div class="introduce-learn_left">
                    <p>
                        <i class="fas fa-check" style="color: rgb(240, 124, 29); margin-right: 7px;"></i>
                        K??? n??ng so???n th???o nhanh

                    </p>
                    <p>
                        <i class="fas fa-check" style="color: rgb(240, 124, 29); margin-right: 7px;"></i>
                        Format chuy??n nghi???p v?? c?? t??nh th???m m???

                    </p>
                    <p>
                        <i class="fas fa-check" style="color: rgb(240, 124, 29); margin-right: 7px;"></i>
                        Th??nh th???o c??c c??ng c??? so???n th???o c???a Word

                    </p>
                    <p>
                        <i class="fas fa-check" style="color: rgb(240, 124, 29); margin-right: 7px;"></i>
                        V?? nhi???u b??i t???p th???c h??nh ???ng d???ng th???c t???

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
                        <iframe width="711" height="400" src="https://drive.google.com/file/d/1zy8PMvk68EOQvj_xsiNRKXCZHxPJW_qi/preview"></iframe>              
                    </div>
                    
                    <div id="b1_2" class="video_play">
                        <iframe width="711" height="400" src="https://www.youtube.com/embed/cpaW0ugp_fM" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>                    
                    </div>
                    <div id="b1_3"class="video_play">
                        <iframe src="https://h5p.org/h5p/embed/1261833" width="711" height="450" allow="geolocation ; microphone; camera ; midi; encrypted-media *" title="Right or Wrong ?"></iframe><script src="https://h5p.org/sites/all/modules/h5p/library/js/h5p-resizer.js" charset="UTF-8"></script>
                   </div>
                    <div id="b2_1" class="video_play">
                        <iframe src="https://drive.google.com/file/d/1b_YLKR7bVMa91G7r4Tu4rvR8v3dUZL5R/preview" width="711" height="400" allow="autoplay"></iframe>                    
                    </div>
                    
                    <div id="b2_2" class="video_play" > 
                        <iframe width="711" height="400" src="https://www.youtube.com/embed/2AcNOIO_0UY" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    </div>
                    <div id="b2_3"class="video_play">
                    <iframe src="https://h5p.org/h5p/embed/1262231" width="711" height="450" allow="geolocation ; microphone; camera ; midi; encrypted-media *" title="Right or Wrong ?"></iframe><script src="https://h5p.org/sites/all/modules/h5p/library/js/h5p-resizer.js" charset="UTF-8"></script>
                        <!-- <iframe src="https://h5p.org/h5p/embed/1261974" width="500" height="450" allow="geolocation ; microphone; camera ; midi; encrypted-media *" title="Right or Wrong ?"></iframe><script src="https://h5p.org/sites/all/modules/h5p/library/js/h5p-resizer.js" charset="UTF-8"></script> -->
                    </div>
                    <div id="b3_1" class="video_play">
                        <iframe src="https://drive.google.com/file/d/1KFEmj7QDfVJbEQ4gW1jwB6pcCviYhB7j/preview" width="711" height="400" allow="autoplay"></iframe>                    
                    </div>

                    <div id="b3_2" class="video_play">
                        <iframe width="711" height="400" src="https://www.youtube.com/embed/apGvsZAEQJA" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>                    
                    </div>
                    <div id="b3_3"class="video_play">
                        <iframe src="https://h5p.org/h5p/embed/1262232" width="711" height="450" allow="geolocation ; microphone; camera ; midi; encrypted-media *" title="Right or Wrong ?"></iframe><script src="https://h5p.org/sites/all/modules/h5p/library/js/h5p-resizer.js" charset="UTF-8"></script>
                    </div>

                    <div id="b4_1" class="video_play">
                        <iframe src="https://drive.google.com/file/d/1U_2CL-khtj798VIIgCL4L2k-Y0eWa2dy/preview" width="711" height="400" allow="autoplay"></iframe>                    
                    </div>     

                    <div id="b4_2" class="video_play">
                        <iframe width="711" height="400" src="https://www.youtube.com/embed/brJCf0ym3I0" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>                    
                    </div>
                    <div id="b4_3"class="video_play">
                        <iframe src="https://h5p.org/h5p/embed/1262235" width="711" height="450" allow="geolocation ; microphone; camera ; midi; encrypted-media *" title="Right or Wrong ?"></iframe><script src="https://h5p.org/sites/all/modules/h5p/library/js/h5p-resizer.js" charset="UTF-8"></script>
                    </div>
                    <div id="b5_1" class="video_play">
                        <iframe src="https://drive.google.com/file/d/1zDyVlWyIqfHoNkWmS5jBa5LimIs9sjQd/preview" width="711" height="400" allow="autoplay"></iframe>                    
                    </div> 
                    <div id="b5_2" class="video_play">
                        <iframe width="711" height="400" src="https://www.youtube.com/embed/TuTHlotRjzc" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>                    
                    </div>
                    <div id="b5_3"class="video_play">
                        <iframe src="https://h5p.org/h5p/embed/1262241" width="711" height="450" allow="geolocation ; microphone; camera ; midi; encrypted-media *" title="Right or Wrong ?"></iframe><script src="https://h5p.org/sites/all/modules/h5p/library/js/h5p-resizer.js" charset="UTF-8"></script>
                    </div>
                    <div id="b6_1" class="video_play">
                        <iframe src="https://drive.google.com/file/d/1CMMEu7VIWDSuW3UOiZVLIUD38bg0Q1qE/preview" width="711" height="400" allow="autoplay"></iframe>                    
                    </div> 
                    <div id="b6_2" class="video_play">
                        <iframe width="711" height="400" src="https://www.youtube.com/embed/xhr3QEum2zY" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>                    
                    </div>
                    <div id="b6_3"class="video_play">
                        <iframe src="https://h5p.org/h5p/embed/1262242" width="711" height="450" allow="geolocation ; microphone; camera ; midi; encrypted-media *" title="Right or Wrong ?"></iframe><script src="https://h5p.org/sites/all/modules/h5p/library/js/h5p-resizer.js" charset="UTF-8"></script>
                    </div>
                    <div id="b7_1" class="video_play">
                        <iframe src="https://drive.google.com/file/d/1o0eDje0JYo5_KEUUF4MUV1rdXk-Lr1B7/preview" width="711" height="400" allow="autoplay"></iframe>                    
                    </div> 
                    <div id="b7_2" class="video_play">
                        <iframe width="711" height="400" src="https://www.youtube.com/embed/R6-gY8cIbuc" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>                    
                    </div>
                    <div id="b7_3"class="video_play">
                        <iframe src="https://h5p.org/h5p/embed/1262244" width="711" height="450" allow="geolocation ; microphone; camera ; midi; encrypted-media *" title="Right or Wrong ?"></iframe><script src="https://h5p.org/sites/all/modules/h5p/library/js/h5p-resizer.js" charset="UTF-8"></script>
                    </div>
                    <div id="b8_1" class="video_play">
                        <iframe src="https://drive.google.com/file/d/1C9hhQBTTmhkLkhUWpKWn-8R5J3_rRBK5/preview" width="711" height="400" allow="autoplay"></iframe>                    
                    </div> 
                    <div id="b8_2" class="video_play">
                        <iframe width="711" height="400" src="https://www.youtube.com/embed/pUQfJgN8vPo" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>                    
                    </div>
                    <div id="b8_3"class="video_play">
                        <iframe src="https://h5p.org/h5p/embed/1262247" width="711" height="450" allow="geolocation ; microphone; camera ; midi; encrypted-media *" title="Right or Wrong ?"></iframe><script src="https://h5p.org/sites/all/modules/h5p/library/js/h5p-resizer.js" charset="UTF-8"></script>
                    </div>
                    <div id="b9_1" class="video_play">
                        <iframe width="711" height="400" src="https://www.youtube.com/embed/Rrv_RvxI2fY" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>                    
                    </div>
                    <div id="b9_2"class="video_play">
                        <iframe src="https://h5p.org/h5p/embed/1262242" width="711" height="450" allow="geolocation ; microphone; camera ; midi; encrypted-media *" title="Right or Wrong ?"></iframe><script src="https://h5p.org/sites/all/modules/h5p/library/js/h5p-resizer.js" charset="UTF-8"></script>
                    </div>
                    <div id="b10_1" class="video_play">
                        <iframe width="711" height="400" src="https://www.youtube.com/embed/j-bXwbQkhBU" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>                    
                    </div>
                    <div id="b10_2" class="video_play">
                        <iframe src="https://h5p.org/h5p/embed/1262278" width="711" height="450" allow="geolocation ; microphone; camera ; midi; encrypted-media *" title="Right or Wrong ?"></iframe><script src="https://h5p.org/sites/all/modules/h5p/library/js/h5p-resizer.js" charset="UTF-8"></script>
                    </div>
                   
                </div>

            </div>
            
        </div>

        <div class="list-title">
            <li>
                <h4 style="font-size: 25px; margin-left: 10px; margin-bottom: 20px; border-bottom: 1px solid black;">
                    18 LESSON
                </h4>
            </li>
            <div class="root-title">
                <ul class="ls">
                    <li>
                        <div><button class="small-title" id ="b1_1" onclick="open_lesion(this)" href="#"><i class="far fa-file-pdf"></i> 1.1 M???t s??? thao t??c c?? b???n trong Word</button></div>
                        <div><button class="small-title" id ="b1_2" onclick="open_lesion(this)" href="#"><i class="far fa-play-circle"></i> 1.2 M???t s??? thao t??c c?? b???n trong Word</button></div>
                        <div><button class="small-title" id ="b1_3" onclick="open_lesion(this)" href="#"><i class="far fa-question-circle"></i> 1.3 C???ng c??? ki???n th???c</button></div>   
                        <div><button class="small-title" id ="b2_1" onclick="open_lesion(this)" href="#"><i class="far fa-file-pdf"></i> 2.1 M???t s??? ki???n th???c c?? b???n v??? Word</button></div>
                        <div><button class="small-title" id ="b2_2" onclick="open_lesion(this)" href="#"><i class="far fa-play-circle"></i> 2.2 M???t s??? ki???n th???c c?? b???n v??? Word</button></div>
                        <div><button class="small-title" id ="b2_3" onclick="open_lesion(this)" href="#"><i class="far fa-question-circle"></i> 2.3 C???ng c??? ki???n th???c</button></div>
                        <div><button class="small-title" id ="b3_1" onclick="open_lesion(this)" href="#"><i class="far fa-file-pdf"></i> 3.1 C??c th??nh ph???n v?? t??y ch???nh giao di???n trong Word</button></div>
                        <div><button class="small-title" id ="b3_2" onclick="open_lesion(this)" href="#"><i class="far fa-play-circle"></i> 3.2 C??c th??nh ph???n v?? t??y ch???nh giao di???n trong Word</button></div>
                        <div><button class="small-title" id ="b3_3" onclick="open_lesion(this)" href="#"><i class="far fa-question-circle"></i> 3.3 C???ng c??? ki???n th???c</button></div>
                        <div><button class="small-title" id ="b4_1" onclick="open_lesion(this)" href="#"><i class="far fa-file-pdf"></i> 4.1 B??? g?? Ti???ng Vi???t v?? c??i ?????t Font ch??? trong Word</button></div>
                        <div><button class="small-title" id ="b4_2" onclick="open_lesion(this)" href="#"><i class="far fa-play-circle"></i> 4.2 B??? g?? Ti???ng Vi???t v?? c??i ?????t Font ch??? trong Word</button></div>               
                        <div><button class="small-title" id ="b4_3" onclick="open_lesion(this)" href="#"><i class="far fa-question-circle"></i> 4.3 C???ng c??? ki???n th???c</button></div>
                        <div><button class="small-title" id ="b5_1" onclick="open_lesion(this)" href="#"><i class="far fa-file-pdf"></i> 5.1 C??c b?????c c?? b???n tr?????c khi so???n th???o v??n b???n</button></div>
                        <div><button class="small-title" id ="b5_2" onclick="open_lesion(this)" href="#"><i class="far fa-play-circle"></i> 5.2 C??c b?????c c?? b???n tr?????c khi so???n th???o v??n b???n</button></div>
                        <div><button class="small-title" id ="b5_3" onclick="open_lesion(this)" href="#"><i class="far fa-question-circle"></i> 5.3 C???ng c??? ki???n th???c</button></div>
                        <div><button class="small-title" id ="b6_1" onclick="open_lesion(this)" href="#"><i class="far fa-file-pdf"></i> 6.1 S??? d???ng ??i???m d???ng Tab trong so???n th???o v??n b???n</button></div>
                        <div><button class="small-title" id ="b6_2" onclick="open_lesion(this)" href="#"><i class="far fa-play-circle"></i> 6.2 S??? d???ng ??i???m d???ng Tab trong so???n th???o v??n b???n</button></div>
                        <div><button class="small-title" id ="b6_3" onclick="open_lesion(this)" href="#"><i class="far fa-question-circle"></i> 6.3 C???ng c??? ki???n th???c</button></div>
                        <div><button class="small-title" id ="b7_1" onclick="open_lesion(this)" href="#"><i class="far fa-file-pdf"></i> 7.1 T???o v?? c??n ch???nh B???ng trog Word</button></div>
                        <div><button class="small-title" id ="b7_2" onclick="open_lesion(this)" href="#"><i class="far fa-play-circle"></i> 7.2 T???o v?? c??n ch???nh B???ng trog Word</button></div>
                        <div><button class="small-title" id ="b7_3" onclick="open_lesion(this)" href="#"><i class="far fa-question-circle"></i> 7.3 C???ng c??? ki???n th???c</button></div>
                        <div><button class="small-title" id ="b8_1" onclick="open_lesion(this)" href="#"><i class="far fa-file-pdf"></i> 8.1 Ch??n bi???u t?????ng Symbol, k?? hi???u Bullets v?? Numbering</button></div>                
                        <div><button class="small-title" id ="b8_2" onclick="open_lesion(this)" href="#"><i class="far fa-play-circle"></i> 8.2 Ch??n bi???u t?????ng Symbol, k?? hi???u Bullets v?? Numbering</button></div>
                        <div><button class="small-title" id ="b8_3" onclick="open_lesion(this)" href="#"><i class="far fa-question-circle"></i> 8.3 C???ng c??? ki???n th???c</button></div>
                        <div><button class="small-title" id ="b9_1" onclick="open_lesion(this)" href="#"><i class="far fa-play-circle"></i> 9.1 Ch??n v?? x??? l?? h??nh ???nh, h??nh d???ng trong Word</button></div>
                        <div><button class="small-title" id ="b9_2" onclick="open_lesion(this)" href="#"><i class="far fa-question-circle"></i> 9.2 C???ng c??? ki???n th???c</button></div>
                        <div><button class="small-title" id ="b10_1" onclick="open_lesion(this)" href="#"><i class="far fa-play-circle"></i> 10.1 Nh???ng m???o tuy???t v???i ?????n t??? Word, m?? kh??ng ph???i ai c??ng bi???t</button></div>
                        <div><button class="small-title" id ="b10_2" onclick="open_lesion(this)" href="#"><i class="far fa-question-circle"></i> 10.2 C???ng c??? ki???n th???c</button></div>   

                    </li> 
                </ul>                   
            </div>
        </div>
    </div>
         
    

    <?php 
        include 'inc/footer.php'
    ?>