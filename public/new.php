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
              <form>
                <div class="field has-text-centered">
                  <h3 class="is-size-4 has-text-weight-bold">
                      Registrate!
                    </h3>
                </div>
                <hr>
                <div class="field">
                  <label class="label">Nombre</label>
                  <div class="control">
                    <input
                      type="text"
                      name="nombre"
                      id="nombre"
                      class="input"
                      placeholder="Escribe tu nombre de pila"
                      required
                    >
                  </div>
                </div>
                <div class="field">
                  <label class="label">Apellidos</label>
                  <div class="control">
                    <input
                      type="text"
                      name="apellidos"
                      id="apellidos"
                      class="input"
                      placeholder="Escribe tus apellidos"
                      required
                    >
                  </div>
                </div>
                <div class="field">
                  <label class="label">Correo electrónico</label>
                  <div class="control">
                    <input
                      type="email"
                      name="correo"
                      id="correo"
                      class="input"
                      placeholder="Escribe tu correo electrónico"
                      required
                    >
                  </div>
                </div>
                <hr>
                <div class="field">
                  <label class="label">Nombre de usuario</label>
                  <div class="control">
                    <input
                      type="text"
                      name="usuario"
                      id="usuario"
                      class="input"
                      placeholder="Escribe tu nombre de usuario"
                      required
                      maxlength="8"
                    >
                    <p class="help is-info">
                        El nombre de usuario debe tener solo letras y números, con una longitud mínima de 8 caracteres.
                    </p>
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
                      required
                    >
                  </div>
                </div>
                <div class="field">
                  <label class="label">Vuelve a escribir la contraseña</label>
                  <div class="control">
                    <input
                      type="password"
                      name="contrasenia2"
                      id="contrasenia2"
                      class="input"
                      placeholder="Escribe la contraseña de nueva cuenta"
                      required
                    >
                  </div>
                </div>
                <div class="field">
                  <div class="control">
                    <button type="submit" class="button is-fullwidth is-success">Registrarse</button>
                  </div>
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