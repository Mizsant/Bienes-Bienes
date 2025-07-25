<?php 
    $inicio = true; 
    include 'includes/templates/header.php'; 
?>


    <main class="contenedor seccion">
        <h1>Mas sobre Nosotros</h1>

        <div class="iconos-nosotros">
            <div class="icono">
                <img src="build/img/icono1.svg" alt="icono seguiridad" loading="lazy">
                <h3>Seguridad</h3>
                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Aspernatur numquam quisquam accusamus magni neque! Rerum ratione incidunt similique! Mollitia animi numquam iusto doloremque quam necessitatibus id ex natus ab deserunt.</p>
            </div>

            <div class="icono">
                <img src="build/img/icono2.svg" alt="icono Precio" loading="lazy">
                <h3>Precio</h3>
                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Aspernatur numquam quisquam accusamus magni neque! Rerum ratione incidunt similique! Mollitia animi numquam iusto doloremque quam necessitatibus id ex natus ab deserunt.</p>
            </div>

            <div class="icono">
                <img src="build/img/icono3.svg" alt="icono Tiempo" loading="lazy">
                <h3>A Tiempo</h3>
                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Aspernatur numquam quisquam accusamus magni neque! Rerum ratione incidunt similique! Mollitia animi numquam iusto doloremque quam necessitatibus id ex natus ab deserunt.</p>
            </div>
        </div>
    </main>

    <section class="seccion contenedor">
        <h2>Casas y Departamentos en Ventas</h2>
        <div class="contenedor-anuncios">
            <div class="anuncio">
                <picture>
                    <source srcset="build/img/anuncio1.webp" type="image/webp">
                    <source srcset="build/img/anuncio1.jpg" type="image/jpg"> 
                    <img loading="lazy" src="build/img/anuncio1.jpg" alt="anuncio">
                </picture>

                <div class="contenido-anuncio">
                    <h3>Casa de Lujo en el Lago</h3>
                    <p>Casa en el lago con exelente vista, acabados de lujo a un exelenteprecio</p>
                    <p class="precio">$3,000,000.00</p>
                    <ul class="iconos-caracteristicas">
                        <li>
                            <img class="icono" loading="lazy" src="build/img/icono_wc.svg" alt="icono wc">
                            <p>3</p>
                        </li>
                        <li>
                            <img class="icono" loading="lazy" src="build/img/icono_estacionamiento.svg" alt="icono estacionamiento">
                            <p>3</p>
                        </li>
                        <li>
                            <img class="icono" loading="lazy" src="build/img/icono_dormitorio.svg" alt="icono dormitorio">
                            <p>4</p>
                        </li>
                    </ul>
                    <a href="anuncio.php" class="boton-amarillo-block">
                        Ver Propiedad.
                    </a>
                </div> <!--Contenido anuncio-->
            </div><!--anuncio-->

            <div class="anuncio">
                <picture>
                    <source srcset="build/img/anuncio2.webp" type="image/webp">
                    <source srcset="build/img/anuncio2.jpg" type="image/jpg"> 
                    <img loading="lazy" src="build/img/anuncio2.jpg" alt="anuncio">
                </picture>

                <div class="contenido-anuncio">
                    <h3>Casa Terminados de Lujo</h3>
                    <p>Casa con diseño moderno, asi como tecnologia inteligente y amueblada</p>
                    <p class="precio">$2,000,000.00</p>
                    <ul class="iconos-caracteristicas">
                        <li>
                            <img class="icono" loading="lazy" src="build/img/icono_wc.svg" alt="icono wc">
                            <p>3</p>
                        </li>
                        <li>
                            <img class="icono" loading="lazy" src="build/img/icono_estacionamiento.svg" alt="icono estacionamiento">
                            <p>3</p>
                        </li>
                        <li>
                            <img class="icono" loading="lazy" src="build/img/icono_dormitorio.svg" alt="icono dormitorio">
                            <p>4</p>
                        </li>
                    </ul>
                    <a href="anuncio.php" class="boton-amarillo-block">
                        Ver Propiedad.
                    </a>
                </div> <!--Contenido anuncio-->
            </div><!--anuncio-->

            <div class="anuncio">
                <picture>
                    <source srcset="build/img/anuncio3.webp" type="image/webp">
                    <source srcset="build/img/anuncio3.jpg" type="image/jpg"> 
                    <img loading="lazy" src="build/img/anuncio3.jpg" alt="anuncio">
                </picture>

                <div class="contenido-anuncio">
                    <h3>Casa con Alberca</h3>
                    <p>Casa con alberca y acabados de lujo en la ciudad, excelente oportunidad</p>
                    <p class="precio">$3,000,000.00</p>
                    <ul class="iconos-caracteristicas">
                        <li>
                            <img class="icono" loading="lazy" src="build/img/icono_wc.svg" alt="icono wc">
                            <p>3</p>
                        </li>
                        <li>
                            <img class="icono" loading="lazy" src="build/img/icono_estacionamiento.svg" alt="icono estacionamiento">
                            <p>3</p>
                        </li>
                        <li>
                            <img class="icono" loading="lazy" src="build/img/icono_dormitorio.svg" alt="icono dormitorio">
                            <p>4</p>
                        </li>
                    </ul>
                    <a href="anuncio.php" class="boton-amarillo-block">
                        Ver Propiedad.
                    </a>
                </div> <!--Contenido anuncio-->
            </div><!--anuncio-->

        </div><!--contenedor-anuncio-->

        <div class="alinaer-derecha">
            <a href="anuncios.php" class="boton-verde">Ver Todas</a>
        </div>
    </section>

    <section class="imagen-contacto">
        <h2>Encuentra la casa de tu sueños</h2>
        <p>Llena el formulario de contacto y un asesor se pondra en contacto contigo a la brevedad</p>
        <a href="contacto.php" class="boton-amarillo">Contacto</a>
    </section>

    
    <div class="contenedor seccion seccion-inferior">
        <section class="blog">
            <h3>Nuestro Blog</h3>

            <article class="entrada-blog">
                <div class="imagen">
                    <picture>
                        <source srcset="build/img/blog1.webp" type="image/webp">
                        <source srcset="build/img/blog1.jpg" type="image/jpeg">
                        <img loading="lazy" src="build/img/blog1.jpg" alt="Texto Entrada Blog">
                    </picture>
                </div>
                <div class="texto-entrada">
                    <a href="entrada.php">
                        <h4>Terrasa en el Techo de tu Casa</h4>
                        <p class="informacion-meta">Escrito el: <span>20/10/2024</span> Por: <span>Admin</span></p>
                        <p>
                            consejos para construir una terraza en el techo de tu casa con los mejores materiales y ahorrando dinero.
                        </p>
                    </a>
                </div>
            </article>

            <article class="entrada-blog">
                <div class="imagen">
                    <picture>
                        <source srcset="build/img/blog2.webp" type="image/webp">
                        <source srcset="build/img/blog2.jpg" type="image/jpeg">
                        <img loading="lazy" src="build/img/blog2.jpg" alt="Texto Entrada Blog">
                    </picture>
                </div>
                <div class="texto-entrada">
                    <a href="entrada.php">
                        <h4>Guia para la decoracion de tu Hogar</h4>
                        <p class="informacion-meta">Escrito el: <span>20/10/2024</span> Por: <span>Admin</span></p>
                        <p>
                            Maximiza el espacio en tu hogar con esta guia, aprende a cambiar muebles y colores para darle vida a tu espacio.
                        </p>
                    </a>
                </div>
            </article>
        </section>
        <section class="testimoniales">
            <h3>Testimoniales</h3>
            <div class="testimonial">
                <blockquote>
                    El personal se comporto de una excelente forma, muy buena atencion y la casa que me ofrecieron cumple con todas mis expectativas.
                </blockquote>
                <p>- Misael Samboy Sanchez</p>
            </div>
        </section>
    </div>
    
<?php include 'includes/templates/footer.php'; ?>

</php>