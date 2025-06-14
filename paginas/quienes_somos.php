<?php
    include_once("../compartida/maqueta.php");


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" href="../imagenes/pestaña1.png" />
    <link rel = "preconnect" href = "https://fonts.googleapis.com">
    <link rel = "preconnect" href = "https://fonts.gstatic.com" crossorigin>
    <link href = "https: //fonts.googleapis.com/css2? family = Noto + Serif: wght @ 700 & display = swap "rel =" stylesheet ">
    <link rel="stylesheet" href="../css/estiloindex.css">
    <link rel="stylesheet" href="../css/estilosomos.css">
    <link rel="stylesheet" href="../iconos/css/all.min.css">
    <title>¿Quienes somos?</title>
</head>
<body>

    <?php echo $header_somos; ?>
    <!--Termina header-->

    <section>
        <div class="contenedor">
            <div class="texto">
                <h2>Años en el rubro</h2>
                <p>
                Hay muchas variaciones de pasajes de Lorem Ipsum disponibles, 
                pero la mayoría han sufrido alteraciones de alguna forma, 
                por humor inyectado o palabras aleatorias que no parecen ni 
                un poco creíbles. Si va a utilizar un pasaje de Lorem Ipsum, 
                debe asegurarse de que no haya nada vergonzoso escondido en 
                medio del texto. 
                </p><br />
                <p>
                    <span>+15</span>  Años de experiencia
                </p>
            </div>
            <div class="adicional">
                <div class="contenidos">
                    <p>
                        Alegrias de viaje
                    </p>

                    <span>
                        12K
                    </span>

                    <i class="fas fa-users"></i>
                </div>
                <div class="contenidos">
                <p>
                        Giras americanas
                    </p>

                    <span>
                        3K
                    </span>

                    <i class="fas fa-globe-americas"></i>
                </div>
                <div class="contenidos">
                <p>
                        Giras en ciudades
                    </p>

                    <span>
                        22K
                    </span>

                    <i class="far fa-building"></i>
                </div>
            </div>
        </div>
    </section>

    <section>
        <div class="caja">
            <div class="titulo1"><p>Personal</p></div>
            <div class="caja2">
                <div class="cajitas">
                        <img src="../imagenes/somos/2.jpg" alt="">
                    <div class="inform">
                        <h5>Tyson Amery</h5>
                        <span>Director</span>
                    </div>
                </div>
                <div class="cajitas">
                    <img src="../imagenes/somos/3.jpg" alt="">
                    <div class="inform">
                        <h5>Stas Melnik</h5>
                        <span>Instructora</span>
                    </div>
                </div>
                <div class="cajitas">
                    <img src="../imagenes/somos/4.jpg" alt="">
                    <div class="inform">
                        <h5>Lise Laurie</h5>
                        <span>Manager</span>
                    </div>
                </div>
                <div class="cajitas">
                    <img src="../imagenes/somos/5.jpg" alt="">
                    <div class="inform">
                        <h5>Effie Eleanora</h5>
                        <span>Manager</span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <?php echo $links; ?>

    <?php echo $footer; ?>
    <!--Termina footer-->

</body>
</html>