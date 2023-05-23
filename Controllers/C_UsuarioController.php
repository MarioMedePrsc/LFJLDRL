<?php

//use UsuarioController as GlobalUsuarioController;

require '../Model/M_Usuario.php';
require 'StarterController.php';
$ics = new StarterController();

class UsuarioController extends Usuario {
    public function LoginView(){
        require '../Views/login.php';
    }
    public function ViewRegistroTrabajador(){
        require '../Views/trabajadores/registro.php';
    }
    public function ViewRegistroEmpleador(){
        require '../Views/empleadores/registro.php';
    }
    public function SaveInfoForModel($nombre, $apellidos, $email, $password, $fechaNacimiento, $pais, $genero, $telefono, $ruta, $rutaPerfil){
        $this -> nombre = $nombre;
        $this -> apellidos = $apellidos;
        $this -> email = $email;
        $this -> password = $password;
        $this -> fechaNacimiento = $fechaNacimiento;
        $this -> pais = $pais;
        $this -> genero = $genero;
        $this -> telefono = $telefono;
        $this -> ruta = $ruta;
        $this->  rutaPerfil=$rutaPerfil;
        $usuario = $this -> insertTrabajador();
        if($usuario == null){
            echo "<script>window.history.back();</script>";   
        }else if($usuario){
            echo "<script>alert('Usuario registrado con éxito')</script>";
            header("location: C_UsuarioController.php?action=login");
        }else{
            echo "<script>alert('ERROR!! no se pudo registrar el usuario')</script>";
            echo "<script>window.history.back();</script>";
        }
    }
    public function SaveInfoForEmpleador($nombre, $apellidos, $email, $password, $telefono){
        $this -> nombre = $nombre;
        $this -> apellidos = $apellidos;
        $this -> email = $email;
        $this -> password = $password;
        $this -> telefono = $telefono;
        $usuario= $this -> insertEmpleador();
        if($usuario == null){
            echo "<script>window.history.back();</script>";   
        }else if($usuario){
            echo "<script>alert('Usuario registrado con éxito')</script>";
            header("location: C_UsuarioController.php?action=login");
        }else{
            echo "<script>alert('ERROR!! no se pudo registrar el usuario')</script>";
            echo "<script>window.history.back();</script>";
        }
    }

    public function VerifyLoginTrabajador($email,$password,$rol){
        $this->email = $email;
        $this->password = $password;
        $this->rol = $rol;
        $usuario = $this->SearchUsuarioForName();
        if($usuario==null){
            echo "ERROR!! el usuario no existe";
        }else if(password_verify($password, $usuario["password_trab"])){
            echo "Sesión iniciada con éxito";
            $_SESSION['id'] = $usuario["id_trabajador"];
            $_SESSION['nombre'] = $usuario["nombre_trab"];
            $_SESSION['correo'] = $usuario["correo_trab"];
            $_SESSION['rol'] = $rol;
            header("location: C_Trabajador.php?action=inicio");
        }else{
            echo "ERROR! Correo o contraseña incorrectos"; 
        }
    }

    public function VerifyLoginEmpleador($email,$password,$rol){
        $this->email = $email;
        $this->password = $password;
        $this->rol = $rol;
        $usuario = $this->SearchUsuarioForName();
        if($usuario==null){
            echo "ERROR!! el usuario no existe";
        }else if(password_verify($password, $usuario["password_emple"])){
            echo "Sesión iniciada con éxito";
            $_SESSION['id'] = $usuario["id_empleador"];
            $_SESSION['nombre'] = $usuario["nombre_emple"];
            $_SESSION['correo'] = $usuario["correo_emple"];
            $_SESSION['rol'] = $rol;
            header("location: C_Empleador.php?action=inicio");
        }else{
            echo "ERROR! Correo o contraseña incorrectos";
            
        }
    }
    public function CerrarSesion(){
        @session_start();
        session_destroy();
        echo "<script>alert('Sesion Cerrada con éxito');</script>";
        header("location: ../index.php");
        
    }

}

if(isset($_GET['action']) && $_GET['action']=='login'){
    $instanciaControlador = new UsuarioController();
    $instanciaControlador -> LoginView();
}

if(isset($_GET['action']) && $_GET['action']=='V_registroT'){
    $instanciaControlador = new UsuarioController();
    $instanciaControlador -> ViewRegistroTrabajador();
}

if(isset($_GET['action']) && $_GET['action']=='V_registroE'){
    $instanciaControlador = new UsuarioController();
    $instanciaControlador -> ViewRegistroEmpleador();
}

if(isset($_POST['action']) && $_POST['action']=='registrarTrabajador'){
    $instanciaControlador = new UsuarioController();
    /*ENCRIPTAR CONTRASEÑA */
    $password = password_hash($_POST['password'],PASSWORD_BCRYPT);
    //SUBIR CV
    $nombre_base = basename($_FILES["CV"]["name"]);
    $nombre_final = date("m-d-y"). "-". date("H-i-s") . "-".$nombre_base;
    $ruta = "archivos/CV/" . $nombre_final;
    $subirarchivo = move_uploaded_file($_FILES["CV"]["tmp_name"],"../".$ruta);
    //SUBIR FOTO DE PERFIL
    $nombre_base = basename($_FILES["fotoPerfil"]["name"]);
    $nombre_final = date("m-d-y"). "-". date("H-i-s") . "-".$nombre_base;
    $rutaPerfil = "archivos/fotoPerfil/" . $nombre_final;
    $subirFoto = move_uploaded_file($_FILES["fotoPerfil"]["tmp_name"],"../".$rutaPerfil);

    $instanciaControlador -> SaveInfoForModel (
        $_POST["nombre"],
        $_POST["apellidos"],
        $_POST["email"],
        $password,
        $_POST["fechaNacimiento"],
        $_POST["pais"],
        $_POST["genero"],
        $_POST["telefono"],
        $ruta,
        $rutaPerfil
    );
}
if(isset($_POST['action']) && $_POST['action']=='registrarEmpleador'){
    $instanciaControlador = new UsuarioController();
    /*ENCRIPTAR CONTRASEÑA */
    $password = password_hash($_POST['password'],PASSWORD_BCRYPT);

    $instanciaControlador -> SaveInfoForEmpleador (
        $_POST["nombre"],
        $_POST["apellidos"],
        $_POST["email"],
        $password,
        $_POST["telefono"],
    );
}
if(isset($_POST['action']) && $_POST['action']=='login'){
    $instanciaControlador=new UsuarioController();
    if($_POST['rol']=="trabajador"){
        $instanciaControlador -> VerifyLoginTrabajador($_POST['email'],$_POST['password'],$_POST['rol']);
    }else{
        $instanciaControlador -> VerifyLoginEmpleador($_POST['email'],$_POST['password'],$_POST['rol']);
    }
    
}
if(isset($_POST['action']) && $_POST['action']=="CerrarSesion"){
    $instanciaControlador=new UsuarioController();
    $instanciaControlador -> CerrarSesion();
}

?>