<?php

$name = isset($_GET["name"]) ? $_GET["name"] : false;


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-EF4ZEFP8NR"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag() { dataLayer.push(arguments); }
        gtag('js', new Date());

        gtag('config', 'G-EF4ZEFP8NR');
    </script>
    <meta name="viewport" content="width = device-width">
    <link rel="icon" type="image/x-icon" href="../../logo.png">

    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.2/dist/leaflet.css"
        integrity="sha256-sA+zWATbFveLLNqWO2gtiw3HL/lh1giY/Inf1BJ0z14=" crossorigin="" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">

    <link rel="stylesheet" href="../../css/styles.css">
    <script src="https://unpkg.com/leaflet@1.9.2/dist/leaflet.js"
        integrity="sha256-o9N1jGDZrf5tS+Ft4gbIK7mYMipq9lqpVJ91xHSyKhg=" crossorigin=""></script>
    <title>Contact form</title>
</head>

<body>
    <header>
        <a href="../../" class="logo">
            <h1><img src="../../images/logo.png" alt="Logo spellekens" width="100"> Spellekens.be</h1>
        </a>
        <button class="hamburger-menu" title="Toggle" onclick="menuToggle()">
            <i class="fa fa-bars"></i>
        </button>
        <nav>
            <ul class="nav">
                <li><a href="../../"><i class="fa fa-home"></i>Home</a></li>
                <li><a href="../" class="active"><i class="fa fa-user"></i>About us</a></li>
                <li><a href="../../spellen"><i class="fa fa-folder"></i>Games</a></li>
                <li><a href="../../chatbot"><i class="fa fa-question-circle"></i>Help desk</a></li>
            </ul>
            <div class="nav-line"></div>
            <ul class="help">
                <li>
                    <a href="../about#contactform" class="button">Contact</a>
                </li>
                <li>
                    <a href="../../login/index.php" class="button login"><i class="fa fa-user"></i>Login</a>
                </li>
            </ul>

        </nav>
        <script src="../../JS_Bestanden/navline.js"></script>
    </header>
    <main>
        <section class="thanks">
            <h2>Result</h2>

            <?php

            // Name sent in
            if ($name) {
                echo '<h2>Thank you ' . htmlentities($name) . '</h2>';
            }

            // Nothing sent in
            else {
                echo '<h2>Thank you, stranger</h2>';
            }

            ?>
            <p>Your form was successfully sent!</p>
            <a href="../" class="button">Go back</a>
        </section>
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