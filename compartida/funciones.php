<?php
include_once("arreglos.php");

//********************************************************
function armar_select_viaje () {
	global $arr_viaje;
	$html="<select class='dato dato2'  name='viaje' >
				<option value=''>Viaje..</option>";

	foreach ($arr_viaje as $key => $value)

		$html.="<option value='$key'>$value</option>;";
			
	 	$html.="</select>";
			
	return $html;
}
//********************************************************

//********************************************************

//*****************************************
// Funcion que arma el selct de los meses
//***************************************

function armar_select_meses () {
    global $arr_meses;
	$html="<select class='dato dato2' name='mes'>
				<option value=''>Mes...</option>";

    foreach ($arr_meses as $key => $value)
    $html.="<option value='$key'>$value</option>;";

	 $html.="</select>";

	return $html;
}
//********************************************************

//********************************************************

/*
//***************************************
// Funcion que arma el selct de los dias
//**************************************
function armar_select_dias () {

	$html="<select  name='select' required>
				<option value=''>Dias...</option>";
	for ($i = 1; $i <= 31; $i++) {

		$html.="<option value='$i'>$i</option>";
	  
	}
	 $html.="</select>";

	return $html;
}
*/
//*****************************************
// Funcion que arma el selct de los viajes
//****************************************

/*
//***************************************
// Funcion que arma el selct de los años
//**************************************

function armar_select_años () {

	$html="<select  name='select' required>
				<option value=''>Año...</option>";
	for ($i = 2010; $i <= 2021 ; $i++) {

		$html.="<option value='$i'>$i</option>";
	  
	}
	 $html.="</select>";

	return $html;
}
*/




?>