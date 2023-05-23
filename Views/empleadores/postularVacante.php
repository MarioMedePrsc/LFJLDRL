<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <link href='https://fonts.googleapis.com/css?family=Inter' rel='stylesheet'>
    <link href='https://fonts.googleapis.com/css?family=League Spartan' rel='stylesheet'>
    <link rel="stylesheet" href="../css/style01.css">
    <link rel="stylesheet" href="../css/styles.css">
    <link rel="preload" href="../css/styles.css" as="style">
    <title>LFJLDRL</title>
</head>
<body>
    <div style="position: fixed; right: 10px; font-family: 'Inter','League Spartan'; z-index: 3; background-color: white; border-radius: 0px 0px 0px 10px; ">
        <!--NAVBAR-->
        <div class="header-b">
         <div style="display:flex;float:right; margin-top:10px; margin-right: 10px;" >  
         <a class="M_navlink" href="../Controllers/C_Empleador.php?action=inicio" style="padding: 10px; text-decoration: none;  font-size: 2.5vh; ">Inicio</a>
         <a class="M_navlink" href="../Controllers/C_Empleador.php?action=PostularVacante" style="padding: 10px; text-decoration: none;  font-size: 2.5vh; ">Postular Vacante</a>   
        <form action="../Controllers/C_UsuarioController.php" method="POST" style="padding: 10px;">
            <input type="hidden" name="action" value="CerrarSesion" />
            <button class="M_navlink" type="submit" style="padding: 10px; font-family: 'Inter','League Spartan'; font-size: 2.5vh; margin-top:-10px; border: 0px transparent;  ">Cerrar Sesion</button>
        </form>
        </div>
        </div>
        <!--FIN DEL NAVBAR-->
    </div> 
    <header>    
        <div class="div-logo">
            <a href="../Controllers/C_Empleador.php?action=inicio" >
                <img src="../imagenes/logo.png" alt="" class="logo" width="200px" height="200px">
            </a>
        </div>
        <div class="personas-postuladas">
            <h4 class="titulos-subtitulos-botones">Postular Vacante</h4>
        </div>
        <span class="span-header"></span>
    </header>

    <main>
        <div class="box">
            <div class="formulario textos">
                <form action="../Controllers/C_Empleador.php" method="POST" enctype="multipart/form-data">
                    <input type="hidden" name="action" value="PostularVacante"/>
                    <h2 class="titulos-subtitulos-botones padding-titulo-vacante">Nueva Vacante</h2><br>

                    <label for="Nvacante">Nombre de Vacante:</label>
                    <input class="data1" id="Nvacante" type="text" name="nombreVac" maxlength="50" required><br><br>
                    
                    <label for="Empresa">Empresa:</label>
                    <input class="data2" id="Empresa" type="text" name="nombreEmp" maxlength="50" required><br><br>

                    <label for="Ubicacion">Ubicacion:</label>
                    <input class="data3" id="Ubicacion" type="text" name="ubicacionVac" maxlength="50" required><br><br>

                    <label for="Idioma">Idioma:</label>
                    <input class="data4" id="Idioma" type="text" name="idiomaVac" maxlength="50" required><span class="span-idioma"></span>
                    <label for="Sueldo">Sueldo:</label>
                    <input class="data4" id="Sueldo" type="text" name="sueldoVac" maxlength="50" required><br><br>

                    <label for="Jornada">Jornada:</label>
                    <input class="data5" id="Jornada" type="text" name="jornadaVac" maxlength="50" required><br><br>

                    <label for="">Formato:<span class="span-formato"></span>
                    <select name="formatoVac" style="font-size: 20px; font-family: 'Inter';">
                    <option>Presencial</option>
                    <option>En línea</option>
                    <option>Híbrido</option>
                    </select>   <br><br>
                    <label for="Descripcion">Descripcion:</label><span class="span-desc"></span>
                    <div class="div-desc">
                        
                        <textarea id="Descripcion" cols="100" rows="10" name="descripcionVac"></textarea><br><br>
                    </div><br>

                    <label for="Cempresa">Correo de la empresa:</label>
                    <input class="data8" id="Cempresa" type="email" name="correoEmp" maxlength="50" required><br><br>

                    <label for="Tempresa">Telefono de la empresa:</label>
                    <input class="data9" id="Tempresa" type="tel" name="telefonoEmp" maxlength="50" required><br><br>

                    <label for="Logo">Agregar logo:</label><span class="span-agregar-logo"></span>
                    <input class="" id="Logo" type="file" name="logoEmp" accept=".jpg,.jpeg,.png"><label class="agregar-logo-label" for="Logo">Agregar logo</label><br><br>

                    <div style="text-align: center;">

                        
                            <a href="../Controllers/C_Empleador.php?action=inicio" class="cancelar" style="text-decoration: none;">Cancelar</a>
                        
                        
                        <button class="send">Enviar</button>
                    </div>
                    
                </form>
            </div>
        </div>
    </main>

    <br><br><br><br><br><br>
    <footer>
        <h2 class="titulo-final textos">LFJLDRL &copy;2023</h2>
    </footer>
</body>
</html>
