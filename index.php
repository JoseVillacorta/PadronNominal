<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>Padron Nominal Guadalupe</title>
  <meta name="description" content="">
  <meta name="keywords" content="">

  <!-- Favicons -->
  <link href="assets/img/logo_padron_nominal.png" rel="icon">


  <!-- Fonts -->
  <link href="https://fonts.googleapis.com" rel="preconnect">
  <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Inter:wght@100;200;300;400;500;600;700;800;900&family=Nunito:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Main CSS File -->
  <link href="assets/css/main.css" rel="stylesheet">
  <style>
    /* El estilo del toast */
    .toast {
      visibility: hidden;
      /* Inicialmente está oculto */
      min-width: 250px;
      margin-left: -125px;
      /* Centrar el toast */
      background-color: #333;
      color: #fff;
      text-align: center;
      border-radius: 2px;
      padding: 16px;
      position: fixed;
      z-index: 1;
      /* Se coloca encima del contenido */
      left: 50%;
      bottom: 30px;
      /* Posición en la parte inferior */
      font-size: 17px;
      display: flex;
      align-items: center;
      justify-content: center;
      opacity: 0;
      /* Inicialmente invisible */
      transition: opacity 0.5s ease-in-out;
      /* Efecto de desvanecimiento */
    }

    /* Mostrar el toast */
    .toast.show {
      visibility: visible;
      opacity: 1;
    }

    /* Estilos generales del modal */
    .modal {
      display: none;
      /* Inicialmente el modal está oculto */
      position: fixed;
      z-index: 9999;
      /* Asegura que el modal esté sobre todo el contenido */
      left: 0;
      top: 0;
      width: 100%;
      height: 100%;
      background-color: rgba(0, 0, 0, 0.5);
      /* Fondo translúcido */
      overflow: auto;
      /* Si el contenido excede la altura, se puede desplazar */
      padding-top: 100px;
      /* Ajuste superior */
      text-align: center;
      /* Centrado del contenido */
    }

    .modal-content {
      background-color: #fff;
      margin: auto;
      padding: 20px;
      border-radius: 10px;
      /* Bordes redondeados */
      width: 80%;
      max-width: 600px;
      /* Máximo tamaño */
      box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
    }

    .modal-body {
      padding: 20px;
    }

    .modal-footer {
      text-align: center;
      padding-top: 20px;
    }

    .modal-images {
      position: relative;
      width: 100%;
      height: 300px;
      /* Altura fija del contenedor de la imagen */
    }

    .modal-img {
      width: 100%;
      /* Hace que la imagen ocupe todo el ancho disponible */
      max-width: 500px;
      /* Asegura que la imagen no se haga demasiado grande */
      height: auto;
      display: none;
      /* Ocultar todas las imágenes por defecto */
      margin: 0 auto;
      /* Centra la imagen */
    }

    /* Botón de navegación */
    .nav-btn {
      padding: 10px 20px;
      background-color: #007bff;
      color: white;
      border: none;
      cursor: pointer;
      border-radius: 5px;
      margin: 0 10px;
      font-size: 16px;
    }

    .nav-btn:hover {
      background-color: #0056b3;
    }

    /* Botón de cierre */
    .modal-footer button {
      padding: 10px 20px;
      background-color: #007bff;
      color: white;
      border: none;
      cursor: pointer;
      border-radius: 5px;
    }

    .modal-footer button:hover {
      background-color: #0056b3;
    }
  </style>
</head>



<body class="index-page">

  <header id="header" class="header d-flex align-items-center fixed-top">
    <div class="container-fluid container-xl position-relative d-flex align-items-center">

      <a href="index.php" class="logo d-flex align-items-center me-auto">
        <img src="assets/img/logo_padron_nominal.png" alt="">
        <h1 class="sitename"></h1>
      </a>

      <nav id="navmenu" class="navmenu">
        <ul>
          <li><a href="index.php#hero" class="active">Inicio</a></li>
          <li><a href="index.php#about">Acerca de</a></li>
          <li><a href="./visita-domiciliario.php">Visita domiciliaria</a></li>
          <!-- <li><a href="index.html#services">Servicios</a></li> -->
          <li><a href="./faqs.php">Preguntas Frecuentes</a></li>
          <li class="dropdown"><a href="./service-details.php#"><span>Servicios</span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>
            <ul>
              <!-- <li><a href="#">Dropdown 1</a></li>
              <li class="dropdown"><a href="#"><span>Deep Dropdown</span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>
                <ul>
                  <li><a href="#">Deep Dropdown 1</a></li>
                  <li><a href="#">Deep Dropdown 2</a></li>
                  <li><a href="#">Deep Dropdown 3</a></li>
                  <li><a href="#">Deep Dropdown 4</a></li>
                  <li><a href="#">Deep Dropdown 5</a></li>
                </ul>
              </li>-->
              <li><a href="./service-details.php">Registro de Citas</a></li>
              <li><a href="./service-details.php">Asesoría y Consultas</a></li>
              <li><a href="./service-details.php">Campañas de Salud y Bienestar</a></li>
            </ul>
          </li>
          <li><a href="./contact.php">Contacto</a></li>
        </ul>
        <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
      </nav>

      <a class="btn-getstarted" href="./index-form.php">Empezar</a>

    </div>
  </header>

  <main class="main">

    <!-- Hero Section -->
    <section id="hero" class="hero section">
      <div class="hero-bg">
        <img src="assets/img/hero-bg-light.webp" alt="">
      </div>
      <div class="container text-center">
        <div class="d-flex flex-column justify-content-center align-items-center">
          <h1 data-aos="fade-up">Padron Nominal de <span>Guadalupe</span></h1>
          <p data-aos="fade-up" data-aos-delay="100">Todo lo que necesitas saber sobre nuestros servicios y procesos.<br></p>
          <div class="d-flex" data-aos="fade-up" data-aos-delay="200">
            <a href="#about" class="btn-get-started">Empezar</a>
            <a href="https://www.youtube.com/watch?v=XTlpj4QwQSE&t=91s&ab_channel=AGENDASEMANAL" class="glightbox btn-watch-video d-flex align-items-center"><i class="bi bi-play-circle"></i><span>Ver Video</span></a>
          </div>
          <img src="assets/img/logo_padron_nominal.png" class="img-fluid hero-img" alt="" data-aos="zoom-out" data-aos-delay="300">
        </div>
      </div>

    </section><!-- /Hero Section -->

    <!-- Featured Services Section -->
    <section id="featured-services" class="featured-services section light-background">

      <div class="container">

        <div class="row gy-4">

          <div class="col-xl-4 col-lg-6" data-aos="fade-up" data-aos-delay="100">
            <div class="service-item d-flex">
              <div class="icon flex-shrink-0"><i class="bi bi-briefcase"></i></div>
              <div>
                <h4 class="title"><a href="#" class="stretched-link"></a></h4>
                <p class="description"></p>
              </div>
            </div>
          </div>
          <!-- End Service Item -->

          <div class="col-xl-4 col-lg-6" data-aos="fade-up" data-aos-delay="200">
            <div class="service-item d-flex">
              <div class="icon flex-shrink-0"><i class="bi bi-card-checklist"></i></div>
              <div>
                <h4 class="title"><a href="#" class="stretched-link"></a></h4>
                <p class="description"></p>
              </div>
            </div>
          </div><!-- End Service Item -->

          <div class="col-xl-4 col-lg-6" data-aos="fade-up" data-aos-delay="300">
            <div class="service-item d-flex">
              <div class="icon flex-shrink-0"><i class="bi bi-bar-chart"></i></div>
              <div>
                <h4 class="title"><a href="#" class="stretched-link"></a></h4>
                <p class="description"></p>
              </div>
            </div>
          </div><!-- End Service Item -->

        </div>

      </div>

    </section><!-- /Featured Services Section -->

    <!-- About Section -->
    <section id="about" class="about section">

      <div class="container">

        <div class="row gy-4">

          <div class="col-lg-6 content" data-aos="fade-up" data-aos-delay="100">
            <!-- <p class="who-we-are">Quienes somos</p>-->
            <h3>¿Qué es el Padron Nominal?</h3>
            <p class="fst-italic">
              El Padrón Nominal es un registro oficial que permite a la Municipalidad Distrital de Guadalupe mantener información actualizada sobre los ciudadanos, sus características y necesidades. Este registro es clave para garantizar la correcta asignación de recursos comunitarios, planificar campañas de salud y bienestar, y facilitar el acceso a diversos programas sociales y municipales.
            </p>
            <ul>
              <li><i class="bi bi-check-circle"></i> <span>Organización de Datos Ciudadanos.</span></li>
              <li><i class="bi bi-check-circle"></i> <span>Acceso a Programas Sociales.</span></li>
              <li><i class="bi bi-check-circle"></i> <span>Planeamiento Estratégico.</span></li>
              <li><i class="bi bi-check-circle"></i> <span>Inclusión Ciudadana.</span></li>
            </ul>
            <a href="index.php#features" class="read-more"><span>Leer mas</span><i class="bi bi-arrow-right"></i></a>
          </div>

          <div class="col-lg-6 about-images" data-aos="fade-up" data-aos-delay="200">
            <div class="row gy-4">
              <div class="col-lg-6">
                <img src="assets/img/about-company-1.jpg" class="img-fluid" alt="">
              </div>
              <div class="col-lg-6">
                <div class="row gy-4">
                  <div class="col-lg-12">
                    <img src="assets/img/about-company-2.jpg" class="img-fluid" alt="">
                  </div>
                  <div class="col-lg-12">
                    <img src="assets/img/about-company-3.jpg" class="img-fluid" alt="">
                  </div>
                </div>
              </div>
            </div>

          </div>

        </div>

      </div>
    </section><!-- /About Section -->

    <!-- Clients Section 
    <section id="clients" class="clients section">

      <div class="container" data-aos="fade-up">

        <div class="row gy-4">

          <div class="col-xl-2 col-md-3 col-6 client-logo">
            <img src="assets/img/clients/client-1.png" class="img-fluid" alt="">
          </div>

          <div class="col-xl-2 col-md-3 col-6 client-logo">
            <img src="assets/img/clients/client-2.png" class="img-fluid" alt="">
          </div>

          <div class="col-xl-2 col-md-3 col-6 client-logo">
            <img src="assets/img/clients/client-3.png" class="img-fluid" alt="">
          </div>

          <div class="col-xl-2 col-md-3 col-6 client-logo">
            <img src="assets/img/clients/client-4.png" class="img-fluid" alt="">
          </div>

          <div class="col-xl-2 col-md-3 col-6 client-logo">
            <img src="assets/img/clients/client-5.png" class="img-fluid" alt="">
          </div>

          <div class="col-xl-2 col-md-3 col-6 client-logo">
            <img src="assets/img/clients/client-6.png" class="img-fluid" alt="">
          </div>

        </div>

      </div>

    </section>/Clients Section -->

    <!-- Features Section -->
    <section id="features" class="features section">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Noticias y Campañas Activas</h2>
        <p>En esta sección se compartirá información actualizada sobre las iniciativas y eventos organizados por la Municipalidad Distrital de Guadalupe, enfocados en mejorar la calidad de vida de los ciudadanos y fomentar la participación comunitaria.</p>
      </div><!-- End Section Title -->

      <div class="container">
        <div class="row justify-content-between">

          <div class="col-lg-5 d-flex align-items-center">

            <ul class="nav nav-tabs" data-aos="fade-up" data-aos-delay="100">
              <li class="nav-item">
                <a class="nav-link active show" data-bs-toggle="tab" data-bs-target="#features-tab-1">
                  <i class="bi bi-binoculars"></i>
                  <div>
                    <h4 class="d-none d-lg-block">Organización de Datos Ciudadanos.</h4>
                    <p>
                      Almacenar y actualizar información sobre los residentes de Guadalupe, como nombre, dirección, edad, género y otros datos demográficos, que son fundamentales para una gestión eficiente.
                    </p>
                  </div>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" data-bs-toggle="tab" data-bs-target="#features-tab-2">
                  <i class="bi bi-box-seam"></i>
                  <div>
                    <h4 class="d-none d-lg-block">Acceso a Programas Sociales.</h4>
                    <p>
                      Permitir que los ciudadanos accedan a beneficios como:
                      Programas de vacunación.
                      Campañas de alimentación saludable.
                      Talleres de educación y formación.
                    </p>
                  </div>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" data-bs-toggle="tab" data-bs-target="#features-tab-3">
                  <i class="bi bi-brightness-high"></i>
                  <div>
                    <h4 class="d-none d-lg-block">Planeamiento Estratégico.</h4>
                    <p>
                      Facilitar la planificación de políticas públicas y programas específicos basados en las necesidades reales de la población, identificadas a través del padrón.
                    </p>
                  </div>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" data-bs-toggle="tab" data-bs-target="#features-tab-3">
                  <i class="bi bi-brightness-high"></i>
                  <div>
                    <h4 class="d-none d-lg-block">Inclusión Ciudadana.</h4>
                    <p>
                      Garantizar que ningún ciudadano quede excluido de los servicios ofrecidos por la municipalidad, promoviendo la igualdad de oportunidades en toda la comunidad.
                    </p>
                  </div>
                </a>
              </li>
            </ul><!-- End Tab Nav -->

          </div>

          <div class="col-lg-6">

            <div class="tab-content" data-aos="fade-up" data-aos-delay="200">

              <div class="tab-pane fade active show" id="features-tab-1">
                <img src="assets/img/tabs-1.jpg" alt="" class="img-fluid">
              </div><!-- End Tab Content Item -->

              <div class="tab-pane fade" id="features-tab-2">
                <img src="assets/img/tabs-2.jpg" alt="" class="img-fluid">
              </div><!-- End Tab Content Item -->

              <div class="tab-pane fade" id="features-tab-3">
                <img src="assets/img/tabs-3.jpg" alt="" class="img-fluid">
              </div><!-- End Tab Content Item -->
            </div>

          </div>

        </div>

      </div>

    </section><!-- /Features Section -->

    <!-- Services Section -->
    <section id="services" class="services section light-background">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Servicios</h2>
        <!--<p>Necessitatibus eius consequatur ex aliquid fuga eum quidem sint consectetur velit</p>-->
      </div><!-- End Section Title -->

      <div class="container">

        <div class="row g-5">

          <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
            <div class="service-item item-cyan position-relative">
              <i class="bi bi-activity icon"></i>
              <div>
                <h3>Registro de Citas</h3>
                <p>Programa tu visita domiciliaria en solo unos pasos. El personal de la municipalidad te asistirá para confirmar tu información y asegurar que tus datos en el padrón estén actualizados.</p>
                <a href="./service-details.php" class="read-more stretched-link">Learn More <i class="bi bi-arrow-right"></i></a>
              </div>
            </div>
          </div><!-- End Service Item -->

          <div class="col-lg-6" data-aos="fade-up" data-aos-delay="200">
            <div class="service-item item-orange position-relative">
              <i class="bi bi-broadcast icon"></i>
              <div>
                <h3>Asesoría y Consultas</h3>
                <p>Si tienes dudas sobre el proceso de empadronamiento o necesitas más información sobre los servicios disponibles, nuestro equipo está a tu disposición para ayudarte.</p>
                <a href="./service-details.php" class="read-more stretched-link">Learn More <i class="bi bi-arrow-right"></i></a>
              </div>
            </div>
          </div><!-- End Service Item -->

          <div class="col-lg-6" data-aos="fade-up" data-aos-delay="300">
            <div class="service-item item-teal position-relative">
              <i class="bi bi-easel icon"></i>
              <div>
                <h3>Campañas de Salud y Bienestar</h3>
                <p>Mantente informado sobre las campañas de vacunación, chequeos médicos gratuitos, y otras iniciativas de salud que la municipalidad está organizando.</p>
                <a href="./service-details.php" class="read-more stretched-link">Learn More <i class="bi bi-arrow-right"></i></a>
              </div>
            </div>
          </div><!-- End Service Item -->
        </div>
      </div>
    </section><!-- /Services Section -->

    <!-- More Features Section -->
    <section id="more-features" class="more-features section">

      <div class="container">

        <div class="row justify-content-around gy-4">

          <div class="col-lg-6 d-flex flex-column justify-content-center order-2 order-lg-1" data-aos="fade-up" data-aos-delay="100">
            <h3>Enim quis est voluptatibus aliquid consequatur</h3>
            <p>Esse voluptas cumque vel exercitationem. Reiciendis est hic accusamus. Non ipsam et sed minima temporibus laudantium. Soluta voluptate sed facere corporis dolores excepturi</p>

            <div class="row">

              <div class="col-lg-6 icon-box d-flex">
                <i class="bi bi-easel flex-shrink-0"></i>
                <div>
                  <h4>Lorem Ipsum</h4>
                  <p>Voluptatum deleniti atque corrupti quos dolores et quas molestias </p>
                </div>
              </div><!-- End Icon Box -->

              <div class="col-lg-6 icon-box d-flex">
                <i class="bi bi-patch-check flex-shrink-0"></i>
                <div>
                  <h4>Nemo Enim</h4>
                  <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiise</p>
                </div>
              </div><!-- End Icon Box -->

              <div class="col-lg-6 icon-box d-flex">
                <i class="bi bi-brightness-high flex-shrink-0"></i>
                <div>
                  <h4>Dine Pad</h4>
                  <p>Explicabo est voluptatum asperiores consequatur magnam. Et veritatis odit</p>
                </div>
              </div><!-- End Icon Box -->

              <div class="col-lg-6 icon-box d-flex">
                <i class="bi bi-brightness-high flex-shrink-0"></i>
                <div>
                  <h4>Tride clov</h4>
                  <p>Est voluptatem labore deleniti quis a delectus et. Saepe dolorem libero sit</p>
                </div>
              </div><!-- End Icon Box -->

            </div>

          </div>

          <div class="features-image col-lg-5 order-1 order-lg-2" data-aos="fade-up" data-aos-delay="200">
            <img src="assets/img/features-3.jpg" alt="">
          </div>

        </div>

      </div>

    </section><!-- /More Features Section -->

    <!-- Testimonials Section -->
    <section id="actores_sociales" class="testimonials section light-background">
      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Actores Sociales</h2>
        <p></p>
      </div><!-- End Section Title -->

      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="swiper init-swiper">
          <script type="application/json" class="swiper-config">
            {
              "loop": true,
              "speed": 600,
              "autoplay": {
                "delay": 5000
              },
              "slidesPerView": "auto",
              "pagination": {
                "el": ".swiper-pagination",
                "type": "bullets",
                "clickable": true
              },
              "breakpoints": {
                "320": {
                  "slidesPerView": 1,
                  "spaceBetween": 40
                },
                "1200": {
                  "slidesPerView": 3,
                  "spaceBetween": 1
                }
              }
            }
          </script>
          <div class="swiper-wrapper">

            <div class="swiper-slide">
              <div class="testimonial-item">
                <div class="stars">
                  <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                </div>
                <p>
                  Proin iaculis purus consequat sem cure digni ssim donec porttitora entum suscipit rhoncus. Accusantium quam, ultricies eget id, aliquam eget nibh et. Maecen aliquam, risus at semper.
                </p>
                <div class="profile mt-auto">
                  <img src="assets/img/testimonials/testimonials-1.jpg" class="testimonial-img" alt="">
                  <h3>Saul Goodman</h3>
                  <h4>Ceo &amp; Founder</h4>
                </div>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item">
                <div class="stars">
                  <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                </div>
                <p>
                  Export tempor illum tamen malis malis eram quae irure esse labore quem cillum quid cillum eram malis quorum velit fore eram velit sunt aliqua noster fugiat irure amet legam anim culpa.
                </p>
                <div class="profile mt-auto">
                  <img src="assets/img/testimonials/testimonials-2.jpg" class="testimonial-img" alt="">
                  <h3>Sara Wilsson</h3>
                  <h4>Designer</h4>
                </div>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item">
                <div class="stars">
                  <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                </div>
                <p>
                  Enim nisi quem export duis labore cillum quae magna enim sint quorum nulla quem veniam duis minim tempor labore quem eram duis noster aute amet eram fore quis sint minim.
                </p>
                <div class="profile mt-auto">
                  <img src="assets/img/testimonials/testimonials-3.jpg" class="testimonial-img" alt="">
                  <h3>Jena Karlis</h3>
                  <h4>Store Owner</h4>
                </div>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item">
                <div class="stars">
                  <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                </div>
                <p>
                  Fugiat enim eram quae cillum dolore dolor amet nulla culpa multos export minim fugiat minim velit minim dolor enim duis veniam ipsum anim magna sunt elit fore quem dolore labore illum veniam.
                </p>
                <div class="profile mt-auto">
                  <img src="assets/img/testimonials/testimonials-4.jpg" class="testimonial-img" alt="">
                  <h3>Matt Brandon</h3>
                  <h4>Freelancer</h4>
                </div>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item">
                <div class="stars">
                  <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                </div>
                <p>
                  Quis quorum aliqua sint quem legam fore sunt eram irure aliqua veniam tempor noster veniam enim culpa labore duis sunt culpa nulla illum cillum fugiat legam esse veniam culpa fore nisi cillum quid.
                </p>
                <div class="profile mt-auto">
                  <img src="assets/img/testimonials/testimonials-5.jpg" class="testimonial-img" alt="">
                  <h3>John Larson</h3>
                  <h4>Entrepreneur</h4>
                </div>
              </div>
            </div><!-- End testimonial item -->

          </div>
          <div class="swiper-pagination"></div>
        </div>

      </div>

    </section><!-- /Testimonials Section -->

  </main>

  <footer id="footer" class="footer position-relative light-background">

    <div class="container footer-top">
      <div class="row gy-4">
        <div class="col-lg-4 col-md-6 footer-about">
          <a href="index.php" class="logo d-flex align-items-center">
            <span class="sitename">Padron Nominal</span>
          </a>
          <div class="footer-contact pt-3">
            <p>209 C. la Victoria</p>
            <p>Guadalupe, La Libertad</p>
            <p class="mt-3"><strong>Telefono:</strong> <span>+51 946 248 794</span></p>
            <p><strong>Correo:</strong> <span>padronnominal@gmail.com</span></p>
          </div>
          <!--<div class="social-links d-flex mt-4">
            <a href=""><i class="bi bi-twitter-x"></i></a>
            <a href=""><i class="bi bi-facebook"></i></a>
            <a href=""><i class="bi bi-instagram"></i></a>
            <a href=""><i class="bi bi-linkedin"></i></a>
          </div>-->
        </div>

        <div class="col-lg-2 col-md-3 footer-links">
          <h4>Enlaces útiles</h4>
          <ul>
            <li><a href="#">Inicio</a></li>
            <li><a href="#about">Acerca de</a></li>
            <li><a href="#features">Caracteristicas</a></li>
            <li><a href="./faqs.php">Preguntas Frecuentes</a></li>
            <li><a href="./service-details.php">Servicios</a></li>
            <li><a href="./contact.php">Contacto</a></li>
          </ul>
        </div>

        <div class="col-lg-2 col-md-3 footer-links">
          <h4>Otras</h4>
          <ul>
            <li><a href="#services">Servicios</a></li>
            <li><a href="#more-features">Product Management</a></li>
            <li><a href="#actores_sociales">Actores Sociales</a></li>
          </ul>
        </div>

        <div class="col-lg-4 col-md-12 footer-newsletter">
          <h4>Our Newsletter</h4>
          <p>Subscribe to our newsletter and receive the latest news about our products and services!</p>
          <form action="forms/newsletter.php" method="post" class="php-email-form">
            <div class="newsletter-form"><input type="email" name="email"><input type="submit" value="Subscribe"></div>
            <div class="loading">Loading</div>
            <div class="error-message"></div>
            <div class="sent-message">Your subscription request has been sent. Thank you!</div>
          </form>
        </div>

      </div>
    </div>
  </footer>
  <!-- Modal de bienvenida -->
  <div id="welcomeModal" class="modal">
    <div class="modal-content">
      <div class="modal-body">
        <!-- Contenedor de imágenes (puedes agregar más imágenes aquí) -->
        <img src="./assets/img/banner.jpg" class="modal-img" id="img1">
        <!-- Contenedor del PDF 
        <iframe id="pdfViewer" src="./assets/img/Guia de Actualización de dirección de domicilio de la madre.pdf" width="100%" height="500px"></iframe>
        <iframe id="pdfViewer2" src="./assets/img/Problemas de aplicativo web Padrón Nominal.pdf" width="100%" height="500px"></iframe>-->

      </div>
      <div class="modal-footer">
        <!-- Botones para navegar entre las imágenes -->
        <button class="nav-btn" id="prevBtn" onclick="changeImage(-1)">&#10094; Anterior</button>
        <button class="nav-btn" id="nextBtn" onclick="changeImage(1)">Siguiente &#10095;</button>
        <button onclick="closeModal()">Cerrar</button>
      </div>
    </div>
  </div>

  <!-- Scroll Top -->
  <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Preloader -->
  <div id="preloader"></div>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>

  <!-- Main JS File -->
  <script src="assets/js/main.js"></script>

  <script>
    // Mostrar el modal cuando la página se carga
    window.onload = function() {
      var modal = document.getElementById("welcomeModal");
      modal.style.display = "block"; // Mostrar el modal
    }

    // Función para cerrar el modal
    function closeModal() {
      var modal = document.getElementById("welcomeModal");
      modal.style.display = "none";
    }
    // Lógica para mostrar la imagen anterior o siguiente
    var currentImageIndex = 0; // Empezamos desde la primera imagen
    var images = document.querySelectorAll(".modal-img"); // Todas las imágenes dentro del modal

    // Muestra la imagen basada en el índice
    function showImage(index) {
      // Asegurarse de que el índice esté dentro del rango de imágenes
      if (index >= images.length) {
        currentImageIndex = 0; // Regresar a la primera imagen
      } else if (index < 0) {
        currentImageIndex = images.length - 1; // Ir a la última imagen
      } else {
        currentImageIndex = index;
      }

      // Ocultar todas las imágenes
      images.forEach(function(image) {
        image.style.display = "none";
      });

      // Mostrar la imagen actual
      images[currentImageIndex].style.display = "block";
    }

    // Cambiar a la imagen anterior o siguiente
    function changeImage(direction) {
      showImage(currentImageIndex + direction); // Mover hacia adelante o atrás
    }

    // Mostrar la primera imagen al cargar el modal
    showImage(currentImageIndex);
  </script>


</body>

</html>