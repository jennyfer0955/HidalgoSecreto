document.addEventListener("DOMContentLoaded", () => {

    const botones = document.querySelectorAll(".footer-menu-mobile a");
    const rutaActual = window.location.pathname;

    botones.forEach(boton => {

        // activar según URL
        if(rutaActual.includes(boton.getAttribute("href"))){
            boton.classList.add("active");
        }

        boton.addEventListener("click", () => {
            botones.forEach(b => b.classList.remove("active"));
            boton.classList.add("active");
        });
    });

});
