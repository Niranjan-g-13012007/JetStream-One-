<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Offers @JetStream One</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

  <style>
    body {
      margin: 0;
      font-family: Arial, sans-serif;
      background-color: white;
      background-image: url("plane.jpg");
      background-size: 7000px;
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

    h2, h3 {
      color: #003366;
      margin-top: 30px;
    }

    .card {
      border: none;
      box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
      transition: transform 0.2s ease;
    }

    .card:hover {
      transform: scale(1.03);
    }

    .footer {
      background-color: #1351a7;
      padding: 20px;
      text-align: center;
      margin-top: 40px;
    }

    .footer h4 a {
      color: white;
      text-decoration: underline;
    }
  </style>
</head>
<body>

<div class="header">
  <div class="logo-title">
    <img src="airplaneheader.png" alt="JetStream One Logo">
    <div class="text">
      <h1 style="color: white">JetStream One</h1>
      <h4>Fly Smarter Go Further</h4>
    </div>
  </div>
  <div class="header-buttons">
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
  <a href="aboutus.php">About Us</a>
</div>

<marquee>
  Unlock Exclusive Deals on JetStream One - Travel More, Pay Less!
</marquee>

<div class="container text-center">
  <h2>Exclusive <span class="text-primary">Offers</span> Just for You!</h2>
  <p>Explore our latest promotions and seasonal deals to fly smarter and save more.</p>
</div>

<div class="container my-5">
  <div class="row g-4">

    <div class="col-md-6 col-lg-4">
      <div class="card p-3 h-100">
        <div class="card-body">
          <h5 class="card-title text-primary">JetSaver Sale</h5>
          <p class="card-text">Get up to <strong>50% off</strong> on domestic flights booked before <strong>June 30, 2025</strong>.</p>
        </div>
      </div>
    </div>

    <div class="col-md-6 col-lg-4">
      <div class="card p-3 h-100">
        <div class="card-body">
          <h5 class="card-title text-primary">Student Special</h5>
          <p class="card-text">Enjoy <strong>extra 10kg baggage</strong> and <strong>flexible date changes</strong> with your student ID.</p>
        </div>
      </div>
    </div>

    <div class="col-md-6 col-lg-4">
      <div class="card p-3 h-100">
        <div class="card-body">
          <h5 class="card-title text-primary">Weekend Wonder</h5>
          <p class="card-text">Book a round trip on <strong>Friday</strong> and get <strong>20% off</strong> your return fare!</p>
        </div>
      </div>
    </div>

    <div class="col-md-6 col-lg-4">
      <div class="card p-3 h-100">
        <div class="card-body">
          <h5 class="card-title text-primary">Fly Early, Save More</h5>
          <p class="card-text">Book your flights <strong>60 days in advance</strong> to unlock special early-bird discounts.</p>
        </div>
      </div>
    </div>

    <div class="col-md-6 col-lg-4">
      <div class="card p-3 h-100">
        <div class="card-body">
          <h5 class="card-title text-primary">JetStream Miles</h5>
          <p class="card-text">Earn points on every trip. Redeem them for <strong>free flights</strong>, upgrades, and more.</p>
        </div>
      </div>
    </div>

    <div class="col-md-6 col-lg-4">
      <div class="card p-3 h-100">
        <div class="card-body">
          <h5 class="card-title text-primary">Group & Corporate Deals</h5>
          <p class="card-text">Special packages available for groups and businesses. <strong>Contact us</strong> for a custom quote.</p>
        </div>
      </div>
    </div>

  </div>
</div>

<div class="footer" id="about">
   <h5 style="color:white">© 2025 JetStream One. All Rights Reserved </h5>
   <h5 style="color:white">JetStream One | Privacy Statement | Terms of Use</h5>
   <h5 style="color:white"><a href="aboutus.php" target="_self" style="color: white">About us</a> |<a href="customersupport.php" target="_self" style="color : white"> Customer Support</a> | Policy | Media & Gallery</h5>
  </div>


</body>
</html>
