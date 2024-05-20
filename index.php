
<!DOCTYPE html>
<html lang="pt-BR">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <?php include 'menu.php'; ?>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/flag-icon-css/3.5.0/css/flag-icon.min.css" integrity="sha512-K7pHIxOeZGgYs5Fg8xw7N6vMxCJG2+TuXgZGD/BiIRmglfVSWQtfj9DPD0Ov1bErO9s01w9EOcYZxM3ZzAasOw==" crossorigin="anonymous" />
        <link rel="stylesheet" type="text/css" href="<?php echo 'css/style.css?v=' .filemtime('css/style.css'); ?>" />
        <title>Dienifer Mendon&ccedil;a</title>
    </head>
    <body>
        <div class="ola">&bull; Olá &bull;</div>
        <div class="ciao">&bull; Ciao &bull;</div>
        <div class="hi">&bull; Hi &bull;</div>
        <div class="hola">&bull; Hola &bull;</div>
        <div class="bonjour">&bull; Bonjour &bull;</div>
        <div class="hallo">&bull; Halló &bull;</div>
        <div class="gruezi">&bull; Grüezi &bull;</div>
        <div class="inicio">Em construção...</div>
        <script>
            /* Array c/ as saudacoes e um laço responsável com tempo p cada */
            document.addEventListener("DOMContentLoaded", function() {
                const saudacoes = [
                    {element: document.querySelector(".ola"), delay: 150},
                    {element: document.querySelector(".ciao"), delay: 450},
                    {element: document.querySelector(".hi"), delay: 750},
                    {element: document.querySelector(".hola"), delay: 1050},
                    {element: document.querySelector(".bonjour"), delay: 1350},
                    {element: document.querySelector(".hallo"), delay: 1650},
                    {element: document.querySelector(".gruezi"), delay: 1950},
                ];
                const inicio = document.querySelector(".inicio");

                saudacoes.forEach((saudar, index) => {
                    setTimeout(() => {
                        saudar.element.classList.add("mostrar");
                    }, saudar.delay);
                    setTimeout(() => {
                        saudar.element.classList.remove("mostrar");
                    }, saudar.delay + 150);
                });

                setTimeout(() => {
                    inicio.classList.add("mostrar-inicio");
                }, 2250);
            });
        </script>
    </body>
</html>