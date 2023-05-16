<?php 
class Connection {
    public $db;
    public function openConnection()
    {
        $db = mysqli_connect("localhost","root","","lfjldrl") or die ("ERROR!! No se pudo conectar con la base de datos");
        return($db);
    }

    public function CloseConnection(){
        $this -> db = null;
        return 0;
    }
}
?>