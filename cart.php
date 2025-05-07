<?php include_once 'header.php'; ?>

    <div class="cart-user-info">
        <?php
          if (isset($_SESSION["useruid"])) {
            echo "<p>" . $_SESSION["useruid"] . "'s Shopping Cart </p>";
          }
    ?>
    </div>
    <h2 class="cart-info">We hope you where able to find whatever you where looking for!<br>Check out your items here</h2>

    <div class="cart-items">
        
    </div>

<?php include_once 'footer.php'; ?>