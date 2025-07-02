document.addEventListener('DOMContentLoaded', function () {
    eventListeners(); //menu hamburguesa 
    darkMode(); //Modo Dark 
});

function darkMode() { //Modo Dark
    
    //si tu navegador esta por defecto en dark o blanco esto lo pondran en automatico a su estado preferido
    const prefiereDarkMode = window.matchMedia('(prefers-color-scheme: dark)');
    if (prefiereDarkMode.matches) {
        document.body.classList.toggle('dark-mode');
    } else {
        document.body.classList.remove('dark-mode');
    }

    //si el sistema esta por defecto en dark o blanco esto lo pondran en automatico a su estado preferido
    prefiereDarkMode.addEventListener('change', function () {
        
        if (prefiereDarkMode.matches) {
            document.body.classList.toggle('dark-mode');
        } else {
            document.body.classList.remove('dark-mode');
        }
    });

    // click en el boton para cambiar de estado. aun no logro que sea permanete
    const botonDarckMode = document.querySelector('.dark-mode-boton');
    botonDarckMode.addEventListener('click', function () {
       document.body.classList.toggle('dark-mode');
    });
}

function eventListeners() { //menu hamburguesa 

    const mobileMenu = document.querySelector('.mobile-menu')

    mobileMenu.addEventListener('click' ,navegacionResponsive)
}
//despliegue menu hamburguesa 
function navegacionResponsive() {
    //desplegue del menu en resoluciones de tables a celulares
    const navegacion = document.querySelector('.navegacion')
    if (navegacion.classList.contains('mostrar')) {
        navegacion.classList.remove('mostrar');
    } else {
        navegacion.classList.add('mostrar');
    }
    // navegacion.classList.toggle('mostrar')
}

