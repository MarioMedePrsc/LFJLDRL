<?php 
if($vacantesOcupadas != null){
    $cnt_rows = mysqli_num_rows($vacantesOcupadas);
    $i = 0;
    while($vacOcu = mysqli_fetch_assoc($vacantesOcupadas)){
        $NoVacaOcu[$i] = $vacOcu["id_vacante"];
        $i = $i + 1;
    }
}
if($vacantesEntrevistadas != null){
    $cnt_rows2 = mysqli_num_rows($vacantesEntrevistadas);
    $i = 0;
    while($vacOcu2 = mysqli_fetch_assoc($vacantesEntrevistadas)){
        $NoVacaOcu2[$i] = $vacOcu2["id_vacante"];
        $i = $i + 1;
    }
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Búsqueda de empleo</title>
    <link rel="stylesheet" href="../css.normalize.css">
    <link rel="preload" href="../css/normalize.css" as="style">
    <link rel="stylesheet" href="../css/styles.css">
    <link rel="preload" href="../css/styles.css" as="style">

    <!--Fonts-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;700&family=League+Spartan:wght@400;700&display=swap" rel="stylesheet">

    <link rel="preload" href="../css/style_bsuqueda.css" as="style">
    <link rel="stylesheet" href="../css/style_busqueda.css" as="style">

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>

<body>

<div style="position: fixed; right: 10px; font-family: 'Inter','League Spartan'; z-index: 3; background-color: white; border-radius: 0px 0px 0px 10px; ">
        <!--NAVBAR-->
        <div class="header-b">
         <div style="display:flex;float:right; margin-top:10px; margin-right: 10px;" >  
         <a class="M_navlink" href="../Controllers/C_Trabajador.php?action=inicio" style="padding: 10px; text-decoration: none;  font-size: 2.5vh; ">Inicio</a>
         <a class="M_navlink" href="../Controllers/C_Trabajador.php?buscar=&donde=&VacanteSeleccionada=" style="padding: 10px; text-decoration: none;  font-size: 2.5vh; ">Buscar Vacantes</a>   
        <form action="../Controllers/C_UsuarioController.php" method="POST" style="padding: 10px;">
            <input type="hidden" name="action" value="CerrarSesion" />
            <button class="M_navlink" type="submit" style="padding: 10px; font-family: 'Inter','League Spartan'; font-size: 2.5vh; margin-top:-10px; border: 0px transparent;  ">Cerrar Sesion</button>
        </form>
        </div>
        </div>
        <!--FIN DEL NAVBAR-->
    </div> <br/><br/>
    <div class="grid-estructura">
        <!--ZONA SUPERIOR-->
        <section>
            
            <a href="../Controllers/C_Trabajador.php?action=inicio" >
            <img class="logo" src="../imagenes/logo.png" /></a>
        </section>
        <section>   <br/><br/>         
            
            <form method="$_GET" action="../Controllers/C_Trabajador.php">
            <div class="grid-buscar">
                <!--QUÉ-->
                <input type=hidden value="" name="VacanteSeleccionada"/>
                <div class="que">
                    <h2>Qué</h2>
                    <p class="texto-gris">Título, palabras clave o empresa</p>
                    <input type="text" id="que" class="barra-busqueda" name="buscar" value="<?php echo $_GET['buscar'] ?>" >
                </div>
                <!--DÓNDE-->
                <div class="donde">
                    <h2>Dónde</h2>
                    <p class="texto-gris">Ciudad o estado</p>
                    <input type="text" id="que" class="barra-busqueda" name="donde" value="<?php echo $_GET['donde'] ?>">
                </div>
                <!--BUSCAR-->
                <div class="alinear-bttn">
                    <button class="bttn-buscar" type="submit">BUSCAR EMPLEOS</button>
                </div>
                
            </div>
            </form> 
        </section>

        <!--LADO IZQUIERDO-->
        <section class="side-left">
            <p>Encuentra las mejores vacantes!</p>
            <!--
            <p class="texto-gris">Clasificar por:</p>
            <p>Relevancia - Fecha</p>
            <p>Tipo de empleo:</p>
            <ul class="texto-gris">
                <li>Jornada completa (2)</li>
                <li>Media jornada (5)</li>
                <li>Beca / Prácticas (1)</li>
                <li>Autónomo (0)</li>
                <li>Indefinido (11)</li>
            </ul>
            <p>+ Más</p>-->
        </section>

        <!--ÁREA DE EMPLEOS-->
        <section class="zn-empleos ultimo">
        <scroll-container>
        <?php
        if($_GET["buscar"]==""){
            echo "No se encontró ninguna vacante que coincida con los parametros de la busqueda";
        }else{
            $contador = 0;
        while($row = mysqli_fetch_assoc($resultado)){
            //Comprobaciones
            $ocupado = 0;
            for($i=0;$i<$cnt_rows;$i++){
                if($row["id_vacante"]==$NoVacaOcu[$i]){
                    $ocupado=1;
                }
            }
            for($i=0;$i<$cnt_rows2;$i++){
                if($row["id_vacante"]==$NoVacaOcu2[$i]){
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
                    $VS_id = $row["id_vacante"];
                }
                ?>
                <a href="../Controllers/C_Trabajador.php?buscar=<?php echo $nombreVac; ?>&donde=<?php echo $ubicacionVac; ?>&VacanteSeleccionada=<?php echo $row["id_vacante"];?>" style="text-decoration: none;">
                
                <div>
                    <div>
                    <img src="../<?php echo $row["logo_vac"]; ?>" width="50px" height="50px">
                    </div>
                    <div>
                    <h2 class="puesto" id="puesto" style="text-decoration: none;"><?php echo $row["nombre_vac"];?></h2>
                    <p class="empresa" id="empresa"><?php echo $row["idioma_vac"]; ?></p>
                    <p class="ciudad" id="ciudad"><?php echo $row["ubicacion_vac"]; ?></p>
                    <p class="sueldo" id="sueldo">$<?php echo $row["sueldo_vac"]; ?> MXN por mes</p>
                    </div>
                </div>
                </a>
                <br/>
                <?php
                
                $contador = $contador + 1;
            }
            
        }
        
        }
        ?>
        
            </scroll-container>


            <scroll-container>

            <?php
        if($_GET["buscar"]==""){

        }else if($contador==0){
            echo "No se encontró ninguna vacante que coincida";
        }else if($vacanteSeleccionada==""){
            echo "Selecciona una vacante para ver su información";
        }else {
            ?>

                <div class="vacante" id="vacante_1" >
                    <img src="../<?php echo $VS_logo; ?>" width="50px" height="50px">
                    <h3 class="puesto" id="puesto_1"><?php echo $VS_nombre;?></h3>
                    <p class="empresa" id="empresa_1"><?php echo $VS_emp; ?></p>
                    <p class="ciudad" id="ciudad_1"><?php echo $VS_ubicacion;?></p>
                    <p class="sueldo" id="sueldo_1">$<?php echo $VS_sueldo;?> MXN por mes</p>
                    <p>Descripción: <?php echo $VS_descripcion; ?></p>
                    <p class="about" id="about_1">Sobre el empleo
                        <ul class="texto-normal">
                            <li><b>Idioma:</b> <?php echo $VS_idioma;?></li>
                            <li><b>Jornada:</b> <?php echo $VS_jornada;?></li>
                            <li><b>Formato:</b> <?php echo $VS_formato;?></li>
                        </ul>
                    </p>
                    <form action="../Controllers/C_Trabajador.php" method="POST">
                    <input type="hidden" name="postular" value="<?php echo $VS_id; ?>">
                    <input type="hidden" name="nomVacante" value="<?php echo $VS_nombre; ?>">
                    <input type="hidden" name="foto_vacante" value="<?php echo $VS_logo; ?>">
                    <button class="postularse" type="submit">POSTULARME</button>
                    </form>
                </div>
            <?php
        }
    
        ?>
            </scroll-container>
        </section>
    </div>

    <div class="footer">
        <p class="blanco footer-text">LFJLDRL © 2023</p>
    </div>

    <script src="../js/jquery-3.7.0.min.js"></script>
    <script src="../js/busqueda_empleos.js"></script>
</body>

</html>
