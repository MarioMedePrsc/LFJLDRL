<!DOCTYPE html>
<html>
    <head>
        <title>Iniciar Sesion</title>
        <meta charset="utf-8"/>
    </head>
    <body>
        <h1>Iniciar sesión</h1>
        <form action="funciones/IniciarSesion.php" method="POST" enctype="multipart/form-data">
            <label>Correo electrónico:</label><input type="email" name="email" placeholder="Escribe tu nombre"><br/>
            <label>Contraseña:</label><input type="password" name="password" placeholder="Escribe tu nombre"><br/>
            <input type="radio" name="rol" value="trabajador">
            <label for="html">Trabajador</label><br>
            <input type="radio" name="rol" value="empleador">
            <label for="html">Empleador</label><br>
            <button type="submit">Iniciar Sesiòn</button>
        </form>
    </body>
</html>