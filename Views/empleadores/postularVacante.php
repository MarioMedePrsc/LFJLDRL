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

        <!--FORMS PARA POSTULAR VACANTE-->
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
</html>