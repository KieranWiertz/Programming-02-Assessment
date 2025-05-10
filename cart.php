<?php include_once 'header.php'; ?>

    <div class="cart-user-info">
        <?php
          if (isset($_SESSION["useruid"])) {
            echo "<p>" . $_SESSION["useruid"] . "'s Cart</p>";
          }
        ?>
    </div>
    <h2 class="video-description">We hope you are able to find everything<br>Check out when ready!</h2>

    <div class="checkout-system">

    </div>
<?php include_once 'footer.php'; ?>