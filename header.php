<?php
  session_start();
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="styles.css?v=<?php echo time(); ?>">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <title>Record Store UK</title>
  </head>
  <body>
    <nav>
      <div class="logo">
        <a href="index.php"><img
          src="assets/index_assets/recordstorelogo.png"
          alt="Record Store UK"
          width="150px"
        /></a>
      </div>
      <class="nav-items">
        <a href="vinyl-page.php">Vinyl</a>
        <a href="cd-page.php">CD</a>
        <?php
          if (isset($_SESSION["useruid"])) {
            echo "<a href='cd-page.php'>My Profile</a>";
            echo "<a href='includes/logout.inc.php'>Logout</a>";
          }
          else {
            echo "<a href='login-page.php'>Login/Sign Up</a>";
          }
        ?>
      </div>
    </nav>