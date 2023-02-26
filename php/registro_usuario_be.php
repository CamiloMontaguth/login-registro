<?php

include 'conexion_de.php';

$nombre_completo = $_POST['nombre_completo'];
$correo = $_POST ['correo'];
$usuario = $_POST ['usuario'];
$contrasena = $_POST ['contrasena'];

$query = "INSERT INTO usuarios(Nombre_completo, correo, usuario, contrasena)
          VALUES ('$nombre_completo','$correo', '$usuario', '$contrasena')"; 

$ejecutar = mysqli_query($conexion, $query);


if ($ejecutar){
    echo'
     <script>
     alert("Usuario Registrado");
     window.location = "../login.php";
     </script>  
    ';
}else {
    echo'
    <script>
    alert("Intentalo nuevamente");
    window.location = "../login.php";
    </script>  
   ';

}
mysqli_close($conexion);
?>