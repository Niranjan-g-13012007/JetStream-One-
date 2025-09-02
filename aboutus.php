<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>about us @JetStream One</title>
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
    .image{
  display: flex;
  justify-content: center;
  margin: 40px 0;
}
    .container {
      max-width: 1000px;
      margin: 40px auto;
      padding: 20px;
    }

    h2 {
      font-size: 36px;
      color: #003366;
    }

    h3 {
      font-size: 28px;
      color: #004080;
      margin-top: 40px;
    }

    p {
      font-size: 18px;
      line-height: 1.7;
      margin-top: 10px;
    }

    .highlight {
      color: #00aaff;
      font-weight: bold;
    }


.image img {
  width: 100%;
  max-width: 1000px;
  height: auto;
  border-radius: 20px;
  box-shadow: 0 10px 20px rgba(0, 0, 0, 0.1);
}
.footer {
    background-color: #1351a7;
    padding: 20px;
    text-align: center;
    }
    </style>
</head>
<body>

<div class="header">
  <div class="logo-title">
    <img src="airplaneheader.png"JetStream One Logo">
    <div class="text">
      <h1 style="color: white">JetStream One</h1>
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
  <a href="aboutus.php">About Us</a>
</div>

<marquee>
  Welcome Aboard JetStream Airlines — Elevate your travel experience with us!
  &nbsp;&nbsp;
  <a href="https://www.goindigo.in/" target="_blank">Book Now!!</a>
</marquee>
<div class="image">
   <img src="aero.jpg" alt="JetStream Aircraft">
</div>
 <div class="container">
    <h2>About <span class="highlight">JetStream One</span></h2>
     <p>JetStream One is India's newest and most dynamic passenger airline, rapidly emerging as one of the fastest-growing carriers in the country.</p>
     <p>We operate with a clear mission: to provide fares that are affordable, ensure flights are on time, and offer a seamless, courteous travel experience across an expansive domestic and international network. We prove that cost-efficiency does not compromise quality. With a growing fleet of advanced aircraft, JetStream One operates hundreds of daily flights, connecting numerous destinations across India and abroad.</p>
     <p>In our first year alone, we've proudly served millions of customers and continue to scale new heights in punctuality and service excellence. At JetStream One, we are on a journey to broaden our reach—transitioning from a domestic airline to a globally recognized aviation brand.</p>
     <h3>India by <span class="highlight">JetStream</span></h3>
     <p>From day one, JetStream One has aimed to connect the vast and diverse regions of India, while promoting social unity, mobility, and economic development. Through our unmatched network, we make air travel accessible to major metros as well as underserved towns and regions.</p>
     <p>Whether you're flying for the first time or the hundredth, our passengers know JetStream One as more than an airline—it's a movement that bridges communities, aspirations, and dreams. Our purpose is simple and powerful: <em>"Giving wings to the nation, by connecting people and possibilities."</em></p>
     <h3>Our People and Our Values</h3>
     <p>We believe that a highly engaged and motivated workforce is key to superior customer service. Our strength lies in our passionate, skilled, and service-focused team members who bring JetStream One’s values to life every day.</p>
     <p>Serving thousands of customers daily, our employees embody a culture of teamwork and excellence, which is evident across all stations and flights. We are also proud to house one of India’s most advanced aviation training academies, where we prepare the future of flying.</p>
     <p>JetStream One's culture is built on five core values-<strong>Always Safe, Passionately Consistent, Service from the Heart, Pride in Performance, and Unity in Purpose</strong>. Through these principles and our <strong>Fly with India</strong> initiative, we are committed to offering world-class service from the heart of India.</p>
     </div>

     <marquee>Website proudly developed and maintained by Niranjan - decided to delivering seamless performance, elegant design, and an exceptional user experience.</marquee>
     <div class="footer" id="about">
   <h5 style="color:white">© 2025 JetStream One. All Rights Reserved </h5>
   <h5 style="color:white">JetStream One | Privacy Statement | Terms of Use</h5>
   <h5 style="color:white"><a href="aboutus.php" target="_self" style="color: white">About us</a> |<a href="customersupport.php" target="_self" style="color : white"> Customer Support</a> | Policy | Media & Gallery</h5>
  </div>
</body>
</html>