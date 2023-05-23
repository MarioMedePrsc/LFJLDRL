<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <link href='https://fonts.googleapis.com/css?family=Inter' rel='stylesheet'>
    <link href='https://fonts.googleapis.com/css?family=League Spartan' rel='stylesheet'>
    <link rel="stylesheet" href="../css/style03.css">
    <link rel="stylesheet" href="../css/styles.css">
    <link rel="preload" href="../css/styles.css" as="style">
    <!--<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">-->
    <title>LFJLDRL Interfaz 8</title>
</head>
<body>

<div style="position: fixed; right: 10px; font-family: 'Inter','League Spartan'; z-index: 3; background-color: white; border-radius: 0px 0px 0px 10px; ">
        <!--NAVBAR-->
        <div class="header-b">
         <div style="display:flex;float:right; margin-top:10px; margin-right: 10px;" >  
         <a class="M_navlink" href="../Controllers/C_Empleador.php?action=inicio" style="padding: 10px; text-decoration: none;  font-size: 2.5vh; height: 3vh;">Inicio</a>
         <a class="M_navlink" href="../Controllers/C_Empleador.php?action=PostularVacante" style="padding: 10px; text-decoration: none;  font-size: 2.5vh; height: 3vh;">Postular Vacante</a>   
        <form action="../Controllers/C_UsuarioController.php" method="POST" style="padding: 10px;">
            <input type="hidden" name="action" value="CerrarSesion" />
            <button class="M_navlink" type="submit" style="padding: 10px; font-family: 'Inter','League Spartan'; font-size: 2.5vh; margin-top:-10px; border: 0px transparent; height: 6vh; ">Cerrar Sesion</button>
        </form>
        </div>
        </div>
        <!--FIN DEL NAVBAR-->
    </div> <br/><br/>

    <header>
        <div class="div-logo">
            <a href="../Controllers/C_Empleador.php?action=inicio" class="logo">
                <img src="../imagenes/logo.png" alt="Logo-empresa" class="logo-empresa">
            </a>
        </div>
        <div class="personas-postuladas">
            <h4 class="titulos-subtitulos-botones">Vacante</h4>
        </div>
        <span class="span-header"></span>
    </header>

    <?php
    
    ?>
    <div class="encabezado">
        <img src="../<?php echo $infoVacante["logo_vac"]; ?>" alt="" class="imagen-logo-encabezado">
        <div class="titulo-info-vacante">
            <h4 class="titulos-subtitulos-botones2">Informacion de la vacante:</h4>
            <h4 class="titulos-subtitulos-botones2"><?php echo $infoVacante["nombre_vac"];?></h4>
        </div>
        <span class="span1-encabezado"></span>
    </div>

    <div class="info-de-la-empresa">
        <div class="info-empresa-nombre">
            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-building-factory-2" width="36" height="36" viewBox="0 0 24 24" stroke-width="2" stroke="#2c3e50" fill="none" stroke-linecap="round" stroke-linejoin="round">
                <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                <path d="M3 21h18" />
                <path d="M5 21v-12l5 4v-4l5 4h4" />
                <path d="M19 21v-8l-1.436 -9.574a.5 .5 0 0 0 -.495 -.426h-1.145a.5 .5 0 0 0 -.494 .418l-1.43 8.582" />
                <path d="M9 17h1" />
                <path d="M14 17h1" />
            </svg>
            <p class="texto-de-div-info-empresa textos"><?php echo $infoVacante["nombre_emp"];?></p>
        </div>
        <div class="info-empresa-jornada">
            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-briefcase" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="#2c3e50" fill="none" stroke-linecap="round" stroke-linejoin="round">
                <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                <path d="M3 7m0 2a2 2 0 0 1 2 -2h14a2 2 0 0 1 2 2v9a2 2 0 0 1 -2 2h-14a2 2 0 0 1 -2 -2z" />
                <path d="M8 7v-2a2 2 0 0 1 2 -2h4a2 2 0 0 1 2 2v2" />
                <path d="M12 12l0 .01" />
                <path d="M3 13a20 20 0 0 0 18 0" />
            </svg>
            <p class="texto-de-div-info-empresa textos"><?php echo $infoVacante["jornada_vac"];?></p>
        </div>
        <div class="info-empresa-ubicacion">
            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-map-pin" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="#2c3e50" fill="none" stroke-linecap="round" stroke-linejoin="round">
                <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                <path d="M9 11a3 3 0 1 0 6 0a3 3 0 0 0 -6 0" />
                <path d="M17.657 16.657l-4.243 4.243a2 2 0 0 1 -2.827 0l-4.244 -4.243a8 8 0 1 1 11.314 0z" />
            </svg>
            <p class="texto-de-div-info-empresa textos"><?php echo $infoVacante["ubicacion_vac"];?></p>
        </div>
        <div class="info-empresa-modalidad">
            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-user" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="#2c3e50" fill="none" stroke-linecap="round" stroke-linejoin="round">
                <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                <path d="M8 7a4 4 0 1 0 8 0a4 4 0 0 0 -8 0" />
                <path d="M6 21v-2a4 4 0 0 1 4 -4h4a4 4 0 0 1 4 4v2" />
            </svg>
            <p class="texto-de-div-info-empresa textos"><?php echo $infoVacante["formato_vac"];?></p>
        </div>
    </div><br>

    <div class="contenedor-principal-tabla">
        <div class="contenido-contenedor-principal">
            <div class="titulo-contenido-contenedor-principal">
                <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-users" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="#000000" fill="none" stroke-linecap="round" stroke-linejoin="round">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                    <path d="M9 7m-4 0a4 4 0 1 0 8 0a4 4 0 1 0 -8 0" />
                    <path d="M3 21v-2a4 4 0 0 1 4 -4h4a4 4 0 0 1 4 4v2" />
                    <path d="M16 3.13a4 4 0 0 1 0 7.75" />
                    <path d="M21 21v-2a4 4 0 0 0 -3 -3.85" />
                </svg>
                <h4 class="titulos-subtitulos-botones4">Personas Postuladas</h4>
            </div>
            <div class="personas-contenedor-principal">
                <?php 
                while($postulado = mysqli_fetch_assoc($lista_postulados)){
                ?>
                <a href="../Controllers/C_Empleador.php?VerVacante=<?php echo $postulado["id_vacante"]; ?>&IdPostulado=<?php echo $postulado['id_trabajador']; ?>">

                
                <button class="boton-personas-contenedor-principal">
                    <div class="persona-n1">
                        <img src="../<?php echo $postulado["foto_postulado"]?>" alt="Foto de la persona" class="fotografia-de-la-persona">
                        <h4 class="textos2"><?php echo $postulado["nombre_postulado"]?></h4>
                    </div>
                </button>
                </a>
                <?php
                }
                ?>
            </div>
        </div>
        <div class="contenedor-secundario-tabla">
            <?php if($infoPostulado==null){
                echo "Selecciona a un postulado para ver su información";

            }else{
                ?>
            <div class="contenido-contenedor-secundario">
                <div class="personas-contenedor-secundario">
                    <div class="persona-n2">
                        <img src="../<?php echo $infoPostulado["foto_perfil"]; ?>" alt="Foto de la persona" class="fotografia-de-la-persona">
                        <h4 class="textos2"><?php echo $infoPostulado["nombre_trab"]; ?></h4>
                    </div>
                </div>
            </div>
            <div class="contenedor-terciario-tabla">
                <div class="titulo-contenedor-terciario">
                    <h4 class="titulos-subtitulos-botones3">INFORMACION DEL POSTULADO</h4>
                </div>
                <div class="subtitulo-contenedor-de-informacion1">
                    <h4 class=""><?php echo $infoPostulado["nombre_trab"]; ?></h4>
                    <h4 class=""><?php echo $infoPostulado["apellido_trab"]; ?></h4>
                    <h4 class="">Genero: <?php echo $infoPostulado["genero_trab"]; ?></h4>
                </div>
                <div class="subtitulo-contenedor-de-informacion1">
                    <h4 class="">Correo: <?php echo $infoPostulado["correo_trab"]; ?></h4>
                    <h4 class="">Tel: <?php echo $infoPostulado["tel_trab"]; ?></h4> 
                    <h4 class="">Pais: <?php echo $infoPostulado["pais_trab"]; ?></h4>
                </div>
                <div class="subtitulo-contenedor-de-informacion1">
                    <h4 class="">Fecha de nacimiento:<?php echo $infoPostulado["fecha_nacimiento"]; ?></h4>
                </div>
                <div class="subtitulo-contenedor-de-informacion1">
                    <a href="../<?php echo $infoPostulado["CV_trab"]; ?>" download="CV_<?php echo $infoPostulado["nombre_trab"]; ?>">Descargar Curriculum</a>
                </div>

                <div class="subtitulo-contenedor-terciario">
                    <h4 class="subtitulos-menos-importantes">Registrar Entrevista</h4>
                </div>
                <div class="formulario-contenedor-terciario">
                    <form action="../Controllers/C_Empleador.php" method="POST" class="form-del-contenedor-terciario">
                    <input type="hidden" name="E_IdVacante" value="<?php echo $infoVacante["id_vacante"]; ?>">
                    <input type="hidden" name="E_IdTrabajador" value="<?php echo $infoPostulado["id_trabajador"]; ?>"/>
                    <input type="hidden" name="nombreVac" value="<?php echo $infoVacante["nombre_vac"]; ?>">
                    <input type="hidden" name="nombreTrab" value="<?php echo $infoPostulado["nombre_trab"]; ?>"/>
                    <input type="hidden" name="foto_entrevistado" value="<?php echo $infoPostulado["foto_perfil"]; ?>"/>
                    <input type="hidden" name="foto_vacante" value="<?php echo $infoVacante["logo_vac"]; ?>"/>
                        

                        <div class="contenido-principal1-formulario-contenedor-terciario textos">
                            <div class="contenido-formulario-contenedor-terciario1">
                                <div class="centrar-contenid-formulario1"><label for="dia">Dia:</label><br></div>
                                <input class="dato1" id="dia" type= "date" name="dia"/>
                            </div>
    
                            <div class="contenido-formulario-contenedor-terciario3">
                                <div class="centrar-contenid-formulario3"><label for="hora">Hora:</label><br></div>
                                <input class="dato3" id="hora" type= "time" name="hora"/><br/>
                            </div>
    
                            <div class="contenido-formulario-contenedor-terciario4">
                                <div class="centrar-contenid-formulario4"><label for="formato">Formato:</label><br></div>
                                <div class="opciones-formato-formulario-terciario">
                                    <label for="Presencial">Presencial:</label><input id="Presencial" type="radio" name="formato" value="Presencial">
                                    <label for="Linea">En linea:</label><input id="Linea" type="radio" name="formato" value="Linea">
                                </div>
                            </div>
                        </div><br>

                        <div class="contenido-principal2-formulario-contenedor-terciario textos">
                            <div class="contenido-formulario-contenedor-terciario5">
                                <label for="lug-med">Lugar/Medio:</label>
                                <input class="dato5" id="lug-med" type="text" maxlength="150" required name="lugar">
                            </div>

                            <div class="contenido-formulario-contenedor-terciario6">
                                <label for="mensaje">Mensaje:</label>
                                <input class="dato6" id="mensaje" type="text" maxlength="150" required name="mensaje">
                            </div>
                        </div>

                        
                        <div class="contenido-principal3-formulario-contenedor-terciario">
                            <button type="submit" class="boton-formulario-aceptar">Agendar</button>
                        </div>

                        
                    </form>
                </div>
            </div>
            <?php } ?>
        </div>
        
    </div><br><br><br><br>

    <div class="titulo-bajo">
        <div class="personas-postuladas">
            <h4 class="titulos-subtitulos-botones">Entrevista Pendientes</h4>
        </div>
    </div><br><br><br>

    <div class="tabla-de-entrevistas-pendientes">
    <?php
                while($entrevista = mysqli_fetch_assoc($lista_entrevistas)){
                    ?>
        <div class="perfil-entrevista-pendiente">
           
            <div class="perfil-entrevistado">
                <div class="persona-n3">
                    <img src="../<?php echo $entrevista["foto_entrevistado"]; ?>" alt="Foto de la persona" class="fotografia-de-la-persona">
                    <h4 class="textos2"><?php echo $entrevista["nombre_trab"]; ?></h4>
                </div>
            </div>
            <div class="fecha-entrevista">
                <p class="textos-de-div-tabla-entrevistas textos2"><?php echo $entrevista["fecha_ent"]; ?></p>
            </div>
            <div class="hora-entrevista">
                <p class="textos-de-div-tabla-entrevistas textos2"><?php echo $entrevista["hora_ent"]; ?></p>
            </div>
            <div class="lugar-entrevista">
                <p class="textos-de-div-tabla-entrevistas textos2"><?php echo $entrevista["lugar_ent"]; ?></p>
            </div>
            <div class="formato-entrevista">
                <p class="textos-de-div-tabla-entrevistas textos2"><?php echo $entrevista["formato_ent"]; ?></p>
            </div>
            <div class="estado-entrevista">
                <p class="textos-de-div-tabla-entrevistas textos2"><?php echo $entrevista["estado"]; ?></p>
            </div>
            <form action="../Controllers/C_Empleador.php" method="POST">
                <input type="hidden" value="<?php echo $entrevista["id_entrevista"]; ?>" name="CancelarEnt"/>
                <input type="hidden" value="<?php echo $infoVacante["id_vacante"]; ?>" name="idVaca"/>
                <button type="submit" class="boton-formulario-abajo-aceptar">Cancelar</button>
            </form>

            
        </div>
        <?php
                }
                ?>
    </div><?php
        ?>





    <br><br><br><br><br>
    <footer>
        <h2 class="titulo-final textos">LFJLDRL &copy;2023</h2>
    </footer>


    <!--<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>-->
</body>
</html>




<!--<!DOCTYPE html>
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
        Personas postuladas
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
        Entrevistas pendientes
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
</html>-->
