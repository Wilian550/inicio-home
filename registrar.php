<?php
	$email = $_POST["email"];
	$clave = $_POST["password"];

	// la contraceña al usare para ver mas adelante si coincide con la del usuario y si no la restablesca mostrandole esta contraceña
	$yaRegistrado = "no";
	$datosUsuario = $email."\n".$clave."\n"; 
	$lineas = file("emailRegistrados.txt");
	for($cont = 0; $cont < count($lineas);$cont++){
		if($lineas[$cont] == $email."\n"){
			$yaRegistrado = "si";
			// verifica si el email ya fue registrado y si es asi , yaRegistrado vale "si"
		}
	} // cierre del for
	if($yaRegistrado == "si"){
		print("el nombre o correo ya fue registrado registre uno distinto");
		// aqui todo un formulario de nuevo
	}
	else{
	$abierto = fopen("emailRegistrados.txt","a"); // modo añadir
	if(fputs($abierto,$datosUsuario)){
		include("inicio.php"); // carga la pagina inicial
	}
	else{
		include("errorPagina.php");
	}

	fclose($abierto);}

?>