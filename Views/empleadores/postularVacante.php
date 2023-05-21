<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <link href='https://fonts.googleapis.com/css?family=Inter' rel='stylesheet'>
    <link href='https://fonts.googleapis.com/css?family=League Spartan' rel='stylesheet'>
    <link rel="stylesheet" href="../css/style01.css">
    <title>LFJLDRL</title>
</head>
<body>
    <header>
        <div class="div-logo">
            <a href="#" class="logo">
                <img src="../../imagenes/logo1.png" alt="Logo-empresa" class="logo-empresa">
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
                        <label for="Presencial">Presencial:<input id="Presencial" type="radio" name="presencial-line"></label>
                        <span class="span-formato"></span><label for="Linea">En linea:<input id="Linea" type="radio" name="presencial-line"></label>
                        <span class="span-formato"></span><label for="Linea">Hibrido:<input id="Hibrido" type="radio" name="presencial-line"></label>
                    </label><br><br>

                    <div class="div-desc">
                        <label for="Descripcion">Descripcion:</label><span class="span-desc"></span>
                        <textarea name="" id="Descripcion" cols="30" rows="3" name="descripcionVac"></textarea><br><br>
                    </div><br>

                    <label for="Nempresa">Nombre de empresa:</label>
                    <input class="data7" id="Nempresa" type="text" name="nombreEmp" maxlength="50" required><br><br>

                    <label for="Cempresa">Correo de la empresa:</label>
                    <input class="data8" id="Cempresa" type="email" name="correoEmp" maxlength="50" required><br><br>

                    <label for="Tempresa">Telefono de la empresa:</label>
                    <input class="data9" id="Tempresa" type="tel" name="telefonoEmp" maxlength="50" required><br><br>

                    <label for="Logo">Agregar logo:</label><span class="span-agregar-logo"></span>
                    <input class="" id="Logo" type="file" name="logoEmp"><label class="agregar-logo-label" for="Logo">Agregar logo</label><br><br>

                    <div style="text-align: center;">
                        <button class="cancelar">Cancelar</button>
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



<!--
<!DOCTYPE html>
<html>
    <head></head>
    <body>
        <h1>POSTULAR VACANTE EMPLEADOR</h1>
        <a href="../Controllers/C_Empleador.php?action=inicio">Volver al inicio</a>
        <form action="../Controllers/C_UsuarioController.php" method="POST">
        <input type="hidden" name="action" value="CerrarSesion"/>
        <button type="submit" >CerrarSesion</button>
        </form>

        <form action="../Controllers/C_Empleador.php" method="POST" enctype="multipart/form-data">
            <input type="hidden" name="action" value="PostularVacante"/>

            <label>Nombre de la vacante:</label><input type="text" name="nombreVac"><br/>
            
            <label>Ubicacion:</label><input type="text" name="ubicacionVac" ><br/>
            
            <label>Idioma:</label><input type="text" name="idiomaVac"><br/>
            
            <label>Sueldo:</label><input type="text" name="sueldoVac"><br/>
            
            <label>Jornada:</label><input type="text" name="jornadaVac"><br/>
            
            <label>Formato:</label><select name="formatoVac">
                <option>Presencial</option>
                <option>En línea</option>
                <option>Híbrido</option>
            </select><br/>
            
            <label>Descripcion:</label><input type="text" name="descripcionVac"><br/>
            
            <label>Empresa:</label><input type="text" name="nombreEmp"><br/>
            
            <label>Correo de la empresa:</label><input type="text" name="correoEmp"><br/>
            
            <label>Telefono de la Empresa:</label><input type="text" name="telefonoEmp"><br/>
            
            <label>Agregar Logo:</label><input type="file" name="logoEmp"><br/>
            
            <button type="submit">Registrar</button>
        </form>

    </body>
</html>-->
