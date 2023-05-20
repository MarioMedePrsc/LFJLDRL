<!DOCTYPE html>
<html>
    <head></head>
    <body>
        <h1>INICIO TRABAJADORES</h1>
        <a href="../Controllers/C_Trabajador.php?action=inicio">Volver al inicio</a>
        <form action="../Controllers/C_UsuarioController.php" method="POST">
        <input type="hidden" name="action" value="CerrarSesion"/>
        <button type="submit" >CerrarSesion</button>
        </form>
        <form method="$_GET" action="../Controllers/C_Trabajador.php">
            <label>Buscar: </label></label><input type="text" name="buscar"/>
            <label>Donde: </label></label><input type="text" name="donde"/>
            <input type=hidden value="" name="VacanteSeleccionada"/>
            <button type="submit">Buscar</button>
        </form>
        <!--VACANTES A LAS QUE TE HAS POSTULADO-->
        <div>
            <h1>Vacantes a las que te has postulado:</h1>
        
        <?php 
        while($Vacante = mysqli_fetch_assoc($resultado)){
            ?>
            <div>
                <h2><?php echo $Vacante['vacante_postulada'] ?></h2>
                <p><?php echo "Fecha: ".$Vacante['fecha_postulado'] ?></p>
                <p><?php echo "Estado: ".$Vacante['estado'] ?></p>
                <!--BOTON PARA DESPOSTULARSE-->
                <form action="../Controllers/C_Trabajador.php" method="POST">
                    <input type="hidden" name="despostular" value="<?php echo $Vacante['id_postulado']; ?>">
                    <button type="submit">Despostularme</button>
                </form>

            </div>
            <?php
        }
        ?>
        </div>
        <!--ENTREVISTAS PENDIENTES-->
        <div>
            <h1>Entrevistas pendientes</h1>
            <div>
                <?php
                while($entrevista = mysqli_fetch_assoc($lista_entrevistas)){
                    ?>
                    <p><?php echo $entrevista["nombre_trab"]; ?></p>
                    <p><?php echo $entrevista["fecha_ent"]; ?></p>
                    <p><?php echo $entrevista["hora_ent"]; ?></p>
                    <p><?php echo $entrevista["lugar_ent"]; ?></p>
                    <p><?php echo $entrevista["formato_ent"]; ?></p>
                    <p><?php echo $entrevista["estado"]; ?></p>
                    <form action="../Controllers/C_Trabajador.php" method="POST">
                        <input type="hidden" value="<?php echo $entrevista["id_entrevista"]; ?>" name="CancelarEnt"/>
                        <input type="hidden" value="<?php echo $infoVacante["id_vacante"]; ?>" name="idVaca"/>
                        <button type="submit">Cancelar Entrevista</button>
                    </form>
                    <?php
                }
                ?>
            </div>
        </div>
    </body>
</html>