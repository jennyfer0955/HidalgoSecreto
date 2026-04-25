**# HIDALGO SECRETO**

Sistema web turístico desarrollado en PHP, MySQL, HTML, CSS y JavaScript, enfocado en la difusión de pueblos mágicos del estado de Hidalgo mediante contenido dinámico, interactivo y estructurado desde base de datos.

**## Funcionalidades**
- Listado dinámico de destinos turísticos 
-	Detalle de cada pueblo mágico 
-	Recomendaciones por destino 
-	Actividades y lugares de hospedaje 
-	Leyendas asociadas a cada lugar 
-	Integración con Google Maps 
-	Navegación dinámica entre módulos 
-	Animaciones como tarjetas giratorias y carrusel automático 
-	Galería de eventos de los distintos pueblos mágicos 
-	Integración de formularios de contacto 
-	Sección de blog con contenido informativo 
-	Mapa del sitio para navegación general 

**## Estructura del proyecto**
```
Hidalgo/
│
├── public/
│   ├── Imagenes/
│   ├── css/
│   ├── js/
│   │
│   ├── index.php
│   ├── Actividades.php
│   ├── Blog.php
│   ├── BlogNotaHdO.php
│   ├── Contacto.php
│   ├── Destinos.php
│   ├── DetalleDestino.php
│   ├── DetalleLeyenda.php
│   ├── DetalleRecomendaciones.php
│   ├── Experiencias.php
│   ├── Galeria.php
│   ├── Hospedaje.php
│   ├── Leyendas.php
│   └── MapaSitio.php
│
├── includes/
│   ├── header.php
│   ├── footer.php
│   └── conexionBase.php
```

**## Tecnologías utilizadas**
-	PHP (Backend) 
-	MySQL (Base de datos relacional) 
-	HTML5 
-	CSS3 
-	JavaScript 
-	XAMPP (Servidor local) 

**## Base de datos**

El sistema utiliza una base de datos relacional que permite:
-	Relación entre destinos y recomendaciones 
-	Relación entre destinos y leyendas 
-	Gestión dinámica de contenido turístico 

**## Instalación del proyecto**

**### 1. Instalar XAMPP**

Descargar e instalar desde:
https://www.apachefriends.org/

Activar:
-	Apache 
-	MySQL 

**### 2. Colocar el proyecto**

Ubicar la carpeta en:
```
C:\xampp\htdocs\Hidalgo
```

**### 3. Crear base de datos**

Entrar a:
http://localhost/phpmyadmin

Crear base de datos:

```
CREATE DATABASE HidalgoSecreto;
```

**### 4. Configurar conexión**

Crear el archivo para la conexión de la base de datos:
```
includes/conexionBase.php
```
```
<?php
$conn = new mysqli("localhost", "root", "", "HidalgoSecreto");

if ($conn->connect_error) {
    die("Error de conexión: " . $conn->connect_error);
}
?>
```

**### 5. Ejecutar el proyecto**

Abrir en navegador:
http://localhost/Hidalgo/public/index.php

**## Características del sistema**
-	Arquitectura modular mediante includes 
-	Separación de lógica y vistas 
-	Contenido dinámico desde base de datos 
-	Sistema escalable tipo CMS turístico 
-	Navegación mediante parámetros GET

**## Capturas del sistema**

### Página principal
![Home](screenshots/home.png)

### Destinos
![Destinos](screenshots/destinos.png)

### Detalle
![Detalle](screenshots/detalle.png)

### Recomendaciones
![Detalle](screenshots/detalle.png)

### Galeria
![Detalle](screenshots/detalle.png)

### Experiencias
![Detalle](screenshots/detalle.png)

### Actividades
![Detalle](screenshots/detalle.png)

### Hospedaje
![Detalle](screenshots/detalle.png)

### Leyendas
![Detalle](screenshots/detalle.png)

### Contacto
![Detalle](screenshots/detalle.png)
