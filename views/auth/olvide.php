<main class="auth">
    <h2 class="auth__heading"> <?php echo $titulo ?> </h2>
    <p class="auth__texto">Restablece tu acceso</p>

    <?php require_once __DIR__.  '/../templates/alertas.php';?>

    <form action="/olvide" method="POST" class="formulario">
        <div class="formulario__campo">
            <label for="email" class="formulario__label">Correo Electrónico</label>
            <input type="email" class="formulario__input" id="email" name="email" placeholder="Tu correo electrónico" >
        </div>
        

        <input type="submit" class="formulario__submit" value="Restablecer" >

    </form>

    <div class="acciones">
        <p>¿Ya tienes cuenta?<br><a href="/login" class="acciones__enlace" >Iniciar Sesión</a></p>
        <p>¿Aún no tienes cuenta? <br><a href="/registro" class="acciones__enlace">Regístrate</a></p>
    </div>
    
</main>