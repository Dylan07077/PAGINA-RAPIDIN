<!DOCTYPE html>
<html lang="en">

<?php
$ruta = ".";
$titulo = "Maquimpower - Venta de Equipos de Limpieza";

include("paginas/includes/cabecera.php");
?>

<body class="d-flex flex-column min-vh-100">
  <?php include("paginas/includes/menu.php"); ?>

  <div class="container mt-3 flex-grow-1">
    <header>
      <h1><i class="fa-solid fa-bucket"></i> <?php echo $titulo; ?></h1>
      <hr />
    </header>

    <section>
      <article>
        <!-- Carrusel -->
        <div id="carouselExampleAutoplaying" class="carousel slide overflow-hidden carousel-fixed-height" data-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="img/Banner 1 Hidrolavadoras (PC).webp" class="d-block w-100" alt="Banner 1">
    </div>
    <div class="carousel-item">
      <img src="img/Banner 2 Aspiradora (PC).webp" class="d-block w-100" alt="Banner 2">
    </div>
    <div class="carousel-item">
      <img src="img/Banner 3 Implementa tu carwash (PC).webp" class="d-block w-100" alt="Banner 3">
    </div>
    <div class="carousel-item">
      <img src="img/banner4 Detailing professional.jpg" class="d-block w-100" alt="Banner 4">
    </div>
    <div class="carousel-item">
      <img src="img/Banner 5 Hidrolavadoras.png" class="d-block w-100" alt="Banner 5">
    </div>
  </div>
  <button class="carousel-control-prev w-auto border-0 bg-transparent" type="button" data-target="#carouselExampleAutoplaying" data-slide="prev">
  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
</button>

<button class="carousel-control-next w-auto border-0 bg-transparent" type="button" data-target="#carouselExampleAutoplaying" data-slide="next">
  <span class="carousel-control-next-icon" aria-hidden="true"></span>
</button>
</div>
      </article>
    </section>
  </div>

 <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  
  <script src="<?= $ruta ?>/css/Bootstrap/js/bootstrap.bundle.js"></script>

  <div class="mt-auto">
    <?php include("paginas/includes/pie.php"); ?>
  </div>
  
</body>
</html>
