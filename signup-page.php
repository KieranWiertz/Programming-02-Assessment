<?php include_once 'header.php'; ?>

    <div class="login-body">
      <div class="wrapper">
        <form action="">
          <h1>Sign Up</h1>
          <div class="input-box">
            <input type="text" placeholder="Username" required />
            <i class="bx bxs-user"></i>
          </div>
          <div class="input-box">
            <input type="email" placeholder="E-Mail" required />
            <i class="bx bxs-envelope"></i>
          </div>
          <div class="input-box">
            <input type="password" placeholder="Password" required />
            <i class="bx bxs-lock-alt"></i>
          </div>
          <div class="input-box">
            <input type="password" placeholder="Confirm Password" required />
            <i class="bx bxs-lock-alt"></i>
          </div>

          <button type="submit" class="btn">Sign Up</button>
        </form>
      </div>
    </div>

<?php include_once 'footer.php'; ?>