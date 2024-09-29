@extends('layouts.main')
@section('content')

    <!--/ Nav Star /-->
    <nav class="navbar navbar-b navbar-trans navbar-expand-md fixed-top" id="mainNav">
        <div class="container">
            <a class="navbar-brand js-scroll" href="#page-top">Code Artisan</a>
            <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbarDefault"
                    aria-controls="navbarDefault" aria-expanded="false" aria-label="Toggle navigation">
                <span></span>
                <span></span>
                <span></span>
            </button>
            <div class="navbar-collapse collapse justify-content-end" id="navbarDefault">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link js-scroll" href="#home">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link js-scroll" href="#about">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link js-scroll" href="#service">Services</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link js-scroll" href="#blog">Blog</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link js-scroll" href="#contact">Contact</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!--/ Nav End /-->

    <!--/ Intro Skew Star /-->
    <div id="home" class="intro route bg-image" style="background-image: url(/img/fon.jpg)">
        <div class="overlay-itro"></div>
        <div class="intro-content display-table">
            <div class="table-cell">
                <div class="container">
                    <h1 class="intro-title mb-4">I am Shavkatjon Ahmedov</h1>
                    <p class="intro-subtitle"><span class="text-slider-items">Web Developer,Full-stack developer,Back-End Developer,PHP Developer, </span><strong
                            class="text-slider"></strong></p>
                </div>
            </div>
        </div>
    </div>
    <!--/ Intro Skew End /-->

    <section id="about" class="about-mf sect-pt4 route">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="box-shadow-full">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="row">
                                    <div class="col-sm-6 col-md-5">
                                        <div class="about-img">
                                            <img src="img/testimonial-2.jpg" class="img-fluid rounded b-shadow-a"
                                                 alt="">
                                        </div>
                                    </div>
                                    <div class="col-sm-6 col-md-7">
                                        <div class="about-info">
                                            <p><span class="title-s">Name: </span> <span>Shavkatjon Ahmedov</span></p>
                                            <p><span class="title-s">Profile: </span> <span>Full-stack developer</span>
                                            </p>
                                            <p><span class="title-s">Email: </span> <span>shavkatphpdev@gmail.com</span>
                                            </p>
                                            <p><span class="title-s">Phone: </span> <span>+(998)-88-040-6366</span></p>
                                        </div>
                                    </div>
                                </div>
                                <div class="skill-mf">
                                    <p class="title-s">Back-end skills</p>
                                    <span>PHP</span> <span class="pull-right">85%</span>
                                    <div class="progress">
                                        <div class="progress-bar" role="progressbar" style="width: 85%;"
                                             aria-valuenow="85"
                                             aria-valuemin="0"
                                             aria-valuemax="100"></div>
                                    </div>
                                    <span>OOP</span> <span class="pull-right">85%</span>
                                    <div class="progress">
                                        <div class="progress-bar" role="progressbar" style="width: 85%"
                                             aria-valuenow="75"
                                             aria-valuemin="0"
                                             aria-valuemax="100"></div>
                                    </div>
                                    <span>Laravel</span> <span class="pull-right">90%</span>
                                    <div class="progress">
                                        <div class="progress-bar" role="progressbar" style="width: 90%"
                                             aria-valuenow="50"
                                             aria-valuemin="0"
                                             aria-valuemax="100"></div>
                                    </div>
                                    <span>RESTful API</span> <span class="pull-right">80%</span>
                                    <div class="progress">
                                        <div class="progress-bar" role="progressbar" style="width: 80%"
                                             aria-valuenow="90"
                                             aria-valuemin="0"
                                             aria-valuemax="100"></div>
                                    </div>
                                    <span>DataBase</span> <span class="pull-right">80%</span>
                                    <div class="progress">
                                        <div class="progress-bar" role="progressbar" style="width: 80%"
                                             aria-valuenow="90"
                                             aria-valuemin="0"
                                             aria-valuemax="100"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="about-me pt-4 pt-md-0">
                                    <div class="title-box-2">
                                        <h5 class="title-left">
                                            About me
                                        </h5>
                                    </div>
                                    <p class="lead">
                                        I’m a beginner backend developer. My journey in IT began at the
                                        University of Information Technology, here I graduated from
                                        the Faculty of Computer Science.
                                    </p>
                                    <p class="lead">
                                        After university, there was a break of several months, and then
                                        from January 2023 to the present, I have been studying backend
                                        development through courses at MohirDev, AstraCode, and
                                        independently on online platforms.
                                    </p>
                                    <p class="lead">
                                        I found backend development especially interesting! Currently,
                                        my course is complete, but there is always new information to
                                        learn and further develop! in the field of programming!
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--/ Section Services Star /-->
    <section id="service" class="services-mf route">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="title-box text-center">
                        <h3 class="title-a">
                            Services
                        </h3>
                        <p class="subtitle-a">
                            I bring your projects to life in the magical world of code.
                        </p>
                        <div class="line-mf"></div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <div class="service-box">
                        <div class="service-ico">
                            <span class="ico-circle"><i class="ion-unlocked"></i></span>
                        </div>
                        <div class="service-content">
                            <h2 class="s-title">Ensuring Security</h2>
                            <p class="s-description text-center">
                                I protect your data with strong security measures, keeping your systems safe from
                                threats.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="service-box">
                        <div class="service-ico">
                            <span class="ico-circle"><i class="ion-code-working"></i></span>
                        </div>
                        <div class="service-content">
                            <h2 class="s-title">Web Development</h2>
                            <p class="s-description text-center">
                                I create dynamic, user-friendly websites tailored to your needs, handling
                                all aspects to ensure a seamless online experience.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="service-box">
                        <div class="service-ico">
                            <span class="ico-circle"><i class="ion-android-document"></i></span>
                        </div>
                        <div class="service-content">
                            <h2 class="s-title">Database Management</h2>
                            <p class="s-description text-center">
                                I manage your databases to ensure they are organized, secure, and easily
                                accessible, optimizing performance and efficiency.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="service-box">
                        <div class="service-ico">
                            <span class="ico-circle"><i class="ion-android-create"></i></span>
                        </div>
                        <div class="service-content">
                            <h2 class="s-title">Update Existing Websites</h2>
                            <p class="s-description text-center">
                                I update and enhance your existing websites, improving functionality and design
                                to meet current standards.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="service-box">
                        <div class="service-ico">
                            <span class="ico-circle"><i class="ion-android-apps"></i></span>
                        </div>
                        <div class="service-content">
                            <h2 class="s-title">API Integration</h2>
                            <p class="s-description text-center">
                                I connect your systems with APIs to streamline data exchange and enhance functionality.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="service-box">
                        <div class="service-ico">
                            <span class="ico-circle"><i class="ion-android-checkmark-circle"></i></span>
                        </div>
                        <div class="service-content">
                            <h2 class="s-title">Error Correction and Debugging</h2>
                            <p class="s-description text-center">
                                I identify and fix errors in your code to ensure smooth and reliable performance.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--/ Section Services End /-->

    <div class="section-counter paralax-mf bg-image" style="background-image: url(img/counters-bg.jpg)">
        <div class="overlay-mf"></div>
        <div class="container">
            <div class="row">
                <div class="col-sm-3 col-lg-3">
                    <div class="counter-box">
                        <div class="counter-ico">
                            <span class="ico-circle"><i class="ion-checkmark-round"></i></span>
                        </div>
                        <div class="counter-num">
                            <p class="counter">3</p>
                            <span class="counter-text">PROJECTS IN DEVELOPMENT</span>
                        </div>
                    </div>
                </div>
                <div class="col-sm-3 col-lg-3">
                    <div class="counter-box pt-4 pt-md-0">
                        <div class="counter-ico">
                            <span class="ico-circle"><i class="ion-ios-time"></i></span>
                        </div>
                        <div class="counter-num">
                            <p class="counter">2</p>
                            <span class="counter-text">YEAR OF EDUCATION</span>
                        </div>
                    </div>
                </div>
                <div class="col-sm-3 col-lg-3">
                    <div class="counter-box pt-4 pt-md-0">
                        <div class="counter-ico">
                            <span class="ico-circle"><i class="ion-ios-bell"></i></span>
                        </div>
                        <div class="counter-num">
                            <p class="counter">4</p>
                            <span class="counter-text">TECH STACKS EXPLORED</span>
                        </div>
                    </div>
                </div>
                <div class="col-sm-3 col-lg-3">
                    <div class="counter-box pt-4 pt-md-0">
                        <div class="counter-ico">
                            <span class="ico-circle"><i class="ion-ribbon-a"></i></span>
                        </div>
                        <div class="counter-num">
                            <p class="counter">5</p>
                            <span class="counter-text">IDEAS IN DEVELOPMENT</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--/ Section Blog Star /-->
    <section id="blog" class="blog-mf sect-pt4 route">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="title-box text-center">
                        <h3 class="title-a">
                            Blog
                        </h3>
                        <p class="subtitle-a">
                            Every article opens the door to a world of new ideas.
                        </p>
                        <div class="line-mf"></div>
                    </div>
                </div>
            </div>

            <div class="row">
                @foreach($posts as $post)
                    <div class="col-md-4">
                        <div class="card card-blog">
                            <div class="card-img">
                                <a href="{{ route('posts.show', ['post' => $post->id]) }}"><img src="img/post-1.jpg" alt="" class="img-fluid"></a>
                            </div>
                            <div class="card-body">
                                <div class="card-category-box">
                                    <div class="card-category">
                                        <h6 class="category">{{ $post->target }}</h6>
                                    </div>
                                </div>
                                <h3 class="card-title"><a href="{{ route('posts.show', ['post' => $post->id]) }}">{{ $post->title }}</a></h3>
                                <p class="card-description">
                                    {{ $post->short_content }}
                                </p>
                            </div>
                            <div class="card-footer">
                                <div class="post-author">
                                        <img src="img/testimonial-2.jpg" alt="" class="avatar rounded-circle">
                                        <span class="author">{{ $post->author }}</span>
                                </div>
                                <div class="post-date">
                                    <span class="ion-ios-clock-outline"></span> {{ $post->created_at->format('d-m-Y') }}
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
    <!--/ Section Blog End /-->

    <!--/ Section Contact-Footer Star /-->
    <section class="paralax-mf footer-paralax bg-image sect-mt4 route"
             style="background-image: url(img/overlay-bg.jpg)">
        <div class="overlay-mf"></div>
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="contact-mf">
                        <div id="contact" class="box-shadow-full">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="title-box-2">
                                        <h5 class="title-left">
                                            Write to me
                                        </h5>
                                    </div>
                                    <div>
                                        <form action="" method="post" role="form" class="contactForm">
                                            <div id="sendmessage">Your message has been sent. Thank you!</div>
                                            <div id="errormessage"></div>
                                            <div class="row">
                                                <div class="col-md-12 mb-3">
                                                    <div class="form-group">
                                                        <input type="text" name="name" class="form-control" id="name"
                                                               placeholder="Your Name" data-rule="minlen:4"
                                                               data-msg="Please enter at least 4 chars"/>
                                                        <div class="validation"></div>
                                                    </div>
                                                </div>
                                                <div class="col-md-12 mb-3">
                                                    <div class="form-group">
                                                        <input type="email" class="form-control" name="email" id="email"
                                                               placeholder="Your Email" data-rule="email"
                                                               data-msg="Please enter a valid email"/>
                                                        <div class="validation"></div>
                                                    </div>
                                                </div>
                                                <div class="col-md-12 mb-3">
                                                    <div class="form-group">
                                                        <input type="text" class="form-control" name="subject"
                                                               id="subject"
                                                               placeholder="Subject" data-rule="minlen:4"
                                                               data-msg="Please enter at least 8 chars of subject"/>
                                                        <div class="validation"></div>
                                                    </div>
                                                </div>
                                                <div class="col-md-12 mb-3">
                                                    <div class="form-group">
                                                    <textarea class="form-control" name="message" rows="5"
                                                              data-rule="required"
                                                              data-msg="Please write something for us"
                                                              placeholder="Message"></textarea>
                                                        <div class="validation"></div>
                                                    </div>
                                                </div>
                                                <div class="col-md-12">
                                                    <button type="submit"
                                                            class="button button-a button-big button-rouded">
                                                        Send Message
                                                    </button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="title-box-2 pt-4 pt-md-0">
                                        <h5 class="title-left">
                                            Contact me
                                        </h5>
                                    </div>
                                    <div class="more-info">
                                        <p class="lead">
                                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Facilis dolorum
                                            dolorem
                                            soluta quidem
                                            expedita aperiam aliquid at.
                                            Totam magni ipsum suscipit amet? Autem nemo esse laboriosam ratione nobis
                                            mollitia inventore?
                                        </p>
                                        <ul class="list-ico">
                                            <li><span class="ion-ios-location"></span> UZBEKISTAN, FERGANA REGION,
                                                MARGILAN CITY, MASHAL 69
                                            </li>
                                            <li><span class="ion-ios-telephone"></span> +(998)-88-040-6366</li>
                                            <li><span class="ion-email"></span> shavkatphpdev@gmail.com</li>
                                        </ul>
                                    </div>
                                    <div class="socials">
                                        <ul>
                                            <li><a href=""><span class="ico-circle"><i
                                                            class="ion-social-facebook"></i></span></a></li>
                                            <li><a href=""><span class="ico-circle"><i
                                                            class="ion-social-instagram"></i></span></a></li>
                                            <li><a href=""><span class="ico-circle"><i
                                                            class="ion-social-twitter"></i></span></a></li>
                                            <li><a href=""><span class="ico-circle"><i
                                                            class="ion-social-pinterest"></i></span></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <footer>
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="copyright-box">
                            <p class="copyright">&copy; Copyright <strong>ShavkatDev</strong>. All Rights Reserved</p>
                            <div class="credits">
                                <!--
                                  All the links in the footer should remain intact.
                                  You can delete the links only if you purchased the pro version.
                                  Licensing information: https://bootstrapmade.com/license/
                                  Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/buy/?theme=DevFolio
                                -->
                                Designed by <a href="https://bootstrapmade.com/">Shavkatjon Ahmedov</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
    </section>
    <!--/ Section Contact-footer End /-->

@endsection
