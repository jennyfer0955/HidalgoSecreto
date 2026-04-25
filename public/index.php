
<?php include('../includes/header.php'); ?>
  <div class="container">
    <!--Contenido lateral-->
        <aside class="aside">
          <!--Frase relacionada con el contenido-->
          <h2 class="titulos">Hidalgo Secreto donde cada destino cuenta una historia.</h2>

          <!--Carrusel 3D-->
          <div class="carrusel-3d"> <!--Contenedor padre (No se mueve), definira el width, height y se aplica la perspectiva 3D - camara observando el carrusel-->
            <div class="carrusel-track"> <!--Contenedor hijo (Si gira), rota con rotateY() con el espacio en 3D se forma un cilindro-->
              <!--Imagenes posicionadas en circulo, es decir pegadas al contenedor hijo (circulo) no se mueven-->
              <img src="Imagenes/carruselimg1.jpg">
              <img src="Imagenes/carruselimg2.jpeg">
              <img src="Imagenes/carruselimg3.jpg">
              <img src="Imagenes/carruselimg4.jpg">
              <img src="Imagenes/carruselimg5.jpg">
              <img src="Imagenes/carruselimg6.jpg">
            </div>          
          </div>
        </aside>
        <!--Contenido principal-->
        <main class="main">
          <h2 class="titulo">Top 3 Destinos</h2>
          <div class="contenedorCard">
            <div class="card">
              <div class="card-inner">
                
                <div class="card-front">
                  <img src="Imagenes/mineraldelChico.jpg">
                  <h3>Mineral del Chico</h3>
                </div>

                <div class="card-back">
                  <p>Rodeado de montañas, bosques y formaciones rocosas.</p>
                </div>

              </div>
            </div>
            <div class="card">
              <div class="card-inner">
                
                <div class="card-front">
                  <img src="Imagenes/realdelMonte.jpeg">
                  <h3>Real del Monte</h3>
                </div>

                <div class="card-back">
                  <p>Conocido como la cuna del paste (comida típica).</p>
                </div>

              </div>
            </div>
            <div class="card-columna">
              <div class="card-inner">
                
                <div class="card-front">
                  <img src="Imagenes/huascaOcampo.jpg">
                  <h3>Huasca de Ocampo</h3>
                </div>

                <div class="card-back">
                  <p>Famoso por los Prismas Basálticos, formaciones rocosas únicas.</p>
                </div>
              </div>
            </div>
          </div>
        </main>
  </div>
<?php include('../includes/footer.php'); ?>