<!DOCTYPE html>
<html>
    <head>
        <title>Registro Empleadores</title>
        <meta charset="utf-8"/>
    </head>
    <body>
        <h2>¿Eres Trabajador?</h2>
        <a href="../Controllers/C_UsuarioController.php?action=V_registroT">Registrate aquì</a>

        <h1>Registro Empleadores</h1>
        <form action="../Controllers/C_UsuarioController.php" method="POST" enctype="multipart/form-data">
            <input type="hidden" name="action" value="registrarEmpleador"/>
            <label>Nombre:</label><input type="text" name="nombre" placeholder="Escribe tu nombre"><br/>
            <label>Apellidos:</label><input type="text" name="apellidos" placeholder="Escribe tu nombre"><br/>
            <label>Correo electrónico:</label><input type="email" name="email" placeholder="Escribe tu nombre"><br/>
            <label>Contraseña:</label><input type="password" name="password" placeholder="Escribe tu nombre"><br/>
            <label>Confirmar contraseña:</label><input type="password" name="password2" placeholder="Escribe tu nombre"><br/>
            <label>Telefono:</label><input type="text" name="telefono" placeholder="Escribe tu telefono"><br/>
            <button type="submit">Registrar</button>
        </form>
    </body>
</html>