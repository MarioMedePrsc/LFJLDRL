<?php
    include("conexionDB.php");


    $nombre = $_POST["nombre"];
    $apellidos = $_POST["apellidos"];
    $email = $_POST["email"];
    $password = $_POST["password"];
    $fechaNacimiento = $_POST["fechaNacimiento"];
    $pais = $_POST["pais"];
    $genero = $_POST["genero"];
    $telefono = $_POST["telefono"];

    if($_FILES["CV"]){
        $nombre_base = basename($_FILES["CV"]["name"]);
        $nombre_final = date("m-d-y"). "-". date("H-i-s") . $nombre_base;
        $ruta = "archivos/" . $nombre_final;
        $subirarchivo = move_uploaded_file($_FILES["CV"]["tmp_name"],"../".$ruta);
        if($subirarchivo){
            $insertarSQL = "INSERT INTO trabajador(correo_trab, password_trab, nombre_trab, apellido_trab, fecha_nacimiento, pais_trab, genero_trab, tel_trab, CV_trab) VALUES ('$email','$password','$nombre','$apellidos','$fechaNacimiento','$pais','$genero','$telefono','$ruta')";
            $resultado = mysqli_query($conexion,$insertarSQL);
            if($resultado){
                echo "<script>alert('Usuario Registrado con exito'); window.location='../login.php'</script>";
            }else{
                printf("Errormessage: %s\n", mysqli_error($conexion));
            }
        }

    }else{
        echo "Error al subir archivo";
    }
    
?>