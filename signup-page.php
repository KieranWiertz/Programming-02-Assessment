<?php include_once 'header.php'; ?>

    <div class="signup-body">
      <div class="wrapper">
        <h1>Sign Up</h1>
        <form action="includes/signup.inc.php" method="post">
          <div class="input-box">
            <input type="text" name="name" placeholder="Full Name" required />
            <i class="bx bxs-user"></i>
          </div>
          <div class="input-box">
            <input type="text" name="email" placeholder="E-Mail" required />
            <i class="bx bxs-envelope"></i>
          </div>
          <div class="input-box">
            <input type="text" name="uid" placeholder="Username" required />
            <i class="bx bxs-user"></i>
          </div>
          <div class="input-box">
            <input type="password" name="pwd" placeholder="Password" required />
            <i class="bx bxs-lock-alt"></i>
          </div>
          <div class="input-box">
            <input type="password" name="pwdrepeat" placeholder="Confirm Password" required />
            <i class="bx bxs-lock-alt"></i>
          </div>

          <button type="submit" name="submit" class="btn">Sign Up</button>


        </form>
          <?php
          if (isset($_GET["error"])) {
            if ($_GET["error"] == "emptyinput") {
              echo "<p>Make sure to fill in all fields</p>";
            }
            else if ($_GET["error"] == "invaliduid") {
              echo "<p>Make sure to choose a proper username!</p>";
            }
            else if ($_GET["error"] == "invalidemail") {
              echo "<p>Make sure to choose a proper E-Mail!</p>";
            }
            else if ($_GET["error"] == "passwordsdontmatch") {
              echo "<p>Make sure your passwords match!</p>";
            }
            else if ($_GET["error"] == "stmtfailed") {
              echo "<p>Something went wrong, try again!</p>";
            }
            else if ($_GET["error"] == "usernametaken") {
              echo "<p>That username already exists, try again!</p>";
            }
            else if ($_GET["error"] == "none") {
              echo "<p>You have signed up, Welcome!</p>";
            }
          }
          ?>
      </div>
    </div>

<?php include_once 'footer.php'; ?>