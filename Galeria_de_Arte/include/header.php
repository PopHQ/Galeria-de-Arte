<?php
    
    //Conexion con la  base de datos
    $server = "localhost";
    $user = "CarlosAniba";
    $pass = "123";
    $dbname = "galeria_de_arte";


   // echo "no conectado";
   $dblink = new mysqli($server, $user, $pass, $dbname);

   // Verificar la conexión
   if ($dblink->connect_error) {
    die('Error al conectar a la Base de Datos (' . $dblink->connect_errno . ') '.$dblink->connect_error);
   }
    

    

?>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DaVinci Dome</title>
    <style>
        /* Estilos generales */
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f9f9f9;
        }
        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 20px;
        }
        /* Encabezado */
        header {
            background-color: #333;
            color: #fff;
            text-align: center;
            padding: 20px 0;
        }
        h1 {
            margin: 0;
            font-size: 24px;
        }
        /* Galería de arte */
        .art-gallery {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 20px;
        }
        .art-item {
            background-color: #fff;
            border: 1px solid #ddd;
            padding: 10px;
            text-align: center;
            position: relative; /* Añadido para posicionar el botón */
        }
        .art-item img {
            max-width: 100%;
            height: auto;
            transition: transform 0.3s; /* Añadido para la animación de zoom */
        }
        /* Estilo para el botón */
        .zoom-button {
            position: absolute;
            bottom: 10px;
            left: 50%;
            transform: translateX(-50%);
            padding: 8px 12px;
            background-color: #333;
            color: #fff;
            border: none;
            cursor: pointer;
            display: none; /* Ocultar inicialmente */
        }
        .art-item:hover img {
            transform: scale(1.1); /* Aumentar el tamaño al pasar el cursor */
        }
        .art-item:hover .zoom-button {
            display: block; /* Mostrar el botón al pasar el cursor */
        }
        /* Pie de página */
        footer {
            text-align: center;
            padding: 20px 0;
            background-color: #333;
            color: #fff;
        }
    </style>
</head>
<script>
    document.addEventListener("DOMContentLoaded", function() {
        const artItems = document.querySelectorAll(".art-item");

        artItems.forEach(item => {
            item.addEventListener("mouseover", function() {
                const overlay = document.createElement("div");
                overlay.classList.add("overlay");

                const btn = document.createElement("a");
                btn.setAttribute("href", "#");
                btn.textContent = "Ver más";
                btn.classList.add("ver-mas");

                overlay.appendChild(btn);
                item.appendChild(overlay);

                item.style.opacity = "0.7";
            });

            item.addEventListener("mouseout", function() {
                const overlay = item.querySelector(".overlay");
                overlay.remove();

                item.style.opacity = "1";
            });
        });
    });
</script>



