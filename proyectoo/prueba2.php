<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
  <link rel="stylesheet" media="all" href="style1.css" />

</head>

<body >
<div class="bg"></div>
<div class="bg bg2"></div>
<div class="bg bg3"></div>
<div class="content">
  

        <MARQUEE HEIGHT="50" BGCOLOR="#F6DDCC"
        BEHAVIOR="alternate">
    <B><FONT FACE="monotype corsiva" SIZE="6"
        COLOR="#DC7633">
 Perfil</MARQUEE>
   <B>
   <?php
    echo"Nombre: ";echo$_POST['name'];echo"<br>";
    echo"Apelidos: ";echo$_POST['apellidos'];echo"<br>";
    echo"Correo electronico: ";echo$_POST['correoelectronico'];echo"<br>";
    echo"ciudad: ";echo$_POST['ciudad'];echo"<br>";
    echo"codigo postal: ";echo$_POST['codigopostal'];echo"<br>";
    echo"pais: ";echo$_POST['pais'];echo"<br>";
    echo"Nombre de usuario: ";echo$_POST['nomsusu'];echo"<br>";
 
    ?>
   

       <a href="index2.html">Volver</a>
</div>

</body>
</html>