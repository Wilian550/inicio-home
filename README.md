# inicio-home
ejemplo de home inico
 
Este sitio es para compartir charlas con las personas, hacer amigos y conocer personas, pero todavía está en desarrollo 
como verán encontramos archivos de texto.txt estos almacenan los datos que los usuarios ingresan como sus contraseñas y email o nombres registrados, ya que no trabajo aún con base de datos, eso supondría un cambio total a la página, pero si tienes experiencia en bases de datos puedes ayudarme 
bueno la página tiene demasiados errores que voy a ir enumerando por partes y (porque suceden los mismos)

ERRORES DE CÓDIGO
1: al escribir tu comentario en la página ,este se guarda en el archivo.txt llamado comentarios.txt donde más adelante se convertirán en un array a todo el archivo para su impresión en la del inicio de la página ,el problema es que cuando recargas la página el comentario se reescribirá de nuevo, esto es porque como ya se escribió al recargar se guarda de nuevo en comentarios.txt

2: error de estilo, el error de estilo se ve claramente desde un dispositivo móvil, ya que la imagen y las demás cajas no se adaptan muy bien al los distintos aparatos no soy bueno en css ,y bueno tiene errores

3: saltos de línea ,los saltos de línea en los comentarios funcionan asi.
Bueno, cuando alguien escribe su comentario, este en el código se le agrega el .\n  o salto de línea para que el nombre se guarde abajo del comentario, lo normal sería guardar el nombre arriba del comentario , la razón por la que se imprime el nombre sobre el comentario es porque use un bucle que va en reversa , se puede ver en el código también comentado
