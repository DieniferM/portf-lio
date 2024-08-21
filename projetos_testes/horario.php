<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="<?php echo 'css/style.css?v=' .filemtime('css/style.css'); ?>"/>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/luxon/3.0.1/luxon.min.js"></script>
        <title>Hours</title>
    </head>
    <body class="horarios">
        <img src="https://upload.wikimedia.org/wikipedia/en/0/05/Flag_of_Brazil.svg" alt="Bandeira do Brasil" width="30">
        <label for="horario_brasil" class="horario_brasil">
            Brasil:
        </label>
        <div id="horario_brasil"></div>
        <hr>
        <img src="https://upload.wikimedia.org/wikipedia/en/0/03/Flag_of_Italy.svg" alt="Bandeira da Itália" width="30">
        <label for="horario_italia" class="horario_italia">
            Itália:
        </label>
        <div id="horario_italia"></div>
        <script>
            document.addEventListener("DOMContentLoaded", function() {
                const { DateTime } = luxon;

                function updateClock() {
                    // Horário Brasil (GMT-3)
                    // const horarioBrasil = DateTime.now().setZone('America/Sao_Paulo').toLocaleString(DateTime.DATETIME_MED);
                    const horarioBrasil = DateTime.now().setZone('America/Sao_Paulo').toFormat('HH:mm:ss');
                    document.getElementById('horario_brasil').textContent = horarioBrasil;

                    // Horário (GMT+2)
                    // const horarioItalia = DateTime.now().setZone('Europe/Rome').toLocaleString(DateTime.DATETIME_MED);
                    const horarioItalia = DateTime.now().setZone('Europe/Rome').toFormat('HH:mm:ss');
                    document.getElementById('horario_italia').textContent = horarioItalia;
                }

                // Atualiza o relógio a cada segundo
                setInterval(updateClock, 1000);
                updateClock(); // Atualiza imediatamente ao carregar
            });
        </script>
    </body>
</html>