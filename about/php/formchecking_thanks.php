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

$name = $items['name'];
$mail = $items['mail'];
$item = $items['item '];
$game = $items['game'];
$message = $items['message'];
$phone = $items['phone'];

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
