<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Smart Living Furniture – Living Room Collection</title>
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
      font-size: 3rem;
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

    /* Living Room Gallery Section */
    .gallery-section {
      padding: 40px 20px;
      background-color: #f8f4f9;
    }

    .gallery-box {
      background-color: #fff;
      padding: 30px;
      border-radius: 8px;
      text-align: center;
      transition: transform 0.3s ease;
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    }

    .gallery-box:hover {
      transform: scale(1.05);
    }

    .gallery-box h3 {
      color: #3A3B3C;
      font-weight: bold;
      margin-bottom: 15px;
    }

    .gallery-image {
      width: 100%;
      border-radius: 8px;
      margin-bottom: 20px;
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
        <li class="nav-item"><a class="nav-link" href="index.html">Home</a></li>
        <li class="nav-item"><a class="nav-link" href="#">Products</a></li>
        <li class="nav-item"><a class="nav-link" href="#">About Us</a></li>
        <li class="nav-item"><a class="nav-link" href="#">Contact</a></li>
      </ul>
    </div>
  </nav>

  <!-- Hero Section -->
  <section class="hero">
    <h1>Living Room Collection</h1>
    <p>Transform your living space with stylish, comfortable, and functional furniture.</p>
    <a href="#" class="btn btn-hero">Shop Now</a>
  </section>

  <!-- Living Room Gallery Section -->
  <section class="gallery-section">
    <div class="container">
      <div class="row">
        <div class="col-md-4 mb-4">
          <div class="gallery-box">
            <img src="https://media.designcafe.com/wp-content/uploads/2020/03/21012613/luxury-living-room-designs.jpg" alt="Living Room 1" class="gallery-image">
            <h3>Elegant Living Room</h3>
            <p>Discover luxury with soft fabrics and modern designs.</p>
          </div>
        </div>
        <div class="col-md-4 mb-4">
          <div class="gallery-box">
            <img src="https://www.home-designing.com/wp-content/uploads/2016/05/14be4f36599117.5721f88a0bc82.jpg" alt="Living Room 2" class="gallery-image">
            <h3>Modern Minimalism</h3>
            <p>Choose from sleek, modern designs that add sophistication to your space.</p>
          </div>
        </div>
        <div class="col-md-4 mb-4">
          <div class="gallery-box">
            <img src="https://st.hzcdn.com/simgs/99d1ea570d598a16_14-2346/_.jpg" alt="Living Room 3" class="gallery-image">
            <h3>Comfort & Style</h3>
            <p>Relax with plush sofas and elegant accessories that create the perfect ambiance.</p>
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
          <p class="testimonial">"The living room set I purchased transformed my space. Very stylish!"</p>
          <p class="testimonial-author">- John, Customer</p>
        </div>
        <div class="col-md-4 text-center">
          <img src="https://via.placeholder.com/100" alt="Emma" class="rounded-circle mb-3">
          <p class="testimonial">"Perfect furniture for my living room. Quality and comfort in one!"</p>
          <p class="testimonial-author">- Emma, Customer</p>
        </div>
        <div class="col-md-4 text-center">
          <img src="https://via.placeholder.com/100" alt="Liam" class="rounded-circle mb-3">
          <p class="testimonial">"I love my new living room. Thanks, Smart Living Furniture!"</p>
          <p class="testimonial-author">- Liam, Customer</p>
        </div>
      </div>
    </div>
  </section>

  <!-- Footer -->
  <footer class="footer">
    <p>&copy; 2024 Smart Living Furniture. All rights reserved.</p>
    <p><a href="#">Privacy Policy</a> |