<?php include_once 'header.php'; ?>

    <div class="cart-user-info">
        <?php
          if (isset($_SESSION["useruid"])) {
            echo "<p>Welcome " . $_SESSION["useruid"] . "</p>";
          }
    ?>
    </div>
    <h2 class="video-description">We hope you are able to find everything you where looking for!</h2>
    <div class="cat-image">
      <img src="assets/login_assets/SpinCat.gif" alt="Spinny Cat" style="width:700px;height:500px;">
    </div>

    <?php include_once 'footer.php'; ?>