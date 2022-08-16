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
    <link rel="stylesheet" href="/build/css/animate.css">

    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>

    <script src="/build/js/wow.min.js"></script>
    <script>
        new WOW().init();
    </script>
</head>

<body id="body">

    <div id="app" class="app">

        <div class="bienvenida wow fadeInDown">
            <h1>¡Hola,</h1>
            <h1>Bienvenido!</h1>
        </div>
        <div class="portfolio wow fadeIn">
            <h2><span class="nombre">Sánchez Alan</span></h2>
            <h3>Portafolio</h3>
        </div>


        <button id="btn-bienvenida" class="btn-bienvenida wow fadeInUp">Ingresar</button>
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
                <a href="#conocimientos">Conocimientos</a>
                <a href="#contacto">Contacto</a>
            </nav>
        </div>

        <div class="hero rellax" data-rellax-speed="1">

            <h1 class="titulo">Web Developer @ <span>Sanchez Alan</span></h1>
            <p class="resumen">Especializado en el desarrollo de páginas webs para emprendimientos.</p>
            <p class="resumen">Si buscas posicionar tu página en la web o reclutar, enviame un mensaje</p>

            <a href="#contacto" class="boton">Contactame</a>
        </div>

    </header>


    <?php echo $contenido; ?>

    <footer id="footer" class="contenedor hidden">
        <h3 id="contacto">Ponganse en contacto</h3>

        <?php include_once __DIR__ . '/templates/alertas.php'; ?>

        <form class="form" method="POST" id="form">
            <div class="campo" id="campo_email">
                <label for="email">Email</label>
                <input type="email" placeholder="Escribe tu email" name="email" id="email">
            </div>
            <div class="campo" id="campo_nombre">
                <label for="nombre">Nombre</label>
                <input type="nombre" placeholder="Escribe tu nombre" id="nombre" name="nombre">
            </div>
            <div class="campo" id="campo_mensaje">
                <label for="mensaje">Mensaje</label>
                <textarea id="mensaje" placeholder="Escribe tu mensaje (Máximo 200 caracteres)" name="mensaje"></textarea>
            </div>
            <input type="submit" value="Enviar Mensaje" id="submit" class="enviar">

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
    <div class="modal" id="modal">
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

    <script src="/build/js/app.js"></script>
    <script src='//cdn.jsdelivr.net/npm/sweetalert2@11'></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/rellax/1.12.1/rellax.min.js" integrity="sha512-f5HTYZYTDZelxS7LEQYv8ppMHTZ6JJWglzeQmr0CVTS70vJgaJiIO15ALqI7bhsracojbXkezUIL+35UXwwGrQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script>
        var rellax = new Rellax('.rellax');
    </script>
</body>

</html>