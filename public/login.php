<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>MyApp - Inicio de sesión</title>
  <link rel="stylesheet" href="css/bulma.css">
</head>

<body>
  <section class="hero is-dark is-fullheight">
    <div class="hero-body">
      <div class="container">
        <div class="columns">
          <div class="column is-4 is-offset-4">
            <div class="box">
              <form action="#" method="post">
                <div class="field has-text-centered">
                  <img src="images/logo-cetis108.png" alt="Logo">
                  <h3 class="is-size-4 has-text-weight-bold">Bienvenido a MyApp</h3>
                </div>
                <hr>
                <div class="field">
                  <label class="label">Usuario</label>
                  <div class="control">
                    <input
                      type="text"
                      name="usuario"
                      id="usuario"
                      class="input"
                      placeholder="Escribe tu nombre de usuario"
                    >
                    <p class="help">El nombre de usuario que te proporcionaron en la escuela.</p>
                  </div>
                </div>
                <div class="field">
                  <label class="label">Contraseña</label>
                  <div class="control">
                    <input
                      type="password"
                      name="contrasenia"
                      id="contrasenia"
                      class="input"
                      placeholder="Escribe la contraseña"
                    >
                  </div>
                </div>
                <div class="field">
                  <div class="control">
                    <button type="submit" class="button is-fullwidth is-link">Iniciar sesión</button>
                  </div>
                </div>
                <div class="field">
                  <a href="new.php">Registrate si no tienes una cuenta.</a>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
</body>

</html>