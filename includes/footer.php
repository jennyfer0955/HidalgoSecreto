<!--Footer-->
      <footer class="footer">
        <div class="fraseLogo">
          <a href="index.php">
            <img src="Imagenes/logo.png" alt="Logo del sitio">
          </a>
          <p>Atrévete a descubrir lugares que nunca imaginaste.</p>
        </div>
        <div class="redesSociales">
          <a href="#"><img src="Imagenes/Instagram.png" alt="Instagram"></a>
          <a href="#"><img src="Imagenes/Facebook.png" alt="Facebook"></a>
          <a href="#"><img src="Imagenes/Correo.png" alt="Correo"></a>
        </div>
        
        <div class="footer-menu-mobile">
          <a href="Galeria.php"><i class="bi bi-images"></i></a>
          <a href="Experiencias.php"><i class="bi bi-journal-text"></i></a>
          <a href="index.php"><i class="bi bi-house-fill"></i></a>
          <a href="Contacto.php"><i class="bi bi-person"></i></a>
          <a href="Destinos.php"><i class="bi bi-geo-alt"></i></a>
        </div>
      </footer>
     </div>

    <!--JavaScript-->
     <script src="js/pureba.js"></script>
     <script src="js/menuInferior.js"></script>
     <script src="js/ValidacionCorreo.js"></script>
     <script>
      document.addEventListener("DOMContentLoaded", () => {
          const toggle = document.querySelector(".menu-toggle");
          const menu = document.querySelector(".menu-mobile");

          toggle.addEventListener("click", () => {
              menu.classList.toggle("active");
          });
      });
      </script>
  </body>
</html>
