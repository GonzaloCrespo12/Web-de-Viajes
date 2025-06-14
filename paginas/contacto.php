<?php
include_once("../compartida/maqueta.php");
include_once("../compartida/funciones.php");

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" href="../imagenes/pestaña1.png" />
    <link rel="stylesheet" href="../css/estiloindex.css">
    <link rel="stylesheet" href="../css/contacto.css">
    <link rel="stylesheet" href="../iconos/css/all.min.css">
    <title>Contactenos</title>
</head>

<body>

    <?php echo $header_contacto; ?>
    <!--Termina header-->

    <section>
        <div class="caja">
            <div class="info">
                <div class="icon"><i class="fas fa-map-marker-alt"></i></div>
                <div class="data">
                    <p>Locacion</p>
                    <p>Prov. Bs As (Coronel Pringles)</p>
                </div>
            </div>
            <div class="info">
                <div class="icon"><i class="far fa-envelope-open"></i></div>
                <div class="data">
                    <p>Email</p>
                    <p>tulugar@mail.com</p>
                </div>
            </div>
            <div class="info">
                <div class="icon"><i class="fas fa-mobile-alt"></i></div>
                <div class="data">
                    <p>Telefono</p>
                    <p>+54 2922-121099</p>
                </div>
            </div>
        </div>
    </section>

    <section class="form">
        <form action="recibe.php" method="post">
            <h2>Contactanos</h2>
            <label>Nombre</label>
            <input class="dato dato1" type="text" name="nombre" pattern="[A-Za-z]{2, 30}" size=" 30"  placeholder=" Nombre..." required>
            <label>Apellido</label>
            <input class="dato dato1" type="text" name="apellido" size="30" maxlength="30" minlength="3" placeholder="Apellido..." required>
            <label>Email</label>
            <input class="dato dato1" type="email" name="email" size="30" maxlength="30" minlength="10" placeholder="viaje@mail.com..." required>

            <label>Mensaje</label>
            <textarea name="mensaje" id="" cols="32" rows="10" maxlength="250" class="dato dato1" placeholder="mensaje..."></textarea>

            <span class="subtitulo">Datos opcionales</span>

            <h5 class="preg">¿Ha viajado antes?</h5>
            <?php $viaje = armar_select_viaje();
            echo $viaje; ?>

            <h5 class="preg">¿Que mes le pareceria el ideal para vacacionar?</h5>
            <?php $viaje = armar_select_meses();
            echo $viaje; ?>

            <div class="boton">
                <input type="submit" name="">
                <input type="reset" name="">
            </div>


        </form>
        <img src="../imagenes/contacto/3.png" alt="">



    </section>


    <?php echo $links; ?>

    <?php echo $footer; ?>
    <!--Termina footer-->
</body>

</html>