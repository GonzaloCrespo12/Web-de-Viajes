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
    <link rel="stylesheet" href="../css/servicio.css">
    <link rel="stylesheet" href="../iconos/css/all.min.css">
    <link rel = "preconnect" href = "https://fonts.googleapis.com">
    <link rel = "preconnect" href = "https://fonts.gstatic.com" crossorigin>
    <link href = "https: //fonts.googleapis.com/css2? family = Roboto: wght @ 100 & display = swap "rel =" stylesheet ">
    <title>Servicios</title>
</head>
<body>

    <?php echo $header_servicios; ?>
    <!--Termina header-->


    <section>
        <h5>Nuestros Servicios</h5>

        <div class="servicios"> 
            <div class="servicio">
                <i class="fas fa-h-square fa-lg fa-pull-top"></i>
                <span>Mejor Hotel</span>
                <p>Si va a utilizar un pasaje de Lorem Ipsum, debe asegurarse
                     de que no haya nada vergonzoso escondido en medio del texto.</p>
            </div>
            <div class="servicio">
                <i class="fab fa-glide-g fa-lg fa-pull-top"></i>
                <span>Guias Turisticos</span>
                <p>Si va a utilizar un pasaje de Lorem Ipsum, debe asegurarse
                     de que no haya nada vergonzoso escondido en medio del texto.</p>
            </div>
            <div class="servicio">
            <i class="fas fa-paper-plane fa-lg fa-pull-top"></i>
            <span>Tickets de vuelos</span>
            <p>Si va a utilizar un pasaje de Lorem Ipsum, debe asegurarse
                     de que no haya nada vergonzoso escondido en medio del texto.</p>
            </div>
        </div>
        <div class="contenedor"> 
            <div class="image1"><p class="title">Viajes al norte</p></div>
            <div class="cont1">
            <div class="image2"><p class="title">Viajes al sur</p></div>
                <div class="cont2">
                    <div class="image3"><p class="title">Paisajes</p></div>
                    <div class="image4"><p class="title">Ciudades</p></div>
                </div>
            </div>  
        </div>
    </section>



    <?php echo $links; ?>

    <?php echo $footer; ?>
    <!--Termina footer-->

</body>
</html>