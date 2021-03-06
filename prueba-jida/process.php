<?php
	//Inicio de session
	session_start();
	//Cabeceras
	header("Access-Control-Allow-Origin: *");
	header("Content-Type: application/json; charset=UTF-8");
	header("Content-Type: text/html; charset=utf-8");
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

	    if(is_array($row)){
			foreach ($row as $status) {
				$arrConnections = $row["status"];
				if($arrConnections == "connected"){
		    		//Usuario Valido - iniciar session;
		    			$token = bin2hex(openssl_random_pseudo_bytes(64));
						//echo "Token de acceso <br/>";
						//echo $token;
			    } else {
			    	//echo "Usuario Invalido";
			    	header("Location: http://localhost/prueba-jida");
					exit;
			    }
			}
		}
	}
?>

<div class="row">
	<div class"menu">
		<a href="/prueba-jida/agregar.php?token=<?php echo $token; ?>"> Crear</a>
		<a href="#"> Editar </a>
		<a href="#"> Eliminar </a>
		<a href="/prueba-jida/cerrar_session.php"> Cerrar Session </a>
	</div>
</div>	

<?php		    	
	//Listar Post	
	$post ='https://api.dev.graphs.social/v4/graphs?containers_ids=5d0051fc3039353ff68410e8&entities_ids=14%2C23%2C48%2C49%2C50%2C51&limit=30&next=time_updated';
	$publicaciones = file_get_contents($post);
	$post_array = json_decode($publicaciones, true);
	//print_r($post_array);

	
	foreach ($post_array as $p_array ) { 
			//print_r($p_array);
		if(is_array($p_array)){
			foreach($p_array as $key) {
				if(is_array($key)){
					foreach($key as $document){
						if(is_array($document)){
							foreach($document as $docu){
								if(is_array($docu)){
									foreach ($docu as $d) {
										echo $d;
									}
									echo '<br/>';
								}	
							}
						}	
					}
				}
			}
		}   
	}  		    	
?>