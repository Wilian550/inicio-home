<!DOCTYPE html>
<html lang="es">

<head>
	<title>registro</title>
	<link rel="stylesheet" type="text/css" href="stilo2.css">
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
  
</head>
<body>


  <form onsubmit="return validateForm()" action="registrar.php" method="post">
     
     <label for="email">nombre o correo</label>
      <input type="text" id="email" name="email"placeholder="nombre o correo" required>
   
      <label for="password">Contraseña:</label>
      <input type="password" id="password" name="password" required>

      <label for="confirm-password">Confirmar contraseña:</label>
      <input type="password" id="confirm-password" name="confirm-password"required>

      <button type="submit">Registrar</button>
    </form>

    <script>
      function validateForm() {
        var password = document.getElementById("password").value;
        var confirmPassword = document.getElementById("confirm-password").value;

        if (password != confirmPassword) {
          alert("Las contraseñas no coinciden. Por favor, inténtalo de nuevo.");
          return false;
        }

        return true;
      }
    </script>


</body>
</html>