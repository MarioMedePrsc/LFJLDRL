<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <link href='https://fonts.googleapis.com/css?family=Inter' rel='stylesheet'>
    <link href='https://fonts.googleapis.com/css?family=League Spartan' rel='stylesheet'>
    <link rel="stylesheet" href="../css/style02.css">
    <link rel="stylesheet" href="../css/styles.css">
    <link rel="preload" href="../css/styles.css" as="style">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <title>LFJLDRL Interfaz 5</title>
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
    </div> 
    <header>
        <!--NAVBAR-->
        <div class="header-b">
            <a href="../Controllers/C_Trabajador.php?action=inicio" class="logo">
                <img src="../imagenes/logo.png" alt="Logo-empresa">
            </a>
            
        </div>
        <!--FIN DEL NAVBAR-->
        
        <nav>
            <form method="$_GET" action="../Controllers/C_Trabajador.php">
            <div class="provicional">
                <label for="search-que"><span class="bold">Que</span></label>
                <label for="search-donde"><span class="bold">Donde</span></label>
                <span></span>
            </div>
            <div class="provicional2">
                <div class="div-input-header">
                    <input type="text" id="search-que" placeholder="Titulo o empresa" name="buscar">
                    <button class="header-input-button">
                        <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-search" width="18" height="18" viewBox="0 0 24 24" stroke-width="1.5" stroke="#2c3e50" fill="none" stroke-linecap="round" stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                            <path d="M10 10m-7 0a7 7 0 1 0 14 0a7 7 0 1 0 -14 0" />
                            <path d="M21 21l-6 -6" />
                        </svg>
                    </button>
                </div>
                <div class="div-input-header">
                    <input type="text" id="search-donde" placeholder="Donde" name="donde">
                    <button class="header-input-button">
                        <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-map-pin" width="24" height="26" viewBox="0 0 24 24" stroke-width="2" stroke="#ff4500" fill="none" stroke-linecap="round" stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                            <path d="M9 11a3 3 0 1 0 6 0a3 3 0 0 0 -6 0" />
                            <path d="M17.657 16.657l-4.243 4.243a2 2 0 0 1 -2.827 0l-4.244 -4.243a8 8 0 1 1 11.314 0z" />
                        </svg>
                    </button>
                </div>
                <input type=hidden value="" name="VacanteSeleccionada"/>
                <button class="boton-empleo" type="submit">BUSCAR EMPLEOS</button>
            </div></form>
        </nav>
    </header>

    <main<br><br><br><br>
        

        <div class="contenedor-principal">
            <div class="contenedor-principal-titulos">
                <h4 class="bold titulos-subtitulos-botones2">Vacantes a las que te has postulado</h4> 
                <span></span>
                <h4 class="bold titulos-subtitulos-botones2">Entrevistas Pendientes</h4>
            </div>
            <div class="contenedor-secundario">
            <div class="contenedor-terciario">
                <?php 
        while($Vacante = mysqli_fetch_assoc($resultado)){
            ?>
                
                    <div class="texto" style="margin-bottom: auto;">
                        <div class="dentro-texto">
                            <img src="../<?php echo $Vacante['foto_vacante'] ?>" alt="" style="border-radius: 5px;">
                            <h4 class="titulos-subtitulos-botones bold2"><?php echo $Vacante['vacante_postulada'] ?></h4>
                            <span></span>
                        </div><br>
                        <div class="dentro-texto2" >
                        <p class="textos-font"> Fecha: <?php echo $Vacante['fecha_postulado'] ?></p>

                        <p class="textos-font" style="margin-right: 20%;"> Estado: <?php echo $Vacante['estado'] ?></p></div>

                        <form action="../Controllers/C_Trabajador.php" method="POST">
                            <input type="hidden" name="despostular" value="<?php echo $Vacante['id_postulado']; ?>">
                            <button class="boton-dentro-div-prov">Despostularme</button>
                        </form>
                    </div><?php
                }
                ?>
                </div>

                <div class="contenedor-terciario">
                <?php
                while($entrevista = mysqli_fetch_assoc($lista_entrevistas)){
                    ?>
                
                    <div class="texto" style="margin-bottom: auto;" >
                        <div class="dentro-texto" >
                            <img src="../<?php echo $entrevista["foto_vacante"]; ?>" alt="" style="border-radius: 5px;">
                            <h4  class="titulos-subtitulos-botones bold2" ><?php echo $entrevista["nombre_vac"]; ?></h4>
                            <span></span>
                        </div><br>
                        <div class="dentro-texto2">
                            <p class="textos-font">Puesto: <?php echo $entrevista["nombre_vac"]; ?></p>
                            <p class="textos-font">Fecha: <?php echo $entrevista["fecha_ent"]; ?></p>
                            <p class="textos-font">Hora: <?php echo $entrevista["hora_ent"]; ?></p>
                        </div>
                        <div class="dentro-texto2">
                            <p class="textos-font">Lugar: <?php echo $entrevista["lugar_ent"]; ?></p>
                            <p class="textos-font">Formato: <?php echo $entrevista["formato_ent"]; ?></p>
                            <p class="textos-font">Estado: <?php echo $entrevista["estado"]; ?></p>
                        </div>
                        <div class="dentro-texto2">
                            <p class="textos-font">Mensaje: <?php echo $entrevista["mensaje_ent"]; ?></p>
                        </div>
                        <form action="../Controllers/C_Trabajador.php" method="POST">
                            <input type="hidden" value="<?php echo $entrevista["id_entrevista"]; ?>" name="CancelarEnt"/>
                            <input type="hidden" value="<?php echo $infoVacante["id_vacante"]; ?>" name="idVaca"/>
                            <button class="boton-dentro-div-prov">Cancelar Entrevista</button>
                        </form>
                    </div>
                
                <?php
                }
                ?>
                </div>
            </div>
        </div>


        <br><br>
    </main>

    <br><br><br><br><br><br>
    <footer>
        <h2 class="titulo-final textos">LFJLDRL &copy;2023</h2>
    </footer>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>
</html>

