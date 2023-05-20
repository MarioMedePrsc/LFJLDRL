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
    protected $rol;

    protected function insertTrabajador(){
        $ic = new Connection;
        $conexion = $ic->openConnection();
        $insertarSQL = "INSERT INTO trabajador(correo_trab, password_trab, nombre_trab, apellido_trab, fecha_nacimiento, pais_trab, genero_trab, tel_trab, CV_trab) VALUES ('$this->email','$this->password','$this->nombre','$this->apellidos','$this->fechaNacimiento','$this->pais','$this->genero','$this->telefono','$this->ruta')";
        $resultado = mysqli_query($conexion,$insertarSQL);
        $conexion = null;
    }
    protected function insertEmpleador(){
        $ic = new Connection;
        $conexion = $ic->openConnection();
        $insertarSQL = "INSERT INTO empleador(correo_emple, password_emple, nombre_emple, apellidos_emple, tel_emple) VALUES ('$this->email','$this->password','$this->nombre','$this->apellidos','$this->telefono')";
        $resultado = mysqli_query($conexion,$insertarSQL);
        if($resultado){
            echo "<script>alert('Empleador registrado con exito');</script>";
        }else {
            echo "<script>alert('ERROR!! inesperado, no se pudo registrar');</script>";
        }
        $conexion = null;
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