<!DOCTYPE html>
<html>
    <head></head>
    <body>
        <h1>INICIO EMPLEADOR</h1>
        <a href="../Controllers/C_Empleador.php?action=inicio">Volver al inicio</a>
        <a href="../Controllers/C_Empleador.php?action=PostularVacante">Postular Vacante</a>
        <form action="../Controllers/C_UsuarioController.php" method="POST">
        <input type="hidden" name="action" value="CerrarSesion"/>
        <button type="submit" >CerrarSesion</button>
        </form>
        <?php 
        //MOSTRAR DATOS
        $contador = 0;
        while($vacante = mysqli_fetch_assoc($resultado)){
            ?>
            
            <a href="../Controllers/C_Empleador.php?VerVacante=<?php echo $vacante["id_vacante"] ?>&IdPostulado=">
            <div>
            <img src="../<?php echo $vacante["logo_vac"] ?>" width="50px" height="50px"/>
            <p>Nombre: <?php echo $vacante["nombre_vac"] ?></p>
            <p>Empresa: <?php echo $vacante["nombre_emp"] ?></p>
            <p>Ubicación: <?php echo $vacante["ubicacion_vac"] ?></p>
            <p>Jornada: <?php echo $vacante["jornada_vac"] ?></p>
            </div>    
            </a>
            
            <?php
            $contador=$contador+1;
        }
        if($contador==0 && $vacante==null){
            echo "No tienes ninguna vacante activa <br\>";
        }
        echo "Numero de vacantes".$contador;
        
        
        ?>
    </body>
</html>