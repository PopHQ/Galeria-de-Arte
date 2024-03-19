
<!DOCTYPE html>
<html lang="es">
<?php

//include_once("login.php");
include_once("include/header.php");

?>

<body>
    <header>
        <h1>Galería de Arte</h1>
    </header>

    <div class="container">
        <!-- Sección de Pablo Picasso -->
        <section>
            <h2 class="author-name"><a href="detalleautor.php?id=1">Pablo Picasso</a></h2>
            <div class="art-gallery">
                <div class="art-item">
                    <img src="imagenes/Pablopicasso1.jpg" alt="Guernica">
                    <a href="detallesobra.php" class="zoom-button">Ver más</a>
                    <p>Guernica</p>
                </div>
                <div class="art-item">
                    <img src="imagenes/Pablopicasso2.jpg" alt="Obra de arte 2">
                    <a href="detallesobra.php" class="zoom-button">Ver más</a>
                    <p>Descripción de la obra de arte 2</p>
                </div>
                <div class="art-item">
                    <img src="imagenes/Pablopicasso3.jpg" alt="Obra de arte 3">
                    <p>Descripción de la obra de arte 3</p>
                </div>
                <!-- Agrega más obras de Pablo Picasso aquí -->
            </div>
        </section>

        <!-- Otras secciones para otros artistas -->
        <!-- Por ejemplo, una sección para otro artista -->
        <section>
            <h2>Salvador Dalí</h2>
            <div class="art-gallery">
                <!-- Agrega obras de arte de otro artista aquí -->
                <img src="imagenes/SalvadorDali1.jpg" alt="" style="width: 500px; height: 500px;">
                <a href="detallesobra.php" class="zoom-button">Ver más</a>
                <p>Guernica</p>
                <div class="art-item">
                    <img src="imagenes/Pablopicasso2.jpg" alt="Obra de arte 2">
                    <a href="detallesobra.php" class="zoom-button">Ver más</a>
                    <p>Descripción de la obra de arte 2</p>
                </div>

                    
            
        </section>
    </div>

</body>
</html>

<?php

$ver_base = mysqli_get_server_info($dblink);
echo "Version de la Base de datos: $ver_base<br />";
echo "<b> Base de datos disponible: </b><br />\n";
echo "<table border =\"1\">";
echo"<theader><tr><td bgcolor=\"#000080\"><font color=\"white\"><b>Base</b></td></tr></theader>";
echo " <tbody>";
$sql = "select * from autor order by Autor_nombre;";

$res = $dblink->query($sql);

while($pr = $res->fetch_object()){
    echo " <tr><td>$pr->Autor_nombre</td></tr>";
}

echo "</tbody>";
echo "</table>";


//include_once("login.php");
include_once("include/footer.php");

?>

