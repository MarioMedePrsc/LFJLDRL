<!DOCTYPE html>
<html>
<head>
    <title>Registro de Trabajadores</title>
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="../css/style2.css" />
        <title>Registro de Trabajadores</title>
    </head>
</head>
<body>
<a href="../Controllers/C_Trabajador.php?action=login" >
    <img src="../imagenes/logo.png" alt="" class="logo"></a>
    <div class="container" style="margin-top: 30%;">

        <h1 style="margin-top: -20px;">Crea tu cuenta como Trabajador</h1>

            <p>Eres Empleador? &nbsp <a href="../Controllers/C_UsuarioController.php?action=V_registroE">Registrate Aquí</a></p>

        <form action="../Controllers/C_UsuarioController.php" method="POST" enctype="multipart/form-data">
            <input type="hidden" name="action" value="registrarTrabajador"/>
            <div class="nombre-apeliido">
                <div class="input-nombre">
                    <label for="nombre" style="text-align: left;">Nombre(s):</label>
                    <input class="Controles" type="text" name="nombre" id="nombre" required>
                </div>
                <div class="input-apellidos">
                    <label for="apellidos" style="text-align: left;" >Apellidos:</label>
                    <input class="Controles" type="text" name="apellidos" id="apellidos" required>
                </div>
            </div>
            <div>
            <label for="correo" style="text-align: left;">Correo electrónico:</label>
            <input class="Controles1" type="email" name="email" id="correo" required>

            <label for="telefono" style="text-align: left;">Telefono:</label>
            <input class="Controles1" type="text" name="telefono" name="email" id="telefono" required>

            <label for="contrasena" style="text-align: left;">Contraseña:</label>
            <input class="Controles1" type="password" name="password" id="contrasena" required>

            <label for="confirmar-contrasena" style="text-align: left;">Confirmar Contraseña:</label>
            <input class="Controles1" type="password" name="password2" id="confirmar-contrasena" required>

            <label for="fecha-nacimiento"style="text-align: left;">Fecha de Nacimiento:</label>
            <input class="Controles1" type="date" name="fechaNacimiento" id="fecha-nacimiento" required>
            </div>

            <div class="pais-genero">
            <div class="input-pais">
            <label for="pais"style="text-align: left;">País:</label>
            <select class="Controles" id="pais" name="pais" required>
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
            <label for="Género"style="text-align: left;">Género:</label>
            <select class="Controles" id="Género" name="genero" required>
                <option value="">Seleccionar</option>
                <option value="Masculino">Masculino</option>
                <option value="Femenino">Femenino</option>
                <option value="Otro">Otro</option>
            </select><br>
            </div>
            </div>
            <label for="FotoPerfil"style="text-align: left;">Foto de perfil:</label>
            <input type="file" name="fotoPerfil" accept=".jpg,.jpeg,.png" id="FotoPerfil" required>

            <label for="Curriculum"style="text-align: left;">Currículum:</label>
            <input type="file" name="CV" accept=".pdf" id="curriculum" required><br><br>

            <input class="boton" type="submit" value="Registar"></input><br><br>
        </form>
        <p>¿Ya eres miembro de LFJLDRL? &nbsp <a href="../Controllers/C_UsuarioController.php?action=login">Iniciar Sesion</a></p>
    </body>
    <br><br><br><br><div class="footer">
            <p style="text-align: center;">LFJLDRL &copy; 2023</p>
        </div>
    </html>
