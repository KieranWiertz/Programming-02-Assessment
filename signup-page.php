<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Sign Up</title>
    <link rel="stylesheet" href="styles.css?v=<?php echo time(); ?>">
    <link
      href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css"
      rel="stylesheet"
    />
  </head>
  <body>
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
  </body>
</html>
