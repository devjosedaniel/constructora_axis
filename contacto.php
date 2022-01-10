<?php
require_once "template.php";

iniciarPagina('Contacto - Axis');
?>

     <main>
        <!--? Hero Start -->
        <!-- <div class="slider-area2 section-bg2" data-background="assets/img/hero/banner-1.jpg">
            <div class="slider-height2 d-flex align-items-center">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="hero-cap hero-cap2 text-center">
                                <h2>Contáctanos</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> -->
        <!-- Hero End -->


        <!--? Hero Start -->
        <div class="slider-area2 section-bg2" data-background="assets/img/hero/banner-1.jpg">
            <div class="slider-height2 d-flex align-items-center">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="hero-cap hero-cap2">
                                <h2>Contáctanos</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Hero End -->
        <!--?  Contact Area start  -->
        <section class="contact-section">
            <div class="container">
                
                
               
                <div class="row">
                    <div class="col-12">
                        <h2 class="contact-title">Ponerse en Contácto</h2>
                    </div>
                    <!-- <div class="col-lg-8">
                        <form class="form-contact contact_form" action="contact_process.php" method="post" id="contactForm" novalidate="novalidate">
                            <div class="row">
                                <div class="col-12">
                                    <div class="form-group">
                                        <textarea class="form-control w-100" name="message" id="message" cols="30" rows="9" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter Message'" placeholder=" Enter Message"></textarea>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <input class="form-control valid" name="name" id="name" type="text" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter your name'" placeholder="Enter your name">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <input class="form-control valid" name="email" id="email" type="email" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter email address'" placeholder="Email">
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group">
                                        <input class="form-control" name="subject" id="subject" type="text" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter Subject'" placeholder="Enter Subject">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group mt-3">
                                <button type="submit" class="button button-contactForm boxed-btn">Send</button>
                            </div>
                        </form>
                    </div> -->
                    <div class="col-lg-8">
                        <script src='https://api.mapbox.com/mapbox-gl-js/v1.11.1/mapbox-gl.js'></script>
                        <link href='https://api.mapbox.com/mapbox-gl-js/v1.11.1/mapbox-gl.css' rel='stylesheet' />
                        <div id='map1' style='width: 100%; height: 300px;'></div>
                        <script>
                                mapboxgl.accessToken = 'pk.eyJ1Ijoiam9zZWRhbmllbG1hcGJveCIsImEiOiJjazNmNjhubHYwMWVvM25wa3AydGhoNXhhIn0.qTOMe-ue2IletFCVZvPR6w';
                            var map = new mapboxgl.Map({
                            container: 'map1',
                            style: 'mapbox://styles/mapbox/streets-v11',
                            center: [-79.9173266, -2.113624],
                            zoom: 15
                            });
                            
                            var marker = new mapboxgl.Marker()
                            .setLngLat([-79.9173266, -2.113624])
                            .addTo(map);
                        </script>
                    </div>
                    <div class="col-lg-3 offset-lg-1">
                        <div class="media contact-info">
                            <span class="contact-info__icon"><i class="ti-home"></i></span>
                            <div class="media-body">
                                <h3>Ecuador, Guayaquil.</h3>
                                <p>Juan Montalvo, Av. Teodoro Alvarado Oleas y Guamote</p>
                            </div>
                        </div>
                        <div class="media contact-info">
                            <span class="contact-info__icon"><i class="ti-tablet"></i></span>
                            <div class="media-body">
                                <h3>+593 98 820 9154</h3>
                                <p>Lun - Dom 8am a 18pm</p>
                            </div>
                        </div>
                        <div class="media contact-info">
                            <span class="contact-info__icon"><i class="ti-email"></i></span>
                            <div class="media-body">
                                <h3>info@constructoraxis.com</h3>
                                <p>Envíanos tus consultas!</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Contact Area End -->
    </main>
<?php
terminarPagina();