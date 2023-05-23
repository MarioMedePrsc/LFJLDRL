<?php 
include('M_conexionDB.php');

class Empleador {
    protected $idEmple;
    protected $nombreVac;
    protected $ubicacionVac;
    protected $idiomaVac;
    protected $sueldoVac;
    protected $jornadaVac;
    protected $formatoVac;
    protected $descripcionVac;
    protected $nombreEmp;
    protected $correoEmp;
    protected $telefonoEmp;
    protected $ruta;
    protected $idVacante;

    //Datos Postulados
    protected $idPostulado;

    //Datos Entrevista
    protected $E_IdVacante;
    protected $E_IdTrabajador;
    protected $dia;
    protected $hora;
    protected $formato;
    protected $lugar;
    protected $mensaje;
    protected $NombreTrab;
    protected $NombreVac;
    protected $foto_entrevistado;
    protected $foto_vacante;

    protected $idCancelarEnt;
    /* */

    protected function insertVacante(){
        $ic = new Connection;
        $conexion = $ic->openConnection();
        $insertarSQL = "INSERT INTO vacantes(nombre_vac, ubicacion_vac, idioma_vac, sueldo_vac, jornada_vac, formato_vac, descripcion_vac, logo_vac, nombre_emp, tel_emp,id_emple) VALUES ('$this->nombreVac','$this->ubicacionVac','$this->idiomaVac','$this->sueldoVac','$this->jornadaVac','$this->formatoVac','$this->descripcionVac','$this->ruta','$this->nombreEmp','$this->telefonoEmp','$this->idEmple')";
        $resultado = mysqli_query($conexion,$insertarSQL);
        $conexion = null;
    }
    protected function BuscarVacantes(){
        $ic = new Connection;
        $conexion = $ic->openConnection();
        
        $consulta = "SELECT * FROM vacantes where id_emple = '$this->idEmple' ";
        $resultado = mysqli_query($conexion, $consulta);
        return $resultado;
    }
    protected function SearchVacante(){
        $ic = new Connection;
        $conexion = $ic->openConnection();
        
        $consulta = "SELECT * FROM vacantes where id_vacante = '$this->idVacante' ";
        $resultado = mysqli_query($conexion, $consulta);
        
        $objetoConsulta = mysqli_fetch_assoc($resultado);
        return $objetoConsulta;
    }
    protected function SearchPostulados(){
        $ic = new Connection;
        $conexion = $ic->openConnection();
        $consulta = "SELECT * FROM lista_postulados where id_vacante = '$this->idVacante' and estado = 'Activo'";
        $resultado = mysqli_query($conexion, $consulta);
        
        return $resultado;
    }
    protected function SearchPostulado(){
        $ic = new Connection;
        $conexion = $ic->openConnection();
        $consulta = "SELECT * FROM trabajador where id_trabajador = '$this->idPostulado'";
        $resultado = mysqli_query($conexion, $consulta);
        $objetoConsulta = mysqli_fetch_assoc($resultado);
        return $objetoConsulta;
    }
    protected function AgendarEntrevista(){
        $ic = new Connection;
        $conexion = $ic->openConnection();
        $consulta = "INSERT INTO entrevistas(lugar_ent, fecha_ent, hora_ent, formato_ent, mensaje_ent, id_vacante, id_trabajador,nombre_trab,nombre_vac, estado,foto_entrevistado,foto_vacante) VALUES ('$this->lugar','$this->dia','$this->hora','$this->formato','$this->mensaje','$this->E_IdVacante','$this->E_IdTrabajador','$this->NombreTrab','$this->NombreVac','Activo','$this->foto_entrevistado','$this->foto_vacante')";
        $resultado = mysqli_query($conexion, $consulta);
        if($resultado){
            $consulta = "UPDATE lista_postulados SET estado='Aceptado' WHERE id_trabajador='$this->E_IdTrabajador' and id_vacante='$this->E_IdVacante' ";
            $resultado = mysqli_query($conexion, $consulta);
            echo "<script>alert('Entrevista agendada con éxtio')</script>";
        }else{
            echo "<script>alert('ERROR!! No se pudo agendar la entrevista')</script>";
        }
    }
    protected function SearchEntrevistas(){
        $ic = new Connection;
        $conexion = $ic->openConnection();
        $consulta = "SELECT * FROM entrevistas where id_vacante = '$this->idVacante' and estado = 'Activo'";
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