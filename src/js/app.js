
document.addEventListener('DOMContentLoaded', () => {
    iniciarApp();
})

function iniciarApp() {
    bienvenida();
    navMenu();
    openChat();
    sendMessage();
    scrollNav();
    validaciones();
    scrollNavBtn();
}

function bienvenida() {
    const btnBienvenida = document.querySelector('#btn-bienvenida');

    btnBienvenida.addEventListener('click', () => {

        const body = document.querySelector('#body');
        const bienvenida = document.querySelector('#app');
        const header = document.querySelector('#header');
        const navegacion = document.querySelector('#nav');
        const footer = document.querySelector('#footer');
        const main = document.querySelector('#main');
        const contactoflotante = document.querySelector('#contacto-flotante');

        body.classList.add('body');
        bienvenida.classList.add('hidden');
        header.classList.remove('hidden');
        navegacion.classList.remove('hidden');
        footer.classList.remove('hidden');
        main.classList.remove('hidden');
        contactoflotante.classList.remove('hidden');

    })
}

function navMenu() {
    const navMenu = document.querySelector('#navMenu');

    navMenu.addEventListener('click', () => {
        const navegacion = document.querySelector('#nav');

        if (navegacion.classList.contains('hidden-nav')) {
            navegacion.classList.remove('hidden-nav');
            navegacion.classList.add('visible');
        } else {
            navegacion.classList.add('hidden-nav');
            navegacion.classList.remove('visible');
        }
        navMenu.classList.toggle('active');

    });
}

const expresiones = {
    email: /^[a-zA-Z0-9_.+-]+@[a-zA-Z0-9-]+\.[a-zA-Z0-9-.]+$/,
    nombre: /^[a-zA-ZÀ-ÿ\s]{1,40}$/, // Letras y espacios, pueden llevar acentos.
    mensaje: /^[a-zA-Z0-9\.\!\@\_\s\?\¿\¡\'\$\(\)\"]{4,250}$/ // Letras, numeros, guion y guion_bajo
}

const campos = {
    email: false,
    nombre: false,
    mensaje: false
}


function validaciones() {

    const formulario = document.getElementById('form');
    const inputs = document.querySelectorAll('#form .campo input');
    const textarea = document.querySelector('#mensaje');

    const campoEmail = document.getElementById('campo_email');
    const campoNombre = document.getElementById('campo_nombre');
    const campoMensaje = document.getElementById('campo_mensaje');

    const validarInputs = (expresionReg, selector, input, campo) => {
        if (expresionReg.test(input.value)) {
            // Si es correcto el dato ingresado validamos bien
            selector.classList.remove(`campo_${campo}-error`);
            selector.classList.remove('campo_error');
            selector.classList.add(`campo_${campo}-correcto`);
            selector.classList.add('campo_correcto');
            campos[campo] = true;
        } else { // Si no es correcto, negamos
            selector.classList.remove('campo_correcto');
            selector.classList.remove(`campo_${campo}-correcto`);
            selector.classList.add('campo_error');
            selector.classList.add(`campo_${campo}-error`);
            campos[campo] = false;
        }
    }

    const validarForm = e => {
        switch (e.target.name) {
            case 'email':
                validarInputs(expresiones.email, campoEmail, e.target, 'email');
                break;
            case 'nombre':
                validarInputs(expresiones.nombre, campoNombre, e.target, 'nombre');
                break;
            case 'mensaje':
                validarInputs(expresiones.mensaje, campoMensaje, e.target, 'mensaje');
                break;
        }
    }

    inputs.forEach(input => {
        input.addEventListener('keyup', validarForm);
        input.addEventListener('blur', validarForm);
    });

    textarea.addEventListener('keyup', validarForm);
    textarea.addEventListener('blur', validarForm);


    formulario.addEventListener('submit', e => {

        e.preventDefault();

        if (campos.email && campos.nombre && campos.mensaje) {
            Swal.fire({
                icon: 'success',
                title: 'Mensaje Enviado',
                text: 'Recibiras una respuesta por email'
            }).then(() => {
                setTimeout(() => {
                    window.location.reload();
                }, 1000);
            })
        }
        else {
            Swal.fire({
                icon: 'error',
                title: 'Error',
                text: 'Tu mensaje no pudo ser enviado. Porfavor revisa bien los campos'
            })
        }

    });

}

function openChat() {

    const boton = document.querySelector('#contacto-flotante');
    const ventanaChat = document.querySelector('.window_chat');

    boton.addEventListener('click', () => {

        ventanaChat.classList.toggle('active');

        if (boton.classList.contains('contacto-flotante')) {
            boton.classList.remove('contacto-flotante');
            boton.classList.add('contacto-flotanteJS');
        } else if (boton.classList.contains('contacto-flotanteJS')) {
            boton.classList.remove('contacto-flotanteJS');
            boton.classList.add('contacto-flotante');
        }
    });

}

function sendMessage() {
    const btnSend = document.querySelector('#btn-send');

    btnSend.addEventListener('click', () => {

        const message = document.getElementById('input-send').value;
        const relMessage = message.replace(/ /g, "%20");

        window.open('https://wa.me/+541125846944?text=' + relMessage, '_blank');

    })
}

function scrollNav() {
    const enlaces = document.querySelectorAll('#nav a');
    enlaces.forEach(enlace => (
        enlace.addEventListener('click', function (e) {
            e.preventDefault();

            const seccionScroll = e.target.attributes.href.value;
            const seccion = document.querySelector(seccionScroll);

            seccion.scrollIntoView({ behavior: 'smooth' });

        })
    ))
}
function scrollNavBtn() {
    const btn = document.querySelectorAll('.hero a');
    btn.forEach( btn => (
        btn.addEventListener('click', function (e) {
            e.preventDefault();

            const seccionScroll = e.target.attributes.href.value;
            const seccion = document.querySelector(seccionScroll);

            seccion.scrollIntoView({ behavior: 'smooth' });

        })
    ))
}
