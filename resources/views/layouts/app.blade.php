<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <title>Air Quality</title>
        <!-- Favicon-->
        <link rel="icon" type="image/png" href={{ URL::asset("logoOf.png") }}>
        <!-- Font Awesome icons (free version)-->
        <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href={{ URL::asset("css/css/styles.css") }} rel="stylesheet"/>
    </head>
    <body id="page-top">
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg  bg-body-tertiary bg-secondary text-uppercase fixed-top" id="mainNav">
            <div class="container">
                <a class="navbar-brand" href="#page-top">Air Quality</a>
                <button class="navbar-toggler text-uppercase font-weight-bold bg-primary text-white rounded" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    Menú
                    <i class="fas fa-bars"></i>
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded" href="#portfolio">Pruebas</a></li>
                        <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded" href="#about">Acerca de</a></li>
                        <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded" href="#programs">Programas</a></li>
                        <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded" href=""><i class="fa-solid fa-right-from-bracket"></i></a></li>   
                    </ul>
                </div>
            </div>
        </nav>
        <!-- Masthead-->
        <header class="masthead bg-primary text-white text-center">
            <div class="container d-flex align-items-center flex-column">
                <!-- Masthead Avatar Image-->
                <img class="masthead-avatar mb-5 rounded-circle" src={{ URL::asset("logoOf.jpeg") }} alt="Air Quality" />
                <!-- Masthead Heading-->
                <h1 class="masthead-heading text-uppercase mb-0">Air Quality</h1>
                <!-- Icon Divider-->
                <div class="divider-custom divider-light">
                    <div class="divider-custom-line"></div>
                    <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                    <div class="divider-custom-line"></div>
                </div>
                <!-- Masthead Subheading-->
                <p class="masthead-subheading font-weight-light mb-0">Respirar aire puro es un derecho, no contaminarlo es un <strong>deber.</strong></p>
            </div>
        </header>

        <!-- Portfolio Section-- //Lo que va a cambiar-->
        <section class="page-section portfolio" id="portfolio">
            <div class="container">
                <!-- Portfolio Section Heading-->
                <h2 class="page-section-heading text-center text-uppercase text-secondary mb-0">Pruebas</h2>
                <!-- Icon Divider-->
                <div class="divider-custom">
                    <div class="divider-custom-line"></div>
                    <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                    <div class="divider-custom-line"></div>
                </div>
                <!-- Portfolio Grid Items-->
                <div class="row justify-content-center">
                    <!-- Portfolio Item 1-->
                    <div class="col-md-6 col-lg-4 mb-5">
                        <div class="portfolio-item mx-auto" data-bs-toggle="modal" data-bs-target="#portfolioModal1">
                            <div class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100">
                                

                            </div>
                            <img class="img-fluid" src={{ URL::asset("logoOf.png") }} alt="Air Quality - Prueba" />
                        </div>
                    </div>
                </div>
            </div>
        </section>
        


        <!-- About Section-->
        <section class="page-section bg-primary text-white mb-0" id="about">
            <div class="container">
                <!-- About Section Heading-->
                <h2 class="page-section-heading text-center text-uppercase text-white">Acerca de</h2>
                <!-- Icon Divider-->
                <div class="divider-custom divider-light">
                    <div class="divider-custom-line"></div>
                    <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                    <div class="divider-custom-line"></div>
                </div>
                <!-- About Section Content-->
                <div class="row">
                    <div class="col-lg-4 ms-auto"><p class="lead">La contaminación del aire es una mezcla de partículas y gases que pueden alcanzar concentraciones nocivas tanto en el exterior como en el interior. Sus efectos pueden ir desde un mayor riesgo de enfermedades hasta un aumento de las temperaturas. El índice de calidad del aire (ICA) es un indicador que permite informar de la calidad del aire a la población de una manera clara, sencilla y unificada y fácilmente entendible por los ciudadanos. Además, el índice de calidad del aire, permite comparar la calidad del aire entre diferentes zonas, al tener criterios homogéneos que unifican su cálculo.</p></div>
                    <div class="col-lg-4 me-auto"><p class="lead">Air Quality es un dispositivo que se compone de distintos sensores, conectado a Internet y es asistido por una aplicacion móvil que monitorea la calidad del aire, tomando en cuenta el índice del dióxido de carbono en que se encuentra, la humedad y temperatura, notificando al usuario las variaciones en tiempo real. Air Quality permite medir el índice de calidad del aire, para obtener un control efectivo de la contaminación y reducir efectos contraproducentes en la salud de los seres vivos.</p></div>
                </div>
                <!-- About Section Button-->
                <div class="text-center mt-4">
                    <a class="btn btn-xl btn-outline-light" href="">
                        <i class="fas fa-download me-2"></i>
                        Air Quality
                    </a>
                </div>
            </div>
        </section>

        <section class="page-section" id="programs">
            <div class="container">
                <!-- About Section Heading-->
                <h2 class="page-section-heading text-center text-uppercase text-secondary mb-0">Programas</h2>
                <!-- Icon Divider-->
                <div class="divider-custom">
                    <div class="divider-custom-line"></div>
                    <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                    <div class="divider-custom-line"></div>
                </div>
                <!-- About Section Content-->
                <div class="row justify-content-center">
                    <div class="col-lg-8 col-xl-7">
                        <p class="lead text-center">Sembrando vida, vida para el futuro.</p>
                        <img class="img-fluid mx-auto d-block" src={{ URL::asset("sembrandoVida.jpeg") }} alt="Sembrando vida, vida para el futuro" width="600" height="400">
                    </div>
                </div>
                <!-- About Section Button-->
                <!-- <div class="text-center mt-4">
                    <a class="btn btn-xl btn-outline-light" href="">
                        <i class="fas fa-download me-2"></i>
                        Air Quality
                    </a>
                </div> -->
            </div>
        </section>

        
        <!-- Footer-->
        <footer class="footer text-center">
            <div class="container">
                <div class="row">
                    <!-- Footer Location-->
                    <div class="col-lg-4 mb-5 mb-lg-0">
                        <h4 class="text-uppercase mb-4">Localización</h4>
                        <p class="lead mb-0 text-center">
                            UTT
                            <br />
                            Edificio P
                        </p>
                    </div>
                    <!-- Footer Social Icons-->
                    <div class="col-lg-4 mb-5 mb-lg-0">
                        <h4 class="text-uppercase mb-4">Air Quality</h4>
                        <a class="btn btn-outline-light btn-social mx-1" href="#!"><i class="fab fa-fw fa-facebook-f"></i></a>
                        <a class="btn btn-outline-light btn-social mx-1" href="#!"><i class="fab fa-fw fa-twitter"></i></a>
                        <a class="btn btn-outline-light btn-social mx-1" href="#!"><i class="fa-brands fa-google"></i></a>                        
                    </div>
                    <!-- Footer About Text-->
                    <div class="col-lg-4">
                        <h4 class="text-uppercase text-center mb-4 ">Equipo Air Quality</h4>
                        <p class="lead mb-0">
                            Comprometidos con el cuidado del medio ambiente
                            <a href="https://www.who.int/es/health-topics/air-pollution#tab=tab_1">Inicia el cambio</a>
                            .
                        </p>
                        <br>
                    </div>                    
                </div>
            </div>
        </footer>
        <!-- Copyright Section-->
        <div class="copyright py-4 text-center text-white">
            <div class="container"><small>Copyright &copy; 2023</small></div>
            
        </div>
        <!-- Portfolio Modals-->
        <!-- Portfolio Modal 1-->
        <div class="portfolio-modal modal fade" id="portfolioModal1" tabindex="-1" aria-labelledby="portfolioModal1" aria-hidden="true">
            <div class="modal-dialog modal-xl">
                <div class="modal-content">
                    <div class="modal-header border-0"><button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button></div>
                    <div class="modal-body text-center pb-5">
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-lg-8">
                                    <!-- Portfolio Modal - Title-->
                                    <h2 class="portfolio-modal-title text-secondary text-uppercase mb-0">Prueba</h2>
                                    <!-- Icon Divider-->
                                    <div class="divider-custom">
                                        <div class="divider-custom-line"></div>
                                        <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                                        <div class="divider-custom-line"></div>
                                    </div>
                                    <!-- Portfolio Modal - Image-->
                                    <img class="img-fluid rounded mb-5" src={{ URL::asset("logoOf.png") }} alt="Prueba" />
                                    <!-- Portfolio Modal - Text-->
                                    <h4 class="text-uppercase mb-0">Descripción de la prueba:</h4>
                                    @yield('content')
                                    <button class="btn btn-primary" data-bs-dismiss="modal">
                                        Cerrar ventana
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
        <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
        <!-- * *                               SB Forms JS                               * *-->
        <!-- * * Activate your form at https://startbootstrap.com/solution/contact-forms * *-->
        <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
        <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
    </body>
</html>