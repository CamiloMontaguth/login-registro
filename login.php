<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./login.css">
    <title>Document</title>
</head>
<body>

    <main>
        <div class="contenedir__todo">
            <div class="caja__trasera">
                <div class="caja__trasera-login">
                    <h3>Ya tienes cuenta?</h3>
                    <p>Inicia sesion para entrar en la pagina</p>
                    <button id="btn__iniciar-sesion">Iniciar sesion</button>
                </div>
                <div class="caja__trasera-registro">
                    <h3>Aun no tienes cuenta?</h3>
                    <p>Resgistrate para que puedas iniciar sesion</p>
                    <button id="btn__iniciar-registrarse">Registrarse</button>
                </div>


            </div>
                             <!-- FORMULARIO LOGIN Y REGISTRO -->
            <div class="contenedor__login-register">
                <form action="" class="formulario__login">

                    <h2>Iniciar Sesion</h2>
                    <input type="text" placeholder="Correo Electronico">
                    <input type="password" placeholder="Contraseña">
                    <button>Entrar</button>
                </form>
                            <!-- RESGISTRO -->
                <form action="php/registro_usuario_be.php" method ="POST" class="formulario__register">
                    <h2>Registro</h2>
                    <input type="text" placeholder="Nombre Completo" name= "nombre_completo">
                    <input type="text" placeholder="Correo Electronico" name= "correo">
                    <input type="text" placeholder="Usuario" name = "usuario">
                    <input type="text" placeholder="Contraseña"  name ="contrasena">
                    <button>Resgistrarse</button>

                </form>
            </div>
            
        </div>
    </main>
    <script src="./javas/script.js"></script>
</body>
</html>