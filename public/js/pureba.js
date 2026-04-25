/**Creamos dos constantes, track obtiene el contenedor del carrusel y 
 * images obtiene una lista de todas las imágenes dentro de ese contenedor. */
const track = document.querySelector(".carrusel-track");
const images = document.querySelectorAll(".carrusel-track img");

/**Creamos 3 constantes:
 * total va contar cuantas imagenes hay .length cuenta elementos, 
 * angle va dividir el circulo (360) entre el total de imagenes que se obtuvieron, es decir partes iguales
 * y radius definira la distancia desde el centro hacia cada imagen (radio del círculo)*/
const total = images.length;
const angle = 360 / total;
const radius = 250;

/** La variable currentRotation almacena el ángulo actual aplicado al contenedor, es decir el estado de rotacion*/
let currentRotation = 0;

// posicionar imágenes en círculo
/**Con un bucle le diremos de images recorre cada imagen (img - elemento actual i - indice), 
 * dentro del ciclo crearemos una constante rotate que va multiplicar lo que contiene angle por el indice i, Calcula la posición angular de cada imagen 
 * Despues le damos un estilo de transformacion a la imagen coloca la imagen en su ángulo dentro del círculo (calculado en rotate) y 
 * la aleja del centro creando el radio de acuerdo a radios que es el tamaño del circulo*/
images.forEach((img, i) => {
    const rotate = angle * i;
    img.style.transform = `rotateY(${rotate}deg) translateZ(${radius}px)`;
});

// animación automática
/**setInterval es una funcion que ejecuta codigo repetidamente cada cierto tiempo, en este cado cada 2 segundos (2000), guardaremos este intervalo en una variable*/
let interval = setInterval(rotar, 2000);

//**Creamos la funcion de rotar dentro de esta:
// Se hace una resta currentRotation menos angle y el resultado se guarda en currentRotation, al restar avanza una imagen en el carrusel
// Se vuelve aplicar un estilo pero ahora al contenedor que gira, gira el contenedor en eje Y usando el valor actualizado de currentRotation, haciendo visible el cambio*/
function rotar(){
    currentRotation -= angle;
    track.style.transform = `rotateY(${currentRotation}deg)`;
}

//** Cuando el usuario pone el mouse encima → carrusel se detiene*/
track.addEventListener("mouseenter", () => clearInterval(interval));

//** Cuando el usuario quita el mouse de encima → carrusel se reactiva
// Ademas reasignamos la variable para guardar el nuevo intervalo*/
track.addEventListener("mouseleave", () => {
    interval = setInterval(rotar, 2000);
});
//**Los Siguientes eventos funcionan igual que los anteriores pero para movil */
track.addEventListener("touchstart", () => clearInterval(interval));
track.addEventListener("touchend", () => {
    interval = setInterval(rotar, 2000);
});
