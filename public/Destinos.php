<?php 
include('../includes/header.php');
include('../includes/conexionBase.php');

// Consulta a la base de datos
$sql = "SELECT id, tituloD, imagenD FROM destinos";
$resultado = $conn->query($sql);
?>

<main class="mainDestinos">

  <div class="recomendaciones-container">

    <?php while($destino = $resultado->fetch_assoc()) { ?>

      <!-- CARD -->
      <article class="recomendacion-card">

        <!-- Imagen -->
        <a href="DetalleDestino.php?id=<?php echo $destino['id']; ?>" class="recomendacion-img">
          <img src="<?php echo $destino['imagenD']; ?>" alt="Destino turístico">
        </a>

        <!-- Contenido -->
        <div class="recomendacion-content">

          <!-- Título -->
          <a href="DetalleDestino.php?id=<?php echo $destino['id']; ?>" class="recomendacion-title">
            <h3><?php echo $destino['tituloD']; ?></h3>
          </a>

          <!-- Acciones -->
          <div class="recomendacion-actions">

            <a href="DetalleDestino.php?id=<?php echo $destino['id']; ?>" class="btn-ver">
              Ver
            </a>

            <a href="DetalleRecomendaciones.php?id=<?php echo $destino['id']; ?>" class="btn-secundario">
              Recomendaciones
            </a>

          </div>

        </div>

      </article>

    <?php } ?>

  </div>

</main>

<?php include('../includes/footer.php'); ?>


      