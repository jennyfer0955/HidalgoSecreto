<?php
include('../includes/header.php');
include('../includes/conexionBase.php');

// Traer todas las leyendas ordenadas por pueblo
$sql = "SELECT id, titulo, imagen, pueblo 
        FROM leyendas 
        ORDER BY pueblo";

$resultado = $conn->query($sql);

// Agrupar datos por pueblo
$leyendasPorPueblo = [];

while ($fila = $resultado->fetch_assoc()) {
    $leyendasPorPueblo[$fila['pueblo']][] = $fila;
}
?>

<main class="contenedorPueblos">

<?php foreach ($leyendasPorPueblo as $pueblo => $leyendas) { ?>

  <section class="pueblo">

    <!-- Título del pueblo -->
    <h2 class="tituloPueblo">
      <?php echo $pueblo; ?>
    </h2>

    <div class="scrollActividades">

      <?php foreach ($leyendas as $fila) { ?>

        <div class="cardLeyenda">
          <a href="detalleLeyenda.php?id=<?php echo $fila['id']; ?>">

            <img src="<?php echo $fila['imagen']; ?>" alt="Imagen de la leyenda">

            <p><?php echo $fila['titulo']; ?></p>

          </a>
        </div>

      <?php } ?>

    </div>

  </section>

<?php } ?>

</main>

<?php include('../includes/footer.php'); ?>
