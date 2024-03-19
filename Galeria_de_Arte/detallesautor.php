<?php
    if(isset($_GET['id'])) {
        // Obtener el valor del parámetro "id"
        $id_autor = $_GET['id'];

        $sql = "SELECT * FROM authors WHERE id = $id_autor";
        $result = $conn->query($sql);
        
        if ($result->num_rows > 0) {
          // Mostrar los datos de cada autor
          while($row = $result->fetch_assoc()) {
            $nombre = $row["Autor_nombre"];
            $nacionalidad = $row["nacionalidad"];
            $death_date = $row["death_date"];
            $estilo_artistico = $row["estilo_artistico"];
          }
        } else {
          echo "0 results";
        }
    }
?>




<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detalles del Autor</title>
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
            display: flex;
            justify-content: space-between;
            align-items: flex-start;
        }
        /* Detalles del autor */
        .author-details {
            flex: 1;
            background-color: #fff;
            border: 1px solid #ddd;
            padding: 20px;
        }
        .author-details h2 {
            margin-top: 0;
            font-size: 24px;
            color: #333;
            text-transform: uppercase;
        }
        .author-details ul {
            list-style-type: none;
            padding: 0;
        }
        .author-details ul li {
            margin-bottom: 10px;
        }
        .author-details ul li strong {
            font-weight: bold;
            color: #333;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="author-details">
            <h2>Leonardo Moleiro</h2>
            <ul>
                Quiero que aqui en esta lista se muestren los datos de nacionalidad, Estilo artistico del autor y su fecha de fallecimiento del autor
                Todos estos datos deben obtenerse desde mi base de datos indicado con su respectivo id
                <li><strong>Nacionalidad:</strong> Venezolano</li>
                <li><strong>Fecha de Fallecimiento:</strong> 2023</li>
                <li><strong>Estilo artístico:</strong> Realismo mágico</li>
            </ul>
        </div>
    </div>
</body>
</html>
