<main class="auth">
    <h2 class="auth__heading"> <?php echo $titulo ?> </h2>
    <p class="auth__texto">Registrate en DevWebCamp</p>

    <form action="" class="formulario">
        <div class="formulario__campo">
            <label for="nombre" class="formulario__label">Nombre</label>
            <input type="text" class="formulario__input" id="nombre" name="nombre" placeholder="Tu nombre" >
        </div>
        <div class="formulario__campo">
            <label for="apellido" class="formulario__label">Apellido</label>
            <input type="text" class="formulario__input" id="apellido" name="apellido" placeholder="Tu apellido" >
        </div>
        <div class="formulario__campo">
            <label for="email" class="formulario__label">Correo Electrónico</label>
            <input type="email" class="formulario__input" id="email" name="email" placeholder="Tu correo electrónico" >
        </div>
        <div class="formulario__campo">
            <label for="password" class="formulario__label">Contraseña</label>
            <input type="password" class="formulario__input" id="password" name="password" placeholder="Tu contraseña" >
        </div>
        <div class="formulario__campo">
            <label for="password2" class="formulario__label">Repite tu contraseña</label>
            <input type="password" class="formulario__input" id="password2" name="password2" placeholder="Repite tu contraseña" >
        </div>

        <input type="submit" class="formulario__submit" value="Crear cuenta" >

    </form>

    <div class="acciones">
        <p>¿Ya tienes cuenta? <br><a href="/login" class="acciones__enlace">Iniciar Sesión</a></p>
        <p>¿Olvidaste tu contraseña?<br><a href="/olvide" class="acciones__enlace" >Restablécela Aquí</a></p>
    </div>
    
</main>