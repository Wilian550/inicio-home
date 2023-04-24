<?php 
	/* aqui tengo que programar que cuando encuentre mas de un salto de linea ,no lo tome , asi solucionaria el error de las lineas si alguin pone enter muchas veces*/
	
	$comentarioUsuario = $_POST["comentario"]."\n";

	$archivoAbierto = fopen("comentarios.txt","a");
	// si esta definido el comentario ,verifica que no este vacio 
	// para que no escriban aire le puse una alerta
	
	if(isset ($_POST["comentario"])){

		if($_POST["comentario"] == ""){
		include("inicio.php");
		print("<script>alert('no puedes comentar aire');</script>");
		}
		else{
			
			fputs($archivoAbierto,"<p style='color:black;font-family:verdana;'>".$_COOKIE["nombre"]."</p>".$comentarioUsuario);
			// guarda en el archivo de texto el texto que ingreso el usuario y su nombre
			include("inicio.php");
			
		}
	}
	
	fclose($archivoAbierto); // cerramos el archivo
?>