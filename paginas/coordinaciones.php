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
    <link rel="stylesheet" href="../css/coord.css">
    <link rel="stylesheet" href="../iconos/css/all.min.css">
    <title>Coordinaciones</title>
</head>
<body>
    
    <?php echo $header_coordinaciones; ?>
    <!--Termina header-->

    <section>
        <span>¡VIAJES!</span>
        <br/>
        <p>En la siguiente tabla habra una serie de detalles
            de los viajes disponibles por el momento.</p>

        <div class="tab">
            <table class="tabla">
                <thead>
                    <tr>
                    <th>Lugar</th>
                    <th>cant. Personas</th>
                    <th>Dias</th>
                    <th>Total</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                    <td>Mar del plata</td>
                    <td>4</td>
                    <td>5</td>
                    <td>$7.230</td>
                    </tr>
                    <tr>
                    <td>Mendoza</td>
                    <td>2</td>
                    <td>5</td>
                    <td>$10.230</td>
                    </tr>
                    <tr>
                    <td>Cordoba</td>
                    <td>6</td>
                    <td>5</td>
                    <td>$11.500</td>
                    </tr>
                    <tr>
                    <td>Villa Ventana</td>
                    <td>2</td>
                    <td>3</td>
                    <td>$4.500</td>
                    </tr>
                    <tr>
                    <td>Buenos Aires</td>
                    <td>5</td>
                    <td>5</td>
                    <td>$12.500</td>
                    </tr>
                    <tr>
                    <td>Santa Cruz</td>
                    <td>7</td>
                    <td>6</td>
                    <td>$14.750</td>
                    </tr>
                    <tr>
                    <td>Chubut</td>
                    <td>4</td>
                    <td>6</td>
                    <td>$13.299</td>
                    </tr>
                    <tr>
                    <td>Entre Rios</td>
                    <td>4</td>
                    <td>6</td>
                    <td>$14.500</td>
                    </tr>
                    <tr>
                    <td>Tucuman</td>
                    <td>2</td>
                    <td>7</td>
                    <td>$16.500</td>
                    </tr>
                    <tr>
                    <td>Sant. del Estero</td>
                    <td>4</td>
                    <td>6</td>
                    <td>$15.000</td>
                    </tr>
                    <tr>
                    <td>Rio Negro</td>
                    <td>2</td>
                    <td>7</td>
                    <td>$16.700</td>
                    </tr>
                    <tr>
                    <td>Misiones</td>
                    <td>2</td>
                    <td>7</td>
                    <td>$18.000</td>
                    </tr>
                </tbody>
            </table>
        </div>

        <p>
            Si quiere saber mas acerca de nuestros
            servicios, viajes o lo que usted tenga como duda, 
            <a href="contacto.php">Contactenos</a>
        </p>

    </section>

    <?php echo $links; ?>

    <?php echo $footer; ?>
    <!--Termina footer-->

</body>
</html>