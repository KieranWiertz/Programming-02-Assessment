<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="styles.css" />
    <title>Record Store UK</title>
  </head>
  <body>
    <nav>
      <div class="logo">
        <img
          src="assets/index_assets/recordstorelogo.png"
          alt="Record Store UK"
          width="150px"
        />
      </div>
      <div class="nav-items">
        <a href="vinyl-page.php">Vinyl</a>
        <a href="cd-page.php">CD</a>
        <a href="login-page.php">Login</a>
      </div>
    </nav>
    <section class="hero">
      <div class="hero-container">
        <div class="colum-left">
          <h1>Your local online Recordstore</h1>
          <p>
            The home of signed, exclusive and limited edition releases. Shop
            vinyl, CDs and more.
          </p>
          <a href="signup-page.php"><button>Sign Up</button></a>
        </div>
        <div class="colum-right">
          <img
            src="assets/index_assets/rsd_logo.png"
            alt="RSD Logo"
            class="hero-image"
          />
        </div>
      </div>
    </section>

    <section class="best-seller">
      <h1 class="Best-Seller-Title">Best Sellers</h1>
      <div class="product-card-wrapper">
        <div class="product-card">
          <div class="product-card-img">
            <img src="assets/product_assets/GDragonCD.jpg" alt="G-Dragon CD" />
            <div class="product-card-overlay">
              <button class="add-to-cart-btn">Add to Cart</button>
              <button class="view-detail-btn">View Details</button>
            </div>
          </div>
          <div class="product-card-info">
            <h3>Kwon Ji Yong | CD</h3>
            <p class="product-card-price">£24.99</p>
            <p>A deeply personal EP that strips away G-Dragon's stage persona, revealing themes of fame, identity, and vulnerability.</p>
          </div>
        </div>

        <div class="product-card">
          <div class="product-card-img">
            <img src="assets/product_assets/TomMischVinyl.jpg" alt="Tom Misch Vinyl" />
            <div class="product-card-overlay">
              <button class="add-to-cart-btn">Add to Cart</button>
              <button class="view-detail-btn">View Details</button>
            </div>
          </div>
          <div class="product-card-info">
            <h3>What Kinda Music | Vinyl</h3>
            <p class="product-card-price">£24.99</p>
            <p>A seamless fusion of jazz, electronic, and R&B, driven by Misch's smooth melodies and Dayes' intricate drumming.</p>
          </div>
        </div>

        <div class="product-card">
          <div class="product-card-img">
            <img src="assets/product_assets/JeffBuckleyCD.jpg" alt="Jeff Buckley CD" />
            <div class="product-card-overlay">
              <button class="add-to-cart-btn">Add to Cart</button>
              <button class="view-detail-btn">View Details</button>
            </div>
          </div>
          <div class="product-card-info">
            <h3>Grace | CD</h3>
            <p class="product-card-price">£24.99</p>
            <p>A hauntingly beautiful mix of rock, folk, and blues, showcasing Buckley's soaring vocals and deep emotional intensity.</p>
          </div>
        </div>

        <div class="product-card">
          <div class="product-card-img">
            <img src="assets/product_assets/TalkingHeadsVinyl.jpg" alt="Talking Heads Vinyl" />
            <div class="product-card-overlay">
              <button class="add-to-cart-btn">Add to Cart</button>
              <button class="view-detail-btn">View Details</button>
            </div>
          </div>
          <div class="product-card-info">
            <h3>Remain in Light | Vinyl</h3>
            <p class="product-card-price">£24.99</p>
            <p>An innovative blend of post-punk, funk, and African rhythms, pushing the boundaries of rock music. Hypnotic grooves and layered textures.</p>
          </div>
        </div>
      </div>
    </section>

    <footer>
      <div class="footer-container">
        <div class="footer-heading footer-1">
          <h2>Contact Us</h2>
          <h3>Email:<br> Contact@RecordStore.co.uk</h3>
          <h3>Phone:<br> 07 123 123 123</h3>
          <h3>Address:<br> 123 Test Street<br>Testville<br>Testland</h3>
       </div>
       <div class="footer-heading footer-2">
          <h2>Categories</h2>
          <a href="vinyl-page.php">Vinyl</a>
          <a href="cd-page.php">CD</a>
          <a href="login-page.php">Login</a>
          <a href="signup-page.php">Sign Up</a>
       </div>
       <div class="footer-heading footer-3">
          <h2>Social Media</h2>
          <a href="#">Instagram</a>
          <a href="#">Facebook</a>
          <a href="#">YouTube</a>
          <a href="#">Twitter</a>
       </div>
       <div class="footer-newsletter">
        <h2>Join Our Newsletter</h2>
        <input type= "email" placeholder="Enter Your Email Address" id="footer-email">
        <input type="submit" value="Join" id="footer-newsletter-btn">
       </div>
      </div>
    </footer>

  </body>
</html>
