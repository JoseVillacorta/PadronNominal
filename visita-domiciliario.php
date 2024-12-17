<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>Starter Page - QuickStart Bootstrap Template</title>
  <meta name="description" content="">
  <meta name="keywords" content="">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
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
  <?php
  include('connection.php');
  if (isset($_REQUEST['save-event'])) {
    $title = $_REQUEST['title'];
    $start_date = $_REQUEST['start_date'];
    $end_date = $_REQUEST['end_date'];

    $insert_query = mysqli_query($connection, "insert into tbl_event set title='$title', start_date='$start_date', end_date='$end_date'");
    if ($insert_query) {
      header('location:view-calendar.php');
    } else {
      $msg = "Event not created";
    }
  }
  ?>

</head>
<style>
  .box {
    width: 100%;
    max-width: 600px;
    background-color: #f9f9f9;
    border: 1px solid #ccc;
    border-radius: 5px;
    padding: 16px;
    margin: 0 auto;
  }

  .error {
    color: red;
    font-weight: 700;
  }
</style>

<body class="starter-page-page">

  <header id="header" class="header d-flex align-items-center sticky-top">
    <div class="container-fluid container-xl position-relative d-flex align-items-center">

      <a href="index.php" class="logo d-flex align-items-center me-auto">
        <img src="assets/img/logo_padron_nominal.png" alt="">
        <h1 class="sitename"></h1>
      </a>

      <nav id="navmenu" class="navmenu">
        <ul>
          <li><a href="index.php#hero" class="active">Inicio</a></li>
          <li><a href="index.php#about">Acerca de</a></li>
          <li><a href="#">Visita domiciliaria</a></li>
          <li><a href="./faqs.php">Preguntas Frecuentes</a></li>
          <li class="dropdown"><a href="./service-details.php"><span>Servicios</span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>
            <ul>
              <li><a href="./service-details.php">Registro de Citas</a></li>
              <li><a href="./service-details.php">Asesoría y Consultas</a></li>
              <li><a href="./service-details.php">Campañas de Salud y Bienestar</a></li>
            </ul>
          </li>
          <li><a href="./contact.php">Contacto</a></li>
        </ul>
        <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
      </nav>

      <a class="btn-getstarted" href="index.php#about">Empezar</a>

    </div>
  </header>

  <main class="main">

    <!-- Page Title -->
    <div class="page-title" data-aos="fade">
      <div class="container d-lg-flex justify-content-between align-items-center">
        <h1 class="mb-2 mb-lg-0">Visita Domiciliaria</h1>
        <nav class="breadcrumbs">
          <ol>
            <li><a href="index.php">Inicio</a></li>
            <li class="current">Visita Domiciliaria</li>
          </ol>
        </nav>
      </div>
    </div><!-- End Page Title -->

    <!-- Starter Section Section -->
    <section id="starter-section" class="starter-section section">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Visita Domiciliaria</h2>
        <p>A continuación, puedes ver un calendario interactivo donde podras elegir la fecha y hora de tu cita. Consulta los horarios disponibles para evitar esperas y selecciona el que mejor se ajuste a tu agenda.</p>
      </div><!-- End Section Title -->

      <div class="container">
        <div class="table-responsive">
          <!--<h3 align="center">Create Event</h3><br />-->
          <div class="box">
            <form method="post">
              <div class="form-group">
                <label for="title">Enter Title of the Event</label>
                <input type="text" name="title" id="title" placeholder="Enter Title" required
                  data-parsley-type="title" data-parsley-trigg
                  er="keyup" class="form-control" />
              </div>
              <div class="form-group">
                <label for="date">Fecha de Inicio</label>
                <input type="date" name="start_date" id="start_date" required
                  data-parsley-type="date" data-parsley-trigg
                  er="keyup" class="form-control" />
              </div>
              <div class="form-group">
                <label for="date">End Date</label>
                <input type="date" name="end_date" id="end_date" required
                  data-parsley-type="date" data-parsley-trigg
                  er="keyup" class="form-control" />
              </div>
              <div class="form-group">
                <input type="submit" id="save-event" name="save-event" value="Save Event" class="btn btn-success" />
              </div>
              <div class="form-group">
                <a id="save-event" class="btn btn-success" href="./view-calendar.php" name="save-event">Ver Calendario</a>
              </div>
              <p class="error"><?php if (!empty($msg)) {
                                  echo $msg;
                                } ?></p>
            </form>
          </div>
        </div>
      </div>

    </section><!-- /Starter Section Section -->

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

</body>

</html>