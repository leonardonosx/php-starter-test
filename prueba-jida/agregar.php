<?php
	//Cabeceras
	//Inicio de session
	session_start();
	header("Access-Control-Allow-Origin: *");
	header("Content-Type: application/json; charset=UTF-8");
	header("Content-Type: text/html; charset=utf-8");
	header("Access-Control-Allow-Methods: OPTIONS,GET,POST,PUT,DELETE");
	header("Access-Control-Max-Age: 3600");
	header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");

	$token = $_GET['token'];
	//echo $token;
?>
<html>
<head>
<title>Prueba de Jida Desarrollo</title>
<link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<body>
<div style="width:700px; margin:0 auto;">

<h3>Agregar Post</h3>   
<form method="POST" action="#">
	<input type="hidden"    name ="access_token" value="<?php echo $token ?>">
	<input type="hidden"    name="entity" value="post">
	<input type="hidden"    name="container_id" value="5d0051fc3039353ff68410e8">
	<input type="text"      name="titulo" ><br/>
	<input type="textarea"  name="descripcion" ><br/>
	<input type="submit" value="Enviar">
</form>



<br />

</div>
</body>
</html>


<?php
//proceso y envio la data para agregar un post
//Obtengo los parametros
	$access_token = $_POST['access_token'];
	$entity       = $_POST['entity'];
	$container_id = $_POST['container_id'];
	$titulo       = $_POST['titulo'];
	$descripcion  = $_POST['descripcion'];
	$url            = 'https://api.[dev.]graphs.social/v4/graphs/?=access_token'.$access_token.'&entity='.$entity.'&container_id='.$container_id.'&titulo='.$titulo.'&descripcion'.$descripcion;
 	
 	//echo $resultados;
?>