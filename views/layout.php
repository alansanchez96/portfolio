<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portafolio Sanchez Alan</title>
    <link rel="shortcut icon" href="/build/img/favicon.png">


    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="/build/css/app.css">

    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
</head>

<body id="body">

    <div id="app" class="app">

        <div class="bienvenida">
            <h1>¡Hola,</h1>
            <h1>Bienvenido!</h1>
        </div>
        <div class="portfolio">
            <h2><span class="nombre">Sánchez Alan</span></h2>
            <h3>Portafolio</h3>
        </div>


        <button id="btn-bienvenida" class="btn-bienvenida">Ingresar</button>
    </div>

    <header id="header" class="contenedor hidden">
        <div class="barra">
            <div>
                <p><a href="/" class="logo">Portafolio | <span>Sanchez Alan</span></a></p>
            </div>
            <div id="navMenu" class="navMenu">
                <span></span>
                <span></span>
                <span></span>
            </div>
            <nav id="nav" class="navegacion hidden-nav">
                <a href="#sobremi">Sobre Mi</a>
                <a href="#proyectos">Proyectos</a>
                <a href="#conocimientos">Aprendizaje</a>
                <a href="#contacto">Contacto</a>
            </nav>
        </div>

        <div class="hero">

            <h1 class="titulo">Web Developer @ <span>Sanchez Alan</span></h1>
            <p class="resumen">Especializado en el desarrollo de páginas webs para emprendimientos.</p>
            <p class="resumen">Si buscas posicionar tu página en la web o reclutar, enviame un mensaje</p>

            <a href="#contacto" class="boton">Contactame</a>
        </div>

    </header>


    <?php echo $contenido; ?>

    <footer id="footer" class="contenedor hidden">
        <h3 id="contacto">Ponganse en contacto</h3>
        <form class="form" method="POST">
            <div class="campo">
                <label for="email">Email</label>
                <input type="email" pattern="[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[aA-Z-z]{2,}$" placeholder="Escribe tu email" id="email">
            </div>
            <div class="campo">
                <label for="nombre">Nombre</label>
                <input type="nombre" pattern="[a-zA-Z]*" placeholder="Escribe tu nombre" id="nombre">
            </div>
            <div class="campo">
                <label for="message">Mensaje</label>
                <textarea id="message" placeholder="Escribe tu mensaje"></textarea>
            </div>

            <input type="submit" value="Enviar Mensaje" class="enviar">

        </form>

        <div class="media-social">
            <h3>Puedes encontarme en</h3>
            <div class="media-social__links">
                <a href="https://fb.com/alaansannchezz">
                    <i class='bx bxl-facebook'></i>
                </a>
                <a href="https://linkedin.com/in/alansanchez96/">
                    <i class='bx bxl-linkedin'></i>
                </a>
                <a href="https://github.com/alansanchez96?tab=repositories">
                    <i class='bx bxl-github'></i>
                </a>
            </div>
        </div>


    </footer>

    <div class="contacto-flotante hidden" id="contacto-flotante">

    </div>
    <div class="modal">
        <div class="window_chat">
            <div class="chat">
                <div class="chat__header">
                    <h4>Enviame un mensaje</h4>
                    <i class='bx bxl-whatsapp'></i>
                </div>
                <div class="chat__body">
                    <img src="/build/img/perfildefault.png">
                    <p>¡Hola! ¿En qué podemos ayudarte?</p>
                </div>
                <div class="chat__submit">
                    <input type="text" id="input-send" placeholder="Enviar mensaje...">
                    <button id="btn-send" type="button"><i class='bx bxs-send'></i></button>
                </div>
            </div>
        </div>
    </div>

    <script src="build/js/app.js"></script>
</body>

</html>