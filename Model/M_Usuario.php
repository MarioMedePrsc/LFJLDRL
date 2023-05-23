<?php 
include('M_conexionDB.php');

class Usuario {
    protected $id;
    protected $nombre;
    protected $apellidos;
    protected $email;
    protected $password;
    protected $fechaNacimiento;
    protected $pais;
    protected $genero;
    protected $telefono;
    protected $ruta;
    protected $rutaPerfil;
    protected $rol;

    protected function insertTrabajador(){
        $ic = new Connection;
        $conexion = $ic->openConnection();
        $consulta = "SELECT * FROM trabajador WHERE correo_trab='$this->email'";
        $resultado = mysqli_query($conexion,$consulta);
        if((mysqli_num_rows($resultado))==0){
            $insertarSQL = "INSERT INTO trabajador(correo_trab, password_trab, nombre_trab, apellido_trab, fecha_nacimiento, pais_trab, genero_trab, tel_trab, CV_trab, foto_perfil) VALUES ('$this->email','$this->password','$this->nombre','$this->apellidos','$this->fechaNacimiento','$this->pais','$this->genero','$this->telefono','$this->ruta','$this->rutaPerfil')";
            $resultado = mysqli_query($conexion,$insertarSQL);
        }else{
            echo "<script>alert('Error!, ya existe un usuario registrado con ese correo');</script>";
            $resultado=null;
        }
        $conexion = null;
        return $resultado;
    }
    protected function insertEmpleador(){
        $ic = new Connection;
        $conexion = $ic->openConnection();
        $consulta = "SELECT * FROM empleador WHERE correo_emple='$this->email'";
        $resultado = mysqli_query($conexion,$consulta);
        if((mysqli_num_rows($resultado))==0){
            $insertarSQL = "INSERT INTO empleador(correo_emple, password_emple, nombre_emple, apellidos_emple, tel_emple) VALUES ('$this->email','$this->password','$this->nombre','$this->apellidos','$this->telefono')";
            $resultado = mysqli_query($conexion,$insertarSQL);
        }else{
            echo "<script>alert('Error!, ya existe un usuario registrado con ese correo');</script>";
            $resultado=null;
        }
        
        $conexion = null;
        return $resultado;
    }

    protected function SearchUsuarioForName(){
        $ic = new Connection;
        $conexion = $ic->openConnection();
        if($this->rol == "trabajador"){
            $consulta = "SELECT * FROM trabajador where correo_trab = '$this->email' ";
            $resultado = mysqli_query($conexion, $consulta);
        }else if($this->rol == "empleador"){
            $consulta = "SELECT * FROM empleador where correo_emple = '$this->email' ";
            $resultado = mysqli_query($conexion, $consulta);
        }
        $objetoConsulta = mysqli_fetch_assoc($resultado);
        $conexion = null;
        return $objetoConsulta;
    }
}
?>