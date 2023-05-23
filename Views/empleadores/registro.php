<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link href='https://fonts.googleapis.com/css?family=Inter' rel='stylesheet'>
    <link href='https://fonts.googleapis.com/css?family=League Spartan' rel='stylesheet'>
    <link rel="stylesheet" href="../css/style05.css">
    <title>Interfaz 4</title>
</head>
<body>
    <header>
        <div class="div-logo">
            <a href="../Controllers/C_Empleador.php?action=inicio" class="logo">
                <img src="../imagenes/logo.png" alt="Logo-empresa" class="logo-empresa">
            </a>
        </div>
        <div class="personas-postuladas">
            <h4 class="titulos-subtitulos-botones">Crea tu cuenta como empleador</h4>
        </div>
        <span class="span-header"></span>
    </header><br><br><br>

    <div class="box1">
        <div class="formulario1 textos">
            <form action="../Controllers/C_UsuarioController.php" method="POST" enctype="multipart/form-data">
                <input type="hidden" name="action" value="registrarEmpleador"/>
                <h2 class="titulos-subtitulos-botones">Crea tu cuenta como empleador</h2>
                <p>¿Eres un trabajador? <a href="../Controllers/C_UsuarioController.php?action=V_registroT" class="abajo-iniciar-sesion">Registrate aqui</a></p>
                <div class="nombre-apeliido">
                    <div class="input-nombre">
                        <label for="nombre" style="text-align: left;">Nombre(s):</label>
                        <input class="Controles" type="text" id="nombre" required name="nombre">
                    </div>
                    <div class="input-apellidos">
                        <label for="apellidos" style="text-align: left;">Apellidos:</label>
                        <input class="Controles" type="text" id="apellidos" required name="apellidos">
                    </div>
                </div>
                <div>
                    <label for="correo" style="text-align: left;">Correo electrónico:</label>
                    <input class="Controles1" type="email" id="correo" required name="email">
    
                    <label for="contrasena" style="text-align: left;">Contraseña:</label>
                    <input class="Controles1" type="password" id="contrasena" required name="password">
    
                    <label for="confirmar-contrasena" style="text-align: left;">Confirmar Contraseña:</label>
                    <input class="Controles1" type="password" id="confirmar-contrasena" required name="password2">
    
                </div>
                <div>
                    <label for="correo" style="text-align: left;">Numero telefonico:</label>
                    <input class="Controles1" type="tel" id="correo" required name="telefono">
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