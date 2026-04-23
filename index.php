<!DOCTYPE html>
<html lang="en">

<?php
$ruta = ".";
$titulo = "Maquimpower - Venta de Equipos de Limpieza";

include("paginas/includes/cabecera.php");
?>

<body>
  <?php include("paginas/includes/menu.php"); ?>

  <div class="container mt-3">
    <header>
      <h1><i class="fas fa-university"></i> <?php echo $titulo; ?></h1>
      <hr />
    </header>

    <section>
      <article>
        <!-- Carrusel -->
        <div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel">
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img src="./img/Banner 1 Hidrolavadoras (PC).webp" class="d-block w-100" alt="Banner 1">
            </div>
            <div class="carousel-item">
              <img src="./img/Banner 2 Hidrolavadoras (PC).webp" class="d-block w-100" alt="Banner 2">
            </div>
            <div class="carousel-item">
              <img src="./img/Banner 3 Hidrolavadoras (PC).webp" class="d-block w-100" alt="Banner 3">
            </div>
            <div class="carousel-item">
              <img src="./img/banner4 Detailing professional.jpg" class="d-block w-100" alt="Banner 4">
            </div>
            <div class="carousel-item">
              <img src="./img/Banner 5 Hidrolavadoras.png" class="d-block w-100" alt="Banner 5">
            </div>
          </div>

          <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Anterior</span>
          </button>
          <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Siguiente</span>
          </button>
        </div>
      </article>
    </section>
  </div>



</body>

</html>