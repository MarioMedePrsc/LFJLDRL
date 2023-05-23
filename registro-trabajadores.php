<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <link href='https://fonts.googleapis.com/css?family=Inter' rel='stylesheet'>
    <link href='https://fonts.googleapis.com/css?family=League Spartan' rel='stylesheet'>
    <link rel="stylesheet" href="../../css/style04.css">
    <title>Interfaz 3</title>
</head>
<body>
    <header>
        <div class="div-logo">
            <a href="#" class="logo">
                <img src="imagenes/Logo.jpeg" alt="Logo-empresa" class="logo-empresa">
            </a>
        </div>
        <div class="personas-postuladas">
            <h4 class="titulos-subtitulos-botones">Crea tu cuenta como trabajador</h4>
        </div>
        <span class="span-header"></span>
    </header><br><br><br>
    
    <div class="box1">
        <div class="formulario1 textos">
            <form action="../Controllers/C_UsuarioController.php" method="POST" enctype="multipart/form-data">
                <input type="hidden" name="action" value="registrarTrabajador"/>
                <h2 class="titulos-subtitulos-botones">Crea tu cuenta como trabajador</h2>
                <p>¿Eres empleador? <a href="href="../Controllers/C_UsuarioController.php?action=V_registroE"" class="abajo-iniciar-sesion">Registrate aqui</a></p>
                <div class="nombre-apeliido">
                    <div class="input-nombre">
                        <label for="nombre" style="text-align: left;">Nombre(s):</label>
                        <input class="Controles" type="text" id="nombre" required name="nombre>
                    </div>
                    <div class="input-apellidos">
                        <label for="apellidos" style="text-align: left;">Apellidos:</label>
                        <input class="Controles" type="text" id="apellidos" required ame="apellidos">
                    </div>
                </div>
                <div>
                    <label for="correo" style="text-align: left;">Correo electrónico:</label>
                    <input class="Controles1" type="email" id="correo" required name="email">
    
                    <label for="contrasena" style="text-align: left;">Contraseña:</label>
                    <input class="Controles1" type="password" id="contrasena" required name="password">
    
                    <label for="confirmar-contrasena" style="text-align: left;">Confirmar Contraseña:</label>
                    <input class="Controles1" type="password" id="confirmar-contrasena" required name="password2">
    
                    <label for="fecha-nacimiento" style="text-align: left;">Fecha de Nacimiento:</label>
                    <input class="Controles1" type="date" id="fecha-nacimiento" required name="fechaNacimiento">
                </div>
    
                <div class="pais-genero">
                    <div class="input-pais">
                        <label for="pais" style="text-align: left;">País:</label>
                        <select class="Controles" id="pais" required name="pais">
                            <option value="">Seleccionar país</option>
                            <option value="Argentina">Argentina</option>
                            <option value="Brasil">Brasil</option>
                            <option value="Cánada">Cánada</option>
                            <option value="España">España</option>
                            <option value="Estados Unidos">Estados Unidos</option>
                            <option value="México">México</option>
                        </select>
                    </div>
                    <div class="input-genero">
                        <label for="Género" style="text-align: left;">Género:</label>
                        <select class="Controles" id="Género" required name="genero">
                            <option value="">Seleccionar</option>
                            <option value="Masculino">Masculino</option>
                            <option value="Femenino">Femenino</option>
                            <option value="Otro">Otro</option>
                        </select><br>
                    </div>
                </div>
                <div>
                    <label for="correo" style="text-align: left;">Numero telefonico:</label>
                    <input class="Controles1" type="tel" id="correo" required name="telefono">
                </div>
    
                <div class="seleccionar-archivo-curriculum">
                    <label for="Logo">Curriculum:</label>
                    <input class="" id="Logo" type="file" required name="CV"><label class="agregar-logo-label" for="Logo">Seleccionar archivo</label>
                </div><br><br>

                <div style="text-align: center;">
                    <button class="boton" type="submit">Enviar</button>
                </div>

                <p>¿Ya eres miembro de LFJLDRL? <a href="#" class="abajo-iniciar-sesion">Iniciar Sesion</a></p>
            </form>
        </div>
    </div><br><br><br>


    <footer>
        <h2 class="titulo-final textos">LFJLDRL &copy;2023</h2>
    </footer>
</body>
</html>



<!--<!DOCTYPE html>
<html>
    <head>
        <title>Registro Trabajadores</title>
        <meta charset="utf-8"/>
    </head>
    <body>
        <h2>¿Eres Empleador?</h2>
        <a href="../Controllers/C_UsuarioController.php?action=V_registroE">Registrate aquì</a>

        <h1>Registro Trabajadores</h1>
        <form action="../Controllers/C_UsuarioController.php" method="POST" enctype="multipart/form-data">
            <input type="hidden" name="action" value="registrarTrabajador"/>
            <label>Nombre:</label><input type="text" name="nombre" placeholder="Escribe tu nombre"><br/>
            <label>Apellidos:</label><input type="text" name="apellidos" placeholder="Escribe tu nombre"><br/>
            <label>Correo electrónico:</label><input type="email" name="email" placeholder="Escribe tu nombre"><br/>
            <label>Contraseña:</label><input type="password" name="password" placeholder="Escribe tu nombre"><br/>
            <label>Confirmar contraseña:</label><input type="password" name="password2" placeholder="Escribe tu nombre"><br/>
            <label>Fecha de nacimiento:</label><input type="date" name="fechaNacimiento" placeholder="Escribe tu nombre"><br/>
            <label>País:</label><select name="pais">
                <option>México</option>
                <option>Estados Unidos</option>
                <option>Otro</option>
            </select><br/>
            <label>Genero</label><select name="genero">
                <option>Hombre</option>
                <option>Mujer</option>
                <option selected>Otro</option>
            </select><br/>
            <label>Telefono:</label><input type="text" name="telefono" placeholder="Escribe tu telefono"><br/>
            <label>Curriculum</label><input type="file" name="CV"><br/>
            <button type="submit">Registrar</button>
        </form>
    </body>
</html>-->