<?php

$usuario=$_POST['username'];

$contrasena=md5($_POST['password']);
session_start();

$_SESSION['usuario'] = $usuario;

$conexion = mysqli_connect("localhost","root","","fundader_busqueda");

$consulta = "SELECT * FROM usuarios where username='$usuario' and password='$contrasena'";
$resultado = mysqli_query($conexion,$consulta);

$filas= mysqli_num_rows($resultado);

if($filas){
    header("Location:p.php");
    //Echo"Pasó";
}else{
    ?>
    <?php
    include("inicio_sesion.php");
    ?>
    <script type="text/javascript">
        alert("Credenciales incorrectas. Por favor, volver a ingresar las credenciales");
    </script>
    <?php

    
}
mysqli_free_result($resultado);
mysqli_close($conexion);
