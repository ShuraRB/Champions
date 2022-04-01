
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Champions Ligue</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="<?= base_url(RECURSOS_PORTAL_IMG.'favicon.ico');?>" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600;700&family=Montserrat:wght@400;500;600;700&display=swap" rel="stylesheet">  

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="<?= base_url(RECURSOS_PORTAL_LIB.'animate/animate.min.css');?>" rel="stylesheet">
    <link href="<?= base_url(RECURSOS_PORTAL_LIB.'owlcarousel/assets/owl.carousel.min.css');?>" rel="stylesheet">
    <link href="<?= base_url(RECURSOS_PORTAL_LIB.'tempusdominus/css/tempusdominus-bootstrap-4.min.css');?>" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="<?= base_url(RECURSOS_PORTAL_CSS.'bootstrap.min.css');?>" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="<?= base_url(RECURSOS_PORTAL_CSS.'style.css');?>" rel="stylesheet">
</head>

<body>
    <div class="container-xxl bg-white p-0">
        <!-- Spinner Start -->
        <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div>
        <!-- Spinner End -->

        <!-- Header Start -->
        <div class="container-fluid bg-dark px-0">
            <div class="row gx-0">
                <div class="col-lg-3 bg-dark d-none d-lg-block">
                    <a href="index.html" class="navbar-brand w-100 h-100 m-0 p-0 d-flex align-items-center justify-content-center">
                        <h1 class="m-0 text-primary text-uppercase">Champions <br> League</h1>
                    </a>
                </div>
                <div class="col-lg-9">
                    <div class="row gx-0 bg-white d-none d-lg-flex">
                        <div class="col-lg-7 px-5 text-start">
                            <div class="h-100 d-inline-flex align-items-center py-2 me-4">
                                <p class="mb-0">Bienvenido</p>
                            </div>
                            <!-- <div class="h-100 d-inline-flex align-items-center py-2">
                                <i class="fa fa-phone-alt text-primary me-2"></i>
                                <p class="mb-0">+012 345 6789</p>
                            </div> -->
                        </div>
                        <!-- <div class="col-lg-5 px-5 text-end">
                            <div class="d-inline-flex align-items-center py-2">
                                <a class="me-3" href=""><i class="fab fa-facebook-f"></i></a>
                                <a class="me-3" href=""><i class="fab fa-twitter"></i></a>
                                <a class="me-3" href=""><i class="fab fa-linkedin-in"></i></a>
                                <a class="me-3" href=""><i class="fab fa-instagram"></i></a>
                                <a class="" href=""><i class="fab fa-youtube"></i></a>
                            </div>
                        </div> -->
                    </div>
                    <nav class="navbar navbar-expand-lg bg-dark navbar-dark p-3 p-lg-0">
                        <a href="index.html" class="navbar-brand d-block d-lg-none">
                            <h1 class="m-0 text-primary text-uppercase">Champions <br> League</h1>
                        </a>
                        <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                            <div class="navbar-nav mr-auto py-0">
                                <a href="index.html" class="nav-item nav-link active">Inicio</a>
                                <a href="about.html" class="nav-item nav-link">Galeria</a>
                                <div class="nav-item dropdown">
                                    <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Tienda</a>
                                    <div class="dropdown-menu rounded-0 m-0">
                                        <a href="booking.html" class="dropdown-item">Jerseys</a>
                                        <a href="team.html" class="dropdown-item">Balones</a>
                                    </div>
                                </div>
                                <a href="contact.html" class="nav-item nav-link">Contacto</a>
                            </div>
                            <!-- <a href="https://htmlcodex.com/hotel-html-template-pro" class="btn btn-primary rounded-0 py-4 px-md-5 d-none d-lg-block">Premium Version<i class="fa fa-arrow-right ms-3"></i></a> -->
                        </div>
                    </nav>
                </div>
            </div>
        </div>
        <!-- Header End -->


        <!-- *********************************************** -->
        <!-- ************* CONTENIDO PRINCIPAL ************* -->
        <?= $this->renderSection("contenido") ?>
        <!-- *********************************************** -->
        <!-- *********************************************** -->

        <!-- Footer Start -->
        <div class="container-fluid bg-dark text-light footer wow fadeIn" data-wow-delay="0.1s">
            <div class="container pb-5">
                <div class="row g-5">
                    <div class="col-md-6 col-lg-4">
                        <div class="bg-primary rounded p-4">
                            <a href="index.html"><h1 class="text-white text-uppercase mb-3">Champions <br> League</h1></a>
                            <p class="text-white mb-0">
								Todo sobre la liga de futbol más importante del mundo
                            </p>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3">
                    <img class="img-fluid rounded w-75 wow zoomIn" data-wow-delay="0.7s" src="<?= base_url(RECURSOS_PORTAL_IMG.'messi.png');?>">
                    </div>
                    <div class="col-lg-5 col-md-12">
                        <div class="row gy-5 g-4">
                            <div class="col-md-6">
                            <img class="img-fluid rounded w-75 wow zoomIn" data-wow-delay="0.7s" src="<?= base_url(RECURSOS_PORTAL_IMG.'cr7.png');?>">
                            </div>
                            <div class="col-md-6">
                                <h6 class="section-title text-start text-primary text-uppercase mb-4">Menú</h6>
                                <a class="btn btn-link" href="">Inicio</a>
                                <a class="btn btn-link" href="">Galeria</a>
                                <a class="btn btn-link" href="">Tienda</a>
                                <a class="btn btn-link" href="">Contacto</a>
                            </div>
                            
                        </div>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="copyright">
                    <div class="row">
                        <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                            &copy; <a class="border-bottom" href="#">Champions league</a>, All Right Reserved. 
							
				
                        </div>
                        <div class="col-md-6 text-center text-md-end">
                            <div class="footer-menu">
                                <a href="">Inicio</a>
                                <a href="">Galeria</a>
                                <a href="">Tienda</a>
                                <a href="">Contacto</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Footer End -->


        <!-- Back to Top -->
        <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
    </div>

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="<?= base_url(RECURSOS_PORTAL_LIB.'wow/wow.min.js');?>"></script>
    <script src="<?= base_url(RECURSOS_PORTAL_LIB.'easing/easing.min.js');?>"></script>
    <script src="<?= base_url(RECURSOS_PORTAL_LIB.'waypoints/waypoints.min.js');?>"></script>
    <script src="<?= base_url(RECURSOS_PORTAL_LIB.'counterup/counterup.min.js');?>"></script>
    <script src="<?= base_url(RECURSOS_PORTAL_LIB.'owlcarousel/owl.carousel.min.js');?>"></script>
    <script src="<?= base_url(RECURSOS_PORTAL_LIB.'tempusdominus/js/moment.min.js');?>"></script>
    <script src="<?= base_url(RECURSOS_PORTAL_LIB.'tempusdominus/js/moment-timezone.min.js');?>"></script>
    <script src="<?= base_url(RECURSOS_PORTAL_LIB.'tempusdominus/js/tempusdominus-bootstrap-4.min.js');?>"></script>

    <!-- Template Javascript -->
    <script src="<?= base_url(RECURSOS_PORTAL_JS.'main.js');?>"></script>
</body>

</html>