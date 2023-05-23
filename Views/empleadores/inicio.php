<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vacantes</title>
    <link rel="stylesheet" href="../css.normalize.css">
    <link rel="preload" href="../css/normalize.css" as="style">
    <link rel="stylesheet" href="../css/styles.css">
    <link rel="preload" href="../css/styles.css" as="style">

    <!--Fonts-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;700&family=League+Spartan:wght@400;700&display=swap" rel="stylesheet">

    <link rel="preload" href="../css/style_prin_empleadores.css" as="style">
    <link rel="stylesheet" href="../css/style_prin_empleadores.css" as="style">

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>
<body>

<div >
    <a href="../Controllers/C_Empleador.php?action=inicio" >  
        <img class="logo" src="../imagenes/logo.png" style="position: absolute; float: left; top:0px;"></a>
    </div>

<header  style="position: fixed; right: 10px; font-family: 'Inter','League Spartan'; z-index: 3; background-color: white; border-radius: 0px 0px 0px 10px; ">
        
        <!--NAVBAR-->
        <div class="header-b">
         <div style="display:flex;float:right; margin-top:10px; margin-right: 10px;" > 
         <a class="M_navlink" href="../Controllers/C_Empleador.php?action=inicio" style="padding: 10px; text-decoration: none;  font-size: 2.5vh;">Inicio</a>
         <a class="M_navlink" href="../Controllers/C_Empleador.php?action=PostularVacante" style="padding: 10px; text-decoration: none;  font-size: 2.5vh;">Postular Vacante</a>   
        <form action="../Controllers/C_UsuarioController.php" method="POST" style="padding: 10px;">
            <input type="hidden" name="action" value="CerrarSesion" />
            <button class="M_navlink" type="submit" style="padding: 10px; font-family: 'Inter','League Spartan'; font-size: 2.5vh; margin-top:-10px; border: 0px transparent; ">Cerrar Sesion</button>
        </form>
        </div>
        </div>
        <!--FIN DEL NAVBAR-->
        
    </header> <br/><br/> 
    
    
        
    <section class="centro">
        <div class="sombra"><h2>Vacantes Postuladas</h2></div>
    </section>
    <br>
    <section class="busqueda"  >
        <div >
        <h2>Vacantes activas que has postulado:</h2>
        </div>
        <div >
        <a href="../Controllers/C_Empleador.php?action=PostularVacante">
        <button class="globo-menta">+ Nueva vacante</button></a>
        </div>
    </section>
    
    
    <section class="grid3">
        <?php 
        //MOSTRAR DATOS
        $contador = 0;
        while($vacante = mysqli_fetch_assoc($resultado)){
            ?>
            
            <a style="text-decoration: none;" href="../Controllers/C_Empleador.php?VerVacante=<?php echo $vacante["id_vacante"] ?>&IdPostulado=">
            
            <div class="vacante" id="vacante_1">
            <div class="centro"><img src="../<?php echo $vacante["logo_vac"] ?>" class="icono" style="border-radius: 5px;"></div>
            <h3><?php echo $vacante["nombre_vac"] ?></h3>
            <div class="centro"><img src="../svg/edificio.svg" class="icono"></div>
            <p>Empresa: <?php echo $vacante["nombre_emp"] ?></p>
            <div class="centro"><img src="../svg/ubicacion.svg" class="icono"></div>
            <p><?php echo $vacante["ubicacion_vac"] ?></p>
            <div class="centro"><img src="../svg/maletin.svg" class="icono"></div>
            <p><?php echo $vacante["jornada_vac"] ?></p>
            <div class="centro ancho2"><button class="detalles">Ver detalles</button></div>
            </div>   
            </a>
            
            <?php
            $contador=$contador+1;
        }
        if($contador==0 && $vacante==null){
            echo "No tienes ninguna vacante activa <br\>";
        }
        //echo "Numero de vacantes".$contador;
        
        
        ?>

    </section>
    <div class="footer">
        <p class="blanco footer-text">LFJLDRL © 2023</p>
    </div>

    <script src="../js/jquery-3.7.0.min.js"></script>
    <script src="../js/interfaz_login.js"></script>
</body>
</html>