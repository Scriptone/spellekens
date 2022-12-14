<?php

// Constanten (connectie-instellingen databank)
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


?><!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="utf-8">
    <title>Mijn berichten</title>
</head>
<body>
    <?php if (sizeof($items) > 0) { ?>
    <ul>
        <?php foreach ($items as $item) { ?>
        <li>
            <?php echo htmlentities($item['sender']); ?>: 
            <?php echo htmlentities($item['mail']); ?>: 
            <?php echo htmlentities($item['phone']); ?>:
            <?php echo htmlentities($item['game']); ?>:
            <?php echo htmlentities($item['item']); ?>:
            <?php echo htmlentities($item['message']); ?> 
            (<?php echo (new Datetime($item['added_on']))->format('d-m-Y H:i:s'); ?>)</li>
        <?php }?>
    </ul>
    <?php
    } else {
        echo '<p>No message has been reseaved .</p>' . PHP_EOL;
    }
    ?>
</body>