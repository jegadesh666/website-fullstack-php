<?php

session_start();
if(isset($_GET['name'])){
    
    $name = $_GET['name'];

}else if(isset($_GET['name1'])){

    $guest_name = $_GET['name1'];
    
}else{
    header("location:../index.php");

}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="home.css">
    <link rel="stylesheet" href="../lib/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />

    <link rel="stylesheet" href="../lib/icons/css/all.css">
</head>

<body>

    <section class="page-top">
        <div class="container">
            <h4 class="page-top-heading text-center">welcome <?php 
            if(isset($name)){
                echo '<b style="color:yellow;">'.$name.'</b>';
            }else if(isset($guest_name)){
                echo '<b style="color:yellow;">'.$guest_name.'</b>';
            }else{
                echo 'Unkown user';
            }
            
            
            ?> </h4>
        </div>

    </section>

    <!---------------------------------------------Navigation bar----------------------------------------------------->
    <section class="main-nav">




        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <a class="navbar-brand" href="#">VoiceCode.online</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <i class="fas fa-bars"></i>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#aboutus-section-id">About us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#course-section-id">Courses</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="#recruter-section-id">Recruiters</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#testimonial-section-id">Student Review</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#contactus-section-id">Contact us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="../logout/logout.php?logout=confirm">Logout</a>
                    </li>
                </ul>
            </div>
        </nav>

    </section>

    <!-------------------------------------------Main section-------------------------------------------------->


    <section class="main-section">
        <div class="container">
            <div class="row">
                <div class="col-md-6 main-flex">
                    <div class="main-section-text">
                        <h3 class="main-section-heading"><b>No.1</b> Training Institute in <b>ASIA</b></h3>

                        <img src="../Assets/Brain-Learning-Transparent.png" class="main-section-img img-fluid"
                            alt="Brain learning image">
                    </div>
                </div>
                <div class="col-md-6 main-flex">
                    <div class="blockquote">
                        <blockquote class="blockquote-tag-1">
                            <p class="blockquote-paragraph-1">
                                “Whether you want to uncover the secrets of the universe, or you just want to pursue a
                                career in the 21st century, basic computer programming is an essential skill to learn.”
                            </p>
                            <h5 class="blockquote-paragraph-1-owner">Stephen Hawking</h5>
                        </blockquote>

                        <blockquote class="blockquote-tag-2">
                            <p class="blockquote-paragraph-2">
                                “Everybody should learn to program a computer, because it teaches you how to think.”
                            </p>
                            <h5 class="blockquote-paragraph-2-owner">Steve Jobs</h5>
                        </blockquote>
                    </div>

                </div>

            </div>

            <div class="custom-shape-divider-bottom-1622633600">
                <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 180"
                    preserveAspectRatio="none">
                    <path
                        d="M321.39,56.44c58-10.79,114.16-30.13,172-41.86,82.39-16.72,168.19-17.73,250.45-.39C823.78,31,906.67,72,985.66,92.83c70.05,18.48,146.53,26.09,214.34,3V0H0V27.35A600.21,600.21,0,0,0,321.39,56.44Z"
                        class="shape-fill"></path>
                </svg>
            </div>

        </div>


    </section>


    <!---------------------------------------------About us section-------------------------------------------------->

    <section class="aboutus-section" id="aboutus-section-id" data-aos="fade-right">

        <div class="container">
            <h1 class="text-center aboutus-section-main mt-3">ABOUT US</h1>
            <div class="row mt-3">
                <div class="col-md-6 mt-2 aboutus-section-col1">
                    <h3 class="aboutus-section-head1 text-center">WHO WE ARE?</h3>
                    <div class="aboutus-section-img1 text-center">
                        <img src="../Assets/aboutus-img.jpg" class="img-fluid" width="200px" height="200px"
                            alt="Aboutus image">
                    </div>
                    <ul>
                        <li>
                            <p>Voicecode.online stands as the No.1 Training Institute in ASIA</p>
                        </li>
                        <li>
                            <p>Voicecode.online is a certified(ISO 9001:2005) Which is accredit in the software
                                development
                            </p>
                        </li>
                        <li>
                            <p>We provide Training web design and development,Java,Python,Ethical hackinh,Blockchain and
                                many more</p>
                        </li>
                        <li>

                            <p>We train students and support them in achieving a niche in the IT industry</p>
                        </li>


                    </ul>




                </div>
                <div class="col-md-6 mt-2 aboutus-section-col2">
                    <h3 class="aboutus-section-head2 text-center mt-2">WHY WE ARE?</h3>
                    <div class="aboutus-section-img2 text-center">
                        <img src="../Assets/aboutus-img3.jpg" class="img-fluid" width="250px" height="250px"
                            alt="Aboutus image">
                    </div>
                    <ul class="mt-4">
                        <li>
                            <p>Well experinced staff</p>
                        </li>
                        <li>
                            <p>Hands on training with real time projects</p>
                        </li>
                        <li>
                            <p>Lab facilities</p>
                        </li>
                        <li>
                            <p>Lifetime technical support to our students</p>
                        </li>
                        <li>
                            <p>Placement training</p>
                        </li>
                        <li>
                            <p>1 to 1 training </p>
                        </li>

                    </ul>

                </div>
            </div>
        </div>

    </section>




    <!-------------------------------------------------Courses section-------------------------------------------------->
    <div class="jumbotron">
        <section class="course-section" id="course-section-id" data-aos="fade-right">

            <div class="container mt-4">
                <h1 class="text-center course-section-main">OUR COURSES</h1>
                <div class="row mt-4">
                    <div class="col-md-6 col-lg-6">


                        <div class="card mt-2">
                            <img class="card-img-top" src="../Assets/card-html-img.png" class="img-fluid" width="100%"
                                height="200px" alt="web design course">
                            <div class="card-body text-center">
                                <h5 class="card-title text-center">Web Development</h5>
                                <p class="course-section-list text-center">

                                <ul class="text-center">
                                    <li class="badge badge-pill badge-success">HTML</li>
                                    <li class="badge badge-pill badge-success">CSS</li>
                                    <li class="badge badge-pill badge-success">JAVA SCRIPT</li>
                                    <li class="badge badge-pill badge-success">PHP/ASP</li>
                                    <li class="badge badge-pill badge-success">MYSQL</li>
                                </ul>

                                </p>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dignissimos distinctio
                                    repellat
                                    placeat perferendis facilis, qui adipisci possimus dolorem</p>

                                <a href="#" class="btn btn-outline-success course-section-card-btn">Click more</a>

                            </div>


                        </div>

                    </div>
                    <div class="col-md-6 col-lg-6">
                        <div class="card mt-2">
                            <img class="card-img-top" src="../Assets/card-javac-img.png" width="100%" class="img-fluid"
                                height="200px" alt="java course">
                            <div class="card-body text-center">
                                <h5 class="card-title text-center">Java</h5>
                                <p class="course-section-list text-center">
                                <ul class="text-center">
                                    <li class="badge badge-pill badge-primary">Core java</li>
                                    <li class="badge badge-pill badge-primary">j2ee</li>
                                    <li class="badge badge-pill badge-primary">spring training</li>

                                </ul>

                                </p>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dignissimos distinctio
                                    repellat
                                    placeat perferendis facilis, qui adipisci possimus dolorem</p>

                                <a href="#" class="btn btn-outline-primary course-section-card-btn">Click more</a>
                            </div>


                        </div>

                    </div>
                    <div class="col-md-6 col-lg-6">
                        <div class="card mt-2">
                            <img class="card-img-top" src="../Assets/card-android-img.jpg" width="100%"
                                class="img-fluid" height="200px" alt="android course">
                            <div class="card-body text-center">
                                <h5 class="card-title text-center">Android and Ios</h5>
                                <p class="course-section-list text-center">
                                <ul class="text-center">
                                    <li class="badge badge-pill badge-success">android</li>
                                    <li class="badge badge-pill badge-success">ios</li>
                                    <li class="badge badge-pill badge-success">iot</li>
                                    <li class="badge badge-pill badge-success">ADVANCE</li>

                                </ul>

                                </p>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dignissimos distinctio
                                    repellat
                                    placeat perferendis facilis, qui adipisci possimus dolorem</p>
                                <a href="#" class="btn btn-outline-success course-section-card-btn">Click more</a>

                            </div>

                        </div>

                    </div>

                    <div class="col-md-6 col-lg-6">
                        <div class="card mt-2">
                            <img class="card-img-top" src="../Assets/card-blockchain-img.png" class="img-fluid"
                                width="100%" height="200px" alt="blockchain course">
                            <div class="card-body text-center">
                                <h5 class="card-title text-center">Blockchain</h5>
                                <p class="course-section-list text-center">
                                <ul class="text-center">
                                    <li class="badge badge-pill badge-primary">blockchain</li>
                                    <li class="badge badge-pill badge-primary">ADVANCE</li>
                                    <li class="badge badge-pill badge-primary">Block model</li>

                                </ul>

                                </p>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dignissimos distinctio
                                    repellat
                                    placeat perferendis facilis, qui adipisci possimus dolorem</p>
                                <a href="#" class="btn btn-outline-primary course-section-card-btn">Click more</a>

                            </div>

                        </div>

                    </div>


                </div>
            </div>
        </section>

        <!-------------------------------------------------recruter section-------------------------------------------------->
        <section class="recruter-section" id="recruter-section-id" data-aos="fade-right">
            <div class="container mt-5">

                <h1 class="text-center recruter-section-main">OUR RECRUITERS</h1>
                <div class="row d-flex justify-content-center">
                    <div class="col-6 col-sm-6 col-md-2">
                        <div class="recruter-section-img">
                            <img src="../Assets/logo-amazon.png" class="img-fluid r-1" alt="amazon image">
                        </div>

                    </div>
                    <div class="col-6 col-sm-6 col-md-2">

                        <div class="recruter-section-img text-center">

                            <img src="../Assets/logo-infy.png" class="img-fluid r-2" alt="infosys image">
                        </div>



                    </div>
                    <div class="col-6 col-sm-6 col-md-2">
                        <div class="recruter-section-img text-center">
                            <img src="../Assets/logo-snapdeal.png" class="img-fluid r-3" alt="snapdeal image">
                        </div>

                    </div>
                    <div class="col-6 col-sm-6 col-md-2">
                        <div class="recruter-section-img">
                            <img src="../Assets/logo-tcs.png" class="img-fluid r-4" alt="tcs image">
                        </div>

                    </div>

                </div>
            </div>

        </section>
        <!-------------------------------------------------Testimonial section-------------------------------------------------->
        <section class="Testimonial-section mb-5" id="testimonial-section-id" data-aos="fade-right">
            <div class="container mt-5 ">
                <h1 class="text-center Testimonial-section-main">STUDENT REVIEW</h1>
                <div class="row mt-3">
                    <div class="col-sm-4 mt-5" style="border-left: 10px solid  green;">
                        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Fugiat minima tempora delectus at
                            dolores consequuntur</p>
                        <img src="../Assets/student-1.png" class="Testimonial-section-img img-fluid"
                            alt="student reiew">
                        <p class="Testimonial-section-name"><b>John</b><br>Java developer</p>


                    </div>
                    <div class="col-sm-4 mt-5" style="border-left: 10px solid  green;">
                        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Fugiat minima tempora delectus at
                            dolores consequuntur</p>
                        <img src="../Assets/person-2.jpg" class="Testimonial-section-img img-fluid" alt="student reiew">
                        <p class="Testimonial-section-name"><b>Jeny</b><br>Blockchain developer</p>
                    </div>
                    <div class="col-sm-4 mt-5" style="border-left: 10px solid  green;">
                        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Fugiat minima tempora delectus at
                            dolores consequuntur</p>
                        <img src="../Assets/person-3.jpg" class="Testimonial-section-img img-fluid" alt="student reiew">
                        <p class="Testimonial-section-name"><b>Victoria</b><br>web developer</p>


                    </div>


                </div>



            </div>



    </div>



    </section>
    <!-------------------------------------------------Contactus section-------------------------------------------------->
    <section class="contactus-section mb-5" id="contactus-section-id" data-aos="fade-right">
        <div class="container text-center">
            <h1 class="contactus-section-main">CONTACT US</h1>

            <div class="row mt-5">

                <div class="col-2">
                    <a href="https://www.facebook.com/" target="_blank"><img
                            src="../Assets/social-media-icon/facebook.png" width="80px" height="80px" class="img-fluid"
                            alt="facebook"></a>

                </div>
                <div class="col-2">
                    <a href="https://google.com/" target="_blank"><img src="../Assets/social-media-icon/google plus.png"
                            width="80px" height="80px" class="img-fluid" alt="google plus"></a>

                </div>
                <div class="col-2">
                    <a href="https://www.instagram.com/" target="_blank"><img
                            src="../Assets/social-media-icon/instagram.png" width="80px" height="80px" class="img-fluid"
                            alt="instagram">
                    </a>
                </div>
                <div class="col-2">
                    <a href="https://www.reddit.com/" target="_blank"><img src="../Assets/social-media-icon/reddit.png"
                            width="80px" height="80px" class="img-fluid" alt="reddit"></a>

                </div>
                <div class="col-2">
                    <a href="https://twitter.com/" target="_blank"> <img src="../Assets/social-media-icon/twitter.png"
                            width="80px" height="80px" class="img-fluid" alt="twitter"></a>

                </div>
                <div class="col-2">
                    <a href="https://www.youtube.com/" target="_blank"><img
                            src="../Assets/social-media-icon/youtube.png" width="80px" height="80px" class="img-fluid"
                            alt="youtube"></a>

                </div>

            </div>


        </div>

    </section>
    </div>
    <!-------------------------------------------------footer section-------------------------------------------------->
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 319">
        <path fill="#000000" fill-opacity="1"
            d="M0,128L48,149.3C96,171,192,213,288,213.3C384,213,480,171,576,160C672,149,768,171,864,181.3C960,192,1056,192,1152,165.3C1248,139,1344,85,1392,58.7L1440,32L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z">
        </path>
    </svg>

    <section class="footer-section mb-1" id="footer-section-id">
        <div class="container">

            <div class="row">
                <div class="col-sm-4 text-center mt-3">
                    <h5 class="text-primary">RELATED COURSES</h5>
                    <P>Cloud computing <br> Animations <br>Big data <br>AI <br>Data science <br>Data Visualization</P>


                </div>
                <div class="col-sm-4 text-center mt-3">
                    <h5 class="text-primary">ADDRESS</h5>
                    <address>
                        Kukatpally Housing Board Rd <br> K P H B Phase 9 <br> Kukatpally <br> Hyderabad <br> Telangana
                        500085 <br>phone: <b>9834589890</b>
                    </address>


                </div>
                <div class="col-sm-4 text-center mt-3">
                    <h5 class="text-primary">QUICK LINK</h5>
                    <a href="#">Home</a><br>
                    <a href="#aboutus-section-id">Aboutus</a><br>
                    <a href="#course-section-id">Courses</a><br>
                    <a href="#recruter-section-id">placement</a><br>
                    <a href="#testimonial-section-id">Testimonial</a><br>
                    <a href="../logout/logout.php?logout=confirm" class="btn btn-outline-danger footer-btn mt-2"
                        style="font-size: 15px;color:white;">Logout</a>



                </div>
            </div>

        </div>
        <div class="footer-copyright">
            <p class="text-center copyright-text"><i class="far fa-copyright"></i>Voicecode.online <br>
                <span style="font-size: 15px;">Designed by <b>jegadesh</b> </span>
            </p>
        </div>

    </section>
    <!-------------------------------------------------AOS animation-------------------------------------------------->
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
    AOS.init({
        duration: 1000
    });
    </script>

    <script src="../lib/js/jquery.min.js"></script>
    <script src="../lib/js/bootstrap.min.js"></script>

</body>

</html>