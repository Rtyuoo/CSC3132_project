<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Smart Living Furniture – Your Style, Your Furniture</title>
  <!-- Bootstrap CSS -->
  <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
  <style>
    body {
      font-family: Arial, sans-serif;
      color: #333;
    }

    /* Navbar */
    .navbar {
      background-color: #3A2B3C;
    }

    .navbar-brand, .navbar-nav .nav-link {
      color: #FFFFFF !important;
    }

    /* Hero Section */
    .hero {
      background: linear-gradient(to right, #f8b400, #ff5733);
      color: #fff;
      padding: 60px 0;
      text-align: center;
    }

    .hero h1 {
      font-size: 2.8rem;
      font-weight: bold;
      margin-bottom: 20px;
    }

    .hero p {
      font-size: 1.2rem;
      margin-bottom: 30px;
    }

    .btn-hero {
      background-color: #3A3B3C;
      color: #fff;
      padding: 10px 20px;
      border-radius: 5px;
      text-transform: uppercase;
    }

    .btn-hero:hover {
      background-color: #2C2D2E;
    }

    /* Features Section */
    .features-section {
      padding: 40px;
      background-color: #f8f4f9;
    }

    .feature-box {
      background-color: #fff;
      padding: 30px;
      border-radius: 8px;
      text-align: center;
      transition: transform 0.3s ease;
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    }

    .feature-box:hover {
      transform: scale(1.05);
    }

    .feature-box h3 {
      color: #3A3B3C;
      font-weight: bold;
      margin-bottom: 15px;
    }

    .feature-box p {
      color: #666;
      font-size: 1rem;
    }

    .feature-image {
      width: 100%;
      border-radius: 8px;
      margin-bottom: 20px;
    }

    /* Product Categories Section */
    .categories {
      padding: 40px 20px;
    }

    .category-box {
      text-align: center;
      padding: 20px;
      background-color: #e9ecef;
      border-radius: 8px;
      transition: transform 0.3s ease;
    }

    .category-box:hover {
      transform: scale(1.05);
      background-color: #f8b400;
      color: #fff;
    }

    /* Testimonials Section */
    .testimonials {
      background: linear-gradient(to right, #3498db, #8e44ad);
      color: #fff;
      padding: 40px 20px;
      margin-top: 40px;
      text-align: center;
    }

    .testimonial {
      font-style: italic;
      color: #f8b400;
    }

    .testimonial-author {
      margin-top: 10px;
      font-weight: bold;
      color: #fff;
    }

    /* Footer */
    .footer {
      background-color: #3A3B3C;
      color: #f8b400;
      padding: 20px;
      text-align: center;
      margin-top: 40px;
    }

    .footer a {
      color: #f8b400;
    }

    .footer a:hover {
      color: #fff;
      text-decoration: none;
    }
  </style>
</head>
<body>

  <!-- Navbar -->
  <nav class="navbar navbar-expand-lg">
    <a class="navbar-brand" href="#">Smart Living Furniture</a>
    <div class="collapse navbar-collapse">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item"><a class="nav-link" href="#">Home</a></li>
        <li class="nav-item"><a class="nav-link" href="#">Products</a></li>
        <li class="nav-item"><a class="nav-link" href="#">About Us</a></li>
        <li class="nav-item"><a class="nav-link" href="#">Contact</a></li>
      </ul>
    </div>
  </nav>

  <!-- Hero Section -->
  <section class="hero">
    <h1>Your Style, Your Furniture</h1>
    <p>Discover a wide range of stylish furniture for every room in your home.</p>
    <a href="#" class="btn btn-hero">Shop Now</a>
  </section>

  <!-- Features Section -->
  <section class="features-section">
    <div class="container">
      <div class="row">
        <div class="col-md-4 mb-4">
          <div class="feature-box">
            <img src="https://media.designcafe.com/wp-content/uploads/2020/03/21012613/luxury-living-room-designs.jpg" alt="Living Room" class="feature-image">
            <h3>Living Room</h3>
            <p>Enhance your living space with comfortable and stylish furniture pieces.</p>
          </div>
        </div>
        <div class="col-md-4 mb-4">
          <div class="feature-box">
            <img src="https://www.craftedbeds.co.uk/cdn/shop/articles/c6229643564835.57f4204983b16.jpg?v=1654414798" alt="Bedroom" class="feature-image">
            <h3>Bedroom</h3>
            <p>Create a cozy and stylish retreat with our bedroom furniture collection.</p>
          </div>
        </div>
        <div class="col-md-4 mb-4">
          <div class="feature-box">
            <img src="https://www.jetwinghotels.com/jetwingmahesabhawan/wp-content/uploads/sites/42/2022/05/mahesa-bhawan-dining-room-gal-5-744x653-1.jpg" alt="Dining Room" class="feature-image">
            <h3>Dining Room</h3>
            <p>Make every meal special with elegant dining room furniture.</p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Product Categories Section -->
<section class="categories">
  <div class="container text-center">
    <h2>Explore by Category</h2>
    <div class="row mt-4">
      <div class="col-md-3 mb-4">
        <a href="living-room.html">
          <div class="category-box p-3">
            <h4>Living Room</h4>
          </div>
        </a>
      </div>
      <div class="col-md-3 mb-4">
        <div class="category-box p-3">
          <h4>Bedroom</h4>
        </div>
      </div>
      <div class="col-md-3 mb-4">
        <div class="category-box p-3">
          <h4>Dining Room</h4>
        </div>
      </div>
      <div class="col-md-3 mb-4">
        <div class="category-box p-3">
          <h4>Office</h4>
        </div>
      </div>
    </div>
  </div>
</section>


  <!-- Testimonials Section -->
  <section class="testimonials">
    <h2>What Our Customers Say</h2>
    <div class="container mt-4">
      <div class="row">
        <div class="col-md-4 text-center">
          <img src="https://via.placeholder.com/100" alt="John" class="rounded-circle mb-3">
          <p class="testimonial">"Smart Living Furniture has transformed my living space. High-quality and stylish!"</p>
          <p class="testimonial-author">- John, Customer</p>
        </div>
        <div class="col-md-4 text-center">
          <img src="https://via.placeholder.com/100" alt="Emma" class="rounded-circle mb-3">
          <p class="testimonial">"A wide range of products that are exactly what I needed for my new home."</p>
          <p class="testimonial-author">- Emma, Customer</p>
        </div>
        <div class="col-md-4 text-center">
          <img src="https://via.placeholder.com/100" alt="Liam" class="rounded-circle mb-3">
          <p class="testimonial">"Great quality and fast delivery. Highly recommend Smart Living Furniture!"</p>
          <p class="testimonial-author">- Liam, Customer</p>
        </div>
      </div>
    </div>
  </section>

  <!-- Footer -->
  <footer class="footer">
    <p>&copy; 2024 Smart Living Furniture. All rights reserved.</p>
    <p><a href="#">Privacy Policy</a> | <a href="#">Terms of Service</a></p>
  </footer>

</body>
</html>