<?php 
include("conexionDB.php");
$email = $_POST["email"];
$password = $_POST["password"];
$rol = $_POST["rol"];

if($rol == "trabajador"){
    $consulta = "SELECT * FROM trabajador where correo_trab = '$email' and password_trab = '$password' ";
    $resultado = mysqli_query($conexion, $consulta);
}else if($rol == "empleador"){
    $consulta = "SELECT * FROM empleador where correo_emple = '$email' and password_emple = '$password' ";
    $resultado = mysqli_query($conexion, $consulta);
}
$filas = mysqli_num_rows($resultado);
if ($filas){
    session_start();
    $row = mysqli_fetch_assoc($resultado);
    
    if($rol == "trabajador"){
        $_SESSION['idUsuario']=$row["id_trabajador"];
        $_SESSION['correo']=$row["correo_trab"];
        $_SESSION['nombre']=$row["nombre_trab"];
        $_SESSION['rol']=$rol;
        header("location: ../trabajadores/inicio.php");
        
    }else{
        $_SESSION['idUsuario']=$row["id_empleador"];
        $_SESSION['correo']=$row["correo_emple"];
        $_SESSION['nombre']=$row["nombre_emple"];
        $_SESSION['rol']=$rol;
        header("location: ../empleadores/inicio.php");
    }
    

}else{
    echo "ERROR!! Correo o contraseña incorrectos";
    include('../login.php');
}


?>