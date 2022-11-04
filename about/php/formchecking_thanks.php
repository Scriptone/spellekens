<?php

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
