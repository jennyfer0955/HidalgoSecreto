<?php 
include('../includes/header.php');
include('../includes/conexionBase.php');

// ID del destino
$id = isset($_GET['id']) ? intval($_GET['id']) : 0;

// Consulta de recomendaciones
$sql = "SELECT * FROM recomendaciones 
        WHERE destino_id = $id 
        ORDER BY orden ASC";

$resultado = $conn->query($sql);
?>

<section class="recomendaciones">

  <h2 class="recomendacionesTitulo">
    Recomendaciones
  </h2>

  <div class="recomendacionesLista">

    <?php if ($resultado->num_rows > 0) { ?>

      <?php while($row = $resultado->fetch_assoc()) { ?>

        <div class="recomendacion r<?php echo $row['orden']; ?>">
          <?php echo $row['texto']; ?>
        </div>

      <?php } ?>

    <?php } else { ?>

      <p>No hay recomendaciones disponibles para este destino.</p>

    <?php } ?>

  </div>

</section>

<?php include('../includes/footer.php'); ?>
