<?php
	$correo = $_POST["email"];
	$clave = $_POST["password"];
	$archivo = file("emailRegistrados.txt");
	$emailEncontrado = "no";
	$claveEncontrada = "no";

	for($i =0;$i<count($archivo);$i++){
		if($archivo[$i] == $correo."\n"){  // el problema era el salto de linea
			$emailEncontrado = "si";
			if($archivo[$i+1] == $clave."\n"){  // el \n salto de linea es clave
				$claveEncontrada = "si";
			}
		}  // fin if primario

	}  // fin del for
	if($emailEncontrado =="no"){
		include("registro.php");
	}
	else if($claveEncontrada == "si" && $emailEncontrado == "si"){
		include("inicio.php"); // dentro de inicio se crea una cookie ojo
	}
	else if($emailEncontrado == "si" && $claveEncontrada =="no"){
		include("contraceña_mala.php");
	}


?>