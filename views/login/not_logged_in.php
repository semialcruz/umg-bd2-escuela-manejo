<main class="form-signin">

    <form method="post" action="<?=$_SERVER["SCRIPT_NAME"]?>" name="loginform" id="loginform">

        <h1 class="h3 mb-3 fw-normal">Ingrese sus datos</h1>

        <div class="form-floating">
            <input type="text" class="form-control" id="user" name="user" autocomplete="off">
            <label for="user">Usuario</label>
        </div>

        <div class="form-floating">
            <input type="password" class="form-control" id="password" name="password" autocomplete="off">
            <label for="password">Contraseña</label>
        </div>

        <input class="w-100 btn btn-lg btn-primary" name="login" type="submit" value="Ingresar" />

        <p class="mt-5 mb-3 text-muted text-center">&copy; UMG - Base de datos 2 - Grupo #1</p>

    </form>
</main>