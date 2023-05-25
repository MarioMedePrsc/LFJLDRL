<?php

use LDAP\Result;

include('M_conexionDB.php');

class Trabajador {
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

    protected $nombreVac;
    protected $ubicacionVac;
    protected $vacanteSeleccionada;

    protected $vacanteDespostular;
    protected $idCancelarEnt;
    protected $idVacante;
    


    protected function SearchVacantesByName(){
        $ic = new Connection;
        $conexion = $ic->openConnection();
        if($this->ubicacionVac==""){
            $consulta = "SELECT * FROM vacantes WHERE nombre_vac like '$this->nombreVac%' ";
        }else{
            $consulta = "SELECT * FROM vacantes WHERE nombre_vac like '$this->nombreVac%' and ubicacion_vac like '$this->ubicacionVac%'";
        }
        
        $resultado = mysqli_query($conexion,$consulta);
        $ic->CloseConnection();
        //and id_vacante != (SELECT id_vacante FROM lista_postulados WHERE id_trabajador='$this->id')
        return $resultado;
    }
    protected function SearchVacantesPostuladas(){
        $ic = new Connection;
        $conexion = $ic->openConnection();
        $consulta = "SELECT * FROM lista_postulados WHERE id_trabajador = '$this->id' and estado='Activo'";
        $resultado = mysqli_query($conexion,$consulta);
        $ic->CloseConnection();
        //and id_vacante != (SELECT id_vacante FROM lista_postulados WHERE id_trabajador='$this->id')
        return $resultado;
    }
    protected function SearchTrabajadorById(){
        $ic = new Connection;
        $conexion = $ic->openConnection();
        $consulta = "SELECT * FROM trabajador where id_trabajador = '$this->id' ";
        $resultado = mysqli_query($conexion, $consulta);
        $objetoConsulta = mysqli_fetch_assoc($resultado);
        $ic->CloseConnection();
        return $objetoConsulta;
    }
    protected function InsertarPostulado($usuario,$vacantePostulada, $nomVacante, $foto_vacante){
        $ic = new Connection;
        $conexion = $ic->openConnection();
        $fecha = date("m-d-y");
        $nombre_postulado = $usuario['nombre_trab'];
        $CV_postulado = $usuario['CV_trab'];
        $id_trab = $usuario['id_trabajador'];
        $foto_postulado = $usuario['foto_perfil'];
        $consulta = "INSERT INTO lista_postulados(nombre_postulado, vacante_postulada, fecha_postulado, CV_postulado, estado, id_trabajador, id_vacante, foto_postulado, foto_vacante) VALUES ('$nombre_postulado','$nomVacante','$fecha','$CV_postulado','Activo','$id_trab','$vacantePostulada','$foto_postulado','$foto_vacante') ";
        $resultado = mysqli_query($conexion, $consulta);
        if($resultado){
            echo "<script>alert('Se postuló correctamente');</script>";
        }else {
            echo "<script>alert('ERROR!! inesperado, no se pudo registrar');</script>";
        }
        $conexion = null;
    }
    protected function Despostulacion(){
        $ic = new Connection;
        $conexion = $ic->openConnection();
        $consulta = "UPDATE lista_postulados SET estado='Inactivo' WHERE id_postulado='$this->vacanteDespostular' and id_trabajador='$this->id'";
        $resultado = mysqli_query($conexion, $consulta);
        if($resultado){
            echo "<script>alert('Se despostuló correctamente');</script>";
        }else {
            echo "<script>alert('ERROR!! inesperado, no se pudo despostular');</script>";
        }
        $ic->CloseConnection();
    }
    protected function SearchEntrevistas(){
        $ic = new Connection;
        $conexion = $ic->openConnection();
        $consulta = "SELECT * FROM entrevistas where id_trabajador = '$this->id' and estado = 'Activo'";
        $resultado = mysqli_query($conexion, $consulta);
        return $resultado;
    }
    protected function CancelarEnt(){
        $ic = new Connection;
        $conexion = $ic->openConnection();
        $consulta = "UPDATE entrevistas SET estado='Cancelado' WHERE id_entrevista = '$this->idCancelarEnt'";
        $resultado = mysqli_query($conexion, $consulta);
        if($resultado){
            echo "<script>Piola</script>";
        }
    }
}?>