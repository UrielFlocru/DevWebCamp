<main class="auth">
    <h2 class="auth__heading"> <?php echo $titulo ?> </h2>
    <p class="auth__texto">Restablece tu acceso</p>

    <?php require_once __DIR__.  '/../templates/alertas.php';?>

    <?php if ($token_valido) { ?>

        <form method="POST" class="formulario">
            <div class="formulario__campo">
                <label for="password" class="formulario__label">Nueva Contraseña</label>
                <input type="password" class="formulario__input" id="password" name="password" placeholder="Tu nueva contraseña" >
            </div>
            <div class="formulario__campo">
                <label for="password2" class="formulario__label">Repite Contraseña</label>
                <input type="password" class="formulario__input" id="password2" name="password2" placeholder="Repite tu contraseña" >
            </div>
            

            <input type="submit" class="formulario__submit" value="Restablecer" >

        </form>

    <?php } ?>

    <div class="acciones">
        <p>¿Ya tienes cuenta?<br><a href="/login" class="acciones__enlace" >Iniciar Sesión</a></p>
        <p>¿Aún no tienes cuenta? <br><a href="/registro" class="acciones__enlace">Regístrate</a></p>
    </div>
    
</main>