<?php 
require '../Model/M_Trabajador.php';
require 'StarterController.php';
$ics = new StarterController();
if(empty($_SESSION['nombre'])){
    $ics->redirectLogin();
}

class TrabajadorController extends Trabajador {
    public function InicioView(){
        $this->id=$_SESSION['id'];
        $resultado = $this->SearchVacantesPostuladas();
        $infoVacantes = $this->SearchVacantesByName();
        $lista_entrevistas = $this->SearchEntrevistas();
        require '../Views/trabajadores/inicio.php';
    }
    public function BuscarVacantes ( $nombreVac, $ubicacionVac, $vacanteSeleccionada ) {
        $this->id=$_SESSION['id'];
        $this->nombreVac = $nombreVac;
        $this->ubicacionVac = $ubicacionVac;
        $this->vacanteSeleccionada = $vacanteSeleccionada;

        //Vacante Seleccionadaa
        $resultado = $this->SearchVacantesByName();
        $vacantesOcupadas = $this->SearchVacantesPostuladas();
        $vacantesEntrevistadas = $this->SearchEntrevistas();
        require '../Views/trabajadores/busqueda.php';
    }
    public function Postularse($vacantePostulada, $nomVacante, $foto_vacante){
        $this->id=$_SESSION['id'];
        $resultado = $this->SearchTrabajadorById();
        $this->InsertarPostulado($resultado,$vacantePostulada, $nomVacante, $foto_vacante);
        echo "<script>window.history.back();</script>";
    }
    public function Despostular($vacanteDespostulada){
        $this->id=$_SESSION['id'];
        $this->vacanteDespostular = $vacanteDespostulada;
        $this->Despostulacion();
        echo "<script>window.history.back();</script>";
    }
    public function CancelarCita($idCita,$idVaca){
        $this->idCancelarEnt = $idCita;
        $this->idVacante = $idVaca;
        $this->CancelarEnt();
        echo "<script>window.history.back();</script>";
    }
}


if(isset($_GET['action']) && $_GET['action']=='inicio'){
    $instanciaControlador = new TrabajadorController();
    $instanciaControlador -> InicioView();
}
if(isset($_GET['buscar'])){
    $instanciaControlador = new TrabajadorController();
    $nombreVac = $_GET['buscar'];
    $ubicacionVac = $_GET['donde'];
    $vacanteSeleccionada = $_GET['VacanteSeleccionada'];
    $instanciaControlador -> BuscarVacantes($nombreVac,$ubicacionVac,$vacanteSeleccionada);
}
if(isset($_POST['postular'])){
    $instanciaControlador = new TrabajadorController();
    $vacantePostulada = $_POST['postular'];
    $nomVacante = $_POST['nomVacante'];
    $foto_vacante = $_POST['foto_vacante'];
    $instanciaControlador -> Postularse($vacantePostulada, $nomVacante, $foto_vacante);
}
if(isset($_POST['despostular'])){
    $instanciaControlador = new TrabajadorController();
    $vacanteDespostulada = $_POST['despostular'];
    
    $instanciaControlador -> Despostular($vacanteDespostulada);
}
if(isset($_POST['CancelarEnt'])){
    $instanciaControlador = new TrabajadorController();
    $idCita = $_POST['CancelarEnt'];
    $idVaca = $_POST['idVaca'];
    $instanciaControlador ->CancelarCita($idCita,$idVaca);
}
?>