<fieldset class="formulario__fieldset">
    <legend class="formulario__legend"> Informacion Personal </legend>

    <div class="formulario__campo">
        <label for="nombre" class="formulario__label">Nombre</label>
        <input
            class="formulario__input" 
            type="text"
            id="nombre"
            name="nombre"
            placeholder="Nombre del Ponente"
            value="<?php echo $ponente->nombre ?? ''; ?>"

        >
    </div>

    <div class="formulario__campo">
        <label for="apellido" class="formulario__label">Apellido</label>
        <input
            class="formulario__input" 
            type="text"
            id="apellido"
            name="apellido"
            placeholder="Apellido del Ponente"
            value="<?php echo $ponente->apellido ?? ''; ?>"
            
        >
    </div>

    <div class="formulario__campo">
        <label for="ciudad" class="formulario__label">Ciudad</label>
        <input
            class="formulario__input" 
            type="text"
            id="ciudad"
            name="ciudad"
            placeholder="Ciudad del Ponente"
            value="<?php echo $ponente->ciudad ?? ''; ?>"
            
        >
    </div>

    <div class="formulario__campo">
        <label for="pais" class="formulario__label">Pais</label>
        <input
            class="formulario__input" 
            type="text"
            id="pais"
            name="pais"
            placeholder="Pais del Ponente"
            value="<?php echo $ponente->pais ?? ''; ?>"
            
        >
    </div>

    <div class="formulario__campo">
        <label for="imagen" class="formulario__label">Imagen</label>
        <input
            class="formulario__input formulario__input--file" 
            type="file"
            id="imagen"
            name="imagen"
            
        >
    </div>

    <?php if(isset($ponente->imagen_actual)) { ?>
        <p class="formulario__texto">Imagen Actual</p>
        <div class="formulario__imagen">
            <picture>
                <source srcset="<?php echo $_ENV['HOST'] . '/img/speakers/' . $ponente->imagen; ?>.webp" type="image/webp"> 
                <source srcset="<?php echo $_ENV['HOST'] . '/img/speakers/' . $ponente->imagen; ?>.png" type="image/png">
                <img src="<?php echo $_ENV['HOST'] . '/img/speakers/' . $ponente->imagen; ?>.png" alt="Imagen Ponente">
            </picture>
            
        </div>
    <?php } ?>


</fieldset>

<fieldset class="formulario__fieldset">
    <legend class="formulario__legend"> Informacion Extra </legend>

    <div class="formulario__campo">
        <label for="tags_input" class="formulario__label">Areas de Experiencia (separadas por coma)</label>
        <input
            class="formulario__input" 
            type="text"
            id="tags_input"
            placeholder="Ej. Node.js, Php, Css, ..."
        >

        <div id="tags" class="formulario__listado"></div>
        <input type="hidden" id="tagsInputHidden" name="tags" value="<?php echo $ponente->tags ?? ''; ?>">
    </div>

</fieldset>

<fieldset class="formulario__fieldset">
    <legend class="formulario__legend"> Redes Sociales </legend>

    <div class="formulario__campo">
        <div class="formulario__contenedor-icono">
            <div class="formulario__icono">
                <i class="fa-brands fa-facebook"></i>
            </div>

            <input
                class="formulario__input--sociales" 
                type="text"
                id="tags_input"
                name="redes[facebook]"
                placeholder="Facebook"
                value="<?php echo $redes->facebook ?? ''; ?>"
                
            >
        </div>
    </div>

    <div class="formulario__campo">

        <div class="formulario__contenedor-icono">
            <div class="formulario__icono">
                <i class="fa-brands fa-twitter"></i>
            </div>

            <input
                class="formulario__input--sociales" 
                type="text"
                name="redes[twitter]"
                placeholder="Twitter"
                value="<?php echo $redes->twitter ?? ''; ?>"
                
            >
        </div>
    </div>

    <div class="formulario__campo">

        <div class="formulario__contenedor-icono">
            <div class="formulario__icono">
                <i class="fa-brands fa-youtube"></i>
            </div>

            <input
                class="formulario__input--sociales" 
                type="text"
                name="redes[youtube]"
                placeholder="Youtube"
                value="<?php echo $redes->youtube ?? ''; ?>"
                
            >
        </div>
    </div>

    <div class="formulario__campo">

        <div class="formulario__contenedor-icono">
            <div class="formulario__icono">
                <i class="fa-brands fa-instagram"></i>
            </div>

            <input
                class="formulario__input--sociales" 
                type="text"
                name="redes[instagram]"
                placeholder="Instagram"
                value="<?php echo $redes->instagram ?? ''; ?>"
                
            >
        </div>
    </div>

    <div class="formulario__campo">

        <div class="formulario__contenedor-icono">
            <div class="formulario__icono">
                <i class="fa-brands fa-tiktok"></i>
            </div>

            <input
                class="formulario__input--sociales" 
                type="text"
                name="redes[tiktok]"
                placeholder="Tiktok"
                value="<?php echo $redes->tiktok ?? ''; ?>"
                
            >
        </div>
    </div>

    <div class="formulario__campo">

        <div class="formulario__contenedor-icono">
            <div class="formulario__icono">
                <i class="fa-brands fa-github"></i>
            </div>

            <input
                class="formulario__input--sociales" 
                type="text"
                name="redes[github]"
                placeholder="Github"
                value="<?php echo $redes->github ?? ''; ?>"
                
            >
        </div>
    </div>

</fieldset>