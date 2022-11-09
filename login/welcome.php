<?php
include "config.php";
session_start();

if (!isset($_SESSION['username'])) {
    header("Location: login.php");
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="UTF-8">
    <link rel="icon" type="image/x-icon" href="../images/logo.png">
    <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Josefin+Sans">
    <link href="https://unpkg.com/@csstools/normalize.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <link href="../css/styles.css" rel="stylesheet">


    <script src="../JS_Bestanden/slider.js"></script>

    <!-- Cookies css -->
    <link href="../cookies/style.css" rel="stylesheet">
    
        <!--Link-Font-Awesome(icon)-->
    <script src="https://kit.fontawesome.com/e3ad0412a5.js" crossorigin="anonymous"></script></head>

    <title>Spellekens</title>
</head>

<body>
    <script>(function (w, d, s, l, i) {
            w[l] = w[l] || []; w[l].push({
                'gtm.start':
                    new Date().getTime(), event: 'gtm.js'
            }); var f = d.getElementsByTagName(s)[0],
                j = d.createElement(s), dl = l != 'dataLayer' ? '&l=' + l : ''; j.async = true; j.src =
                    '//www.googletagmanager.com/gtm.js?id=' + i + dl; f.parentNode.insertBefore(j, f);
        })(window, document, 'script', 'dataLayer', 'GTM-PFK425');
    </script>
    <header>
        <a href="../" class="logo">
            <h1><img src="../images/logo.png" alt="Logo spellekens" width="100"> Spellekens.be</h1>
        </a>
        <button class="hamburger-menu" title="Toggle" onclick="menuToggle()">
            <i class="fa fa-bars"></i>
        </button>
        <nav>
            <ul class="nav">
                <li><a href="../" class="active"><i class="fa fa-home"></i>Home</a></li>
                <li><a href="../about"><i class="fa fa-user"></i>About us</a></li>
                <li><a href="../games"><i class="fa fa-folder"></i>Games</a></li>
                <li><a href="../chatbot"><i class="fa fa-question-circle"></i>Help desk</a></li>
            </ul>
            <div class="nav-line"></div>
            <ul class="help">
                <li>
                    <a href="../index.html" class="button">Contact</a>
                </li>
                <li>
                    <a href="logout.php" class="button login"><i class="fa-solid fa-right-from-bracket"></i>Logout</a>
                </li>
            </ul>
        </nav>
        <script src="../JS_Bestanden/navline.js"></script>
    </header>

    <main>
        <section class="search">
            <h1>Odisee Games</h1>
            <input type="text" class="search-input" placeholder="Search for game">
        </section>
        <section class="trailer-container">
            <h1 class="animation">Hi <b><?php echo htmlspecialchars($_SESSION["username"]); ?></b>, Welcome to our site.</h1>
            <h2>Game trailers</h2>
            <section class="trailers">

                <section class="slider">
                    <div class="slides">
                        <input type="radio" name="radio-btn" id="radio1">
                        <input type="radio" name="radio-btn" id="radio2">
                        <input type="radio" name="radio-btn" id="radio3">
                        <input type="radio" name="radio-btn" id="radio4">
                        <input type="radio" name="radio-btn" id="radio5">
                        <input type="radio" name="radio-btn" id="radio6">
                        <div class="slide first">
                            <section class="trailer">
                                <section class="text">
                                    <h3>Odisee Invaders</h3>
                                    <p>
                                        A small preview of the insane gameplay that odisee invaders brings.
                                    </p>
                                </section>
                                <iframe width="700" height="315" src="https://www.youtube.com/embed/6LxdLV8jOEM"
                                    title="YouTube video player" frameborder="0"
                                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                    allowfullscreen>
                                </iframe>
                            </section>
                        </div>
                        <div class="slide">
                            <section class="trailer">
                                <section class="text">
                                    <h3>Bartje De Vlieger</h3>
                                    <p>
                                        A sneak peak of the thrilling face through pipe gameplay of the hit game Bartje de vlieger.
                                    </p>
                                </section>
                                <iframe width="700" height="315" src="https://www.youtube.com/embed/m81YRB7HOUQ"
                                    title="YouTube video player" frameborder="0"
                                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                    allowfullscreen>
                                </iframe>
                            </section>
                        </div>
                        <div class="slide">
                            <section class="trailer">
                                <section class="text">
                                    <h3>Bart-Kaas-En-Eieren</h3>
                                    <p>
                                        The official trailer for Bart Kaas en Eieren revealing the long awaited gameplay.
                                    </p>
                                </section>
                                <iframe width="700" height="315" src="https://www.youtube.com/embed/NApmzPEzeeo"
                                    title="YouTube video player" frameborder="0"
                                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                    allowfullscreen>
                                </iframe>
                            </section>
                        </div>
                        <div class="slide">
                            <section class="trailer">
                                <section class="text">
                                    <h3>Tap The Gigachad</h3>
                                    <p>
                                        Can you tap the gigachad ? Check out the trailer and see for yourself.
                                    </p>
                                </section>
                                <iframe width="700" height="315" src="https://www.youtube.com/embed/vdxQET4mRzU"
                                    title="YouTube video player" frameborder="0"
                                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                    allowfullscreen>
                                </iframe>
                            </section>
                        </div>
                        <div class="slide">
                            <section class="trailer">
                                <section class="text">
                                    <h3>GTA 6</h3>
                                    <p>
                                        Lorem ipsum, dolor sit amet consectetur adipisicing elit. Non recusandae at
                                        veniam quam. Quia
                                        totam
                                        quaerat recusandae earum reprehenderit quis distinctio voluptatum maxime? Dolor
                                        eius possimus
                                        illum
                                        molestiae voluptate doloremque.
                                    </p>
                                </section>
                                <iframe width="700" height="315" src="https://www.youtube.com/embed/6LxdLV8jOEM"
                                    title="YouTube video player" frameborder="0"
                                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                    allowfullscreen>
                                </iframe>
                            </section>
                        </div>
                        <div class="slide">
                            <section class="trailer">
                                <section class="text">
                                    <h3>Longshadow</h3>
                                    <p>
                                        Lorem ipsum, dolor sit amet consectetur adipisicing elit. Non recusandae at
                                        veniam quam. Quia
                                        totam
                                        quaerat recusandae earum reprehenderit quis distinctio voluptatum maxime? Dolor
                                        eius possimus
                                        illum
                                        molestiae voluptate doloremque.
                                    </p>
                                </section>
                                <iframe width="700" height="315" src="https://www.youtube.com/embed/6LxdLV8jOEM"
                                    title="YouTube video player" frameborder="0"
                                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                    allowfullscreen>
                                </iframe>
                            </section>
                        </div>
                        <div class="navigation-auto">
                            <div class="auto-btn1"></div>
                            <div class="auto-btn2"></div>
                            <div class="auto-btn3"></div>
                            <div class="auto-btn4"></div>
                            <div class="auto-btn5"></div>
                            <div class="auto-btn6"></div>
                        </div>
                    </div>
                    <div class="navigation-manual">
                        <label for="radio1" class="manual-btn"></label>
                        <label for="radio2" class="manual-btn"></label>
                        <label for="radio3" class="manual-btn"></label>
                        <label for="radio4" class="manual-btn"></label>
                        <label for="radio5" class="manual-btn"></label>
                        <label for="radio6" class="manual-btn"></label>
                    </div>
                </section>


            </section>
        </section>
        <section class="game-container">
            <h2>Games</h2>
            <section class="games">

                <section class="slider">
                    <div class="slides">
                        <input type="radio" name="game-radio-btn" id="game-radio1">
                        <input type="radio" name="game-radio-btn" id="game-radio2">
                        <input type="radio" name="game-radio-btn" id="game-radio3">
                        <input type="radio" name="game-radio-btn" id="game-radio4">
                        <input type="radio" name="game-radio-btn" id="game-radio5">
                        <input type="radio" name="game-radio-btn" id="game-radio6">
                        <div class="slide first">
                            <section class="game">
                                <section class="text">
                                    <h3>Odisee Invaders</h3>
                                    <p>
                                        Pilot your spaceship through waves of enemies and rows of meteors. Avoid enemy 
                                        fire and eliminate them all before they reach your location.
                                        
                                        Blast your way past five exciting levels rising in dificulty and eventually try
                                        your best in a 1v1 faceoff with the dangerous minigun.
                                    </p>
                                    <a href="../games/game1/" class="button">Play now!</a>
                                </section>
                                <img src="../images/OdiseeInvaders.png" alt="">
                            </section>
                        </div>
                        <div class="slide">
                            <section class="game">
                                <section class="text">
                                    <h3>Bartje De Vlieger</h3>
                                    <p>
                                        Choose your plane and fly it to the moon or through some pipes atleast. Avoid
                                        all contact to ensure your safety and reach for the top of the leaderboards.
                                        
                                        Do you have what it takes to reach a score in above 50 or even in the hundreds ?
                                        Test it out now by playing Bartje De Vlieger.
                                    </p>
                                    <a href="../games/game2/" class="button">Play now!</a>
                                </section>
                                <img src="../images/bartjedevlieger.png" alt="">
                            </section>
                        </div>
                        <div class="slide">
                            <section class="game">
                                <section class="text">
                                    <h3>Bart-Kaas-En-Eieren</h3>
                                    <p>
                                        A game of the mind , outsmart your opponent or be crushed by their might. 
                                        Do you have the mental capacity to win a game of Bart Kaas en Eieren.

                                        Be the first to place three of your chosen head in a row horizotally ,
                                        vertically or diagonal to take home the victory. Chose between four different
                                        characters to represent yourself in the Bart Kaas en Eieren arena.
                                    </p>
                                    <a href="../games/game3/" class="button">Play now!</a>
                                </section>
                                <img src="../images/TicTacToe.png" alt="">
                            </section>
                        </div>
                        <div class="slide">
                            <section class="game">
                                <section class="text">
                                    <h3>Tap The Gigachad</h3>
                                    <p>
                                        Speed , Endurance , Focus and sheer fucking willpower. Those are the requirements
                                        for completing a hard round of Tap the Gigachad , only after completing this hard
                                        round can you be classified as a GigaChad. How do you complete it ? Simple you just
                                        click the Gigachad as much as you can. Wait you're not a gigachad ? Don't worry 
                                        there are medium and easy modes for the lower humans like you.
                                    </p>
                                    <a href="../games/game4/" class="button">Play now!</a>
                                </section>
                                <img src="../images/tapchad.png" alt="">
                            </section>
                        </div>
                        <div class="slide">
                            <section class="game">
                                <section class="text">
                                    <h3>GTA 6</h3>
                                    <p>
                                        The story of two uniquely-different criminals as they commit daring and 
                                        profitable heists across the sprawling city of Atwerp. Robin is an 
                                        ex-con whose past catches up to him when previous crime partner Arne starts 
                                        making a name for himself as a drug-lord of Mad Marnix .
                                    </p>
                                    <a href="../games/game5/" class="button">SPlay now!</a>
                                </section>
                                <img src="../images/gta6.png" alt="">
                            </section>
                        </div>
                        <div class="slide">
                            <section class="game">
                                <section class="text">
                                    <h3>Longshadow</h3>
                                    <p>
                                        A long relaxing shadow until it becomes faster.
                                    </p>
                                    <a href="../games/game6/" class="button">Play now!</a>
                                </section>
                                <img src="../images/Longshadow.png" alt="">
                            </section>
                        </div>
                        <div class="navigation-auto">
                            <div class="game-auto-btn1"></div>
                            <div class="game-auto-btn2"></div>
                            <div class="game-auto-btn3"></div>
                            <div class="game-auto-btn4"></div>
                            <div class="game-auto-btn5"></div>
                            <div class="game-auto-btn6"></div>
                        </div>
                    </div>
                    <div class="navigation-manual">
                        <label for="game-radio1" class="manual-btn"></label>
                        <label for="game-radio2" class="manual-btn"></label>
                        <label for="game-radio3" class="manual-btn"></label>
                        <label for="game-radio4" class="manual-btn"></label>
                        <label for="game-radio5" class="manual-btn"></label>
                        <label for="game-radio6" class="manual-btn"></label>
                    </div>
                </section>


            </section>
        </section>
        <!-- Cookies -->
        <div id="cookiePopup" class="hide">
            <img src="../cookies/img/cookie.png" alt="cookies">
            <p>
                Our website uses cookies to provide your browsing experience and
                relevant information. Before continuing to use our website, you agree &
                accept of our <a href="../cookies/cookie_policy/index.html">Cookie Policy & Privacy.</a>
            </p>
            <button id="acceptCookie">Accept</button>
        </div>
        <!-- Cookies -->
        <!-- Script -->
        <script src="../cookies/script.js"></script>
    </main>

    <footer>
        <p>Copyright &copy; 2022 Spellekens | Designed by team Spellekens | </p>
        <div class="social-icons">
            <a href="https://www.facebook.com/" title="facebook link" target="_blank"><i class="fa fa-facebook"></i></a>
            <a href="https://www.instagram.com/" title="instagram link" target="_blank"><i
                    class="fa fa-instagram"></i></a>
            <a href="https://www.twitter.com/" title="twitter link" target="_blank"><i class="fa fa-twitter"></i></a>
            <a href="https://www.linkedin.com/" title="linkedin link" target="_blank"><i class="fa fa-linkedin"></i></a>
            <a href="https://www.twitch.tv/" title="twitch link" target="_blank"><i class="fa fa-twitch"></i></a>
        </div>
    </footer>

</body>

</html>
