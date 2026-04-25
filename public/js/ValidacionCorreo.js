document.addEventListener("DOMContentLoaded", function(){

  const formulario = document.querySelector(".formulario");

  formulario.addEventListener("submit", function(e){

    const nombre = document.getElementById("nombre").value.trim();
    const email = document.getElementById("email").value.trim();

    // Expresiones regulares
    const regexNombre = /^[A-Za-zÁÉÍÓÚáéíóúñÑ ]+$/;
    const regexEmail = /^[^@\s]+@[^@\s]+\.com$/;

    // Validación nombre
    if(!regexNombre.test(nombre)){
      alert("El nombre solo debe contener letras");
      e.preventDefault();
      return;
    }

    // Validación email
    if(!regexEmail.test(email)){
      alert("El correo debe ser válido y terminar en .com");
      e.preventDefault();
      return;
    }

  });

});
