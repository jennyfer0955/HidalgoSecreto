<?php include('../includes/header.php'); ?>
<div class="contacto-container">
  <main class="mainContacto">
    <section class="formulario-contacto">
      <h2>Déjanos un mensaje</h2>

      <form action="#" method="POST" class="formulario">

        <div class="campo">
          <label for="nombre">Nombre completo</label>
          <input 
            type="text" 
            id="nombre" 
            name="nombre" 
            placeholder="Ej. Juan Pérez" 
            pattern="[A-Za-zÁÉÍÓÚáéíóúñÑ ]+" 
            title="Solo se permiten letras"
            required
          >
        </div>

        <div class="campo">
          <label for="email">Correo electrónico</label>
          <input 
            type="email" 
            id="email" 
            name="email" 
            placeholder="Ej. correo@gmail.com" 
            required
          >
        </div>

        <div class="campo">
          <label for="mensaje">Mensaje</label>
          <textarea 
            id="mensaje" 
            name="mensaje" 
            rows="5" 
            placeholder="Escribe tu mensaje aquí..." 
            required
          ></textarea>
        </div>

        <button type="submit" class="btn-enviar">
          Enviar mensaje
        </button>

      </form>
    </section>
  </main>

  <aside class="aside">
    <p class="descripcion">
      Déjanos tus quejas y sugerencias por medio de nuestro formulario y visítanos en nuestras redes sociales.
    </p>

    <div class="redesSocialesContacto">
      <a href="#"><img src="Imagenes/Instagram.png" alt="Instagram"></a>
      <a href="#"><img src="Imagenes/Facebook.png" alt="Facebook"></a>
      <a href="#"><img src="Imagenes/Correo.png" alt="Correo"></a>
    </div>
  </aside>
</div>

<?php include('../includes/footer.php'); ?>

      