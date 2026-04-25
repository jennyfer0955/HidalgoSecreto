<?php 
include('../includes/header.php');
include('../includes/conexionBase.php');

$id = isset($_GET['id']) ? intval($_GET['id']) : 0;

$sql = "SELECT * FROM destinos WHERE id = $id";
$result = $conn->query($sql);

$destino = $result->fetch_assoc();
?>

<section class="detalleContainer">

  <!-- TÍTULO -->
  <h1 class="detalleTitulo">
    <?php echo $destino['tituloD']; ?>
  </h1>

  <!-- CONTENIDO PRINCIPAL -->
  <div class="detalleContenido">

    <!-- TEXTO -->
    <div class="detalleTexto">

      <p>
        <?php echo $destino['descripcion1']; ?>
      </p>

      <p>
        <?php echo $destino['descripcion2']; ?>
      </p>

      <h3>Sitios menos conocidos</h3>

      <ul>
        <?php 
          $sitios = explode("\n", $destino['sitios']);
          foreach ($sitios as $sitio) {
            echo "<li>$sitio</li>";
          }
        ?>
      </ul>

      <!-- TEXTO FIJO (NO BD) -->
      <p>
        Si quieres conocer los principales lugares turísticos de este pueblo mágico,
        así como sus leyendas ingresa a los siguientes enlaces:
      </p>

      <div class="detalleBotones">
        <a href="Actividades.php?id=<?php echo $id; ?>" class="btn">Actividades</a>
        <a href="Leyendas.php?pueblo=<?php echo $destino['tituloD']; ?>" class="btn">Leyendas</a>
      </div>

      <p>
        De igual forma te invitamos a visitar nuestro blog para conocer 
        la historia y el contexto cultural de este Pueblo Magico
      </p>

      <a href="Blog.php?id=<?php echo $id; ?>" class="btnBlogsF">Blog</a>
    </div>

    <!-- LATERAL -->
    <aside class="detalleLateral">

      <h3>Ubicación</h3>

      <div class="mapa">
        <?php echo $destino['maps']; ?>
      </div>

      <!-- TEXTO FIJO (NO BD) -->

    </aside>

  </div>

</section>

<?php include('../includes/footer.php'); ?>
