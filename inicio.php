<?php
	
	if( !isset ($_COOKIE["nombre"])){
		setcookie("nombre",$_POST["email"],time()+60*60*60);
	// si la cookie no esta creada la crea
}
	if(isset($_POST["email"])){
		pagina();
	}
	else if(isset($_COOKIE["nombre"])){
		pagina();
	}
	// puse estas sentencias porque si pongo solo una de las dos , existen en sus paginas
	// y en ocasiones no existen , capas que dice error no definido post email y eso
	// por eso , o funciona post o funciona cookie
	function pagina(){
		print "<!DOCTYPE html>
		<html>
		<head>
			<title>home</title>
			<link rel='stylesheet' href='stilo3.css'>
			<meta charset='utf-8'>
			<meta name='viewport' content='width=device-width, initial-scale=1'>
		</head>
		<body>
				<h1>home basic</h1>
				<div id ='caja'>
					<form action='escribirComentario.php' method='post'>
  					<textarea id='comentario' name='comentario'placeholder='tus comentarios'></textarea><br>
					 <button type='submit'>Comentar</button>
					</form>

				

					".$leerComentario = file('comentarios.txt'); 
					
					  $numeroFinal =0;
					// leemos los comentarios para su impresion
					for($contador =0;$contador < count($leerComentario);$contador++){
						$numeroFinal = $contador;
						// tengo el numero final
					}
					for($numeroFinal;$numeroFinal >=0;$numeroFinal--){
						print('<div class="coments">');
						echo($leerComentario[$numeroFinal]);
						print('</div>');
						echo('<br>');  //salto de linea para separar los div 
						}
					"

				</div>  
		</body>
		</html>";
	}
	// en la pequeña pagina tiene que haber una seccion de comentarios y perfiles de los usuarios
	// para que puedan hablar o comentar , subir imagenes y mas
?>