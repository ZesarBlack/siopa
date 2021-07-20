<!DOCTYPE html>
<html lang="en">
<head>
<?php require 'requires/titulo.php';
			require 'requires/head.php';
			session_start();
			if (isset($_SESSION['usuario'])) {
			  header("Location: paginas/inicio/home.php");
			}
			?>
<!--===============================================================================================-->
</head>
 <body class="login">
    <div>
      <a class="hiddenanchor" id="signup"></a>
      <a class="hiddenanchor" id="signin"></a>
      <div class="login_wrapper">
        <div class="animate form login_form">
          <section class="login_content">
            <form action='control/validar.php' method="post">
              <h1>Iniciar Sesión</h1>
              <div>
                <input type="text" class="form-control" name="txtusuario" placeholder="Usuario" required="" />
              </div>
              <div>
                <input type="password" class="form-control" name="txtpass" placeholder="Contraseña" required="" />
              </div>
              <button type="submit" name="login" class="btn btn-primary" style="background-color:green; width:20%;  ">
                Entrar
              </button>
            </form>
          </section>
        </div>
      </div>
    </div>
  </body>

<!--===============================================================================================-->
</body>
</html>
