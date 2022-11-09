<?php

// Show all errors (for educational purposes)
ini_set('error_reporting', E_ALL);
ini_set('display_errors', 1);

// Constanten (connectie-instellingen databank)
define('DB_HOST', 'localhost');
define('DB_USER', 'coworking');
define('DB_PASS', 'Ii3m8j08^');
define('DB_NAME', 'coworking-about');

date_default_timezone_set('Europe/Brussels');

// Verbinding maken met de databank
try {
    $db = new PDO('mysql:host=' . DB_HOST . ';dbname=' . DB_NAME . ';charset=utf8mb4', DB_USER, DB_PASS);
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo 'Verbindingsfout: ' . $e->getMessage();
    exit;
}

$name = isset($_POST['name']) ? (string)$_POST['name'] : '';
$message = isset($_POST['message']) ? (string)$_POST['message'] : '';
$mail = isset($_POST['mail']) ? (string)$_POST['mail'] : '';
$game = isset($_POST['game']) ? (string)$_POST['game'] : '';
$item = isset($_POST['item']) ? (string)$_POST['item'] : '';
$phone = isset($_POST['phone']) ? (string)$_POST['phone'] : '';
$msgName = '';
$msgMail = '';
$msgMessage = '';
$msgGame = '';
$msgItem = '';
$msgPhone = '' ;

// form is sent: perform formchecking!
if (isset($_POST['btnSubmit'])) {

    $allOk = true;

    // name not empty
    if (trim($name) === '') {
        $msgName = 'Please fill in your name';
        $allOk = false;
    }

    if (trim($mail) === '') {
        $msgMail = 'Please fill in your e-mail adresse';
        $allOk = false;
    }

    if (trim($phone) === '') {
        $msgPhone = 'Please fill in your phone number';
        $allOk = false;
    }


    if (trim($game) === '') {
        $msgGame = 'Please select a game';
        $allOk = false;
    }

    if (trim($item) === '') {
        $msgItem = 'Please choose a field';
        $allOk = false;
    }

    if (trim($message) === '') {
        $msgMessage = 'Please fill in a message';
        $allOk = false;
    }

    // end of form check. If $allOk still is true, then the form was sent in correctly
    if ($allOk) {
        // build & execute prepared statement
        $stmt = $db->prepare('INSERT INTO messages (sender, mail,phone , game, item, message, added_on) VALUES (? , ?,? ,?,  ? , ?, ?)');
        $stmt->execute(array($name, $mail,$phone, $game[0] ,$item[0] ,$message, (new DateTime())->format('Y-m-d H:i:s')));

        // the query succeeded, redirect to this very same page
        if ($db->lastInsertId() !== 0) {
            header('Location: ./php/formchecking_thanks.php?name=' . urlencode($name));
            exit();
        } // the query failed
        else {
            echo 'Databankfout.';
            exit;
        }

    }

}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width = device-width">
    <link rel="icon" type="image/x-icon" href="../logo.png">

    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.2/dist/leaflet.css"
        integrity="sha256-sA+zWATbFveLLNqWO2gtiw3HL/lh1giY/Inf1BJ0z14=" crossorigin="" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">

    <link rel="stylesheet" href="../css/styles.css">
    <script src="https://unpkg.com/leaflet@1.9.2/dist/leaflet.js"
        integrity="sha256-o9N1jGDZrf5tS+Ft4gbIK7mYMipq9lqpVJ91xHSyKhg=" crossorigin=""></script>
    <title>About us</title>
</head> 

<body>
    <header>
        <a href="../" class="logo">
            <h1><img src="../images/logo.png" alt="Logo spellekens" width="100"> Spellekens.be</h1>
        </a>
        <nav>
            <ul class="nav">
                <li><a href="../"><i class="fa fa-home"></i>Home</a></li>
                <li><a href="./" class="active"><i class="fa fa-user"></i>About us</a></li>
                <li><a href="../games"><i class="fa fa-folder"></i>Games</a></li>
                <li><a href="../chatbot"><i class="fa fa-question-circle"></i>Help desk</a></li>
            </ul>
            <div class="nav-line"></div>
            <ul class="help">
                <li>
                    <a href="#contactform" class="button">Contact</a>
                </li>
                <li>
                    <a href="../login/index.php" class="button login"><i class="fa fa-user"></i>Login</a>
                </li>
            </ul>

        </nav>
        <script src="../JS_Bestanden/navline.js"></script>
    </header>
    <main>

        <div class="bg-white py-5">
            <div class="container py-5">
                <div class="row align-items-center mb-5">
                    <div class="col-lg-6 order-2 order-lg-1"><i class="fa fa-bar-chart fa-2x mb-3 text-primary"></i>
                        <h2 class="font-weight-light">Lorem ipsum dolor sit amet</h2>
                        <p class="font-italic text-muted mb-4">Lorem ipsum dolor sit amet, consectetur adipisicing elit,
                            sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p><a href="#"
                            class="btn btn-light px-5 rounded-pill shadow-sm">Learn More</a>
                    </div>
                    <div class="col-lg-5 px-5 mx-auto order-1 order-lg-2"><img
                            src="https://bootstrapious.com/i/snippets/sn-about/img-1.jpg" alt=""
                            class="img-fluid mb-4 mb-lg-0"></div>
                </div>
                <div class="row align-items-center">
                    <div class="col-lg-5 px-5 mx-auto"><img
                            src="https://bootstrapious.com/i/snippets/sn-about/img-2.jpg" alt=""
                            class="img-fluid mb-4 mb-lg-0"></div>
                    <div class="col-lg-6"><i class="fa fa-leaf fa-2x mb-3 text-primary"></i>
                        <h2 class="font-weight-light">Lorem ipsum dolor sit amet</h2>
                        <p class="font-italic text-muted mb-4">Lorem ipsum dolor sit amet, consectetur adipisicing elit,
                            sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p><a href="#"
                            class="btn btn-light px-5 rounded-pill shadow-sm">Learn More</a>
                    </div>
                </div>
                <div class="row align-items-center mb-5 mt-5">
                    <div class="col-lg-6 order-2 order-lg-1"><i class="fa fa-bar-chart fa-2x mb-3 text-primary"></i>
                        <h2 class="font-weight-light">where can you find us?</h2>
                        <p class="font-italic text-muted mb-4">you can find us at the Technologiecampus in Gent.</p><a href="#"
                            class="btn btn-light px-5 rounded-pill shadow-sm">Learn More</a>
                    </div>
                    <div class="col-lg-5 px-5 mx-auto order-1 order-lg-2" id="map"></div> 
                    <script >
                        var map = L.map('map').setView([51.059726, 3.709114], 13);
                        L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
                            maxZoom: 19,
                            attribution: '&copy; <a href="http://www.openstreetmap.org/copyright">OpenStreetMap</a>'
                        }).addTo(map);
                        var marker = L.marker([51.059726, 3.709114]).addTo(map);
                    </script>
                </div>
            </div>
        </div>

        <div class="bg-light py-5 our-team">
            <div class="container py-5">
                <div class="row mb-4">
                    <div class="col-lg-5">
                        <h2 class="display-4 font-weight-light">Our team</h2>
                        <p class="font-italic text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                    </div>
                </div>

                <div class="row text-center">
                    <!-- Team item-->
                    <div class="col-xl-3 col-sm-6 mb-5">
                        <div class="bg-white rounded shadow-sm py-5 px-4">
                            <img
                                src="../images/Arne.jpg" alt="" 
                                class="img-fluid rounded-pill mb-3 img-thumbnail shadow-sm">
                            <h5 class="mb-0">Arne Haers</h5><span class="small text-uppercase text-muted">CEO -
                                Founder</span>
                            <ul class="social mb-0 list-inline mt-3">
                                <li class="list-inline-item"><a href="#" title="link" class="social-link"><i
                                            class="fa fa-facebook-f"></i></a></li>
                                <li class="list-inline-item"><a href="#" title="link" class="social-link"><i
                                            class="fa fa-twitter"></i></a></li>
                                <li class="list-inline-item"><a href="#" title="link" class="social-link"><i
                                            class="fa fa-instagram"></i></a></li>
                                <li class="list-inline-item"><a href="#" title="link" class="social-link"><i
                                            class="fa fa-linkedin"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <!-- End-->

                    <!-- Team item-->
                    <div class="col-xl-3 col-sm-6 mb-5">
                        <div class="bg-white rounded shadow-sm py-5 px-4">
                            <img
                                src="../images/Phoenix.png" alt="" height="100" 
                                class="img-fluid rounded-pill mb-3 img-thumbnail shadow-sm">
                            <h5 class="mb-0">Phoenix</h5><span class="small text-uppercase text-muted">CEO -
                                Founder</span>
                            <ul class="social mb-0 list-inline mt-3">
                                <li class="list-inline-item"><a href="#" title="link" class="social-link"><i
                                            class="fa fa-facebook-f"></i></a></li>
                                <li class="list-inline-item"><a href="#" title="link" class="social-link"><i
                                            class="fa fa-twitter"></i></a></li>
                                <li class="list-inline-item"><a href="#" title="link" class="social-link"><i
                                            class="fa fa-instagram"></i></a></li>
                                <li class="list-inline-item"><a href="#" title="link" class="social-link"><i
                                            class="fa fa-linkedin"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <!-- End-->

                    <!-- Team item-->
                    <div class="col-xl-3 col-sm-6 mb-5">
                        <div class="bg-white rounded shadow-sm py-5 px-4" >
                            <img
                                src="../images/robin.png" alt="" 
                                class="img-fluid rounded-pill mb-3 img-thumbnail shadow-sm">
                            <h5 class="mb-0">Robin</h5><span class="small text-uppercase text-muted">CEO -
                                Founder</span>
                            <ul class="social mb-0 list-inline mt-3">
                                <li class="list-inline-item"><a href="#" title="link" class="social-link"><i
                                            class="fa fa-facebook-f"></i></a></li>
                                <li class="list-inline-item"><a href="#" title="link" class="social-link"><i
                                            class="fa fa-twitter"></i></a></li>
                                <li class="list-inline-item"><a href="#" title="link" class="social-link"><i
                                            class="fa fa-instagram"></i></a></li>
                                <li class="list-inline-item"><a href="#" title="link" class="social-link"><i
                                            class="fa fa-linkedin"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <!-- End-->

                    <!-- Team item-->
                    <div class="col-xl-3 col-sm-6 mb-5">
                        <div class="bg-white rounded shadow-sm py-5 px-4">
                            <img
                                src="../images/Anuwat.jpg" alt="" 
                                class="img-fluid rounded-pill mb-3 img-thumbnail shadow-sm">
                            <h5 class="mb-0">Anuwat</h5><span class="small text-uppercase text-muted">CEO -
                                Founder</span>
                            <ul class="social mb-0 list-inline mt-3">
                                <li class="list-inline-item"><a href="#" title="link" class="social-link"><i
                                            class="fa fa-facebook-f"></i></a></li>
                                <li class="list-inline-item"><a href="#" title="link" class="social-link"><i
                                            class="fa fa-twitter"></i></a></li>
                                <li class="list-inline-item"><a href="#" title="link" class="social-link"><i
                                            class="fa fa-instagram"></i></a></li>
                                <li class="list-inline-item"><a href="#" title="link" class="social-link"><i
                                            class="fa fa-linkedin"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <!-- End-->

                </div>
            </div>
        </div>
        <section class="mbr-section form1 cid-qyvf9K0GGo" id="contactform" data-rv-view="791">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="title col-12 col-lg-8">
                        <h2 class="mbr-section-title align-center pb-3 mbr-fonts-style display-2">
                            CONTACT US</h2>

                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row justify-content-center">
                    <div class="media-container-column col-lg-8" data-form-type="formoid">
                        <div data-form-alert="" hidden="">
                            Thanks for filling out the form!
                        </div>

                        <form class="mbr-form" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" data-form-title="Contact-form" >
                            <div class="row row-sm-offset">
                                <div class="col-md-4 multi-horizontal" data-for="name">
                                    <div class="form-group">
                                        <label class="form-control-label mbr-fonts-style display-7"
                                               for="name">Name</label>
                                        <input type="text" class="form-control" name="name" id="name"
                                               value="<?php echo htmlentities($name); ?>" >
                                        <span class="text-danger"><?php echo $msgName; ?></span>
                    
                                    </div>
                                </div>
                                <div class="col-md-4 multi-horizontal" data-for="email">
                                    <div class="form-group">
                                        <label class="form-control-label mbr-fonts-style display-7"
                                               for="mail">Email</label>
                                        <input type="email" class="form-control" name="mail"
                                              id="mail" value="<?php echo htmlentities($mail); ?>" >
                                        <span class="text-danger"><?php echo $msgMail; ?></span>
                                    </div>
                                </div>
                                <div class="col-md-4 multi-horizontal" data-for="phone">
                                    <div class="form-group">
                                        <label class="form-control-label mbr-fonts-style display-7"
                                               for="phone">Phone</label>
                                        <input type="tel" class="form-control" name="phone"
                                               id="phone" value="<?php echo htmlentities($phone); ?>" >
                                        <span class="text-danger"><?php echo $msgPhone; ?></span>
                                    </div>
                                </div>
                            </div>
                            <div class="mt-3 mxb-3">
                                <select name="game" class="form-select ">
                                    <option value="1" <?php echo ($game == 'game 1') ? 'checked' : '' ?>>game1</option>
                                    <option value="2"  <?php echo ($game == 'game 2') ? 'checked' : '' ?>>game2</option>
                                    <option value="3"   <?php echo ($game == 'game 3') ? 'checked' : '' ?>>game3</option>
                                    <option value="4"<?php echo ($game == 'game 4') ? 'checked' : '' ?>>game4</option>
                                </select>
                            </div>
                            <fieldset>
                                <legend>select the correct item</legend>
                                <div class="form-check mb-3">
                                    <input type="radio" class="form-check-input" name="item" id="item_bug" value="bug"
                                        <?php echo ($item == 'bug') ? 'checked' : '' ?> />
                                    <label class="form-check-label"  for="item_bug">bug</label>
                                </div>
                                <div class="form-check mb-3">
                                    <input type="radio" class="form-check-input" name="item" id="item_error" value="error"
                                        <?php echo ($item== 'error') ? 'checked' : '' ?> />
                                    <label  class="form-check-label"  for="item_error">error</label>
                                </div>
                                <div class="form-check mb-3">
                                    <input type="radio" class="form-check-input" name="item" id="item_feedback" value="feedback"
                                        <?php echo ($item == 'feedback') ? 'checked' : '' ?> />
                                    <label class="form-check-label"  for="item_feedback">feedback</label>
                                </div>
                                <div class="form-check mb-3">
                                    <input type="radio" class="form-check-input" name="item" id="item_other" value="other"
                                        <?php echo ($item == 'other') ? 'checked' : '' ?> />
                                    <label class="form-check-label"  for="item_other">other</label>
                                </div>
                                <span class="text-danger"><?php echo $msgItem; ?></span>
                            </fieldset>
                            <div class="form-group" data-for="message">
                                <label class="form-control-label mbr-fonts-style display-7"
                                       for="message-contactform">Message</label>
                                <textarea type="text" class="form-control" name="message" rows="7"
                                         id="message"><?php echo htmlentities($message); ?></textarea>
                                <span class="text-danger"><?php echo $msgMessage; ?></span>
                            </div>
                            <input class=" mt-3 btn btn-light px-5 rounded-pill shadow-sm" type="submit" id="btnSubmit" name="btnSubmit" value="SEND FORM"/>
                    
                        </form>
                    </div>
                </div>
            </div>
            <!-- </section> -->
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
