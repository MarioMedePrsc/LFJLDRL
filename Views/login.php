<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Iniciar Sesión</title>
    <link rel="stylesheet" href="../css.normalize.css">
    <link rel="preload" href="../css/normalize.css" as="style">

    <!--Fonts-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;700&family=League+Spartan:wght@400;700&display=swap" rel="stylesheet">

    <link rel="preload" href="../css/style_login.css" as="style">
    <link rel="stylesheet" href="../css/style_login.css" as="style">

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>
<body>        
    <div class="grid3">
        <img class="logo" src="../imagenes/logo.png">

        <section class="contenedor sombra">

            <form action="C_UsuarioController.php" method="POST" enctype="multipart/form-data">
            <input type="hidden" name="action" value="login"/>
            <h2 class="titulo">Iniciar Sesión</h2>
            <p>Correo electrónico:</p>
            <input type="email" name="email" class="email" id="email_empleador" placeholder="Escribe tu correo electrónico">
            <br><br>
            <p>Contraseña:</p>
            <input type="password" name="password" placeholder="Escribe tu contraseña" class="password" id="password">
            <div class="texto-menor">
                <input type="checkbox" id="show_password" title="Mostrar contraseña">Mostrar contraseña
            </div>
            <br><br>
            <section class="grid2">
                <input type="radio" name="rol" value="empleador" class="blue-button bttn-izq" id="bttnEmpleador">Empleador
                <input type="radio" name="rol" value="trabajador" class="white-button bttn-der" id="bttnTrabajador">Trabajador
            </section>
            <section class="centro">
                <button type="submit" class="bttn_redondo_azul" id="bttn_login">Iniciar Sesión</button>
            </section>
            </form>
        </section>

        <section class="registro ultimo">
            <p>¿No tienes cuenta?</p>
            <a class="texto-menor" href="../Controllers/C_UsuarioController.php?action=V_registroT">Registrate Aquí</a><br>
        </section>
    </div>

    <div class="footer">
        <p class="blanco footer-text">LFJLDRL © 2023</p>
    </div>

    <script src="../js/jquery-3.7.0.min.js"></script>
    <script src="../js/interfaz_login.js"></script>
</body>



</html>


<!--<!DOCTYPE html>
<html>
    <head>
        <title>Iniciar Sesion</title>
        <meta charset="utf-8"/>
    </head>
    <body>
    <h1>¿Ya tienes cuenta?</h1>
    <a href="../Controllers/C_UsuarioController.php?action=V_registroT">Registrate aquí</a>
        <h1>Iniciar sesión</h1>
        <form action="C_UsuarioController.php" method="POST" enctype="multipart/form-data">
            <input type="hidden" name="action" value="login"/>
            <label>Correo electrónico:</label><input type="email" name="email" placeholder="Escribe tu nombre"><br/>
            <label>Contraseña:</label><input type="password" name="password" placeholder="Escribe tu nombre"><br/>
            <input type="radio" name="rol" value="trabajador">
            <label for="html">Trabajador</label><br>
            <input type="radio" name="rol" value="empleador">
            <label for="html">Empleador</label><br>
            <button type="submit">Iniciar Sesiòn</button>
        </form>
    </body>
</html>-->