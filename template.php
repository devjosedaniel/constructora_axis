<?php
function iniciarPagina($title="Inicio"){
?>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title><?php echo $title ?> | Consultoría & Obras Civiles</title>
        <meta name="description" content="AXIS Consultoría & Obras Civiles nace con el objetivo de brindar de manera oportuna  servicios de consultoría trabajando con responsabilidad, puntualidad y eficiencia.">
        <meta name="keywords" content="construccion, civil, arquitecto, topologia, ingenieria, ingeniero, metal, axis, constructora, obras, maquinaria" />
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="manifest" href="site.webmanifest">
        <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.png">

        <!-- CSS here -->
        <link rel="stylesheet" href="assets/css/bootstrap.min.css">
        <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
        <link rel="stylesheet" href="assets/css/slicknav.css">
        <link rel="stylesheet" href="assets/css/flaticon.css">
        <link rel="stylesheet" href="assets/css/progressbar_barfiller.css">
        <link rel="stylesheet" href="assets/css/gijgo.css">
        <link rel="stylesheet" href="assets/css/animate.min.css">
        <link rel="stylesheet" href="assets/css/animated-headline.css">
        <link rel="stylesheet" href="assets/css/magnific-popup.css">
        <link rel="stylesheet" href="assets/css/fontawesome-all.min.css">
        <link rel="stylesheet" href="assets/css/themify-icons.css">
        <link rel="stylesheet" href="assets/css/slick.css">
        <link rel="stylesheet" href="assets/css/nice-select.css">
        <link rel="stylesheet" href="assets/css/style.css">
    </head>
    <body>
        <!-- ? Preloader Start -->
        <div id="preloader-active">
            <div class="preloader d-flex align-items-center justify-content-center">
                <div class="preloader-inner position-relative">
                    <div class="preloader-circle"></div>
                    <div class="preloader-img pere-text">
                        <img src="assets/img/logo/loder.png" alt="loder">
                    </div>
                </div>
            </div>
        </div>
         <!-- Preloader Start -->


        <header>
            <!-- Header Start -->
            <div class="header-area">
                <div class="main-header ">
                    <div class="header-top d-none d-lg-block">
                        <div class="container">
                            <div class="col-xl-12">
                                <div class="row d-flex justify-content-between align-items-center">
                                    <div class="header-info-left">
                                        <ul>     
                                            <li><i class="fas fa-phone"></i> +593 98 820 9154</li>
                                            <li><i class="far fa-envelope"></i>info@constructoraxis.com</li>
                                        </ul>
                                    </div>
                                    <!-- <div class="header-info-right">
                                        <a href="#" class="btn">Free Quote <i class="ti-arrow-right"></i></a>
                                    </div> -->
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="header-bottom header-sticky">
                        <div class="container">
                            <div class="row align-items-center">
                                <!-- Logo -->
                                <div class="col-xl-2 col-lg-2">
                                    <div class="logo">
                                        <a href="index.php"><img src="assets/img/logo/logo.png" alt="logo-axis"></a>
                                    </div>
                                </div>
                                <div class="col-xl-9 col-lg-8">
                                    <div class="menu-wrapper  d-flex align-items-center">
                                        <!-- Main-menu -->
                                        <div class="main-menu d-none d-lg-block">
                                            <nav> 
                                                <ul id="navigation">                                                                                          
                                                    <li class="active"><a href="index.php">Inicio</a></li>
                                                    <li><a href="nosotros.php">Nosotros</a></li>
                                                    <li><a href="servicios.php">Servicios</a></li>
                                                    <li><a href="proyectos.php">Proyectos</a></li>
                                                    <!-- <li><a href="blog.php">Blog</a>
                                                        <ul class="submenu">
                                                            <li><a href="blog.php">Blog</a></li>
                                                            <li><a href="blog_details.php">Blog Details</a></li>
                                                            <li><a href="elements.php">Element</a></li>
                                                        </ul>
                                                    </li> -->
                                                    <!-- <li><a href="#">Pages</a>
                                                        <ul class="submenu">
                                                            <li><a href="project_details.php">Project Details</a></li>
                                                            <li><a href="services_details.php">Services Details</a></li>
                                                            <li><a href="elements.php">Element</a></li>
                                                        </ul>
                                                    </li> -->
                                                    <li><a href="contacto.php">Contácto</a></li>
                                                </ul>
                                            </nav>
                                        </div>
                                    </div>
                                </div> 
                                <!-- <div class="col-xl-1 col-lg-2">
                                   
                                    <div class="search d-none d-lg-block">
                                        <ul>
                                            <li>
                                                <div class="nav-search search-switch">
                                                    <span class="fas fa-search"></span>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div> -->
                                <!-- Mobile Menu -->
                                <div class="col-12">
                                    <div class="mobile_menu d-block d-lg-none"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Header End -->
        </header>
    
<?php
}


function terminarPagina(){
    ?>
                <footer>
        <!-- Footer Start-->
        <div class="footer-area footer-padding">
            <div class="container">
                <div class="row d-flex justify-content-between">
                    <div class="col-xl-2 col-lg-2 col-md-4 col-sm-5">
                        <div class="single-footer-caption mb-50">
                            <div class="footer-tittle">
                                <h4>Empresa</h4>
                                <ul>
                                    <li><a href="nosotros.php">Nosotros</a></li>
                                    <li><a href="servicios.php"> Servicios</a></li>
                                    <li><a href="proyectos.php">Proyectos</a></li>
                                    <!-- <li><a href="#">Blog</a></li>
                                    <li><a href="#">Carrier</a></li> -->
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-4 col-sm-7">
                        <div class="single-footer-caption mb-50">
                            <div class="footer-tittle">
                                <h4>Producción</h4>
                                <ul>
                                    <li><a >Arquitectura</a></li>
                                    <li><a >Civil</a></li>
                                    <li><a >Industrial</a></li>
                        
                                  
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-5 col-sm-8">
                        <div class="single-footer-caption mb-50">
                            <div class="footer-tittle">
                                <h4>Contáctanos</h4>
                                <div class="footer-pera">
                                    <p class="info1">Dirección: Juan Montalvo, Av. Teodoro Alvarado Oleas y Guamote</p>
                                </div>
                            </div>
                            <div class="footer-number">
                                <p>Cell: +593 98 820 9154</p>
                                <p>Email: info@constructoraxis.com</p>
                            </div>
                        </div>
                    </div>
                    <!-- <div class="col-xl-3 col-lg-3 col-md-4 col-sm-5">
                        <div class="single-footer-caption mb-50">
                            <div class="footer-tittle mb-50">
                                <h4>Newsletter</h4>
                                <p>Subscribe our newsletter to get updates about our services</p>
                            </div>
                            
                            <div class="footer-form">
                                <div id="mc_embed_signup">
                                    <form target="_blank" action="https://spondonit.us12.list-manage.com/subscribe/post?u=1462626880ade1ac87bd9c93a&amp;id=92a4423d01" method="get" class="subscribe_form relative mail_part" novalidate="true">
                                        <input type="email" name="EMAIL" id="newsletter-form-email" placeholder=" Email Address " class="placeholder hide-on-focus" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Your email address'">
                                        <div class="form-icon">
                                            <button type="submit" name="submit" id="newsletter-submit" class="email_icon newsletter-submit button-contactForm">
                                                Subscribe
                                            </button>
                                        </div>
                                        <div class="mt-10 info"></div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div> -->
                </div>
            </div>
        </div>
        <!-- footer-bottom area -->
        <div class="footer-bottom-area">
            <div class="container">
                <div class="footer-border">
                    <div class="row d-flex justify-content-between align-items-center">
                        <div class="col-xl-9 col-lg-8">
                            <div class="footer-copy-right">
  <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
                                <p>Copyright ©<?php echo date('Y') ?> Todos los derechos reservados | 
                                    Desarrollado por <a href="https://devdesignec.com/" target="_blank"><img alt="icon-devdesign" width="25px" src="assets/img/icon-devdesign.png">DevDesign</a></p>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-4">
                            <!-- Footer Social -->
                            <div class="footer-social f-right">
                                <!-- <a href="#"><i class="fab fa-twitter"></i></a> -->
                                <a target="_blank" href="https://www.facebook.com/constructoraxisec/"><i class="fab fa-facebook-f"></i></a>
                                <a target="_blank" href="https://api.whatsapp.com/send?phone=593988209154&text=Hola,%20desear%C3%ADa%20mas%20informaci%C3%B3n%20sobre..."><i class="fab fa-whatsapp"></i></a>
                                <a target="_blank" href="https://www.instagram.com/constructoraxis/"><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Footer End-->
    </footer>
    <!--? Search model Begin -->
    <div class="search-model-box">
        <div class="h-100 d-flex align-items-center justify-content-center">
            <div class="search-close-btn">+</div>
            <form class="search-model-form">
                <input type="text" id="search-input" placeholder="Searching key.....">
            </form>
        </div>
    </div>
    <!-- Search model end -->
    <!-- Scroll Up -->
    <div id="back-top" >
        <a title="Go to Top" href="#"> <i class="fas fa-level-up-alt"></i></a>
    </div>

    <!-- JS here -->
                                        <!-- Global site tag (gtag.js) - Google Analytics -->
            <script async src="https://www.googletagmanager.com/gtag/js?id=UA-151492337-1">
            </script>
            <script>
            window.dataLayer = window.dataLayer || [];
            function gtag(){dataLayer.push(arguments);}
            gtag('js', new Date());

            gtag('config', 'UA-151492337-1');
            </script>
    <script src="./assets/js/vendor/modernizr-3.5.0.min.js"></script>
    <!-- Jquery, Popper, Bootstrap -->
    <script src="./assets/js/vendor/jquery-1.12.4.min.js"></script>
    <script src="./assets/js/popper.min.js"></script>
    <script src="./assets/js/bootstrap.min.js"></script>
    <!-- Jquery Mobile Menu -->
    <script src="./assets/js/jquery.slicknav.min.js"></script>

    <!-- Jquery Slick , Owl-Carousel Plugins -->
    <script src="./assets/js/owl.carousel.min.js"></script>
    <script src="./assets/js/slick.min.js"></script>
    <!-- One Page, Animated-HeadLin -->
    <script src="./assets/js/wow.min.js"></script>
    <script src="./assets/js/animated.headline.js"></script>
    <script src="./assets/js/jquery.magnific-popup.js"></script>

    <!-- Date Picker -->
    <script src="./assets/js/gijgo.min.js"></script>
    <!-- Nice-select, sticky -->
    <script src="./assets/js/jquery.nice-select.min.js"></script>
    <script src="./assets/js/jquery.sticky.js"></script>
    <!-- Progress -->
    <script src="./assets/js/jquery.barfiller.js"></script>
    
    <!-- counter , waypoint,Hover Direction -->
    <script src="./assets/js/jquery.counterup.min.js"></script>
    <script src="./assets/js/waypoints.min.js"></script>
    <script src="./assets/js/jquery.countdown.min.js"></script>
    <script src="./assets/js/hover-direction-snake.min.js"></script>

    <!-- contact js -->
    <script src="./assets/js/contact.js"></script>
    <script src="./assets/js/jquery.form.js"></script>
    <script src="./assets/js/jquery.validate.min.js"></script>
    <script src="./assets/js/mail-script.js"></script>
    <script src="./assets/js/jquery.ajaxchimp.min.js"></script>
    
    <!-- Jquery Plugins, main Jquery -->	
    <script src="./assets/js/plugins.js"></script>
    <script src="./assets/js/main.js"></script>
            </body>
        </html>
    <?php
}
?>