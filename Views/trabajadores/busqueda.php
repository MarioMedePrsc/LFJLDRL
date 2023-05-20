<?php 
if($vacantesOcupadas != null){
    $cnt_rows = mysqli_num_rows($vacantesOcupadas);
    $i = 0;
    while($vacOcu = mysqli_fetch_assoc($vacantesOcupadas)){
        $NoVacaOcu[$i] = $vacOcu["id_vacante"];
        $i = $i + 1;
    }
}
?>
<!DOCTYPE html>
<html>
    <head></head>
    <body>
        <h1>INICIO BUSQUEDAS</h1>
        <a href="../Controllers/C_Trabajador.php?action=inicio">Volver al inicio</a>
        <form action="../Controllers/C_UsuarioController.php" method="POST">
        <input type="hidden" name="action" value="CerrarSesion"/>
        <button type="submit" >CerrarSesion</button>
        </form>
        <?php 
        
        
        $contador = 0;
        while($row = mysqli_fetch_assoc($resultado)){
            $ocupado = 0;
            for($i=0;$i<$cnt_rows;$i++){
                if($row["id_vacante"]==$NoVacaOcu[$i]){
                    $ocupado=1;
                }
            }
            if($ocupado==0){
                if($row["id_vacante"] == $vacanteSeleccionada || $contador == 0){
                    $VS_nombre = $row["nombre_vac"];
                    $VS_ubicacion = $row["ubicacion_vac"];
                    $VS_idioma = $row["idioma_vac"];
                    $VS_sueldo = $row["sueldo_vac"];
                    $VS_jornada = $row["jornada_vac"];
                    $VS_formato = $row["formato_vac"];
                    $VS_descripcion = $row["descripcion_vac"];
                    $VS_logo = $row["logo_vac"];
                    $VS_emp = $row["nombre_emp"];
                    $VS_telEmp = $row["tel_emp"];
                    $VS_idEmp = $row["id_emple"];
                }
                ?>
                <a href="../Controllers/C_Trabajador.php?buscar=<?php echo $nombreVac; ?>&donde=<?php echo $ubicacionVac; ?>&VacanteSeleccionada=<?php echo $row["id_vacante"];?>">
                <div>
                    <img src="../<?php echo $row["logo_vac"]; ?>" width="50px" height="50px">
                    <h2><?php echo $row["nombre_vac"];?></h2>
                    <p><?php echo $row["sueldo_vac"]; ?></p>
                    <p><?php echo $row["idioma_vac"]; ?></p>
                    <p><?php echo $row["ubicacion_vac"]; ?></p>
                    <p></p>
                </div></a>
                
                <?php
                
                $contador = $contador + 1;
            }
            
        }

        if($contador==0){
            echo "No se encontró ninguna vacante que coincida";
        }else {
            ?>
            <div>
            <img src="../<?php echo $VS_logo; ?>" width="50px" height="50px">
                <h2><?php echo $VS_nombre;?></h2>
                <p><?php echo $VS_sueldo;?> mensuales</p>
                <p><?php echo $VS_ubicacion;?></p>
                <p><?php echo $VS_emp; ?></p>
                <p>Idioma: <?php echo $VS_idioma;?></p>
                <p>Jornada: <?php echo $VS_jornada;?></p>
                <p>Formato: <?php echo $VS_formato;?></p>
                <p>Descripción: <?php echo $VS_descripcion; ?></p>
                <form action="../Controllers/C_Trabajador.php" method="POST">
                    <input type="hidden" name="postular" value="<?php echo $vacanteSeleccionada; ?>">
                    <input type="hidden" name="nomVacante" value="<?php echo $VS_nombre; ?>">
                    <button type="submit">Postularme</button>
                </form>
            </div>
            <?php ?>
            <?php
        }
        
        

        
        ?>
    </body>
</html>