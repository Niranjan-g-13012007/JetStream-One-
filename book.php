<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Book Your Flight - JetStream One</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
  <style>
    body {
      margin: 0;
      font-family: Arial, sans-serif;
      background-color: #f9f9f9;
    }
    .header {
      background-color: #023e93;
      padding: 10px 20px;
      color: white;
      display: flex;
      align-items: center;
      justify-content: space-between;
    }

    .logo-title {
      display: flex;
      align-items: center;
      gap: 15px;
    }

    .logo-title img {
      height: 80px;
    }

    .logo-title .text {
      text-align: left;
    }

    .logo-title .text h1 {
      margin: 0;
      font-size: 36px;
    }

    .logo-title .text h4 {
      margin: 0;
      font-size: 18px;
    }

    .header-buttons {
      display: flex;
      gap: 20px;
      align-items: center;
    }
    .header-buttons .btn-link {
      background: linear-gradient(135deg, #023e93 0%, #082f6d 100%);
      color: white;
      text-decoration: none;
      padding: 14px 30px;
      border-radius: 25px;
      font-size: 17px;
      font-weight: 600;
      display: inline-flex;
      align-items: center;
      gap: 8px;
      transition: all 0.3s ease;
      box-shadow: 0 4px 15px rgba(2, 62, 147, 0.2);
    }
    .header-buttons .btn-link:hover {
      transform: translateY(-2px);
      box-shadow: 0 6px 20px rgba(2, 62, 147, 0.3);
      background: linear-gradient(135deg, #014fbc 0%, #086af7 100%);
    }

    .navbar {
      background-color: #082f6d;
      overflow: hidden;
      display: flex;
      padding: 10px 20px;
    }

    .navbar a {
      color: white;
      padding: 10px 15px;
      text-decoration: none;
      font-weight: bold;
    }

    .navbar a:hover {
      background-color: #315cab;
      border-radius: 4px;
    }

    marquee {
      color: white;
      background-color: rgb(140, 166, 194);
      font-size: 18px;
      padding: 10px;
      display: block;
    }

    marquee a {
      color: rgb(13, 0, 255);
      text-decoration: underline;
    }

    .booking-section {
      display: flex;
      justify-content: space-between;
      gap: 20px;
      margin-bottom: 40px;
    }
    .booking-form {
      flex: 1;
      background-color: white;
      padding: 20px;
      border-radius: 10px;
      box-shadow: 0 0 10px rgba(0,0,0,0.1);
    }
    .booking-form h3 {
      margin-bottom: 20px;
      color: #003366;
    }
    .booking-form {
    border: 1px solid #ddd;
    border-radius: 10px;
    padding: 20px;
    transition: box-shadow 0.3s ease, transform 0.3s ease;
    background-color: #fff;
    margin-bottom: 20px;
  }

  .booking-form:hover {
    box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
    transform: translateY(-5px);
  }
    .addons-container {
      background-color: #e9f1ff;
      padding: 30px;
      margin-bottom: 40px;
      border-radius: 10px;
    }
    .carousel-item img {
      height: 400px;
      object-fit: cover;
      border-radius: 8px;
    }
    .carousel-caption {
      background: rgba(0,0,0,0.5);
      padding: 10px;
      border-radius: 5px;
    }
    .carousel-button {
      margin-top: 20px;
    }
    .footer {
    background-color: #1351a7;
    padding: 10px;
    text-align: center;
    }
  </style>
</head>
<body>

<div class="header">
  <div class="logo-title">
    <img src="airplaneheader.png"JetStream One Logo">
    <div class="text">
      <h1 style="color: white;">JetStream One</h1>
      <h4>Fly Smarter Go Further</h4>
    </div>
  </div>
  <div class="header-buttons gap-1">
    <?php if (isset($_SESSION['username'])): ?>
  <div class="d-flex align-items-center ms-3 gap-3">
    <span class="me-2 fw-semibold text-white"> <img src="https://cdn-icons-png.flaticon.com/512/3135/3135715.png" alt="Avatar" style="width:36px;height:36px;border-radius:50%;margin-right:8px;">
 <?= htmlspecialchars($_SESSION['username']) ?></span>
    <a href="logout.php" class="btn-link">Logout</a>
  </div>
<?php else: ?>
  <div class="d-flex ms-3 gap-1">
    <a href="login.php" class="btn-link">Login</a>
    <a href="signup.php" class="btn-link">Sign Up</a>
  </div>
<?php endif; ?>
  </div>
</div>

<div class="navbar">
  <a href="index.php">Home</a>
  <a href="book.php">Book</a>
  <a href="trips.php">Trips</a>
  <a href="offers.php">Offers</a>
  <a href="#about">About Us</a>
</div>

<marquee>
  Welcome Aboard JetStream Airlines — Elevate your travel experience with us!
</marquee>
<h1 class="text-center text-primary mb-5">Book Your Journey with JetStream One</h1>

<div class="booking-section">
  <div class="booking-form">
    <h3>International Booking</h3>
    <form>
      <div class="mb-3">
        <label class="form-label">From</label>
        <input type="text" class="form-control" placeholder="City or Airport">
      </div>
      <div class="mb-3">
        <label class="form-label">To</label>
        <input type="text" class="form-control" placeholder="City or Airport">
      </div>
      <div class="mb-3">
        <label class="form-label">Departure Date</label>
        <input type="date" class="form-control">
      </div>
      <div class="mb-3">
  <label class="form-label">Travel Class</label>
  <select class="form-select">
    <option selected disabled>Select Class</option>
    <option>Economy</option>
    <option>Premium Economy</option>
    <option>Business</option>
    <option>First Class</option>
  </select>
</div>
      <button type="submit" class="btn btn-primary">Search Flights</button>
    </form>
  </div>

  <div class="booking-form">
    <h3>Domestic Booking</h3>
    <form>
      <div class="mb-3">
        <label class="form-label">From</label>
        <input type="text" class="form-control" placeholder="City or Airport">
      </div>
      <div class="mb-3">
        <label class="form-label">To</label>
        <input type="text" class="form-control" placeholder="City or Airport">
      </div>
      <div class="mb-3">
        <label class="form-label">Departure Date</label>
        <input type="date" class="form-control">
      </div>
      <div class="mb-3">
  <label class="form-label">Travel Class</label>
  <select class="form-select">
    <option selected disabled>Select Class</option>
    <option>Economy</option>
    <option>Premium Economy</option>
    <option>Business</option>
    <option>First Class</option>
  </select>
</div>
      <button type="submit" class="btn btn-primary">Search Flights</button>
    </form>
  </div>
</div>
<div class="addons-container text-center">
  <h2 class="mb-4">🌟 Recommended Add-ons</h2>
  <div id="addonsCarousel" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="jetmax.jpg" class="d-block w-100" alt="JetMax">
        <div class="carousel-caption d-none d-md-block">
          <h5>JetMax</h5>
          <p>Enjoy extra legroom, priority check-in, and premium meals with JetMax.</p>
        </div>
      </div>
      <div class="carousel-item">
        <img src="jetcafejpeg.jpg" class="d-block w-100" alt="JetCafe">
        <div class="carousel-caption d-none d-md-block">
          <h5>JetCafe</h5>
          <p>Savor gourmet meals and beverages on board with our JetCafe service.</p>
        </div>
      </div>
      <div class="carousel-item">
        <img src="baggage.avif" class="d-block w-100" alt="Excess Baggage">
        <div class="carousel-caption d-none d-md-block">
          <h5>Excess Baggage</h5>
          <p>Travel worry-free by pre-purchasing additional baggage allowance.</p>
        </div>
      </div>
      <div class="carousel-item">
        <img src="jetplus.avif" class="d-block w-100" alt="JetPlus">
        <div class="carousel-caption d-none d-md-block">
          <h5>JetPlus</h5>
          <p>Upgrade your journey with lounge access, fast track security, and more.</p>
        </div>
      </div>
      <div class="carousel-item">
        <img src="extraseat.avif" class="d-block w-100" alt="Extra Seat">
        <div class="carousel-caption d-none d-md-block">
          <h5>Extra Seat</h5>
          <p>Need more space? Book an extra seat for added comfort and privacy.</p>
        </div>
      </div>
      <div class="carousel-item">
        <img src="priorityboarding.jpeg" class="d-block w-100" alt="Priority Boarding">
        <div class="carousel-caption d-none d-md-block">
          <h5>Priority Boarding</h5>
          <p>Skip the queues and board first with our Priority Boarding service.</p>
        </div>
      </div>
      <div class="carousel-item">
        <img src="travelinsuranceavif.avif" class="d-block w-100" alt="Travel Insurance">
        <div class="carousel-caption d-none d-md-block">
          <h5>Travel Insurance</h5>
          <p>Protect your trip with comprehensive travel insurance coverage.</p>
        </div>
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#addonsCarousel" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#addonsCarousel" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
    </button>
  </div>
  <div class="carousel-button">
    <a href="#" class="btn btn-success mt-4">Add to Booking</a>
  </div>
</div>
<div class="footer" id="about">
   <h5 style="color:white">© 2025 JetStream One. All Rights Reserved </h5>
   <h5 style="color:white">JetStream One | Privacy Statement | Terms of Use</h5>
   <h5 style="color:white"><a href="aboutus.php" target="_self" style="color: white">About us</a> |<a href="customersupport.php" target="_self" style="color : white"> Customer Support</a> | Policy | Media & Gallery</h5>
  </div>
  </div>
</body>
</html>