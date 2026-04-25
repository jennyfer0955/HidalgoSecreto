<?php include('../includes/header.php'); ?>
<?php include('../includes/conexionBase.php'); ?>

<?php

$id = $_GET['id'];

$sql = "SELECT * FROM leyendas WHERE id = $id";
$result = $conn->query($sql);

$leyenda = $result->fetch_assoc();

?>

<section class="leyenda">

  <!-- BOTÓN DE REGRESO -->
  <div style="margin: 15px 0;">
    <a href="Leyendas.php" class="btnRegresar">
      ← Volver a Leyendas
    </a>
  </div>

  <h1 class="leyendaTitulo"><?= $leyenda['titulo'] ?></h1>

  <div class="leyendaContainer">

    <!-- TEXTO -->
    <div class="leyendaTexto">
      <p><?= $leyenda['texto1'] ?></p>
      <p><?= $leyenda['texto2'] ?></p>
    </div>

    <!-- IMÁGENES -->
    <div class="leyendaGaleria">
       <img src="<?= $leyenda['imagen1'] ?>">
       <img src="<?= $leyenda['imagen2'] ?>">
    </div>

  </div>

</section>

<?php include('../includes/footer.php'); ?>
