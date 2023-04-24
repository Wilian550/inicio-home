<!DOCTYPE html>
<?php 
if(isset($_COOKIE["nombre"])){
   
    include("inicio.php");
    // tengo que poner una pagina de inico para que muestre si ya se habia iniciado sesion
}
else{print '.


<html lang="es">

<head>
	<title>registro</title>
	<link rel="stylesheet" type="text/css" href="stilo.css">
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
  
</head>
<body>


<form action ="procesarEntrada.php"method="post">
  <div class="form-group">
    <label for="email">nombre o correo</label>
    <input type="text" id="email" name="email"placeholder="nombre o apodo" required>
  </div>

  <div class="form-group">
    <label for="password">Contraseña</label>
    <input type="password" id="password" name="password"placeholder="contraseña" required>
  </div>

 

  <button type="submit">Iniciar sesión</button>

  <div class="link-container">
    <a href="#">¿Has olvidado tu contraseña?</a>
    <span>·</span>
    <a href="registro.php">Crear cuenta</a>
  </div>
</form>


</body>
</html>
.';
}?>