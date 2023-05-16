<?php 

class StarterController{

    public function __construct()
    {
        session_start();
    }

    public function redirect(){
        header("location: C_UsuarioController.php?action=login");
    }
}

?>