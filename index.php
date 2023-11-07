<!DOCTYPE html>
<html>
<head>
   <title>Encuesta</title>
</head>
<body>
   <h1>Encuesta</h1>
   <form method="post" action="">
       <p>¿Cómo te sientes hoy?</p>
       <input type="radio" name="respuesta" value="Muy bien"> Muy bien<br>
       <input type="radio" name="respuesta" value="Bien"> Bien<br>
       <input type="radio" name="respuesta" value="Regular"> Regular<br>
       <input type="radio" name="respuesta" value="Mal"> Mal<br>
       <input type="submit" name="enviar" value="Enviar">
   </form>
</body>
</html>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
   $respuesta = $_POST["respuesta"];
   echo "Gracias por responder. Tu respuesta fue: " . $respuesta;
}
?>
