document.addEventListener('DOMContentLoaded', () => {
    iniciarApp();
})

function iniciarApp() {
    bienvenida();
    navMenu();
    openChat();
    sendMessage();
    scrollNav();
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
    const enlaces = document.querySelectorAll('#nav a')
    enlaces.forEach(enlace => (
        enlace.addEventListener('click', function (e) {
            e.preventDefault();

            const seccionScroll = e.target.attributes.href.value;
            const seccion = document.querySelector(seccionScroll);

            seccion.scrollIntoView({ behavior: 'smooth' });

        })
    ))
}
