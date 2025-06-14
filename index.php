<?php
include_once("compartida/maqueta.php");



?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Aqui podras encontrar las mejores opciones y precios de lugares fantasticos para vacaconar">
    <meta name="keywords" content="vacaciones,lugares,descuentos,vacacionar,relax,vijar,viaje,descanso" />
    <meta name="robots" content="noindex, nofollow" />
    <link rel="icon" type="image/png" href="imagenes/pestaña1.png" />
    <link rel="stylesheet" href="css/estiloindex.css">
    <link rel="stylesheet" href="iconos/css/all.min.css">
    <title>Tu lugar de viaje</title>
</head>

<body>
    <?php echo $header_index; ?>
    <!--Termina header-->

    <section>
        <article class="contenido">
            <div class="foto"><img class="img1" src="imagenes/index/1.png" alt="" height="250"></div>
            <div class="texto">
                <div class="titulo">
                    <h2>Hermosas y relajantes playas</h2>
                </div>

                <p>
                    Hay muchas variaciones de pasajes de Lorem Ipsum disponibles,
                    pero la mayoría ha sufrido alteraciones de alguna forma,
                    por humor inyectado o palabras aleatorias que no parecen
                    ni un poco creíbles. Si va a utilizar un pasaje de Lorem Ipsum,
                    debe asegurarse de que no haya nada vergonzoso escondido en medio
                    del texto. Todos los generadores de Lorem Ipsum en Internet
                    tienden a repetir fragmentos predefinidos según sea necesario,
                    lo que lo convierte en el primer generador verdadero en Internet.
                </p>

            </div>
        </article>

        <article class="contenido">
            <div class="texto">
                <div class="titulo">
                    <h2>Grandes montañas y paisajes</h2>
                </div>

                <p>
                    Hay muchas variaciones de pasajes de Lorem Ipsum disponibles,
                    pero la mayoría ha sufrido alteraciones de alguna forma,
                    por humor inyectado o palabras aleatorias que no parecen
                    ni un poco creíbles. Si va a utilizar un pasaje de Lorem Ipsum,
                    debe asegurarse de que no haya nada vergonzoso escondido en medio
                    del texto. Todos los generadores de Lorem Ipsum en Internet
                    tienden a repetir fragmentos predefinidos según sea necesario,
                    lo que lo convierte en el primer generador verdadero en Internet.
                </p>
            </div>

            <div class="foto"><img class="img2" src="imagenes/index/2.png" alt="" height="220"></div>

        </article>

        <article class="contenido">
            <div class="foto"><img class="img3" src="imagenes/index/3.png" alt="" height="250"></div>
            <div class="texto">
                <div class="titulo">
                    <h2>Disfrute de espectaculares lugares </h2>
                </div>

                <p>
                    Hay muchas variaciones de pasajes de Lorem Ipsum disponibles,
                    pero la mayoría ha sufrido alteraciones de alguna forma,
                    por humor inyectado o palabras aleatorias que no parecen
                    ni un poco creíbles. Si va a utilizar un pasaje de Lorem Ipsum,
                    debe asegurarse de que no haya nada vergonzoso escondido en medio
                    del texto. Todos los generadores de Lorem Ipsum en Internet
                    tienden a repetir fragmentos predefinidos según sea necesario,
                    lo que lo convierte en el primer generador verdadero en Internet.
                </p>

            </div>
        </article>
    </section>
    <!--termina section de fotos-->
    <section>
        <h3>¡Lo mas popular!</h3>
        <div class="popular">
            <div class="cajas">
                <div class="titulo">
                    <h4>Mar del Plata</h4>
                    <h4> $1200</h4>
                </div>
                <div class="ribbon"><span>POPULAR</span></div>
                <img src="imagenes/index/4.png" alt="">
            </div>

            <div class="cajas">
                <div class="titulo">
                    <h4>Villa Ventana </h4>
                    <h4> $700</h4>
                </div>
                <div class="ribbon"><span>POPULAR</span></div>
                <img src="imagenes/index/5.png" alt="">
            </div>

            <div class="cajas">
                <div class="titulo">
                    <h4>Mendoza </h4>
                    <h4> $3200</h4>
                </div>
                <div class="ribbon"><span>POPULAR</span></div>
                <img src="imagenes/index/6.png" alt="">
            </div>

            <div class="cajas">
                <div class="titulo">
                    <h4>Santa Cruz </h4>
                    <h4> $4200</h4>
                </div>
                <div class="ribbon"><span>POPULAR</span></div>
                <img src="imagenes/index/7.png" alt="">
            </div>
        </div>
    </section>
    <!--Termina section-->

    <?php echo $links; ?>

    <?php echo $footer; ?>
    <!--Termina footer-->
    </div>
</body>

</html>