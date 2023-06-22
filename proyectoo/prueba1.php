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
  Mi base de datos</MARQUEE>
   <B>
       <?php
       $conexion=mysqli_connect("localhost","root","","login")
       or die("problemas  co la conexion");
       mysqli_query($conexion,"insert into usuarios
       (usuario,mail,contraseña) values
       ('$_REQUEST[usuario]','$_REQUEST[mail]',$_REQUEST[contraseña])")
       or die("problemas en el select".mysqli_error($conexion));
       mysqli_close($conexion);
       echo"El usuario a sido registrado.";
       ?>
       <a href="index.html">Continuar</a>
</div>

</body>
</html>