<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8">
        <title>Fitness Coaching  Gym </title>
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
        <meta content="" name="keywords">
        <meta content="" name="description">

        <!-- Google Web Fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Teko:wght@300..700&display=swap" rel="stylesheet">

        <!-- Icon Font Stylesheet -->
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css"/>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

        <!-- Libraries Stylesheet -->
        <link rel="stylesheet" href="lib/animate/animate.min.css"/>
        <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">


        <!-- Customized Bootstrap Stylesheet -->
        <link href="css/bootstrap.min.css" rel="stylesheet">

        <!-- Template Stylesheet -->
        <link href="css/style.css" rel="stylesheet">
    </head>

    <body>

        <!-- Spinner Start -->
        <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div>
        <!-- Spinner End -->

        <!-- Navbar & Hero Start -->
        <div class="container-fluid header-top">
            <div class="nav-shaps-2"></div>
            <div class="container d-flex align-items-center">
                <div class="d-flex align-items-center h-100">
                    <a href="#" class="navbar-brand" style="height:130px;">
                        <img src="img/gym-logo.png" alt="Logo" style="height: 80px; width: 150px;">
                    </a>
                </div>
                <div class="w-100 h-100">
                    <div class="topbar px-0 py-2 d-none d-lg-block" style="height: 45px;">
                        <div class="row gx-0 align-items-center">
                            <div class="col-lg-8 text-center text-lg-center mb-lg-0">
                                <div class="d-flex flex-wrap">
                                    <div class="pe-4">
                                        <a href="mailto:example@gmail.com" class="text-muted small"><i class="fas fa-envelope text-primary me-2"></i>Fitness Coachingcoaching@gmail.com</a>
                                    </div>
                                    <div class="pe-0">
                                        <a href="mailto:example@gmail.com" class="text-muted small"><i class="fa fa-clock text-primary me-2"></i>Mon - Sat: 8.00 am-7.00 pm</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 text-center text-lg-end">
                                <div class="d-flex justify-content-end">
                                    <!-- <div class="d-flex align-items-center small">
                                        <a href="#" class="login-btn text-body me-3 pe-3"> <span>Login</span></a>
                                        <a href="#" class="text-body me-3"> Register</a>
                                    </div> -->
                                    <div class="d-flex pe-3">
                                        <a class="btn p-0 text-primary me-3" href="#"><i class="fab fa-facebook-f"></i></a>
                                        <a class="btn p-0 text-primary me-3" href="#"><i class="fab fa-twitter"></i></a>
                                        <a class="btn p-0 text-primary me-3" href="#"><i class="fab fa-instagram"></i></a>
                                        <a class="btn p-0 text-primary me-0" href="#"><i class="fab fa-linkedin-in"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="nav-bar px-0 py-lg-0" id="home" style="height: 80px;">
                        <nav class="navbar navbar-expand-lg navbar-light d-flex justify-content-lg-end">
                            <a href="#" class="navbar-brand-2">
                            <img src="img/gym-logo.png" alt="Logo" style="height: 80px; width: 150px;">
                            </a> 
                            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                                <span class="fa fa-bars"></span>
                            </button>
                            <div class="collapse navbar-collapse" id="navbarCollapse">
                                <div class="navbar-nav mx-0 mx-lg-auto">
                                    <a href="#home" class="nav-item nav-link active">Home</a>
                                    <a href="#About" class="nav-item nav-link">About</a>
                                    <a href="#courses" class="nav-item nav-link">Courses</a>
                                    <a href="#feature" class="nav-item nav-link">Features</a>
                                  
                                    <a href="#blog" class="nav-item nav-link">Blog</a>
                                    <a href="#testimonial" class="nav-item nav-link">Testimonial</a>
                                    <a href="#contact" class="nav-item nav-link">Contact</a>
                                    <div class="nav-btn ps-3">
                                        <button class="btn-search btn btn-primary btn-md-square mt-2 mt-lg-0 mb-4 mb-lg-0 flex-shrink-0" data-bs-toggle="modal" data-bs-target="#searchModal"><i class="fas fa-search"></i></button>
                                        <a href="Gym/index.php" class="btn btn-primary py-2 px-4 ms-0 ms-lg-3"> <span>Login</span></a>
                                    </div>
                                    <div class="nav-shaps-1"></div>
                                </div>
                            </div>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
        <!-- Navbar & Hero End -->

        <!-- Modal Search Start -->
        <div class="modal fade" id="searchModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-fullscreen">
                <div class="modal-content rounded-0">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Search by keyword</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body d-flex align-items-center bg-primary">
                        <div class="input-group w-75 mx-auto d-flex">
                            <input type="search" class="form-control p-3" placeholder="keywords" aria-describedby="search-icon-1">
                            <span id="search-icon-1" class="btn bg-light border nput-group-text p-3"><i class="fa fa-search"></i></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Modal Search End -->


        <!-- Carousel Start -->
        <div class="header-carousel owl-carousel overflow-hidden bg-dark">
            <div class="header-carousel-item hero-section">
                <div class="hero-bg-half-1"></div>
                <div class="carousel-caption">
                    <div class="container">
                        <div class="row g-4 align-items-center">
                            <div class="col-lg-7 animated fadeInLeft">
                                <div class="text-sm-center text-md-start">
                                    <h4 class="text-primary text-uppercase fw-bold mb-4">Wellcome to our Fitness Coaching Center</h4>
                                    <h1 class="display-1 text-white mb-4">The best gym center is now in your city</h1>
                                    <!-- <p class="mb-5 fs-5">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy...  -->
                                    </p>
                                    <div class="d-flex justify-content-center justify-content-md-start flex-shrink-0 mb-4">
                                        <a class="btn btn-dark py-3 px-4 px-md-5 me-2" href="#"><i class="fas fa-play-circle me-2"></i> <span>Watch Video</span></a>
                                        <a class="btn btn-primary py-3 px-4 px-md-5 ms-2" href="#"><span>Learn More</span></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="header-carousel-item hero-section">
                <div class="hero-bg-half-2"></div>
                <div class="carousel-caption">
                    <div class="container">
                        <div class="row g-4 align-items-center">
                            <div class="col-lg-7 animated fadeInLeft">
                                <div class="text-sm-center text-md-start">
                                    <h4 class="text-primary text-uppercase fw-bold mb-4">Wellcome to our Fitness Coaching Gym</h4>
                                    <h1 class="display-2 text-white mb-4">Stay healthy by exercising at the best gym center</h1>
                                    <!-- <p class="mb-5 fs-5">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy...  -->
                                    </p>
                                    <div class="d-flex justify-content-center justify-content-md-start flex-shrink-0 mb-4">
                                        <a class="btn btn-dark py-3 px-4 px-md-5 me-2" href="#"><i class="fas fa-play-circle me-2"></i> <span>Watch Video</span></a>
                                        <a class="btn btn-primary py-3 px-4 px-md-5 ms-2" href="#"><span>Learn More</span></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Carousel End -->

        <!-- About Start -->
        <div class="container-fluid about pt-5" id="About">
            <div class="container pt-5">
                <div class="row g-5">
                    <div class="col-xl-6 wow fadeInLeft" data-wow-delay="0.2s">
                        <div class="about-content h-100">
                            <h4 class="text-primary">About Fitness Coaching Center</h4>
                            <h1 class="display-4 text-white mb-4">We are the best at fulfilling your potential and achieving your goals.</h1>
                            <!-- <p class="mb-4">Lorem ipsum dolor, sit amet consectetur adipisicing elit. In impedit accusantium autem quaerat natus nesciunt veritatis fugiat dolor eaque fuga.</p> -->
                            <div class="tab-class pb-4">
                                <ul class="nav d-flex mb-2">
                                    <li class="nav-item mb-3">
                                        <a class="d-flex py-2 active" data-bs-toggle="pill" href="#tab-1">
                                            <span style="width: 150px;">Our Mission</span>
                                        </a>
                                    </li>
                                    <li class="nav-item mb-3">
                                        <a class="d-flex py-2 mx-3" data-bs-toggle="pill" href="#tab-2">
                                            <span style="width: 150px;">Our Vision</span>
                                        </a>
                                    </li>
                                    <li class="nav-item mb-3">
                                        <a class="d-flex py-2" data-bs-toggle="pill" href="#tab-3">
                                            <span style="width: 150px;">Our Goal</span>
                                        </a>
                                    </li>
                                </ul>
                                <div class="tab-content">
                                    <div id="tab-1" class="tab-pane fade show p-0 active">
                                        <div class="row">
                                            <div class="col-12">
                                                <div class="d-flex align-items-center border-top border-bottom py-4">
                                                    <span class="fas fa-rocket text-white fa-4x me-4"></span>
                                                    <p class="mb-0">Our mission is to empower individuals to reach their fullest potential by providing personalized, effective fitness coaching that fosters both physical and mental well-being. We are committed to helping each person achieve their unique fitness goals through expert guidance, motivation, and a supportive community. Our focus is on long-term health, sustainable progress, and a holistic approach to fitness.</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div id="tab-2" class="tab-pane fade show p-0">
                                        <div class="row">
                                            <div class="col-12">
                                                <div class="d-flex align-items-center border-top border-bottom py-4">
                                                    <span class="fas fa-rocket text-white fa-4x me-4"></span>
                                                    <p class="mb-0">To be the leading fitness coaching center that inspires a global community to embrace healthier, more active lifestyles. We envision a world where individuals not only achieve their fitness goals but also build lasting confidence, strength, and resilience. Through innovation, education, and unwavering support, we aim to transform lives and create a positive impact on the health and wellness of communities everywhere.</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div id="tab-3" class="tab-pane fade show p-0">
                                        <div class="row">
                                            <div class="col-12">
                                                <div class="d-flex align-items-center border-top border-bottom py-4">
                                                    <span class="fas fa-rocket text-white fa-4x me-4"></span>
                                                    <p class="mb-0">At our Fitness Coaching Center, our goal is to help you unlock your full potential and achieve lasting results. We are dedicated to providing personalized training, expert guidance, and unwavering support tailored to your unique fitness journey. Whether you're striving for weight loss, strength building, improved mobility, or overall wellness, we are here to ensure you stay motivated, challenged, and on track. Our goal is not just to help you reach your targets, but to empower you to maintain a healthy lifestyle and feel confident in your body, mind, and spirit for years to come.</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row g-4 align-items-center">
                                <div class="col-sm-6">
                                    <a href="#" class="btn btn-primary py-3 px-5"> <span>Make Appointment</span></a>
                                </div>
                                <div class="col-sm-6">
                                    <div class="d-flex flex-shrink-0 ps-4">
                                        <a href="#" class="btn btn-light btn-lg-square position-relative wow tada" data-wow-delay=".9s">
                                            <i class="fa fa-phone-alt fa-2x"></i>
                                            <div class="position-absolute" style="top: 5px; right: 5px;">
                                                <span><i class="fa fa-comment-dots text-dark"></i></span>
                                            </div>
                                        </a>
                                        <div class="d-flex flex-column ms-3">
                                            <span>Call to Our Experts</span>
                                            <a href="tel:+ 0123 456 7890"><span class="text-white">Free: +91 77354 16533</span></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6 wow fadeInUp" data-wow-delay="0.2s">
                        <div class="about-img h-100">
                            <div class="about-img-inner d-flex h-100">
                                <img src="img/about-2.png" class="img-fluid w-100" style="object-fit: cover;" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- About End -->

        <!-- Fitness Coaching Goal start -->
        <div class="container-fluid goal pt-5" id="feature">
            <div class="container pt-5">
                <div class="row g-5">
                    <div class="col-lg-6 wow fadeInLeft" data-wow-delay="0.2s">
                        <div class="goal-content">
                            <h4 class="text-primary">Fitness Coaching Goal</h4>
                            <h1 class="display-4 mb-4">Complete your possibilities, Achieve Your Fitness Coaching Goals.</h1>
                            <div class="goal-item d-flex p-4">
                                <div class="d-flex me-4">
                                    <div class="bg-primary d-inline p-3" style="width: 80px; height: 80px;">
                                        <img src="img/icon-1.png" class="img-fluid" alt="">
                                    </div>
                                </div>
                                <div>
                                    <h4>Free Fitness Coaching Training</h4>
                                    <p class="text-white mb-0">Kickstart your fitness journey with our Free Fitness Coaching Training! Get expert guidance, personalized support, and the tools you need to achieve your goals—at no cost. Join us today!</p>
                                </div>
                            </div>
                            <div class="goal-item d-flex p-4 mb-4">
                                <div class="d-flex me-4">
                                    <div class="bg-primary d-inline p-3" style="width: 80px; height: 80px;">
                                        <img src="img/icon-6.png" class="img-fluid" alt="">
                                    </div>
                                </div>
                                <div>
                                    <h4>Cardio and Strength</h4>
                                    <p class="text-white mb-0">Boost your endurance and build muscle with our Cardio and Strength program. Achieve a balanced, effective workout that improves overall fitness and health. Join us today!</p>
                                </div>
                            </div>
                            <div class="ms-1">
                                <a href="#" class="btn btn-primary py-3 px-5 ms-2"> <span>Read Details</span></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 wow fadeInRight" data-wow-delay="0.2s">
                        <div class="h-100">
                            <img src="img/fitness-goal-banner.png" class="img-fluid h-100" style="object-fit: cover;" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Fitness Coaching Goal End -->

        <!-- Features Start -->
        <div class="container-fluid feature bg-light py-5" id="feature">
            <div class="container py-5">
                <div class="text-center mx-auto pb-5 wow fadeInUp" data-wow-delay="0.2s" style="max-width: 800px;">
                    <h4 class="text-primary"> Why choose us?</h4>
                    <h1 class="display-4 mb-4">Out Our Highlights Below</h1>
                    <p class="mb-0">We believe in personalized training for lasting results. With expert coaches, varied workouts, and a supportive community, we help you reach your full potential and achieve long-term health and fitness goals</p>
                </div>
                <div class="feature-carousel owl-carousel">
                    <div class="feature-item wow fadeInUp" data-wow-delay="0.2s">
                        <div class="feature-img">
                            <img src="img/feature-1.jpg" class="img-fluid w-100"  alt="">
                        </div>
                        <div class="feature-content p-4">
                            <h4 class="mb-3">Personalized Coaching</h4>
                            <p class="mb-4">Tailored fitness plans to suit your unique goals.
                            </p>
                            <a href="#" class="btn btn-primary py-2 px-4"> <span>Read More</span></a>
                        </div>
                    </div>
                    <div class="feature-item wow fadeInUp" data-wow-delay="0.4s">
                        <div class="feature-img">
                            <img src="img/feature-2.jpg" class="img-fluid w-100"  alt="">
                        </div>
                        <div class="feature-content p-4">
                            <h4 class="mb-3">Expert Trainers</h4>
                            <p class="mb-4"> Certified professionals guiding you every step of the way.
                            </p>
                            <a href="#" class="btn btn-primary py-2 px-4"> <span>Read More</span></a>
                        </div>
                    </div>
                    <div class="feature-item wow fadeInUp" data-wow-delay="0.6s">
                        <div class="feature-img">
                            <img src="img/feature-3.jpg" class="img-fluid w-100"  alt="">
                        </div>
                        <div class="feature-content p-4">
                            <h4 class="mb-3">Variety of Workouts</h4>
                            <p class="mb-4">A mix of cardio, strength, and flexibility for well-rounded fitness.
                            </p>
                            <a href="#" class="btn btn-primary py-2 px-4"> <span>Read More</span></a>
                        </div>
                    </div>
                    <div class="feature-item">
                        <div class="feature-img">
                            <img src="img/feature-4.jpg" class="img-fluid w-100"  alt="">
                        </div>
                        <div class="feature-content p-4">
                            <h4 class="mb-3">Supportive Community</h4>
                            <p class="mb-4">Encouraging environment to keep you motivated.
                            </p>
                            <a href="#" class="btn btn-primary py-2 px-4"> <span>Read More</span></a>
                        </div>
                    </div>
                </div>
                <div class="feature-shaps"></div>
            </div>
        </div>
        <!-- Features End -->


        <!-- Courses Start -->
        <div class="container-fluid courses overflow-hidden py-5" id="courses">
            <div class="container py-5">
                <div class="text-center mx-auto pb-5 wow fadeInUp" data-wow-delay="0.2s" style="max-width: 800px;">
                    <h4 class="text-primary"> Our Courses</h4>
                    <h1 class="display-4 text-white mb-4">Out Our Highlights Below</h1>
                    <p class="text-white mb-0">We offer a balanced approach, combining personalized training and group sessions to enhance strength, endurance, flexibility, and nutrition for lasting results.
                    </p>
                </div>
                <div class="row gy-4 gx-0 justify-content-center">
                    <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.2s">
                        <div class="courses-item">
                            <div class="courses-item-inner p-4">
                                <div class="d-flex justify-content-between mb-4">
                                    <div class="courses-icon-img p-3">
                                        <img src="img/icon-1.png" class="img-fluid" alt="">
                                    </div>
                                    <div class="data-info d-flex flex-column">
                                        <div class="courses-trainer d-flex align-items-center mb-1">
                                            <div class="me-2" style="width: 25px; height: 25px;">
                                                <img src="img/testimonial-3.jpg" class="img-fluid" alt="">
                                            </div>
                                            <p class="mb-0">Paul Flavius</p>
                                        </div>
                                        <div class="courses-date">
                                            <p class="mb-1">Date: Saturday</p>
                                            <p class="mb-0">Time: 06.00 - 07.00</p>
                                        </div>
                                    </div>
                                </div>
                                <a href="#" class="d-inline-block h4 mb-3"> Nutrition Coaching</a>
                                <p class="mb-4">Guidance on healthy eating to support your fitness journey.
                                </p>
                                <a href="#" class="btn btn-primary py-2 px-4"> <span>Read More</span></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.4s">
                        <div class="courses-item">
                            <div class="courses-item-inner p-4">
                                <div class="d-flex justify-content-between mb-4">
                                    <div class="courses-icon-img p-3">
                                        <img src="img/icon-2.png" class="img-fluid" alt="">
                                    </div>
                                    <div class="data-info d-flex flex-column">
                                        <div class="courses-trainer d-flex align-items-center mb-1">
                                            <div class="me-2" style="width: 25px; height: 25px;">
                                                <img src="img/testimonial-3.jpg" class="img-fluid" alt="">
                                            </div>
                                            <p class="mb-0">Paul Flavius</p>
                                        </div>
                                        <div class="courses-date">
                                            <p class="mb-1">Date: Saturday</p>
                                            <p class="mb-0">Time: 06.00 - 07.00</p>
                                        </div>
                                    </div>
                                </div>
                                <a href="#" class="d-inline-block h4 mb-3"> Power Lifting Class</a>
                                <p class="mb-4">

                                    Build strength and master the squat, deadlift, and bench press with expert coaching. Perfect for all levels to improve technique and lift heavier.</p>
                                <a href="#" class="btn btn-primary py-2 px-4"> <span>Read More</span></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.6s">
                        <div class="courses-item">
                            <div class="courses-item-inner p-4">
                                <div class="d-flex justify-content-between mb-4">
                                    <div class="courses-icon-img p-3">
                                        <img src="img/icon-3.png" class="img-fluid" alt="">
                                    </div>
                                    <div class="data-info d-flex flex-column">
                                        <div class="courses-trainer d-flex align-items-center mb-1">
                                            <div class="me-2" style="width: 25px; height: 25px;">
                                                <img src="img/testimonial-3.jpg" class="img-fluid" alt="">
                                            </div>
                                            <p class="mb-0">Paul Flavius</p>
                                        </div>
                                        <div class="courses-date">
                                            <p class="mb-1">Date: Saturday</p>
                                            <p class="mb-0">Time: 06.00 - 07.00</p>
                                        </div>
                                    </div>
                                </div>
                                <a href="#" class="d-inline-block h4 mb-3"> Body Building Class</a>
                                <p class="mb-4">Build muscle and definition with targeted strength training. Perfect for all levels, guided by expert coaches.</p>
                                <a href="#" class="btn btn-primary py-2 px-4"> <span>Read More</span></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.2s">
                        <div class="courses-item">
                            <div class="courses-item-inner p-4">
                                <div class="d-flex justify-content-between mb-4">
                                    <div class="courses-icon-img p-3">
                                        <img src="img/icon-4.png" class="img-fluid" alt="">
                                    </div>
                                    <div class="data-info d-flex flex-column">
                                        <div class="courses-trainer d-flex align-items-center mb-1">
                                            <div class="me-2" style="width: 25px; height: 25px;">
                                                <img src="img/testimonial-3.jpg" class="img-fluid" alt="">
                                            </div>
                                            <p class="mb-0">Paul Flavius</p>
                                        </div>
                                        <div class="courses-date">
                                            <p class="mb-1">Date: Saturday</p>
                                            <p class="mb-0">Time: 06.00 - 07.00</p>
                                        </div>
                                    </div>
                                </div>
                                <a href="#" class="d-inline-block h4 mb-3"> Aerobics & Skipping Class</a>
                                
                                <p class="mb-4">Boost your cardio with fun, high-energy aerobics and skipping routines. Great for improving fitness, endurance, and coordination.
                                </p>
                                <a href="#" class="btn btn-primary py-2 px-4"> <span>Read More</span></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.4s">
                        <div class="courses-item">
                            <div class="courses-item-inner p-4">
                                <div class="d-flex justify-content-between mb-4">
                                    <div class="courses-icon-img p-3">
                                        <img src="img/icon-5.png" class="img-fluid" alt="">
                                    </div>
                                    <div class="data-info d-flex flex-column">
                                        <div class="courses-trainer d-flex align-items-center mb-1">
                                            <div class="me-2" style="width: 25px; height: 25px;">
                                                <img src="img/testimonial-3.jpg" class="img-fluid" alt="">
                                            </div>
                                            <p class="mb-0">Paul Flavius</p>
                                        </div>
                                        <div class="courses-date">
                                            <p class="mb-1">Date: Saturday</p>
                                            <p class="mb-0">Time: 06.00 - 07.00</p>
                                        </div>
                                    </div>
                                </div>
                                <a href="#" class="d-inline-block h4 mb-3"> Boxing Class</a>
                                <p class="mb-4">Enhance strength, endurance, and technique with our dynamic boxing workouts. Perfect for all levels, focusing on fitness and skill development.
                                </p>
                                <a href="#" class="btn btn-primary py-2 px-4"> <span>Read More</span></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.6s">
                        <div class="courses-item">
                            <div class="courses-item-inner p-4">
                                <div class="d-flex justify-content-between mb-4">
                                    <div class="courses-icon-img p-3">
                                        <img src="img/icon-6.png" class="img-fluid" alt="">
                                    </div>
                                    <div class="data-info d-flex flex-column">
                                        <div class="courses-trainer d-flex align-items-center mb-1">
                                            <div class="me-2" style="width: 25px; height: 25px;">
                                                <img src="img/testimonial-3.jpg" class="img-fluid" alt="">
                                            </div>
                                            <p class="mb-0">Paul Flavius</p>
                                        </div>
                                        <div class="courses-date">
                                            <p class="mb-1">Date: Saturday</p>
                                            <p class="mb-0">Time: 06.00 - 07.00</p>
                                        </div>
                                    </div>
                                </div>
                                <a href="#" class="d-inline-block h4 mb-3"> Cardio Class</a>
                                <p class="mb-4">Boost your stamina and burn calories with high-energy, heart-pumping cardio workouts. Suitable for all fitness levels.
                                </p>
                                <a href="#" class="btn btn-primary py-2 px-4"> <span>Read More</span></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 text-center wow fadeInUp" data-wow-delay="0.2s">
                        <a href="#" class="btn btn-primary py-3 px-5"> <span>More Courses</span></a>
                    </div>
                </div>
            </div>
        </div>
        <!-- Courses End -->

        <!-- Blog Start -->
        <div class="container-fluid blog py-5" id="blog">
            <div class="container py-5">
                <div class="text-center mx-auto pb-5 wow fadeInUp" data-wow-delay="0.2s" style="max-width: 800px;">
                    <h4 class="text-primary">  Our Blogs</h4>
                    <h1 class="display-4 mb-4">Check out our latest stories</h1>
                    <p class="mb-0">Our blogs offer expert tips, motivation, and insights to support your fitness journey. We aim to educate and inspire you with valuable content on workouts, nutrition, and wellness.</p>
                </div>
                <div class="blog-carousel owl-carousel">
                    <div class="blog-item wow fadeInUp" data-wow-delay="0.2s">
                        <div class="blog-img p-4 pb-0">
                            <a href="#">
                                <img src="img/feature-4.jpg" class="img-fluid w-100" alt="">
                            </a>
                        </div>
                        <div class="blog-content p-4">
                            <div class="blog-comment d-flex justify-content-between py-2 px-3 mb-4">
                                <div class="small"><span class="fa fa-user text-primary me-2"></span> Martin.C</div>
                                <div class="small"><span class="fa fa-calendar text-primary me-2"></span> 30 Dec 2025</div>
                            </div>
                            <a href="#" class="h4 d-inline-block mb-3">Full Body Home Workout</a>
                            <p class="mb-3">A quick, effective workout targeting all muscle groups using bodyweight exercises—no equipment needed. Ideal for all fitness levels!</p>
                            <a href="#" class="btn btn-dark py-2 px-4 ms-2"> <span class="me-2">Read More</span>  <i class="fa fa-arrow-right"></i></a>
                        </div>
                    </div>
                    <div class="blog-item wow fadeInUp" data-wow-delay="0.4s">
                        <div class="blog-img p-4 pb-0">
                            <a href="#">
                                <img src="img/feature-3.jpg" class="img-fluid w-100" alt="">
                            </a>
                        </div>
                        <div class="blog-content p-4">
                            <div class="blog-comment d-flex justify-content-between py-2 px-3 mb-4">
                                <div class="small"><span class="fa fa-user text-primary me-2"></span> Martin.C</div>
                                <div class="small"><span class="fa fa-calendar text-primary me-2"></span> 30 Dec 2025</div>
                            </div>
                            <a href="#" class="h4 d-inline-block mb-3">31-Day Fitness Coaching Calendar</a>
                            <p class="mb-3">A structured, 31-day plan with daily workouts and fitness tips to help you stay on track and achieve your goals. Perfect for building consistency and progress!</p>
                            <a href="#" class="btn btn-dark py-2 px-4 ms-2"> <span class="me-2">Read More</span>  <i class="fa fa-arrow-right"></i></a>
                        </div>
                    </div>
                    <div class="blog-item wow fadeInUp" data-wow-delay="0.6s">
                        <div class="blog-img p-4 pb-0">
                            <a href="#">
                                <img src="img/feature-2.jpg" class="img-fluid w-100" alt="">
                            </a>
                        </div>
                        <div class="blog-content p-4">
                            <div class="blog-comment d-flex justify-content-between py-2 px-3 mb-4">
                                <div class="small"><span class="fa fa-user text-primary me-2"></span> Martin.C</div>
                                <div class="small"><span class="fa fa-calendar text-primary me-2"></span> 30 Dec 2025</div>
                            </div>
                            <a href="#" class="h4 d-inline-block mb-3">At Home Ab Workout</a>
                            <p class="mb-3">Tone and strengthen your core with simple, effective ab exercises—no equipment needed. Perfect for at-home fitness!</p>
                            <a href="#" class="btn btn-dark py-2 px-4 ms-2"> <span class="me-2">Read More</span>  <i class="fa fa-arrow-right"></i></a>
                        </div>
                    </div>
                    <div class="blog-item">
                        <div class="blog-img p-4 pb-0">
                            <a href="#">
                                <img src="img/feature-1.jpg" class="img-fluid w-100" alt="">
                            </a>
                        </div>
                        <div class="blog-content p-4">
                            <div class="blog-comment d-flex justify-content-between py-2 px-3 mb-4">
                                <div class="small"><span class="fa fa-user text-primary me-2"></span> Martin.C</div>
                                <div class="small"><span class="fa fa-calendar text-primary me-2"></span> 30 Dec 2025</div>
                            </div>
                            <a href="#" class="h4 d-inline-block mb-3">Full Body Home Workout</a>
                            <p class="mb-3">A quick, effective workout targeting all major muscle groups using bodyweight exercises—no equipment required. Perfect for home fitness!</p>
                            <a href="#" class="btn btn-dark py-2 px-4 ms-2"> <span class="me-2">Read More</span>  <i class="fa fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Blog End -->

        <!-- Explore Fitness Coaching Start -->
        <div class="container-fluid explore py-5 wow zoomIn" data-wow-delay="0.2s">
            <div class="container py-5 text-center">
                <h1 class="display-1 text-white mb-0"> Explore Fitness Coaching Center</h1>
                <a class="btn btn-primary py-3 px-4 px-md-5 me-2" href="https://www.youtube.com/embed/DWRcNpR6Kdc"><i class="fas fa-play-circle me-2"></i> <span>Watch Video</span></a>
            </div>
        </div>
        <!-- Explore Fitness Coaching End -->


        <!-- Team Start -->
        <div class="container-fluid team py-5" id="team">
            <div class="container py-5">
                <div class="text-center mx-auto pb-5 wow fadeInUp" data-wow-delay="0.2s" style="max-width: 800px;">
                    <h4 class="text-primary">Our Trainer</h4>
                    <h1 class="display-4 mb-4">Meet Our Amazing Team</h1>
                    <p class="mb-0">Our team of expert trainers is dedicated to helping you achieve your fitness goals with personalized guidance and support. Get to know the passionate professionals who will motivate and inspire you!</p>
                </div>
                <div class="row gy-5 gy-lg-4 gx-4">
                    <div class="col-md-6 col-lg-3 wow fadeInUp" data-wow-delay="0.2s">
                        <div class="team-item">
                            <div class="team-img">
                                <img src="img/team-1.jpg" class="img-fluid w-100" alt="Image">
                                <div class="team-icon">
                                    <a href="#" class="btn btn-primary btn-sm-square"><i class="fab fa-facebook-f"></i></a>
                                    <a href="#" class="btn btn-primary btn-sm-square"><i class="fab fa-twitter"></i></a>
                                    <a href="#" class="btn btn-primary btn-sm-square"><i class="fab fa-instagram"></i></a>
                                    <a href="#" class="btn btn-primary btn-sm-square"><i class="fab fa-linkedin-in"></i></a>
                                </div>
                            </div>
                            <div class="team-content">
                                <h4>Trainer Name</h4>
                                <p class="mb-0">Profession</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3 wow fadeInUp" data-wow-delay="0.4s">
                        <div class="team-item">
                            <div class="team-img">
                                <img src="img/team-2.jpg" class="img-fluid w-100" alt="Image">
                                <div class="team-icon">
                                    <a href="#" class="btn btn-primary btn-sm-square"><i class="fab fa-facebook-f"></i></a>
                                    <a href="#" class="btn btn-primary btn-sm-square"><i class="fab fa-twitter"></i></a>
                                    <a href="#" class="btn btn-primary btn-sm-square"><i class="fab fa-instagram"></i></a>
                                    <a href="#" class="btn btn-primary btn-sm-square"><i class="fab fa-linkedin-in"></i></a>
                                </div>
                            </div>
                            <div class="team-content">
                                <h4>Trainer Name</h4>
                                <p class="mb-0">Profession</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3 wow fadeInUp" data-wow-delay="0.6s">
                        <div class="team-item">
                            <div class="team-img">
                                <img src="img/team-3.jpg" class="img-fluid w-100" alt="Image">
                                <div class="team-icon">
                                    <a href="#" class="btn btn-primary btn-sm-square"><i class="fab fa-facebook-f"></i></a>
                                    <a href="#" class="btn btn-primary btn-sm-square"><i class="fab fa-twitter"></i></a>
                                    <a href="#" class="btn btn-primary btn-sm-square"><i class="fab fa-instagram"></i></a>
                                    <a href="#" class="btn btn-primary btn-sm-square"><i class="fab fa-linkedin-in"></i></a>
                                </div>
                            </div>
                            <div class="team-content">
                                <h4>Trainer Name</h4>
                                <p class="mb-0">Profession</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3 wow fadeInUp" data-wow-delay="0.8s">
                        <div class="team-item">
                            <div class="team-img">
                                <img src="img/team-4.jpg" class="img-fluid w-100" alt="Image">
                                <div class="team-icon">
                                    <a href="#" class="btn btn-primary btn-sm-square"><i class="fab fa-facebook-f"></i></a>
                                    <a href="#" class="btn btn-primary btn-sm-square"><i class="fab fa-twitter"></i></a>
                                    <a href="#" class="btn btn-primary btn-sm-square"><i class="fab fa-instagram"></i></a>
                                    <a href="#" class="btn btn-primary btn-sm-square"><i class="fab fa-linkedin-in"></i></a>
                                </div>
                            </div>
                            <div class="team-content">
                                <h4>Trainer Name</h4>
                                <p class="mb-0">Profession</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Team End -->

        <!-- Testimonial Start -->
        <div class="container-fluid testimonial bg-dark py-5" style="margin-bottom: 90px;" id="testimonial">
            <div class="container py-5">
                <div class="text-center mx-auto pb-5 wow fadeInUp" data-wow-delay="0.2s" style="max-width: 800px;">
                    <h4 class="text-primary">Testimonial</h4>
                    <h1 class="display-4 text-white">What Our Customers Are Saying</h1>
                </div>
                <div class="testimonial-carousel owl-carousel wow fadeInUp" data-wow-delay="0.2s">
                    <div class="testimonial-item mx-auto" style="max-width: 900px;">
                        <span class="fa fa-quote-left fa-3x quote-icon"></span>
                        <div class="testimonial-img mb-4">
                            <img src="img/testimonial-1.jpg" class="img-fluid" alt="Image">
                        </div>
                        <p class="fs-4 text-white mb-4">The personalized training here has helped me build strength and achieve my goals. The coaches are incredibly supportive!</p>
                        <div class="d-block">
                            <h4 class="text-white">Aarav Sharma</h4>
                            <div class="d-flex">
                                <i class="fas fa-star text-primary"></i>
                                <i class="fas fa-star text-primary"></i>
                                <i class="fas fa-star text-primary"></i>
                                <i class="fas fa-star text-primary"></i>
                                <i class="fas fa-star text-white"></i>
                            </div>
                        </div>
                    </div>
                    <div class="testimonial-item mx-auto" style="max-width: 900px;">
                        <span class="fa fa-quote-left fa-3x quote-icon"></span>
                        <div class="testimonial-img mb-4">
                            <img src="img/testimonial-2.jpg" class="img-fluid" alt="Image">
                        </div>
                        <p class="fs-4 text-white mb-4">I love the variety of classes offered. The trainers push me to do my best, and the results have been amazing!</p>
                        <div class="d-block">
                            <h4 class="text-white">Priya Patel</h4>
                            <div class="d-flex">
                                <i class="fas fa-star text-primary"></i>
                                <i class="fas fa-star text-primary"></i>
                                <i class="fas fa-star text-primary"></i>
                                <i class="fas fa-star text-primary"></i>
                                <i class="fas fa-star text-white"></i>
                            </div>
                        </div>
                    </div>
                    <div class="testimonial-item mx-auto" style="max-width: 900px;">
                        <span class="fa fa-quote-left fa-3x quote-icon"></span>
                        <div class="testimonial-img mb-4">
                            <img src="img/testimonial-3.jpg" class="img-fluid" alt="Image">
                        </div>
                        <p class="fs-4 text-white mb-4">The positive energy and motivation from the team and fellow members keep me coming back. My fitness journey has never been more rewarding!</p>
                        <div class="d-block">
                            <h4 class="text-white">Rohit Kumar</h4>
                            <div class="d-flex">
                                <i class="fas fa-star text-primary"></i>
                                <i class="fas fa-star text-primary"></i>
                                <i class="fas fa-star text-primary"></i>
                                <i class="fas fa-star text-primary"></i>
                                <i class="fas fa-star text-white"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Testimonial End -->
 <!-- Contact Start -->
 <div class="container-fluid contact py-5" id="contact">
    <div class="container py-5">
        <div class="row g-5">
            <div class="col-lg-6 wow fadeInLeft" data-wow-delay="0.2s">
                <div class="mb-4">
                    <h4 class="text-primary">Contact Us</h4>
                    <h1 class="display-4 mb-4">Contact With Team Of Experts</h1>
                    <p class="mb-4">Reach out today to get personalized fitness advice, expert coaching, and answers to all your fitness-related questions. Our team is here to support you every step of the way!</p>
                    <div class="row g-4">
                        <div class="col-lg-6">
                            <div class="bg-white d-flex">
                                <i class="fas fa-map-marker-alt fa-2x text-primary me-2"></i>
                                <div>
                                    <h4>Address</h4>
                                    <p class="mb-0">Shailashre Vihar , Bhubaneswar</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="bg-white d-flex">
                                <i class="fas fa-envelope fa-2x text-primary me-2"></i>
                                <div>
                                    <h4>Mail Us</h4>
                                    <p class="mb-0">info@fitnesscoaching.com</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="bg-white d-flex">
                                <i class="fa fa-phone-alt fa-2x text-primary me-2"></i>
                                <div>
                                    <h4>Telephone</h4>
                                    <p class="mb-0">+91 77354 16533</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="bg-white d-flex">
                                <i class="fab fa-firefox-browser fa-2x text-primary me-2"></i>
                                <div>
                                    <h4>fitnesscoaching.com</h4>
                                    <p class="mb-0">+91 77354 16533</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="d-flex ms-2 mb-5">
                    <a class="btn btn-dark py-2 px-3 px-sm-4 me-2" href="#"> <span>facebook</span> <i class="fas fa-chevron-circle-right"></i></a>
                    <a class="btn btn-dark py-2 px-3 px-sm-4 mx-2" href="#"> <span>twitter</span> <i class="fas fa-chevron-circle-right"></i></a>
                    <a class="btn btn-dark py-2 px-3 px-sm-4 ms-2" href="#"> <span>instagram</span> <i class="fas fa-chevron-circle-right"></i></a>
                </div>
                <div class="contact-banner">
                    <div class="row g-0">
                        <div class="col-9">
                            <div class="p-4 pe-0">
                                <h4 class="display-5 mb-0">Want To Join Our Talanded Team</h4>
                                <div class="d-flex align-items-center">
                                    <a href="index.html" class="h5 mb-0 me-3">visit our website</a>
                                    <a class="text-primary py-3" href="https://www.youtube.com/embed/DWRcNpR6Kdc"><i class="fas fa-play-circle me-2"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 wow fadeInRight" data-wow-delay="0.4s">
                <div class="form-section bg-dark p-5 h-100">
                    <h1 class="display-4 text-white mb-4">Get In touch</h1>
                    <form>
                        <div class="row g-4">
                            <div class="col-lg-12 col-xl-6">
                                <div class="form-floating form-section-col">
                                    <input type="text" class="form-control border-0" id="name" placeholder="Your Name">
                                    <label for="name">Your Name</label>
                                </div>
                            </div>
                            <div class="col-lg-12 col-xl-6">
                                <div class="form-floating form-section-col">
                                    <input type="email" class="form-control border-0" id="email" placeholder="Your Email">
                                    <label for="email">Your Email</label>
                                </div>
                            </div>
                            <div class="col-lg-12 col-xl-6">
                                <div class="form-floating form-section-col">
                                    <input type="phone" class="form-control border-0" id="phone" placeholder="Phone">
                                    <label for="phone">Your Phone</label>
                                </div>
                            </div>
                            <div class="col-lg-12 col-xl-6">
                                <div class="form-floating form-section-col">
                                    <input type="text" class="form-control border-0" id="project" placeholder="Project">
                                    <label for="project">Your Project</label>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-floating form-section-col">
                                    <input type="text" class="form-control border-0" id="subject" placeholder="Subject">
                                    <label for="subject">Subject</label>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-floating">
                                    <textarea class="form-control border-0" placeholder="Leave a message here" id="message" style="height: 160px;"></textarea>
                                    <label for="message">Message</label>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="#" id="flexCheck">
                                    <label class="form-check-label" for="flexCheck">I agree with the site privacy policy</label>
                                  </div>
                            </div>
                            <div class="col-12">
                                <div class="form-section-col">
                                    <button class="btn-primary w-100 py-3 px-5">Send Message</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-12 wow fadeInUp" data-wow-delay="0.2s">
                <div class="h-100 overflow-hidden">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d239486.66728487329!2d85.65563903334204!3d20.30112904837954!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3a1909d2d5170aa5%3A0xfc580e2b68b33fa8!2sBhubaneswar%2C%20Odisha!5e0!3m2!1sen!2sin!4v1743144963069!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>

                </div>
            </div>
        </div>
    </div>
</div>
<!-- Contact End -->


        <!-- Footer Start -->
        <div class="container-fluid footer py-5 wow fadeIn" data-wow-delay="0.2s">
            <div class="container py-5">
                <div class="row g-5 mb-5 align-items-center">
                    <div class="col-lg-7">
                        <div class="position-relative d-flex" style="transform: skew(18deg);">
                            <input class="form-control border-0 w-100 py-3 pe-5" type="text" placeholder="Email address to Subscribe">
                            <button type="button" class="btn-primary py-2 px-4 ms-3"> <span>Subscribe</span></button>
                        </div>
                    </div>
                    <div class="col-lg-5">
                        <div class="d-flex align-items-center justify-content-center justify-content-lg-end">
                            <a class="btn btn-primary btn-md-square me-3" href=""><i class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-primary btn-md-square me-3" href=""><i class="fab fa-twitter"></i></a>
                            <a class="btn btn-primary btn-md-square me-3" href=""><i class="fab fa-instagram"></i></a>
                            <a class="btn btn-primary btn-md-square me-0" href=""><i class="fab fa-linkedin-in"></i></a>
                        </div>
                    </div>
                </div>
                <div class="row g-5">
                    <div class="col-md-6 col-lg-6 col-xl-3">
                        <div class="footer-item">
                        <img src="img/gym-logo.png" alt="Logo" style="height: 80px; width: 150px;">
     <p class="mb-0">Achieve your fitness goals with personalized coaching, expert trainers, custom workout plans, group classes, and nutrition guidance in a supportive community.</p>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-6 col-xl-3">
                        <div class="footer-item">
                            <h4 class="text-white mb-4">Quick Links</h4>
                            <a href="#"> Home</a>
                            <a href="#"> About us</a>
                            <a href="#"> Our Courses</a>
                            <a href="#"> Our Features</a>
                            <a href="#"> Our Blog & news</a>
                            <a href="#"> Testimonial</a>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-6 col-xl-3">
                        <div class="footer-item">
                            <h4 class="text-white mb-4"> Contact Info</h4>
                            <div class="row g-2">
                                <div class="col-12">
                                    <div class="d-flex">
                                        <i class="fas fa-map-marker-alt text-primary me-2"></i>
                                        <div>
                                            <h5 class="text-white mb-2">Address</h5>
                                            <p class="mb-0">Bhubaneswar</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="d-flex">
                                        <i class="fas fa-envelope text-primary me-2"></i>
                                        <div>
                                            <h5 class="text-white mb-2">Mail Us</h5>
                                            <p class="mb-0">info@fitnesscoaching.com</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="d-flex">
                                        <i class="fa fa-phone-alt text-primary me-2"></i>
                                        <div>
                                            <h5 class="text-white mb-2">Telephone</h5>
                                            <p class="mb-0">+91 77354 16533</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-6 col-xl-3">
                        <div class="footer-item">
                            <h4 class="text-white mb-4">Recent Work</h4>
                            <div class="row g-2">
                                <div class="col-3">
                                    <div class="footer-item-img">
                                        <a href="#"><img src="img/work-9.jpg" class="img-fluid" alt=""></a>
                                    </div>
                                </div>
                                <div class="col-3">
                                    <div class="footer-item-img">
                                        <a href="#"><img src="img/work-10.jpg" class="img-fluid" alt=""></a>
                                    </div>
                                </div>
                                <div class="col-3">
                                    <div class="footer-item-img">
                                        <a href="#"><img src="img/work-11.jpg" class="img-fluid" alt=""></a>
                                    </div>
                                </div>
                                <div class="col-3">
                                    <div class="footer-item-img">
                                        <a href="#"><img src="img/work-12.jpg" class="img-fluid" alt=""></a>
                                    </div>
                                </div>
                                <div class="col-3">
                                    <div class="footer-item-img">
                                        <a href="#"><img src="img/work-1.jpg" class="img-fluid" alt=""></a>
                                    </div>
                                </div>
                                <div class="col-3">
                                    <div class="footer-item-img">
                                        <a href="#"><img src="img/work-2.jpg" class="img-fluid" alt=""></a>
                                    </div>
                                </div>
                                <div class="col-3">
                                    <div class="footer-item-img">
                                        <a href="#"><img src="img/work-3.jpg" class="img-fluid" alt=""></a>
                                    </div>
                                </div>
                                <div class="col-3">
                                    <div class="footer-item-img">
                                        <a href="#"><img src="img/work-4.jpg" class="img-fluid" alt=""></a>
                                    </div>
                                </div>
                                <div class="col-3">
                                    <div class="footer-item-img">
                                        <a href="#"><img src="img/work-5.jpg" class="img-fluid" alt=""></a>
                                    </div>
                                </div>
                                <div class="col-3">
                                    <div class="footer-item-img">
                                        <a href="#"><img src="img/work-6.jpg" class="img-fluid" alt=""></a>
                                    </div>
                                </div>
                                <div class="col-3">
                                    <div class="footer-item-img">
                                        <a href="#"><img src="img/work-7.jpg" class="img-fluid" alt=""></a>
                                    </div>
                                </div>
                                <div class="col-3">
                                    <div class="footer-item-img">
                                        <a href="#"><img src="img/work-8.jpg" class="img-fluid" alt=""></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Footer End -->

        
        <!-- Copyright Start -->
        <div class="container-fluid copyright py-4">
            <div class="container">
                <div class="row g-4 align-items-center">
                    <div class="col-md-6 text-center text-md-start mb-md-0">
                        <span class="text-body"><a href="#" class="border-bottom text-white"><i class="fas fa-copyright text-light me-2"></i>Fitness Coaching</a>, All right reserved.</span>
                    </div>
                    <div class="col-md-6 text-center text-md-end text-body">
                        <!--/*** This template is free as long as you keep the below author’s credit link/attribution link/backlink. ***/-->
                        <!--/*** If you'd like to use the template without the below author’s credit link/attribution link/backlink, ***/-->
                        <!--/*** you can purchase the Credit Removal License from "https://htmlcodex.com/credit-removal". ***/-->
                        Designed By <a class="border-bottom text-white" href="https://htmlcodex.com">Briskode Technology</a>
                        
                    </div>
                </div>
            </div>
        </div>
        <!-- Copyright End -->


        <!-- Back to Top -->
        <div class="back-to-top">
            <a href="#" class="btn"><i class="fa fa-arrow-up"></i></a>  
        </div> 

        
        <!-- JavaScript Libraries -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
        <script src="lib/wow/wow.min.js"></script>
        <script src="lib/easing/easing.min.js"></script>
        <script src="lib/waypoints/waypoints.min.js"></script>
        <script src="lib/owlcarousel/owl.carousel.min.js"></script>
        

        <!-- Template Javascript -->
        <script src="js/main.js"></script>
    </body>

</html>