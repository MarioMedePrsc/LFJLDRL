<?php
    include("conexionDB.php");


    $nombre = $_POST["nombre"];
    $apellidos = $_POST["apellidos"];
    $email = $_POST["email"];
    $password = $_POST["password"];
    $telefono = $_POST["telefono"];

    $insertarSQL = "INSERT INTO empleador(correo_emple, password_emple, nombre_emple, apellidos_emple, tel_emple) VALUES ('$email','$password','$nombre','$apellidos','$telefono')";
    $resultado = mysqli_query($conexion,$insertarSQL);
    if($resultado){
        echo "<script>alert('Usuario Registrado con exito'); window.location='../login.php'</script>";
    }else{
        printf("Errormessage: %s\n", mysqli_error($conexion));
    }
    
?>