<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Furniture Shop</title>
  <link rel="stylesheet" href="styles.css">
  <link rel="stylesheet"
  href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">
</head>
<body>
  <!-- Header Section -->
  <header>
    <div class="container">
      <!-- Logo -->
      <div class="logo">
        <i class='bx bxs-home-heart'></i>
        
        <h1>Smart Furniture</h1>
      </div>
      
      <!-- Navigation Menu -->
      <nav>
        <ul>
          <li><a href="#">Home</a></li>
          <li><a href="#">Shop</a></li>
          <li><a href="#">About Us</a></li>
          <li><a href="#">Contact</a></li>
          <li><a href="#">Blog</a></li>
          <?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email = $_POST['email'];
    setcookie("user_email", $email, time() + 3600, "/"); // 1-hour cookie
    header("Location: ../index.html");
    exit();
}
?>

          <li id="login-link" style="display: none;"><a href="login/index.php">Login</a></li>
          <li id="user-menu" style="display: none;">
            <a href="#" id="profile-link">Profile</a>
            <ul class="dropdown">
              <li id="user-email" style="display: none;"></li>
              <li><a href="#">Card</a></li>
              <li><a href="login/logout.php" id="logout-link">Logout</a></li>
            </ul>
          </li>
          <li><a href="about/index.php">About Us</a></li>
          
        </ul>
      </nav>
    </div>
  </header>
  <section class="hero">
    <div class="hero-content">
      <h1>Transform Your Space with Premium Furniture</h1>
      <p>Discover stylish, comfortable, and sustainable designs that fit your home.</p>
      <a href="#shop" class="cta-button">Shop Now</a>
    </div>
  </section>
  <!-- Additional Content -->
  <section class="features">
    <div class="feature-item">
      <i class='bx bx-leaf'></i>
      <h2>Sustainable Materials</h2>
      <p>Eco-friendly furniture made with sustainable resources.</p>
    </div>
    <div class="feature-item">
      <i class='bx bx-smile'></i>
      <h2>Comfort First</h2>
      <p>Designed to bring comfort and style to your living space.</p>
    </div>
    <div class="feature-item">
      <i class='bx bx-star'></i>
      <h2>Top Quality</h2>
      <p>Crafted with care and precision for long-lasting durability.</p>
    </div>
  </section>

  <script src="script.js"></script>
</body>
</html>