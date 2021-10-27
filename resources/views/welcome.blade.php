<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Welcome to Leyan's Portfolio</title>
        <!-- Favicon-->
        <!-- Favicon to be added ... -->
        <!-- Font Awesome icons (free version)-->
        <script src="https://use.fontawesome.com/releases/v5.15.3/js/all.js" crossorigin="anonymous"></script>
        <!-- Simple line icons-->
        <link href="https://cdnjs.cloudflare.com/ajax/libs/simple-line-icons/2.5.5/css/simple-line-icons.min.css" rel="stylesheet" />
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <link href="{{ asset('css/icofont.min.css') }}" rel="stylesheet">
    </head>

    <body id="page-top">
        <!-- Navigation-->
        <a class="menu-toggle rounded" href="#"><i class="fas fa-bars"></i></a>
        <nav id="sidebar-wrapper">
            <ul class="sidebar-nav">
                <li class="sidebar-brand"><a href="#page-top">Menu</a></li>
                <li class="sidebar-nav-item"><a href="#page-top">Home</a></li>
                <li class="sidebar-nav-item"><a href="#about">About</a></li>
                <li class="sidebar-nav-item"><a href="#services">Services</a></li>
                <li class="sidebar-nav-item"><a href="#portfolio">Portfolio</a></li>
                <li class="sidebar-nav-item"><a href="#contact">Contact</a></li>
            </ul>
        </nav>
        <!-- Header-->
        <header class="masthead d-flex align-items-center">
            <div class="container px-4 px-lg-5 text-center">
                <h1 class="mb-1">Hi, I'm Leyan!</h1>
                <h3 class="mb-5"><em>I am a web developer</em></h3>
                <a class="btn btn-primary btn-xl" href="#about">About Me</a>
            </div>
        </header>

        <!-- ======= About Section ======= -->
        <section id="about" class="about">
        <div class="container" data-aos="fade-up">

            <div class="section-title">
            <h2>About</h2>
            </div>

            <div class="row">
            <div class="col-lg-4">
                <img src="{{ asset('assets/imgs/about.jpg') }}" class="img-fluid" >
            </div>
            <div class="col-lg-8 pt-4 pt-lg-0 content">
                <h3>Web Developer</h3>
                <div class="row">
                <div class="col-lg-6">
                    <ul>
                    <li><i class="icofont-rounded-right"></i> <strong>Birthday:</strong> 12 Nov 1996</li>
                    <li><i class="icofont-rounded-right"></i> <strong>Github:</strong> leannef</li>
                    <li><i class="icofont-rounded-right"></i> <strong>Phone:</strong> +1 604 868 9612</li>
                    <li><i class="icofont-rounded-right"></i> <strong>City:</strong> Vancouver, BC</li>
                    </ul>
                </div>
                <div class="col-lg-6">
                    <ul>
                    <li><i class="icofont-rounded-right"></i> <strong>Age:</strong> 24</li>
                    <li><i class="icofont-rounded-right"></i> <strong>Degree:</strong> Bachelor's</li>
                    <li><i class="icofont-rounded-right"></i> <strong>PhEmailone:</strong> leanne_feng@yahoo.com</li>
                    <li><i class="icofont-rounded-right"></i> <strong>LinkedIn:</strong> in/leanne-feng-8a5471170/</li>
                    </ul>
                </div>
                </div>
            </div>
            </div>
        </div>
        </section><!-- End About Section -->

        <!-- ======= Skills Section ======= -->
        <section id="skills" class="skills">
        <div class="container" data-aos="fade-up">

            <div class="section-title">
            <h2>Skills</h2>
            </div>

            <div class="row skills-content">

            <div class="col-lg-6">

                <div class="progress">
                <span class="skill">HTML <i class="val">90%</i></span>
                <div class="progress-bar-wrap">
                    <div class="progress-bar" role="progressbar" style="width: 90%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
                </div>

                <div class="progress">
                <span class="skill">CSS <i class="val">90%</i></span>
                <div class="progress-bar-wrap">
                    <div class="progress-bar" role="progressbar" style="width: 90%" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
                </div>

                <div class="progress">
                <span class="skill">JavaScript <i class="val">75%</i></span>
                <div class="progress-bar-wrap">
                    <div class="progress-bar" role="progressbar" style="width: 75%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
                </div>

            </div>

            <div class="col-lg-6">

                <div class="progress">
                <span class="skill">PHP <i class="val">70%</i></span>
                <div class="progress-bar-wrap">
                    <div class="progress-bar" role="progressbar" style="width: 70%" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
                </div>

                <div class="progress">
                <span class="skill">Python <i class="val">80%</i></span>
                <div class="progress-bar-wrap">
                    <div class="progress-bar" role="progressbar" style="width: 80%" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
                </div>

                <div class="progress">
                <span class="skill">SQL <i class="val">80%</i></span>
                <div class="progress-bar-wrap">
                    <div class="progress-bar" role="progressbar" style="width: 80%" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
                </div>

            </div>

            </div>

        </div>
        </section>
        <!-- End Skills Section -->

        <!-- Portfolio-->
        <section class="portfolio" id="portfolio">
            <div class="container px-4 px-lg-5">
                <div class="portfolio-heading text-center">
                    <h3 class="text-secondary mb-0">Portfolio</h3>
                    <h2 class="mb-5">Recent Projects</h2>
                </div>
                <div class="row gx-0">
                    <div class="col-lg-6">
                        <a class="portfolio-item" href="#!">
                            <div class="caption">
                                <div class="caption-content">
                                    <div class="h2">Super Frog</div>
                                    <p class="mb-0">A Super Mario like 2D game made by Unity and C#! Email me if you want to have a try on this game. Only Mac platform is supported!</p>
                                </div>
                            </div>
                            <img class="img-fluid" src="{{ asset('assets/imgs/portfolio-1.jpg') }}" />
                        </a>
                    </div>
                    <div class="col-lg-6">
                        <a class="portfolio-item" href="#!">
                            <div class="caption">
                                <div class="caption-content">
                                    <div class="h2">Voice Gender Identification System</div>
                                    <p class="mb-0">This project is to predict speeches that contain whether a male or female voice using Random Forest method in R</p>
                                </div>
                            </div>
                            <img class="img-fluid" src="{{ asset('assets/imgs/portfolio-2.jpg') }}" />
                        </a>
                    </div>
                
                </div>
            </div>
        </section>

        <!-- ======= Contact Section ======= -->
        <section id="contact" class="contact">
        <div class="container" data-aos="fade-up">

            <div class="section-title">
            <h2>Contact</h2>
            </div>

            <div class="row mt-5">

            <div class="col-lg-4">
                <div class="info">
                <div class="email">
                    <i class="icofont-envelope"></i>
                    <h4>Email:</h4>
                    <p>leanne_feng@yahoo.com</p>
                </div>

                <div class="phone">
                    <i class="icofont-phone"></i>
                    <h4>Call:</h4>
                    <p>+1 604 868 9612</p>
                </div>

                </div>

            </div>

            <div class="col-lg-8 mt-5 mt-lg-0">

                <form action="forms/contact.php" method="post" role="form" class="php-email-form">
                <div class="form-row">
                    <div class="col-md-6 form-group">
                    <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                    <div class="validate"></div>
                    </div>
                    <div class="col-md-6 form-group">
                    <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email" />
                    <div class="validate"></div>
                    </div>
                </div>
                <div class="form-group">
                    <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
                    <div class="validate"></div>
                </div>
                <div class="form-group">
                    <textarea class="form-control" name="message" rows="5" data-rule="required" data-msg="Please write something for us" placeholder="Message"></textarea>
                    <div class="validate"></div>
                </div>
                <div class="mb-3">
                    <div class="loading">Loading</div>
                    <div class="error-message"></div>
                    <div class="sent-message">Your message has been sent. Thank you!</div>
                </div>
                <div class="text-center"><button type="submit">Send Message</button></div>
                </form>

            </div>

            </div>

        </div>
        </section><!-- End Contact Section -->

        <!-- Footer-->
        <footer class="footer text-center">
            <div class="container px-4 px-lg-5">
                <ul class="list-inline mb-5">
                    <li class="list-inline-item">
                        <a class="social-link rounded-circle text-white mr-3" href="#!"><i class="icon-social-facebook"></i></a>
                    </li>
                    <li class="list-inline-item">
                        <a class="social-link rounded-circle text-white mr-3" href="#!"><i class="icon-social-twitter"></i></a>
                    </li>
                    <li class="list-inline-item">
                        <a class="social-link rounded-circle text-white" href="#!"><i class="icon-social-github"></i></a>
                    </li>
                </ul>
                <p class="text-muted small mb-0">Copyright &copy; Leyan's Website 2021</p>
            </div>
        </footer>
        <!-- Scroll to Top Button-->
        <a class="scroll-to-top rounded" href="#page-top"><i class="fas fa-angle-up"></i></a>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/app.js"></script>
    </body>
</html>
