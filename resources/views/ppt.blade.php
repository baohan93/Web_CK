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
                B???n s??? h???c ???????c g?? sau khi ho??n th??nh kh??a h???c PowerPoint?
            </h3>
        
            <div class="introduce-learn">
            <div class="introduce-learn_left">
                <p>
                    <i class="fas fa-check" style="color: rgb(240, 124, 29); margin-right: 7px;"></i>
                    Kh??ng ????n gi???n ch??? l?? h?????ng d???n b???n th??nh th???o c??ng c??? - Gitiho gi??p b???n x??y d???ng 04 t?? duy th???m m???.
                </p>
                <p>
                    <i class="fas fa-check" style="color: rgb(240, 124, 29); margin-right: 7px;"></i>
                    B??ng n??? s??ng t???o, hi???n th???c h??a m???i ?? t?????ng c???a b???n th??n qua c??c ???n ph???m truy???n th??ng, Infographic, Slide Powerpoint
                </p>
                <p>
                    <i class="fas fa-check" style="color: rgb(240, 124, 29); margin-right: 7px;"></i>
                    Gi???m 1/2 th???i gian khi thi???t k??? Slide.T??ng 200% l???i th??? c???nh tranh trong c??ng vi???c.
                </p>
                
               
            </div >
            <div class="introduce-learn-right">
                <p>
                    <i class="fas fa-check" style="color: rgb(240, 124, 29); margin-right: 7px;"></i>
                    B???t m?? b?? m???t quy tr??nh thi???t k??? Slide Powerpoint ?????c quy???n t???i Gitiho.
                </p>
                <p>
                    <i class="fas fa-check" style="color: rgb(240, 124, 29); margin-right: 7px;"></i>
                    T??? tay thi???t k??? Slide Powerpoint chuy??n nghi???p - Xem ???? m???t, nghe s?????ng tai.
                </p>
                <p>
                    <i class="fas fa-check" style="color: rgb(240, 124, 29); margin-right: 7px;"></i>
                    Hi???u t??m l?? v?? th??i quen ?????c c???a ng?????i nghe trong thi???t k??? Slide.
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
                        <iframe width="711" height="400" src="https://drive.google.com/file/d/1tpmY6QBIcseCgRkDJPiyzOwN8gTjltS4/preview"></iframe>              
                    </div>
                    <div id="b1_2" class="video_play">
                        <iframe width="711" height="400" src="https://www.youtube.com/embed/8WGpeF5InxY" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    </div>
                    <div id="b1_3"class="video_play">
                        <iframe src="https://h5p.org/h5p/embed/1262285" width="711" height="450" allow="geolocation ; microphone; camera ; midi; encrypted-media *" title="Right or Wrong ?"></iframe><script src="https://h5p.org/sites/all/modules/h5p/library/js/h5p-resizer.js" charset="UTF-8"></script>
                    </div>
                    <div id="b2_1" class="video_play">
                        <iframe width="711" height="400" src="https://drive.google.com/file/d/1Q-lFszjNQxq-TU9oKCIEayOV5Z-nsh95/preview"></iframe>              
                    </div>
                    <div id="b2_2" class="video_play" > 
                        <iframe width="711" height="400" src="https://www.youtube.com/embed/3RGeQ8V-r04" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    </div>
                    <div id="b2_3"class="video_play">
                        <iframe src="https://h5p.org/h5p/embed/1262289" width="711" height="450" allow="geolocation ; microphone; camera ; midi; encrypted-media *" title="Right or Wrong ?"></iframe><script src="https://h5p.org/sites/all/modules/h5p/library/js/h5p-resizer.js" charset="UTF-8"></script>
                    </div>
                    <div id="b3_1" class="video_play">
                        <iframe width="711" height="400" src="https://drive.google.com/file/d/1hxF-W65O_T6ze2Kg--Yxtch3TkjGT96z/preview"></iframe>              
                    </div>
                    <div id="b3_2" class="video_play">
                        <iframe width="711" height="400" src="https://www.youtube.com/embed/EPytnnrehl8" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    </div>
                    <div id="b3_3"class="video_play">
                        <iframe src="https://h5p.org/h5p/embed/1262290" width="711" height="450" allow="geolocation ; microphone; camera ; midi; encrypted-media *" title="Right or Wrong ?"></iframe><script src="https://h5p.org/sites/all/modules/h5p/library/js/h5p-resizer.js" charset="UTF-8"></script>
                    </div>
                    <div id="b4_1" class="video_play">
                        <iframe width="711" height="400" src="https://drive.google.com/file/d/1FCF5Xka4PO4ih4eVveMOp1WJIuxG7WX4/preview"></iframe>              
                    </div>
                    <div id="b4_2" class="video_play">
                        <iframe width="711" height="400" src="https://www.youtube.com/embed/gsB0RX0i2xs" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    </div>
                    <div id="b4_3"class="video_play">
                        <iframe src="https://h5p.org/h5p/embed/1262291" width="711" height="450" allow="geolocation ; microphone; camera ; midi; encrypted-media *" title="Right or Wrong ?"></iframe><script src="https://h5p.org/sites/all/modules/h5p/library/js/h5p-resizer.js" charset="UTF-8"></script>
                    </div>
                    <div id="b5_1" class="video_play">
                        <iframe width="711" height="400" src="https://drive.google.com/file/d/1SWj6rOMPoFDjYsFLP1UYLiMlcQ5NvZLq/preview"></iframe>              
                    </div>
                    <div id="b5_2" class="video_play">
                        <iframe width="711" height="400" src="https://www.youtube.com/embed/K2kySkOr66o" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    </div>
                    <div id="b5_3"class="video_play">
                        <iframe src="https://h5p.org/h5p/embed/1262292" width="711" height="450" allow="geolocation ; microphone; camera ; midi; encrypted-media *" title="Right or Wrong ?"></iframe><script src="https://h5p.org/sites/all/modules/h5p/library/js/h5p-resizer.js" charset="UTF-8"></script>
                    </div>
                    <div id="b6" class="video_play">
                        <iframe width="711" height="400" src="https://www.youtube.com/embed/tWE5TynZq5I" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    </div>
                    <div id="b6_2"class="video_play">
                        <iframe src="https://h5p.org/h5p/embed/1262294" width="711" height="450" allow="geolocation ; microphone; camera ; midi; encrypted-media *" title="Right or Wrong ?"></iframe><script src="https://h5p.org/sites/all/modules/h5p/library/js/h5p-resizer.js" charset="UTF-8"></script>
                    </div>
                    <div id="b7" class="video_play">
                        <iframe width="711" height="400" src="https://www.youtube.com/embed/PyTYCmTe7mo" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    </div>
                    <div id="b7_2"class="video_play">
                        <iframe src="https://h5p.org/h5p/embed/1262295" width="711" height="450" allow="geolocation ; microphone; camera ; midi; encrypted-media *" title="Right or Wrong ?"></iframe><script src="https://h5p.org/sites/all/modules/h5p/library/js/h5p-resizer.js" charset="UTF-8"></script>
                    </div>
                    <div id="b8" class="video_play">
                        <iframe width="711" height="400" src="https://www.youtube.com/embed/3-izSGfz6ek" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    </div>
                    <div id="b8_2"class="video_play">
                        <iframe src="https://h5p.org/h5p/embed/1262296" width="711" height="450" allow="geolocation ; microphone; camera ; midi; encrypted-media *" title="Right or Wrong ?"></iframe><script src="https://h5p.org/sites/all/modules/h5p/library/js/h5p-resizer.js" charset="UTF-8"></script>
                    </div>
                    <div id="b9" class="video_play">
                        <iframe width="711" height="400" src="https://www.youtube.com/embed/7HafApI-UFY" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    </div>
                    <div id="b9_2"class="video_play">
                        <iframe src="https://h5p.org/h5p/embed/1262298" width="711" height="450" allow="geolocation ; microphone; camera ; midi; encrypted-media *" title="Right or Wrong ?"></iframe><script src="https://h5p.org/sites/all/modules/h5p/library/js/h5p-resizer.js" charset="UTF-8"></script>
                    </div>
                    <div id="b10" class="video_play">
                        <iframe width="711" height="400" src="https://www.youtube.com/embed/LfSV9EAXttI" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    </div>
                    <div id="b10_2"class="video_play">
                        <iframe src="https://h5p.org/h5p/embed/1262300" width="711" height="450" allow="geolocation ; microphone; camera ; midi; encrypted-media *" title="Right or Wrong ?"></iframe><script src="https://h5p.org/sites/all/modules/h5p/library/js/h5p-resizer.js" charset="UTF-8"></script>
                    </div>
                </div>

            </div>
            
        </div>

        <div class="list-title">
            <li>
                <h4 style="font-size: 25px; margin-left: 10px; margin-bottom: 20px; border-bottom: 1px solid black;">
                    15 LESSON
                </h4>
            </li>
            <div class="root-title">
                <ul class="ls">
                    <li>
                        <div><button class="small-title" id ="b1_1" onclick="open_lesion(this)" href="#"><i class="far fa-file-pdf"></i> 1.1 Gi???i thi???u Microsoft PowerPoint</button></div>
                        <div><button class="small-title" id ="b1_2" onclick="open_lesion(this)" href="#"><i class="far fa-play-circle"></i> 1.2 Gi???i thi???u Microsoft PowerPoint</button></div>
                        <div><button class="small-title" id ="b1_3" onclick="open_lesion(this)" href="#"><i class="far fa-question-circle"></i> 1.3 C???ng c??? ki???n th???c</button></div>   

                        <div><button class="small-title" id ="b2_1" onclick="open_lesion(this)" href="#"><i class="far fa-file-pdf"></i> 2.1 L??m vi???c v???i Quick Access Toolbar, giao di???n trong PowerPoint</button></div>
                        <div><button class="small-title" id ="b2_2" onclick="open_lesion(this)" href="#"><i class="far fa-play-circle"></i> 2.2 Gi???i thi???u giao di???n l??m vi???c PowerPoint</button></div>
                        <div><button class="small-title" id ="b2_3" onclick="open_lesion(this)" href="#"><i class="far fa-question-circle"></i> 2.3 C???ng c??? ki???n th???c</button></div>   

                        <div><button class="small-title" id ="b3_1" onclick="open_lesion(this)" href="#"><i class="far fa-file-pdf"></i> 3.1 H?????ng d???n s??? d???ng Ribbon, ghi ch??, ho???t ???nh trong PowerPoint</button></div>
                        <div><button class="small-title" id ="b3_2" onclick="open_lesion(this)" href="#"><i class="far fa-play-circle"></i> 3.2 H?????ng d???n s??? d???ng Ribbon</button></div>
                        <div><button class="small-title" id ="b3_3" onclick="open_lesion(this)" href="#"><i class="far fa-question-circle"></i> 3.3 C???ng c??? ki???n th???c</button></div>   

                        <div><button class="small-title" id ="b4_1" onclick="open_lesion(this)" href="#"><i class="far fa-file-pdf"></i> 4.1 S??? d???ng thanh c??ng c??? truy c???p nhanh</button></div>
                        <div><button class="small-title" id ="b4_2" onclick="open_lesion(this)" href="#"><i class="far fa-play-circle"></i> 4.2 S??? d???ng thanh c??ng c??? truy c???p nhanh</button></div>  
                        <div><button class="small-title" id ="b4_3" onclick="open_lesion(this)" href="#"><i class="far fa-question-circle"></i> 4.3 C???ng c??? ki???n th???c</button></div>   

                        <div><button class="small-title" id ="b5_1" onclick="open_lesion(this)" href="#"><i class="far fa-file-pdf"></i> 5.1 T???o b???n tr??nh chi???u m???i, template trong PowerPoint</button></div>
                        <div><button class="small-title" id ="b5_2" onclick="open_lesion(this)" href="#"><i class="far fa-play-circle"></i> 5.2 H?????ng d???n t???o b???n tr??nh chi???u m???i</button></div>
                        <div><button class="small-title" id ="b5_3" onclick="open_lesion(this)" href="#"><i class="far fa-question-circle"></i> 5.3 C???ng c??? ki???n th???c</button></div>   

                        <div><button class="small-title" id ="b6" onclick="open_lesion(this)" href="#"><i class="far fa-play-circle"></i> 6.1 L??u tr???, ????ng, m??? t???p tin tr??nh chi???u</button></div>
                        <div><button class="small-title" id ="b6_2" onclick="open_lesion(this)" href="#"><i class="far fa-question-circle"></i> 6.2 C???ng c??? ki???n th???c</button></div>   

                        <div><button class="small-title" id ="b7" onclick="open_lesion(this)" href="#"><i class="far fa-play-circle"></i> 7.1 C??c ch??? ????? xem slide tr??nh chi???u</button></div>
                        <div><button class="small-title" id ="b7_2" onclick="open_lesion(this)" href="#"><i class="far fa-question-circle"></i> 7.2 C???ng c??? ki???n th???c</button></div>   

                        <div><button class="small-title" id ="b8" onclick="open_lesion(this)" href="#"><i class="far fa-play-circle"></i> 8.1 Thay ?????i c??c ch??? ????? trong PowerPoint</button></div> 
                        <div><button class="small-title" id ="b8_2" onclick="open_lesion(this)" href="#"><i class="far fa-question-circle"></i> 8.2 C???ng c??? ki???n th???c</button></div>   

                        <div><button class="small-title" id ="b9" onclick="open_lesion(this)" href="#"><i class="far fa-play-circle"></i> 9.1 T???o v?? qu???n l?? c??c nh??m Slide</button></div>
                        <div><button class="small-title" id ="b9_2" onclick="open_lesion(this)" href="#"><i class="far fa-question-circle"></i> 9.2 C???ng c??? ki???n th???c</button></div>   

                        <div><button class="small-title" id ="b10" onclick="open_lesion(this)" href="#"><i class="far fa-play-circle"></i> 10.1 Th??m, ch??n, di chuy???n, x??a Slide</button></div>
                        <div><button class="small-title" id ="b10_2" onclick="open_lesion(this)" href="#"><i class="far fa-question-circle"></i> 10.2 C???ng c??? ki???n th???c</button></div>   

                    </li> 
                </ul>                   

            </div>
 
        </div>
    </div>

    <?php 
        include 'inc/footer.php'
    ?>