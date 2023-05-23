<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vacantes</title>
    <link rel="stylesheet" href="../css.normalize.css">
    <link rel="preload" href="../css/normalize.css" as="style">

    <!--Fonts-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;700&family=League+Spartan:wght@400;700&display=swap" rel="stylesheet">

    <link rel="preload" href="../css/style_prin_empleadores.css" as="style">
    <link rel="stylesheet" href="../css/style_prin_empleadores.css" as="style">

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>
<body>
    <form action="../Controllers/C_UsuarioController.php" method="POST" style="float:right; margin-top:10px; margin-right: 10px;">
            <input type="hidden" name="action" value="CerrarSesion" />
            <button type="submit">CerrarSesion</button>
        </form>     
        <a href="../Controllers/C_Empleador.php?action=inicio">  
    <img class="logo" src="../imagenes/logo.png"></a> 
    <section class="centro">
        <div class="sombra"><h2>Vacantes Postuladas</h2></div>
    </section>
    <section class="busqueda">
        <div></div><div></div>
        <a href="../Controllers/C_Empleador.php?action=PostularVacante">
        <button class="globo-menta">+ Nueva vacante</button></a>
    </section>
    <section class="grid3">
        <?php 
        //MOSTRAR DATOS
        $contador = 0;
        while($vacante = mysqli_fetch_assoc($resultado)){
            ?>
            
            <a style="text-decoration: none;" href="../Controllers/C_Empleador.php?VerVacante=<?php echo $vacante["id_vacante"] ?>&IdPostulado=">
            
            <div class="vacante" id="vacante_1">
            <div class="centro"><img src="../<?php echo $vacante["logo_vac"] ?>" class="icono"></div>
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
        echo "Numero de vacantes".$contador;
        
        
        ?>

    </section>
    <div class="footer">
        <p class="blanco footer-text">LFJLDRL © 2023</p>
    </div>

    <script src="../js/jquery-3.7.0.min.js"></script>
    <script src="../js/interfaz_login.js"></script>
</body>
</html>
<!--<!DOCTYPE html>
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
</html>-->