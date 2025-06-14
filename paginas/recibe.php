<?php

include_once("../compartida/arreglos.php");

function limpiarvalor($data)
{
        // Quitamos los espacios, tanto en el principio como en el final 
        $data = trim($data);

        // Quitamos las barras invertidas \ 
        $data = stripslashes($data);

        // Convierte caracteres especiales a HTML por ejemplo "<" a "&lt;", sirve para prevenir ataques de inyección de código
        $data = htmlspecialchars($data);

    return $data;
}

$nombre = "";
$apellido = "";
$email = "";
$mensaje = "";
$viaje = 0;
$mes = 0;

///////////////////////////////////////////////////////////////////
//se evalua que las variables no esten vacias, es decir sin datos/
/////////////////////////////////////////////////////////////////

if (!empty($_POST["nombre"])) {
    $nombre = (string)limpiarvalor($_POST["nombre"]);
}


if (!empty($_POST["apellido"])) {
    $apellido = (string)limpiarvalor($_POST["apellido"]);
}

if (isset($_POST["email"])) {
    $email = (string)limpiarvalor($_POST["email"]);
}

if (!empty($_POST["mensaje"])) {
    $mensaje = (string)limpiarvalor($_POST["mensaje"]);
}

if (!empty($_POST["viaje"])) {
    $viaje = (int)limpiarvalor($_POST["viaje"]);
}

if (!empty($_POST["mes"])) {
    $mes = (int)limpiarvalor($_POST["mes"]);
}

////////////////////////////////////////////////////////////////////////////////////////////////////////
//se evalua que las variables no esten vacias, es decir sin datos, si es asi se da el mensaje de error/
//////////////////////////////////////////////////////////////////////////////////////////////////////
$hay_error = false;
$error = "";

if ($apellido == "") {
    $error .= "error 10-A";
    $hay_error = true;
}

if ($nombre == "") {
    $error .=  "error 10-N";
    $hay_error = true;
}

if ($email == "") {
    $error .= "error 10-E";
    $hay_error = true;
}

if ($mensaje == "") {
    $error .= "error 10-M";
    $hay_error = true;
}

///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
// evaluo si las variables con datos no obligatorios contienen algo, para asi ver si se mandan al mensaje de recibido.php/
/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

$viajev = "";
$mesv = "";

if (!$viaje == 0) {
    $viajev = "<p>¿Usted ya ha viajado?,  <span>$arr_viaje[$viaje]</span> </p>";
}

if (!$mes == 0) {
    $mesv = "<p> El mes que concidera ideal para viajar es, <span>$arr_meses[$mes]</span> </p>";
}

/////////////////////////////////////////////////////////////////////////////////////////////
//Dependiendo del valor que tome $mes y $viaje se pone el titulo opcional/
///////////////////////////////////////////////////////////////////////////////////////////
$titulo = "";
if (!$viaje == 0 ) {
    $titulo = "<span>Datos opcionales </span>";
}
elseif (!$mes == 0) {
    $titulo = "<span>Datos opcionales </span>";
}

////////////////////////////////////////////////////////////////////////////////////////////////////////////
// se evalua los datos que haya en las variables y asi ver cual es el mesaje que se le mostrara al usuario/
//////////////////////////////////////////////////////////////////////////////////////////////////////////
if (!$hay_error) {
    echo "
            <!DOCTYPE html>
            <html lang= 'es '>
            <head>
                <meta charset= 'UTF-8 '>
                <meta http-equiv= 'X-UA-Compatible ' content= 'IE=edge '>
                <meta name= 'viewport ' content= 'width=device-width, initial-scale=1.0 '>
                <link rel= 'stylesheet ' href= '../css/mensaje.css '>
                <link rel= 'stylesheet ' href= '../iconos/css/all.min.css '> 
                <link rel= 'icon ' type= 'image/png ' href= '../imagenes/pestaña1.png ' />  
                <title>Contacto</title>
            </head>
            <body>
                <div class= 'principal '>
                    <div class= 'titulo '>
                        <div class= 'icono '><i class= 'fas fa-check-square '></i></div>
                        <div class= 'correcto '><span>LOS DATOS INGRESADOS FUERON RECIBIDOS CORRECTAMENTE</span></div>
                        <div  class= 'icono '><i class= 'fas fa-check-square '></i></i>
                    </div>
                </div>
                <div class= 'info '>
                    <span>Datos recibidos</span>
                    
                    <p>Nombre: <span> $nombre </span> </p>
                    <p>Apellido: <span> $apellido </span> </p>
                    <p>Email: <span> $email </span> </p>
                    <p>Mensaje: <span> $mensaje </span> </p><br />

                    $titulo

                    $viajev

                    $mesv

                    <a href= '../index.php '><button><i class= 'fas fa-angle-double-left '>   volver a inicio</i></button></a>

                </div>
            </body>
            </html>";
}
else {
    echo "
        <!DOCTYPE html>
        <html lang= 'es '>
        <head>
            <meta charset= 'UTF-8 '>
            <meta http-equiv= 'X-UA-Compatible ' content= 'IE=edge '>
            <meta name= 'viewport ' content= 'width=device-width, initial-scale=1.0 '>
            <link rel= 'stylesheet ' href= '../css/mensaje.css '>
            <link rel= 'stylesheet ' href= '../iconos/css/all.min.css '> 
            <link rel= 'icon ' type= 'image/png ' href= '../imagenes/pestaña1.png ' />  
            <title>Contacto</title>
        </head>
        <body>
            <div class= 'principal '>
                <div class= 'titulo1 '>
                    <div class= 'icono '><i class= 'fas fa-exclamation-triangle '></i></div>
                    <div class= 'correcto '><span>LOS DATOS INGRESADOS NO SON VALIDOS</span></div>
                    <div  class= 'icono '><i class= 'fas fa-exclamation-triangle '></i></i>
                </div>
            </div>
            <div class= 'info1 '>
                <span>¡UPSS NO PUDIMOS RECIBIR LOS DATOS!</span>
                
                <p>Algun dato de los ingresados debe estar mal </p>
                <p>Por favor vuelva a completar el formulario y envielo de nuevo</p>
                <br />
                <a href= '../paginas/contacto.php '><button><i class= 'fas fa-angle-double-left '>   volver al formulario</i></button></a>
            </div>
        </body>
        </html>";
}
?>