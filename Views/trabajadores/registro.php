<!DOCTYPE html>
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
</html>