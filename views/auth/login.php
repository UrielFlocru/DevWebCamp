<main class="auth">
    <h2 class="auth__heading"> <?php echo $titulo ?> </h2>
    <p class="auth__texto">Inicia sesión en devwebcamp</p>

    <?php require_once __DIR__ . '/../templates/alertas.php' ?>

    <form action="/login" method="POST" class="formulario">
        <div class="formulario__campo">
            <label for="email" class="formulario__label">Correo Electrónico</label>
            <input type="email" class="formulario__input" id="email" name="email" placeholder="Tu correo electrónico" >
        </div>
        <div class="formulario__campo">
            <label for="password" class="formulario__label">Contraseña</label>
            <input type="password" class="formulario__input" id="password" name="password" placeholder="Tu contraseña" >
        </div>

        <input type="submit" class="formulario__submit" value="Iniciar Sesión" >

    </form>

    <div class="acciones">
        <p>¿Aún no tienes cuenta? <br><a href="/registro" class="acciones__enlace">Regístrate</a></p>
        <p>¿Olvidaste tu contraseña?<br><a href="/olvide" class="acciones__enlace" >Restablécela Aquí</a></p>
    </div>
    
</main>