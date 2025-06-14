<?php
    include_once("../compartida/maqueta.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="keywords" content="vacaciones,lugares,descuentos,vacacionar,relax,vijar,viaje,descanso" />
    <meta name="robots" content="noindex, nofollow" />
    <link rel="icon" type="image/png" href="../imagenes/pestaña1.png" />
    <link rel="stylesheet" href="../css/estiloindex.css">
    <link rel="stylesheet" href="../css/galeria.css">
    <link rel="stylesheet" href="../iconos/css/all.min.css">
    <title>Galeria</title>
</head>
<body>
    
    <?php echo $header_galeria; ?>
    <!--Termina header-->



    <section>
        <h2>Galeria de viajes</h2>

            <h3>Aventuras</h3>
            <div class="contenedor">
                <div class="contenedores c1"></div>
                <div class="contenedores c2"></div>
                <div class="contenedores c3"></div>
            </div>

            <h3>Paz</h3>
            <div class="contenedor">
                <div class="contenedores c4"></div>
                <div class="contenedores c5"></div>
                <div class="contenedores c6"></div>
            </div>

            <h3>Escaladas</h3>
            <div class="contenedor">
                <div class="contenedores c7"></div>
                <div class="contenedores c8"></div>
                <div class="contenedores c9"></div>
            </div>

            <h3>Guiadas</h3>
            <div class="contenedor">
                <div class="contenedores c10"></div>
                <div class="contenedores c11"></div>
                <div class="contenedores c12"></div>
            </div>
          
    </section>



    <?php echo $links; ?>

    <?php echo $footer; ?>
    <!--Termina footer-->

</body>
</html>