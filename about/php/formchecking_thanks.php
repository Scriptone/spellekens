<?php
// Constanten (connectie-instellingen databank)
define('DB_HOST', 'localhost');
define('DB_USER', 'coworking');
define('DB_PASS', 'Ii3m8j08^');
define('DB_NAME', 'coworking-about'); 


date_default_timezone_set('Europe/Brussels');

// Verbinding maken met de databank
try {
    $db = new PDO('mysql:host=' . DB_HOST .';dbname=' . DB_NAME . ';charset=utf8mb4', DB_USER, DB_PASS);
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo 'Verbindingsfout: ' .  $e->getMessage();
    exit;
}

// Opvragen van alle taken uit de tabel tasks
$stmt = $db->prepare('SELECT * FROM messages ORDER BY added_on DESC');
$stmt->execute();
$items = $stmt->fetchAll(PDO::FETCH_ASSOC);

foreach ($items as $key => $value) {
    echo "Key is: ". $key ." value is: ". $value ."\n";
}
$name = isset($_GET['name']) ? $_GET['name'] : false;
$mail = isset($_GET['mail']) ? $_GET['mail'] : false;
$item = isset($_GET['item ']) ? $_GET['item '] : false;
$game = isset($_GET['game']) ? $_GET['game'] : false;
$message = isset($_GET['message']) ? $_GET['message'] : false;
$phone = isset($_GET['phone']) ? $_GET['phone'] : false;

?><!DOCTYPE html>
<html lang="en">
<head>
    <title>Testform</title>
    <meta charset="UTF-8"/>

</head>
<body>
<header>

</header>
<div class="container">
<?php

// Name sent in

echo '<p> Thank you ' . htmlentities($name) . '</p>';
echo '<p> email:' .htmlentities($mail) . '</p>';
echo '<p> phone:' . htmlentities($phone) . '</p>';
echo '<p> game:' .htmlentities($game) . '</p>';
echo '<p> item:' .htmlentities($item) . '</p>';
echo '<p> your message:' .htmlentities($message) . '</p>';
?>


</div>
</body>
</html>
