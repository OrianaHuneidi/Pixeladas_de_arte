<?php include "../servidor/verificar_al_contrario.php" ?>
<!DOCTYPE html>
<html lang="es">
	<head>
		<meta charset="UTF-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<link href="style.css" rel="stylesheet"/>
		<title>Registro</title>
	</head>
	<body>
		<form class="content-formulario-completo" action="../servidor/registro.php"  method="POST">
			<div>
				<?php

          if (isset($_SESSION['error'])) {
              echo '<p class="error" id="mensage_error">' . $_SESSION['error'] . '</p>';
              unset($_SESSION['error']);
          }
        ?>
				<h1>¡Bienvenido!</h1>
				<p>Acompáñanos en este mundo artístico</p>
			</div>
			<div class="content-formulario ">
				<label for="name" class="label-input">Nombre</label>
				<input id="name" type="text" required class="input-registro" name="nombre"/>
			</div>
			<div class="content-formulario ">
				<label for="email" class="label-input">Correo</label>
				<input id="email" type="email" required class="input-registro" name="correo"/>
			</div>
			<div class="content-formulario ">
				<label for="password" class="label-input">Contraseña</label>
				<input id="password" type="password" required class="input-registro" name="pass"/>
			</div>
			<button type="submit">Registrarse</button>
			<a href="../login/index.php" class="link-login">iniciar sesión</a>
		</form>

		 <script>
      window.onload = function() {
        let mensajeError = document.getElementById('mensage_error');
        if (mensajeError) setTimeout(() => mensajeError.style.display = 'none', 1800);
      }
    </script>
	</body>
</html>
