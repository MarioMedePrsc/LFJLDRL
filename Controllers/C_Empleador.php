<?php 
require '../Model/M_Empleador.php';
require 'StarterController.php';
$ics = new StarterController();
if(empty($_SESSION['nombre'])){
    $ics->redirect();

}

class EmpleadorController extends Empleador {
    public function InicioView(){
        require '../Views/empleadores/inicio.php';
    }
    public function VerVacanteView(){
        require '../Views/empleadores/VerVacante.php';
    }
    public function PostularVacanteView(){
        require '../Views/empleadores/PostularVacante.php';
    }
}


if(isset($_GET['action']) && $_GET['action']=='inicio'){
    $instanciaControlador = new EmpleadorController();
    $instanciaControlador -> InicioView();
}
if(isset($_GET['VerVacante']) && $_GET['VerVacante']=='inicio'){
    $instanciaControlador = new EmpleadorController();
    $instanciaControlador -> VerVacanteView()();
}
if(isset($_GET['action']) && $_GET['action']=='postularVacante'){
    $instanciaControlador = new EmpleadorController();
    $instanciaControlador -> PostularVacanteView();
}


?>