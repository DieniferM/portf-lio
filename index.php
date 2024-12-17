<?php
// JAVASCRIPT PEGAR A LOCALIDADE PELA REQUEST E JA DEFINIR O IDIOMA
$language = isset($_GET['language']) ? $_GET['language'] : 'it';

$translations = [
    'pt-BR' => [
        'biografia' => 'Sou programadora Full Stack com 2 anos de experiência e atualmente moro na Itália, 
                        o que tem me proporcionado uma nova perspectiva sobre o mercado de tecnologia. Sempre fui apaixonada 
                        por tecnologias e videogames, o que me levou a seguir a carreira de desenvolvedora. Acredito firmemente 
                        que o conhecimento é poder, e que todos podemos aprender o que quisermos e nos tornar o que desejamos.',
    ],
    'en' => [
        'biografia' => 'I am a Full Stack developer with 2 years of experience and currently living in Italy,
         which has given me a new perspective on the technology market. I have always been passionate
          about technology and video games, which led me to pursue a career as a developer. I firmly believe
           that knowledge is power, and that we can all learn whatever we want and become whatever we desire',
    ],
    'it' => [
        'biografia' => 'Sono una programmatrice Full Stack con 2 anni di esperienza e attualmente vivo in Italia,
         il che mi sta dando una nuova prospettiva sul mercato della tecnologia. Sono sempre stata appassionata
          di tecnologie e videogiochi, il che mi ha portato a seguire la carriera di sviluppatrice. Credo fermamente 
          che la conoscenza sia potere, e che tutti possiamo imparare ciò che vogliamo e diventare ciò che desideriamo.',
       
    ]
];

$biography = $translations[$language]['biografia'];
?>

<!DOCTYPE html>
<html lang="<?php echo $language; ?>">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/flag-icon-css/3.5.0/css/flag-icon.min.css" integrity="sha512-K7pHIxOeZGgYs5Fg8xw7N6vMxCJG2+TuXgZGD/BiIRmglfVSWQtfj9DPD0Ov1bErO9s01w9EOcYZxM3ZzAasOw==" crossorigin="anonymous" />
    <link rel="stylesheet" type="text/css" href="<?php echo 'css/style.css?v=' .filemtime('css/style.css'); ?>" />
    <title>Dienifer Mendonça</title>
    <style>
        /* Estilo do body */
        body {
            font-family: 'Poppins', sans-serif;
            margin: 0;
            padding: 0;
            background-color: #222222;
            color: white;
            /* overflow-x: hidden; */
        }
    </style>
</head>
<body>
    <div class="loading-screen">
        <ul>
            <li class="ola">Hello •</li>
            <li class="hi">Hi •</li>
            <li class="ciao">Ciao •</li>
            <li class="hola">Hola •</li>
            <li class="bonjour">Bonjour •</li>
            <li class="hallo">Hallo •</li>
            <li class="gruezi">Grüezi •</li>
        </ul>
    </div>
    <div class="content">
        <?php include 'menu.php'; ?>

        <section class="section" id="home">
            <div class="home-content">
                <div class="text-block">
                    <h1>Dienifer Mendonça</h1>
                    <h2>Full Stack Developer</h2>
                    <p id="biografia">
                        <?php echo $biography; ?>
                    </p>
                </div>
                <div class="image-block">
                    <img src="img/dieni.jpg" alt="Foto de perfil de Dienifer" class="profile-image">
                </div>
            </div>
            <div class="technologies">
                <div class="tech-icons">
                    <img src="img/html_.png" alt="HTML5" class="tech-icon">
                    <img src="img/css_.png" alt="CSS3" class="tech-icon">
                    <img src="img/javascript_.png" alt="JavaScript" class="tech-icon">
                    <img src="img/php_.png" alt="PHP" class="tech-icon">
                    <img src="img/mysql_.png" alt="MySQL" class="tech-icon">
                </div>
            </div>
        </section>
        <section class="section" id="projects">
            <h2 id="procts">Projects</h2>
            <p id="my_projects">My projects</p>
            <div class="projects-grid">
                <div class="project-item">
                    <div class="slider">
                        <img src="img\inicio_enf_italia.png" alt="Project 1 Image 1" class="slide active">
                        <img src="img\conta_enf_italia.png" alt="Project 1 Image 2" class="slide">
                        <img src="img\servicos_enf_italia.png" alt="Project 1 Image 3" class="slide">
                    </div>
                    <a href="https://enfermeirosnaitalia.site/" class="project-link" target="_blank">View Project</a>
                </div>
                <div class="project-item">
                    <div class="construction-banner">Under construction...</div> <!-- Faixa de construção -->
                    <div class="slider">
                        <img src="img/vania_masso_inicio.png" alt="Project 2 Image 1" class="slide active">
                        <img src="img/bio_vania.png" alt="Project 2 Image 2" class="slide">
                        <img src="img/beneficios_vania.png" alt="Project 2 Image 3" class="slide">
                    </div>
                    <a href="https://lightcoral-jaguar-669672.hostingersite.com/#home" class="project-link" target="_blank">View Project</a>
                    </div>
                <div class="project-item">
                    <div class="slider">
                        <img src="" alt="Project 3 Image 1" class="slide active">
                        <img src="" alt="Project 3 Image 2" class="slide">
                        <img src="" alt="Project 3 Image 3" class="slide">
                        <!-- Mensagem para projetos sem imagens -->
                        <p class="no-project-message">No project yet</p>
                    </div>
                    <a href="" class="project-link">View Project</a>
                </div>
                <div class="project-item">
                    <div class="slider">
                        <img src="" alt="Project 4 Image 1" class="slide active">
                        <img src="" alt="Project 4 Image 2" class="slide">
                        <img src="" alt="Project 4 Image 3" class="slide">
                        <!-- Mensagem para projetos sem imagens -->
                        <p class="no-project-message">No project yet</p>
                    </div>
                    <a href="" class="project-link">View Project</a>
                </div>

            </div>
        </section>

        <section class="section" id="contact">
            <h2>E-mail</h2>
            <p>dienifermendonca.tech@gmail.com</p>
            <!-- <button class="cta-button">Entre em Contato</button> -->
        </section>
    </div>
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            const saudacoes = [
                {element: document.querySelector(".ola"), delay: 150},
                {element: document.querySelector(".hi"), delay: 450},
                {element: document.querySelector(".ciao"), delay: 750},
                {element: document.querySelector(".hola"), delay: 1050},
                {element: document.querySelector(".bonjour"), delay: 1350},
                {element: document.querySelector(".hallo"), delay: 1650},
                {element: document.querySelector(".gruezi"), delay: 1950},
            ];
            const loadingScreen = document.querySelector(".loading-screen");
            const content = document.querySelector(".content");

            saudacoes.forEach((saudar, index) => {
                setTimeout(() => {
                    saudar.element.style.opacity = '1'; 
                }, saudar.delay);

                setTimeout(() => {
                    saudar.element.style.opacity = '0'; 
                }, saudar.delay + 200); 
            });

            // Reduz o tempo total antes de ocultar a tela
            const totalDelay = 1500 + saudacoes.length * 150;
            setTimeout(() => {
                loadingScreen.classList.add("hide");
                content.style.display = "block"; 
            }, totalDelay); 
           // -------------------SLIDERS
            const sliders = document.querySelectorAll('.slider');
            sliders.forEach(slider => {
                const slides = slider.querySelectorAll('.slide');
                let currentIndex = 0;
                let sliderInterval; // Declarar a variável do intervalo aqui

                function showNextSlide() {
                    slides[currentIndex].classList.remove('active');
                    currentIndex = (currentIndex + 1) % slides.length;
                    slides[currentIndex].classList.add('active');
                }

                // Inicia o slider
                sliderInterval = setInterval(showNextSlide, 3000);

                // Pausa a troca automática ao passar o mouse
                slider.addEventListener('mouseover', () => {
                    clearInterval(sliderInterval);
                });

                // Retoma a troca automática ao sair com o mouse
                slider.addEventListener('mouseout', () => {
                    sliderInterval = setInterval(showNextSlide, 2000);
                });
            });

        });
        var translations = <?php echo json_encode($translations); ?>;

        function changeLanguage(language) {
            // Verifica se o idioma existe nas traduções
            if (translations[language]) {
                // Atualiza o conteúdo da biografia de acordo com o idioma selecionado
                document.getElementById('biografia').textContent = translations[language]['biografia'];
            }
        }
    </script>
</body>
</html>
