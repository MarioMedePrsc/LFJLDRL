<?php 

class StarterController{

    public function __construct()
    {
        session_start();
    }

    public function redirectLogin(){
        header("location: C_UsuarioController.php?action=login");
    }
}

?>