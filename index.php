<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Portfolio</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <link href="https://fonts.googleapis.com/css?family=Montserrat:300,400|Sarabun" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
</head>
<body>
    
    <div id="loadingWindow">
        <div id="circle"></div>
        <p>Ładowanie...</p>
    </div>


    <section id="welcome">
        <div class="frame">
            <img src="profil.png" alt="">
        </div>

        <h1>Witaj! Nazywam się <b>Piotr</b></h1>

        <nav>
            <ul>
                <li data-scroll-position="0">
                    <i class="fas fa-home"></i>
                    <span>Strona główna</span>
                </li>
                <li data-scroll-position="700">
                    <i class="fas fa-male"></i>
                    <span>O mnie</span>
                </li>
                <li data-scroll-position="1300">
                    <i class="fas fa-tools"></i>
                    <span>Umiejętności</span>
                </li>
                <li data-scroll-position="2600">
                    <i class="fas fa-mail-bulk"></i>
                    <span>Kontakt</span>
                </li>
            </ul>
        </nav>

        <h2>Jestem Junior Front-End Developerem</h2>

        <button>Czytaj dalej</button>
    </section>

    <section id="about">
        <div id="side-panel">
            <div class="side">
                <ul type="square">
                    <li>Mam 19 lat i aktualnie uczę się w klasie maturalnej technikum o profilu Technik Informatyk.</li>
                    <li>Interesuję się sportem, muzyką, grami, a swój sposób na życie chciałbym ułożyć dzięki programowaniu.</li>
                    <li>Staram się uczyć zarówno frond-endu jak i back-ednu wiedząc że oba kierunki są niezbędne do normalnego funkcjonowania.</li>
                </ul>
            </div>
            <div class="side">
                <ul type="square">
                    <li>Mam 19 lat i aktualnie uczę się w klasie maturalnej technikum o profilu Technik Informatyk.</li>
                    <li>Interesuję się sportem, muzyką, grami, a swój sposób na życie chciałbym ułożyć dzięki programowaniu.</li>
                    <li>Staram się uczyć zarówno frond-endu jak i back-ednu wiedząc że oba kierunki są niezbędne do normalnego funkcjonowania.</li>
                </ul>
            </div>

            <div class="leave-text">
                <textarea name="" id=""></textarea>
            </div>
        </div>
    </section>

    <section id="skills">
        <h1>Czym potrafię się posługiwać?</h1><hr>

        <div class="skill">
            <img src="logo/html5-original.svg" alt="HTML">
            <img src="logo/css3-original.svg" alt="CSS">
            <img src="logo/javascript-original.svg" alt="JavaScript">
            <img src="logo/jquery-original-wordmark.svg" alt="JQuery">
            <img src="logo/sass-original.svg" alt="SASS">
        </div>

        <h1>Czym potrafię się posługiwać ale nadal potzebuję wiele pracy :)</h1><hr>

        <div class="skill">
            <img src="logo/php-original.svg" alt="PHP">
            <img src="logo/mysql-original-wordmark.svg" alt="MySQL">
            <img src="logo/nodejs-original-wordmark.svg" alt="NodeJS">
            <img src="logo/vuejs-original-wordmark.svg" alt="VueJS">
        </div>
    </section>

    <section id="projects">
        <div class="project-container">
            <div class="left-box">
                <img src="portfolio/mini/drawing.png" alt="">
                <img src="portfolio/mini/wordpress.png" alt="">
            </div>
            <div class="main-box">
                <div class="img-cont">
                    <img src="portfolio/drawing.png" alt="">
                </div>

                <h1>Moje portfolio</h1>

                <div class="tags">
                    <span>HTML</span>
                    <span>CSS / SCSS</span>
                    <span>JavaScript</span>
                </div>

                <div class="project-info">
                    <h4>Drawing</h4>
                    <p>Stronka zrobiona pod portfolio.</p>
                </div>
            </div>
            <div class="right-box">
                
            </div>
        </div>
    </section>

    <section id="contact">
        <div class="left-side">
            <form action="send.php" method="GET">
                <input type="text" name="name" placeholder="Podaj swoje imię i nazwisko...">
                <input type="email" name="email" id="" placeholder="Podaj swój adres e-mail...">
                <textarea name="content" id="" cols="30" rows="10" placeholder="Tutaj wpisz tekst..."></textarea>
                <button type="submit">Wyślij</button>
            </form>
        </div>
        <div class="social-side">
            <a href="https://www.facebook.com/piotr.kurek.904" class="social" target="_blank">
                <i class="fab fa-facebook"></i>
                <div class="social-name">
                    <span>Facebook</span>
                </div>
            </a>
            <a href="https://www.instagram.com/kurek_99/" class="social" target="_blank">
                <i class="fab fa-instagram"></i>
                <div class="social-name">
                    <span>Instagram</span>
                </div>
            </a>
            <a href="https://www.linkedin.com/in/piotr-kurek-961130172/" class="social" target="_blank">
                <i class="fab fa-linkedin"></i>
                <div class="social-name">
                    <span>LinkedIn</span>
                </div>
            </a>
            <a href="https://github.com/Spolaryzowany" class="social" target="_blank">
                <i class="fab fa-github-square"></i>
                <div class="social-name">
                    <span>Github</span>
                </div>
            </a>
        </div>
    </section>

    <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
    <script src="main.js"></script>
</body>
</html>