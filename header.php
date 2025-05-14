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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Record Store UK</title>
  </head>
  <body>
    <nav>
      <div class="logo" align="center">
        <a href="index.php"><img
          src="assets/index_assets/recordstorelogo.png"
          alt="Record Store UK"
          width="150px"
        /></a>
      </div>
      <div class="topnav" id="myTopnav">
        <a href="products.php">Products</a>        
        <?php
          if (isset($_SESSION["useruid"])) {
            echo "<a href='profile.php'>Profile</a>";
            echo "<a href='includes/logout.inc.php'>Logout</a>";
          }
          else {
            echo "<a href='login-page.php'>Login/Sign Up</a>";
          }
        ?>
        <a href="cart.php">Cart</a>
        <a href="javascript:void(0);" class="icon" onclick="myFunction()">
         <i class="fa fa-bars"></i></a>
      </div>
    </nav>

    <button onclick="topFunction()" id="topBtn" title="Go to top"><i class='bx bx-up-arrow-alt'></i></button>