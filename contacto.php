<?php include 'includes/templates/header.php'; ?>

    <main class="contenedor seccion">
        <h1>Contacto</h1>

        <picture>
            <source srcset="build/img/destacada3.webp" type="image/webp">
            <source srcset="build/img/destacada3.jpg" type="image/jpeg">
            <img loading="lazy" src="build/img/destacada3.jpg" alt="imagen contacto">
        </picture>

        <h2>Llene el Formulario de Contacto</h2>

        <form class="formulario">
            <fieldset>
                <legend>informacion personal</legend>

                <label for="nombre">Nombre</label>
                <input type="text" placeholder="Tu Nombre" id="nombre">

                <label for="email">E-mail</label>
                <input type="email" placeholder="Tu email" id="email">

                <label for="telefono">Telefono</label> 
                <input type="tel" placeholder="Tu Numero" id="telefono">

                <label for="mensaje">Mensaje</label>
                <textarea id="mensaje" placeholder="Su mensaje"></textarea>
            </fieldset>

            <fieldset>
                <legend>Informacion sobre la Propiedad</legend>
                <label for="opciones">Vende o Compra</label>
                <select id="opciones">
                    <option value="" disabled selected> -- Selecione</option>
                    <option value="Compra">Compra</option>
                    <option value="Vende">Vende</option>
                </select>

                <label for="presupuesto">Precio o Presupuesto</label> 
                <input type="number" placeholder="Tu Precio o Presupuesto" id="presupuesto">

            </fieldset>
                
            <fieldset>
                <legend>Contacto</legend>
                <p>Como desea ser contactado?</p>

                <div class="forma-contacto">
                    <label for="contacto-telefono">Telefono</label>
                    <input name="contacto" type="radio" value="telefono" id="contactar-telefono">

                    <label for="contacto-email">Correo</label>
                    <input name="contacto" type="radio" value="email" id="contactar-email">
                </div>

                <p>Si eligio telefono, elija la fecha y la hora.</p>

                <label for="fecha">Fecha:</label> 
                <input type="date"  id="fecha">

                <label for="hora">Hora:</label> 
                <input type="time"  id="hora" min="09:00" max="18:00">
                
            </fieldset>
            <input type="submit" value="Enviar" class="boton-verde">
        </form>

    </main>

<?php include 'includes/templates/footer.php'; ?>

</html>