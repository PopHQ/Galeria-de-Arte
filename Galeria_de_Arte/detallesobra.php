<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detalle de la Obra de Arte</title>
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
        /* Imagen */
        .art-image {
            flex: 1;
            margin-right: 20px;
        }
        .art-image img {
            max-width: 100%;
            height: auto;
        }
        /* Detalles de la obra */
        .art-details {
            flex: 2;
            background-color: #fff;
            border: 1px solid #ddd;
            padding: 20px;
        }
        .art-details h2 {
            margin-top: 0;
            font-size: 24px;
            color: #333;
        }
        .art-details ul {
            list-style-type: none;
            padding: 0;
        }
        .art-details ul li {
            margin-bottom: 10px;
        }
        .art-details ul li strong {
            font-weight: bold;
            color: #333;
        }
        .art-details .quote-button {
            background-color: #333;
            color: #fff;
            border: none;
            padding: 10px 20px;
            text-transform: uppercase;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }
        .art-details .quote-button:hover {
            background-color: #555;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="art-image">
            <img src="imagenes/R.jpg" alt="Obra de arte 1">
        </div>
        <div class="art-details">
            <h2>SIDE BY SIDE</h2>
            <p>Leonardo Moleiro</p>
            <p>2.500,00 €</p>
            <button class="quote-button">Add to quote</button>
            <ul>
                <li><strong>Color:</strong> Multicolor, Rosa</li>
                <li><strong>Año:</strong> 2024</li>
                <li><strong>Dimensions (cm):</strong> 100x80</li>
                <li><strong>Edición:</strong> Unique</li>
                <li><strong>Enmarcado:</strong> No</li>
                <li><strong>Ubicación:</strong> Madrid, Spain</li>
                <li><strong>Medium:</strong> Lienzo</li>
                <li><strong>Orientation:</strong> Vertical</li>
                <li><strong>Firmado:</strong> Sí</li>
                <li><strong>Style:</strong> Fantasía</li>
                <li><strong>Técnica:</strong> Pintura</li>
                <li><strong>Categorías:</strong> Acrílico, Pintura, TKGallery</li>
                <li>Sin existencias</li>
            </ul>
        </div>
    </div>
</body>
</html>
