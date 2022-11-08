<?php
include "config.php";
session_start();

if (!isset($_SESSION['username'])) {
    header("Location: login.php");
}

?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <link rel="icon"type="image/png" sizes="32x32" href="#">
    <link rel="stylesheet" href="css/opmaak.css">
    <title>Spellekens</title>
  </head>
  <body>
        <!-- Page 1 Home-->
      <div id="home">
        <div class="all">
          <nav>
            <img src="../images/logo.png" class="logo">
            <ul id="navbar">
              <li class="welcome" ><a href="#">You're in
              <svg width="16" height="16" viewBox="0 0 16 16" aria-hidden="true" focusable="false">
                    <path d="M8 0c4.4 0 8 3.6 8 8s-3.6 8-8 8-8-3.6-8-8 3.6-8 8-8zm0 12c-1.6 0-3.2.4-4.6 1 1.2 1.1 2.8 1.8 4.6 1.8 1.8 0 3.4-.7 4.6-1.8-1.5-.7-3-1-4.6-1zM8 1.3c-3.7 0-6.7 3-6.7 6.7 0 1.5.5 2.8 1.3 3.9 1.7-.8 3.6-1.2 5.5-1.2s3.8.4 5.5 1.2c.8-1.1 1.2-2.4 1.3-3.8v-.4c-.2-3.5-3.2-6.4-6.9-6.4zm0 1.4c1.8 0 3.3 1.5 3.3 3.3S9.8 9.3 8 9.3 4.7 7.8 4.7 6 6.2 2.7 8 2.7zm0 1.2c-1.1 0-2.1 1-2.1 2.1s1 2 2.1 2 2-.9 2.1-1.9v-.2c-.1-1.1-1-2-2.1-2z"></path>
                    </svg>
              </a></li>
              <li class="logouts"><a href="logout.php">Logout 
                    <svg class="red" width="15" height="16" viewBox="0 0 15 16" aria-hidden="true" focusable="false">
                    <path d="M12.602 3.75a1.001 1.001 0 00-1.062-.132.994.994 0 00-.57.903v.01c.005.296.136.576.362.77a5.04 5.04 0 01-3.386 8.77A5.039 5.039 0 014.56 5.3a1.04 1.04 0 00.364-.77.997.997 0 00-1.008-.99 1.016 1.016 0 00-.686.26A6.992 6.992 0 00.954 9.96 7.06 7.06 0 0015 9.001a6.953 6.953 0 00-2.398-5.25zM7.946 9.001a1.006 1.006 0 01-1.008-1v-7a1.007 1.007 0 012.016 0v7c-.004.554-.455 1-1.008 1z"  fill-rule="evenodd"></path>
                    </svg>
                  </a>
            </li>
            </ul>
          </nav>



          <h1>Welcome to our website <br><?php echo $_SESSION['username']; ?></br></h1></h1>

      </div>
    </div>
  </body>
</html>
