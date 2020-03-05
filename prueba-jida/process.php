<?php
	//Cabeceras
	header("Access-Control-Allow-Origin: *");
	header("Content-Type: application/json; charset=UTF-8");
	header("Access-Control-Allow-Methods: OPTIONS,GET,POST,PUT,DELETE");
	header("Access-Control-Max-Age: 3600");
	header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");

	//Obtengo los parametros
	$application_id = $_GET['application_id'];
	$email          = $_GET['email'];
	$password       = $_GET['password'];
	$url            = 'https://auth.dev.graphs.social/v4/login?application_id='.$application_id.'&email='.$email.'&password='.$password;
 	$resultados = file_get_contents($url);
 	//echo $resultados;

 	//Proceso la data
 	$array = json_decode($resultados, true);

	foreach ($array as $row) {
	    $arrConnections = $row["status"];
	}

	echo ($arrConnections);
	//print_r($arrConnections) ;

?>