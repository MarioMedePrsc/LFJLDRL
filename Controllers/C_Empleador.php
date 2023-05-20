<?php 
require '../Model/M_Empleador.php';
require 'StarterController.php';
$ics = new StarterController();
if(empty($_SESSION['nombre'])){
    $ics->redirectLogin();

}

class EmpleadorController extends Empleador {
    public function InicioView(){
        $this->idEmple=$_SESSION['id'];
        $resultado = $this-> BuscarVacantes();
        require '../Views/empleadores/inicio.php';
    }
    public function VerVacanteView(){
        $this->idVacante = $_GET['VerVacante'];
        $this->idPostulado = $_GET['IdPostulado'];
        $infoPostulado = $this->SearchPostulado();
        $infoVacante = $this->SearchVacante();
        $lista_postulados = $this->SearchPostulados();
        $lista_entrevistas = $this->SearchEntrevistas();
        if($infoVacante == null){
            header("location: C_Empleador.php?action=inicio");
        }else{
            require '../Views/empleadores/VerVacante.php';
        }
        
    }
    public function PostularVacanteView(){
        require '../Views/empleadores/PostularVacante.php';
    }
    public function SaveInfoForModel(
        $nombreVac,
        $ubicacionVac,
        $idiomaVac,
        $sueldoVac,
        $jornadaVac,
        $formatoVac,
        $descripcionVac,
        $nombreEmp,
        $correoEmp,
        $telefonoEmp,
        $ruta
        ){
            $this->idEmple=$_SESSION['id']; 
            $this->nombreVac=$nombreVac;
            $this->ubicacionVac=$ubicacionVac;
            $this->idiomaVac=$idiomaVac;
            $this->sueldoVac=$sueldoVac;
            $this->jornadaVac=$jornadaVac;
            $this->formatoVac=$formatoVac;
            $this->descripcionVac=$descripcionVac;
            $this->nombreEmp=$nombreEmp;
            $this->correoEmp=$correoEmp;
            $this->telefonoEmp=$telefonoEmp;
            $this->ruta=$ruta;
            $this -> insertVacante();
            header("location: C_Empleador.php?action=inicio");
        }
        public function InsertEntrevista (
            $E_IdVacante,
            $E_IdTrabajador,
            $dia,
            $hora,
            $formato,
            $lugar,
            $mensaje,$nombreTrab,$nombreVac
            ){
            $this->E_IdVacante = $E_IdVacante;
            $this->E_IdTrabajador = $E_IdTrabajador;
            $this->dia = $dia;
            $this->hora = $hora;
            $this->formato = $formato;
            $this->lugar = $lugar;
            $this->mensaje = $mensaje;
            $this->NombreTrab = $nombreTrab;
            $this-> NombreVac = $nombreVac;
            $this->AgendarEntrevista();
            $ruta= "C_Empleador.php?VerVacante=".$E_IdVacante.";&IdPostulado=";
            header('Location: '.$ruta.'');
        }
        public function CancelarCita($idCita,$idVaca){
            $this->idCancelarEnt = $idCita;
            $this->idVacante = $idVaca;
            $this->CancelarEnt();
            $ruta= "C_Empleador.php?VerVacante=".$idVaca.";&IdPostulado=";
            header('Location: '.$ruta.'');
        }
}


if(isset($_GET['action']) && $_GET['action']=='inicio'){
    $instanciaControlador = new EmpleadorController();
    $instanciaControlador -> InicioView();
}
if(isset($_GET['VerVacante'])){
    $instanciaControlador = new EmpleadorController();
    $instanciaControlador -> VerVacanteView();
}
if(isset($_GET['action']) && $_GET['action']=='PostularVacante'){
    $instanciaControlador = new EmpleadorController();
    $instanciaControlador -> PostularVacanteView();
}
if(isset($_POST['action']) && $_POST['action']=='PostularVacante'){
    $instanciaControlador = new EmpleadorController();

    $nombre_base = basename($_FILES["logoEmp"]["name"]);
    $nombre_final = date("m-d-y"). "-". date("H-i-s") . "-".$nombre_base;
    $ruta = "archivos/vacantes/" . $nombre_final;
    $subirarchivo = move_uploaded_file($_FILES["logoEmp"]["tmp_name"],"../".$ruta);

    $instanciaControlador -> SaveInfoForModel (
        $_POST["nombreVac"],
        $_POST["ubicacionVac"],
        $_POST["idiomaVac"],
        $_POST["sueldoVac"],
        $_POST["jornadaVac"],
        $_POST["formatoVac"],
        $_POST["descripcionVac"],
        $_POST["nombreEmp"],
        $_POST["correoEmp"],
        $_POST["telefonoEmp"],
        $ruta
    );
}
if(isset($_POST['E_IdVacante'])){
    $instanciaControlador = new EmpleadorController();
    $E_IdVacante = $_POST['E_IdVacante'];
    $instanciaControlador->InsertEntrevista (
        $_POST['E_IdVacante'],
        $_POST['E_IdTrabajador'],
        $_POST['dia'],
        $_POST['hora'],
        $_POST['formato'],
        $_POST['lugar'],
        $_POST['mensaje'],$_POST['nombreTrab'],$_POST['nombreVac']
    );
}
if(isset($_POST['CancelarEnt'])){
    $instanciaControlador = new EmpleadorController();
    $idCita = $_POST['CancelarEnt'];
    $idVaca = $_POST['idVaca'];
    $instanciaControlador ->CancelarCita($idCita,$idVaca);
}

?>