<!DOCTYPE html>

<html lang="es" xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta charset="utf-8" />
    <title>Formulario de registro</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
        crossorigin="anonymous"></script>
</head>

<body>
    <div class="d-flex justify-content-center align-items-center vh-100">
        <form id="form" class="p-4 border rounded needs-validation" method="POST" action="" novalidate>
            <h2 class="text-center mb-4">Crear nuevo usuario</h2>
            <div class="mb-3">
                <label for="first" class="form-label">Nombre <span class="text-danger"><em>(*)</em></span></label>
                <input type="text" name="first" class="form-control" maxlength="20" required />
                <p class="invalid-feedback">Escribe tu nombre</p>
            </div>
            <div class="mb-3">
                <label for="last1" class="form-label">Primer Apellido <span class="text-danger"><em>(*)</em></span></label>
                <input type="text" name="last1" class="form-control" maxlength="20" required />
                <p class="invalid-feedback">Escribe tu primer apellido</p>
            </div>
            <div class="mb-3">
                <label for="last2" class="form-label">Segundo Apellido <span class="text-danger"><em>(*)</em></span></label>
                <input type="text" name="last2" class="form-control" maxlength="20" required />
                <p class="invalid-feedback">Escribe tu segundo apellido</p>
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">E-mail <span class="text-danger"><em>(*)</em></span></label>
                <input type="email" name="email" class="form-control" maxlength="50" required />
                <p class="invalid-feedback">Escribe un email válido</p>
            </div>
            <div class="mb-3">
                <label for="user" class="form-label">User <span class="text-danger"><em>(*)</em></span></label>
                <input type="text" name="user" class="form-control" maxlength="20" required />
                <p class="invalid-feedback">Elige un nombre de usuario</p>
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">Contraseña <span class="text-danger"><em>(*)</em></span></label>
                <input type="password" name="password" class="form-control" minlength="4" maxlength="8" required />
                <p class="invalid-feedback">La contraseña debe contener entre 4 y 8 caracteres</p>
            </div>
            <div class="text-center">
                <input type="submit" name="submit" class="btn btn-dark" value="Registrarse" />
            </div>
            <?php
                include 'register.php';
                createUser();
            ?>
        </form>
</body>

<script src="./js/index.js"></script>

</html>