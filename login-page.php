<?php include_once 'header.php'; ?>

    <div class="login-body">
      <div class="wrapper">
        <h1>Login</h1>
        <form action="includes/login.inc.php" method="post">
          <div class="input-box">
            <input type="text" name="name" placeholder="Username/E-mail" required />
            <i class="bx bxs-user"></i>
          </div>
          <div class="input-box">
            <input type="password" name="pwd" placeholder="Password" required />
            <i class="bx bxs-lock-alt"></i>
          </div>

          <div class="remember-forgot">
            <label><input type="checkbox" /> Remember me</label>
          </div>

          <button type="submit" name="submit" class="btn">Login</button>

          <div class="register-link">
            <p>Don't have an account? <a href="signup-page.php">Register</a></p>
          </div>
        </form>
      </div>
    </div>
<?php include_once 'footer.php'; ?>