<?php 
require '../Model/M_Trabajador.php';
require 'StarterController.php';
$ics = new StarterController();
$ics = new StarterController();
if(empty($_SESSION['nombre'])){
    $ics->redirect();
}

class TrabajadorController extends Trabajador {
    public function InicioView(){
        require '../Views/trabajadores/inicio.php';
    }
    public function BusquedaView(){
        require '../Views/trabajadores/busqueda.php';
    }
}


if(isset($_GET['action']) && $_GET['action']=='inicio'){
    $instanciaControlador = new TrabajadorController();
    $instanciaControlador -> InicioView();
}
if(isset($_GET['busqueda']) && $_GET['busqueda']=='inicio'){
    $instanciaControlador = new TrabajadorController();
    $instanciaControlador -> BusquedaView();
}

?>