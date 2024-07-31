<?php include "../servidor/verificar_al_contrario.php" ?>
<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="style.css" rel="stylesheet"/>
    <title>Login</title>
  </head>
  <body>
    <form class="content-formulario-completo" action="../servidor/login.php"  method="POST">
      <div class="cabecera-content">
        <?php

          if (isset($_SESSION['error'])) {
              echo '<p class="error" id="mensage_error">' . $_SESSION['error'] . '</p>';
              unset($_SESSION['error']);
          }
        ?>
        <h1>¡Bienvenido!</h1>
        <p>Acompáñanos en este mundo artístico</p>
      </div>
      <div class="content-formulario">
        <label for="email" class="label-input">Correo</label>
        <input id="email" type="email" class="input-login" required name="correo"/>
      </div>
      <div class="content-formulario">
        <label for="password" class="label-input">Contraseña</label>
        <input id="password" type="password" class="input-login" required name="pass" />
      </div class="content-formulario">
      <div class="content-boton">
      <button type="submit">Inicia sesión</button>
      <a href="../registro/index.php" class="link-registrar">Registrarte</a>
    </div>
    </form>

    <script>
      window.onload = function() {
        let mensajeError = document.getElementById('mensage_error');
        if (mensajeError) setTimeout(() => mensajeError.style.display = 'none', 1800);
      }
    </script>
  </body>
</html>

