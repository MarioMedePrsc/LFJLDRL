<!DOCTYPE html>
<html>
    <head></head>
    <body>
        <h1>VER VACANTE EMPLEADOR</h1>
        <a href="../Controllers/C_Empleador.php?action=inicio">Volver al inicio</a>
        <form action="../Controllers/C_UsuarioController.php" method="POST">
        <input type="hidden" name="action" value="CerrarSesion"/>
        <button type="submit" >CerrarSesion</button>
        </form>
        <?php
        //INFORMACION DE LA VACANTE
        ?>
        <img src="../<?php echo $infoVacante["logo_vac"]; ?>" width="50px" height="50px"/>
        <h1> <?php echo $infoVacante["nombre_vac"];?></h1>
        <p><?php echo $infoVacante["nombre_emp"]." ". $infoVacante["jornada_vac"].
        " ". $infoVacante["ubicacion_vac"] ." ". $infoVacante["formato_vac"] ?></p>
        <!--Personas postuladas-->
        <div>
        <h1>Personas postuladas</h1>    
        <div>
            <?php 
            while($postulado = mysqli_fetch_assoc($lista_postulados)){
                ?>
                <a href="../Controllers/C_Empleador.php?VerVacante=<?php echo $postulado["id_vacante"]; ?>&IdPostulado=<?php echo $postulado['id_trabajador']; ?>">
                <div>
                <h3><?php echo $postulado["nombre_postulado"]?></h3>
                </div>
                </a>
                <?php
            }
            ?>
            </div>
            <div>
                <?php
                if($infoPostulado==null){
                    echo "Selecciona a un postulado para ver su información";

                }else{
                    ?>
                    <h1><?php echo $infoPostulado["nombre_trab"]; ?></h1>
                    <p><?php echo $infoPostulado["apellido_trab"]; ?></p>
                    <p><?php echo $infoPostulado["correo_trab"]; ?></p>
                    <p><?php echo $infoPostulado["tel_trab"]; ?></p>
                    <p><?php echo $infoPostulado["fecha_nacimiento"]; ?></p>
                    <p><?php echo $infoPostulado["pais_trab"]; ?></p>
                    <p><?php echo $infoPostulado["genero_trab"]; ?></p>
                    Descargar <a href="../<?php echo $infoPostulado["CV_trab"]; ?>" download="CV_<?php echo $infoPostulado["nombre_trab"]; ?>">Curriculum</a>
                    
                    
                    <form action="../Controllers/C_Empleador.php" method="POST">
                    <h2>Registrar entrevista</h2>
                    <input type="hidden" name="E_IdVacante" value="<?php echo $infoVacante["id_vacante"]; ?>">
                    <input type="hidden" name="E_IdTrabajador" value="<?php echo $infoPostulado["id_trabajador"]; ?>"/>
                    <input type="hidden" name="nombreVac" value="<?php echo $infoVacante["nombre_vac"]; ?>">
                    <input type="hidden" name="nombreTrab" value="<?php echo $infoPostulado["nombre_trab"]; ?>"/>
                    <label>Dia: </label><input type= "date" name="dia"/>
                    <label>Hora: </label><input type= "time" name="hora"/><br/>
                    <label>Formato:</label><select name="formato">
                    <option>Presencial</option>
                    <option>En línea</option>
                    </select>
                    <label>Lugar/Medio: </label><input type="text" name="lugar"><br/>
                    <label>Mensaje: <input type="textarea" name="mensaje"></label><br/>
                    <button type="submit">Agendar</button>
                    </form>
                    <?php
                } ?>
            </div>
        </div>
        <!--Entrevistas pendientes-->
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
                    <form action="../Controllers/C_Empleador.php" method="POST">
                        <input type="hidden" value="<?php echo $entrevista["id_entrevista"]; ?>" name="CancelarEnt"/>
                        <input type="hidden" value="<?php echo $infoVacante["id_vacante"]; ?>" name="idVaca"/>
                        <button type="submit">Cancelar Entrevista</button>
                    </form>
                    <?php
                }
                ?>
            </div>
        </div>
        <?php
        ?>
    </body>
</html>